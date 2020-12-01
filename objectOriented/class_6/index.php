<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

require_once 'Document.php';

$doc = new Cpf();

$doc->setNumber('124413525-55');

$doc->check();