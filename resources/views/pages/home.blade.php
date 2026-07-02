@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="bg-slate-900 text-white min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <p class="text-orange-500 font-semibold uppercase tracking-widest">
                Welcome to Our Company
            </p>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mt-4">
                Building Tomorrow's Infrastructure
            </h1>

            <p class="mt-6 text-slate-300 text-lg leading-relaxed">
                We deliver professional engineering and contractor solutions with
                commitment, precision, and innovation for industrial and commercial projects.
            </p>

            <div class="mt-8 flex gap-4">
                <a href="#" class="bg-orange-500 hover:bg-orange-600 px-6 py-3 rounded-lg font-semibold transition">
                    Our Projects
                </a>

                <a href="#" class="border border-white hover:bg-white hover:text-slate-900 px-6 py-3 rounded-lg font-semibold transition">
                    Contact Us
                </a>
            </div>
        </div>

        <div>
            <img
                src="https://images.unsplash.com/photo-1504307651254-35680f356dfd"
                alt="Construction"
                class="rounded-2xl shadow-2xl">
        </div>

    </div>
</section>

@endsection