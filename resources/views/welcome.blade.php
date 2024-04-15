    @extends('layouts.app')
    @section('title', 'Welcome')
    @section('content')

    <!-- start hero section -->
    <div class="hero-image">
        <div class="hero-content">
            <div class="col-md-4 hero-text">
                <h3>
                Chào mừng đến với trang web
                </h3>
                <p>Tại đây, bạn sẽ tìm thấy các sản phẩm công nghệ tiên tiến như điện thoại di động, máy tính bảng,...Đảm bảo chất lượng và giá cả hợp lý</p>
                <a href="{{ route('shop.index') }}">
                <button class="btn custom-border my-2 my-sm-0">Cửa hàng</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end hero section -->
    <!-- start page content -->
    <div class="container">
    <!--   <div class="content-head">
            <h2 style="text-align:center; font-weight: bold">Trang chủ</h2>
            <p>Tại đây, bạn sẽ tìm thấy các sản phẩm công nghệ tiên tiến như điện thoại di động, máy tính bảng,...Đảm bảo chất lượng và giá cả hợp lý</p>
        </div>-->
        <h2 class="header text-center">Sản phẩm nổi bật</h2>
        <!-- start products row -->
        <div class="row">
            @foreach ($products as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}<span class="float-right"> {{ format($product->price) }} đ</span></h5>
                                {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                    <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                    <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                    <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>
        <!-- end products row -->
        <div class="show-more">
            <a href="{{ route('shop.index') }}">
                <button class="btn custom-border-n">Xem nhiều hơn</button>
            </a>
        </div>
        <hr>
        <h2 class="header text-center">Sản phẩm hot</h2>
        <!-- start products row -->
        <div class="row">
            @foreach ($hotProducts as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5>
                                {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                    <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                    <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                    <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>
        <!-- end products row -->
    </div>
    <!-- end page content -->

    @endsection