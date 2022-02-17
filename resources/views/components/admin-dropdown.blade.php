<Dropdown class="w-40" title="{{ Auth::user()->name }}">

    <Dropdowncontent>

        <Dropdownitems href="/admin/dashboard" category="Dashboard">
        </Dropdownitems>
        <Dropdownitems href="/" category="Homepage">
        </Dropdownitems>

        <form method="POST" action="/logout">
            @csrf
            <Dropdownitems>
                <button type="submit">Logout</button>
            </Dropdownitems>
        </form>

    </Dropdowncontent>
