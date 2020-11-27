<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>
<?php

// Uncomment the lines below one by one to see what it does

//print_r(noParam());
//print_r(paramNotDefined("Hello", "Thursday"));
//print_r(definedParams());
//print_r(paramByReference());
//print_r(changeAge());

//It's a function without param
function noParam()
{
    echo "<br>";
    return "Hello World";
}
//========================================================================
//It's a function with params but, it's not already defined on function
function paramNotDefined($greeting, $dayOfweek)
{
    echo "<br>";
    return $greeting." ".$dayOfweek;
}

//========================================================================
//It's a function with defined default params
function definedParams($greeting = "Good Morning!")
{
    echo "<br>";
    return $greeting; //You can change it when you're calling the function
}
//========================================================================
//Passing value by reference
function paramByReference()
{
    $value = 10;

    function changeValue(&$valueParam) //You must use the '&' to pass it by reference
    {
        $valueParam += 50;
        return $valueParam;
    }

    changeValue($value);

    return $value;
}

//Ex:
function changeAge()
{
    $person = [
        'name' => 'Marcos',
        'age' => 21
    ];

    foreach($person as &$value){
        if(is_integer($value)){
            return $value += 10;
        }
    }
}


