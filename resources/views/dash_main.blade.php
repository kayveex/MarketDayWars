{{-- Import Dashboard Template  --}}
@extends('Partials.Dashboard.master')

{{-- Breadcrumb Section --}}
@section('breadcrumb')
    @if (Auth::user()->role == 'admin')
        <li class="mr-2">
            <a href="/dashboard" class="text-gray-200 hover:text-green-600 font-medium">Dashboard Admin</a>
        </li>
    @endif
    @if (Auth::user()->role == 'tenant')
        <li class="mr-2">
            <a href="/dashboard" class="text-gray-200 hover:text-green-600 font-medium">Dashboard Tenant</a>
        </li>
    @endif
    @if (Auth::user()->role == 'customer')
        <li class="mr-2">
            <a href="/dashboard" class="text-gray-200 hover:text-green-600 font-medium">Dashboard Customer</a>
        </li>
    @endif
@endsection

{{-- Content Section --}}
@section('content')
    {{-- Fill Content Here --}}
@endsection
