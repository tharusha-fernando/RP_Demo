<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800"><!--Reviews-->Payments</h2>
                </header>


                <div class="relative overflow-x-auto">

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <!--select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected><!-Choose a country->Paid Or No Select</option>
  <option value="US" wire:model="select">Paid<!--United States-></option>
  <option value="CA" wire:model="select" wire:click="select_">Not<!-Canada-></option>
  <-option value="FR">France</option>
  <option value="DE">Germany</option->
</select-->

                    <!--form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input wire:model="search_data" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search............" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form-->
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <!--Reviews-->User<!--s-->
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    <!--Action-->Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <!--Action--><!--Date-->Amount - Note Without Decimal Cents
                                </th>
                                <!--th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users as $User)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                    <h5 class="text-xl font-bold dark:text-white">{{$User->User->name}}</h5>
                                   
                                </th>
                                <td class="px-6 py-4">
                                    {{$User->date_initiated}}
                               </td>
                               <td class="px-6 py-4">
                                    {{$User->amount}}
                               </td>
                               <td class="px-6 py-4">
                                    {{$User->method}}
                               </td>
                <!--td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td-->
                </tr>
                @endforeach
                {{ $Users->links() }}
                </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
</div>
</div>
