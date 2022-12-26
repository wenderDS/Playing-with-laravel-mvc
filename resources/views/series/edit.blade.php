<x-layout title="Edit series '{{ $series->name  }}'">
    <x-series.form :action="route('series.update', $series->id)" :input-name-value="$series->name"></x-series.form>
</x-layout>
