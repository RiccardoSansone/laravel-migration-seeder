<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($latest_trains as $train)
                    <div class="col">
                        <div class="card p-1 p-md-2 shadow">
                            <h3><span class="text-primary">Company: </span>{{$train->company}}</h3>
                            <h6><span class="text-danger">Station start: </span>{{$train->station_start}}</h6>
                            <h6><span class="text-danger">Station end: </span>{{$train->station_end}}</h6>
                            <h6><span class="text-danger">Time start: </span>{{$train->times_start}}</h6>
                            <h6><span class="text-danger">Time end: </span>{{$train->times_end}}</h6>
                            <h6><span class="text-danger">Train code: </span>{{$train->train_code}}</h6>
                            <h6><span class="text-danger">Vagon number: </span>{{$train->vagon_number}}</h6>
                            <h6><span class="text-danger">In time: 
                            </span>
                                @if ($train->is_in_time == 1)
                                    is in Time
                                @else
                                    have retard    
                                @endif
                            </h6>
                            <h6><span class="text-danger">Is cancelled: 
                            </span>  
                                @if ($train->cancelled == 0)
                                    not cancelled
                                @else 
                                    is cancelled
                                @endif
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

</body>

</html>