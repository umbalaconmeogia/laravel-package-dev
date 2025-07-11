@extends('layouts.app')

@section('title', __('menu.home') . ' - ' . __('menu.app_name'))

@section('content')
<div class="card">
    <h1>{{ __('home.welcome_title') }}</h1>
    <p>{{ __('home.welcome_message') }}</p>
    
    <div style="margin-top: 2rem;">
        <h2>{{ __('home.quick_actions') }}</h2>
        <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <a href="{{ route('package-tests') }}" class="btn">{{ __('home.test_packages') }}</a>
            <a href="{{ route('documentation') }}" class="btn btn-secondary">{{ __('home.view_documentation') }}</a>
        </div>
    </div>
    
    <div style="margin-top: 2rem;">
        <h2>{{ __('home.installed_packages') }}</h2>
        <ul style="margin-top: 1rem; padding-left: 2rem;">
            <li>umbalaconmeogia/laravel-language-switcher</li>
        </ul>
    </div>
    
    <div style="margin-top: 2rem;">
        <h2>{{ __('home.current_language') }}</h2>
        <p>{{ __('home.language_info', ['locale' => app()->getLocale(), 'name' => __('home.language_name')]) }}</p>
    </div>
</div>
@endsection 