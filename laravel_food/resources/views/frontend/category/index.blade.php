@extends('layouts.app_frontend')
@section('title', $title)
@section('content')
    <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg" style="background-image: url(&quot;img/figure/inner-page-banner1.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        @if (isset($category))
                            <h1>{{ $category->c_name }}</h1>
                        @endif
                        <ul>
                            <li>
                                <a href="{{ route('get.home') }}">Home</a>
                            </li>
                            @if (isset($category))
                                <li>{{ $category->c_name }}</li>
                            @else
                                <li>Tìm kiếm</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="category-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row">
                @foreach($products as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="category-box-layout1">
                            <figure class="item-figure"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}">
                                <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product"></a>
                            </figure>
                            <div class="item-content">
                                <h3 class="item-title"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}">{{ $item->pro_name }}</a></h3>
{{--                                <span class="sub-title"> 14 Recipes</span>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('frontend.components._inc_instagram')
@stop

