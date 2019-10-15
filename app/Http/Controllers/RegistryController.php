<?php

namespace App\Http\Controllers;

use App\Registry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistryController extends Controller
{
  public function __construct()
  {
  }

  public function permalink($registry_id, $permalink) {

    $registry = Registry::findOrfail($registry_id);
    $quote = $registry->findQuote($permalink);

    return view('registry.permalink', compact(
      'registry',
      'quote',
      'permalink'
    )
  );
  }

  public function create()
  {
    return view('registry.create');
  }

  public function store(Request $request)
  {
    $registry = new Registry;
    $registry->fill($request->all());
    $registry->slug = $registry->getUniqueSlug($registry->title);
    $registry->save();

    return redirect()->route('dashboard');
  }

  public function edit($registry_id)
  {
    $registry = Registry::with('terms')->findOrfail($registry_id);

    return view('registry.edit', compact('registry'));
  }


}
