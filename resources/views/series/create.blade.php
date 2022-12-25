<x-layout title="New series">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-layout>
