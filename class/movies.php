<?php
    
    class Movie{

        public $poster;
        public $title;
        public $actors;
        public $genre;
        public $duration;


        /**
         * @param String Titolo film
         * @param String Genere film
         * @param String Durata film
         */
        public function __construct($_title, $_genre, $_duration, Actors $_actors = null){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->duraction = $_duration;
            $this->actors = $_actors;
        }


        public function setPoster($_img){
        $this->poster = $_img;
        }
    }
