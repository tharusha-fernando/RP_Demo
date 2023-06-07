<div>
    {{-- The whole world belongs to you. --}}
    <div class="grid grid-cols-12 gap-6  ">
        <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">@if(($guidlines=="ezcash")) Ez Cash @endif <!--And--> @if($guidlines=="mcash") M Cash @endif Paymentrs</h2>
            </header>

            <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @if($guidlines=="ezcash")
                <!--guid guid guid getmyuid-->
                <button type="button" wire:click="add_fav('upload')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default-->Upload Screenshot</button>
                <button type="button" wire:click="add_fav('mcash')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Upload Screenshot-->Read M Cash Instructions</button>
                <div class="m-4">
                    <h2>Comming Soon........</h2>
                    <p>How To Regester For Ez Cash..</p>
                    <!--div>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141726_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141743_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141754_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141858_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141918_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141937_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142021_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142050_Messages.jpg')}}" alt="">
                            </div>


                            <!--Bellow Remove>
                            <--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142346_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142413_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142427_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142434_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142445_Phone.jpg')}}" alt="">
                            </div>
                            <!-div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div->
                            <--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}"alt="">
                            </div->
                            <! -div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div->
                            <!-Above Remove->
                        </div>

                        <p>Our Ez Cash Details..</p>
                        <div>
                        <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142434_Phone.jpg')}}" alt="">
                            </div>
                        </div>
                        <p>Upload A Screenshot Of Confirmation SMS From Here ....</p>
                        <button type="button" wire:click="add_fav('upload')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default->Upload Screenshot</button>


                    </div-->
                </div>
                @elseif($guidlines=="mcash")
                <button type="button" wire:click="add_fav('ezcash')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Upload Screenshot-->Read Ez Cash Instructions</button>
                <button type="button" wire:click="add_fav('upload')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default-->Upload Screenshot</button>
                <div>
                <div id="m cash" class="m-4">
                    <!--h2>Comming Soon........</h2-->
                    <h1>How To Regester For <!--Ez-->M Cash..</h1>
                    <div>
                        <p>Please Follow bellow steps to regester for M cash. After Regestration Top Up your M cash account. And then again  dial #111# and poceed to pay. </p>
                        <p>
                        <!--එම් කෑෂ්-->M Cash සඳහා ලියාපදිංචි වීමට පහත සඳහන් පියවර අනුගමනය කරන්න. ඔබගේ
සබඳතාවය මත ඇතැම් පියවර වෙනස් විය හැක. ලියාපදිංචි විමෙන් පසුව ලඟම
කමියුනිකේෂන් එකකට ගොස් ඔබගේ එම් කෑෂ් ගිණුම ටොපප් කරගන්න. ඉන්පසු නැවත
#111# අමතා 070 2417545 ට ගෙවීම සිදු කරන්න. ඔබට ලැබෙන කෙටිපණිවිඩයේ
ස්ක්ටීන් ෂොට් <!----> - Screenshot එකක් ලබාගෙන මෙහි අප්ලෝඩ් කරන්න.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141726_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141743_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141754_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141858_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141918_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141937_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142021_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142050_Messages.jpg')}}" alt="">
                            </div>
                            <!--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142346_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142413_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142427_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142434_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-142445_Phone.jpg')}}" alt="">
                            </div-->
                            <!--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div-->
                            <!--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}"alt="">
                            </div-->
                            <!--div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg')}}" alt="">
                            </div-->
                        </div>

                        <p>Our <!--Ez-->M Cash Details..</p>
                        <div>
                        <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{asset('images/dialogze/IMG-20230429-WA0032.jpg')}}" alt="">
                            </div>
                        </div>
                        <p>Upload A Screenshot Of Confirmation SMS From Here ....</p>
                        <button type="button" wire:click="add_fav('upload')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default-->Upload Screenshot</button>


                    </div>
                </div>
                </div>
                @elseif($guidlines=="upload")
                <button type="button" wire:click="add_fav('ezcash')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Upload Screenshot-->Read Ez Cash Instructions</button>
                <button type="button" wire:click="add_fav('mcash')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Upload Screenshot-->Read M Cash Instructions</button>

                <div>

                    @if (session()->has('message_pwValidation'))
                    <div class="relative w-full p-4 text-red-600 bg-red-100 rounded-lg">{{ session('message_pwValidation') }}</div>
                    @endif

                    @if ($Screenshot_Image_)
                    <div class="relative w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">You Have Uploaded A Screenshot at {{$Duplicate->created_at}}. If You Upload Again It Will Be Updated</div>
                    @endif
                    <x-jet-validation-errors class="mb-3 alert-danger mx-4">
                    </x-jet-validation-errors>
                    @if (session()->has('message_customer'))
                    <div class="relative mt-4 w-full p-4 text-emerald-500 bg-emerald-500/30 rounded-lg">{{ session('message_customer') }}</div>
                    @endif
                    <form wire:submit.prevent="upload" enctype="multipart/form-data" class="m-4">
                        <div><img class="rounded-t-lg" src="{{asset('storage/'.$Screenshot_Image_)}}" alt="" /></div>

                        <div class="mb-6">
                            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><!--Base input-->Screenshot</label>
                            <input type="file" wire:model.defer="screenshot" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><!--Small input-->Number</label>
                            <input type="text" wire:model.defer="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-6">
                            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><!--Large input-->Description</label>
                            <input type="text" wire:model.defer="description" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div wire:loading class="text-green-600">
                            <!--Processing Payment--> <!--Uploading-->Wait...
                        </div>
                        <button type="submit" wire:loading.attr="disabled" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><!--Default--><!--Upload Screenshot--><!--Read Instructions-->Submit</button>


                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>