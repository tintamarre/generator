<?php

use Illuminate\Database\Seeder;

class discours_presidentiel extends Seeder
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
        'title' => "Discours présidentiel français",
        'slug' => 'discours-presidentiel-francais',
        'description' => 'Author: Vu sur MediaPart'

      ]
    );
    
    $terms_database = collect([
      [
        'name' => "La montée des partis extrémistes",
        'order' => 1
      ],
      [
        'name' => "Notre malaise dans la situation occidentale",
        'order' => 1
      ],
      [
        'name' => "L'accentuation des grandes migrations",
        'order' => 1
      ],
      [
        'name' => "Le succès des démagogues",
        'order' => 1
      ],
      [
        'name' => "La démographie mondiale",
        'order' => 1
      ],
      [
        'name' => "Le réchauffement climatique",
        'order' => 1
      ],
      [
        'name' => "Le nouvel ordre international",
        'order' => 1
      ],
      [
        'name' => "Le terrorisme islamique",
        'order' => 1
      ],
      [
        'name' => "Le changement technologique",
        'order' => 1
      ],
      [
        'name' => "L'intelligence artificielle",
        'order' => 1
      ],
      [
        'name' => "Le capitalisme ultralibéral et financier",
        'order' => 1
      ],
      [
        'name' => "Le primat du court terme",
        'order' => 1
      ],
      [
        'name' => "L'avidité de quelques-uns",
        'order' => 1
      ],
      [
        'name' => "provoque",
        'order' => 2
      ],
      [
        'name' => "explique",
        'order' => 2
      ],
      [
        'name' => "aide à comprendre",
        'order' => 2
      ],
      [
        'name' => "conditionne",
        'order' => 2
      ],
      [
        'name' => "amplifie",
        'order' => 2
      ],
      [
        'name' => "modifie",
        'order' => 2
      ],
      [
        'name' => "mobilise",
        'order' => 2
      ],
      [
        'name' => "renforce",
        'order' => 2
      ],
      [
        'name' => "stimule",
        'order' => 2
      ],
      [
        'name' => "révèle",
        'order' => 2
      ],
      [
        'name' => "renouvelle",
        'order' => 2
      ],
      [
        'name' => "programme",
        'order' => 2
      ],
      [
        'name' => "ponctue",
        'order' => 2
      ],
      [
        'name' => "l'émotion",
        'order' => 3
      ],
      [
        'name' => "la douleur",
        'order' => 3
      ],
      [
        'name' => "la colère",
        'order' => 3
      ],
      [
        'name' => "la souffrance",
        'order' => 3
      ],
      [
        'name' => "la perplexité",
        'order' => 3
      ],
      [
        'name' => "la détermination",
        'order' => 3
      ],
      [
        'name' => "l'action",
        'order' => 3
      ],
      [
        'name' => "l'expression",
        'order' => 3
      ],
      [
        'name' => "l'animation",
        'order' => 3
      ],
      [
        'name' => "la réflexion",
        'order' => 3
      ],
      [
        'name' => "la déconnexion",
        'order' => 3
      ],
      [
        'name' => "la folie",
        'order' => 3
      ],
      [
        'name' => "la déception",
        'order' => 3
      ],
      [
        'name' => "intense",
        'order' => 4
      ],
      [
        'name' => "poignante",
        'order' => 4
      ],
      [
        'name' => "profonde",
        'order' => 4
      ],
      [
        'name' => "significative",
        'order' => 4
      ],
      [
        'name' => "inexplicable",
        'order' => 4
      ],
      [
        'name' => "singulière",
        'order' => 4
      ],
      [
        'name' => "particulière",
        'order' => 4
      ],
      [
        'name' => "déstabilisatrice",
        'order' => 4
      ],
      [
        'name' => "fertile",
        'order' => 4
      ],
      [
        'name' => "participative",
        'order' => 4
      ],
      [
        'name' => "cumulative",
        'order' => 4
      ],
      [
        'name' => "caractéristique",
        'order' => 4
      ],
      [
        'name' => "qualitative",
        'order' => 4
      ],
      [
        'name' => "de la population",
        'order' => 5
      ],
      [
        'name' => "des plus fragiles",
        'order' => 5
      ],
      [
        'name' => "des retraités modestes",
        'order' => 5
      ],
      [
        'name' => "des gens",
        'order' => 5
      ],
      [
        'name' => "des individus",
        'order' => 5
      ],
      [
        'name' => "des Gilets jaunes",
        'order' => 5
      ],
      [
        'name' => "des mères de famille",
        'order' => 5
      ],
      [
        'name' => "de tous les jours",
        'order' => 5
      ],
      [
        'name' => "de tout le monde",
        'order' => 5
      ],
      [
        'name' => "des plus engagés",
        'order' => 5
      ],
      [
        'name' => "du quotidien",
        'order' => 5
      ],
      [
        'name' => "de la foule haineuse",
        'order' => 5
      ],
      [
        'name' => "des plus vulnérable",
        'order' => 5
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
