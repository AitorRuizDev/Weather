<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Top') }}
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

                    @if(count($weathers)<=0)
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="alert alert-primary" role="alert">
                                You currently haven't recorded any temperatures :(
                            </div>
                            <a href="{{url('/weather/create')}}"><button type="button" class="btn btn-primary">I want to insert</button></a>
                        </div>
                    </div>
                    @else

                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="card shadow-0 border">
                                <div class="card-body p-4">
                                    <h4 class="mb-1 sfw-normal">Top of the coldest areas sought after</h4>
                                    <ol class="list-group list-group-numbered">
                                        @foreach ($weathers as $weather)
                                        <li class="list-group-item"> {{ $weather->name }}
                                            <p class="text-end "><strong>{{ $weather->temp }}ºC</strong></p>
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>