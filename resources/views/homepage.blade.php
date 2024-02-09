<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="content d-flex justify-content-center align-items-center">
                    <div class="img-container p-2">
                        <img style="width:50px;" src="{{ $logo }}" alt="">
                    </div>
                    <h1 class="{{ $title_color }}">
                        Hello Class {{ $class_number }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
