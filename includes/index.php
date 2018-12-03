<?php
include 'function.php';

    // pass the connection and the movie id to a function
    $data = get_about($conn);
    echo json_encode($data);

?>