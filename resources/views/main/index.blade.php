<x-layout >
    {{-- main page hero section --}}
    @include('partials.main._hero')
    <main>
        @include('partials.main._about')
        @include('partials.main._features')
        @include('partials.main._clients')
        @include('partials.main._services')
        @include('partials.main._count')
        @include('partials.main._testimonials')
        @include('partials.main._faq')
    </main>
</x-layout>