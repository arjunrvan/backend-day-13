<?php
    require_once "../model/customer.php";
    require_once "../model/tac.php";

    function insertCustomerController() {
        $fname = getElementByName('fname').value;
        echo ($fname);

        $id = CustomerInsert($fname);

        if ($id) {
            $query = TACInsert();

            if ($query) {
                header("'../view/tac.php?id='$id");
            } else {
                // exception, error while insert (try catch)
            }
            
        } else {
            // exception, error while insert (try catch)
        }
    }

?>