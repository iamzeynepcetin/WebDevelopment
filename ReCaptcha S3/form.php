<?php

$postdata = http_build_query(
    array(
        'secret' => '6LfTl-EUAAAAAI7Ewioi5L0IYdewQrWchdaLUQ1n',
        'response' => $_POST['recaptcha_response']
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

$result = json_decode($result,true);
 if($result['success'])
	if($result['score']>0.5)
	echo "basarili ".$result['score'];
else
	echo "basarisiz";


?>
