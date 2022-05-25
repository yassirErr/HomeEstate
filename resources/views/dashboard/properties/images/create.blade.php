		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Cities</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>Cities</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
							
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
           
								<form class="form" action="{{route('admin.properties.images.store.db')}}"
                                method="POST"
                                enctype="multipart/form-data">
                              @csrf
     
                              <input type="hidden" name="property_id" value="{{$id}}">
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
      url:"{{route('admin.properties.images.store')}}",
  
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
