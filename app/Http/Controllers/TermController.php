<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Term;
use App\Registry;


class TermController extends Controller
{

  public function edit($registry_id, $term_id)
  {
    $term = Term::findOrfail($term_id);

    return view('registry.terms.edit', compact('term'));
  }

  public function update($registry_id, $term_id, Request $request)
  {
    $term = Term::findOrfail($term_id);
    $term->fill($request->all());
    $term->save();

    return redirect()->route('registry.edit', $term->registry_id);
  }

  public function create($registry_id)
  {
    $registry = Registry::find($registry_id);

    return view('registry.terms.create', compact('registry'));
  }
  public function store(Request $request)
  {
    $term = new Term;
    $term->fill($request->all());
    $term->save();

    return redirect()->route('registry.show', [$registry_id]);
  }


}
