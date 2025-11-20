<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
    <div class="logo-container flex gap-[30px] items-center">
        <a href="{{ route('front.index') }}" class="flex shrink-0">
            <img src="{{ asset('assets/images/logos/favicon.ico') }}" alt="logo" />
        </a>
        <a href="{{ route('front.index') }}" class="flex shrink-0">
            {{-- Teks Brand hanya tampil di layar 'sm' (sekitar tablet) ke atas --}}
            <span class="text-xl md:text-3xl font-extrabold text-[#FF69B4] tracking-tight hidden sm:block">
                MagaKitty
            </span>
        </a>
        <div class="h-12 border border-[#FF69B4]"></div>
        <form method="GET" action="{{ route('front.search') }}"
            class="w-[450px] flex items-center rounded-full border border-[#FF69B4] p-[12px_20px] gap-[10px] focus-within:ring-2
            focus-within:ring-[#FF69B4] transition-all duration-300">

            @csrf

            <button type="submit" class="flex w-5 h-5 shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
            </button>
            <input type="text" name="keyword" id=""
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#FF69B4]"
                placeholder="Search hot trendy news today..." />
        </form>
    </div>
    <div class="flex items-center gap-3">
        <a href="{{ route('front.premium')}}"
            class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF69B4] font-semibold transition-all duration-300 border border-[#FF69B4] hover:ring-2 hover:ring-[#FF69B4] text-white w-full md:w-auto hover:shadow-[0_10px_20px_0_#FF69B4]">Premium</a>
        <a href=""
            class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF69B4] text-white hover:shadow-[0_10px_20px_0_#FF69B4]">
            <div class="flex w-6 h-6 shrink-0">
                <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
            </div>
            <span>Pasang Iklan</span>
        </a>
    </div>
</nav>