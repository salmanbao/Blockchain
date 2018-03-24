@include('user.layout.header')
   
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nadra BlockChain
                </div>

                <div class="links">
                    <a href="{{url('/apply_cnic')}}">Apply For CNIC</a>
                    <a href="{{url('/verify_cnic')}}">Verify CNIC</a>
                    <a href="{{url('/modify_cnic')}}">Modificaion Of CNIC</a>
                    <a href="{{url('/reissue_cnic')}}">Re-Issuance</a>
                    <a href="{{url('/cancel_cnic')}}">Cancellation</a>
                </div>
            </div>
        </div>
        @include('user.layout.footer')
  
