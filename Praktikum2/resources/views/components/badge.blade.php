<div>
    @props(['status'])

    @php
    if ($status === 'Aman') {
    $class = 'bg-green-100 text-green-800';
    } elseif ($status === 'Menipis') {
    $class = 'bg-yellow-100 text-yellow-800';
    } else {
    $class = 'bg-red-100 text-red-800';
    }
    @endphp

    <span class="px-2 py-1 text-sm rounded {{ $class }}">
        {{ $status }}
    </span>
</div>