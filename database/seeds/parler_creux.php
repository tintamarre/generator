<?php

use Illuminate\Database\Seeder;

class parler_creux extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $registry = \App\Registry::firstOrCreate(
      [
        'title' => "L'art du parler creux",
        'slug' => "l-art-du-parler-creux",
        'description' => "Author: Vincent de Gaulejac"
      ]
    );

    $terms_database = collect([
      [
        'name' => "L'excellence",
        'order' =>	1,
      ],
      [
        'name' => "L'intervention",
        'order' =>	1,
      ],
      [
        'name' => "L'objectif",
        'order' =>	1,
      ],
      [
        'name' => "Le diagnostic",
        'order' =>	1,
      ],
      [
        'name' => "L'expérimentation",
        'order' =>	1,
      ],
      [
        'name' => "La formation",
        'order' =>	1,
      ],
      [
        'name' => "L'évaluation",
        'order' =>	1,
      ],
      [
        'name' => "La finalité",
        'order' =>	1,
      ],
      [
        'name' => "L'expression",
        'order' =>	1,
      ],
      [
        'name' => "Le management",
        'order' =>	1,
      ],
      [
        'name' => "La méthode",
        'order' =>	1,
      ],
      [
        'name' => "Le vécu",
        'order' =>	1,
      ],
      [
        'name' => "Le recadrage",
        'order' =>	1,
      ],
      [
        'name' => "renforce",
        'order' =>	2,
      ],
      [
        'name' => "mobilise",
        'order' =>	2,
      ],
      [
        'name' => "révèle",
        'order' =>	2,
      ],
      [
        'name' => "stimule",
        'order' =>	2,
      ],
      [
        'name' => "modifie",
        'order' =>	2,
      ],
      [
        'name' => "clarifie",
        'order' =>	2,
      ],
      [
        'name' => "renouvelle",
        'order' =>	2,
      ],
      [
        'name' => "identifie",
        'order' =>	2,
      ],
      [
        'name' => "perfectionne",
        'order' =>	2,
      ],
      [
        'name' => "développe",
        'order' =>	2,
      ],
      [
        'name' => "dynamise",
        'order' =>	2,
      ],
      [
        'name' => "programme",
        'order' =>	2,
      ],
      [
        'name' => "ponctue",
        'order' =>	2,
      ],
      [
        'name' => "les facteurs",
        'order' =>	3,
      ],
      [
        'name' => "les processus",
        'order' =>	3,
      ],
      [
        'name' => "les paramètres",
        'order' =>	3,
      ],
      [
        'name' => "les changements",
        'order' =>	3,
      ],
      [
        'name' => "les concepts",
        'order' =>	3,
      ],
      [
        'name' => "les savoir-faire",
        'order' =>	3,
      ],
      [
        'name' => "les problèmes",
        'order' =>	3,
      ],
      [
        'name' => "les indicateurs",
        'order' =>	3,
      ],
      [
        'name' => "les résultats",
        'order' =>	3,
      ],
      [
        'name' => "les effets",
        'order' =>	3,
      ],
      [
        'name' => "les blocages",
        'order' =>	3,
      ],
      [
        'name' => "les besoins",
        'order' =>	3,
      ],
      [
        'name' => "les paradoxes",
        'order' =>	3,
      ],
      [
        'name' => "institutionnels",
        'order' =>	4,
      ],
      [
        'name' => "organisationnels",
        'order' =>	4,
      ],
      [
        'name' => "qualitatifs",
        'order' =>	4,
      ],
      [
        'name' => "analytiques",
        'order' =>	4,
      ],
      [
        'name' => "caractéristiques",
        'order' =>	4,
      ],
      [
        'name' => "motivationnels",
        'order' =>	4,
      ],
      [
        'name' => "pédagogiques",
        'order' =>	4,
      ],
      [
        'name' => "représentatifs",
        'order' =>	4,
      ],
      [
        'name' => "participatifs",
        'order' =>	4,
      ],
      [
        'name' => "cumulatifs",
        'order' =>	4,
      ],
      [
        'name' => "stratégiques",
        'order' =>	4,
      ],
      [
        'name' => "neuro-linguistiques",
        'order' =>	4,
      ],
      [
        'name' => "systémiques",
        'order' =>	4,
      ],
      [
        'name' => "de la performance",
        'order' =>	5,
      ],
      [
        'name' => "du dispositif",
        'order' =>	5,
      ],
      [
        'name' => "de l'entreprise",
        'order' =>	5,
      ],
      [
        'name' => "du groupes",
        'order' =>	5,
      ],
      [
        'name' => "du projet",
        'order' =>	5,
      ],
      [
        'name' => "des bénéficiaires",
        'order' =>	5,
      ],
      [
        'name' => "de la hierarchie",
        'order' =>	5,
      ],
      [
        'name' => "des pratiques",
        'order' =>	5,
      ],
      [
        'name' => "de la démarche",
        'order' =>	5,
      ],
      [
        'name' => "des acteurs",
        'order' =>	5,
      ],
      [
        'name' => "de la problématique",
        'order' =>	5,
      ],
      [
        'name' => "des structures",
        'order' =>	5,
      ],
      [
        'name' => "du méta-contexte",
        'order' =>	5,
      ]
    ]);


    foreach ($terms_database as $item) {

      $term = \App\Term::firstOrCreate([
        'name' => $item['name'],
        'order' => $item['order'],
        'gender' => null,
        'registry_id' => $registry->id,
      ]);

    }
  }
}
