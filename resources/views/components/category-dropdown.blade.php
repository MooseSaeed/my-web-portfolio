<Dropdown title="{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}">

    <Dropdowncontent>

        @foreach ($categories as $category)
            <Dropdownitems
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
                class="{{ isset($currentCategory) && $currentCategory->is($category) ? ' selectedCategoryItem' : '' }}">
                {{ $category->name }}
            </Dropdownitems>
        @endforeach

    </Dropdowncontent>

</Dropdown>
