<x-layout>

    <x-display-error></x-display-error>
    
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-12 text-center d-flex flex-column align-items-center justify-content-center">
                <h1>{{$article->name}}</h1>
                <p>{{$article->description}}</p>
                <img src="{{Storage::url($article->img)}}" alt="immagine articolo" class="img-fluid">
            </div>
            <div class="row d-flex justify-content-center flex-column align-items-center">
                @auth
                <button class="col-12 col-md-4 btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                <a href="{{route('article.edit' , $article)}}" class="col-12 col-md-4 btn btn-primary mt-3">Modify</a>
                @endauth
            </div>
        </div>
    </div>
    
    <x-modal :article="$article"></x-modal>

</x-layout>