<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
                    @empty($weathers)
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="alert alert-primary" role="alert">
                                You currently haven't recorded any temperatures :(
                            </div>

                        </div>
                    </div>
                    @endempty
                    @isset($weathers)
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-8 col-xl-6">
                            <div class="card shadow-0 border">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Temperature</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($weathers as $weather)
                                        <tr>
                                            <td>{{ $weather->id }}</td>
                                            <td>{{ $weather->name }}</td>
                                            <td>{{ $weather->temp }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endisset
                    @if ($message = Session::get('success'))
                    <div class="m-5 alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>