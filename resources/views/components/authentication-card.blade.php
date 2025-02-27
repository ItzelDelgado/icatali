<div class="min-h-screen flex flex-col md:flex-row md:gap-32 sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 h-96 bg-white shadow-md overflow-hidden sm:rounded-lg flex flex-col items-center justify-center">
        {{ $slot }}
    </div>
</div>
