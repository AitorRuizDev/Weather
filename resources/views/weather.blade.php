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
                            <form action="/view" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group rounded mb-3">
                                    <input type="search" id="zip_code" name="zip_code" required class="form-control rounded" placeholder="Enter zip code" aria-label="Search" aria-describedby="search-addon" />
                                </div>
                                <div class="d-grid gap-2 mb-3">
                                    <a href="{{ url('view') }}" type="button">
                                        <div class="d-grid gap-2">
                                            <!-- <button class="btn btn-primary" type="button">Consult</button> -->
                                            <input type="submit" class="btn btn-primary" value="Consult">
                                        </div>
                                    </a>
                                </div>
                            </form>

                            <div class="lead text-white text-center">
                                <p>That the rain does not stop!</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(".button").on("click", function() {
            $("#form").submit();
        });
    </script>
</x-app-layout>