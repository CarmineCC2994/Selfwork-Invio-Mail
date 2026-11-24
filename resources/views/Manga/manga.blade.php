<x-layout>


  <div class="container-fluid mangas">
    <div class="row h-100 justify-content-center">
      <div class="row">
        <h2 class="display-5 text-white text-center text-color">I manga dell'anno</h2>
      </div>
      @foreach ($mangas as $manga)

      <div class="col-12 col-md-3">

        <x-card
        :manga="$manga"
        title="{{$manga['title']}}"
        />


      </div>


      @endforeach
      <div class="col-12 d-flex justify-content-center align-items-center">
      </div>
    </div>
  </div>


</x-layout>