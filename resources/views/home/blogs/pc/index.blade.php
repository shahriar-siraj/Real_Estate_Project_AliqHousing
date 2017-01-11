@extends('layouts.pc')
@section('content')

<link href="{{ URL::asset('/assets/css/home_pc.css') }}" rel="stylesheet" >

<script src="{{ URL::asset('/assets/plugin/jQuery.dotdotdot/jquery.dotdotdot.min.js') }}"></script>
<script src="{{ URL::asset('/assets/plugin/slider/jssor.slider-21.1.6.js') }}"></script>
<script src="{{ URL::asset('/assets/js/home.js?v=1') }}"></script>
<script src="{{ URL::asset('/assets/js/imagepopup.js?v=1') }}"></script>


<?php $i=1; ?>

	@foreach($pages as $page)
	@if($page->type =='Blog')
	<div class="row">
		<div class="col-md-12">
		<div id="house_{{ $i }}" class="one-content">
		
			<div class="row">
		 	<div class="data">
				
				<div class="info float-left margin-l-10p back-color-white margin-t-2em box-shadow-bottom cursor-pointer" style="width: 80%" onclick="location.href='{{ route('blogs.show', [$page->id]) }}';">
					<div class="info-title">
						<div class="info-div center-pos">
							<div>
								{{ $page->title }}
							</div>
						</div>
					</div>
					<div class="info-text color-info" dir="rtl" lang="ar" style="white-space: pre-line; margin-top: -10px; height: 230px;">
						{{ $page->description }}
						<a href="" class="readmore">&raquo;</a>
					</div>
				</div>
			</div>
			</div>
			

		</div>
		</div>
	</div>
	@endif
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
        <center><img class="img-responsive" id="modalimg" src=""></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<a href="tel:00962788880904" class="contact log phone"></a>
@endsection