{{--// header--}}
{{--// side bar--}}
{{--// top-nav--}}
{{--//content--}}
{{--//footer bar--}}
{{--// right side message--}}
{{--// footer--}}

@include('layout.header')
@include('layout.sidebar')
@include('layout.top_nav')

    <div class="wrapper wrapper-content">
        <div class="row">
              @yield('content')
        </div>
    </div>

@include('layout.footer-bar')
@include('layout.rigth-side-message')
@include('layout.footer')