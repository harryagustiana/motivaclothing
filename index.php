<?php $title="MOTIVA | Feel The Comfort"; ?>

<?php include 'header.php';?>

<div id="main">
                
    <section> 
    <div class="main-slider-wrapper">
        <div class="main-slider owl-carousel owl-carousel-inset">

            <div class="main-slider-item">
                <div class="main-slider-image">
                    <img src="./img/slider/1.jpg" alt="">
                </div>

                <div class="main-slider-text">
                    <div class="fp-table">
                        <div class="fp-table-cell center">
                            <div class="container">
                                <div class="button">
                                    <a href="catalog" class="btn btn-lg btn-primary margin-right-15">View More</a>
                                    <a href="get-a-quote" class="btn btn-lg btn-dark btn-outline">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-item">
                <div class="main-slider-image">
                    <img src="./img/slider/2.jpg" alt="">
                </div>

                <div class="main-slider-text">
                    <div class="fp-table">
                        <div class="fp-table-cell center">
                            <div class="container">
                                <div class="button">
                                    <a href="catalog" class="btn btn-lg btn-primary margin-right-15">View More</a>
                                    <a href="get-a-quote" class="btn btn-lg btn-dark btn-outline">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-item">
                <div class="main-slider-image">
                    <img src="./img/slider/3.jpg" alt="">
                </div>

                <div class="main-slider-text">
                    <div class="fp-table">
                        <div class="fp-table-cell center">
                            <div class="container">
                                <div class="button">
                                    <a href="catalog" class="btn btn-lg btn-primary margin-right-15">View More</a>
                                    <a href="get-a-quote" class="btn btn-lg btn-dark btn-outline">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-item">
                <div class="main-slider-image">
                    <img src="./img/slider/4.jpg" alt="">
                </div>

                <div class="main-slider-text">

                    <div class="fp-table">
                        <div class="fp-table-cell center">
                            <div class="container">
                                <div class="button">
                                    <a href="catalog" class="btn btn-lg btn-primary margin-right-15">View More</a>
                                    <a href="get-a-quote" class="btn btn-lg btn-dark btn-outline">Get a Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        $(function() {  aweMainSlider(); });
    </script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:4,
			loop:true,
			slidespeed : 5000,
			margin:10,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true
		});
	</script>

    </section><!-- /section -->
	
	<section class="border-bottom" style="margin-bottom: 100px;">
        <div class="container">
            <div class="policy-wrapper">
                
        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-8">
                <div class="policy">
                    <div class="policy-icon">
                        <i class="icon icon-star"></i>
                    </div>

                    <div class="policy-text">
                        <h4>BEST QUALITY</h4>
                        <p>GUARANTEED</p>
                    </div>
                </div><!-- /.policy -->
            </div>

            <div class="col-md-4 col-sm-4 col-xs-8">
                <div class="policy">
                    <div class="policy-icon">
                        <i class="icon icon-car"></i>
                    </div>

                    <div class="policy-text">
                        <h4>FREE SHIPPING</h4>
                        <p>WITHIN USA</p>
                    </div>
                </div><!-- /.policy -->
            </div>

            <div class="col-md-4 col-sm-4 col-xs-8">
                <div class="policy">
                    <div class="policy-icon">
                        <i class="icon icon-dolar-circle"></i>
                    </div>

                    <div class="policy-text">
                        <h4>AFFORDABLE PRICE</h4>
                        <p>EXPECT MORE, PAY LESS</p>
                    </div>
                </div><!-- /.policy -->
            </div>
        </div><!-- /.row -->

            </div><!-- /.policy-wrapper -->
        </div><!-- /.container -->
    </section><!-- /section -->

            </div>

<?php include 'footer.php';?>