<?php
    
    class Actor{

        public $name;
        public $role;


        /**
         * @param String Nome e cognome
         * @param String Ruolo film
         */
        public function __construct($_name, $_role)
        {
            $this->name = $_name;
            $this->role = $_role;
        }
    }
