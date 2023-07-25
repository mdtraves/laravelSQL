<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Item</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body class="antialiased">
        <div class="relative sm:flex flex-col gap-x-4 sm:justify-center sm:items-center bg-gray-100 min-h-screen bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="w-2/3 flex flex-col gap-y-2 items-start">
            
                <h1>ToDo Item</h1>
                
                <div class="flex gap-x-4">
                    {{ $listItem->id }}
                    {{ $listItem->name }}
                    {{ $listItem->created_at }}
                </div>

                <a href="/">Return</a>

            </div>
        </div>
    </body>
</html>
