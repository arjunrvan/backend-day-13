<?php

    class shop {
        public $itemList;

        public function buyItem ($itemList) {
            echo $this->name." buys ". $itemList[0].", ".$itemList[1]." and ".$itemList[2].".<br>";
        }
    }

    class person extends shop {

        public $name;

        function __construct ($name){
            $this->name = $name;
        }
    }

    $kevin = new person ('Kevin');
    $kevin->buyItem(['milk','eggs','bread']);
    $fikri = new person ('Fikri');
    $fikri->buyItem(['soap','newspaper','water']);

?>