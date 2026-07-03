@php
$projects = [
    [
        'title' => 'Mechanical Installation',
        'client' => 'PT Krakatau Steel',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200',
    ],
    [
        'title' => 'Scaffolding Project',
        'client' => 'Industrial Plant',
        'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1200',
    ],
    [
        'title' => 'Factory Expansion',
        'client' => 'Manufacturing Company',
        'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?q=80&w=1200',
    ],
];
@endphp

<section class="py-24 bg-white">

    <div class="container-custom">

        <div class="text-center max-w-3xl mx-auto">

            <span class="text-blue-900 uppercase tracking-widest font-semibold">
                Featured Projects
            </span>

            <h2 class="text-4xl font-bold mt-4">
                Our Recent Projects
            </h2>

            <p class="mt-6 text-slate-600 leading-8">
                Berikut beberapa proyek yang telah kami selesaikan dengan standar kualitas tinggi.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-8 mt-16">

            @foreach($projects as $project)

            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img
                        src="{{ $project['image'] }}"
                        alt="{{ $project['title'] }}"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-6">

                    <p class="text-sm text-blue-900 font-semibold uppercase">
                        Project
                    </p>

                    <h3 class="text-2xl font-bold mt-2">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-slate-500 mt-2">
                        {{ $project['client'] }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>