<x-layout>
    
    <div class="container mt-5">
        <div class="row d-flex align-content-center justify-content-center">
            <div class="col-12 col-md-6">
                <x-display-error></x-display-error>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    
                    <div class="col-12 d-flex align-content-center justify-content-evenly mt-5">
                        <a class="px-5 btn btn-secondary" href="{{route('register')}}">Register</a>
                        <button type="submit" class="px-5 btn btn-danger">Login</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>