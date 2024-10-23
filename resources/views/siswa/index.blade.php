<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           SISWA
        </h2>
    </x-slot>

    <br><br>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                 | DATA LAPORAN KASUS SISWA SMK PESAT |
                </h2>
                </div>

            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <a href="{{route('siswa.create')}}">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            LAPORKAN
            </span>
            </button>
            </a>
           
            </div>

            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr> 

                            <th scope="col" class="px-4 py-3">NO</th>
                            <th scope="col" class="px-4 py-3">PELAPOR</th>
                            <th scope="col" class="px-4 py-3">TERLAPOR</th>
                            <th scope="col" class="px-4 py-3">KELAS</th>
                            <th scope="col" class="px-4 py-3">LAPORAN</th>
                            <th scope="col" class="px-4 py-3">STATUS</th>
                            <th scope="col" class="px-4 py-3">BUKTI</th>
                            <th scope="col" class="px-4 py-3">AKSI</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
<tbody>



                    @forelse ($siswas as $siswa)
        <tr class="border-b dark:border-gray-700">
        <td class="px-4 py-3">{{ $loop->iteration }}</td>
        <td class="px-4 py-3">{{ $siswa->pelapor }}</td>
        <td class="px-4 py-3">{{ $siswa->terlapor}}</td>
        <td class="px-4 py-3">{{ $siswa->kelas}}</td>
        <td class="px-4 py-3">{{ $siswa->laporan}}</td>
        <td class="px-4 py-3">{{ $siswa->status}}</td>

        <td class="px-4 py-3"><img src="{{ asset('/storage/' . $siswa->bukti) }}" 
        class="rounded" style="width: 150px"></td>

             
                              
<td>

<a href="{{route('siswa.show',$siswa->id)}}"> 
<button class="mt-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
DETAIL
</span>
</button>
</a>

</td>
                                
  @empty
 </tr>
 @endforelse
                            
                     
</tbody>
                </table>
            </div>
           
        </div>
    </div>
    </section>
    
</x-app-layout>
