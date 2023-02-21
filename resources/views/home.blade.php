<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('header')

    <main>
        <div class="container py-5">
            <div class="row">
                @foreach($peoples as $people)
                <div class="col-md-4">
                    <div class="people">
                        <h4 class="people__name">{{ $people->name }}</h4>
                        <img class="people__img" src="{{ './img/'.$people->img }}" alt="">
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </main>

    @include('footer')

    <style src="css/bootstrap.js"></style>
</body>

</html>