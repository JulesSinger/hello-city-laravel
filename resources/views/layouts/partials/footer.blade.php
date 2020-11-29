<footer>
    <p class="text-gray-500">
        &copy; Copyright {{ date('Y') }}
        @if (!Route::is('about'))
            &middot; <a class="text-indigo-500 hover:text-indigo-700 underline" href="{{ route('about') }}">About Us</a>
        @endif
    </p>
</footer>