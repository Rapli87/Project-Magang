<div class="col-md-3 col-sm-12">
    <!-- Blog Single Sidebar Start Here -->
    <div class="sidebar-area">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="search-box">
                <div class="box-search">
                    <input class="form-control" placeholder="Search articles..." name="keyword" id="srch-term"
                        type="text">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        <div class="cate-box">
            <span class="title">Categories</span>
            {{-- model category 1 --}}
            <ul>
                @foreach ($categories as $item)
                    <li>
                        <i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{ url('blog/category/'.$item->slug) }}">
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
            {{-- model category 2 --}}
            {{-- <div>
                @foreach ($categories as $item)
                    <span><a href="#!" class="bg-primary badge">{{ $item->name }}</a></span>
                @endforeach
            </div> --}}
        </div>
        {{-- <div class="archives-box">
            <span class="title">Archives</span>
            <ul>
                <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2018
                        (18)</a>
                </li>
                <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2017
                        (16)</a>
                </li>
                <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2016
                        (15)</a>
                </li>
                <li>
                    <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">2015
                        (17)</a>
                </li>
            </ul>
        </div> --}}
        <div class="recent-post-area">
            <span class="title"> Recent Post</span>
            <ul class="news-post">
                <li>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                            <div class="item-post">
                                <div class="row">
                                    <div
                                        class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                        <img src="{{ asset('frontend/images/blog-details/sm1.jpg') }}" alt=""
                                            title="News image" />
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <h4><a href="{{ route('pages.blog') }}">Raken develops
                                                The software</a></h4>
                                        <span class="date"><i class="fa fa-calendar"
                                                aria-hidden="true"></i> June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                            <div class="item-post">
                                <div class="row">
                                    <div
                                        class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                        <img src="{{ asset('frontend/images/blog-details/sm2.jpg') }}" alt=""
                                            title="News image" />
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <h4><a href="{{ route('pages.blog') }}">TRaken
                                                develops The software</a></h4>
                                        <span class="date"><i class="fa fa-calendar"
                                                aria-hidden="true"></i> June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                            <div class="item-post">
                                <div class="row">
                                    <div
                                        class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                        <img src="{{ asset('frontend/images/blog-details/sm3.jpg') }}" alt=""
                                            title="News image" />
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <h4><a href="{{ route('pages.blog') }}">Raken develops
                                                The software</a></h4>
                                        <span class="date"><i class="fa fa-calendar"
                                                aria-hidden="true"></i> June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        {{-- <div class="tag-area">
            <span class="title">Product Tags</span>
            <ul>
                <li>
                    <a href="#">Ball</a>
                </li>
                <li>
                    <a href="#">Coach</a>
                </li>
                <li>
                    <a href="#">League</a>
                </li>
                <li>
                    <a href="#">Point</a>
                </li>
                <li>
                    <a href="#">Ball</a>
                </li>
                <li>
                    <a href="#">Coach</a>
                </li>
                <li>
                    <a href="#">League</a>
                </li>
                <li>
                    <a href="#">Point</a>
                </li>
                <li>
                    <a href="#">Ball</a>
                </li>
                <li>
                    <a href="#">Coach</a>
                </li>
                <li>
                    <a href="#">Point</a>
                </li>
            </ul>
        </div>
        <div class="newsletter-area">
            <h3>Newsletter</h3>
            <p>Sign up for our Newsletter !</p>
            <div class="box-newsletter">
                <input class="form-control" placeholder="youremail@domain.com" name="newsletter-term"
                    id="newsletter-term" type="text">
                <button class="btn btn-default" type="submit"><i class="fa fa-arrow-right"
                        aria-hidden="true"></i></button>
            </div>
        </div> --}}
    </div>
</div>