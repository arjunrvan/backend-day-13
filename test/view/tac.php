<?php require_once "../controller/CustomerController.php";
    $id = $_REQUEST['id'];
?>

<label>Enter TAC</label>
<input type="text" name="fname">

<button onclick="TACMatching($id)"></button>

<?php
if ($_REQUEST['info'] == 'error') {
    }
?>