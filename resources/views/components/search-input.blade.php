
@props(['placeholder' => "Search..."])
<div class="max-w-md">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" {{$attributes->merge(["class" => 'block w-full max-h-[34px]  ps-10 text-sm text-gray-900 border border-base-300 rounded-md bg-base-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-base-700 dark:border-base-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500'])}} id="default-search" placeholder="{{$placeholder}}"/>
    </div>
</div>
