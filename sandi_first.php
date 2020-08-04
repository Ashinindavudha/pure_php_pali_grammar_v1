<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php include("head.php"); ?>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header Nav-->
    <?php include("nav.php"); ?>

    <!-- BEGIN: Main Menu-->

    <?php include("main_menu.php") ?>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Hospital Info cards -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-user-md font-large-2 success"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Doctors Available</h5>
                                            <h3 class="text-bold-600">122</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-stethoscope font-large-2 warning"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Visiting Doctors</h5>
                                            <h3 class="text-bold-600">34</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-calendar-check-o font-large-2 info"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Today's Inquiry</h5>
                                            <h3 class="text-bold-600">3.5K</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="la la-bed font-large-2 danger"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h5 class="text-muted text-bold-500">Rooms Available</h5>
                                            <h3 class="text-bold-600">179</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hospital Info cards Ends -->

               

                <!-- Appointment Table -->
                <div class="row match-height">
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-primary text-center">သန္ဓိပထမပိုင်း</h4><hr>
                            </div>

                            <div class="card-header">
                                <h4 class="card-title text-info text-center">သုတ်စဉ်၌ပါဝင်သော ရှေ့ဂဏန်းသည် သဒ္ဒါကြီးသုတ်စဉ် အမှတ်ဖြစ်ပြီး နောက်မှ ပါဝင်သော ဂဏန်းသည် ရူပသိဒ္ဓိ အမှတ်စဉ် ဂဏန်းဖြစ်သည်။</h4><hr>
                            </div>

                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="sandi_first" class="table table-striped table-bordered" style="font-weight: bold; font-size: 120%;">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">အမှတ်စဉ်</th>
                                                <th class="border-top-0"><<<<---- သုတ်စဉ်  -- -->>>></th>
                                                <th class="border-top-0" style="text-align: center;">သုတ်စဉ်အဖွင့်</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="border-top-0">အမှတ်စဉ်</th>
                                                <th class="border-top-0"><<<<-------- သုတ်စဉ်  -- --- ------------>>>></th>
                                                <th class="border-top-0" style="text-align: center;">သုတ်စဉ်အဖွင့်</th>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- Appointment Table Ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("footer.php"); ?>
    <!-- END: Page JS-->
    <!-- datatable js -->
        
        <script>
        $(document).ready(function() {
    $('#sandi_first').DataTable( {
        "ajax": 'json/sandi_first.json',
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    
} );
    </script>
    
</body>
<!-- END: Body-->

</html>