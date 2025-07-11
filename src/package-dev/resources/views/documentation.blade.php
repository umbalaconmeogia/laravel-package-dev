@extends('layouts.app')

@section('title', 'Documentation - Laravel Package Dev')

@section('content')
<div class="card">
    <h1>Documentation</h1>
    <p>Documentation for your Laravel packages.</p>
    
    <div style="margin-top: 2rem;">
        <h2>Language Switcher Package</h2>
        <p>Documentation for the language switcher package:</p>
        
        <div style="margin-top: 1rem;">
            <h3>Installation</h3>
            <pre style="background: #f0f0f0; padding: 1rem; border-radius: 4px; overflow-x: auto;">
composer require umbalaconmeogia/laravel-language-switcher</pre>
            
            <h3>Usage</h3>
            <p>Add the service provider to your <code>config/app.php</code>:</p>
            <pre style="background: #f0f0f0; padding: 1rem; border-radius: 4px; overflow-x: auto;">
'providers' => [
    Umbalaconmeogia\LanguageSwitcher\LanguageSwitcherServiceProvider::class,
]</pre>
        </div>
    </div>
</div>
@endsection 