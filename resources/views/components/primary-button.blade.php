<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-myspot-blue dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-myspot-blue-hover dark:hover:bg-white focus:bg-myspot-blue-hover dark:focus:bg-white active:bg-myspot-blue-pressed dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-myspot-blue focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
