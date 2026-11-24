<div class="card mb-3" style="width: 18rem;">
    <img
        src="{{ $manga['img'] }}"
        class="card-img-top cardImg"
        alt="Copertina di {{ $title }}"
    >
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $manga['author'] }}</h6>
        <p class="card-text">{{ $manga['genres'] }}</p>
        <a href="{{ route('manga.detail', ['id' => $manga['id']]) }}" class="btn btn-primary">
            Leggi di più
        </a>
    </div>
</div>