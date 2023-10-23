<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Landing Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Roboto+Slab&family=Rubik:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap');
		*{
			margin: 0;
			padding: 0;
		}
		body{
            height:100vh;
            width:100%;
			font-family: 'Poppins', sans-serif;
            background-image: url("Images/bg.jpg");
            background-size:cover;
            background-size:100%;
            /* background-position:center; */
            background-repeat:no-repeat;
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
		}
        .container-child-left{
            width: 50%;
        }
        .container-child-right{
            width: 32%;
            margin-right:40px;
            position: relative;
        }
        .sign-up-container{
            height:80%;
            width:100%;
            display:none;
            /* border:1px solid red; */
        }
        .sign-in-container{
            height:60%;
            width:100%;
        }
        .heading{
            font-size:1.5rem;
            font-family: 'Baloo Bhai 2', 'cursive';
            margin-bottom:30px;
        }
        .input-container{
            height:80px;
            margin-bottom:20px;
        }
        .lable{
            font-family: 'Josefin Sans', sans-serif;
            margin-bottom:10px;
        }
        .input{
            height:35px;
            padding:2.5px 10px;
            border:1px solid silver;
            border-radius:7px;
        }
        .input input{
            height:100%;
            width:100%;
            border:none;
            outline:none;
            background:none;
            font-family: 'Josefin Sans', sans-serif;
            font-size:1rem;
        }
        .show-and-hide{
            width:50px;
            height:100%;
            font-family: 'Josefin Sans', sans-serif;
            font-size:1rem;
            margin-left:10px;
        }
        .btn{
            height:40px;
            border-radius:8px;
            margin-bottom:30px;
            background:#807AE8;
            color:white;
        }
        .footer{
            font-family: 'Josefin Sans', sans-serif;
        }
        .footer span{
            color:purple;
        }
        .alert_container{
	 		position: absolute;
	 		z-index: 2;
	 		display: none;
	 	}
        .alert-inner-container{
            background-color: #000000aa;
	 		height: 70px;
	 		border-radius: 8px;
	 		width: 100%;
	 		display: none;
        }
    </style>
</head>
<body>
    <div class="landing-container h-100 w-100 d-f a-i-c j-c-s">
        <div class="container-child container-child-left"></div>
        <div class="container-child container-child-right h-100 d-f a-i-c">

            <!-- alerts contaier -->
            <div class="alert_container h-100 w-100 d-f a-i-c j-c-c">
                <div class="alert-inner-container d-f a-i-c j-c-c c-w" id="all-fields">All Fileds Are Required.</div>
                <div class="alert-inner-container d-f a-i-c j-c-c c-w" id="wrong-details">Wrong Email Or Password.</div>
                <div class="alert-inner-container d-f a-i-c j-c-c c-w" id="same-email">Email is Already Exist.</div>
            </div>
            <!-- Sign up form -->
            <div class="sign-up-container">
                <form action="" id="signup-form" class="h-100 w-100" >
                    <div class="heading t-a-c">Sign Up</div>
                    <!-- Name -->
                    <div class="input-container">
                        <div class="lable">Name</div>
                        <div class="input"> <input type="text" id="signup-name" name="name"> </div>
                    </div>
                    <!-- Email -->
                    <div class="input-container">
                        <div class="lable">Email</div>
                        <div class="input"><input type="email" id="signup-email" name="email"></div>
                    </div>
                    <!-- Password -->
                    <div class="input-container">
                        <div class="lable">Password</div>
                        <div class="input input-2 d-f a-i-c j-c-s"><input type="password" id="signup-pass" name="password" class="password"> <div id="signup_change" class="show-and-hide d-f a-i-c j-c-c c-p" onclick="chnage_type(1)">Show</div> </div>
                    </div>

                    <div id="signup-btn" class="btn d-f a-i-c j-c-c c-p b-r">Signup</div>
                    <input type="submit" id="sign-up-main-btn" hidden>

                    <div class="footer t-a-c">Already have an account? <span class="c-p go-to-sign-in">Sign In</span></div>
                </form>
            </div>

            <!-- Login form container -->
            <div class="sign-in-container">
                <form action="" id="login-form" class="h-100 w-100">
                    <div class="heading t-a-c">Sign In</div>
                    <!-- Email -->
                    <div class="input-container">
                        <div class="lable">Email</div>
                        <div class="input"><input type="email" id="login-email" name="email"></div>
                    </div>
                    <!-- Password -->
                    <div class="input-container">
                        <div class="lable">Password</div>
                        <div class="input input-2 d-f a-i-c j-c-s"><input type="password" id="login-pass" name="password" class="password"> <div id="login_change" class="show-and-hide d-f a-i-c j-c-c c-p" onclick="chnage_type(0)">Show</div> </div>
                    </div>

                    <div id="login-btn" class="btn d-f a-i-c j-c-c c-p b-r">Login</div>
                    <input type="submit" value="" id="login-main-btn" hidden>

                    <div class="footer t-a-c">Don't have an account? <span class="c-p go-to-sign-up">Sign up</span></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".go-to-sign-up").click(function(){
                $(".sign-in-container").css('display','none');
                $(".sign-up-container").css('display','block');
            })
            $(".go-to-sign-in").click(function(){
                $(".sign-up-container").css('display','none');
                $(".sign-in-container").css('display','block');
            })
            $("#signup-btn").click(function(){
                var name = $("#signup-name").val();
                var email = $("#signup-email").val();
                var pass = $("#signup-pass").val();
                if(name == '' || email == '' || pass == ''){
                    $(".alert_container").css("display","flex");
                    $("#all-fields").css("display","flex");
                    setTimeout(function(){
                        $(".alert_container").css("display","none");
                        $("#all-fields").css("display","none");

                        if(name == ''){
                            $("#signup-name").focus();
                        }else if(email == ''){
                            $("#signup-email").focus();
                        }
                        else if(pass == ''){
                            $("#signup-pass").focus();
                        }
                        
                    },1500);
                }else{
                    $("#sign-up-main-btn").click();
                }

            })

            $("#login-btn").click(function(){
                var email = $("#login-email").val();
                var pass = $("#login-pass").val();
                if(email == '' || pass == ''){
                    $(".alert_container").css("display","flex");
                    $("#all-fields").css("display","flex");
                    setTimeout(function(){
                        $(".alert_container").css("display","none");
                        $("#all-fields").css("display","none");

                        if(email == ''){
                            $("#login-email").focus();
                        }
                        else if(pass == ''){
                            $("#login-pass").focus();
                        }
                        
                    },1500);
                }else{
                    $("#login-main-btn").click();
                }
            })
        });
        $("#signup-form").on('submit',function(e){
			e.preventDefault();
			var signup_form = new FormData(this);
            $.ajax({
				url  : "{{route('signup')}}",
				type : "POST",
				data : signup_form,
				contentType: false, cache: false, processData:false,
				headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
				success:function(data){
					if(data == 1){
                        $(".alert_container").css("display","flex");
                        $("#same-email").css("display","flex");
                        setTimeout(function(){
                            $(".alert_container").css("display","none");
                            $("#same-email").css("display","none");
                            $("#signup-email").focus();
                        },1500);
                    }else{
                        window.location.replace("/");
                    }
				}
			});
        });

        $("#login-form").on('submit',function(e){
			e.preventDefault();
			var login_form = new FormData(this);
            $.ajax({
				url  : "{{route('login')}}",
				type : "POST",
				data : login_form,
				contentType: false, cache: false, processData:false,
				headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
				success:function(data){
					if(data == 1){
                        $(".alert_container").css("display","flex");
                        $("#wrong-details").css("display","flex");
                        setTimeout(function(){
                            $(".alert_container").css("display","none");
                            $("#wrong-details").css("display","none");
                            $("#login-email").focus();
                        },1500);
                    }else{
                        window.location.replace("/");
                    }
				}
			});
        });

        function chnage_type(type){
            if(type == 1){
                $("#signup_change").html("Hide");
                var input = document.querySelector('#signup-pass');
            }else{
                $("#login_change").html("Hide");
                var input = document.querySelector('#login-pass');
            }
            if ( input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
                if(type == 1){
                    $("#signup_change").html("Show");
                }else{
                    $("#login_change").html("Show");
                }
            }
        }
    </script>
    
</body>
</html>