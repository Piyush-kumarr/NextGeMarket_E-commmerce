<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login-header{
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
        .login-header2{
            display: flex;
             flex-direction:column;
        }
        .login-header2 input{
            padding: 10px;
            width: 80%;
            padding: 12px 20px;
            margin: 8px 40px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-header2 .btn button{
            width: 80%;
            background-color: rgb(255,205,1);
            color: white;
            padding: 14px 20px;
            margin: 8px 40px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-header2 h3{
            text-align: center;
        }
        .login-heading{
            display: flex;
            margin-left:30%;
        }
        .login-box{
            width: 10%;
            height:10px
            padding: 12px 10px;
            margin: 17px 10px;
            display: inline-block;
            border: 5px solid rgb(255,205,1);
            border-radius: 4px;
         }
         .login-header3 p{
            text-align: center;
        }
        hr{
            width: 80%;
            height: 1px;
            background-color: #ccc;
            border: none;
        }
        .login-header3 a{
            text-decoration: none;
        }
        .loginCloseTab{
            background-color: transparent;
            border:none;
          margin-left:70px;
          margin-top:-50px;
        }
        .loginCloseTab:hover{
            cursor:pointer;
        }
         button:hover{
            cursor:pointer;

        }
        .signupBtn{
            float:right;
            background-color: transparent;
            border: none;
            color:blue;
            margin-right:50px;
            font-size:18px;
            margin-top:-3px;
        }
        .login-header3 p{
            margin-left:35px;
        }
    </style> 
</head>
<body>
    <div class="login-header" id="crossClose">
        <div class="login-heading"> 
            <div class="login-box"></div>
                <h2>NextGen<br>Market</h2>
                <button class="loginCloseTab" id="loginCloseTab">╳</button>
            </div>
        <hr>
        <div class="login-header2">
            <form action="/existingUser" method="POST"> 
                @csrf
                <h3>Enter Your Email Address</h3>                
                <input type="email" id="name" name="email" placeholder="Your Email">
                <input type="Password" id="Password" name="password" placeholder="Your password">
                <div class="btn"> 
                    <button>Login</button>
                </div>
        </div>
            </form>

        <div class="login-header3">
            <p>Don't Have an account Then<button class="signupBtn" id="signupBtn"> Sign up</button></p>
        </div>
    </div>
</body>
</html>
