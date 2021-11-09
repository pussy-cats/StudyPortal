<!doctype html>
<html class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>503 | Study Portal</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="h-full">
<div class="bg-white min-h-full flex flex-col lg:relative">
    <div class="flex-grow flex flex-col">
        <main class="flex-grow flex flex-col bg-white">
            <div class="flex-grow mx-auto max-w-7xl w-full flex flex-col px-4 sm:px-6 lg:px-8">
                <div class="flex-shrink-0 pt-10 sm:pt-16">
                    <a href="/" class="inline-flex">
                        <span class="sr-only">Workflow</span>
                        <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                    </a>
                </div>
                <div class="flex-shrink-0 my-auto py-16 sm:py-32">
                    <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">503 error</p>
                    <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Unavailable</h1>
                    <p class="mt-2 text-base text-gray-500">Sorry, this service is currently unavailable</p>
                    <div class="mt-6">
                        <a href="/" class="text-base font-medium text-indigo-600 hover:text-indigo-500">Go back home<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="flex-shrink-0 bg-gray-50">
            <div class="mx-auto max-w-7xl w-full px-4 py-16 sm:px-6 lg:px-8">
                <nav class="flex space-x-4">
                    <a href="/contact" class="text-sm font-medium text-gray-500 hover:text-gray-600">Contact Support</a>
                    <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Status</a>
                    <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Twitter</a>
                </nav>
            </div>
        </footer>
    </div>
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1470847355775-e0e3c35a9a2c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1825&q=80" alt="">
    </div>
</div>
</body>
</html>
