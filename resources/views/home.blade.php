<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full-Ecommerce</title>
    @include('includes.headerbootstrap')

</head>
<style>
    * {
        margin: 0, padding: 0;
    }
</style>
    
<body>
    <div class="position-relative">
        @include('includes.navbar')

        <div class="d-flex ustify-content-center" style="margin-top: 7rem;">
            <div class="card m-5" style="width: 27rem;">
                <!-- Inicio car-1  -->
                <img src="https://ae01.alicdn.com/kf/HTB1QUZ9SFXXXXaiXVXXq6xXFXXXM/Camisa-masculina-em-fibra-de-bambu-alta-qualidade-estilo-cl-ssico-cor-s-lida-camisas-sociais.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Camisas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="card m-5" style="width: 27rem;">
                <!-- Inicio car-1  -->
                <img src="https://ae01.alicdn.com/kf/HTB1QUZ9SFXXXXaiXVXXq6xXFXXXM/Camisa-masculina-em-fibra-de-bambu-alta-qualidade-estilo-cl-ssico-cor-s-lida-camisas-sociais.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Camisas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="card m-5" style="width: 27rem;">
                <!-- Inicio car-1  -->
                <img src="https://ae01.alicdn.com/kf/HTB1QUZ9SFXXXXaiXVXXq6xXFXXXM/Camisa-masculina-em-fibra-de-bambu-alta-qualidade-estilo-cl-ssico-cor-s-lida-camisas-sociais.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Camisas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
            <div class="card m-5" style="width: 27rem;">
                <!-- Inicio car-1  -->
                <img src="https://ae01.alicdn.com/kf/HTB1QUZ9SFXXXXaiXVXXq6xXFXXXM/Camisa-masculina-em-fibra-de-bambu-alta-qualidade-estilo-cl-ssico-cor-s-lida-camisas-sociais.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Camisas</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
</body>
    @include('includes.scriptsbootstrap')
</html>
