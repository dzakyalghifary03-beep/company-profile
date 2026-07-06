<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm">

    <div class="container-custom flex justify-between items-center h-24">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-4">

            <img
                src="{{ asset('images/logo.png') }}"
                class="w-14 h-14 object-contain"
                alt="Logo">

            <div>

                <h2 class="text-xl lg:text-2xl font-bold text-slate-900">

                    PT Bumi Insan Perkasa

                </h2>

                <p class="text-sm text-slate-500 hidden lg:block">

                    Engineering & Industrial Contractor

                </p>

            </div>

        </a>

        {{-- Desktop Menu --}}
        <div class="hidden lg:flex items-center gap-10 font-semibold">

            <a href="#home" class="hover:text-blue-900">Home</a>

            <a href="#about" class="hover:text-blue-900">About</a>

            <a href="#services" class="hover:text-blue-900">Services</a>

            <a href="#projects" class="hover:text-blue-900">Projects</a>

            <a href="#contact" class="hover:text-blue-900">Contact</a>

        </div>

        {{-- Desktop Button --}}
        <div class="hidden lg:block">

            <a href="#contact"
                class="bg-green-600 hover:bg-green-700 text-white px-7 py-3 rounded-xl font-bold transition">

                Get Quote

            </a>

        </div>

        {{-- Mobile Button --}}
        <button
            id="menuButton"
            class="lg:hidden">

            <i data-lucide="menu" class="w-8 h-8"></i>

        </button>

    </div>

    {{-- Mobile Menu --}}
    <div
        id="mobileMenu"
        class="hidden lg:hidden border-t bg-white">

        <div class="flex flex-col">

            <a href="#home" class="px-6 py-4 border-b">Home</a>

            <a href="#about" class="px-6 py-4 border-b">About</a>

            <a href="#services" class="px-6 py-4 border-b">Services</a>

            <a href="#projects" class="px-6 py-4 border-b">Projects</a>

            <a href="#contact" class="px-6 py-4 border-b">Contact</a>

            <a
                href="#contact"
                class="m-5 bg-green-600 text-white text-center py-3 rounded-xl font-semibold">

                Get Quote

            </a>

        </div>

    </div>

</nav>

<div class="h-24"></div>