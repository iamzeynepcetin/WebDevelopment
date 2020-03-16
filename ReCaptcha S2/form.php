<?php
//https://stackoverflow.com/questions/2445276/how-to-post-data-in-php-using-file-get-contents
$postdata = http_build_query(
    array(
        'secret' => '6Lf5lOEUAAAAAB-3faGoGevYmOYkXOAOOHcd58El',
        'response' => $_POST['g-recaptcha-response']
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context); //https://developers.google.com/recaptcha/docs/verify
header('Content-Type: application/json'); //https://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
echo $result;
?>
