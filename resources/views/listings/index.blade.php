<x-layout>

    @include('partials._hero')
    @include('partials._search')


    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    @else
        <p>No Listings Found! - Try to add a lisgting!</p>
    @endunless
</x-layout>
