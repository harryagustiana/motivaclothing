<?php $title="Submitted | MOTIVA"; ?>

<?php include "header.php"; ?>
<?php include "param.php"; ?>

<?php

// Assign the input values to variables for easy reference

$company = $_POST['name'];
$companymail = $_POST['email'];
if (!empty($_POST['typetshirt'])){
	$typetshirt = $_POST['typetshirt'];
}else{
	$typetshirt = "";
}
if (!empty($_POST['typepolo'])){
	$typepolo = $_POST['typepolo'];
}else{
	$typepolo = "";
}
$typeother = $_POST['typeother'];
if (!empty($_POST['sleevelong'])){
	$sleevelong = $_POST['sleevelong'];
}else{
	$sleevelong = "";
}
if (!empty($_POST['sleeveshort'])){
	$sleeveshort = $_POST['sleeveshort'];
}else{
	$sleeveshort = "";
}
if (!empty($_POST['fabriccotton'])){
	$fabriccotton = $_POST['fabriccotton'];
}else{
	$fabriccotton = "";
}
if (!empty($_POST['fabricpima'])){
	$fabricpima = $_POST['fabricpima'];
}else{
	$fabricpima = "";
}
$fabricother = $_POST['fabricother'];
$sizes = $_POST['sizes'];
$sizem = $_POST['sizem'];
$sizel = $_POST['sizel'];
$sizexl = $_POST['sizexl'];
$sizexxl = $_POST['sizexxl'];

//Uploading logo
$filename = $_FILES['logo']['name'];
$path = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
move_uploaded_file($_FILES['logo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$_FILES['logo']['name']);

// Send the email
include_once("phpmailer/class.phpmailer.php");

$tujuan = $adminmail;
$name_pengirim = "Motiva Clothing";
$pengirim = "noreply@motivaclothing.com";
$letak_file = $path.$filename;
$nama_file = $filename;
$subject = "New Quotation Received";
$message = "New quotation is submitted with below details<br/><br/> Company name : " . $company .
				"<br/> Company e-mail : <br/>" . $companymail .
				"<br/> <hr> Type : <br/>" . $typetshirt . 
                                "<br/>" . $typepolo . 
                                "<br/>" . $typeother . 
                                "<br/> <hr> Sleeve : <br/>" . $sleevelong .
                                "<br/>" . $sleeveshort .
                                "<br/> <hr> Fabric : <br/> " . $fabriccotton . 
                                "<br/>" . $fabricpima . 
                                "<br/>" . $fabricother . 
                                "<br/> <hr> Quantity <br/> Size S :" . $sizes .
				"<br/> Size M : " . $sizem . 
				"<br/> Size L : " . $sizel .
				"<br/> Size XL : " . $sizexl .
				"<br/> Size 2XL : " . $sizexxl .
                                "<br/> <hr> Logo attached on this e-mail";

$mail = new PHPMailer;

$mail->From=$pengirim;
$mail->FromName=$name_pengirim;
$mail->Sender=$pengirim;
$mail->AddReplyTo($pengirim, $name_pengirim);

$mail->AddAddress($tujuan);

$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAttachment($letak_file, $nama_file);

if ($mail->Send()) 
{
 //
} 
?>

<div id="main">
                
                    <div class="main-header background background-image-heading-contact">
                        <div class="container">
                            <h1>Successfully Submitted</h1>
                        </div>
                    </div>
                

                <div id="breadcrumb">
                    <div class="container">
                        <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active"><span>Successfully Submitted</span></li>
</ol>

                    </div>
                </div>

                
<div class="contact-wrapper">
    <div class="margin-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-content">
                        <div class="contact-form-heading" style="text-align: center;">
                            <h2>Successfully Submitted</h2>
                        </div><!-- /.contact-content -->
					</div>
				</div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.margin-bottom-100 -->

</div><!-- /.contact-wrapper -->
</div>

<?php include 'footer.php';?>
					