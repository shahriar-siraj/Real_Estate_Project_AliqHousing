@extends('layouts.pc')
@section('content')

<link href="{{ URL::asset('/assets/css/home_pc.css') }}" rel="stylesheet" >

<script src="{{ URL::asset('/assets/plugin/jQuery.dotdotdot/jquery.dotdotdot.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugin/slider/jssor.slider-21.1.6.js') }}"></script>


<?php $i=1; $j=1; ?>

	@foreach($categories as $cat)
	<div class="row">
		<div class="col-md-12">
		<div id="house_{{ $i }}" class="one-content">
			<div class="title">
				<div class="center-pos back-color-title box-shadow-bottom">
					<div class="title_text"><center>{{ $cat->categoryName}}</center></div>
				</div>
			</div>
		@foreach($cat->textboxes as $textbox)
			<div class="row">
		 	<div class="data">
				<div class="slider float-left w_40p margin-l-5p back-color-white margin-t-2em box-shadow-bottom" data-value="{{ $j }}">
						<div class="slides">
						    @foreach($textbox->images as $image)
						    <img class="slideimg" src="{{ URL::asset($image->imagePath) }}">
						    @endforeach
						  </div>
				</div>
				<div class="building-data" data-value="{{ $j }}">
				<div class="float-left w_40p margin-l-10p back-color-white margin-t-2em box-shadow-bottom cursor-pointer info"  onclick="location.href='{{ route('text.show', [$textbox->id]) }}';" >
					<div class="info-title">
						<div class="info-div center-pos">
							<div>
								{{ $textbox->textboxTitle }}
							</div>
						</div>
					</div>
					<div class="info-text color-info"   dir="rtl" lang="ar" style="height: 230px;">
						{{ $textbox->textboxText }}
						<a href="" class="readmore">&raquo;</a>
					</div>
				</div>
				</div>
			</div>
			</div>
			<?php $j++; ?>
			@endforeach

		</div>
		</div>
	</div>
	<br/>
	<?php $i++; ?>
	@endforeach


	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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