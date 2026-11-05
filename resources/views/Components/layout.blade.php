<!DOCTYPE html>

<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800/50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3kAdPo0KNHxqN9slb8yBgUmtFyFrHCa8XdEE1YNncdw&s=10"
                                alt="Your Company" class="size-20" />
                        </div>
                        <div>
                            <div class="ml-10 flex items-baseline space-x-4">

                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>

                            </div>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">

                        @guest
                            <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                        @endguest

                        @auth
                          <form method="POST" action="/logout">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                          </form>
                        @endauth

                    </div>
                </div>
            </div>
        </nav>

        <header
            class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between ">
                <h1 class="text-3xl font-bold tracking-tight text-white">{{ $heading }}</h1>

                <x-button href="/jobs/create">Create jobs</x-button>

            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
