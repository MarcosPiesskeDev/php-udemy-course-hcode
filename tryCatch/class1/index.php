<?php

/*
try {
    throw new Exception("We've some problem", 500);
}catch(Exception $e){
    echo json_encode([
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ]);
}
*/

function verifyName($name)
{
    if(empty($name)){
        throw new Exception("It's not found any name here", 404);
    }

    echo ucfirst($name)."<br>";
}

try{
    
    verifyName("Someone");
    verifyName("");

}catch(Throwable $t){ //You coul use Exception as well, but l prefer Throwable
    
    echo $t->getMessage();

}finally{
    echo "<br>";
    echo "It'll be called anyway";
}