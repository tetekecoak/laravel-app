@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-base-300 dark:border-base-700 dark:bg-base-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>
