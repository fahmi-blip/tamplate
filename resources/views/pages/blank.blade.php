@extends('layouts.master')

@section('title', 'Blank Page')

@section('page-icon', 'mdi mdi-file-document')

@section('page-title', 'Blank Page')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Welcome to Blank Page</h4>
                <p class="card-description">
                    This is a blank page template. You can start building your content here.
                </p>
                
                <div class="mt-4">
                    <p>This page includes:</p>
                    <ul>
                        <li>Page title with icon</li>
                        <li>Breadcrumb navigation</li>
                        <li>Card container for main content</li>
                        <li>Responsive layout</li>
                    </ul>
                </div>
                
                <div class="mt-4">
                    <button type="button" class="btn btn-gradient-primary me-2">Primary</button>
                    <button type="button" class="btn btn-gradient-secondary me-2">Secondary</button>
                    <button type="button" class="btn btn-gradient-success me-2">Success</button>
                    <button type="button" class="btn btn-gradient-danger">Danger</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Example Card 1</h4>
                <p class="card-description">
                    Additional content can be added in multiple cards.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Example Card 2</h4>
                <p class="card-description">
                    Cards are great for organizing content sections.
                </p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Add page specific styles here if needed -->
@endpush

@push('scripts')
<!-- Add page specific scripts here if needed -->
<script>
    console.log('Blank page loaded successfully');
</script>
@endpush