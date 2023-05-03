<!DOCTYPE html>
<html>

<head>
  <style>

    @font-face{
      font-family:'CreatoDisplay';
      src: url('/resources/fontovi/CreatoDisplay-Regular.otf');
    }

    .login-container {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .row {
      margin-top: 11%;
      display: inline-block;
      text-align: center;

    }

    .heading {
      color: rgba(200, 58, 71, 255);
      font-family: 'CreatoDisplay';
      margin-left: 120px;

    }

    .my-iv {
      background-color: white;
      zoom: 105%;

    }

    .logopozicija {
      margin-bottom: 30px;
    }

    .unospozicija {

      display: inline-block;
      text-align: left;
    }


    .username-label {
      font-family: 'CreatoDisplay';
      color: #454545;
      font-size: 15px;
      

    }

    .password-label {
      font-family: 'CreatoDisplay';
      color: #454545;
      font-size: 15px;
    }

    .username-input {
      border-color: #c1e4bc;
      border: none;
      border-bottom: 3px solid #c42326;
      font-size: 15px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      text-align: left;
      padding-top: 5px;
      width: 300px;
      height: 20px;
      

    }

    .password-input {
      border-color: #c1e4bc;
      border: none;
      border-bottom: 3px solid #c42326;
      font-size: 15px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      text-align: left;
      padding-top: 5px;
      width: 300px;
      height: 20px;
      max-width: 350px;
      max-height: 20px;
    }

    .username-input:hover,
    .username-input:focus,
    .password-input:hover,
    .password-input:focus {

      border-color: lightcoral;
    }



    /* Dugme */
    .button {
      display: inline-block;
      padding-top: 3%;
      padding-bottom: 8%;
      padding-left: 8%;
      padding-right: 8%;
      border-radius: 10rem;
      color: #fff;
      max-height: 10px;
      font-size: 15px;
      letter-spacing: 1px;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
      z-index: 1;
      border: none;
      
    }

    .button:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #c42326;
      border-radius: 10rem;
      z-index: -2;
    }

    .button:before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background-color: #e62429;
      transition: all 0.3s;
      border-radius: 10rem; 
      z-index: -1;
    }

    .button:hover {
      color: #fff;
    }

    .button:hover:before {
      width: 100%;
    }
    .dugmepozicija {
      padding-top: 50px;
      margin: 0 auto;
      width: 100%;
      text-align: center;
      margin-top: -30px;
    }

    /* Zaboravljena sifra */
    .zaboravljenasifra {
      font-size: 12px;
      text-align: right;
      color: black;
      margin-top: 5px;
    }

    /* Donje leve linije */
    .line {
      position: fixed;
      left: 0;
      top: 90%;
      height: 18px;
      width: 35%;
      background-color: #c42426;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .line::before {
      content: "";
      display: block;
      position: absolute;
      left: 0;
      top: -36px;
      height: 18px;
      width: 90%;
      background-color: #c42426;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .line::after {
      content: "";
      display: block;
      position: absolute;
      left: 0;
      top: -72px;
      height: 18px;
      width: 70%;
      background-color: #c42426;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    /* Gornje desne linije */
    .line2 {
      position: fixed;
      right: 0;
      top: 5%;
      height: 18px;
      width: 35%;
      background-color: #c42426;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .line2::before {
      content: "";
      display: block;
      position: absolute;
      right: 0;
      top: 36px;
      height: 18px;
      width: 90%;
      background-color: #c42426;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .line2::after {
      content: "";
      display: block;
      position: absolute;
      right: 0;
      top: 72px;
      height: 18px;
      width: 70%;
      background-color: #c42426;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    .usernameee{
      margin-bottom: -10px;
    }
  </style>
</head>

<body class="my-iv">
  <div class="login-container">
    <!-- login elements go here -->
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
          <a href="#">Forgot password?</a>
        </section>


        <div class="dugmepozicija">
          <!-- <a href="/" class="button">Log in</a> -->
          <button type="submit" class="button">Log in</button>
        </div>

        <div class="line"></div>

        <div class="line2"></div>



        




</body>

</html>