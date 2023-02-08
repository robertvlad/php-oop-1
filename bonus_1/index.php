<?php

    class Movie{

        //Attributi d'istanza
        public $title;
        public $year;
        public $genres;

        //COSTRUTTORE
        public function __construct($title, $year, $genres)
        {
            $this->title = $title;
            $this->year = $year;
            $this->genres = $genres;            
        }

        //METODO STAMPA INFORMAZIONI DELLA CLASSE MOVIE
        public function getMovieInfo()
        {
            return $this->title." - ".$this->year." - ".$this->show_genres();
        }

        public function show_genres()
        {
            $genres = $this->genres;
            $genres_string = "";
            
            foreach($genres as $genre){
                $genres_string .= $genre->name." ";
            }

            return $genres_string;
        }
    }

    //CLASS GENRE
    class Genre{

        //Attributi d'istanza
        public $name;

        //COSTRUTTORE
        public function __construct($name){
            $this->name = $name;
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        
                        //Creazione istanze dei generi dei film
                        $fantasy = new Genre ("Fantasy");
                        $fantascienza = new Genre ("Fantascienza");

                        //BONUS 1 Creare un array con i generi
                        $genres = [
                            $fantasy,
                            $fantascienza
                        ];

                        $harrypotter1 = new Movie ("Harry potter e la pietra filosofale", "2001", $genres);
                        $harrypotter2 = new Movie ("Harry potter e la camera dei segreti", "2002", $genres);
                        $harrypotter3 = new Movie ("Harry potter e il prigioniero di Azkabanm", "2004", $genres);
                        $harrypotter4 = new Movie ("Harry potter e il calice di fuoco", "2005", $genres);
                        $harrypotter5 = new Movie ("Harry potter e l'ordine della fenice", "2007", $genres);
                        $harrypotter6 = new Movie ("Harry potter e il principe mezzo-sangue", "2009", $genres);
                        $harrypotter7parte1 = new Movie ("Harry potter e i doni della morte: Parte 1", "2010", $genres);
                        $harrypotter7parte2 = new Movie ("Harry potter e i doni della morte: Parte 2", "2011", $genres);

                        //Print a schermo
                        echo $harrypotter1->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter2->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter3->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter4->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter5->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter6->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter7parte1->getMovieInfo();
                        echo "<br>";
                        echo $harrypotter7parte2->getMovieInfo();
                        echo "<br>";
                    ?>                    
                </div>
            </div>
        </div>        
    </body>

    <script src=""></script>
</html>