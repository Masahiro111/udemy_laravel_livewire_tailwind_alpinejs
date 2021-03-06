<div x-data="{
    showSubscribe: @entangle('showSubscribe'),
    showSuccess: @entangle('showSuccess'),
}">
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
                <h1 class="text-white font-bold text-5xl leading-tight mb-4">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</h1>
                <p class="text-indigo-200 text-xl mb-10"> Mollitia cumque alias blanditiis aliquam facere nam sequi,
                    repellat expedita sapiente harum iure perferendis laborum corporis doloremque repellendus ut
                    quis
                    necessitatibus debitis.
                </p>

                <x-button x-on:click="showSubscribe=true,showSuccess=true"
                    class="py-3 px-8 bg-red-500 hover:bg-red-600">
                    Subscribe
                </x-button>
            </div>
        </div>
    </div>


    <x-modal class="bg-pink-500" trigger="showSubscribe">
        <p class="text-white text-5xl font-extrabold text-center">
            Lets do it!
        </p>
        <form wire:submit.prevent="subscribe" class="flex flex-col items-center p-24">
            <x-input class="px-5 py-3 w-80 border border-blue-400" type="email" name="email" placeholder="Email address"
                wire:model="email"></x-input>
            <span class="text-gray-100 text-xs">
                {{ $errors->has('email') ? $errors->first('email') :  'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}
            </span>
            <x-button class="px-5 py-8 mt-5 w-80 bg-blue-500 justify-center">
                Get In
            </x-button>
        </form>
    </x-modal>

    <x-modal class="bg-green-500" trigger="showSuccess">
        <p class="animate-pulse text-white text-9xl font-extrabold text-center">
            &check;
        </p>
        <p class="text-white text-5xl font-extrabold text-center">
            Great!
        </p>
        <p class="text-white text-3xl text-center">
            See you in your inbox.
        </p>
    </x-modal>



    {{-- <div class="flex fixed top-0 bg-green-500 bg-opacity-60 items-center w-full h-full" x-show="showSuccess"
        @click.self="showSuccess=false" x-on:keydown.escape.window="showSuccess=false">
        <div class="bg-pink-500 m-auto shadow-2xl rounded-xl p-8">
            <p class="animate-pulse text-white text-9xl font-extrabold text-center">
                &check;
            </p>
            <p class="text-white text-5xl font-extrabold text-center">
                Great!
            </p>
            <p class="text-white text-3xl text-center">
                See you in your inbox.
            </p>
        </div>
    </div> --}}
</div>