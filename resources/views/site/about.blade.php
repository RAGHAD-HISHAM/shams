@extends('layouts.home')

@section('page header', 'About Shams')
@section('content')

<!-- Page body -->

<!-- Cards with tabs component -->
<div class="card-tabs">
    <!-- Cards navigation -->
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="#tab-top-1" class="nav-link active" data-bs-toggle="tab">Tab 1</a>
        </li>
        <li class="nav-item"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab">Tab 2</a></li>
        <li class="nav-item"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab">Tab 3</a></li>
        <li class="nav-item"><a href="#tab-top-4" class="nav-link" data-bs-toggle="tab">Tab 4</a></li>
    </ul>
    <div class="tab-content">
        <!-- Content of card #1 -->
        <div id="tab-top-1" class="card tab-pane active show">
            <div class="card-body">
                <div class="card-title">Content of tab #1</div>
                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid
                    distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                </p>
            </div>
        </div>
        <!-- Content of card #2 -->
        <div id="tab-top-2" class="card tab-pane">
            <div class="card-body">
                <div class="card-title">Content of tab #2</div>
                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid
                    distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                </p>
            </div>
        </div>
        <!-- Content of card #3 -->
        <div id="tab-top-3" class="card tab-pane">
            <div class="card-body">
                <div class="card-title">Content of tab #3</div>
                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid
                    distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                </p>
            </div>
        </div>
        <!-- Content of card #4 -->
        <div id="tab-top-4" class="card tab-pane">
            <div class="card-body">
                <div class="card-title">Content of tab #4</div>
                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid
                    distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                </p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection