@extends('layouts.master')

@section('title', 'Dashboard')

@section('page-icon', 'mdi mdi-home')

@section('page-title', 'Dashboard')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
<!-- Statistics Cards -->
<div class="row">
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Users
                    <i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">1,245</h2>
                <h6 class="card-text">Increased by 60%</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Orders
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">3,567</h2>
                <h6 class="card-text">Increased by 25%</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Revenue
                    <i class="mdi mdi-currency-usd mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">$45,890</h2>
                <h6 class="card-text">Increased by 45%</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-warning card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Products
                    <i class="mdi mdi-package-variant mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">892</h2>
                <h6 class="card-text">Increased by 15%</h6>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Cards -->
<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recent Activities</h4>
                <p class="card-description">Latest user activities in the system</p>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Activity</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Logged in</td>
                                <td>{{ now()->format('d M Y') }}</td>
                                <td><label class="badge badge-success">Active</label></td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Updated profile</td>
                                <td>{{ now()->subHour()->format('d M Y') }}</td>
                                <td><label class="badge badge-info">Completed</label></td>
                            </tr>
                            <tr>
                                <td>Bob Johnson</td>
                                <td>Placed order</td>
                                <td>{{ now()->subHours(2)->format('d M Y') }}</td>
                                <td><label class="badge badge-warning">Pending</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">System Status</h4>
                <p class="card-description">Current system information</p>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-server text-primary icon-lg"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Server Status</h6>
                            <small class="text-muted">All systems operational</small>
                        </div>
                    </div>
                    <label class="badge badge-success">Online</label>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-database text-success icon-lg"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Database</h6>
                            <small class="text-muted">Connected</small>
                        </div>
                    </div>
                    <label class="badge badge-success">Active</label>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-email text-info icon-lg"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Email Service</h6>
                            <small class="text-muted">Working properly</small>
                        </div>
                    </div>
                    <label class="badge badge-success">Active</label>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-backup-restore text-warning icon-lg"></i>
                        <div class="ms-3">
                            <h6 class="mb-0">Last Backup</h6>
                            <small class="text-muted">{{ now()->subHours(6)->diffForHumans() }}</small>
                        </div>
                    </div>
                    <label class="badge badge-info">Updated</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- Dashboard specific styles -->
@endpush

@push('scripts')
<!-- Dashboard specific scripts -->
<script>
    // Add dashboard specific JavaScript here
</script>
@endpush