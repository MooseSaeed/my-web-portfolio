<Dropdown title="{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}">

    <Dropdowncontent>

        <Dropdownitems href="/?{{ http_build_query(request()->except('category', 'page')) }}" category="All">
        </Dropdownitems>

        @foreach ($categories as $category)
            <Dropdownitems category="{{ $category->name }}"
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                class="{{ isset($currentCategory) && $currentCategory->is($category) ? ' selectedCategoryItem' : '' }}">
            </Dropdownitems>
        @endforeach

    </Dropdowncontent>

</Dropdown>
