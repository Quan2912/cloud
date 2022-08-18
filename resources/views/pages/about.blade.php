@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="data:image/png;base64,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" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Group 4</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-1 text-center">
                            <a href="" target="_blank" class="btn btn-facebook btn-circle btn-lg"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <a href="https://github.com/fodderaccount" target="_blank" class="btn btn-github btn-circle btn-lg"><i class="fab fa-github fa-fw"></i></a>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <a href="" target="_blank" class="btn btn-twitter btn-circle btn-lg"><i class="fab fa-twitter fa-fw"></i></a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Laravel SB Admin 2</h5>
                            <p>SB Admin 2 for Laravel.</p>
                            <a href="https://github.com/fodderaccount/SMProjectSolo" target="_blank" class="btn btn-github">
                                <i class="fab fa-github fa-fw"></i> Go to repository
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Credits</h5>
                            <p>Laravel SB Admin 2 uses some open-source third-party libraries/packages</p>
                            <ul>
                                <li><a href="https://laravel.com" target="_blank">Laravel</a> - Open source framework.</li>
                                <li><a href="https://github.com/DevMarketer/LaravelEasyNav" target="_blank">LaravelEasyNav</a>navigation in Laravel easy.</li>
                                <li><a href="https://startbootstrap.com/themes/sb-admin-2" target="_blank">SB Admin 2</a>Bootstrap.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
