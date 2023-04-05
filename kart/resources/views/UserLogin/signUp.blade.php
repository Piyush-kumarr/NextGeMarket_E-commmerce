<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .signHeader{
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
            <form action="/NewUser" method="POST"> 
                @csrf
                <h3>Enter Your Phone No.</h3>
                <input type="email" id="name" name="phone" placeholder="Your Phone">
                <!-- <input type="Password" id="Password" name="password" placeholder="Your password"> -->
                <div class="signBtn"> 
                    <button>Continue</button>
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
</script>
</html>