

@if (Session::has('message'))
<div class="container mx-auto">
    <div class="w-full max-w-xxl bg-blue-200 mx-auto mt-6 p-2">
        <div class="flex space-x-2">
        <svg class="w-6 h-6 stroke-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
        <p class="text-blue-900 font-semibold">Your operation has been done successfully</p>
        </div>
        <p class="ml-8 text-blue-800">{{Session::get('message')}}</p>
    </div>  
</div>       
@endif