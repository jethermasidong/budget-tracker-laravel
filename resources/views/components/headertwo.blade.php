<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
    <div class="flex items-center justify-between w-full max-w-5xl px-6 py-3 bg-white/70 backdrop-blur-md border border-gray-200/50 rounded-full shadow-lg relative">
        
        <div class="flex items-center gap-3 shrink-0">
            <img src="{{ asset('logo.png') }}" alt="Kagu Logo" class="w-10 h-10 rounded-full object-cover">
            <span class="text-xl font-bold text-gray-800 tracking-tight font-sentient">Kagu</span>
        </div>

        <div class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2">
            <a href="#" class="text-gray-700 text-xs font-bold tracking-widest hover:text-blue-500 transition">BUDGET</a>
            <a href="#" class="text-gray-700 text-xs font-bold tracking-widest hover:text-blue-500 transition">INCOME</a>
            <a href="#" class="text-gray-700 text-xs font-bold tracking-widest hover:text-blue-500 transition">EXPENSE</a>
        </div>

        <div class="hidden md:flex items-center gap-3">
            <a href="{{ route('dashboard') }}" class="text-gray-700 px-4 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">HOME</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 transition shadow-md active:scale-95">
                    LOGOUT
                </button>
            </form>
        </div>

        <div class="md:hidden flex items-center">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none p-2">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden absolute top-20 left-0 right-0 bg-white border border-gray-100 rounded-3xl shadow-2xl p-6 flex-col gap-4 md:hidden z-50">
            <a href="#" class="text-gray-700 font-bold border-b border-gray-50 pb-2">BUDGET</a>
            <a href="#" class="text-gray-700 font-bold border-b border-gray-50 pb-2">INCOME</a>
            <a href="#" class="text-gray-700 font-bold border-b border-gray-50 pb-2">EXPENSE</a>
            <a href="{{ route('dashboard') }}" class="text-blue-600 font-bold">HOME</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-2xl font-bold active:scale-95 transition">LOGOUT</button>
            </form>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => menu.classList.add('hidden'));
        });
    });
</script>