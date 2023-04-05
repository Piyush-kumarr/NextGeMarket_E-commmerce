<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextGenMarket</title>
    <style>
  .header a,.header a:hover{color:#000}#search,.box{box-shadow:rgba(149,157,165,.2) 0 8px 24px}body{margin:0;padding:0}.heading{display:flex;margin-left:10%}.box{width:30px;border:5px solid #ffcd01}.header a,button{float:left;padding:0 12px;font-size:18px;line-height:25px;border-radius:4px}.header{overflow:hidden;background-color:#f1f1f1;padding:20px 10px}.header a{text-align:center;text-decoration:none}.header a.logo{font-size:25px;font-weight:700}.header button{background-color:#1e90ff;color:#fff;border:none}.header-right{margin-top:-35px;margin-left:55%}@media screen and (max-width:500px){.header a,.header-right{float:none}.header a{display:block;text-align:left}}#search{margin-left:50px;padding:10px;width:30%;height:35px;margin-top:10px;border:1px solid #fff}.link{margin-left:30px}.loginPage,.signUpPage{display:none}
   
   .mySlides img{
    width:20%;height:10%;
   }
   .mySlides{
    display:flex;
    flex-direction:column;
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

<style>
    .main-list img{
        width:20%;
        height:14%;
        padding:20px;
    }
    .main-list{
            width: 80%;
            /* border: 5px solid rgb(255,205,1); */
            border-radius: 4px;
            align-items: center;
            text-align: center;
            /* padding:30px; */
            margin-left:10%;
         }
         .column {
            display: contents;
        }
        .column p{
            width: 20%;

        }
        .column button{
            width:40px;
            display:flex;
        }
</style>





<!-- Body Items Start  -->
<div class="main-list">
    <h1>Branded Honey For You</h1>
    <div class="items1List">
        <div class="img1 column">
            <img src="{{url('/kart/14brand.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p> -->
            <!-- <button>Add To Cart</button> -->
        </div>
        <div class="img2 column">
            <img src="{{url('/kart/2.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img3 column">
            <img src="{{url('/kart/3.jpg')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img4 column">
            <img src="{{url('/kart/4.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
    </div>
    <div class="items2List">
    <div class="img1 column">
            <img src="{{url('/kart/5.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img2 column">
            <img src="{{url('/kart/6.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img3 column">
            <img src="{{url('/kart/7.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img4 column">
            <img src="{{url('/kart/8.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
    </div>
    <div class="items3List">
    <div class="img1 column">
            <img src="{{url('/kart/9.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img2 column">
            <img src="{{url('/kart/10.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img3 column">
            <img src="{{url('/kart/11.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img4 column">
            <img src="{{url('/kart/12.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
    </div>
    <div class="items4List">
    <div class="img1 column">
            <img src="{{url('/kart/13.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img2 column">
            <img src="{{url('/kart/Honey-Roots.jpg')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img3 column">
            <img src="{{url('/kart/15brand.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
        <div class="img4 column">
            <img src="{{url('/kart/16.webp')}}">
            <!-- <p>Hive Alkaline Honey $150</p>
            <button>Add To Cart</button> -->
        </div>
    </div>
</div>

        </div>
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
 