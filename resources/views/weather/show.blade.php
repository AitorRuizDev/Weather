<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container py-5 h-100">
                    <div class="row mb-5 d-flex justify-content-center align-items-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <img src="{{ asset('img/logo.svg') }}" alt="ThatzWeather logo" title="ThatzWeather logo">
                        </div>
                    </div>
                    <div class="row mb-5 d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card shadow-0 border">
                                <div class="card-body p-4">
                                    <h4 class="mb-1 sfw-normal">City: <strong id="name">{{ $weather->name }}</strong></h4>
                                    <p class="temperatura mb-2">Current temperature: <strong id="temp">{{ $weather->temp }}</strong></p>
                                    <p>Feels like: <strong id="feels_like"></strong></p>
                                    <p>Max: <strong id="temp_max"></strong>, Min: <strong id="temp_min"></strong></p>
                                    <div class="d-flex flex-row align-items-center">
                                        <p class="mb-0 me-4">Main: <strong id="main"></strong></p>
                                        <img src="http://openweathermap.org/img/w/02n.png" alter="icono tiempo">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-8 col-lg-6 col-xl-4 card m-5"> 
                            <div class="card-body p-4">

                                 <div id="demo3" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators mb-0">
                                        <li data-target="#demo3" data-slide-to="0"></li>
                                        <li data-target="#demo3" data-slide-to="1"></li>
                                        <li data-target="#demo3" data-slide-to="2" class="active"></li>
                                    </ul>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="d-flex justify-content-around text-center  pb-3 pt-2">
                                                <div class="flex-column">
                                                    <p class="small"><strong>21°C</strong></p>
                                                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>Mon</strong></p>
                                                </div>
                                                <div class="flex-column">
                                                    <p class="small"><strong>20°C</strong></p>
                                                    <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>Tue</strong></p>
                                                </div>
                                                <div class="flex-column">
                                                    <p class="small"><strong>16°C</strong></p>
                                                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>Wed</strong></p>
                                                </div>
                                                <div class="flex-column">
                                                    <p class="small"><strong>17°C</strong></p>
                                                    <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>Thu</strong></p>
                                                </div>
                                                <div class="flex-column">
                                                    <p class="small"><strong>18°C</strong></p>
                                                    <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>Fri</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div> 




                    </div>

                    <div class="row d-flex justify-content-center align-items-center h-100">-->
                        <!-- <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card shadow-0 border">
                                <div class="card-body p-4">
                                    <h4 class="mb-1 sfw-normal">Top 5 of the coldest areas sought after</h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Madrid <p class="text-end "><strong>18°C</strong></p>
                                        </li>
                                        <li class="list-group-item">Madrid <p class="text-end "><strong>18°C</strong></p>
                                        </li>
                                        <li class="list-group-item">Madrid <p class="text-end ">18°C</p>
                                        </li>
                                        <li class="list-group-item">Madrid <p class="text-end ">18°C</p>
                                        </li>
                                        <li class="list-group-item">Madrid <p class="text-end ">18°C</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div> -->
                        <!-- </div> -->




                    </div>
                </div>
            </div>
        </div>
</x-app-layout>