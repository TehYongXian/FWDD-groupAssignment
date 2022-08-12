<?php

$username = isset($_POST['username'])  ? $_POST['username']: '';
$username = isset($_POST['password'])  ? $_POST['password']: '';

$ok = true;
$messages = array();

if (!isset($username) || empty($password)) {
    $ok = false;
    $messages[] = 'Password cannot be empty!';
}

if ($ok) {
    if ($username === 'dcode' && $password === 'dcode') {
        $ok = true;
        $messages[] = 'Successful Login!';
    } else {
        $ok = false;
        $messages[] = 'Incorrect username/password';
    }
}


echo json_encode(
    array(
        'ok' => $ok,
        'message' => $messages
    )
    );

?>