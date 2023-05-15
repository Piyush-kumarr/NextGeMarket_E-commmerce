 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #body-header{
            margin-left: 45%;
        margin-right: auto;
        margin-top: 2.75rem;
        width: 95%;
        overflow: hidden;
        border-radius: 1rem;
        background-color: #fff;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .p-4 p{
            display: -webkit-inline-box;
            margin-right:0px;
            margin-left:0px;
        }
        .p-4{
            /* padding:10px 30px 10px 10px; */
            padding:30px
        }
        #body-header img{
            height: 12rem; 
            width: 100%;
            object-fit: cover; 
            object-position: center;
        }
        .p-4 h2{
            margin-bottom: 0.5rem; 
            font-size: 1.25rem; 
            font-weight: 500;
            color: #374151;   
        }
        .bodyMainHeader{
            display: flex;
        }
        .h1heading{
             margin:3% 0px -20px 35%;
        }
        #body-header:hover{
            cursor: pointer;
        }
        a{
            text-decoration:none;
        }
    </style>
 </head>
 <body>
    <div class="h1heading"> 
 <h1>Branded Honey For You</h1>
 </div>
    <div class="bodyMainHeader">    
    @foreach($products as $product)
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
          <a href="/product"><img src="{{ asset('images/products/' . $product->image) }}" alt="Diamond Honey" />
            <div class="p-4">
                <h2>{{ $product->name }}</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >{{ $product->description }}</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">${{ $product->price }}</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$25.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">20% off</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/1.webp')}}" alt="Row Lib Honey" />
            <div class="p-4">
                <h2>Row Lib Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$10.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$30.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">40% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/2.webp')}}" alt="Pure Honey" />
            <div class="p-4">
                <h2>Pure Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$20.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$40.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">60% off</p>
                </div>
            </div>
        </a>
        </div>
    </div>

    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/4.webp')}}" alt="Orange Honey" />
            <div class="p-4">
                <h2>Orange Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$10.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$40.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">30% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>


    </div>

    <div class="bodyMainHeader"> 
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/5.webp')}}" alt="Product Image" />
            <div class="p-4">
                <h2>Black Seed Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$70.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$89.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">20% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>
     
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"><img src="{{url('/kart/6.webp')}}" alt="Product Image" />
            <div class="p-4">
                <h2>Golden Nector</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$30.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$50.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">16% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/4.webp')}}" alt="Product Image" />
            <div class="p-4">
                <h2>Cup GOld Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$60.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$80.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">20% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/8.webp')}}" alt="Product Image" />
            <div class="p-4">
                <h2>Mix veg Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$90.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$95.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">30% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    </div>
    <div class="bodyMainHeader"> 
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser">  <img src="{{url('/kart/13.webp')}}" alt="Diamond Honey" />
            <div class="p-4">
                <h2>Matka Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$50.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$85.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">30% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>
     
    <div class="min-h-screen dark:bg-slate-900 pt-8">
        <div id="body-header">
        <a href="/existingUser"> <img src="{{url('/kart/Honey-Roots.jpg')}}" alt="Row Lib Honey" />
            <div class="p-4">
                <h2>100% Honey</h2>
                <p style="margin-bottom: 0.5rem; font-size: 1rem; color: #4B5563;" >Product description goes here.</p>
                <div>
                    <p style="margin-right: 0.5rem; font-size: 1.25rem; font-weight: 600; color: #374151;">$50.00</p>
                    <p style="margin-right: 0.5rem; font-size: 1rem; font-weight: 500; color: #6B7280; text-decoration: line-through;">$65.00</p>
                    <p style="font-size: 1rem; font-weight: 500; color: #10B981;">10% off</p>
                </div>
            </div>
            </a>
        </div>
    </div>

   

    </div>

 </body>
 </html>