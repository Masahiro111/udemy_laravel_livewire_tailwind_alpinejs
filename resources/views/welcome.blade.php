<x-guest-layout>
    <div class="flex flex-col bg-indigo-900 w-full h-screen">
        <nav class="flex pt-5 justify-between container mx-auto text-indigo-200"> 
            <a href="#">
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
</x-guest-layout>