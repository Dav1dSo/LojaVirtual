<html>

<head>
    @include('includes.headerbootstrap')
</head>
<style>

    #wrap {
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
        margin-top: 7rem;

    }

    .include_footer {
        margin-top: 28vh;
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
                        <label for="name" class="form-label">Usuário</label>
                        @error('name')
                            <p class="font-weight-light text-danger text-center">Usuário não disponivel!</p>
                        @enderror
                    </div>
                    <input value="{{ old('name') }}" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" id="name" required autofocus
                        autocomplete="name"
                        placeholder="Digite seu usuário">
                </div>
                <!-- Email Address -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Digite um email válido!</p>
                        @enderror
                    </div>
                    <input value="{{ old('email') }}" name="email" type="email"
                        class="form-control @error('email') is-invalid @enderror " id="email" required autofocus
                        autocomplete="username"
                        placeholder="Digite seu email">
                </div>
                <!-- Password -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Senha</label>
                        @error('password')
                            <p class="font-weight-light text-danger text-center">Senhas inválidas ou muito curtas!</p>
                        @enderror
                    </div>
                    <input value="{{ old('password') }}" name="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" id="password" required
                        autocomplete="current-password"
                        placeholder="Escolha sua senha">
                </div>
                <!-- Confirm Password -->
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                        @error('password_confirmation')
                            <p class="font-weight-light text-danger text-center">Senha não confere!</p>
                        @enderror
                    </div>
                    <input value="{{ old('password_confirmation') }}" name="password_confirmation" type="password"
                        class="form-control @error('password') is-invalid @enderror" id="password_confirmation" required
                        autocomplete="new-password"
                        placeholder="Repita a senha">
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
    </div>
    <footer class="fixed-bottom">
        @include('includes.footer')
    </footer>
</body>
@include('includes.scriptsbootstrap')

</html>
