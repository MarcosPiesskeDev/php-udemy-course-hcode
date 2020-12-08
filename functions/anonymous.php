<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>
<?php
// Uncomment the lines below one by one to see what it does

//callbackEx();


//Calling function using callback, It means that has a function inside this function that called the return by 
//parameter from other new anonymous function 
function callbackEx()
{
    function test($callback)
    {
        $callback();//Anonymous function is passed by parameter
    }
    
    return test(function(){
        echo "Final";
    });
}


//===============================================
//Using a variable to save function's return
$fn = function($a){
    return $a;
};

echo $fn("Hello");
