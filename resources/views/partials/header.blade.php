@php
    $links = [
        [
            'url' => '/',
            'label' => 'Caracters',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Movies',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Tv',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => true,
        ],
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        
        
         
    ];   
@endphp

<header>
    <nav class="container">
        <ul class="row">
            @foreach ($links as $link)
                <li class="col-1 my-1">
                    @if ($link['active'])
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <del>
                            {{ $link['label'] }}
                        </del>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>
