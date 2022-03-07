<Dropdown class="w-40" title="{{ Auth::user()->name }}">

    <Dropdowncontent>

        <Dropdownitems href="/" category="Homepage"></Dropdownitems>
        <Dropdownitems href="/admin/posts" category="Manage Posts"></Dropdownitems>
        <Dropdownitems href="/admin/posts/create" category="New Post"></Dropdownitems>

        <form method="POST" action="/logout">
            @csrf
            <Dropdownitems>
                <button :type="submit">Logout</button>
            </Dropdownitems>
        </form>

    </Dropdowncontent>

</Dropdown>
