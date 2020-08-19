<style type="text/css">
	html{
		scroll-behavior: smooth;
	}
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Mulish', sans-serif;


	}
	.nav_style{
		background-color: #a29bfe!important;
	}
.nav_style a{
	color: white;
}
/*////////// main header \\\\\\\\\\\\\*/ 
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
/*/////////// Animation \\\\\\\\\\\\\\*/
.corona-rot img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}
.leftside img{
	animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat{
	
	0%
	{
		transform: scale(.7s);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale( .7s);
	}
	60%
	{
		transform: scale( 1 );
	}
	80%
	{
		transform: scale(.7s);
	}
	100%{
		transform: scale(.7s);
	}
}




/********** corona upadate **********/
.corono_update{
	margin: 0 0 30px 0;
}
.corono_update h3{
	color: #ff7675;
}
.corono_update h1{
	font-size: 2rem;
	text-align: center;
}
/********** about section **********/
.sub_section{
	background-color: #fbfafd;
}
/********** fotter **********/
.footer_style{
	background-color: #a29bfe!important;
}
.footer_style P{
	margin-bottom: 0!important;
}
#myBtn{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border:none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}
#myBtn:hover{
	background:#606060;
}

/*///////////// responsive  ///////////////////*/

@media(max-width: 768px)
	{.max_header{height: 700px; text-align: center;}

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}



</style>