<!DOCTYPE html>
<html>
<head>
    <title>Register Esport</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Esport</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css"> 	
	<style>
		@import url('https://fonts.googleapis.com/css?family=PT+Sans');

		body {
    background-image: linear-gradient(to bottom right, #212A3E, #394867 , rgb(122, 0, 170));
}

body.my-login-page {
	font-size: 15px;
    color: #1d2b3a;
    font-weight: 600;
}

.my-login-page h2{
    margin-top: 60px;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    position: relative;
    font-size: 30px;
    color: #1d2b3a;
    -webkit-text-stroke: 2px #1d2b3a;
}
.my-login-page h2::before{
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 1;
    display: flex;
    justify-content: center;
    width: 0%;
    height: 100%;
    color: white;
    -webkit-text-stroke: 0px white;
    overflow: hidden;
    animation: animate 5s linear infinite;
}
.form-group input:focus{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.my-login-page .card-wrapper {
	width: 900px;
}

.my-login-page .card {
    margin-top: 100px;
	border-color: transparent;
	box-shadow: 2px 0px 10px rgb(255, 255, 255);
}

.my-login-page .card.fat {
	padding: 10px;
    background-color: white;
}
.my-login-page .imgbox{
    position: absolute;
    width: 230px;
    height: 180px;
    left: 50%;
    transform: translateX(-50%);
    top: -15%;
}
.my-login-page .imgbox img{
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.form-groupp input{
    margin: 10px;
}

.my-login-page .card .card-title {
	margin-bottom: 30px;
}

.my-login-page .form-control {
	border-width: 2.3px;
}

.my-login-page .form-group label {
	width: 100%;
}
.my-login-page .form-group input{
    background-color: white;
    color: #1d2b3a;
    border: 1px solid #1d2b3a;
}
.my-login-page .form-group select{
    background-color: white;
    color: #1d2b3a;
    border: 1px solid #1d2b3a;
}

.my-login-page .option-radio{
    display: flex;
}
.form-groupp label{
    margin-top: 5px;
    margin-left: 1px;
}
input[type='radio']:after {
    width: 15px;
    height: 15px;
    border-radius: 15px;
    top: -3px;
    left: -2px;
    position: relative;
    background-color: white;
    content: '';
    display: inline-block;
    visibility: visible;
    border: 2px solid blueviolet;
}

input[type='radio']:checked:after {
    width: 15px;
    height: 15px;
    border-radius: 15px;
    top: -3px;
    left: -2px;
    position: relative;
    background-color: #1d2b3a;
    content: '';
    display: inline-block;
    visibility: visible;
    border: 2px solid white;
    box-shadow: 0 0 5px 3px blueviolet;
}
.my-login-page i{
    font-size: 13px;
    font-weight: 400;
}
.my-login-page .btn{
    background-image: linear-gradient(to right,rgb(122, 0, 170), #394867 , #212A3E);
    color: white;
    font-weight: 500;
    letter-spacing: 5px;
}

.my-login-page .btn.btn-block {
	padding: 12px 10px;
}

.footer {
	margin: 40px 0;
	color: white;
	text-align: center;
    text-shadow: 2px 0px 7px white;
    letter-spacing: 2px;
    font-weight: 400;
}

@media screen and (max-width: 425px) {
	.my-login-page .card-wrapper {
		width: 90%;
		margin: 0 auto;
	}
}

@media screen and (max-width: 320px) {
	.my-login-page .card.fat {
		padding: 0;
	}

	.my-login-page .card.fat .card-body {
		padding: 15px;
	}
}

@keyframes animate{
    0%,20%{
        width: %;
    }
    70%{
        width:70%;}
}
	</style>
</head>
<body>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script type='text/javascript' src='https://cdn.prinsh.com/NathanPrinsley-effect/efek-salju.js'></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>$(function() {

$("input[type='password'][data-eye]").each(function(i) {
	var $this = $(this),
		id = 'eye-password-' + i,
		el = $('#' + id);

	$this.wrap($("<div/>", {
		style: 'position:relative',
		id: id
	}));

	$this.css({
		paddingRight: 60
	});
	$this.after($("<div/>", {
		html: 'show',
		class: 'btn btn-primary btn-sm',
		id: 'passeye-toggle-'+i,
	}).css({
			position: 'absolute',
			right: 10,
			top: ($this.outerHeight() / 2) - 12,
			padding: '2px 7px',
			fontSize: 12,
			cursor: 'pointer',
	}));

	$this.after($("<input/>", {
		type: 'hidden',
		id: 'passeye-' + i
	}));

	var invalid_feedback = $this.parent().parent().find('.invalid-feedback');

	if(invalid_feedback.length) {
		$this.after(invalid_feedback.clone());
	}

	$this.on("keyup paste", function() {
		$("#passeye-"+i).val($(this).val());
	});
	$("#passeye-toggle-"+i).on("click", function() {
		if($this.hasClass("show")) {
			$this.attr('type', 'password');
			$this.removeClass("show");
			$(this).removeClass("btn-outline-primary");
		}else{
			$this.attr('type', 'text');
			$this.val($("#passeye-"+i).val());				
			$this.addClass("show");
			$(this).addClass("btn-outline-primary");
		}
	});
});

$(".my-login-validation").submit(function() {
	var form = $(this);
	if (form[0].checkValidity() === false) {
	  event.preventDefault();
	  event.stopPropagation();
	}
	form.addClass('was-validated');
});
});</script>
</html>
