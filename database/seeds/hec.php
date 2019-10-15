<?php

use Illuminate\Database\Seeder;

class hec extends Seeder
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
        'title' => 'Le discours du commercial',
        'slug' => 'hec-discourse',
        'description' => ''
      ]
    );


    $terms_database = collect([
      [
        'name' => "La startup",
        'order' => 1
      ],
      [
        'name' => "L'entrepreneur",
        'order' => 1
      ],
      [
        'name' => "Le candidat repreneur",
        'order' => 1
      ],
      [
        'name' => "L'actionnaire",
        'order' => 1
      ],
      [
        'name' => "Les channels de vente",
        'order' => 1
      ],
      [
        'name' => "Le customer segment",
        'order' => 1
      ],
      [
        'name' => "Les partners",
        'order' => 1
      ],
      [
        'name' => "La vision",
        'order' => 1
      ],
      [
        'name' => "L'emailing",
        'order' => 1
      ],
      [
        'name' => "L'attrition",
        'order' => 1
      ],
      [
        'name' => "Le turnover",
        'order' => 1
      ],
      [
        'name' => "La consultance",
        'order' => 1
      ],
      [
        'name' => "Le business-dev",
        'order' => 1
      ],
      [
        'name' => "Le CTO",
        'order' => 1
      ],
      [
        'name' => "rassure",
        'order' => 2
      ],
      [
        'name' => "concrétise",
        'order' => 2
      ],
      [
        'name' => "improve",
        'order' => 2
      ],
      [
        'name' => "conclut",
        'order' => 2
      ],
      [
        'name' => "performe",
        'order' => 2
      ],
      [
        'name' => "en challengeant",
        'order' => 3
      ],
      [
        'name' => "en augmentant",
        'order' => 3
      ],
      [
        'name' => "en pivotant",
        'order' => 3
      ],
      [
        'name' => "en coachant",
        'order' => 3
      ],
      [
        'name' => "la co-construction",
        'order' => 4
      ],
      [
        'name' => "le participative design",
        'order' => 4
      ],
      [
        'name' => "sa super-structure",
        'order' => 4
      ],
      [
        'name' => "sa customer-relations",
        'order' => 4
      ],
      [
        'name' => "ses ressources",
        'order' => 4
      ],
      [
        'name' => "son capital",
        'order' => 4
      ],
      [
        'name' => "sa value-propositon",
        'order' => 4
      ],
      [
        'name' => "ses contacts B2C",
        'order' => 4
      ],
      [
        'name' => "son churn-rate",
        'order' => 4
      ],
      [
        'name' => "ses clients B2B",
        'order' => 4
      ],
      [
        'name' => "ses prospects",
        'order' => 4
      ],
      [
        'name' => "ses partners",
        'order' => 4
      ],
      [
        'name' => "sa vision courte, moyen et long terme",
        'order' => 4
      ]
    ]);


    foreach ($terms_database as $item) {

      $term = \App\Term::firstOrCreate([
        'name' => $item['name'],
        'order' => $item['order'],
        'registry_id' => $registry->id,
      ]);

    }
  }
}
