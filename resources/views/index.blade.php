@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
<div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">

</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
</div>
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"><br><br><br>
<div class="card" style="width: 23rem;">
  <img height="200px"and width ="50px" src="https://dpi.wi.gov/sites/default/files/imce/computer-science/computer_science_web_banner_1.jpg" class="card-img-top" alt="...">
  
</div>
<br><br><br>
<table class="table table-borderless">
                    <tr>
                        <td>username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Login</button></td>
                    </tr>
                </table>
                
                
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Why Rajagiri?
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Rajagiri is one of the top 10 colleges in Kerala.</strong> Rajagiri offers Master of Social Work (MSW), Bachelor of Commerce (BCom), Bachelor of Business Administration (BBA), Bachelor of Social Work (BSW), Master of Library Sciences (MLISc), Bachelor of Library Sciences (BLISc) and Master of Computer Applications (MCA) along with research degrees (MPhil/PhD) and diploma programmes. The college is currently, affiliated to the Mahatma Gandhi University. <code></code>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Rankings
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong></strong> Ranked 28th in All India college ranking by National Institutional Ranking Framework in 2020. The Rajagiri Centre for Business Studies was ranked 38th best business school in India by Business Today B-School ranking in 2019<code>.</code> 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          History
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong></strong> Rajagiri College of Social Sciences was started in 1955 under the University of Madras. In 1960, the college was accredited for offering degrees in Social Services from the University of Kerala and moved to Kalamassery, Kochi. <code></code>
                        </div>
</div>

</div>
</div>
@endsection