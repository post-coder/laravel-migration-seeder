<?php

namespace Database\Seeders;

// questo import DEVE essere presente, VS Code lo inserirà in automatico quando vede che stiamo utilizzando la classe
// ma in caso non  lo facesse dobbiamo inserirlo noi
use App\Models\Movie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// questa riga dobbiamo aggiungerla noi
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // array di film
        for($i = 0; $i < 100; $i++) {

            // creiamo un'istanza della classe film (nuova riga)
            $newMovie = new Movie();
    
            $newMovie->title = $faker->city();
            $newMovie->description = $faker->emoji() . $faker->paragraph();
    
            // una volta che compiliamo i campi dobbiamo salvare la riga per applicare le modifiche
            $newMovie->save();
        }

    }
}
