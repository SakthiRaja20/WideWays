<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WideWays</title>

  <style>
    /* ---------- POPUP LOGIN / SIGNUP BOX ---------- */
    .login_signup {
      position: fixed;
      top: 20%;
      left: 40%;
      width: 300px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      border-radius: 15px;
      background: #fff;
      z-index: 999;
      display: none;
    }

    .login_signup .signupBx,
    .login_signup .loginBx {
      width: 100%;
      display: none;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .login_signup form {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .login_signup form input {
      padding: 10px;
      margin-top: 10px;
      border-radius: 8px;
      border: none;
      background: #fff;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 90%;
    }

    .login_signup form button {
      padding: 10px 15px;
      margin-top: 10px;
      border-radius: 8px;
      border: none;
      background: #037b83;
      color: #fff;
      cursor: pointer;
    }

    .login_signup form p {
      margin-top: 10px;
      font-size: 14px;
    }

    .login_signup form p a {
      color: #037b83;
      text-decoration: none;
      font-weight: 600;
      cursor: pointer;
    }

    /* Show login/signup when active */
    .login_signup.login_signup_ll { display: flex; }
    .login_signup.login_signup_ll .loginBx { display: flex; }
    .login_signup.login_signup_ss { display: flex; }
    .login_signup.login_signup_ss .signupBx { display: flex; }

    /* ---------- FOOTER ---------- */
    footer {
      background: #037b83;
      color: #fff;
      padding: 40px;
      text-align: center;
    }

    footer h2 {
      font-size: 22px;
    }

    footer p {
      width: 70%;
      margin: 10px auto;
      font-size: 14px;
    }

    footer .input {
      margin: 15px auto;
    }

    footer .input input {
      padding: 8px;
      width: 200px;
      border-radius: 5px;
      border: none;
    }

    footer .input button {
      padding: 8px 15px;
      background: #fff;
      border: none;
      color: #037b83;
      border-radius: 5px;
      cursor: pointer;
    }

    footer ul {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0;
      margin-top: 20px;
      gap: 30px;
    }

    footer ul li {
      font-size: 18px;
    }

    footer ul h6 {
      margin: 0;
      font-weight: normal;
      font-size: 13px;
    }

    /* ---------- BUTTON TO OPEN POPUP ---------- */
    #openPopup {
      position: fixed;
      top: 10%;
      right: 15%;
      background: #037b83;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

  </style>
</head>
<body>

  <!-- Button to Open Popup -->
  <button id="openPopup">Login / Signup</button>

  <!-- Login And SignUp Popup -->
  <div class="login_signup">
    <span id="closePopup" style="cursor:pointer; float:right; font-size:20px;">✖</span>

    <div class="loginBx">
      <h2>Login</h2>
      <form id="loginForm">
        <input type="text" id="login_name" placeholder="Username" required autocomplete="off">
        <input type="password" id="login_password" placeholder="Enter Password" required autocomplete="off">
        <button type="submit">Login</button>
        <p>Don't have an account? <a id="showSignup">Sign Up</a></p>
      </form>
    </div>

    <div class="signupBx">
      <h2>Register</h2>
      <form id="signupForm">
        <input type="text" id="signup_name" placeholder="Username" required autocomplete="off">
        <input type="number" id="signup_mobile" placeholder="Mobile Number" required autocomplete="off">
        <input type="password" id="signup_password" placeholder="Create Password" required autocomplete="off">
        <button type="submit">Sign Up</button>
        <p>Already have an account? <a id="showLogin">Login</a></p>
      </form>
    </div>
  </div>

  <!-- Footer Section -->
  <footer>
    <h2>Subscribe & <br> get special discount</h2>
    <p>Adventure is just a click away! Be the first to know about new destinations, travel inspiration, and exclusive discounts delivered straight to your inbox</p>
    <div class="input">
      <input type="text" placeholder="Enter your Email Address">
      <button>Subscribe</button>
    </div>
    <ul>
      <li>15+ <br> <h6>Years Serving the travel Industry</h6></li>
      <li>1000+ <br><h6>Global Partner</h6> </li>
      <li>10+<br> <h6>Industry Awards since 2022</h6></li>
      <li>8795 <br> <h6>Subscribe</h6></li>
    </ul>
  </footer>

  <!-- JavaScript -->
  <script>
    const login_signup = document.querySelector('.login_signup');
    const openPopup = document.getElementById('openPopup');
    const closePopup = document.getElementById('closePopup');
    const showLogin = document.getElementById('showLogin');
    const showSignup = document.getElementById('showSignup');

    // Open popup
    openPopup.addEventListener('click', () => {
      login_signup.style.display = 'flex';
      login_signup.classList.add('login_signup_ll');
      login_signup.classList.remove('login_signup_ss');
    });

    // Close popup
    closePopup.addEventListener('click', () => {
      login_signup.style.display = 'none';
    });

    // Toggle to Login
    showLogin.addEventListener('click', () => {
      login_signup.classList.add('login_signup_ll');
      login_signup.classList.remove('login_signup_ss');
    });

    // Toggle to Signup
    showSignup.addEventListener('click', () => {
      login_signup.classList.add('login_signup_ss');
      login_signup.classList.remove('login_signup_ll');
    });
  </script>

</body>
</html>
