<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #body-header {
            margin-left: auto;
            margin-right: auto;
            margin-top: 2.75rem;
            width: 95%;
            overflow: hidden;
            border-radius: 1rem;
            background-color: #fff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .p-4 p {
            display: -webkit-inline-box;
            margin-right: 0px;
            margin-left: 0px;
        }
        .p-4 {
            padding: 30px;
        }
        #body-header img {
            height: 12rem; 
            width: 100%;
            object-fit: cover; 
            object-position: center;
        }
        .p-4 h2 {
            margin-bottom: 0.5rem;  
             font-size: 1.25rem; 
            font-weight: 500;
            color: #374151;   
        }
        .bodyMainHeader {
            /* display: flex; */
            flex-wrap: wrap;
            justify-content: center;
        }
        .h1heading {
            margin: 3% 0px -20px 35%;
        }
        #body-header:hover {
            cursor: pointer;
        }
        a {
            text-decoration: none;
        }
        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
            font-size: 14px;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .add-to-cart-btn:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        @media (min-width: 768px) {
            #body-header {
                width: 23%;
                margin: 1%;
            }
            #body-header img {
                height: 12rem; 
                width: 100%;
                object-fit: cover; 
                object-position: center;
            }
        }
    </style>
</head>
<body>
    <div class="h1heading"> 
        <h1>Branded Honey For You</h1>
    </div>
    <div class="bodyMainHeader">    
        @foreach($products as $product)
            <div class="">
                <div id="body-header">
                    <a href="{{ route('product.show', ['id' => $product->id]) }}">
                        <img src="{{ asset('images/products/' . $product->image) }}" alt="Diamond Honey" />
                        <div class="p-4">
                            <h2>{{ $product->name }}</h2>
                            <div>
                                <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">${{ $product->price }}</p>
                            </div>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary add-to-cart-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>