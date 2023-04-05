<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextGenMarket</title>
    <style>
      body{
      margin:0px;
      padding:0px;
      }
      .heading{
      display: flex;
      margin-left:10%;
      }
      .box{
      width: 30px;
      border: 5px solid rgb(255,205,1);
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      }
      .header {
      overflow: hidden;
      background-color: rgb(15,23,42);
      padding: 20px 10px;
      }
      /* Style the header links */
      .header a {
        float: left;
        color: white;
        text:bold;
        text-align: center;
        padding: 0px 12px 0px 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
      }
      button{  float: left;
        padding: 0px 12px 0px 12px;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;}
      /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
      .header a.logo {
        font-size: 25px;
        font-weight: bold;
        color:white;
      }

      /* Change the background color on mouse-over */
      .header a:hover {
        color: black;
      }

      /* Style the active/current link*/
      .header button {
        background-color: dodgerblue;
        color: white;
        border:none;
      }

      /* Float the link section to the right */
      .header-right {
        /* float: right; */
        margin-top:-35px;
        margin-left:55%;
      }

      /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
      @media screen and (max-width: 500px) {
        .header a {
          float: none;
          display: block;
          text-align: left;
        }
        .header-right {
          float: none;
        }
      }
      #search{
          margin-left:50px;
          padding:10px;
          width:30%;
          height:35px;
          margin-top:10px;
          border:1px solid white;
          box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
          border-radius:10px;
      }
      .link{
          margin-left:30px;
      }
      .loginPage{
        display: none;
      }
      .signUpPage{
        display: none;
      }
    </style>
</head>
<body>
    <div class="header" id="header">
      <div class="heading"> 
          <div class="box"></div>
          <a href="/" class="logo">NextGen<br>Market</a>
          <input type="search" id="search" name="search" placeholder="Search">
      </div>
      <div class="header-right">
          <button id="showLodinPage">Log In</button>
          <a  href="#contact" class="link">Cart</a>
          <a href="#about"   class="link">Be a Member</a>
      </div>
    </div>

    <div class="loginPage" id="loginPage"> 
        @include('/UserLogin/login')
    </div>

    <div class="signUpPage" id="signUpPage"> 
        @include('/UserLogin/signUp')
    </div>
</body>
<script>
let showPage = document.getElementById('showLodinPage');
    showPage.addEventListener('click', function(event) {
      document.getElementById('loginPage').style.display='inline';
});

let crossBar= document.getElementById('loginCloseTab');
    crossBar.addEventListener('click', function(event) {
      document.getElementById('loginPage').style.display='none';
    })
let redirectToSignUpPage = document.getElementById('signupBtn');
    redirectToSignUpPage.addEventListener('click', function(event) {
      document.getElementById('loginPage').style.display = 'none';
      document.getElementById('signUpPage').style.display = 'block';
    })
    //  codding ethics 
</script> 
</html>
 