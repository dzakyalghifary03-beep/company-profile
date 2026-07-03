@php
$clients = [
    'Pertamina',
    'Krakatau Steel',
    'PLN',
    'Chandra Asri',
    'Indorama',
    'Lotte Chemical'
];
@endphp

<section class="py-20 bg-white">

    <div class="container-custom">

        <div class="text-center">

            <span class="text-blue-900 font-semibold uppercase tracking-widest">
                Trusted By
            </span>

            <h2 class="text-4xl font-bold mt-4">
                Our Clients
            </h2>

            <p class="text-slate-600 mt-4">
                Dipercaya oleh berbagai perusahaan dalam penyelesaian proyek industri.
            </p>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mt-14">

            @foreach($clients as $client)

                <div class="bg-slate-100 rounded-xl h-24 flex items-center justify-center hover:bg-blue-900 hover:text-white transition">

                    <span class="font-semibold">
                        {{ $client }}
                    </span>

                </div>

            @endforeach

        </div>

    </div>

</section>