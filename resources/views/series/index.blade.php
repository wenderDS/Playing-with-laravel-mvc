<x-layout :title="__('messages.app_name')"  :success-message="$successMessage">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">New</a>

    <ul class="list-group">
        @foreach ($series as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('seasons.index', $item->id) }}">
                {{ $item->name }}
            </a>

            <span class="d-flex">
                <a href="{{ route('series.edit', $item->id) }}" class="btn btn-info text-white btn-sm me-1">
                    Edit
                </a>

                <form action="{{ route('series.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Remove
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
