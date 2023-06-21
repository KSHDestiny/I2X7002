<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./delete.php">Delete Session</a>
    <button id="getBtn">Click Me</button>    


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){
        $("#getBtn").click(function(){
                $.ajax({
                type : 'post',
                url : 'set.php',
                data : {
                    'test' : "This is testing message."
                },
                success : setTimeout(function(response){
                    console.log(response);
                    window.location = "./get.php";
                },3000)
            })
        })
    })
</script>
</body>
</html>