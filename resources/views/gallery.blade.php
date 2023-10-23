@extends('layouts.side-bar')
@section('style')
    .title{
		font-family: 'Baloo Bhai 2', 'cursive';
		font-size:1.4rem;
		color: #372476;
		margin-top:10px;
	}
    .gallery-container{
        height:540px;
        margin-top:10px;
        overflow-Y:scroll;
    }
    .gallery-container::-webkit-scrollbar 
    {
        display: none;
    }
    .images_container{
        height:300px;
        width:49%;
        margin-bottom:20px;
    }
    .images_container img{
        width:100%;
        height:100%;
        object-fit:cover;
        border:2px solid silver;
    }
    .landscape{
        width:99.5%;
    }
    .alert-message{
        height:530px;
        width:100%;
    }
@endsection

@section('content')
    <div class="title m-s">My Gallery</div>
    <div class="gallery-container m-s d-f j-c-s f-w-w">
        @forelse ($images as $image)
            @php
                $image_type = 'portrait';
                if ($image->type == 1) {
                    $image_type = 'landscape';
                }
            @endphp
            <div class="images_container {{ $image_type }}">
                <img src="{{ $image->image_name }}" alt="">
            </div>
        @empty
            <div class="alert-message d-f a-i-c j-c-c">No Images were found!.</div>
        @endforelse
    </div>
@endsection

@section('script')

@endsection