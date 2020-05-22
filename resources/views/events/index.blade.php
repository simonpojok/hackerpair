<ul>
    @forelse($events as $event)
        <li>
            {{ $event }}
            @if(strpos($event, 'Laravel') !== false)
                (sweet framework)
            @endif
        </li>
    @empty
        <li>No events available</li>
    @endforelse
</ul>
