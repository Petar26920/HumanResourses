<!DOCTYPE html>
<html>


<head>

  <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
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

      <form method="POST" action="{{ route('login') }}" class="unospozicija">
        @csrf
        <section class="usernameee">
          <label for="username" class="username-label"><strong>Email</strong></label><br>
          <input id="email" type="email" name="email" :value="old('email')" class="username-input" required autofocus autocomplete="username"><br>
        </section>

        <section>
          <br><br><label for="password" class="password-label"><strong>Password</strong></label><br>
          <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="password-input input-box">
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
      </form>
</body>

</html>