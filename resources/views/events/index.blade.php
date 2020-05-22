<ul>
    @forelse($events as $event)
        @include('partials._row', ['event' => $event])
    @empty
        <li>No events available</li>
    @endforelse
</ul>
