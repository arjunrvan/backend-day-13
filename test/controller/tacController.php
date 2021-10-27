<?php
    require_once "../model/customer.php";
    require_once "../model/tac.php";

    function TACMatching($id) {
        $tac = getElementByName('tac').value;

        $actualTAC = SelectTAC($tac,$id);

        if ($actualTAC) {
            // match tac
            if ($actualTAC == $tac) {
                header ("scan.php");

            } else {
                header("'tac.php?info=error&tac='$tac");
            }
        }
    }

?>