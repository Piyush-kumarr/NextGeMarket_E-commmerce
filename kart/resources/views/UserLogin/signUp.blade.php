<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .signHeader{
            position: fixed;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            background: #fff;
            align-items: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
            width: 50%;
            margin: auto;
            width: 30%;
            border-radius: 4px;
            padding: 10px;
            margin-top: 50px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
       }
       .signSubHeader{
            display: flex;
             flex-direction:column;
        }
        .signSubHeader input{
            padding: 10px;
            width: 80%;
            padding: 12px 20px;
            margin: 8px 40px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .signSubHeader .signBtn button{
            width: 80%;
            background-color: rgb(255,205,1);
            color: white;
            padding: 14px 20px;
            margin: 8px 40px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signSubHeader h3{
            text-align: center;
        }
        .signHeader2{
            display: flex;
            margin-left:30%;
        }
        .signBorderBox{
            width: 10%;
            height:10px
            padding: 12px 10px;
            margin: 17px 10px;
            display: inline-block;
            border: 5px solid rgb(255,205,1);
            border-radius: 4px;
         }
         .signSubHeader2 p{
            text-align: center;
        }
        hr{
            width: 80%;
            height: 1px;
            background-color: #ccc;
            border: none;
        }
        .signSubHeader2 a{
            text-decoration: none;
        }
        .signCloseTab{
            background-color: transparent;
            border:none;
          margin-left:70px;
          margin-top:-50px;
        }
        .signCloseTab:hover{
            cursor:pointer;
        }
        .loginBtn{
            float:right;
            background-color: transparent;
            border: none;
            color:blue;
            margin-right:50px;
            font-size:18px;
            margin-top:-3px;
        }
        .error-message {
        color: red;
        font-size: 0.8rem;
        margin-left:11%;
        }
        form input.error {
        border-color: red;
        }
    </style> 
</head>
<body>
    <div class="signHeader">
        <div class="signHeader2"> 
            <div class="signBorderBox"></div>
            <h2>NextGen<br>Market</h2>
            <button  class="signCloseTab" id="signCloseTab">╳</button>
        </div>
    <hr>
        <div class="signSubHeader">
            <form action="/userRegister" method="POST"> 
                @csrf
                <h3>Sign Up Here</h3>
                <input type="name" id="name" name="name" placeholder="Your Name"  >
                <span class="error-message"></span>
                <input type="email" id="signEmail" name="email" placeholder="Your Email"  >
                <span class="error-message"></span>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Create Password"  >
                <span class = "error-message"></span>
                <div class="signBtn"> 
                    <button>Sign Up</button>
                </div>
        </div>
            </form>

        <div class="signSubHeader2">
            <!-- <p>Existing User? <a href="/login">Log in</a></p> -->
            <p>Existing User?<button class="loginBtn" id="loginBtn">Log in</button></p>
        </div>
    </div>
</body>
<script>
    let signCloseTab = document.getElementById('signCloseTab');
    signCloseTab.addEventListener('click', function(event){
        document.getElementById('signUpPage').style.display = 'none';
    })
    let loginBtn = document.getElementById('loginBtn');
    loginBtn.addEventListener('click', function(event){
        document.getElementById('signUpPage').style.display = 'none';
        document.getElementById('loginPage').style.display = 'block';
    })

    var inputName = document.getElementById("name");
    console.log(inputName)
    inputName.addEventListener('blur',()=>{
        var nameValue = inputName.value.trim();

        if(nameValue===''){
            inputName.classList.add('error');
            inputName.nextElementSibling.textContent= 'Name is required';
        } else if(!/^[a-zA-Z ]+$/.test(nameValue)){
            inputName.classList.add('error');
            inputName.nextElementSibling.textContent= 'Name should be contains letter and spaces';
        }else{
            inputName.classList.remove('error');
            inputName.nextElementSibling.textContent = '';
        }
    });
    var inputEmail = document.getElementById('signEmail');
    inputEmail.addEventListener('blur',()=>{
        var emailValue = inputEmail.value.trim();

        if(emailValue===""){
            inputEmail.classList.add('error');
            inputEmail.nextElementSibling.textContent ='Email is required';
        }else if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)){
            inputEmail.classList.add('error');
            inputEmail.nextElementSibling.textContent = "Email is invalid";
        }else{
            inputEmail.classList.remove('error');
            inputEmail.nextElementSibling.textContent= "";
        }
    });
    var inputPassword = document.getElementById('password');
    inputPassword.addEventListener('blur',()=>{
        var passwordValue = inputPassword.value.trim();

        if(passwordValue===""){
            inputPassword.classList.add('error');
            inputPassword.nextElementSibling.textContent ="Password is required" 
        }else if(passwordValue.length < 8){
            inputPassword.classList.add('error');
            inputPassword.nextElementSibling.textContent="Password must be at least 8 characters";
        }else{
            inputPassword.classList.remove('error');
            inputPassword.nextElementSibling.textContent ='';
        }
    });
    
</script>
</html>