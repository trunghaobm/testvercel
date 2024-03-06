@extends('layout')

@section('body')
<div id="finishModal" tabindex="-1"
class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex">
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
      <a href="https://www.facebook.com/policies_center/">
      <button type="button"
        class="finish-verify text-white bg-facebook hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        OK </button>
      </a>
    </div>
  </div>
</div>
</div>
@endsection