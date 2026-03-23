<nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
  <div class="flex items-center justify-between w-full max-w-5xl px-6 py-3 bg-white/70 backdrop-blur-md border border-gray-200/50 rounded-full shadow-lg">
    
    <div class="flex items-center gap-3">
        <img src="{{ asset('logo.png') }}" alt="Kagu Logo" class="w-10 h-10 rounded-full object-cover shadow-sm">
        <span class="text-xl font-bold text-gray-800 tracking-tight font-sentient">Kagu</span>
    </div>

    <div class="flex items-center gap-3">
        <a href="{{ route('dashboard') }}" class="text-gray-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
            HOME
        </a>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="bg-blue-400 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition shadow-md active:scale-95">
                LOGOUT
            </button>
        </form>
    </div>
    
  </div>
</nav>