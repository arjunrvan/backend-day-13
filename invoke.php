<?php
    $studentList = ['Amir','Fikri','Hafiy'];

    class invoke {
        public $studentList;

        
    }

    class student {
        public $name;

        public function setName ($name) {
            $this->name = $name;
        }

        public function getName () {
            return $this->name;
        }
    }

    // $person = new student;
    // $person->setName('Arjun');
    // echo $person->getName();

    class bag {
        public $type;

        protected function setType ($type) {
            $this->type = $type;
        }

        protected function getType () {
            return $this->type;
        }
    }

    class colour extends bag {
        public $colour;

        public function setColour ($colour) {
            $this->colour = $colour;
        }

        public function getColour () {
            return $this->colour;
        }
    }

    // class colour extends bag {
    //     public $colour;
    //     public function echoStatement() {
    //         echo getName()."has a".getColour()."bag";
    //     }
    // }

    // $amir = new colour;
    // $amir.student->setName('Amir');
    // $amir->setColour('black');
    // $amir->echoStatement();

    




    




?>