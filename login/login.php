<?php
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
 
   
    // based on successful authentication 
    echo json_encode(array('success' => 1));
} else {
    echo "Buelbe a intentar";
    echo json_encode(array('success' => 0));
}