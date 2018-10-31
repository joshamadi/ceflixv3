
{{--@extends('layouts.master')--}}

{{--@section('body')--}}

    {{----}}
{{--@endsection--}}










@include("layouts.head")
<title>|| Ceflix ||</title>
@include("layouts.nav")
<div id="wrapper">
    @include("layouts.aside")
                    <div id="content-wrapper">
                        <div class="container-fluid pb-0">
                            <div class="top-mobile-search">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="mobile-search">
                                            <div class="input-group">
                                                <input type="text" placeholder="Search for..." class="form-control">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="single-channel-image">
                                <img class="img-fluid" alt="" src="img/channel-banner1.png">
                            </div>

<hr>

                            <div class="top-category section-padding mb-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="{{('categories')}}" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{('categories')}}"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>

                                            <h6> Categories</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="owl-carousel owl-carousel-category">
                                            <div class="item" id="getResult2">
                                                <div class="category-item" >
                                                    <a href="{{('categories')}}" >
                                                        <img class="img-fluid" src="img/s1.png" alt="">
                                                        <h6>Your Life</h6>
                                                        <p>74,853 views</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>






                            <div class="video-block section-padding">
                                <div class="row" id="pinned_videos">
                                    <div class="col-md-12" >
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <h6>Pinned videos</h6>
                                        </div>
                                    </div>
                                    <div id="spinner_pinned_videos" class="col-md-12" align="center">
                                        <div>
                                            <i class="fa fa-spinner fa-spin fa-3x"></i> <br/>
                                            ...loading....
                                        </div>

                                    </div>

                                </div>
                            </div>


<hr>
                            <div class="video-block section-padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="{{('video')}} class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <h6>Recent Videos</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-3">
                                        <div class="video-card">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{('history')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="{{('history')}}"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                                <div class="time">3:50</div>
                                            </div>
                                            <div class="video-card-body">
                                                <div class="video-title">
                                                    <a href="#">There are many variations of passages of Lorem</a>
                                                </div>
                                                <div class="video-page text-success">
                                                    Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                                </div>
                                                <div class="video-view">
                                                    1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            <div class="video-block section-padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <h6>Subscribed Video</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-3">
                                        <div class="channels-card">
                                            <div class="channels-card-image">
                                                <a href="{{('subscriptions')}}"><img class="img-fluid" src="img/s1.png" alt=""></a>
                                                <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Subscribe <strong>1.4M</strong></button></div>
                                            </div>
                                            <div class="channels-card-body">
                                                <div class="channels-title">
                                                    <a href="#">Channels Name</a>
                                                </div>
                                                <div class="channels-view">
                                                    382,323 subscribers
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr class="mt-0">


                            <div class="video-block section-padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <h6>Treading</h6>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-3">
                                        <div class="video-card">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{('history')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                                <div class="time">3:50</div>
                                            </div>
                                            <div class="video-card-body">
                                                <div class="video-title">
                                                    <a href="#">There are many variations of passages of Lorem</a>
                                                </div>
                                                <div class="video-page text-success">
                                                    Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                                </div>
                                                <div class="video-view">
                                                    1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
            </div>








        </div>
        </div>
@include('layouts.footer')
@include('layouts.foot')