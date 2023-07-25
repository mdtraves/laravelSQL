<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body class="antialiased">
        <div class="relative sm:flex flex-col gap-x-4 sm:justify-center sm:items-center bg-gray-100 min-h-screen bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="w-2/3 flex flex-col gap-y-2 items-start">
                @if(Session::has('data')) 
                    {{ session('data')['status'] }} 
                    {{ session('data')['id'] }} 
                    {{ session('data')['item'] }} 
                    {{ session('data')['msg'] }} 
                @endif
                <h1>ToDo List</h1>
                <form action="{{ route('saveItem') }}" method='POST' class="flex flex-col gap-y-2">
                    @csrf
                    <input type="text" name="listItem" class="border p-2" id="">
                    <button class="rounded bg-green-600 text-white p-2">Save Item</button>
                </form>

                @foreach ($listItems as $item)

                    <div class="flex gap-x-4">
                        {{ $item->id }}
                        {{ $item->name }}
                        {{ $item->created_at }}
                        <form action="{{ route('editItem') }}" method="POST" class="flex gap-x-1">
                            @csrf

                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="text" name="listItemEdit" class="border p-2 h-8" id="">
                            <button class="rounded text-sm bg-blue-600 text-white px-2 py-1">Edit</button>
                            
                        </form>
                        <form action="{{ route('markComplete', $item->id) }}" method="POST">
                            @csrf

                            @if ($item->is_complete)
                                <button class="rounded text-sm bg-gray-600 text-white px-2 py-1">Complete</button>
                            @else
                                <button class="rounded text-sm bg-green-600 text-white px-2 py-1">Complete</button>
                            @endif

                        </form>
                        <form action="{{ route('deleteItem', $item->id) }}" method="POST">
                            @csrf

                            <button class="rounded text-sm bg-red-600 text-white px-2 py-1">Delete</button>
                            
                        </form>
                        <form action="{{ route('viewItem', $item->id) }}" method="POST">
                            @csrf

                            <button class="rounded text-sm bg-purple-600 text-white px-2 py-1">View</button>
                            
                        </form>

                        
                    </div>

                @endforeach

            </div>
        </div>
    </body>
</html>
