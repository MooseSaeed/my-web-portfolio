<x-bloglayout>

    @include('__header')

    <x-featuredCard />


    <div class="lg:grid lg:grid-cols-2">
        <x-postCard />
        <x-postCard />
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-postCard />
        <x-postCard />
        <x-postCard />
    </div>

</x-bloglayout>
