<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>
<?php
// Uncomment the lines below one by one to see what it does

//print_r(notTypeDefined("something"));
print_r(addNumber(3,5,62,1));

//You couldn't pass a return type for this function:
function notTypeDefined($some)
{
    return "You pass this thing: ".$some;
}
//======================================================

//This function below must return a integer value:
function addNumber(int ...$value) : int //this '...' mean that you could pass any quantity of parameter
{
    return array_sum($value);
}