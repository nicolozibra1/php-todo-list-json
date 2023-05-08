<?php
    $data = file_get_contents('./data.json'); //leggo il file
    $phparray = json_decode($data, true); //converto il file

    if(isset($_POST['todoItem'])) {
        $todoItem = $_POST['todoItem'];
        array_push($phparray, $todoItem); //pusho un nuovo elemento dentro l'array

        file_put_contents('./data.json', json_encode($phparray)); //sovrascrive data json con nuovo array
    }

    header('Content-Type: application/json');
    
    echo json_encode($phparray); //ritorno finale
?>