<?php
//Command Injection

//Verify if there's some data comes from form by POST method
if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    //--Saving command by input into variable--
    //$fromData = $_POST["cmd"];

    //--Using 'escapeshellcmd' you can block commands comming by injection:--
    $fromData = escapeshellcmd($_POST['cmd']);

    $command = system($fromData, $returnVal);
}


?>

<form method="post">
    <input type="text" name="cmd"/>
    <input type="submit" name="submit" value="Send"/>
</form>