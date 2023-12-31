<html>

<head>
    @include('includes.headerbootstrap')
</head>
<style>
    
    .container {
        margin-top: 10rem;
    }

    #wrap {
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
    }

</style>

<body>
    @include('includes.navbar')
    <div id="wrap" class="container col-lg-8 w-50">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 my-3">
                <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong class="text-info">Ecommerce</strong></a></h1>
                <p class="text-center lead">Faça seu login</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Email não encontrado!</p>
                        @enderror
                    </div>                    
                    <input placeholder="Digite seu email" value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required autofocus autocomplete="username">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Password</label>
                        @error('password')
                            <p class="font-weight-light text-danger text-center">Senha incorreta!</p>
                        @enderror
                    </div>
                    <input placeholder="Digite sua senha" value="{{ old('password') }}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                </div>
                <div class="mb-3 w-50 mx-auto d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">Relembrar</label>
                    </div>
                    <div>
                        <a href="{{ route('password.request') }}">Esqueceu sua senha ?</a>
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
