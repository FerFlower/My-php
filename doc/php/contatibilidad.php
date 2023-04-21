<?php
if (isset($_POST['1']) && $_POST['2'] && isset($_POST['2']) && $_POST['1']) {
    // do user authentication as per your requirements 
    // ... 
    // ... 
    // based on successful authentication 
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}?>