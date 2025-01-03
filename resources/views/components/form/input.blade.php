@props(['id', 'name', 'type', 'label', 'placeholder', 'required' => false])

<div class="mb-5">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium ">{{ $label }} {{$required ? '*' : null}} </label>
    
    <input type="{{ $type ?? 'text' }}"
           id="{{ $id }}"
           name="{{ $name }}"
           {{$attributes->merge([
               'class' => 'bg-base-50  text-sm rounded-lg block w-full p-2.5 
                          focus:ring-blue-500 focus:border-blue-500 dark:bg-base-700 dark:border-base-600 
                          dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500' . 
                          ($errors->has($name) ? ' border-red-500 focus:ring-red-500 focus:border-red-500 dark:border-red-600 dark:focus:ring-red-600 dark:focus:border-red-600' : '')
           ])}}
           placeholder="{{ $placeholder ?? 'Type '.$label }}"
           @if($required) required @endif 
           @if($errors->has($name)) autofocus @endif/>

    @error($name)
        <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
