@include('dashboard.layouts.header')
<div id="wrapper">
    @include('dashboard.layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('dashboard.layouts.topbar')
            <div class="container-fluid">
                @yield('container')
            </div>
        </div>
    </div>
</div>
@include('dashboard.layouts.logout')
@include('sweetalert::alert')
@include('dashboard.layouts.footer')

