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
                <p class="text-center lead">Editar informações de perfil.</p>
            </div>
            <form method="post" action="{{ route('profile.update') }}">
                <div class="ms-4 text-center ">
                    <h5>Editar usuário</h5>
                    <p>Atualize seus dados de usuário</p>
                </div>
                @csrf
                @method('patch')
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="name" class="form-label">Usuário</label>
                        @error('name')
                            <p class="font-weight-light text-danger text-center">Usuário não disponivel!</p>
                        @enderror
                    </div>
                    <input value="{{ Auth::user()->name }}" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" id="name" required autofocus
                        autocomplete="name">
                </div>      
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Digite um email válido!</p>
                        @enderror
                    </div>
                    <input value="{{ Auth::user()->email }}" name="email" type="email"
                        class="form-control @error('email') is-invalid @enderror " id="email" required autofocus
                        autocomplete="username">
                </div>
                <div class="d-grid gap-2 mt-4 col-1 mx-auto">
                    <input type="submit" class="btn btn-primary" type="button">
                </div>
            </form>
            <hr>
            <form method="post" action="{{ route('password.update') }}">
                <div class="ms-4 mt-5 text-center">
                    <h5>Alterar senha</h5>
                    <p>Atualize seua senha</p>
                </div>
                @csrf
                @method('put')
            
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="current_password" class="form-label">Senha atual</label>
                        @error('current_password')
                            <p class="font-weight-light text-danger text-center">Senha incorreta!</p>
                        @enderror
                    </div>
                    <input placeholder="Digite sua senha" name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" id="password" required autocomplete="current-password">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Nova Senha</label>
                        @error('password')
                            <p class="font-weight-light text-danger text-center">Senha incorreta!</p>
                        @enderror
                    </div>
                    <input placeholder="Senha atual" value="{{ old('password') }}" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                        @error('password_confirmation')
                            <p class="font-weight-light text-danger text-center">Senha incorreta!</p>
                        @enderror
                    </div>
                    <input placeholder="Repita nova senha" name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password" required autocomplete="current-password">
                </div>
                
                <div class="d-grid gap-2 mt-4 col-1 mx-auto">
                    <input type="submit" class="btn btn-primary" type="button">
                </div>
            </form>
            <div class="col-lg-2"></div>
        </div>
    </div>
</body>
@include('includes.scriptsbootstrap')

</html>

{{--  

 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  --}}
