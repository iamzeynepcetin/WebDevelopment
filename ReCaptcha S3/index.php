<html>
  <head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
	<script src="https://www.google.com/recaptcha/api.js?render=6LfTl-EUAAAAAFXaj711uQh1XoMmKEW-TJqLhToM"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfTl-EUAAAAAFXaj711uQh1XoMmKEW-TJqLhToM', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
	
  </head>
  <body>
    <form action="form.php" method="POST">
      <input type="text" name="mesaj">
      <br>
	  
      <input type="submit" value="Submit">	
	  <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

    </form>
  </body>
</html>
