@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="text-center">
        <h1 class="mb-4 fw-bold">{{ __('Employee Dashboard') }}</h1>
        <p class="mb-5 text-muted">{{ __('Welcome') }}, {{ auth()->user()->name }}! 🛒</p>

        <div class="d-grid gap-4 col-12 col-md-8 mx-auto">
            <a href="{{ route('employee.sales.catalog') }}" class="btn btn-lg btn-primary py-4 shadow">
                <i class="bi bi-cart-plus me-2"></i> {{ __('Start New Transaction') }}
            </a>

            <a href="{{ route('employee.sales.history.index') }}" class="btn btn-lg btn-outline-secondary py-4 shadow">
                <i class="bi bi-clock-history me-2"></i> {{ __('View Transaction History') }}
            </a>
        </div>
    </div>
</div>
@endsection