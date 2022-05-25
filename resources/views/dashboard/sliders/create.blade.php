		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Sliders</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>Sliders</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
							
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
           
								<form class="form" action="{{route('admin.sliders.images.store.db')}}"
                                method="POST"
                                enctype="multipart/form-data">
                              @csrf
     
                                  <div  class="dropzone" id="dpz-multiple-files">
                                      <div class="dz-message">Drop Files Here To Upload</div>
                                  </div>
                               
                      <br><br>
                              <div class="form">
                                  <button type="button" class="btn btn-warning mr-1"
                                          onclick="history.back();">
                                      <i class="ft-x"></i> Back
                                  </button>
                                  <button type="submit" class="btn btn-primary">
                                      <i class="la la-check-square-o"></i> Submit
                                  </button>
                              </div>

                   </form>

                          
								</div>

                <section id="basic-form-layouts">
                  <div class="row match-height">
                      <div class="col-md-12">
                          <div class="card">
    
                  {{-- ///////////////// --}}
            <div class="card-content collapse show">
              <div class="card-body">
                  <div class="card-text">
                      
                      <h4 class="card-title" id="basic-layout-form">current sliders</h4>
                  </div>
              </div>
                  <div class="card-body  my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery"data-pswp-uid="1">
                      <div class="row">
                          @isset($images)
                              @forelse($images as $image )
                                  <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope=""
                                          itemtype="http://schema.org/ImageObject">
                                      <a href="{{$image -> photo}}" itemprop="contentUrl"
                                        data-size="480x360">
                                          <img class="img-thumbnail img-fluid"
                                              src="{{$image -> photo}}"
                                              itemprop="thumbnail" alt="Image description">
                                      </a>
                                  </figure>
                              @empty
                              There are no sliders at the moment
                              @endforelse
                          @endisset
                      </div>

                  </div>
            </div>
          </div>
        </div>
  </section>
  <!--/ Image grid -->
{{-- ///////////////// --}}
							</div>
						</div>
					</div>
			</div>
			<!-- /page content -->

@stop

@section('script')
    

{{-- session image javascript dropzone  --}}
<script>
    var uploadedDocumentMap = {}
    Dropzone.options.dpzMultipleFiles = {
      paramName:"dzfile",//the name that will be used to transfer  the file
      maxFilesize: 5, // MB
      clickable:true,
      addRemoveLinks: true,
      acceptedFiles:'image/*',
      dictFallbackMessage:"Your browser does not supported",
      dictInvalidFileType:"This type of file cannot be uploaded",
      dictCancelUpload:"Cancel",
      dictCancelUploadConfirmation:"Are you sure to cancel?",
      dictRemoveFile:"Remove File",
      dictMaxFileExceeded:"You exceeded the maximum number of files",
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      url:"{{route('admin.sliders.images.store')}}",
  
      success: function (file, response) {
        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
        uploadedDocumentMap[file.name] = response.name
      },
  
      removedfile: function (file) {
        file.previewElement.remove()
        var name = ''
        if (typeof file.file_name !== 'undefined') {
          name = file.file_name
        } else {
          name = uploadedDocumentMap[file.name]
        }
        $('form').find('input[name="document[]"][value="' + name + '"]').remove()
      },
      init: function () {
        @if(isset($event) && $event->document)
          var files =
            {!! json_encode($event->document) !!}
          for (var i in files) {
            var file = files[i]
            this.options.addedfile.call(this, file)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
          }
        @endif
      }
    }
  </script>
  {{--end session image javascript dropzone  --}}

  @endsection