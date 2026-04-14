<x-layout>
    
    <div class="container">
        <div class="row d-flex align-content-center justify-content-center mt-5">
            <div class="col-12 col-md-6 mt-5">

                <x-display-error></x-display-error>

                <form action="{{route('article.update' , $article)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('Put')

                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input placeholder="{{$article->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea placeholder="{{$article->description}}" name="description" type="textarea" class="form-control" id="description"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <img src="{{Storage::url($article->img)}}" alt="">
                        <label for="img" class="form-label">Image</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
    
</x-layout>