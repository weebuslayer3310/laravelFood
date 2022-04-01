@extends('layouts.app_frontend')
@section('title','Trang chủ')
@section('content')
    <!-- Slider Area Start Here -->
    <section class="ranna-slider-area">
        <div class="container">
            <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="30" data-margin="5"
                data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                @foreach($productsHot ?? [] as $item)
                <div class="ranna-slider-content-layout2">
                    <figure class="item-figure"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}"><img src="{{ pare_url_file($item->pro_avatar) }}"
                                alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">{{ $item->category->c_name ?? "" }}</span>
                        <h2 class="item-title"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}">{{ $item->pro_name }}</a></h2>
                        <p>{{ $item->pro_description }}</p>
                        <ul class="entry-meta">
                            <li><a><i class="fas fa-clock"></i>{{ $item->created_at->format('d/m/Y') }}</a></li>
                            <li><a><i class="fas fa-user"></i>by <span>{{ $item->admin->name ?? "" }}</span></a></li>
                            <li><a href="{{ route('get_user.link', $item->id) }}"><i class="fas fa-heart"></i><span>{{ $item->like->count() ?? 0 }}</span> Likes</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Slider Area End Here -->
    <!-- Random Recipe Start Here -->
    <section class="padding-bottom-45">
        <div class="container">
            <div class="row gutters-40">
                @foreach($productsNews ?? [] as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="product-box-layout4">
                        <div class="item-figure">
                            <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product">
                            <a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}" class="item-dot">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="item-content">
                            <span class="sub-title">{{ $item->category->name ?? "" }}</span>
                            <h3 class="item-title"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}">{{ $item->pro_description }}</a></h3>
                            
                            <ul class="entry-meta">
                                <li><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}"><i class="fas fa-clock"></i>{{ $item->created_at->format('d/m/Y') }}</a></li>
                                <li><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}"><i class="fas fa-user"></i>by <span>{{ $item->admin->name ?? "" }}</span></a></li>
                                <li><a href="{{ route('get_user.link', $item->id) }}"><i class="fas fa-heart"></i><span>{{ $item->like->count() ?? 0 }}</span> Likes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('frontend.components._inc_instagram')
@stop
