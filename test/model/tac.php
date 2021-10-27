<?php

    function TACInsert() {
        $sql = "Insert into TAC";

        if ('query succesful') {
            return 1;
            
        } else {
            return 0;
        }
    }

    function selectTAC ($tac,$id) {
        $sql = "select TAC";
        $tac_value = mysqli_fetch_assoc($sql);

        if ('query succesful') {
            return $tac_value;
        } else {
            return 0;
        }
    }


?>