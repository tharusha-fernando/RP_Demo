<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="grid grid-cols-12 gap-6  ">
        <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Read Book</h2>
            </header>

            <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{asset('storage/'.$Book->cover_photo)}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 mx-auto text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$Book->name}}</h5>
                        <p class="mx-auto mx-auto">by {{$Book->author}}</p>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$Book->description}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Likes {{$Favorites}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Views {{$View_Count}}</p>
                    <p class="mb-3 font-normal  dark:text-gray-400">Status -  <span class="text-uppercase">{{$Book->status}}</span></p>

                    <a href="/Reviews/{{$Book->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Reviews</a>
                     @if (session()->has('message_customer'))
                    <div class="relative w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">{{ session('message_customer') }}</div>
                    @endif

                    <!-- asasasasaa href="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read more</a-->

                    <!-- Modal toggleasasasasa ->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

< Main modal >
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        < Modal content >
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            < Modal header>
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            < Modal body>
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <Modal footer >
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div-->

                    <!-- Modal toggle -->
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button">
                        Add <!--a-->Reviews
                    </button>

                    <!-- Main modal -->
                    <div wire:ignore.self id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                            <!-- Modal content -->
                            <form wire:submit.prevent="add_reviews"><!--wire:click="add_reviews" data-modal-hide="defaultModal"-->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <x-jet-validation-errors class="mb-3 alert-danger mx-4">
                                    </x-jet-validation-errors>
                                    @if (session()->has('message_pwValidation'))
                                    <div class="relative w-full p-4 text-red-600 bg-red-100 rounded-lg">{{ session('message_pwValidation') }}</div>
                                    @endif
                                    @if (session()->has('message_customer'))
                                    <div class="relative w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">{{ session('message_customer') }}</div>
                                    @endif
                                    <!-- Modal header -->
                                    <div class="m-20">

                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                                        <textarea wire:model.defer="review" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <div wire:loading class="text-green-600">
                                            <!--Processing Payment--> <!--Uploading-->Wait...
                                        </div>
                                        <button type="submit" wire:loading.attr="disabled" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit<!--I accept--></button>
                                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if ($fav_data->isEmpty())
                    <!--button wire:click="add_fav" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden xs:block ml-2">Like <-Add <!-View->To Favorites></span>
                    </button-->
                    <button type="button" wire:click="add_fav" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default-->Like</button>

                    @else
                    <!--button wire:click="remove_fav" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden xs:block ml-2">UnLike<Remove<!-Add-><!-asasas <!-View-><--To->From Favorites></span>
                    </button-->
                    <button type="button" wire:click="remove_fav" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><!--Red-->UnLike</button>

                    @endif
                    @if (is_null($last_read))
                    <!--button wire:click="add_fav" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden xs:block ml-2">Like <-Add <!-View->To Favorites></span>
                    </button-->
                    <button type="button" wire:click="add_last_read_data_bubububabubububa" wire:loading.attr="disabled"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Like-->Book Mark This Page</button>

                    @else
                    <!--button wire:click="remove_fav" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden xs:block ml-2">UnLike<Remove<!-Add-><!-asasas <!-View-><--To->From Favorites></span>
                    </button-->
                    <!--button type="button" wire:click="load_last_read_data_bubububabubububa" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><!-Red->UnLike</button-->
                    <button type="button" wire:click="add_last_read_data_bubububabubububa" wire:loading.attr="disabled"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Like-->Book Mark This Page</button>
                    <button type="button" wire:click="go_bubububabubububa" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Like--><!--Book Mark This Page-->Go To Last Viewed Chapter</button>

                    @endif





                </div>
            </div>


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Chapters -

                            </th>

                        </tr>
                        <tr>
                            @if(Auth::user()->subendDate >= Carbon\Carbon::now()->setTimezone('Asia/Colombo'))
                            <div class="bg-blue border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                                <p class="font-bold"><!--Informational message-->Thank You For Being A Premium User</p>
                                <p class="text-sm"><!--Some additional text to explain said message.-->Your Package Is Available Until {{Auth::user()->subendDate}}</p>
                            </div>
                            @else
                            <th scope="col" class="px-6 py-3">
                                <a href="/PaymentMethod/">
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong class="font-bold">Alert!!!!<!--Holy smokes!--></strong>
                                        <span class="block sm:inline">You Are Currenlty On Free Tier. Only <!--Three--> <!--Epiosodes Are-->One Episode Is Available For You. Please Activate Premium Package For Full Access For Only <b>300 LKR</b>. Click Here.... <!--Currently Only Credit Card Payments Are Accepted.--> </span>
                                        <!--span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fasaillasa-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path d="M14.34asa8 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span-->
                                    </div>
                                </a>
                            </th>
                            @endif

                        </tr>
                    </thead>
                    <tbody class="overflow-y-auto ">
                        @foreach($Chapters as $Chapter)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$Chapter->name}}
                            </th>
                        </tr>
                        <tr class="bg-white border-b select-none dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p class="mb-3 text-gray-500 dark:text-gray-400 whitespace-pre-wrap">{!! nl2br(e($Chapter->data)) !!}</p>

                            </th>
                        </tr>
                        @endforeach
                        {{ $Chapters->links() }}
                        <tr>
                            @if(Auth::user()->subendDate >= Carbon\Carbon::now()->setTimezone('Asia/Colombo'))
                            <!--div class="bg-blue border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
  <p class="font-bold"><!-Informational message->Thank You For Being A Premium User</p>
  <p class="text-sm"><!-Some additional text to explain said message.->Your Package Is Available Until {{Auth::user()->subendDate}}</p>
</div-->
                            @else
                            <th scope="col" class="px-6 py-3">
                                <a href="/PaymentMethod/">
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong class="font-bold">Alert!!!!<!--Holy smokes!--></strong>
                                        <span class="block sm:inline">You Are Currenlty On Free Tier. Only <!--Three--> <!--Epiosodes Are-->One Episode Is Available For You. Please Activate Premium Package For Full Access For Only <b>300 LKR</b>. Click Here.... <!--Currently Only Credit Card Payments Are Accepted.--> </span>
                                        <!--span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fasaillasa-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <title>Close</title>
                                            <path d="M14.34asa8 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                        </svg>
                                    </span-->
                                    </div>
                                </a>
                            </th>
                            @endif

                        </tr>

                    </tbody>
                </table>

            </div>


        </div>
    </div>
</div>