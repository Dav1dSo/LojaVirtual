<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/CardAvaliaction.css') }}">
    <title>Document</title>
</head>

<body>

    <div id="wrap" class="mt-3 mb-5">
        <div id="content-cards">
            @foreach ($UserAvaliaction as $userAvaliaction)
                <div class="card mt-5">
                    <div class="profile">
                        <img src="https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png"
                            alt="">
                        <div class="w-50">
                            <h5 class="name text-secondary">{{ $userAvaliaction->user }}</h5>

                            <ul class="stars">
                                @for ($i = 0; $i < $userAvaliaction->stars; $i++)
                                    <li><i class="fa fa-star"></i></li>
                                @endfor
                            </ul>

                        </div>
                    </div>
                    <div class="text-cente">
                        <p>{{ $userAvaliaction->avaliacao }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</body>

</html>
