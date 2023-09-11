<?php
    require ".env";

    echo "Hello World";

    function allowedToVote(String $firstname, String $lastname, int $age) {
        if ($age > 17) {
            echo $firstname . ' ' . $lastname . ' is allowed to vote';
        } else {
            $yearsBeforeVote = 18 - $age;
            if ($yearsBeforeVote == 1) {
                echo 'You are not allowed to vote yet! Wait for ' . $yearsBeforeVote . ' year' ;    
            } else {
                echo 'You are not allowed to vote yet! Wait for ' . $yearsBeforeVote . ' years' ;
            }
        }
    }

    allowedToVote('Christian', 'Kirschberg', 16);
    
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }


    $password = getenv('PASSWORD');
    echo $password;

    

?>