<?php
if(isset($_POST['metacaptcha_content']))
{
    include_once "metacaptcha/metacaptcha_lib.php"; //path to metacaptcha_lib on your server
    $response = _metacaptcha_return_initial_cookie($_POST['metacaptcha_content']);
    echo json_encode($response);
}