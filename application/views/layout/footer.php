<style>
    .login_signup{
        position: fixed;
        top: 20%;
        left: 40%;
        width: 300px;
        padding: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,0.1);
        border-radius: 15px;
        background: #fff;
        z-index: 999;
        display: none;
    }
    .login_signup .signupBx,
    .login_signup .loginBx{
        width: 100%;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .login_signup form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .login_signup form input{
        padding: 10px;
        margin-top: 10px;
        border-radius: 8px;
        border: none;
        background: #fff;
        box-shadow: 0 0 20px rgb(0,0,0,0.1);
    }
    .login_signup form button{
        padding: 10px 15px;
        margin-top: 10px;
        border-radius: 8px;
        border: none;
        background: #037b83;
        color: #fff;
        cursor: pointer;
    }
    .login_signup form p{
        margin-top: 10px;
        font-size: 14px;
    }
    .login_signup form p a{
        color: #037b83;
        text-decoration: none;
        font-weight: 600;
        cursor: pointer;
    }
    .login_signup_ll { display: block; }
    .login_signup_ll .loginBx { display: flex; }
    .login_signup_ss { display: block; }
    .login_signup_ss .signupBx { display: flex; }
</style>

<!-- Trigger Buttons -->
<button id="loginBtn">Open Login</button>
<button id="signupBtn">Open SignUp</button>

<!-- Login And SignUp -->
<div class="login_signup">
    <div class="signupBx">
        <h2>Register</h2>
        <form id="signupForm">
            <input type="text" id="signup_name" placeholder="Username" required autocomplete="username">
            <input type="number" id="signup_mobile_no" placeholder="Mobile Number" required autocomplete="username">
            <input type="password" id="signup_password" placeholder="Create Password" required autocomplete="new-password">
            <p>Already have an account? <a href="#" id="login">Login</a></p>
        </form>
    </div>
    <div class="loginBx">
        <h2>Login</h2>
        <form id="loginForm">
            <input type="text" id="login_name" placeholder="Username" required autocomplete="username">
            <input type="password" id="login_password" placeholder="Enter Password" required autocomplete="current-password">
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="#" id="signup">SignUp</a></p>
        </form>
    </div>    
</div>

<script>
    let login_signup = document.getElementsByClassName('login_signup')[0];
    let loginBtn = document.getElementById('loginBtn');
    let signupBtn = document.getElementById('signupBtn');

    loginBtn.addEventListener('click', () => {
        login_signup.classList.add('login_signup_ll');
        login_signup.classList.remove('login_signup_ss');
    });

    signupBtn.addEventListener('click', () => {
        login_signup.classList.add('login_signup_ss');
        login_signup.classList.remove('login_signup_ll');
    });
</script>

<script>
    let base_url = "<?php echo base_url('user'); ?>"; // fixed PHP syntax

    // Signup
    document.getElementById('signup').addEventListener('click', async(e) => {
        e.preventDefault();

        let form = new FormData();
         form.append('name', document.getElementById('login_name').value);
        form.append('password', document.getElementById('login_password').value);
    

        try {
           const response = await fetch(base_url + 'signup' , {
                method: "POST",
                body: form
           }
        );

        const result = await response.json();

        alert(data.message);

        window.location.reload();

        } catch (error) {
            console.log(error);
        }
    });

    // Login
    document.getElementById('L').addEventListener('click', async(e) => {
        e.preventDefault();

        let form = new FormData();
        form.append('name', document.getElementById('signup_name').value);
        form.append('mobile_no', document.getElementById('signup_mobile_no').value);
        form.append('password', document.getElementById('signup_password').value);
       

        try {
           const response = await fetch(base_url + 'login' , {
                method: "POST",
                body: form
           }
        );

        const result = await response.json();

        alert(data.message);

        window.location.reload();

        } catch (error) {
            console.log(error);
        }
    });
</script>

<footer>
    <h2>Subscribe & <br> get special discount</h2>
    <p>Adventure is just a click away! Be the first to know about new destinations, travel inspiration, and exclusive discounts delivered straight to your inbox</p>
    <div class="input">
        <input type="text" placeholder="Enter your Email Address">
        <button>Subscribe</button>
    </div>
    <ul>
        <li>15+ <br> <h6>Years Serving the travel Industry</h6></li>
        <li>1000+ <br><h6>Global <br> Partner</h6> </li>
        <li>10+<br> <h6>Industry Awards since 2022</h6></li>
        <li>8795 <br> <h6>Subscribe</h6></li>
    </ul>
</footer>

<script src="<?= base_url('app.js'); ?>"></script>
</body>
</html>
