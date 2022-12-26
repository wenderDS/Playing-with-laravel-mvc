<x-layout title="Series">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">New</a>

    @isset($successMessage)
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $item->name }}

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
