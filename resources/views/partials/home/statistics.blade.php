@php
$stats = [
    [
        'number' => '150+',
        'title' => 'Projects Completed'
    ],
    [
        'number' => '50+',
        'title' => 'Professional Workers'
    ],
    [
        'number' => '10+',
        'title' => 'Years Experience'
    ],
    [
        'number' => '100%',
        'title' => 'Client Satisfaction'
    ]
];
@endphp

<section class="bg-blue-950 py-20">

    <div class="container-custom">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($stats as $stat)

                <div class="text-center">

                    <h2 class="text-5xl font-bold text-white">
                        {{ $stat['number'] }}
                    </h2>

                    <p class="text-slate-300 mt-3">
                        {{ $stat['title'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>