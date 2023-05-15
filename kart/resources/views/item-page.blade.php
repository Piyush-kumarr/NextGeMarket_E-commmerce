 

 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p>${{ $product->price }}</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
                                                                      