<?php if($this->session->userdata('logged_in')){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>SMPRO - Welcome <?php echo $user->u_companyName; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.ico">

    <!-- Plugins css -->
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/admin/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo base_url(); ?>assets/admin/libs/multiselect/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">


                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <!-- <img src="<?php //echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-image" class="rounded-circle"> -->
                            <span class="pro-user-name ml-1">
                                <?php echo $this->session->userdata('emailId'); ?> <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="<?php echo base_url('logout'); ?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <?php
                                  // echo form_open('Home/logout');
                                  if ($this->session->userdata('logged_in')) {
                                  //    echo $this->session->userdata('emailId');
                                //     echo $this->session->userdata('actionId');
                                  }
                                  // $data = array('class' => 'btn btn-primary','name'=>'submit','value'=>'logout' );
                                  // echo form_submit($data);
                                  // echo form_close(); ?>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">Dashboard</h4>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="<?php echo base_url(); ?>assets/admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                        <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"><?php echo $user->u_companyName;  ?></a>
                        </div>
                        <p class="text-muted"><?php //echo $this->session->userdata('companyName'); ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>
                            <?php if($this->session->userdata('actionId') ==3 ){ ?>
                              <li>
                                  <a href="<?php echo base_url('Dashbord'); ?>">
                                      <i class="mdi mdi-view-dashboard"></i>
                                      <span> Dashboard </span>
                                  </a>
                              </li>

                              <li>
                                  <a href="<?php echo base_url('Dashbord'); ?>">
                                      <i class="mdi mdi-format-font"></i>
                                      <span> Employee </span>
                                  </a>
                              </li>

                              <li>
                                  <a href="<?php echo base_url('Dashbord'); ?>">
                                      <i class="mdi mdi-invert-colors"></i>
                                      <span> User List </span>
                                  </a>
                              </li>

                              <li>
                                  <a href="javascript: void(0);">
                                      <i class="mdi mdi-texture"></i>
                                      <span> Enquiry </span>
                                  </a>
                                  <ul class="nav-second-level" aria-expanded="false">
                                      <li><a href="<?php echo base_url('enquiry_show_admin'); ?>"> Enquiry List </a></li>
                                      <li><a href="<?php echo base_url('enquiry_form_admin'); ?>"> Enquiry Form </a></li>
                                  </ul>
                              </li>
                          <?php } else {?>
                            <li>
                                <a href="<?php echo base_url('Dashbord'); ?>">
                                    <i class="mdi mdi-texture"></i>
                                    <!-- <span class="badge badge-warning float-right">7</span> -->
                                    <span> Enquiry Forms </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('enquiry_show'); ?>">
                                    <i class="mdi mdi-texture"></i>
                                    <!-- <span class="badge badge-warning float-right">7</span> -->
                                     Show Forms
                                </a>
                            </li>
                          <?php  } ?>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-8">
                                <div class="card-box task-detail">
                                  <h4> PO process </h4>

                                <?php if ($this->session->flashdata('po_seccess')) { ?>
                                    <div class="bg-success"><?php echo $this->session->flashdata('po_seccess'); ?></div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('po_failed')) { ?>
                                    <div class="bg-danger"><?php echo $this->session->flashdata('po_failed'); ?></div>
                                <?php } ?>
                                <?php echo form_open('insert_po'); ?>
                                  <div class="row">
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Customer ID</label>
                                          <p><?php echo $quatation->q_customer_ID; ?></p>
                                          <input type="hidden" name="customer_ID" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Enquiry ID</label>
                                          <p><?php echo $quatation->q_enquiry_ID; ?></p>
                                          <input type="hidden" name="enquiry_ID" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Quote Number</label>
                                          <p><?php echo $quatation->q_quote_number; ?></p>
                                          <input type="hidden" name="quote_number" value="<?php echo $quatation->q_quote_number; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>PO Number</label>
                                          <p><?php echo time(); ?></p>
                                          <input type="hidden" name="po_number" value="<?php echo time(); ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Date</label>
                                          <p><?php echo $quatation->q_date; ?></p>
                                          <input type="hidden" name="date" value="<?php echo $quatation->q_date; ?>">
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Market Segment</label>
                                          <p><?php echo $quatation->q_market_segment; ?></p>
                                          <input type="hidden" name="market_segment" value="<?php echo $quatation->q_market_segment; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Delay Penalty</label>
                                          <input type="text" class="form-control" name="delay_penalty" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Scope Text</label>
                                          <p><?php echo $quatation->q_scope_text; ?></p>
                                          <input type="hidden" name="scope_text" value="<?php echo $quatation->q_scope_text; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="text-danger">LC applicabl</label>
                                          <input type="text" class="form-control" name="lc_applicabl" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Into terms</label>
                                          <p><?php echo $quatation->q_into_terms; ?></p>
                                          <input type="hidden" name="into_terms" value="<?php echo $quatation->q_into_terms; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Load time</label>
                                          <p><?php echo $quatation->q_load_time; ?></p>
                                          <input type="hidden" name="load_time" value="<?php echo $quatation->q_load_time; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Payment</label>
                                          <p><?php echo $quatation->q_payment_terms; ?></p>
                                          <input type="hidden" name="payment" value="<?php echo $quatation->q_payment_terms; ?>">
                                      </div>
                                    </div>

                                    <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="text-danger">EXPIRY DATE OF LC</label>
                                          <input type="text" name="expiry_date_of_lc" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" value="">

                                      </div>
                                    </div>

                                    <input type="hidden" name="emailId" value="<?php echo $this->session->userdata('emailId'); ?>">
                                    <div class="col-md-12">
                                      <?php if ($po_number_row) { ?>

                                      <?php if (date('m/d/yy') > $po_number_row->po_expiry_date_of_lc) { ?>
                                          <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button>
                                      <?php } else { ?>
                                          <button class="btn btn-danger waves-effect waves-light mr-1" disabled type="submit">Submit</button>
                                      <?php } ?>

                                  <?php } else { ?>
                                      <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">Submit</button>
                                  <?php } ?>
                                    </div>
                                  </div>
                                  <?php echo form_close(); ?>
                                </div>
                            </div><!-- end col -->
                            <!-- start col -->
                            <div class="col-md-4 scrollbar scrollbar-primary" style="height: 420px; overflow-y: scroll;">
                                <div class="card-box task-detail">
                                  <div class="row">
                                    <!-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Customer ID</label>
                                          <p><?php //echo $quatation->q_customer_ID; ?></p>
                                          <input type="hidden" name="customer_ID" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Enquiry ID</label>
                                          <p><?php //echo $quatation->q_enquiry_ID; ?></p>
                                          <input type="hidden" name="enquiry_ID" value="">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Quote Number</label>
                                          <p><?php //echo $quatation->q_quote_number; ?></p>
                                          <input type="hidden" name="quote_number" value="<?php //echo $quatation->q_quote_number; ?>">
                                      </div>
                                    </div> -->
                                    <?php if ($po_number_result) { ?>
                                    <?php foreach($po_number_result as $opnumber): ?>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>PO Number</label>
                                          <p><?php echo $opnumber->po_po_number; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Date</label>
                                          <p><?php echo $opnumber->po_date; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Market Segment</label>
                                          <p><?php echo $opnumber->po_market_segment; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Delay Penalty</label>
                                          <p><?php echo $opnumber->po_delay_penalty; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Scope Text</label>
                                          <p><?php echo $opnumber->po_scope_text; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="text-danger">LC applicabl</label>
                                          <p><?php echo $opnumber->po_lc_applicabl; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Into terms</label>
                                          <p><?php echo $opnumber->po_into_terms; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Load time</label>
                                          <p><?php echo $opnumber->po_load_time; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Payment</label>
                                          <p><?php echo $opnumber->po_payment; ?></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="text-danger">EXPIRY DATE OF LC</label>
                                          <?php if (date('m/d/yy') > $opnumber->po_expiry_date_of_lc) { ?>
                                            <p class="text-danger"><?php echo $opnumber->po_expiry_date_of_lc; ?></p>
                                          <?php } else { ?>
                                            <p class="text-success"><?php echo $opnumber->po_expiry_date_of_lc; ?></p>
                                          <?php } ?>
                                      </div>
                                    </div>
                                    <div class="bg-primary col-12">
                                        <hr>
                                    </div>
                                  <?php endforeach; ?>
                                <?php } else { ?>
                                    <p class="text-warning">PO Is Not Add</p>
                                <?php } ?>
                                  </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                              <div class="card-box task-detail">
                                  <div class="row">
                                  <div class="col-md-4">
                                      Pre Shipment
                                      <p>Payment Status</p>
                                      <p>Manufacturing Status</p>Started
                                      <p>Expected</p>
                                  </div>
                                  <div class="col-md-4">
                                      Shipment
                                      <p>Shipment date Expected</p>
                                      <p>Balance Payment status</p>
                                      <p>Expected</p>
                                  </div>
                                  <div class="col-md-4">
                                    <p>Display</p>
                                  </div>
                                </div>

                              </div>
                              </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- content -->

                <!-- Footer Start -->
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/vendor.min.js"></script>

        <!-- Plugins Js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/multiselect/jquery.multi-select.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/libs/select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- Init js-->
        <script src="<?php echo base_url(); ?>assets/admin/js/pages/form-advanced.init.js"></script>

        <!-- Toastr js -->
        <script src="<?php echo base_url(); ?>assets/admin/libs/toastr/toastr.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/js/pages/toastr.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>

    </body>
</html>
<?php } else { ?>

  <?php return redirect(); ?>

<?php } ?>
