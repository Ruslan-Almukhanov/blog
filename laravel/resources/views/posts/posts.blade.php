@extends('layouts.layout-blog')
@section('title', $title)
@section('content')
    <div class="col-sm-7 col-md-8 col-lg-8">

            <article class="vertical-item content-padding big-padding post format-standard with_shadow rounded overflow-hidden">

                <div class="item-media entry-thumbnail">
                    <img src="{{asset('images/gallery/01.jpg')}}" alt="">
                </div>

                <div class="item-content entry-content">
                    <header class="entry-header">

                        <p class="content-justify item-meta">
									<span class="entry-date highlight3 small-text">
										<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">

										</time>
									</span>
                        </p>

                        <h4 class="entry-title hover-color3">
                            <a href="blog-single" rel="bookmark"></a>
                        </h4>


                    <!-- .entry-meta -->

                    </header>
                    <!-- .entry-header -->




                </div>
                <!-- .item-content.entry-content -->
            </article>

    <!-- .post -->
        <article class="vertical-item content-padding big-padding post format-chat with_shadow rounded overflow-hidden">

            <div class="item-media">
                <img src="images/gallery/04.jpg" alt="" />
            </div>

            <div class="item-content entry-content">

                <header class="entry-header">

                    <div class="content-justify bottommargin_10 small-text">

											<span class="entry-date highlight3">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													March 9, 2017
												</time>
											</span>

                        <span class="darklinks">
												<a href="#">Chat</a>
											</span>

                    </div>

                    <h4 class="entry-title hover-color3">
                        <a href="blog-single-right.html" rel="bookmark">Post Format: Chat</a>
                    </h4>

                </header>
                <!-- .entry-header -->

                <div class="entry-content">


                </div>
                <!-- .entry-content -->
            </div>
            <!-- eof .item-content -->
        </article>

        <div class="row topmargin_60">
            <div class="col-sm-12 text-center">
                <ul class="pagination highlightlinks">
                    <li>
                        <a href="?page=">
                            <span class="sr-only">Prev</span>
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a href="?page=">
                            <span class="sr-only">Next</span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--eof .col-sm-8 (main content)-->
@endsection