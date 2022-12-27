<x-layout title="New series">
    <x-series.form
        :action="route('series.store')"
        :input-name-value="old('name')"
        :update="false"
    />
</x-layout>
