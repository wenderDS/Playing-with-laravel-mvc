<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            @isset($inputNameValue)
                value="{{ $inputNameValue }}"
            @endisset
        />
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
