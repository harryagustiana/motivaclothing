<?php $title="Get a Quote | MOTIVA"; ?>
<?php include 'header.php';?>

<div id="main">
                
                    <div class="main-header background background-image-heading-contact">
                        <div class="container">
                            <h1>Get a Quote</h1>
                        </div>
                    </div>
                

                <div id="breadcrumb">
                    <div class="container">
                        <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active"><span>Get a Quote</span></li>
</ol>

                    </div>
                </div>

                
<div class="contact-wrapper">
    <div class="margin-bottom-100">
        <div class="container">
            <div class="row">
				<div class="col-md-3">
					<p>&nbsp;</p>
				</div>
                <div class="col-md-6">
                    <div class="contact-content">
						
						<div class="divider"></div>
						
						<div class="row">
						<div class="col-md-6">
						
                        <form action="thanks.php" method="POST" name="quote" id="quote-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">COMPANY NAME *</label>
                                <input type="text" name="name" id="name" placeholder="Company Name" class="form-control dark" required="true">
                            </div><!-- /.form-group -->
						
						</div>
						
						<div class="col-md-6">
                            <div class="form-group">
                                <label for="name">COMPANY E-MAIL *</label>
                                <input type="email" pattern="[^ @]*@[^ @]*" name="email" id="email" placeholder="Company E-mail" class="form-control dark" required="true">
                            </div><!-- /.form-group -->
						
						</div>
						</div>
						
						<div class="divider"></div>
						
						<div class="row">
							<div class="col-md-4">
							
								<h6>TYPE</h6>
								
								<div class="form-group">
									<label><input type="checkbox" name="typetshirt" value="T-Shirt"> T-Shirt</label><br>
									<label><input type="checkbox" name="typepolo" value="Polo"> Polo</label><br>
									<label><input type="checkbox" name="typeoption" value="Other" id="typeother"> Other</label><br>
									<input style="display: none;" type="text" name="typeother" id="texttype" placeholder="Other Type" class="form-control dark">
								</div><!-- /.form-group -->
							
							</div>
						
							<div class="col-md-4">
								
								<h6>SLEEVE</h6>

								<div class="form-group">
									<label><input type="checkbox" name="sleevelong" value="Long"> Long</label><br>
									<label><input type="checkbox" name="sleeveshort" value="Short"> Short</label><br>
								</div><!-- /.form-group -->
							
							</div>
							<div class="col-md-4">
								
								<h6>FABRIC</h6>
								
								<div class="form-group">
									<label><input type="checkbox" name="fabriccotton" value="Cotton"> 100% Cotton</label><br>
									<label><input type="checkbox" name="fabricpima" value="Pima"> 100% Pima Cotton</label><br>
									<label><input type="checkbox" name="fabricoption" value="Other" id="fabricother"> Other</label><br>
									<input style="display: none;" type="text" name="fabricother" id="textfabric" placeholder="Other Fabric" class="form-control dark">
								</div><!-- /.form-group -->
							
							</div>
						</div>
						
						<div class="divider"></div>
						
						<div class="row">
						<div class="col-md-12">
							
							<h6>QUANTITY (Minimum order 25 pcs)</h6>
								</div>
								</div>
								<div class="row">
								<div class="col-md-4">
								<label for="size" id="size">Size S</label>
                                <input type="text" name="sizes" placeholder="" id="sizes" class="form-control dark">
								</div>
								<div class="col-md-4">
								<label for="size" id="size">Size L</label>
                                <input type="text" name="sizel" placeholder="" id="sizel" class="form-control dark">
								</div>
								<div class="col-md-4">
								<label for="size" id="size">Size 2XL</label>
                                <input type="text" name="sizexxl" placeholder="" id="sizexxl" class="form-control dark">
								</div>
								</div>
								<p>&nbsp;</p>
								<div class="row">
								<div class="col-md-4">
								<label for="size" id="size">Size M</label>
                                <input type="text" name="sizem" placeholder="" id="sizem" class="form-control dark">
								</div>
								<div class="col-md-4">
								<label for="size" id="size">Size XL</label>
                                <input type="text" name="sizexl" placeholder="" id="sizexl" class="form-control dark">
								</div>
								</div>
								<div class="row">
								<div class="cold-md-12">
								<div id="errorMessageMinOrder" style="display:none; text-align: center;">Total order should be more than 25 pcs</div>
								</div>
								</div>
								
					    <div class="divider"></div>
					
						
						<div class="row">
						<div class="col-md-12">
							<div class="form-group" style="text-align: center;">
                                <label for="logo">UPLOAD LOGO (Required size 1280x720px) *</label>
                                <input type="file" name="logo" required="true">
                            </div><!-- /.form-group -->
						</div>
						</div>
						
						<div class="divider"></div>
						
						<div class="row">
						<div class="col-md-12">
							<div id="errorMessageDiv" style="display:none; text-align: center;">Please, fill in all required field. Marked with *</div>
							<br/>
                            <div class="form-button" style="text-align: center;">
                                <button type="submit" id="submit" class="btn btn-lg btn-dark">Submit Quote</button>
                            </div><!-- /.form-button -->
                        </form>
						</div>
						</div>
                    </div>
                </div><!-- /.col-md-6 -->
				<div class="col-md-3">
					<p>&nbsp;</p>
				</div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.margin-bottom-100 -->

</div><!-- /.contact-wrapper -->
</div>

<script>
var cb = document.getElementById('typeother'); // put your id's here
var tb = document.getElementById('texttype');

cb.onchange = function() { // listen for event change
   if(!cb.checked) { // check state
       tb.style.display = 'none';
   }
   else {
       tb.style.display = 'block';
   }
}

var cc = document.getElementById('fabricother'); // put your id's here
var tc = document.getElementById('textfabric');

cc.onchange = function() { // listen for event change
   if(!cc.checked) { // check state
       tc.style.display = 'none';
   }
   else {
       tc.style.display = 'block';
   }
}

var form = document.getElementById('quote-form'); // form has to have ID: <form id="formID">
form.noValidate = true;
form.addEventListener('submit', function(event) { // listen for form submitting
        if (!event.target.checkValidity()) {
            event.preventDefault(); // dismiss the default functionality
            // alert('Please, fill the required field'); // error message
			document.getElementById('errorMessageDiv').style.display = 'block';
        }
    }, false);

</script>
<!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>-->
<script>
/*var sizes = document.getElementById("sizes").value;
var sizem = document.getElementById("sizem").value;
var sizel = document.getElementById("sizel").value;
var sizexl = document.getElementById("sizexl").value;
var sizexxl = document.getElementById("sizexxl").value;

/*function validate(){
	if (sizes != "" || sizem != "" || sizel != "" || sizexl != "" || sizexxl != ""){
		var total = parseInt(sizes) + parseInt(m) + parseInt(l) + parseInt(xl) + parseInt(xxl);
		if (total <= 24){
			document.getElementById('errorMessageMinOrder').style.display = 'block';
			return false;
		}
	}
}

$('#submit').click(function(){
var total = parseInt(sizes) + parseInt(m) + parseInt(l) + parseInt(xl) + parseInt(xxl);
if(jumlah <= batas){
	alert('Harus 25');
} else {
	$('#form').submit();
}
});*/

$( document ).ready(function() {
				$("#sizes").val('0');
				$("#sizem").val('0');
				$("#sizel").val('0');
				$("#sizexl").val('0');
				$("#sizexxl").val('0');

       			$("#sizes,#sizem,#sizel,#sizexl,#sizexxl").on("keyup",function(){
       				var sizes = $("#sizes").val();
	       			var sizem = $("#sizem").val();
					var sizel = $("#sizel").val();
					var sizexl = $("#sizexl").val();
					var sizexxl = $("#sizexxl").val();
	       			var limit = 25;
					
					if(isNaN(sizes) || sizes == "") {
						var sizes = 0;
					}
					if(isNaN(sizem) || sizem == "") {
						var sizem = 0;
					}
					if(isNaN(sizel) || sizel == "") {
						var sizel = 0;
					}
					if(isNaN(sizexl) || sizexl == "") {
						var sizexl = 0;
					}
					if(isNaN(sizexxl) || sizexxl == "") {
						var sizexxl = 0;
					}
					
	       			var total = parseInt(sizes) + parseInt(sizem) + parseInt(sizel) + parseInt(sizexl) + parseInt(sizexxl);
					
					
					
	       			if(parseInt(total) < limit && parseInt(total) != 0)
	       			{
	       				document.getElementById('submit').disabled = true;
	       			}else if(parseInt(total) == 0){
						document.getElementById('submit').disabled = false;
	       			}
					else{
	       				document.getElementById('submit').disabled = false;
	       			}

       			
       			})
				});
</script>

<?php include 'footer.php';?>