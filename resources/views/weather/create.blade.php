<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Weather') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container py-5 h-100">

                    <div id="contenido">
                    </div>
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <img class="mb-4" src="{{ asset('img/logo.svg') }}" alt="ThatzWeather logo" title="ThatzWeather logo">
                            <div class="mb-4 lead text-white text-center">
                                <p>Find out the weather in the exact area you are interested in by searching by zip code.</p>
                            </div>
                            <form id="form" action="{{ route('weather.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group rounded mb-3">
                                    <input type="search" id="zip_code" name="zip_code" required class="form-control rounded" placeholder="Enter zip code" aria-label="Search" aria-describedby="search-addon" />
                                </div>
                                <!--  Test  -->
                                <input type="hidden" id="name" name="name">
                                <input type="hidden" id="temp" name="temp">
                                <input type="hidden" id="feels_like" name="feels_like">
                                <input type="hidden" id="temp_max" name="temp_max">
                                <input type="hidden" id="temp_min" name="temp_min">
                                <input type="hidden" id="main" name="main">
                                <input type="hidden" id="icon" name="icon">
                                <input type="hidden" id="speed" name="speed">

                                <!-- End Test -->
                                <div class="d-grid gap-2 mb-3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Consult</button>
                                        <!-- <input type="submit" class="btn btn-primary" value="Consult"> -->
                                    </div>
                                </div>
                            </form>
                            <div class="lead text-white text-center">
                                <p>That the rain does not stop!</p>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('#form').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
        $(".btn").on("click", function() {
            var ciudad = $("#zip_code").val();
            if (ciudad) {
                var url = "http://api.openweathermap.org/data/2.5/weather?q=" + ciudad + ",es&units=metric&lang=es&appid=1ebe8fb6c5d2654d9ceb6e243540f115";
                $.ajax({
                    url: url,
                    type: "get",
                    dataType: "json",
                    cache: false,
                    error: function() {
                        $("#zip_code").val("");
                        $("#zip_code").css("border-color", "red");
                        $("#zip_code").attr("placeholder", "Zip code is required. Please enter good zip code");
                        $("#zip_code").on("focusout", function() {
                            $("#zip_code").css("border-color", "black");
                            $("#zip_code").attr("placeholder", "Enter zip code");
                            $("#zip_code").attr("focus", "in");
                        })
                        $("#zip_code").on("focusin", function() {
                            $("#zip_code").css("border-color", "black");
                            $("#zip_code").attr("placeholder", "Enter zip code");
                        })
                    },
                    data: {
                        ciudad: ciudad
                    },
                    success: function(resultado) {
                        icon = "http://openweathermap.org/img/w/" + resultado.weather[0].icon + ".png"; //http://openweathermap.org/img/w/02n.png
                        $("#name").val(resultado.name);
                        $("#temp").val(resultado.main.temp);
                        $("#feels_like").val(resultado.main.feels_like);
                        $("#main").val(resultado.weather[0].main);
                        $("#icon").val(icon);
                        $("#temp_max").val(resultado.main.temp_max);
                        $("#temp_min").val(resultado.main.temp_min);
                        $("#speed").val(resultado.wind.speed);
                        $("#form").submit();
                    }
                });
            } else {
                $("#zip_code").css("border-color", "red");
                $("#zip_code").attr("placeholder", "Zip code is required. Please enter zip code");
                $("#zip_code").on("focusout", function() {
                    $("#zip_code").css("border-color", "black");
                    $("#zip_code").attr("placeholder", "Enter zip code");
                })
                $("#zip_code").on("focusin", function() {
                    $("#zip_code").css("border-color", "black");
                    $("#zip_code").attr("placeholder", "Enter zip code");
                })
            }
        });
    </script>
</x-app-layout>