<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="grid grid-cols-12 gap-6  ">
        <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Reviews</h2>
            </header>
            @foreach($Reviews as $Review)<!--@--><!--$_COOKIE-->
            <a href="#" class="block max-w-sm mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$Review->User->name}}<!--Noteworthy technology acquisitions 2021--></h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{$Review->review}}<!--Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.--></p>
</a>

            @endforeach
        </div>
    </div>
    
</div>
