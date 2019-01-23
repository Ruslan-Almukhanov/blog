@extends('layouts.layout')
@section('content')
<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">About</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="about" class="ls section_padding_top_100 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header with_icon icon_color">
                    Welcome to Our Salon
                </h2>
                <p class="small-text">best Pet salon in iowa</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="images/about.jpg" alt="" />
            </div>
            <div class="col-md-6">
                <p>
                    Drumstick flank pork chop pastrami tenderloin. Turkey bacon cow beef ribs salami pork loin kevin fatback alcatra shankle turducken landjaeger ground round. Jerky beef turkey.
                </p>
                <p>
                    Beef biltong t-bone pork ground round ribeye tail hamburger. Doner kevin spare ribs turkey, andouille burgdoggen.
                </p>
                <ul class="list2 grey medium bottommargin_40">
                    <li>Pam sausage cow fatback ball</li>
                    <li>Hamburger prosciutto boudin</li>
                    <li>Doner leberkas pig baconudin</li>
                    <li>Pork loin pastrami jowl sirloin</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="reviews" class="cs main_color3 parallax page_testimonials section_padding_top_100 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header with_icon icon_color">
                    What Clients Say
                </h2>
                <p class="small-text">Because pets can not tell you their impressions</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">

                <div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">

                    <blockquote class="with_quotes text-center">
                        <img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
                        <div class="item-meta">
                            <h3 class="bottommargin_10">Ray Cunningham</h3>
                            <p class="small-text">Client</p>
                        </div>
                    </blockquote>

                    <blockquote class="with_quotes text-center">
                        <img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
                        <div class="item-meta">
                            <h3 class="bottommargin_10">Ray Cunningham</h3>
                            <p class="small-text">Client</p>
                        </div>
                    </blockquote>

                    <blockquote class="with_quotes text-center">
                        <img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
                        <div class="item-meta">
                            <h3 class="bottommargin_10">Ray Cunningham</h3>
                            <p class="small-text">Client</p>
                        </div>
                    </blockquote>


                </div>

            </div>
        </div>
    </div>
</section>

<section id="mission" class="ls section_padding_top_100 columns_margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section_header with_icon icon_color4">
                    Our Mission
                </h2>
                <p class="small-text">delivering the best pet care</p>
                <p class="grey">
                    Do swine ipsum leberkas, chicken drumstick jerky frankfurter reprehe voluptate ea t-bone lorem pork loin!
                </p>
                <p>
                    Capicola mollit swine aute, minim cupim frankfurter kielbasa. Chicken elit magna dolor bresaola velit. Qui est ball tip pork belly pariatur eu strip steak consequat labore aliqua salami ground round. Sint aliquip venison est shoulder swine exercitation dolor.
                </p>
                <p class="topmargin_40">
                    <a href="about.html" class="theme_button color2 wide_button">
                        Read More
                    </a>
                </p>
            </div>
            <div class="col-md-6 bottommargin_0">
                <img src="images/mission.png" alt="" class="top-overlap-small" />
            </div>
        </div>
    </div>
</section>
    @endsection()