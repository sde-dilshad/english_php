<?php
require_once("./inc/head.php");
require_once("./inc/header.php");
require_once("./inc/sidebar.php");
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Word of the day List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active">Word of the day List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="mb-4">
                                        <a href="add-word-of-the-day.php"><button class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Word of the day</button></a>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex align-items-center gap-1 mb-4">
                                        <div class="input-group datepicker-range">
                                            <input type="text" class="form-control flatpickr-input" data-input aria-describedby="date1">
                                            <button class="input-group-text" id="date1" data-toggle><i class="bx bx-calendar-event"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="table-responsive">
                                <table id="table-data" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Words Of the Day</th>
                                            <!-- <th>Questions</th> -->
                                            <th>Date & time</th>
                                            <!-- <th class="text-center">H/W</th> -->
                                            <th>Status</th>
                                            <th>Action's</th>
                                        </tr>
                                    </thead>


                                    <tbody id="load_word_day_data">

                                    </tbody>
                                </table>

                            </div>
                            <!-- end table responsive -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<?php
require_once("./inc/footer.php");
require_once("./inc/script.php");
?>