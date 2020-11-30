<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

class Person
{

    public $name;

    public function speak()
    {
        return "My name is ".$this->name;
    }
}

$someone = new Person();

$someone->name = "Someone";
echo $someone->speak();