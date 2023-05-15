<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextGenMarket</title>
    <style>
     
      
    </style>
</head>
<body>
     <div class="container">
     @include('/header')
     </div>
      
    <div class="loginPage" id="loginPage"> 
      @include('/UserLogin/login')
    </div>

      <div class="signUpPage" id="signUpPage"> 
          @include('/UserLogin/signUp')
      </div>
      <div class="body">
          @include('/AllProduct')
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
 