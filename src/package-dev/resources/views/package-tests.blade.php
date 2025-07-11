@extends('layouts.app')

@section('title', 'Package Tests - Laravel Package Dev')

@section('content')
<div class="card">
    <h1>Package Tests</h1>
    <p>Test your Laravel packages here.</p>
    
    <div style="margin-top: 2rem;">
        <h2>Language Switcher Package</h2>
        <p>Test the language switcher functionality:</p>
        
        <div style="margin-top: 1rem;">
            <a href="#" class="btn">Test Language Switcher</a>
        </div>
    </div>
    
    <div style="margin-top: 2rem;">
        <h2>Package Status</h2>
        <div style="background: #f0f0f0; padding: 1rem; border-radius: 4px; margin-top: 1rem;">
            <strong>umbalaconmeogia/laravel-language-switcher:</strong> 
            <span style="color: green;">✓ Installed</span>
        </div>
    </div>
</div>
@endsection 