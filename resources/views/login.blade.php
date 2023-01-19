<!DOCTYPE html>
<html>
<head>
<style> 
.username-label {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #c83a47;
}

.username-input {
    border: #c1e4bc;
    border-bottom: 2px solid rgba(193,228,188,255);
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: left;
    padding-top: 10px;
    width: 350px;
    height: 20px;

}
.password-label {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #c83a47;
}

.password-input {
    border: #c1e4bc;
    border-bottom: 2px solid rgba(193,228,188,255);
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: left;
    padding-top: 10px;
    width: 350px;
    height: 20px;
}
.login-container {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    
}
.input-box:hover,
.input-box:active {
    border: 2px solid rgba(193,228,188,255);
}
.heading {
    color: rgba(200,58,71,255);
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-left: 120px;

}
.my-iv{
    background-color: whitesmoke;
}
.button {
  display: inline-block;
  padding: 0.75rem 1.25rem;
  border-radius: 10rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  letter-spacing: 0.15rem;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
}
.button:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #e62429;
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
  background-color: #e77478;
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

/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}

.zz {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}


/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}
.zz {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}



</style>
</head>

<body class="my-iv">
<div class="login-container">
    <!-- login elements go here -->
    <div class="row">
    <img src="Images/logo-link.png" alt="image description" width="260">

    <h1 class="heading">Log in</h1>
    <div >
        <section>
        <label for="username" class="username-label"><strong>Username</strong></label><br>
        <input type="text" id="username" name="username" class="username-input input-box"><br>
    </section>
    <section>
        <br><br><label for="password" class="password-label"><strong>Password</strong></label><br>
        <input type="password" id="password" name="password" class="password-input input-box">
    </section>
    </div>
    
    </div>
    <div class="zz">  
        <a href="#" class="button">Log in</a>
    </div>  





</body>
</html>
