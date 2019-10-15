<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(parler_creux::class);
        $this->call(chiens_ecrases::class);
        $this->call(discours_presidentiel::class);
        $this->call(hec::class);
        $this->call(deep_salutations::class);

    }
}
