<div class="row">

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Total Sales</h5>
                </div>
                <h3 class="mt-4"><?= count($sales) ?> Sales Marketting</h3>

                
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Total User</h5>
                </div>
                <h3 class="mt-4"><?= count($user) ?> Users</h3>
                <!-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Total Sertifikat</h5>
                </div>
                <h3 class="mt-4"><?= count($sertifikat) ?> Sertifikat</h3>

                <!-- <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
                <!-- <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div> -->
                <!-- <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p> -->
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-buffer bg-danger text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Total Layanan</h5>
                </div>
                <h3 class="mt-4"><?= count($layanan) ?> Layanan</h3>

               <!--  <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p> -->
            </div>
        </div>
    </div>

</div>


<!-- <div class="row">
        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Friends Suggestions</h4>
                    <div class="friends-suggestions">
                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="assets/images/users/user-2.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Ralph Ramirez</h5>
                                    <p class="text-muted">3 Friend suggest</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Patrick Beeler</h5>
                                    <p class="text-muted">17 Friend suggest</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Victor Zamora</h5>
                                    <p class="text-muted">12 Friend suggest</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Bryan Lacy</h5>
                                    <p class="text-muted">18 Friend suggest</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="assets/images/users/user-6.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">James Sorrells</h5>
                                    <p class="text-muted mb-1">6 Friend suggest</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                    <div id="morris-line-example" class="morris-chart" style="height: 360px"></div>

                </div>
            </div>

        </div>

        <div class="col-xl-4">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                    <ol class="activity-feed mb-0">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <p class="text-muted mb-1">Now</p>
                                <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                            </div>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">Yesterday</p>
                            <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">2:30PM</p>
                            <p class="font-15 mt-0 mb-0">Zack Wetass, <b class="text-primary"> Developer Moreno</b></p>
                        </li>
                        <li class="feed-item pb-1">
                            <p class="text-muted mb-1">12:48 PM</p>
                            <p class="font-15 mt-0 mb-2">Zack Wetass, <b class="text-primary">UX Murphy</b></p>
                        </li>

                    </ol>

                </div>
            </div>
        </div>
    </div> -->

<!-- START ROW -->

<!-- END ROW -->