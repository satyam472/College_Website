<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="signup_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
  
<div class="login-page">
  <div class="form">

    <form action="registration.php" method="post">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      
      <input name="emailid" type="text" placeholder="email address"/>
      <input name=" username"  type="text" placeholder="pick a username"/>
      <input name="password" type="password" placeholder="set a password"/>
      <button type="submit" onclick="window.location.href='login.php'">SIGN UP</button>
      
    </form>

  
  </div>
</div>

</body>
</html>

