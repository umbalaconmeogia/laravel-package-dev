<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Package Dev')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: #2d3748;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .nav-menu a:hover {
            background-color: #4a5568;
        }
        
        .nav-menu a.active {
            background-color: #4299e1;
        }
        
        .main-content {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #4299e1;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #3182ce;
        }
        
        .btn-secondary {
            background-color: #718096;
        }
        
        .btn-secondary:hover {
            background-color: #4a5568;
        }
        
        /* Language Switcher Styles */
        .language-switcher-container {
            position: relative;
        }
        
        .language-switcher {
            display: inline-block;
            position: relative;
        }
        
        .language-switcher-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .language-switcher-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        .language-switcher-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-width: 150px;
            z-index: 1000;
            display: none;
        }
        
        .language-switcher:hover .language-switcher-dropdown {
            display: block;
        }
        
        .language-switcher-dropdown a {
            display: block;
            padding: 0.75rem 1rem;
            color: #2d3748;
            text-decoration: none;
            border-bottom: 1px solid #f7fafc;
            transition: background-color 0.3s;
        }
        
        .language-switcher-dropdown a:last-child {
            border-bottom: none;
        }
        
        .language-switcher-dropdown a:hover {
            background-color: #f7fafc;
            color: #2d3748;
        }
        
        .language-switcher-dropdown a.active {
            background-color: #4299e1;
            color: white;
        }
        
        .language-switcher-dropdown a.active:hover {
            background-color: #3182ce;
        }
        
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-brand">{{ __('menu.app_name') }}</a>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">{{ __('menu.home') }}</a></li>
                <li><a href="{{ route('package-tests') }}" class="{{ request()->routeIs('package-tests') ? 'active' : '' }}">{{ __('menu.package_tests') }}</a></li>
                <li><a href="{{ route('documentation') }}" class="{{ request()->routeIs('documentation') ? 'active' : '' }}">{{ __('menu.documentation') }}</a></li>
                <li><a href="{{ route('settings') }}" class="{{ request()->routeIs('settings') ? 'active' : '' }}">{{ __('menu.settings') }}</a></li>
                <li class="language-switcher-container">
                    <x-language-switcher::language-switcher />
                </li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>
</body>
</html> 