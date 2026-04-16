<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-evenly align-items-center mt-5">

            @foreach($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">{{$article->description}}</p>
                        <a href="{{route('article.show' , $article)}}" class="btn btn-primary">See more about{{$article->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
</x-layout>