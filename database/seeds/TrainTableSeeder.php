<?php

use Illuminate\Database\Seeder;
use App\Model\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->azienda = 'italo';
        $train->stazione_di_partenza = 'Catanzaro';
        $train->orario_di_partenza = '2019-02-26 11:18:26.000000';
        $train->orario_di_arrivo = '2019-02-26 23:18:26.000000';
        $train->codice_treno = '164266';
        $train->numero_carrozze = 5;
        $train->in_orario = 1;
        $train->cancellato = 0;

        $train->save();
    }
}
