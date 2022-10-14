<div class="bg-indigo-500 text-gray-100">
    <div class="px-20 py-7 flex justify-between">
        <div class="">
            <span class="uppercase font-black">VideoStore</span>
        </div>
        <div class="space-x-4">
            @guest 
                <a href="{{ route('login') }}" class="">Inscription</a>
                <a href="{{ route('register') }}" class="">Connexion</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}" class="">Dashboard</a>
                <a href="{{ route('logout') }}" class="">Déconnexion</a>
            @endauth
            
        </div>
    </div>
</div>