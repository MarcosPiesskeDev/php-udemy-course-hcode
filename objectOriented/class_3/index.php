<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

require_once 'Document.php';

$cpf = new Document();

//There's an method static that verify if this cpf is valid, if not, it will show an exception.
$cpf->setNumber('310.690.600-62');

var_dump($cpf->getNumber());