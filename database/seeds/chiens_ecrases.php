<?php

use Illuminate\Database\Seeder;

class chiens_ecrases extends Seeder
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
           'title' => 'La rubrique des chiens écrasés',
           'slug' => 'la-rubrique-des-chiens-ecrases',
           'description' => 'Authors: Froud & Peyon'
         ]
       );

       $terms_database = collect([
         [
         'name' => "Cet employé",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Notre cher homme",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'Échevin",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet individu",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet imam",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'euro-député",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet ex-employé",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce danseur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce forcené",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce client pas comme les autres",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce demandeur d'emploi",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce Liégeois",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce supporter du Standard",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le turbulent patron",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'octogénaire",
         'gender'=> null,
         'order' => 1
         ],
         [
         'name' => "L'expert",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le prévenu",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le recteur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'ambassadeur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'ex-souverain",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le prédicateur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Notre Miss Belgique",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "L'icône planétaire du hip-hop",
         'gender'=> null,
         'order' => 1
         ],
         [
         'name' => "Le faux Elio",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le marchand de pitas",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le militaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'ado",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le patron de « L'antre du diable »",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le jeune intellectuel",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet homme extraordinaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le DJ liégeois",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le braqueur à la machette",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce tireur fou",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le médecin obsédé",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le secrétaire communal",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'antiquaire du roi",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce jeune père de famille",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le mayeur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le proxénète",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le voisin du dessous",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le propriétaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'ex-compagnon de la locataire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le proxénète",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le sexologue",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le retraité",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le détenu",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le gendre de Jacques Chirac",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le pervers machiavélique",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le quadragénaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le Casanova de la salle de sport",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet ancien étudiant en philosophie de l'ULg",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le père indigne",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce converti à l'islam",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le pasteur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce mystérieux inconnu",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le chirurgien",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le guichetier de la gare de Visé",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le jeune bellâtre au charme ravageur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le fils de Claudine",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le meilleur jockey du monde",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le trentenaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Cet assistant de pasteur protestant",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce tyrannique père de famille",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le Monsieur Loyal de l'European Circus",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le Cupidon",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le cambrioleur",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La palefrenière",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La cavalière",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La commanditaire",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Ce vétérinaire",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La veuve",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La femme de l'ex-ennemi public numéro 1",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La cambrioleuse",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La ravisseuse",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "L'un des trois hommes",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La courageuse jeune femme",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "L'échevine des travaux",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La jeune victime",
         'gender'=> null,
         'order' => 1
         ],
         [
         'name' => "Le surexcité",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "L'épouse de l'homme fraîchement condamné",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Le psychologue",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La maman",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Le chef surveillant",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La victime",
         'gender'=> null,
         'order' => 1
         ],
         [
         'name' => "La vendeuse retraitée",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La pauvre octogénaire",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Le portier liégeois",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La coqueluche des Tokyoïtes",
         'gender'=> null,
         'order' => 1
         ],
         [
         'name' => "La dame",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "L'ancien président",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La quinquagénaire",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Le faux-monnayeur pervers",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le palefrenier",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La patronne du manège",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "La patronne de l'établissement",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "L'ex-Diable Rouge",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le client mécontent",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Ce fameux étranger",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "Le sans-abri",
         'gender'=> "M",
         'order' => 1
         ],
         [
         'name' => "La Clodette noire",
         'gender'=> "F",
         'order' => 1
         ],
         [
         'name' => "Euclides Monteiro",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "un certain Abu Moussa",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Sergio",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Francisco Del Pino Girardez",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Le Postollec",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Asmir Begovic",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jorn Steinbach",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Beppe Accardi",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jérôme",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Mutlu Kizilaslan",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Eric Y.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "le Professeur Daube",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Giovanni Montresor",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Azaouaj",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "« Miss » Maggie",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Gurhan Bicici",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "un certain Paulus Meyer",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Kenneth Houdret",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Grégory",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Pascal H.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "un certain Marcel Dubois",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Giel",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Frédéric C.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Maître Montiel",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Patrick B.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Antony B.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Aurélien B. ",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Xavier Z.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Michel",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jésus",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Abdellah B.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Besik",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "DJ Flash",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jason M.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Rudy",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Dylan",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Marck D.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Dekhar",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Chokri",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "André H.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Martin E.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "un certain Kamel",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Tibor Markov",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Sekou",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Eric D.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Benoît",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Freddy (prénom d'emprunt)",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Christophe",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Younes Al-Belgiki",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Ramon",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Willy",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Emmanuel C.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "John",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Patrick G.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Catherine F.",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Catherine J.",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "NicoB",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Antonio",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Malika K.",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Sébastien B.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Youness",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jennifer",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Jocelyne",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Laetitia T.",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Eldo",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Claude",
         'gender'=> null,
         'order' => 2
         ],
         [
         'name' => "Omar",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Dany D.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Pauline",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Ignacio",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Nadine",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Youlbi",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Ljutvo S.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Gerlando",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Djeylan",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Celestino De La Mancha",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Jessalyn",
         'gender'=> "F",
         'order' => 2
         ],
         [
         'name' => "Adrian",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Benjamin G.",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "Christophe Conrard",
         'gender'=> "M",
         'order' => 2
         ],
         [
         'name' => "un immigré",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un motard",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un prestigiditateur amateur",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un indic",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un écologiste repenti",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un musulman en djelaba",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un boucher",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un proche de Belkacem",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un jongleur",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un cador du barreau",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un parricide",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une référence pour tous",
         'gender'=> null,
         'order' => 3
         ],
         [
         'name' => "un chouchou de la « Queen »",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un bonnet d'âne de la SNCB",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un hooligan",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un islamiste radical",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un sale gamin",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un alpiniste",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une victime de la crise",
         'gender'=> null,
         'order' => 3
         ],
         [
         'name' => "un nouveau venu",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "membre du Rotary",
         'gender'=> null,
         'order' => 3
         ],
         [
         'name' => "un box to box",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Sérésien",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un sans domicile fixe",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un mineur",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une terreur des pelouses",
         'gender'=> null,
         'order' => 3
         ],
         [
         'name' => "un violent sexuel",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un D.J.",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un trafiquant de drogue",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un superman",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un guerrier",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un musicien",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Jemeppien",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un pêcheur chevronné",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un adjudant au 12<sup>ème</sup> de ligne",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un joker de luxe",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un « lover boy »",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un carrossier de 41 ans",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une crème d'homme",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un pizzaïolo",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un ancien réparateur de télés pensionné",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un orthopédagogue",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un des trois braqueurs de la Fleuriste",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une bimbo",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "un architecte",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Blégnytois",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un ex-curé",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un sanglier de belle taille",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un comédien pro",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un papy surfer",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un ex-échevin hennuyer socialiste",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un carolo ",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un individu aux tendances affabulatoires et mythomaniaques",
         'gender'=> null,
         'order' => 3
         ],
         [
         'name' => "un bassiste hors pair",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Ansois",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un séducteur",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un fou furieux de bagnoles",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Ivoirien",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un homme de type « toxicomane »",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un amoureux des belles mécaniques",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un Anthisnois",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un passionné de sado-masochisme",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un étudiant aux HEC",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un grand adolescent",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un joueur de football de La Calamine",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un papa en pleine dégringolade",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un médecin généraliste",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une péripatéticienne de luxe",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "un trapéziste",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une Claviéroise",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "un jeune blouson doré",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "une Framerisoise",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "une Quaregnonnaise",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "une avocate namuroise",
         'gender'=> "F",
         'order' => 3
         ],
         [
         'name' => "un spéléologue floreffois chevronné",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un enfant habillé en cavalier",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "un ancien commercial en produits surgelés",
         'gender'=> "M",
         'order' => 3
         ],
         [
         'name' => "du Cap-Vert",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "britannique d'origine irakienne",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "d'origine étrangère",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "des Balkans méridionaux",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "du Pays Noir",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "de chez Carrefour",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "spadois",
         'gender'=> "M",
         'order' => 4
         ],
         [
         'name' => "de Jalhay",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "de Charleville-Mézières",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "d'origine ardennaise",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Morlanwelz",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "du sud du littoral adriatique croate",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "riverain du gîte « Les Prunelles »",
         'gender'=> "M",
         'order' => 4
         ],
         [
         'name' => "croate",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "d'une bonne vingtaine d'années",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "de Grâce-Hollogne",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Seraing",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "congolais",
         'gender'=> "M",
         'order' => 4
         ],
         [
         'name' => "sarde",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "d'origine iranienne ",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Vielsalm",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "débarquant d'Irlande",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "« made in Binche »",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "d'origine russe",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Minsk",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Roulers",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "de Nivelles",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "orginiaire de la région de Styrie",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Bredene",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "cubain",
         'gender'=> "M",
         'order' => 4
         ],
         [
         'name' => "d'origine cubaine",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "originaire de Flémalle",
         'gender'=> null,
         'order' => 4
         ],
         [
         'name' => "héroïnomane",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "portant une barbe",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "souffrant du syndrôme de Gilles de la Tourette",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "arbitre à ses heures",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "champion régional de catch",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "exhibitionniste",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "djihadiste",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "routeur pour la Transat Jacques Vabre",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "qui a le sang chaud",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "« logé, nourri, blanchi »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "d'une naïveté criarde",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "plutôt précoce",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "introduit par Paul Magnette",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "addict à l'alcool",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "pas bien mentalement",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "propriétaire du café « Le New Beaumont »",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "homophobe",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "accompagné de ses chiens Bo et Sunny",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "sortant d'un séjour au Petit Bourgogne",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "ivre",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "ivre et sous l'emprise de médicament",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui soutient qu'il ne se souvient pas de cette scène",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "très imbibé",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "furax",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "hyperbranché",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "sous l'emprise de stupéfiants",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "dans le besoin",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "sans convictions",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "accro à la Carlsberg",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "en vogue à Liège",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "plutôt en faveur de l'Eros Center",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "coupable de grivèlerie",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "surnommé « Cafu »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "out pour deux mois",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui avait 11 sur 10 en gym",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "soupçonné d'apartenir à la « bande aux 700 millions »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "simplement habillé d'un body blanc ultra-moulant",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "vivant seul",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "qui voulait devenir moine",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui n'a aucun antécédent judiciaire",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui a le sommeil léger",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui a des antécédents d'escroquerie",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "surnommé « El Sympathico »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "qui a tenu à rester anonyme",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "radicalisé dans la défense des musulmans",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "au parcours incroyable",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "condamné pour délit de fuite",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "en forme sur facebook",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "de renommée internationale",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "encagoulé et armé d'une machette",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé « La momie »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => " à la double vie",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "épuisé par la tension",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "au comportement antisocial",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "qui travaille dans une entreprise du coin",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "beurré comme un Petit Lu",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "distribuant des mandales à tour de bras",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "dont la santé de plus en plus précaire alimente les rumeurs d'abdication",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "poussé à bout psychologiquement",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé « le prédateur des plaines de jeux »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "vivant dans un squat",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "surnommé « Toumi »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "connu comme Barabas",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "ivre de rage",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "bien connu pour des faits similaires",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "affectueusement surnommé « Papouille »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé « l'ennemi salamiste »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "en séjour illégal",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "venu en Belgique y travailler au noir",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "privé d'activité physique",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "coiffeur à Dolhain-Limbourg",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "armé d'un grand couteau",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "plus connu sous le surnom « le soumis »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "de « bonne famille »",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "issu d'une famille « parfaitement intégrée »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "aveugle à quasi '100%'",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "100% liégeois",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "en tournage à Liège Airport",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "plutôt propre sur lui",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "chaussé de pantoufles usées",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé « le Vettel du turf »",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "un peu trop tactile",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "souffrant de troubles du contrôle et d'impulsions exhibitionnistes",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "d'apparence tranquile",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "surnommée Madame pipi",
         'gender'=> "F",
         'order' => 5
         ],
         [
         'name' => "qui avait, malgré son jeune âge, un fameux casier judiciaire",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "les bras entravés par des menottes",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "bien connu de la justice liégeoise pour plusieurs faits délictueux",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "qui circulait à bord d’une berline immatriculée en Allemagne",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "trop couvé par ses parents",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "enceinte jusqu'au yeux",
         'gender'=> "F",
         'order' => 5
         ],
         [
         'name' => "très rancunier",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "droit et humain à la fois",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "souffrant d’une violente crise de goutte",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "de forte corpulence",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "ses grands yeux remplis de larmes",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "incontinente",
         'gender'=> "F",
         'order' => 5
         ],
         [
         'name' => "en djellaba",
         'gender'=> null,
         'order' => 5
         ],
         [
         'name' => "handicapé à plus de 80%",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé \"papy\"",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "surnommé \"papy\"",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "dépendant à l'alcool et aux comportements extrêmes",
         'gender'=> "M",
         'order' => 5
         ],
         [
         'name' => "serait décédé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait trépassé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "est décédé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait trépassé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait tué la femme de Bernard Wesphael",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait battu Anderlecht",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait fondé une ASBL",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait montré son sifflet à ses collègues",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait volé des câbles",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait eu le mal de mer",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a été sélectionné pour l'Eurovision",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été sanctionné pour insalubrité",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'aurait offert le Goncourt",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait converti à l'islam",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "voulait épouser William",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait testé les speculoos",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait carrément pété une durite",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait retrouvé la Champions League",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait soulagé son genou",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "serait mort d'épouvante ",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été retrouvé et rapatrié",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait découvert les restes de Nenad Culic",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait publié une <i>sextape</i>",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait acheté une boîte d'Apéricubes",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "serait rentré du Colruyt",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait vu un champignon couvert de mousse au fond de la boîte",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait fait le tour de la question",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait fait charger par un cerf",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a fêté ses 70 ans",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait visité un bordel brésilien",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait manqué d'oxygène",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait reçu des balles dans son appareil génital",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait isolé en tête de la tranchée",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait éborgné un gardien de prison",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est déguisée en Maggie De Block",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "aurait harcelé son ex-compagne",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait voulu « casser du pédé »",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait fait tuer en pleine nuit de plusieurs coups de masse sur la tête",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait reconnu mardi pour la première fois avoir fumé du crack",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "pensait épouser le premier ministre",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "carressait ses stagiaires",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "carressait les fesses des jeunes pour les sortir du sommeil",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait tabassé un infirme moteur cérébral qu'il avait pris pour un voleur",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été victime de pratiques dégradantes et humiliantes",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été obligé de ramasser ses excréments",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait séquestré un septuagénaire",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "sera le parrain du Téléthon",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "n'ira pas téléphoner à Mourinho",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait retrouvé en pyjama",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait cru à l'explosion de sa chaudière",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été honoré par le pape François",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait façonné 25.000 boulons",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait tagué illégalement le mur d'un hôtel désaffecté",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait voulu rentrer dans son hôtel",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a reçu le grade prestigieux de Grand-Croix de l'Ordre de Saint-Grégoire-le-Grand",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait épousé le fameux philosophe et théologien Dietrich von Hildrebrand",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "« se serait ravisé »",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => " aurait enlevé sa cagoule et payé ses cigarettes",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait pris la poudre d'escampette",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait été puni par José Mourinho",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait cristallisé la haine",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait cambriolé une boutique de lingerie",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "aurait rejoint les rangs de la rébellion syrienne",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait vendu pour plus de 10 millions d'actions",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait pensé à toutes les composantes du dossier",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait voulu voir la reine Mathilde",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait fumé un joint en direct",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait craqué pour Samantha",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est vu offrir de la terre venant des champs de bataille de 14-18",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "organiserait des transports de mitraille entre Anvers et Istanbul",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait jeté des tomates à la tête de Willem-Alexander",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'est laissé aller à une petite danse",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a vu sortir un petit ver blanc de la friandise",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'attaquait par ruse aux personnes âgées",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait carressé les fesses de sa victime",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait ligoté son employé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait motivé une jeune fille à s'adonner à la prostitution",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait mis ses menaces à exécutions en avalant un Dafalgan",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait décidé de faire justice seul",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a fait une bien étrange découverte",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "est poursuivi pour exploitation de la débauche",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "est retombé lamentablement sur ses congénères",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a écrit à Saint-Nicolas",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "était absent au Te Deum",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a dévoilé sa vie et son intimité",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "est assigné à résidence pour avoir vendu une horloge sur internet",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait reçu un coup de couteau dans la fesse",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait fait empoigner les organes génitaux par Freddy Tanghe",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "évangélisait les Inuits",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'est exilé dans le but de convertir les Inuits au christianisme",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => " va s’occuper des fesses de Guillaume Gallienne",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "enquêtait sur un dossier très sensible impliquant de nombreux politiques",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait joué au Bingo pendant la journée et avait consommé de la cocaïne",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a fait irruption des bois et a traversé la chaussée",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a été pris en charge par une ambulance Courtois",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "vivait à côté de son mari mort depuis un an",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait volé le cerveau de son frère",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a coursé les voleurs de son ordinateur",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "préfère les modèles à clapet",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a aperçu deux loups",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "utilise la peinture comme thérapie",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avoue avoir participé à la confection d'un faux facturier",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "aurait carrément bouté le feu à l'appartement de sa mère",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "réalisait, sur certaines patiente, une palpation des seins",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "est mort tué à coups d'haltère",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a vu sa vie défiler à la vitesse grand V",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est une fois de plus retrouvé sur le billard",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a surpris son voisin qui déambulait nu dans sa maison",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a mis aux enchères sa virginité",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a pris ses jambes à son cou",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a carrément participé à la course de double sulky",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a connu des moments délicats",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est transformé en torche humaine",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'est réfugié à la gendarmerie",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "attend de recevoir son billet d'écrou",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "jouait dans « Sarbacanne » un tribute de Francis Cabrel",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "est en conflit depuis plus de trois ans avec la commune de Fleurus à propos d'un problème d'égouttage",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "ferait l'objet d'une mesure de méfiance constructive",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait décidé d'organiser des cars de supporters pour soutenir Gaël en live",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'enfuyait du Carré",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "contestait avoir volontairement donné la mort",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se serait coincé un distributeur de papier WC dans le derrière",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "filmait ses ébats",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "n'a pas pris ses victimes par surprise",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "recevra un oeuf cuit dur à la place du Maredsous",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "pourrait faire l'impasse sur les sauces",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "fera ronronner sa voiture en hommage à Paul Walker",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a été opéré de la prostate",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "dort dehors",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait comparé un simple gant de toilette roulé à une « creppe au zizi »",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "était tombé par inadvertance sur un film porno",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a reçu un violent coup de tesson",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "innove en proposant des figurines de Père Noël qu'on peut fourrer",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "titubait sous l'effet de l'alcool",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "ne tenait quasi plus debout",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "n'a en réalité jamais cessé de « prêcher »",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a distribué des billets de 20 euros",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "voulait partager un héritage dont il n'avait pas besoin",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait postulé pour un emploi d'ouvrier communal",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "se rendait en ville pour acheter un sapin de Noël",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a décidé de lâcher son boulot de réparateur télé pour s'investir à plein temps dans sa passion",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est jeté sur un steak et des frites",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a passé pas mal de coups de fil à ses proches",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a dégusté",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a été surpris par la présence d'un mouton",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a pris le taureau par les cornes",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "était tout simplement en prison",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait été placé sous mandat d'arrêt pour une série de casses",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait semé la terreur",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait un très urgent besoin de liquidité",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => " avait apparemment des problèmes d’alcool, de drogue et d’argent",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est réveillé de bon matin",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a attrapé une grippe intestinale",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a tué son ex-belle-mère",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "est passé à deux doigts d'une inculpation pour recel de cadavre",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "n'avait pas consulté un psy",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "crie son innocence",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "palpait les seins de ses patientes",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "disait s'être acharné pour être perfomant",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a trouvé un ver dans son Shokobon",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "fuit la Hongrie communiste et s'installe à Bruxelles",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a comparu devant le tribunal correctionnel de Liège pour avoir uriné sur son épouse",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a été tabassé dans sa chambre",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait déjà fait l'objet d'une condamnation pour coups et blessures",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "circulait dans une BMW arborant des plaques volées",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a nié tout en bloc",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est enfui menotté... et court toujours",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a bousculé un inspecteur de police avant de prendre la fuite à pied",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "avait dû s’enfermer pour éviter de servir de punching ball",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a été chargé par derrière par un taureau excité",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "est entré dans un box de 30 taureaux de 300 kg",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a connu une mésaventure traumatisante",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "était en coma éthylique, portant des traces de coups, quand ses parents l'ont retrouvé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait bu trop de vodka",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s’est mis à insulter le juge Snyers, le traitant de tous les noms d’oiseaux, et lui faisant entre autres un doigt d’honneur",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "n’était plus qu’à moins d’un mètre du juge",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a voulu s'interposer",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a bouté le feu à son immeuble à trois reprises",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "n'a jamais cessé de fréquenter Véronique",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a glissé dans l'eau froide",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "s'est déguisé en Maggie De Block",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a été prise en charge par une ambulance Courtois",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "a été sélectionnée pour l'Eurovision",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "a été surprise par la présence d'un mouton",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "a été tabassée dans sa chambre",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "aurait été honorée par le pape François",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "aurait été obligée de ramasser ses excréments",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "aurait été retrouvée et rapatriée",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "dit avoir été complètement piégée",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "a été faire ses courses à Maastricht",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "était exploitée comme une esclave",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "se demandait lui-même s’il n’allait pas faire son coming out",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => " a été déférée lundi au parquet de Liège pour avoir lancé un fer à repasser sur la tête de son mari",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "est morte étouffée par du salami",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "a pu rapidement rentrer chez lui",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "avait été blessée au genou",
         'gender'=> "F",
         'order' => 6
         ],
         [
         'name' => "n'avait pu ni se défendre, ni rétorquer",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "avait été placé en pouponnière quand il était bébé",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "s'était fait livrer 7.000 euros de foie gras, 120 homards et du champagne",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "a refusé de comparaître à la première audience de son procès",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "était claviériste dans un groupe de rock, les Golden Gods,",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "a sauvé un poney",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "voulait ouvrir un compte sans carte d'identité",
         'gender'=> null,
         'order' => 6
         ],
         [
         'name' => "est suspecté d’avoir brisé la vitre de la maison de la victime dans le but de la menacer",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "était poursuivi pour violence ayant entraîné une mutilation et une infirmité permanente",
         'gender'=> "M",
         'order' => 6
         ],
         [
         'name' => "dans un accident de tracteur",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur un parking forestier",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un détournement de car",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans la forêt des Epioux",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sous la surveillance étroite de la sureté de l'État",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur le chantier de l'E42",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en escaladant le mont Ushba ",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec des légumes congelés",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en la frappant avec une planche de WC",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec des fleurs",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans ce parc de Liège connu pour être un lieu de dragues entre hommes",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec sa propre canne",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec un extincteur",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un caddy",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur sa poussette ",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "durant sa nuit passée au cachot",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => " avec sa petite culotte",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur le barrage de La Gileppe",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au four à vulcanisation",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans la zone touristique de Rio de Janeiro",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec des prostituées",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "lors d'un dîner de gala",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec une carte bancaire",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans les tribunes alors que son équipe dispute un match de Ligue des Champions",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en titubant",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec une bonbonne de plongée",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec une ceinture d'explosifs",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec une serpette",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "lors des grandes vacances",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "grâce à Internet",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en compagnie du DJ néerlandais Afrojack",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec « Little Britney », une naine dans une tenue en latex",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en bikini couleur chair",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur un rythme endiablé",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "pour une raison encore indéterminée",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à la caisse automatique",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans la cave de son snack",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans une caravane",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans le panier à salade",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un snack-pita de la rue des Nations-Unies",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur les hauteurs de Seraing",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "non loin de l'athénée de l'Air Pur",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "abandonnant au passage une partie de son butin",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans le milieu sadomasochiste liégeois",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "alors que la campagne de récolte des chicorées battait son plein",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à la raffinerie d'Oreye",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au Bay-Bonnet",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un studio de verre",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à la 12ème édition de Wings and Wheels",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "pour le tournage du clip de POGOPOGO",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec un fusil à pompe",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un commerce de nuit",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au dancing l'Alhambra",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "pour soulager son pied meurtri",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au casino de Cannes",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à cause des pandas",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans le zoning d'Alleur",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "devant le passage à niveau de Colonster",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avant de monter à Lantin",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans un squat communiste à Brixton",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au bowling de Tilff",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur écran géant",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en brandissant sa canne",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "« au mauvais endroit »",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "au mauvais moment",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "lors du troisième Salon du Testament à Bruxelles",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "afin de mettre en exergue le sort des invalides de guerre",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à l'insu de ses multiples conquêtes",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec l'argent que lui donnent ses amis protestants",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sur le parking du Cora",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à l'aide de ses moignons",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à l'hôtel Mondo",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "via Jean-Luc Fonck",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "en habit de Rio",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à cause des crocodiles trouvés chez lui",
         'gender'=> "M",
         'order' => 7
         ],
         [
         'name' => "au hall des sports de « La Préale »",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "à Herstal",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec un sac contenant deux carabines et des objets nazis",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "menottes aux poignets",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "sous le regard impassible de sa maman",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "les larmes ruisselant sur sa moustache",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "après une dispute houleuse au sein du domicile conjugal",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec un pied-de-biche",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "malgré son jeune âge",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "juste parce qu'il \"aime bien collectionner les vieux objets\"",
         'gender'=> "M",
         'order' => 7
         ],
         [
         'name' => "après avoir asséné un coup de poing dans la figure d’un arbitre de football",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "lors d’une rencontre du championnat de la Royale intercorporation liégeoise, qui opposait l’AC Mehagne et l’Innovation Friddi",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "dans une ferme de Remicourt",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "alors que sa fillette de 9 ans attendait dans le couloir",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "alors qu'il tentait de récupérer un ballon de foot",
         'gender'=> "M",
         'order' => 7
         ],
         [
         'name' => "alors qu'elle tentait de récupérer un ballon de foot",
         'gender'=> "F",
         'order' => 7
         ],
         [
         'name' => "à cause des crocodiles trouvés chez elle",
         'gender'=> "F",
         'order' => 7
         ],
         [
         'name' => "juste parce qu'elle \"aime bien collectionner les vieux objets\"",
         'gender'=> "F",
         'order' => 7
         ],
         [
         'name' => "au fond de la Grotte Lucienne",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec un couteau à jambon fumé",
         'gender'=> null,
         'order' => 7
         ],
         [
         'name' => "avec une violence inouïe",
         'gender'=> null,
         'order' => 7
         ],
       ]);


       foreach ($terms_database as $item) {

         $term = \App\Term::firstOrCreate([
           'name' => $item['name'],
           'order' => $item['order'],
           'gender' => $item['gender'],
           'registry_id' => $registry->id,
         ]);

       }
     }
   }
