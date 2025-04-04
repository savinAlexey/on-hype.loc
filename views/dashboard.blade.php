@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <!-- Header -->
        <header class="bg-white shadow-sm py-3">
            <div class="container">
                <h2 class="h5 mb-0 text-dark">
                    {{ __('Dashboard') }}
                </h2>
            </div>
        </header>

        <!-- Main Content -->
        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <p class="mb-0 text-dark">
                                    {{ __("You're logged in!") }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

