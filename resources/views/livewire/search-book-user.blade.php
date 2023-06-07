<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div>
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Search Books</h2>
                </header>
                <div>

                    <div class="relative overflow-x-auto">

                        <form>
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input wire:model="search_data" type="text" id="default-search" class="block w-full p-5 pl-10 text-sm text-gray-900 border border-gray-400 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search............" required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </form>

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            </thead>
                            <tbody class="m-4">
                                @foreach($Books as $Book)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <figure class="relative max-w-sm mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                                            <a href="BookReader/{{$Book->id}}">
                                                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="{{asset('storage/'.$Book->cover_photo)}}" alt="image description" style="width: 200px; height: 300px;">
                                            </a>

                                            <h6 class="text-lg font-bold dark:text-white">Heading 6</h6>

                                        </figure>

                                    </td>

                                    <!--td class="px-6 py-4">
                                <!-p class="mb-6 text-lg font-bold text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                                    <!-Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.->
                                    {{ $Book->name }} by
                                        {{ $Book->author }}
                                </p->

                                    <!-p>
                                    </p->
                                </td-->







                                    <!--th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{asset('storage/'.$Book->cover_photo)}}" alt="Book Cover Photo">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $Book->name }}
                                    {{ $Book->author }}
                                    <a href="{{asset('storage/'.$Book->cover_photo)}}">sdsdsds</a>
                                </td-->

                                </tr>
                                @endforeach
                                {{ $Books->links() }}

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>