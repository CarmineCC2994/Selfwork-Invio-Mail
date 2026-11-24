<x-layout>
    <header>
        <div class="container-fluid header">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-6">
                    <h2 class="text-white text-color text-center">Chi siamo</h2>
                    <p class="text-white text-color">
                        Siamo prima di tutto lettori, collezionisti e appassionati di fumetto giapponese. Questo spazio nasce dalla voglia di condividere recensioni approfondite, analisi delle opere più iconiche e consigli per scoprire nuove perle nascoste oltre ai soliti titoli mainstream.
                    </p>
                </div>

                <div class="col-6">
                    <img  src="/media/chisem.jpg" alt="teammanga" class="shadow rounded">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container userHeight">
            <div class="row h-100 justify-content-around align-items-center">
                @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user['name'] }} {{ $user['surname'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $user['role'] }}</h6>
                                <a href="{{ route('aboutUsDetail', ['name' => $user['name']]) }}" class="card-link">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>