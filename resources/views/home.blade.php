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
                <img src="data:image/png;base64,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"
                    class="card-img-top" alt="img">
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
                    class="card-img-top" alt="img">
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
                    class="card-img-top" alt="img">
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
                    class="card-img-top" alt="img">
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
