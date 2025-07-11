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
        
        .language-switcher-container {
            margin-left: 1rem;
            position: relative;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-toggle {
            background-color: #4a5568;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background-color 0.2s;
        }
        
        .dropdown-toggle:hover {
            background-color: #2d3748;
        }
        
        .dropdown-arrow {
            font-size: 0.7rem;
            transition: transform 0.2s;
        }
        
        .dropdown:hover .dropdown-arrow {
            transform: rotate(180deg);
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            list-style: none;
            padding: 0.5rem 0;
            margin: 0;
            min-width: 150px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s;
            z-index: 1000;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
            cursor: pointer;
            color: #2d3748;
            font-size: 0.9rem;
            transition: background-color 0.2s;
        }
        
        .dropdown-item:hover {
            background-color: #f7fafc;
        }
        
        .dropdown-item.active {
            background-color: #4299e1;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-brand">Laravel Package Dev</a>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('package-tests') }}" class="{{ request()->routeIs('package-tests') ? 'active' : '' }}">Package Tests</a></li>
                <li><a href="{{ route('documentation') }}" class="{{ request()->routeIs('documentation') ? 'active' : '' }}">Documentation</a></li>
                <li><a href="{{ route('settings') }}" class="{{ request()->routeIs('settings') ? 'active' : '' }}">Settings</a></li>
                <li class="language-switcher-container">
                    <div class="dropdown">
                        <button class="dropdown-toggle">
                            {{ config('language-switcher.supported_languages')[app()->getLocale()] ?? 'Language' }}
                            <span class="dropdown-arrow">▼</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach(config('language-switcher.supported_languages') as $code => $name)
                                <li>
                                    <form method="POST" action="{{ route('language.switch', $code) }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item {{ app()->getLocale() === $code ? 'active' : '' }}">
                                            {{ $name }}
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        @yield('content')
    </main>
</body>
</html> 