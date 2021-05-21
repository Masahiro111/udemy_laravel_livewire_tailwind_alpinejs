<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-indigo-200"> 
            <a href="{{ route('dashboard') }}">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div>
                @auth
                <a href="{{ route('dashboard')}}">Dashboard</a>
                @else
                <a href="{{ route('login')}}">Login</a>
                @endauth
            </div>
        </nav>

        <div class="flex container mx-auto items-center h-full">
            <div class="flex flex-col w-1/3">
            <h1 class="text-white font-bold text-5xl leading-tight mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            <p class="text-indigo-200 text-xl mb-10"> Mollitia cumque alias blanditiis aliquam facere nam sequi, 
                repellat expedita sapiente harum iure perferendis laborum corporis doloremque repellendus ut quis necessitatibus debitis.
            </p>

            <x-button class="py-3 px-8 bg-red-500 hover:bg-red-600">
                Subscribe
            </x-button>
            </div>
        </div>
    </div>


    <div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full">
        <div class="bg-pink-500 m-auto shadow-2xl rounded-xl p-8">
            <p class="text-white text-5xl font-extrabold text-center">
                Lets do it!
            </p>
            <form action="" class="flex flex-col items-center p-24">
                <x-input
                class="px-5 py-3 w-80 border border-blue-400"
                type="email"
                name="email"
                placeholder="Email address"
                ></x-input>
                <span class="text-gray-100 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                <x-button class="px-5 py-8 mt-5 w-80 bg-blue-500 justify-center">
                    Get In 
                </x-button>
            </form>
        </div>
    </div>
</x-guest-layout>