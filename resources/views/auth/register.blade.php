<html>

<head>
    @include('includes.headerbootstrap')
</head>
<style>
    .container {
        margin-top: 10rem;
    }

    #wrap {
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
</style>

<body>
    @include('includes.navbar')
    <div id="wrap" class="container col-lg-8 w-50">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 my-3">
                <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong
                            class="text-info">Ecommerce</strong></a></h1>
                <p class="text-center lead">Criar conta</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="name" class="form-label">Name</label>
                        @error('name')
                            <p class="font-weight-light text-danger text-center">Name não disponivel!</p>
                        @enderror
                    </div>
                    <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" required autofocus
                        autocomplete="name">
                </div>
                <!-- Email Address -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Digite um email válido!</p>
                        @enderror
                    </div>
                    <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email" required autofocus
                        autocomplete="username">
                </div>
                <!-- Password -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Senha</label>
                        @error('password')
                            <p class="font-weight-light text-danger text-center">Senhas inválidas !</p>
                        @enderror
                    </div>
                    <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="password" required
                        autocomplete="current-password">
                </div>
                <!-- Confirm Password -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                        @error('password_confirmation')
                            <p class="font-weight-light text-danger text-center">Senha não confere!</p>
                        @enderror
                    </div>
                    <input value="{{ old('password_confirmation') }}" name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                        required autocomplete="new-password">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="text-center">
                        <a href="{{ route('login') }}">Já possui registro ?</a>
                    </div>
                </div>
                <div class="d-grid gap-2 col-1 mx-auto">
                    <input type="submit" class="btn btn-primary" type="button">
            </form> 
            <div class="col-lg-2"></div>
        </div>
        @include('includes.footer')
    </div>
</body>
@include('includes.scriptsbootstrap')

</html>