<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
  protected $fillable = [
    'title',
    'description'

  ];

  public function terms()
  {
    return $this->hasMany('\App\Term');
  }

  public function isUnique($slug) {
    if($this->whereSlug($slug)->get()->count() >= 1){
      return true;
    } else{
      return false;
    }
  }

  public function getUniqueSlug($title) {

    $slug = \Str::slug($title);

    if($this->isUnique($slug)){
      $slug = $slug . substr(md5(microtime()),rand(0,26),5);
    }

    return $slug;
  }

  public function MaxCombination()
  {
    $maxCombination = 1;
    $terms = $this->terms()->get();
    foreach ($terms->groupBy('order') as $grouped_terms) {
      $maxCombination = $grouped_terms->count() * $maxCombination;
    }
    return number_format($maxCombination, 0, '.', ' ');
  }

  public function findQuote($permalink)
  {
    $quote = '';
    foreach (explode('-', $permalink) as $id) {
      $term = \App\Term::find($id)->name;
      $quote .= $term . " " ;
    }

    return $quote;
  }

  public function randomQuoteLink()
  {
    $permalink = collect();

    $ar = ['M', 'F'];
    $random_gender = $ar[array_rand($ar)];

    $max = $this->hasMany('\App\Term')->max('order');

    for ($i=1; $i <= $max; $i++) {
      $term = $this->hasMany('\App\Term')
      ->whereOrder($i)
      ->inRandomOrder(mt_rand())
      ->where(function ($query) use ($random_gender) {
        $query->where('gender', $random_gender)
        ->orWhereNull('gender');
      })
      ->firstOrFail();

      $permalink->push($term->id);
    }

    return $permalink->implode('-');
  }

}
