
@if (Session::get('page') == 'dashboard')
    @php
        $active = "active";
    @endphp
    @else
    @php
        $active = "";
    @endphp
@endif
