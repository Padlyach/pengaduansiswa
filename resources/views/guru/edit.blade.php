<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="bg-white dark:bg-gray-900">

    <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

    <br><br><br><br><br><br>

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">EDIT WOII!!!!</h2> 
        <br>
        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- @csrf memastikan bahwa permintaan yang dikirimkan ke server berasal dari formulir yang sah. --}}
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">

                <div class="w-full">
                    <br>
                    <input type="text" name="status" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        value="{{ $guru->status}}" placeholder="Product brand" required="">
                </div>

             
            </div>
<br>
<div class="flex items-center space-x-4">
</button>
<button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
SAVE
</span>
</button>
 </div>

 <br><br><br><br><br><br><br><br>s
        </form>

   
    
</section>
</body>
</html>




