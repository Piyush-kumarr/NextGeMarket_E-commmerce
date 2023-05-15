 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}
 
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
.left-column {
  width: 60%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
.left-column img {
  width: 80%;
  position: absolute;
  left: 40px;
  top:40px;
  
}
 
.left-column img.active {
  opacity: 1;
}
/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.product-color {
  margin-bottom: 30px;
}
 
.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
  padding:20px;
  margin-left:10%;
}
.cart-btn:hover {
  background-color: #64af3d;
}
    </style>
 </head>
  <body>
      <div class="header">
          @include('/header')
      </div>
        <main class="container">
          <!-- Left Column / Headphones Image -->
          <div class="left-column">
             <img data-image="black" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}"  alt="">
          </div>
          <!-- Right Column -->
          <div class="right-column">
          <!-- Product Description -->
          <div class="product-description">
              <span>Honey</span>
                 <h1>{{ $product->name }}</h1>
                 <p>{{ $product->description }}</div>
                <!-- Product Pricing -->
               <div class="product-price">
             <span>${{ $product->price }}</span>
          <a href="#" class="cart-btn">Add to cart</a>
         </div>
      </div>
    </main>
  </body>
</html>