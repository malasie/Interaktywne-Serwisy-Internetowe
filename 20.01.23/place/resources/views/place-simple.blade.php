<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <nav class="navbar navbar-default mt-1 mb-2">

        <div class="container">

            <div class="navbar-header">

                <h1>

                    <a href="/" class="">Places App</a>

                </h1>

            </div>

        </div>
    </nav>

    <div class="container align-self-center">

        <div class="card mb-4">

            <div class="card-body">

                <form action="/simple/findPlace" method="get" enctype="multipart/form-data" class="row">

                    <div class="row col-12 align-items-end justify-content-right ml-2 ">

                    </div>

                        <div class="row col-12">

                        <div class="form-group col-5">

                            <label>
                                Location
                            </label>

                            <input type="text" name="location" value="{{ !empty($location) ? $location : ''  }}" class="form-control">

                        </div>

                        <div class="form-group col-5">

                            <label>
                                Place type
                            </label>

                            <input type="text" name="placeType" value="{{  !empty($placeType) ? $placeType : '' }}" class="form-control">

                        </div>

                        <div class="form-group col-2 row align-items-end justify-content-center pr-0">

                            <button class="btn btn-success">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <div class="container-fluid p-0">

        @if(!empty($places))

            <div class="row justify-content-center">

                @foreach($places as $key => $place)

                        @if(!empty($place->address->label))
                            <div style="overflow: hidden;" class="col-10 col-md-3 card m-3 mb-3">

                                <div class="card-body">

                                    <div
                                        style="min-height: 120px">

                                        <div
                                            style="min-height: 86px"
                                            class="row">

                                            <h1>
                                                {{ $place->title }}
                                            </h1>
                                        </div>

                                        <div class="row justify-content-start mb-4">
                                            {!! $place->address->label !!}
                                        </div>

                                    </div>

                                </div>

                            </div>
                        @endif

                @endforeach

            </div>

        @else

            @if(!empty($location) && !empty($placeType))

                <div class="container p-0">

                    <div class="row justify-content-center pt-4">

                        <h3>
                            <b>
                                Not found
                            </b>
                        </h3>

                    </div>

                </div>

            @endif

        @endif

    </div>


</body>

</html>
