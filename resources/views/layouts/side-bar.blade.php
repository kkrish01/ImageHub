<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Hub</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Roboto+Slab&family=Rubik:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap');
		*{
			margin: 0;
			padding: 0;
		}
        html {
		  scroll-behavior: smooth;
		  overflow: auto;
		}
		.d-f{
			display: flex;
		}
		.a-i-c{
			align-items: center;
		}
		.j-c-c{
			justify-content: center;
		}
		.j-c-s{
			justify-content: space-between;
		}
		.j-c-s-a{
			justify-content: space-around;
		}
		.f-d-c{
			flex-direction: column;
		}
		.f-w-w{
			flex-wrap: wrap;
		}
		.b-r{
			border: 1px solid silver;
		}
		.h-100{
			height: 100%;
		}
		.w-100{
			width: 100%;
		}
		.f-w-3{
			font-weight: 300;
		}
		.f-w-4{
			font-weight: 400;
		}
		.f-w-5{
			font-weight: 500;
		}
		.f-w-6{
			font-weight: 600;
		}
		.f-w-7{
			font-weight: 700;
		}
		.c-w{
			color: #FFFFFF;
		}
		.c-b{
			color: black;
		}
		.t-a-c{
			text-align: center;
		}
		.c-p{
			cursor: pointer;
		}
		.m-l{
			margin-left: 30px;
		}
		.m-r{
			margin-right: 30px;
		}
		.space{
			height: 80px;
		}
		.c-w{
			color: #FFFFFF;
		}
		a{
			text-decoration: none;
			color: #FFFFFF;
			color: #372476;
			font-size:1.1rem;
		}
		.m-s{
			margin-left:20px;
			margin-right:20px;
		}
		body{
			background: #E6E7E9;
			font-family: 'Poppins', sans-serif;
		}
		.main-container{
			position: relative;
		}
		.side-bar{
			background:#FFFFFF;
			width:20%;
			height:100vh;
			position: fixed;
			top:0;
			left:0;
		}
		.manage{
			width:22%;
		}
		.content{
			height:100vh;
			width:78%;
			/* border:1px solid red; */
			background:#FFFFFF;
		}
		.logo{
			height:83px;
			/* border:1px solid red; */
			margin-top:30px;
		}
		.logo img{
			height:80px;
			width: 80px;
			/* border-radius:50%; */
			object-fit:contain;
			/* border:2px solid silver; */
		}
		.company-name{
			font-size:1.9rem;
			color: #372476;
			font-family: 'Baloo Bhai 2', 'cursive';
			margin-bottom:20px;;
		}
		.nav-container{
			height:40px;
			margin-bottom:10px;
		}
		.icon{
			width:40px;
			margin-left:10px;
			margin-right:15px;
			
		}
		.icon svg{
			height:22px;
			width:22px;
		}
		.nav-name{
			color: #372476;
			font-size:1.1rem;
		}
		@yield('style')
    </style>
</head>
<body>
    <div class="main-container d-f a-i-c j-c-s">
		<div class="side-bar">
			<div class="logo d-f a-i-c j-c-c">
				<img src="Images/logo.PNG" alt="">
			</div>
			<div class="company-name t-a-c f-w-7">ImageHub</div>

			<div class="nav-container d-f a-i-c c-p">
				<div class="icon d-f a-i-c j-c-c h-100">
					<a href="{{route('dashboard')}}">
						<svg fill="#372476" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
					</a>
					</div>
				<div class="nav-name f-w-5"><a href="{{route('dashboard')}}">Dashboard</a></div>
			</div>

			<div class="nav-container d-f a-i-c c-p">
				<div class="icon d-f a-i-c j-c-c h-100">
					<a href="{{route('gallery')}}">
						<svg fill="#372476" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"><path d="m15 5c0-.53-.47-1-1-1h-11c-.53 0-1 .47-1 1v14c0 .53.47 1 1 1h11c.53 0 1-.47 1-1zm7 11.6c0-.53-.47-1-1-1h-3.6c-.53 0-1 .47-1 1v2.4c0 .53.47 1 1 1h3.6c.53 0 1-.47 1-1zm0-5.8c0-.53-.47-1-1-1h-3.6c-.53 0-1 .47-1 1v2.4c0 .53.47 1 1 1h3.6c.53 0 1-.47 1-1zm0-5.8c0-.53-.47-1-1-1h-3.6c-.53 0-1 .47-1 1v2.4c0 .53.47 1 1 1h3.6c.53 0 1-.47 1-1z" fill-rule="nonzero"/></svg>
					</a>
				</div>
				<div class="nav-name f-w-5"><a href="{{route('gallery')}}">Gallery</a></div>
			</div>

			<div class="nav-container d-f a-i-c c-p">
				<div class="icon d-f a-i-c j-c-c h-100">
					<a href="{{route('logout')}}">
						<svg fill="#372476" viewBox="0 0 512 512"><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
					</a>
				</div>
				<div class="nav-name f-w-5"><a href="{{route('logout')}}">Logout</a></div>
			</div>
		</div>
		<div class="manage"></div>
		<div class="content">
            @yield('content')
        </div>
	</div>
	@yield('script')
</body>
</html>