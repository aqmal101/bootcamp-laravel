<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">         -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @include('partials.head')

    <style>

    </style>

</head>
<body>

<body class="antialiased" style="background-color: #111827">

        <div>
    
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->

            @include('partials.navbar')
            <div class="container m-5 mt-20" 
                 style=" height: 400px; 
                         margin: auto; 
                         margin-top: 40px;
            ">


                    <div id="Quotes" 
                         style="color: #ffffff; 
                                margin: 90px 30px 40px 90px; 
                                border: 1px solid #ff2d20;
                                border-radius: 8px;
                                padding: 15px;
                    ">

                        @foreach ($quotes as $quote)
                            <p style= "font-family: 'Playfair',serif; 
                                       font-size:40px; 
                                       font-weight:300">
                                {{ $quote->quote}}
                            </p>
                            <span style= "font-size: 20px;
                                          text-align: end; 
                                          display: block;
                                          padding-right: 20px;
                            ">
                                ~ {{ $quote->name}}
                            </span>
                        @endforeach
                    </div>

            </div>
            @include('partials.footer')

        </div>

    </body>
</html>