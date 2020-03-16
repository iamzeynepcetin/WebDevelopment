<html>
  <head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script> <!--https://developers.google.com/recaptcha/docs/display-->

  </head>
  <body>
    <form action="form.php" method="POST">
      <input type="text" name="mesaj">
      <br>
	  <div class="g-recaptcha" data-sitekey="6Lf5lOEUAAAAAIBHpYzl5WHbgaQ0IBn0gIvgVgX6"></div>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
