<header class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('listings.index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
           
            <span class="ml-3 text-xl">Job Place</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Employeurs</a>
        </nav>
        <nav class="">
            <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Ajouter un Job</a>
        </nav>
</div>
    </div>
</header>
