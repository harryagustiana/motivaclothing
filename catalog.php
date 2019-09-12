<?php $title="Catalog | MOTIVA"; ?>
<?php include "header.php"; ?>

<div id="main">
                
                    <div class="main-header background background-image-heading-contact">
                        <div class="container">
                            <h1>Catalog</h1>
                        </div>
                    </div>
                

                <div id="breadcrumb">
                    <div class="container">
                        <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active"><span>Catalog</span></li>
</ol>

                    </div>
                </div>

                
<div class="contact-wrapper">
    <div class="margin-bottom-min125">
        <div class="container">
            <div class="row">
				<div class="divider"></div>
				<div class="col-md-2">
					<p>&nbsp;</p>
				</div>
				
                <div class="col-md-10" style="margin-bottom: 100px;">
					<div class="t">
						<div class="tc rel">
							<div class="book" id="book">
								<div class="page"><img src="./img/catalogue/1-Motiva Page.jpg" alt="" /></div>
								<div class="page"><img src="./img/catalogue/2-Motiva Page.jpg" alt="" /></div>
								<div class="page"><img src="./img/catalogue/3-Motiva Page.jpg" alt="" /></div>
								<div class="page"><img src="./img/catalogue/4-Motiva Page.jpg" alt="" /></div>
							</div>
						</div>
					</div>
                </div><!-- /.col-md-12 -->
				
				<div class="col-md-2">
					<p>&nbsp;</p>
				</div>
				
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.margin-bottom-100 -->

</div><!-- /.contact-wrapper -->
            </div>

<script>
/*
 * Turn.js responsive book
 */

/*globals window, document, $*/

(function () {
    'use strict';

    var module = {
        ratio: 1.38,
        init: function (id) {
            var me = this;

            // if older browser then don't run javascript
            if (document.addEventListener) {
                this.el = document.getElementById(id);
                this.resize();
                this.plugins();

                // on window resize, update the plugin size
                window.addEventListener('resize', function (e) {
                    var size = me.resize();
                    $(me.el).turn('size', size.width, size.height);
                });
            }
        },
        resize: function () {
            // reset the width and height to the css defaults
            this.el.style.width = '';
            this.el.style.height = '';

            var width = this.el.clientWidth,
                height = Math.round(width / this.ratio),
                padded = Math.round(document.body.clientHeight * 0.9);

            // if the height is too big for the window, constrain it
            if (height > padded) {
                height = padded;
                width = Math.round(height * this.ratio);
            }

            // set the width and height matching the aspect ratio
            this.el.style.width = width + 'px';
            this.el.style.height = height + 'px';

            return {
                width: width,
                height: height
            };
        },
        plugins: function () {
            // run the plugin
            $(this.el).turn({
                gradients: true,
                acceleration: true,
				autoCenter: true
            });
            // hide the body overflow
            document.body.className = 'hide-overflow';
        }
    };

    module.init('book');
}());
</script>
<?php include "footer.php"; ?>