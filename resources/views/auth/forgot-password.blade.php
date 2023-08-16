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
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3 w-50 mx-auto">
                    <p>Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.</p>
                    <div class="d-flex justify-content-between">
                        <label for="email" class="form-label">Email</label>
                        @error('email')
                            <p class="font-weight-light text-danger text-center">Email não encontrado!</p>
                        @enderror
                    </div>                    
                    <input placeholder="Digite seu email" value="{{ old('email') }}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required autofocus autocomplete="username">
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



{{-- 
 <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email"      :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>   --}}
