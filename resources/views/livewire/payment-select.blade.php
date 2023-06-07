<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-full  bg-white shadow-lg rounded-sm border border-gray-200">

            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Select Payment Methods Here</h2>
            </header>

            <!--a href="#" class="block max-w-sm mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
</a-->

            <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @if(!$checked==Auth::id())
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><!--Noteworthy technology acquisitions 2021-->Terms and Conditions<!--:--></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <!--Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.-->
                        <!--The Reading Panel charges a <b>monthly fee of 300 LKR</b> for its services.

                        Payment of the monthly fee is non-refundable. Once the fee has been paid, it cannot be returned.

                        By checking the "I agree" box and submitting the form, you agree to pay the monthly fee of 300 LKR to the Reading Panel.

                        The Reading Panel reserves the right to change the monthly fee at any time without prior notice.

                        If you fail to pay the monthly fee, the Reading Panel reserves the right to terminate your access to its services.

                        
                        You agree to comply with all applicable laws and regulations while using the Reading Panel's services.

                        The Reading Panel reserves the right to modify these terms and conditions at any time without prior notice.

                        By using the Reading Panel's services, you agree to be bound by these terms and conditions. If you do not agree with these terms and conditions, do no proceed.

-->The Reading Panel - Terms and Conditions 
                        Last updated April 4,2023
                        Subscription 
                        Free Tier
                        The service may be provided free of charge for first three episodes.
                        Paid subscription 
                        Your membership for 30 days is 300 LKR as agreed when you subscribe. You will be notified when your subscription expires. You Can not unsubscribe once you make the payments.

                        Billing Once Your Subscription expires you can renew it by paying the necessary payments again. This will not be automatically renewed.
                        Payment 
                        The valid,permitted payment methods are in your account page.You may update your payment method from time to time.
                        At the End of your subscription you will be back to the free tier. Depending on your interest you can update back to the premium package.
                        Charges 
                        We may change the plans  we offer for subscribing to the servises,or adjust the pricing of the same,at any time in any manner we determine.Any changes to the charges or your subscription,including notifications of the same,will take  effect in accordance with these terms.
                        Refunds  & Cancellation 
                        Except as specifically provided for in these Terms,payments are non-refundable.You Can not unsubscribe once you make the payments.



                    </p>
                    <!-- href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a-->

                    <form class="mx-auto" wire:submit.prevent="agreement">
                        <!--div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div-->
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input wire:model="remember" id="remember" type="checkbox" value="true" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"><!--Remember me-->I Agree</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
                @elseif($checked==Auth::id())
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><!--Noteworthy technology acquisitions 2021-->Terms and Conditions<!--:--></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <!--Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.-->
                        <!--The Reading Panel charges a <b> monthly fee of 300 LKR</b> for its services.

                        Payment of the monthly fee is non-refundable. Once the fee has been paid, it cannot be returned.

                        By checking the "I agree" box and submitting the form, you agree to pay the monthly fee of 300 LKR to the Reading Panel.

                        The Reading Panel reserves the right to change the monthly fee at any time without prior notice.

                        If you fail to pay the monthly fee, the Reading Panel reserves the right to terminate your access to its services.

                    
                        You agree to comply with all applicable laws and regulations while using the Reading Panel's services.

                        The Reading Panel reserves the right to modify these terms and conditions at any time without prior notice.

                        By using the Reading Panel's services, you agree to be bound by these terms and conditions. If you do not agree with these terms and conditions, do not proceed.
-->
                        The Reading Panel - Terms and Conditions 
                        Last updated April 4,2023
                        Subscription 
                        Free Tier
                        The service may be provided free of charge for first three episodes.
                        Paid subscription 
                        Your membership for 30 days is 300 LKR as agreed when you subscribe. You will be notified when your subscription expires. You Can not unsubscribe once you make the payments.

                        Billing Once Your Subscription expires you can renew it by paying the necessary payments again. This will not be automatically renewed.
                        Payment 
                        The valid,permitted payment methods are in your account page.You may update your payment method from time to time.
                        At the End of your subscription you will be back to the free tier. Depending on your interest you can update back to the premium package.
                        Charges 
                        We may change the plans  we offer for subscribing to the servises,or adjust the pricing of the same,at any time in any manner we determine.Any changes to the charges or your subscription,including notifications of the same,will take  effect in accordance with these terms.
                        Refunds  & Cancellation 
                        Except as specifically provided for in these Terms,payments are non-refundable.You Can not unsubscribe once you make the payments.




                    </p>
                    <!-- href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a-->

                    @if($formhide!="hide")
                    <form class="mx-auto" wire:submit.prevent="agreement">
                        <!--div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div-->
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input wire:model="remember" id="remember" type="checkbox" value="true" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"><!--Remember me-->I Agree</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                    @endif
                </div>

                <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white"><!--Top students-->Method:</h2>
                <ol class="max-w-md mx-auto space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li>
                        <a href="/submit_payment/"><span class="font-semibold text-gray-900 dark:text-white"><!--Bonnie Green</span> witssss ssssh <span class="font-semibold text-gray-900 dark:text-white">70</span> points->Credit/Debit Card</span></a-->
                        <a href="/submit_payment/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <!--Read more-->Credit/Debit Card <!--- This  Feature is Still not Available Please Try agin Later-->
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <!--a href="/mobilePayments/"><span class="font-semibold text-gray-900 dark:text-white"><Bonnie Green</span> witssss ssssh <span class="font-semibold text-gray-900 dark:text-white">70</span> points->Credit/Debit Card</span></a-->
                        <a href="/ezCash/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <Read more-><!--Credit/Debit Card--><!--Mobile Credit Mobitel-->Ez Cash And M Cash <!--- Not Available Dont Try <!- This  Feature is Still not Available Please Try agin Later--->
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    
                    <!--li>
                        <!a href="/mobilePayments/"><span class="font-semibold text-gray-900 dark:text-white"><Bonnie Green</span> witssss ssssh <span class="font-semibold text-gray-900 dark:text-white">70</span> points->Credit/Debit Card</span></a->
                        <a href="/ezCash/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <Read more-><!-Credit/Debit Card-><!-Mobile Credit Mobitel->Ez Cash And M Cash - Not Available Dont Try <!- This  Feature is Still not Available Please Try agin Later->
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li-->
                    <!--li>
                        <span class="font-sdsdsemibold ss ss text-gray-900 dark:text-white">Jese Leos</span> with <span class="font-semibold text-gray-900 dark:text-white">63</span> points
                    </li>
                    <li>
                        <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> with <span class="font-semibold text-gray-900 dark:text-white">57</span> points
                    </li-->
                </ol>

                @endif
            </div>






        </div>
    </div>
</div>