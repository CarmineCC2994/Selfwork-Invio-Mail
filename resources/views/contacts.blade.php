<x-layout>
    <header class="header py-5" style="height: auto; min-height: 95vh;">
        <div class="container">
          
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <!-- I TUOI 3 BOX SOCIAL -->
            <div class="row justify-content-center mb-5">
                <!-- WHATSAPP -->
                <div class="col-md-3 box d-flex flex-column justify-content-center align-items-center text-white text-center">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-whatsapp"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Scrivici su WhatsApp</p>
                        </div>
                    </div>
                </div>

                <!-- INSTAGRAM -->
                <div class="col-md-3 box d-flex flex-column justify-content-center align-items-center text-white text-center">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-instagram"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Seguici su Instagram</p>
                        </div>
                    </div>
                </div>

                <!-- FACEBOOK -->
                <div class="col-md-3 box d-flex flex-column justify-content-center align-items-center text-white text-center">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-facebook"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Seguici su Facebook</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 bg-dark bg-opacity-75 p-4 rounded shadow text-white">
                    <h2 class="text-center mb-4 text-color">Contattaci</h2>

                    <form action="{{ route('contacts.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger px-4">Invia messaggio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</x-layout>