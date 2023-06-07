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
                            <h2>Services</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <span>Services</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row my-3 justify-content-between mx-lg-5 srvcs-blk-main">
            <div class="container">
                <!--Start search column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{route('service_package_for_front_search')}}" method="post">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="search" value="" class="form-control" placeholder="Search for Services">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="id" id="category" class="form-control statusfield">
                                                <option value="">All Category</option>
                                                @foreach($listing_categories as $package)
                                                    <option value="{{$package->id}}"> {{$package->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-padding w-100"><i class="fas fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!--End search column -->

                <!-- services-->
                <div class="faq-area pt-100 pb-70">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="faq-content">
                                    <ul class="accordion">
                                        @foreach($packages as $package)

                                        <li>
                                            <a>
                                                {{$package->name}}
                                                <i class="flaticon-visibility"></i>
                                                <i class="flaticon-eye two"></i>
                                            </a>
                                            <p>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">{{__('custom.id')}}</th>
                                                    <th scope="col">{{__('custom.name')}}</th>
{{--                                                    <th scope="col">{{__('custom.description')}}</th>--}}
                                                    <th scope="col">{{__('custom.price_per')}} 1K</th>
                                                    <th scope="col">{{__('custom.min')}}</th>
                                                    <th scope="col">{{__('custom.max')}}</th>
                                                    <th scope="col">{{__('custom.action')}}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($package->getAllPackages as $item)
                                                    <tr>
                                                        <td scope="row">{{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
{{--                                                        <td>{{$item->description}}</td>--}}
                                                        <td>${{$item->price}}</td>
                                                        <td>{{$item->min}}</td>
                                                        <td>{{$item->max}}</td>
                                                        <td><button><i class="flaticon-eye two"></i>More</button></td>
                                                        {{--                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}</td>--}}
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End services -->
            </div>
        </div>
    @endsection

@section("script")

@endsection
