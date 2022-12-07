<?php
    
    class Cast{

        public $actor_1;
        public $actor_2;
        public $actor_3;
        public $actor_4;
        public $actor_5;


        /**
         * @param String Nome e cognome
         */
        public function __construct( Actor $_actor_1, $_actor_2, $_actor_3, $_actor_4, $_actor_5)
        {
            $this->actor_1 = $_actor_1;
            $this->actor_1 = $_actor_2;
            $this->actor_1 = $_actor_3;
            $this->actor_1 = $_actor_4;
            $this->actor_1 = $_actor_5;
        }
    }
