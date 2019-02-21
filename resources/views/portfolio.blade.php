@extends('layouts.app')
@section('title') Portfolio @endsection

@section('css')

@endsection
@section('content')
    <!-- Project Area Start -->
    <div class="gallery_area clearfix">
        <div class="container-fluid clearfix">
            <div class="gallery_menu">
                <div class="portfolio-menu">
                    <button class="active btn" type="button" data-filter="*"></button>
                    <button class="btn" type="button" data-filter=".portraits"></button>
                    <button class="btn" type="button" data-filter=".weddings"></button>
                    <button class="btn" type="button" data-filter=".studio"></button>
                    <button class="btn" type="button" data-filter=".fashion"></button>
                    <button class="btn" type="button" data-filter=".life"></button>
                </div>
            </div>

            <div class="row portfolio-column">

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits life">
                    <img src="img/bg-img/1b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p1.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings">
                    <img src="img/bg-img/2b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p2.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits">
                    <img src="img/bg-img/3b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p3.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings life">
                    <img src="img/bg-img/4b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p4.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item weddings">
                    <img src="img/bg-img/5b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p5.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits">
                    <img src="img/bg-img/6b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p6.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio">
                    <img src="img/bg-img/7b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p7.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life">
                    <img src="img/bg-img/8b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p8.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion">
                    <img src="img/bg-img/9b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p9.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item portraits">
                    <img src="img/bg-img/10b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p10.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item studio life">
                    <img src="img/bg-img/11b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p11.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item fashion">
                    <img src="img/bg-img/12b.jpg" alt="">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="img/bg-img/p12.jpg"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center mt-70">
                    <a href="#" class="btn studio-btn"><img src="img/core-img/logo-icon.png" alt=""> Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Area End -->
@endsection
@section('js')
@endsection
