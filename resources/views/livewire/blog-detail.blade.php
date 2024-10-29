<main>
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">Blog Detail</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="blogmain blog-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blog-single">
                        <div class="blog-image">
                            <img src="{{ asset('storage/' . $article->banner_image) }}" alt="image">
                        </div>
                        <div class="blog-content mar-bottom-30">
                            <h3 class="blog-title"><a href="#">{{ $article->title }}</a></h3>
                            <div class="para-content pad-bottom-20">
                                <span class="mar-right-20"><a href="#"><i class="fa fa-user mar-right-5"></i>
                                        {{ $article->auther }}</a></span>
                                <p> {{ $article->content }}</p>
                            </div>

                            <p class="mar-bottom-20">{!! $article->description !!}</p>

                            <!-- blog share -->
                            <div class="blog-share display-flex mar-bottom-30">
                                <div class="header-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- author detail -->
                            {{-- <div class="blog-author mar-bottom-30 bg-grey">
                                <div class="blog-author-item">
                                    <div class="row display-flex">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="blog-thumb text-center">
                                                <img src="images/inbox4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <h3 class="title"><a href="#">About Author <span>Graphic
                                                        Designer</span></a></h3>
                                            <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vivamus sceler neque in euismod. Nam vitae urnasodales neque in
                                                faucibus.</p>
                                        </div>

                                    </div>
                                </div>
                            </div> --}}

                            <!-- blog review -->
                            {{-- <div class="single-add-review pad-top-30">
                                <h3>Write a Review</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea>Comment</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-btn">
                                                <a href="#" class="biz-btn biz-btn1">Submit Review</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
