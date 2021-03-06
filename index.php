<?xml version='1.0' encoding='utf-8'?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Login/Sign-In</title>
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body>

    <div class="logmod">
  <div class="logmod__wrapper">
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
       
            <!-- The first form -->
            
            <form class="simform" action="signUp.php" method="post" accept-charset="utf-8" action="#">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" type="email" name="emailid" id="user-email" placeholder="Email" size="50"/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" type="text" name="pwd" id="user-pw" placeholder="Password" size="50"/>
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" type="text" name="rptpwd" id="user-pw-repeat" placeholder="Repeat password" size="50"/>
              </div>
            </div>
            <div class="simform__actions">
                <button class="sumbit" name="commit" value="Create Account" type="sumbit">Create Account </button>
            </div> 
          </form>
            
            
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a class="connect facebook" href="https://www.facebook.com/">
              <div class="connect__icon">
                
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a class="connect googleplus" href="#">
              <div class="connect__icon">
                
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
            
            <!-- Login form -->
            
          <form class="simform" accept-charset="utf-8" action="Login.php" method="post">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" type="email" id="user-email" name="emailid" placeholder="Email" size="50"/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" type="password" id="user-pw" name="userpasswd" placeholder="Password" size="50"/>
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
                <button class="sumbit" name="commit" value="Log In" type="sumbit">Log in </button>
            </div> 
          </form>
            
            
            
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a class="connect facebook" href="https://www.facebook.com/">
              <div class="connect__icon">
                
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a class="connect googleplus" href="#">
              <div class="connect__icon">
                
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="index.js"></script>

    

</body></html>
