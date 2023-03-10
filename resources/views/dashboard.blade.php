@extends('layouts.app')

@section('content')
<style>
a{
  font-size: 110% !important;
}
/* unvisited link */
a:link {
  color: black !important;
}

/* visited link */
a:visited {
  color: black !important;
}

/* mouse over link */
a:hover {
  color: red !important;
}

/* selected link */
a:active {
  color: black !important;

}
</style>

<div class="p-4 page-body text-dark">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
    <i class="fa fa-home" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
    Dashboard
  </div>
  <hr style="background-color: black !important;">
  <div style="padding:5px;"></div>
  <!-- Small card component -->
  <div class="mb-4 small-cards">




      <div class="row">
          <div class="mt-3 col-sm-2 col-md-2 col-lg-2 mt-lg-0"></div>
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="mt-3 col-sm-4 col-md-4 col-lg-4 mt-lg-0">
            <!-- Card -->
              <div class="rounded-lg card border-1" style="border-color: #003473 !important;">
                  <!-- Card body -->
                  <div class="card-body"  style="border-radius:.5rem;">

                      <div class="flex-row d-flex justify-content-center align-items-center">
                          <!-- Icon -->
                          <div class="small-card-icon">
                              <i class="fas fa-hotel card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                          </div>
                          <!-- Text -->
                          <div class="text-center small-card-text w-100">
                              <p class="m-0 font-weight-normal text-primary" style="font-size: 120%; color: #003473 !important;">Total Shops</p>
                              <h4 class="m-0 font-weight-normal text-primary" style="color: #003473 !important;">{{$shop}}</h4>
                          </div>

                      </div>

                      <hr style="background-color: #003473 !important;">

                      <p class="m-0 font-weight-normal text-primary" style="text-align: right; color: #003473 !important;">
                        <a href="{{route('shop')}}"  >
                        Next <i class="fa fa-caret-right" aria-hidden="true"></i>
                      </a>

                      </p>

                  </div>
              </div>

          </div>


          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="mt-3 col-sm-4 col-md-4 col-lg-4 mt-lg-0">
              <!-- Card -->
              <div class="rounded-lg card border-1" style="border-color: #23a6d5 !important;">
                  <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="flex-row d-flex justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-book card-icon-bg-primary fa-4x" style="color: #23a6d5 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="text-center small-card-text w-100">
                                <p class="m-0 font-weight-normal text-primary" style="font-size: 120%; color: #23a6d5 !important;">Total Books</p>
                                <h4 class="m-0 font-weight-normal text-primary" style="color: #23a6d5 !important;">{{$book}}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #23a6d5 !important;">
                        <p class="m-0 font-weight-normal text-primary" style="text-align: right; color: #23a6d5 !important;">
                          <a href="{{route('book')}}"  >

                          Next <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>

              </div>
          </div>
          <div class="mt-3 col-sm-2 col-md-2 col-lg-2 mt-lg-0"></div>

      </div>

      <div class="" style="padding: 10px;"></div>

      <div style="padding: 10px;">

      </div>

      <div style="padding: 10px;"></div>



  </div>








                </div>

    </div>



@endsection
