<div class="language-switcher">
    <button class="language-switcher-btn">
        <span>{{ $currentDisplayName }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="16" height="16" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="language-switcher-dropdown">
        @foreach($supportedLanguages as $code => $name)
            @if($code !== $currentLanguage)
                <form method="POST" action="{{ route('language.switch', $code) }}" style="margin: 0;">
                    @csrf
                    <button type="submit" style="width: 100%; text-align: left; background: none; border: none; cursor: pointer; padding: 0.75rem 1rem; color: #2d3748; transition: background-color 0.3s;">
                        {{ $name }}
                    </button>
                </form>
            @else
                <a href="#" class="active" style="pointer-events: none;">{{ $name }}</a>
            @endif
        @endforeach
    </div>
</div> 