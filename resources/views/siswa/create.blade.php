<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <br>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">TAMBAH DATA SISWA</h2><br>
            <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
   
                <!-- @csrf ensures that the request sent to the server is from a valid form -->
               
                <div class="mt-5 grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PELAPOR</label>
                    <input type="text" name="pelapor" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TERLAPOR</label>
                    <input type="text" name="terlapor" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                    </div>
                   
                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">KELAS</label>
                    <input type="text" name="kelas" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                    </div>

                    <div class="mt-2 w-full">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LAPORAN</label>
                    <input type="text" name="laporan" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                    </div>

                    <div class="mb-1 w-full">
                    <label class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">BUKTI</label>
                    <input name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </div>
                   
                </div>
                <br><br>

                <button type="submit" class="mt-5 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                CREATE
                </span>
                </button>
             
                <br><br><br>
            </form>
        </div>
        <br><br><br>
    </section>
</body>
</html>

