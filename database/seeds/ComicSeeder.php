<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elencoUscite = config('comics');
        foreach ($elencoUscite as $uscita){
            $newComic = new Comic();

            $newComic->title = $uscita['title'];
            $newComic->description = $uscita['description'];
            $newComic->thumb = $uscita['thumb'];
            $newComic->price = $uscita['price'];
            $newComic->series = $uscita['series'];
            $newComic->sale_date = $uscita['sale_date'];
            $newComic->type = $uscita['type'];

            $newComic->save();

        }
    }
}
