<nav class="bg-white">
    <div class="container mx-auto max-w-6xl py-6">
        <div class="flex items-center justify-between">
            <a href="{{ route('homeView') }}" class="text-3xl font-bold text-primary-or">Auto<span class="text-black">MARKET</span>Hub</a>

            <div id="navigation" class="flex space-x-6">
                @guest
                    <a href="{{ route('loginView') }}" class="text-primary-or hover:text-primary-hor font-bold">Login</a>
                    <a href="{{ route('registerView') }}" class="text-primary-or hover:text-primary-hor font-bold">Register</a>
                @else
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('AdminDashboardView') }}" class="text-primary-or hover:text-primary-hor font-bold">Dashboard</a>
                    @endif
                    <a href="{{ route('homeView') }}" class="text-primary-or hover:text-primary-hor font-bold">Home</a>
                    <a href="{{ route('myAdsView') }}" class="text-primary-or hover:text-primary-hor font-bold">My ads</a>
                    <a href="{{ route('settingsView') }}" class="text-primary-or hover:text-primary-hor font-bold">Settings</a>
                    <a href="{{ route('carAdvertisementView') }}" class="text-primary-or hover:text-primary-hor font-bold">Create Advertisement</a>
                    <a href="{{ route('logout') }}" class="text-primary-or hover:text-primary-hor font-bold">Logout</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
