<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 ">
    <x-navbar />
    <div class="flex items-center justify-center">

   
    <div class="w-full max-w-md bg-gray-900 border border-gray-700 rounded-2xl shadow-xl p-6">

        <h1 class="text-2xl font-bold text-white text-center mb-6">
            ✅ My Todo App
        </h1>

        <div class="flex gap-2 mb-5">
            <input
                type="text"
                placeholder="Enter a new task..."
                class="flex-1 px-4 py-2 rounded-lg bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-green-600"
            />

            <button
                class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-semibold transition"
            >
                Add
            </button>
        </div>

        <ul class="space-y-3">
            <li class="flex items-center justify-between bg-gray-800 px-4 py-2 rounded-lg">
                <div class="flex items-center gap-3">
                    <input type="checkbox" class="w-4 h-4 accent-green-600">
                    <span class="text-white">Learn Laravel Basics</span>
                </div>
                <button class="text-red-400 hover:text-red-500">✕</button>
            </li>
        </ul>

        <p class="text-gray-400 text-sm text-center mt-6">
            Built with ❤️ using Laravel & Tailwind
        </p>

    </div>
 </div>
</body>
</html>
