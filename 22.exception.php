<?php
    // try{
    //     throw new Exception("Error message", Code);
    // }catch(Exception $exception){            // throw + exception
    //     statement;
    // }finally{
    //     statement;
    // }


    try{
        // echo "Hello Mello";
        throw new Exception("<b style='color: red'>Warning</b>: include_once(./template/gg.php): Failed to open stream: No such file or directory in ", 2001);
    }catch(Exception $e){
        echo "Error Code : " . $e->getCode() . $e->getMessage() . "<b style='color: red'>" . $e->getFile() . "</b>". " on line " . $e->getLine();
        // echo $e->getCode();
        // echo $e->getLine();
        // echo $e->getFile();
    }

    $num = 100;
    $divider = 0;

    try{
        if($divider === 0){
            throw new Exception("Can't divide by zero. The answer will be infinite.",900);
        }else{
            echo $num / $divider;
        }
    }catch(Exception $e){
        echo "Error code : {$e->getCode()} , {$e->getMessage()}";
    }
?>