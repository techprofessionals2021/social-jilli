@extends("layouts.front_app")

@section("style")

@endsection
    @section("wrapper")
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="bg-text">
                <span>Social Jiili<br>Social Jiili<br>Jiili Social<br>Social Jiili</span>
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>{{$page->name ?? 'Home'}}</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <span>{{$page->name ?? 'Home'}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Design -->
        <section class="design-area two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    {!! $page->content ?? '-' !!}
                </div>
            </div>
        </section>
   

    @endsection

@section("script")

@endsection
