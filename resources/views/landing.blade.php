@extends('layouts.home')
@section('landing')
@include('includes.site_hero')
@endsection
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cards inside card</h3>
        </div>
        <div class="card-body">
            <div class="row row-cards">
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-red"></div>
                        <div class="card-header">
                            <h3 class="card-title">First card</h3>
                        </div>
                        <div class="card-body p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400"
                                height="200" viewBox="0 0 400 200" fill="transparent"
                                stroke="var(--tblr-border-color, #b8cef1)">
                                <line x1="0" y1="0" x2="400" y2="200"></line>
                                <line x1="0" y1="200" x2="400" y2="0"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-green"></div>
                        <div class="card-header">
                            <h3 class="card-title">Second card</h3>
                        </div>
                        <div class="card-body p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400"
                                height="200" viewBox="0 0 400 200" fill="transparent"
                                stroke="var(--tblr-border-color, #b8cef1)">
                                <line x1="0" y1="0" x2="400" y2="200"></line>
                                <line x1="0" y1="200" x2="400" y2="0"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-status-top bg-blue"></div>
                        <div class="card-header">
                            <h3 class="card-title">Third card</h3>
                        </div>
                        <div class="card-body p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400"
                                height="200" viewBox="0 0 400 200" fill="transparent"
                                stroke="var(--tblr-border-color, #b8cef1)">
                                <line x1="0" y1="0" x2="400" y2="200"></line>
                                <line x1="0" y1="200" x2="400" y2="0"></line>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="card bg-primary text-primary-fg mt-8">
        <div class="card-stamp">
            <div class="card-stamp-icon bg-white text-primary">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title">Card with background and icon</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum
                fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
        </div>
    </div>
@endsection