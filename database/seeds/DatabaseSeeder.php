<?php

use Illuminate\Database\Seeder;
use App\Comic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Richiamo i dati dal file comics.php all'interno della cartella config
        $comics = config("comics");

        // Ciclo per popolare la tabella del mio DB
        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $newComic->save();

        }
    }
}
