<!DOCTYPE html>
<html>


<head>

  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link href="https://fonts.cdnfonts.com/css/creato-display" rel="stylesheet">

</head>

<body class="my-iv">

  <div class="login-container">
    <div class="row">
      <div class="logopozicija">
        <section>
          <img src="Images/logo-link.png" alt="image description" width="220">
        </section>
      </div>

      <div class="unospozicija">
        <section class="usernameee">
          <label for="username" class="username-label"><strong>Username</strong></label><br>
          <input type="text" id="username" name="username" class="username-input input-box"><br>
        </section>

        <section>
          <br><br><label for="password" class="password-label"><strong>Password</strong></label><br>
          <input type="password" id="password" name="password" class="password-input input-box">
        </section>

        <section class="zaboravljenasifra">
          <a href="#" class="forgot">Forgot password?</a>
        </section>

        <div class="dugmepozicija">
          <!-- <a href="/" class="button">Log in</a> -->
          <button type="submit" class="button">Log in</button>
        </div>

        <div class="line"></div>
        <div class="line2"></div>
</body>

</html>