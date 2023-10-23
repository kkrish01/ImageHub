@extends('layouts.side-bar')

@section('style')
	
	.title{
		font-family: 'Baloo Bhai 2', 'cursive';
		font-size:1.4rem;
		color: #372476;
		margin-top:10px;
	}
	.btn-containers{
		height:50px;
		margin-top:30px;
	}
	.btn{
		width:180px;
		height:45px;
		border:1px solid silver;
		border-radius:8px;
		background: #8A3DFF;
	}
	.second select{
		height:100%;
		width:100%;
		border:none;
		outline:none;
		background:none;
		color:white;
		font-family: 'Poppins', sans-serif;
		font-size:1rem;
	}
	select {
		-webkit-appearance: none;
		-moz-appearance: none;
		text-indent: 1px;
		text-overflow: '';
	}
	option{
		background: #8A3DFF;
	}
	.icons{
		positiion:relative;
		margin-top:-7px;
		margin-right:10px;
		font-size:1.5rem;
	}
	.icons-2{
		font-size:1.3rem;
	}
	.image-preview{
		height:450px;
		margin-top:20px;
	}
	.image-preview img{
		height:100%;
		object-fit:contain;
		border:1px solid silver;
	}
	.loading{
		width: 16px;
		height: 16px;
		border: 4px solid #FFFFFF;
		border-top: 4px solid #000000;
		border-radius: 50%;
		animation: spin 1s linear infinite;
		display:none;
	}
	@keyframes spin{
		0%{
			transform: rotate(0deg);
		}
		100%{
			transform: rotate(360deg);
		}
	}
	#choose-file,.SaveImage{
		display:none;
	}
@endsection

@section('content')
	<div class="title m-s">Dashboard</div>
	<div class="btn-containers d-f a-i-c m-s">
		<div class="btn c-w c-p d-f a-i-c j-c-c second">
			<select name="file-type" id="file-type" class="t-a-c">
				<option value="0">Select Image Type</option>
				<option value="0">Portrait</option>
				<option value="1">Landscape</option>
			</select>
		</div>
		<div id="choose-file" class="btn c-w m-s c-p d-f a-i-c j-c-c"><span class="icons d-f a-i-c j-c-c"><i class="bi bi-cloud-arrow-up"></i></span>Select File</div>
		<div class="btn SaveImage c-w c-p d-f a-i-c j-c-c"><span class="loading"></span> <div class="btn-2 h-100 w-100 c-p d-f a-i-c j-c-c"><span class="icons icons-2 d-f a-i-c j-c-c"><i class="bi bi-download"></i></span>Upload File</div></div> 
	</div>
	<form action="" id="upload-image">
		<input type="file" name="image" id="image" hidden>
		<input type="number" name="type" id="type" value="0" hidden>
		<input type="submit" value="" id="SaveImage" hidden>
	</form>
	<div class="image-preview m-s">
		<img id="preview" src="" alt="" accept=".png, .jpg, .jpeg">
	</div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
			$("#choose-file").click(function(){
				$("#image").click();
			});
			$(".SaveImage").click(function(){
				$("#SaveImage").click();
				$(".btn-2").css('display','none');
				$(".loading").css('display','block');
			})
		});
		var file_input = document.getElementById("image");
		var preview_image = document.getElementById("preview");
		file_input.addEventListener("change",function(event){
			if(event.target.files.length == 0){
				return;
				tempUrl1 = "";
				preview_image.setAttribute("src",'');
				$(".SaveImage").css('diaplay','none');
			}else{
				var tempUrl1 = URL.createObjectURL(event.target.files[0]);
				preview_image.setAttribute("src",tempUrl1);
				$(".SaveImage").css('display','flex');
			}
		});
		$("#file-type").on("change",function(){
			$("#type").val(this.value);
			$("#choose-file").css('display','flex');
		})
		$("#upload-image").on('submit',(function(e){
			e.preventDefault();
			var upload_image = new FormData(this);
			$.ajax({
				url  : "{{route('upload')}}",
				type : "POST",
				data : upload_image,
				contentType: false, cache: false, processData:false,
				headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
				success:function(data){
					if(data == 'done'){
						$(".SaveImage").html('Successfull Upload');
						setTimeout(function(){
                            location.reload();
                        },1500);
						
					}
				}
			});
		}));
	</script>
@endsection

