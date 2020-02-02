<div class="row">
    <!-- Users Stats -->
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">Clients Orders</h6>
        </div>
        <div class="card-body pt-0">
          <div class="row border-bottom py-2 bg-light">
            <div class="col-12 col-sm-6">
              <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                <span class="input-group-append">
                  <span class="input-group-text">
                    <i class="material-icons"></i>
                  </span>
                </span>
              </div>
            </div>
            <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
              <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
            </div>
          </div>
          <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
        </div>
      </div>
    </div>
    <!-- End Users Stats -->
    <!-- Users By Device Stats -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card card-small h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Clients</h6>
        </div>
        <div class="card-body d-flex py-0">
          <canvas height="220" class="blog-users-by-device m-auto"></canvas>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
              <select class="custom-select custom-select-sm" style="max-width: 130px;">
                <option selected>Last Week</option>
                <option value="1">Today</option>
                <option value="2">Last Month</option>
                <option value="3">Last Year</option>
              </select>
            </div>
            <div class="col text-right view-report">
              <a href="#">Full report &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Users By Device Stats -->
    <!-- New Draft Component -->
    <div class="col-lg-3 col-md-3 col-sm-6 mb-2">
      <div class="card card-small blog-comments">
        <div class="card-header border-bottom">
          <h6 class="m-0"><span style="color:red">Unpaid </span> Projects </a></h6>
        </div>
        <div class="card-body p-0">
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">Herbal Life</a> on
                <a class="text-secondary" href="#">Signage!</a><br/>
                <span class="text-muted">– 3 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>-->
            <!--  <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div>-->
            </div>
          </div>
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">James Johnson</a> on
                <a class="text-secondary" href="#">Hello World!</a>
                <span class="text-muted">– 4 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
              <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div>-->
            </div>
          </div>
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">James Johnson</a> on
                <a class="text-secondary" href="#">Hello World!</a>
                <span class="text-muted">– 5 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
              <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div>-->
            </div>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col text-center view-report">
              <button type="submit" class="btn btn-white">View All Comments</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End New Draft Component -->
    <!-- Discussions Component -->
    <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
      <div class="card card-small blog-comments">
        <div class="card-header border-bottom">
          <h6 class="m-0">On Going Project</h6>
        </div>
        <div class="card-body p-0">
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">Herbal Life</a> on
                <a class="text-secondary" href="#">Signage!</a>
                <span class="text-muted">– 3 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
              <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div>-->
            </div>
          </div>
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">James Johnson</a> on
                <a class="text-secondary" href="#">Hello World!</a>
                <span class="text-muted">– 4 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
              <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div> -->
            </div>
          </div>
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">James Johnson</a> on
                <a class="text-secondary" href="#">Hello World!</a>
                <span class="text-muted">– 5 days ago</span>
              </div>
             <!-- <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
              <div class="blog-comments__actions">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-white">
                    <span class="text-success">
                      <i class="material-icons">check</i>
                    </span> Approve </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-danger">
                      <i class="material-icons">clear</i>
                    </span> Reject </button>
                  <button type="button" class="btn btn-white">
                    <span class="text-light">
                      <i class="material-icons">more_vert</i>
                    </span> Edit </button>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col text-center view-report">
              <button type="submit" class="btn btn-white">View All Comments</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Discussions Component -->
    <!-- Top Referrals Component -->
    <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">Top Clients</h6>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-small list-group-flush">
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Herbal Life</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
            </li>
          
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Denn Design</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Sun Cruices</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Tech Crunch</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Vans</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Data</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
            </li>
          </ul>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
              <select class="custom-select custom-select-sm">
                <option selected>Last Week</option>
                <option value="1">Today</option>
                <option value="2">Last Month</option>
                <option value="3">Last Year</option>
              </select>
            </div>
            <div class="col text-right view-report">
              <a href="#">Full report &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- End Top Referrals Component -->
  </div>