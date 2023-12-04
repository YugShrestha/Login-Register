
<x-layout>
<main class="login-form">
<x-flash-msg />
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                    <form method="POST" action="/users">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" />
                                @error('email')
                                <p class="text-yellow-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" />
                                @error('password')
                                <p class="text-yelow-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

</main>
</x-layout>
