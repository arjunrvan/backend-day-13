<?php
    class hq {

        public function getItem () {
            echo "Errand boy gathers ". $this->itemList[0].", ".$this->itemList[1]." and ".$this->itemList[2].".<br>";
        }
    }

    class shop extends hq {
        public $itemList;

        function __construct ($itemList) {
            $this->itemList = $itemList;
        }

        public function buyItem ($itemList) {
            $this->itemList = $itemList;
            echo $this->name." buys ". $this->itemList[0].", ".$this->itemList[1]." and ".$this->itemList[2].".<br>";
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

    $speedmart = new shop(['shoes','flour','sugar']);
    $speedmart->getItem();
    $arjun = new person ('Arjun');
    $arjun->buyItem(['shoes','flour','sugar']);

?>