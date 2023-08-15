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
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Usuário</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" name="name">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    @error('email')
                            <p class="font-weight-light text-danger text-center">Email inválido!</p>
                        @enderror
                    <div class="col-sm-10">
                        <input placeholder="Email" value="{{ Auth::user()->email }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required autofocus autocomplete="username">
                    </div>
                </div>
                {{-- ----- --}}
                {{-- <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Email inválido!</p>
                        @enderror
                    </div>                    
                    <input value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required autofocus autocomplete="username">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="d-flex justify-content-between">
                        <label for="name" class="form-label">Name</label>
                        @error('name')
                            <p class="font-weight-light text-danger text-center">Name não disponivel!</p>
                        @enderror
                    </div>
                    <input value="{{ old('name') }}" name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" id="name" required autofocus
                        autocomplete="name">
                </div>   --}}
                <div class="d-grid gap-2 mt-4 col-1 mx-auto">
                    <input type="submit" class="btn btn-primary" type="button">
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
</x-app-layout> --}}
