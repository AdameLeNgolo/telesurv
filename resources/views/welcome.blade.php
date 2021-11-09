<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="bg-gray-100 ">

        <div class="flex flex-row justify-around h-14 p-4 mx-auto bg-gray-300 ">
            <a href="#" >Telesurveillance</a>
            <a href="#">Home</a>
            <a href="#">Suivi GAB</a>
            <a href="#">Suivi App</a>
            <a href="#">Gestion Incidents</a>
            <a href="#">Liste des CCS</a>

            <div class="float-right">
                <a href="#" class="bg-blue-300 p-3 px-5 border border-black border rounded">Login</a>
            </div>
        </div>

        <div class="flex">
            
            <div class="max-w-md mx-auto bg-white">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://images.pexels.com/photos/3493730/pexels-photo-3493730.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="de joyeux singes">
                    </div>
                    <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
                            <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>
