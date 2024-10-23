<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Guru
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
                 Guru
                </h2>
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



                    @forelse ($gurus as $guru)
        <tr class="border-b dark:border-gray-700">
        <td class="px-4 py-3">{{ $loop->iteration }}</td>
        <td class="px-4 py-3">{{ $guru->pelapor }}</td>
        <td class="px-4 py-3">{{ $guru->terlapor}}</td>
        <td class="px-4 py-3">{{ $guru->kelas}}</td>
        <td class="px-4 py-3">{{ $guru->laporan}}</td>
        <td class="px-4 py-3">{{ $guru->status}}</td>

        <td class="px-4 py-3"><img src="{{ asset('/storage/' . $guru->bukti) }}" 
        class="rounded" style="width: 150px"></td>

        <td class="px-4 py-3">
        @if($guru->status != 'Selesai')
        <form action="{{ route('siswa.complete', $guru->id) }}" method="POST">
          @csrf
          @method('PATCH')
          <button name="selesai">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
          </svg>
          </button>
          </form>
           @endif
          </td>                           
<td>



<!-- <a href="{{route('guru.edit',$guru->id)}}">
 <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
EDIT
</span>
</button>   
</a> -->


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
