<?php
    
    class Movie{

        public $poster;
        public $title;
        public $cast;
        public $genre;
        public $duration;


        /**
         * @param String Titolo film
         * @param String Genere film
         * @param String Durata film
         */
        public function __construct($_title, $_genre, $_duration, Cast $_cast){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->duraction = $_duration;
            $this->cast = $_cast;
        }


        public function setPoster($_img){
        $this->poster = $_img;
        }
    }
