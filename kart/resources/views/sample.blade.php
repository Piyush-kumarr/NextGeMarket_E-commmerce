 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header{
            margin-left: auto;
        margin-right: auto;
        margin-top: 2.75rem;
        width: 80%;
        transform: rotate(0);
        overflow: hidden;
        border-radius: 1rem;
        background-color: #fff;
        /* background-color: #1F2937; */
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition-duration: 0.3s;
        transform: scale(1.05);
        }
    
    </style>
 </head>
 <body>
 <div class="min-h-screen dark:bg-slate-900 pt-8">
<div id="header" class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
  <img style="height: 12rem; width: 100%; object-fit: cover; object-position: center;" src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Product Image" />
  <div class="p-4">
    <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">Product Name</h2>
    <p class="mb-2 text-base dark:text-gray-300 text-gray-700">Product description goes here.</p>
    <div class="flex items-center">
      <p class="mr-2 text-lg font-semibold text-gray-900 dark:text-white">$20.00</p>
      <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">$25.00</p>
      <p class="ml-auto text-base font-medium text-green-500">20% off</p>
    </div>
  </div>
</div>
</div>
 </body>
 </html>