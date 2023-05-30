<?php
    $users = [
        ["name" => "Aung Aung", "age" => 21, "job" => "designer"],
        ["name" => "Hla Hla", "age" => 24, "job" => "teacher"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
        ["name" => "Aung Aung", "age" => 21, "job" => "designer"],
        ["name" => "Hla Hla", "age" => 24, "job" => "teacher"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
        ["name" => "Aung Aung", "age" => 21, "job" => "designer"],
        ["name" => "Hla Hla", "age" => 24, "job" => "teacher"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
        ["name" => "Tun Tun", "age" => 22, "job" => "developer"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" border="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Job</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $user){
                    echo "
                    <tr>
                        <td>{$user['name']}</td>
                        <td>{$user['age']}</td>
                        <td>{$user['job']}</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>