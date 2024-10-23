

<x-app-layout>

    <br><br>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
<div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
<div class="ml-10 p-6 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"> 

    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
    <div class="ml-10" >
    <div class="">
            PELAPOR : {!! $siswa->pelapor !!}
    </div> 
    <br>
    <div class="">
            TERLAPOR : {!! $siswa->terlapor !!}
    </div> 
    <br>
    <div class="">
            KELAS : {!! $siswa->kelas !!}
    </div>  
    <br>
    <div class="">
            LAPORAN : {!! $siswa->laporan !!}
    </div> 
    <br>
    </div>

    <div class="ml-5">
    <div> <img src="{{ asset('/storage/' . $siswa->bukti) }}" class="rounded"
            style="width: 70%">
    </div>
    </div> 
    </div>
<br><br>

<a href="{{route('siswa.index')}}">
<button class="ml-10 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
BACK
</span>
</button>  
</a>


</div>
    


</div>
    </section>
    
</x-app-layout>
