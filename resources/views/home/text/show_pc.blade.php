@extends('layouts.pc')
@section('content')

<link href="{{ URL::asset('/assets/css/home_pc.css') }}" rel="stylesheet" >

<script src="{{ URL::asset('/assets/plugin/jQuery.dotdotdot/jquery.dotdotdot.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugin/slider/jssor.slider-21.1.6.js') }}"></script>
<script src="{{ URL::asset('/assets/js/home.js?v=1') }}"></script>


	<div class="row">
		<div class="col-md-12">
		<div id="house_" class="one-content">
			<div class="title">
				<div class="center-pos back-color-title box-shadow-bottom">
					<div class="title_text"><center>{{ $textbox->textboxTitle }}</center></div>
				</div>
			</div>
			<br/>
		 	<!-- <div class="data"> -->
		 		<div class="row">
		 		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
				<!-- <div class="slider float-left w_40p margin-l-5p back-color-white margin-t-2em box-shadow-bottom"> -->
						<div class="slides">
							@foreach($textbox->images as $image)
						    	<img class="slideimg" src="{{ URL::asset($image->imagePath) }}">
						    @endforeach
					    </div>
				<!-- </div> -->
				</div>
				</div>
				<br/>
				<div class="row">
		 		<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<!-- <div class="info float-left w_40p margin-l-10p back-color-white margin-t-2em box-shadow-bottom cursor-pointer"> -->
					<!-- <div class="info-title"> -->
						<!-- <div class="info-div center-pos"> -->
							<center><span class="label label-success">{{ $textbox->category->categoryName }}</span></center>
							<br/>
							<div class="float-right" dir="rtl" lang="ar" style="white-space: pre-line; margin-top: -10px; background-color: whitesmoke; padding: 10px; width: 100%;">
								{{ $textbox->textboxText }}
							</div>
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
				</div></div>
			<!-- </div> -->

		</div>
		</div>
	</div>
	<br/>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

  		<h4 class="modal-title">View Image</h4>
      </div>
      <div class="modal-body">
        <center><img class="img-responsive" style="max-height: 500px;" id="modalimg" src=""></center>
      </div>
      <div class="modal-footer">
        <button id="nextBtn" type="button" class="btn btn-primary">Next</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection