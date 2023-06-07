<div>
    {{-- The Master doesn't talk, he acts. --}}

    <div class="home">
        <div>
            <div class="search-container">
                <form action="" class="search-form">
                    <input wire:model="search_data" type="search" name="" placeholder="Search here.." id="search-box" onChange={handleInputChange} />
                    <label for="search-box" class="fas fa-search"></label>
                </form>
            </div>


        </div>
        <div class="row">
            <div class="content">
                <h3>LKR 300 Only per month</h3>
                <p>
                Welcome to our website featuring short stories written by a diverse group of Sri Lankan authors. Our collection showcases the unique perspectives and experiences of writers from various backgrounds within Sri Lanka. Whether you're in the mood for a heartwarming tale, a thrilling adventure, or a thought-provoking narrative, our selection of short stories has something for everyone. Our own Sri Lankan author, Ste, has contributed to our collection and we are proud to feature her work alongside other talented writers from our country. Explore our website and immerse yourself in the captivating world of Sri Lankan literature.

                    <!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
                    odit reiciendis porro blanditiis? Vel recusandae nam similique
                    enim labore voluptate qui exercitationem aperiam harum? Rem!-->
                </p>
                <a href="/register" class="btn">

                    Register Now
                </a>
            </div>

            <div class="book-slider">
                <a>

                    <img src="{{ asset('userUi/RP1.jpg') }}"></img>
                </a>
                <a>

                    <img src="{{ asset('userUi/RP2.jpg') }}"></img>
                </a>
                <a>

                    <img src="{{ asset('userUi/RP3.jpg') }}"></img>
                </a>
                <a>

                    <img src="{{ asset('userUi/RP4.jpg') }}"></img>
                </a>
            </div>
        </div>
    </div>


    <section class="featured" id="featured">
        <h1 class="heading">

            <span>Book Rack</span>
        </h1>
    </section>



    <div class="featured-slider">
        <div id="carousel-container">
            <div class="owl-carousel owl-theme">
                @foreach($Posts as $Post)
                <div class="item">
                    <a href="BookReader/{{$Post->id}}"><img src="{{asset('storage/'.$Post->cover_photo)}}"></img></a>
                </div>
                @endforeach

            </div>
        </div>

    </div>


    <section class="icons-container mt-3">
        <!--div class="icons">
            <i class="fas fa-paper-plane"></i>
            <!div class="content">
                <h3>Free Delivery</h3>
                <p>Order over LKR3000</p>
            </div->
        </div-->

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div classe="content">
                <h3>secure payment</h3>
                <p>100% secure payments</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

        <!--div class="icons">
            <i class="fas fa-eye"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div-->
    </section>




</div>