@extends('layouts.app')

@section('title', 'Settings - Laravel Package Dev')

@section('content')
<div class="card">
    <h1>Settings</h1>
    <p>Configure your Laravel package development environment.</p>
    
    <div style="margin-top: 2rem;">
        <h2>Environment Settings</h2>
        <div style="margin-top: 1rem;">
            <label style="display: block; margin-bottom: 0.5rem;">
                <strong>Laravel Version:</strong> {{ app()->version() }}
            </label>
            <label style="display: block; margin-bottom: 0.5rem;">
                <strong>PHP Version:</strong> {{ phpversion() }}
            </label>
            <label style="display: block; margin-bottom: 0.5rem;">
                <strong>Environment:</strong> {{ config('app.env') }}
            </label>
        </div>
    </div>
    
    <div style="margin-top: 2rem;">
        <h2>Package Development Settings</h2>
        <div style="margin-top: 1rem;">
            <p>Path Repository Configuration:</p>
            <pre style="background: #f0f0f0; padding: 1rem; border-radius: 4px; overflow-x: auto;">
"repositories": [
    {
        "type": "path", 
        "url": "../../../packages/laravel-language-switcher"
    }
]</pre>
        </div>
    </div>
</div>
@endsection 