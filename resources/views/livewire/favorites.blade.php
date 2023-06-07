<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div>
    {{-- The Master doesn't talk, he acts. --}}

    <div class="home">
        
    </div>


    <section class="featured" id="featured">
        <h1 class="heading">

            <span>My Favorites</span>
        </h1>
    </section>



    <div class="featured-slider">
        <div id="carousel-container">
            <div class="owl-carousel owl-theme">
                @foreach($Posts as $Post)
                <div class="item">
                    <a href="BookReader/{{$Post->Books->id}}"><img src="{{asset('storage/'.$Post->Books->cover_photo)}}"></img></a>
                </div>
                @endforeach

            </div>
        </div>

    </div>


    <section class="icons-container mt-3">
        <!--div class="icons">
            <i class="fas fa-paper-plane"></i>
            <div class="content">
                <h3>Free Delivery</h3>
                <p>Order over LKR3000</p>
            </div>
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
</div>
