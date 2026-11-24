<x-layout>
  
    
      <div class="container-fluid mangas">
        <div class="row h-100 justify-content-center">
            <div class="row">
                <h2 class="display-5 text-black text-center text-color">Dettagli del manga: {{$manga['title']}}</h2>

            </div>
  <div class="col-12 col-md-6 text-black d-flex flex-column justify-content-center align-items-center">
    <h5>Titolo: {{$manga['title']}}</h5>
    <h6>Mangaka: {{$manga['author']}}</h6>
    <p>Genere: {{$manga['genres']}}</p>
  </div>
  <div class="col-12 col-md-6 d-flex justify-content-center">
    <img src="{{$manga['img']}}" alt="poster di {{$manga['title']}}" class="img-fluid">
  </div>
        </div>
      </div>
    

    </x-layout>
