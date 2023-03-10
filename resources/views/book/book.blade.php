@extends('layouts.app')

@section('content')

<div class="p-4 page-body text-dark">
  <div style="font-size: 180%;color: rgb(0, 0, 0);">
    <i class="fa fa-book" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
    Book
  </div>
  <hr style="background-color: black !important;">
  <div style="padding:5px;"></div>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      @livewire('book')
    </div>
    <div class="col-md-2"></div>
  </div>
  <!-- Small card component -->
</div>


<script type="text/javascript">
  $('#image').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })

  function translateUpload(x) {
    console.log("translate upload fungsi");
    fileValidation(x);
    document.getElementById("image").setCustomValidity('');
  }

  function fileValidation(name) {
    console.log(name);

    var fileInput = document.getElementById(name);
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpeg|\.jpg|\.png)$/i;
    if (!allowedExtensions.exec(filePath)) {
      alert('Please upload in format .jpeg , .jpg and .png only!');
      fileInput.value = '';
      return false;
    }
  }
</script>



{{-- maps --}}
<script type="text/javascript">
  function process() {
    var xxhi = parseInt(document.getElementById("lng").value) + 5;
    var xxlo = parseInt(document.getElementById("lng").value) - 5;
    var yyhi = parseInt(document.getElementById("lat").value) + 5;
    var yylo = parseInt(document.getElementById("lat").value) - 5;
    var url = "http://mynasadata.larc.nasa.gov/las/UI.vm#panelHeaderHidden=false;differences=false;autoContour=false;globalMin=0.018759;globalMax=99.6;xCATID=2B0BBF6A0A4C3C7A7D051B183657F99F;xDSID=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;imageSize=auto;over=xy;compute=Nonetoken;tlo=15-Jan-2013;thi=15-Jan-2013;catid=2B0BBF6A0A4C3C7A7D051B183657F99F;dsid=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;avarcount=0;xlo=" + xxlo + ";xhi=" + xxhi + ";ylo=" + yylo + ";yhi=" + yyhi + ";operation_id=Plot_2D_XY_zoom;view=xy";
    location.href = url;
    return false;
  }
</script>
@endsection