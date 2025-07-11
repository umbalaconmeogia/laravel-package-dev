@extends('layouts.app')

@section('title', 'Home - Laravel Package Dev')

@section('content')
<div class="card">
    <h1>Welcome to Laravel Package Development</h1>
    <p>This is your testing environment for Laravel packages.</p>
    
    <div style="margin-top: 2rem;">
        <h2>Quick Actions</h2>
        <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <a href="{{ route('package-tests') }}" class="btn">Test Packages</a>
            <a href="{{ route('documentation') }}" class="btn btn-secondary">View Documentation</a>
        </div>
    </div>
    
    <div style="margin-top: 2rem;">
        <h2>Installed Packages</h2>
        <ul style="margin-top: 1rem; padding-left: 2rem;">
            <li>umbalaconmeogia/laravel-language-switcher</li>
        </ul>
    </div>
</div>
@endsection 