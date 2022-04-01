@extends('layouts.app_frontend')
@section('title', $product->pro_name)
@section('content')
    <section class="inner-page-banner bg-common" data-bg-image="{{ asset('frontend/img/figure/inner-page-banner1.jpg') }}" style="background-image: url(&quot;img/figure/inner-page-banner1.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>{{ $product->pro_name }}</h1>
                        <ul>
                            <li>
                                <a href="{{ route('get.home') }}">Home</a>
                            </li>
                            <li>{{ $product->pro_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-recipe-main-banner">
        <div class="rc-carousel nav-control-layout4 owl-carousel owl-loaded owl-drag" data-loop="true" data-items="5" data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-5391px, 0px, 0px); transition: all 0.7s ease 0s; width: 19767px;">
                    <div class="owl-item cloned" style="width: 1792px; margin-right: 5px;">
                        <div class="item-figure">
                            <img src="{{ asset('frontend/img/figure/single-banner3.jpg') }}" alt="Banner">
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1792px; margin-right: 5px;">
                        <div class="item-figure">
                            <img src="{{ asset('frontend/img/figure/single-banner4.jpg') }}" alt="Banner">
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1792px; margin-right: 5px;">
                        <div class="item-figure">
                            <img src="{{ asset('frontend/img/figure/single-banner5.jpg') }}" alt="Banner">
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 1792px; margin-right: 5px;">
                        <div class="item-figure">
                            <img src="{{ asset('frontend/img/figure/single-banner1.jpg') }}" alt="Banner">
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1792px; margin-right: 5px;">
                        <div class="item-figure">
                            <img src="{{ asset('frontend/img/figure/single-banner2.jpg') }}" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="flaticon-back" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-next" aria-hidden="true"></i></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </section>
    <section class="single-recipe-wrap-layout2 padding-bottom-80">
        <div class="container">
            <div class="single-recipe-layout2">
                <div class="ctg-name">{{ $product->category->c_name ?? "" }}</div>
                <h2 class="item-title">{{ $product->pro_name }}</h2>
                <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                    <ul class="entry-meta">
                        <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>{{ $product->created_at }}</a>
                        </li>
                        <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>{{ $product->admin->name ?? "" }}</span></a>
                        </li>
{{--                        <li class="single-meta">--}}
{{--                            <ul class="item-rating">--}}
{{--                                <li class="star-fill"><i class="fas fa-star"></i></li>--}}
{{--                                <li class="star-fill"><i class="fas fa-star"></i></li>--}}
{{--                                <li class="star-fill"><i class="fas fa-star"></i></li>--}}
{{--                                <li class="star-fill"><i class="fas fa-star"></i></li>--}}
{{--                                <li class="star-empty"><i class="fas fa-star"></i></li>--}}
{{--                                <li><span>9<span> / 10</span></span> </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="single-meta"><a href="#"><i class="fas fa-heart"></i><span>02</span>--}}
{{--                                Likes</a>--}}
{{--                        </li>--}}
                    </ul>
                    <ul class="action-item">
                        <li><button><i class="fas fa-print"></i></button></li>
                        <li><button><i class="fas fa-expand-arrows-alt"></i></button></li>
                        <li class="action-share-hover">
                            <button><i class="fas fa-share-alt"></i></button>
                            <div class="action-share-wrap">
                                <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" title="skype"><i class="fab fa-skype"></i></a>
                                <a href="#" title="rss"><i class="fas fa-rss"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <p class="item-description">{{ $product->pro_description }}</p>
                {!! $product->pro_content !!}


                <!--<div class="related-recipe">
                    <h4 class="heading-title">FROM OUR SHOP</h4>
                    <div class="rc-carousel nav-control-layout3 owl-carousel owl-loaded owl-drag" data-loop="true" data-items="5" data-margin="40" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-810px, 0px, 0px); transition: all 0.7s ease 0s; width: 3240px;">
                                @foreach($productsRelated ?? [] as $item)
                                <div class="owl-item cloned" style="width: 230px; margin-right: 40px;">
                                    <div class="shop-box-layout1">
                                        <div class="mask-item bg--light">
                                            <div class="item-figure">
                                                <img src="{{ pare_url_file($item->pro_avatar) }}" alt="Product">
                                            </div>
                                            <ul class="action-items">
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-exchange-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}">{{ $item->pro_name }}</a></h3>
                                            <div class="item-price"><span class="currency">VNĐ</span>{{ number_format($item->pro_price) }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="flaticon-back" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-next" aria-hidden="true"></i></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>-->
                @if (isset($product->admin))
                <div class="recipe-author">
                    <div class="media media-none--xs">
                        <img src="{{ pare_url_file($product->admin->avatar) }}" alt="{{ $product->admin->name }}" class="rounded-circle media-img-auto">
                        <div class="media-body">
                            <h4 class="author-title">{{ $product->admin->name }}</h4>
                            <h5 class="author-sub-title">Written by</h5>
                            <p>I love cooking and blogging. Using a fork, break salmon. Halve reserved
                                potatoes and eggs crosswise. The of something of did require met of
                                help have someone.
                            </p>
                            <ul class="author-social">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
{{--                <div class="next-prev-post">--}}
{{--                    <div class="prev-post">--}}
{{--                        <a href="#" class="item-figure"><img src="img/blog/prev-post.jpg" alt="Post"></a>--}}
{{--                        <div class="item-content">--}}
{{--                            <p>PREVIOUS POST</p>--}}
{{--                            <h3 class="post-title"><a href="#">Old school pancake next area so goody</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="next-post">--}}
{{--                        <div class="item-content">--}}
{{--                            <p>NEXT POST</p>--}}
{{--                            <h3 class="post-title"><a href="#">Old school pancake next area so goody</a></h3>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="item-figure"><img src="img/blog/next-post.jpg" alt="Post"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @if (isset($votes) && !$votes->isEmpty())
                @php
                    $age = 0;
                    if ($product->pro_review_total)
                       $age = round($product->pro_review_star / $product->pro_review_total,1);
                @endphp
                <div class="recipe-reviews">
                    <div class="section-heading3 heading-dark">
                        <h2 class="item-heading">RECIPE REVIEWS</h2>
                    </div>
                    <style>
                        .fa-star.default {
                            color: #d9d9d9;
                        }
                    </style>
                    <div class="avarage-rating-wrap">
                        <div class="avarage-rating">Avarage Rating:
                            <span class="rating-icon-wrap">
                                @for($i = 1; $i <= 5 ; $i ++)
                                    <i class="fas {{ $i <= $age  ? 'fa-star' : 'fa-star default' }}"></i>
                                @endfor
                                </span>
                            <span class="rating-number">({{ $age }})</span>
                        </div>
                        <div class="total-reviews">Total Reviews:<span class="review-number">({{ $product->pro_review_total }})</span></div>
                    </div>
                    <ul>
                        @foreach($votes as $item)
                        <li class="reviews-single-item">
                            <div class="media media-none--xs">
                                <img src="{{ pare_url_file($item->user->avatar ?? "") }}" alt="Comment" class="media-img-auto">
                                <div class="media-body">
                                    <h4 class="comment-title">{{ $item->user->name ?? "" }}</h4>
                                    <span class="post-date">{{ $item->created_at }}</span>
                                    <p>{{ $item->v_content }}</p>
                                    <ul class="item-rating">
                                        @for ($i = 1 ; $i <= 5; $i ++)
                                        <li class="single-item {{ $i <= $item->v_number ? 'star-fill' : 'star-empty' }}"><i class="fas fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="leave-review">
                    <div class="section-heading3 heading-dark">
                        <h2 class="item-heading">LEAVE A REVIEW</h2>
                    </div>
                    <div class="rate-wrapper">
                        <div class="rate-label">Rating</div>
                        <div class="rate">
                            <div class="rate-item" data-id="1"><i class="fa fa-star" aria-hidden="true"></i></div>
                            <div class="rate-item" data-id="2"><i class="fa fa-star" aria-hidden="true"></i></div>
                            <div class="rate-item" data-id="3"><i class="fa fa-star" aria-hidden="true"></i></div>
                            <div class="rate-item" data-id="4"><i class="fa fa-star" aria-hidden="true"></i></div>
                            <div class="rate-item" data-id="5"><i class="fa fa-star" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <form class="leave-form-box" action="{{ route('get_user.vote.create', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="v_number" id="v_number">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label>Comment :</label>
                                <textarea placeholder="" class="textarea form-control" name="message" rows="7" cols="20" data-error="Message field is required" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>Name :</label>
                                <input type="text" placeholder="" disabled class="form-control" name="name" data-error="Name field is required" value="{{ get_data_user('web','name') }}" required="">
                            </div>
                            <div class="col-lg-4 form-group">
                                <label>E-mail :</label>
                                <input type="email" placeholder="" disabled  class="form-control" name="email" value="{{ get_data_user('web','email') }}" data-error="E-mail field is required" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button type="submit" class="item-btn">Đánh giá</button>
                            </div>
                        </div>
                        <div class="form-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.components._inc_instagram')
@stop

