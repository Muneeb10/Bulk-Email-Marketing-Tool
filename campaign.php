<!DOCTYPE html>
<html lang="en">
<head>
<?php include("Links/Links.php"); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- <meta charset="UTF-8"> -->
  <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport"> -->
  <!-- <title>MyStrika</title> -->
  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
  <!-- <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css"> -->
  <!-- <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css"> -->
  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/components.css"> -->
  <!-- Custom style CSS -->
  <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
  <!-- <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' /> -->


  <!-- <link rel="stylesheet" href="assets/bundles/pretty-checkbox/pretty-checkbox.min.css"> -->
  <!-- Icons -->
  <!-- <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'> -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <style>
    .tooltip-text {
  visibility: hidden;
  position: absolute;
  top: -105px;
  z-index: 2;
  width: 110px;
  color: white;
  font-size: 14px;
  background-color: #6777ef;
  border-radius: 10px;
  padding: 10px 15px 10px 15px;
}

.tooltip-text::before {
  content: "";
  position: absolute;
  transform: rotate(45deg);
  background-color: #6777ef;
  padding: 5px;
  z-index: 1;
}

.hover-text:hover .tooltip-text {
  visibility: visible;
}

#top {
  top: -70px;
  left: -10%;
}

#top::before {
  top: 95%;
  left: 45%;
}

#bottom {
  top: 25px;
  left: -50%;
}

#bottom::before {
  top: -5%;
  left: 45%;
}

#left {
  top: -8px;
  right: 120%;
}

#left::before {
  top: 35%;
  left: 94%;
}

#right {
  top: -8px;
  left: 120%;
}

#right::before {
  top: 35%;
  left: -2%;
}

.hover-text {
  position: relative;
  display: inline-block;
  /* margin: 40px; */
  font-family: Arial;
  text-align: center;
  cursor: pointer;
}
  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>


      <?php include("Header_Sidebar_Footer/Header.php"); ?>
      <div class="main-sidebar sidebar-style-2">
          <?php include("Header_Sidebar_Footer/Sidebar.php"); ?>
      </div>

      

      

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <div class="row ">
            
            
            <div class="col">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Active Campaigns</h5>
                          <h2 id="active_emails" class="mb-3 font-18">258</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Totale Compaigns</h5>
                          <h2 id="all_emails" class="mb-3 font-18">258</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Totale Leads</h5>
                          <h2 id="success_emails" class="mb-3 font-18">258</h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row" style="margin-bottom: 20px; ">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-body" style="padding: 20px; ">
                  
                  <div class="selectgroup w-100" style="margin-bottom: -5px; display: flex; justify-content: space-between; align-items: center;">
                    <h4 style="color: #6777ef;">Campaigns</h4>
                    <div style="width: 50%; display: flex;  justify-content: flex-end; align-items: center;">
                      <button type="button" id="bulk_btns" class="btn btn-primary" data-toggle="modal"data-target="#ModalCenter" style="width: 178px;"><i id="icons" class="form_btn fi fi-rr-envelope-plus"></i> Add New Campaign</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          



          <div class="section-body" id="table_section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <div style="width: 100%; height: 70px; display: flex; justify-content: space-between; padding: 0px;"> 
                        <div> 
                          <div class=""> 
                            <div class="d-flex justify-content-center"> 
                              <div class="search" style="background-color: #fff;"> 
                                <label style="margin-right: 5px; margin-bottom: 0px">Show</label>
                                <select class="form-control" id="form_control" style="height: 40px; background-color: #f0f3ff;">
                                  <option>25</option>
                                  <option>50</option>
                                  <option>100</option>
                                  <option>150</option>
                                  <option>200</option>
                                </select>
                                <label style="margin-left: 5px; margin-bottom: 0px;">entries</label>
                              </div> 
                            </div> 
                          </div> 
                        </div>
                        <div class=""> 
                          <div class=""> 
                            <div class="d-flex justify-content-center"> 
                              <div class="search" > 
                                <input type="text" class="search-input" id="search" placeholder="Search..." name=""> 
                                <a href="#" class="search-icon"> 
                                  <i class="fa fa-search"></i> 
                                </a> 
                              </div> 
                            </div> 
                          </div> 
                        </div> 
                      </div>
                      <div id="item">

                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>



        <!-- Create new campaign -->

        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <form action="" id="campaign_form">
              <div class="modal-header">
                <h4 id="bulk_heading">Create Campaign</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card" id="campaign_popup" style="box-shadow: none; margin-bottom: 0px;">
                  <div class="card-body">
                    <label>Let's create a new campaign</label><br>
                    <label for="inputPassword4">Campaign Name</label>
                    <input type="text" class="form-control" id="campaign_name" name="campaign_name" placeholder="Enter Campaign Name">
                  </div>
                  <div class="card-footer text-right" style="display: flex;">
                  <input type="hidden" name="action" id="action" />  
                  <input type="hidden" name="user_id" id="user_id" /> 
                  <input type="hidden" name="timezone" id="timezone" /> 
                  <input type="submit" name="button_action" id="save_data" class="btn btn-primary" value="Insert" />  
                  
                    <!-- <button style="margin-right: 10px;" id="save_data" class="btn btn-primary">Save</button> -->
                  </div>
                  <p id="error"></p>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>





        <!-- Copy Laeds -->
        <div class="modal fade" id="copy_leads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <form action="" id="copy_leads_form">
              <div class="modal-header">
                <h4 id="bulk_heading">Copy Leads to Another Campaign</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- <div class="card" id="campaign_popup" style="box-shadow: none; margin-bottom: 0px;"> -->
                <div class="card-footer">
                          <label>Be careful and Select correct filters. Action is irreversible.</label>
                          <div id="time_zone"></div>
                          <select class="form-control selectric" id="copy_lead">
                            <option>Select Time Zone</option>
                            <?php

                            require_once 'Actions/Campaign_Action.php';
                            $object = new Campaign();
                            $result = $object->execute_query("SELECT lead_link_id, campaign_name FROM campaign");

                            if ($result) {
    
                            while ($rows = mysqli_fetch_assoc($result)) {
                                // Echo out options
                                echo '<option value="' . $rows['lead_link_id'] . '">' . $rows['campaign_name'] . '</option>';
                            }
                            } else {
                              echo '<option>Campaign Not Found</option>';
                                
                            }
                            ?>

                             

                          </select>

                </div>
                    
                  <div class="card-footer text-right" style="margin-top: 10px;">
                  <input type="hidden" name="copy_leads" id="lead" value="copy_leads" />  
                    <button id="copy_leads" class="btn btn-primary">Save</button>
                  </div>
                  <p id="error"></p>
                <!-- </div> -->
              </div>
              </form>
            </div>
          </div>
        </div>


        <div class="modal fade" id="campaign_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <!-- <div class="modal-header"> -->
                
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6"> -->
                  <div class="card" style="margin-bottom: 0px; margin-right: 10px; box-shadow: none;">
                    <div class="card-header">
                      <h4>Campaign Analytics</h4>
                      <div>
                        <i class="fi fi-rr-angle-left"></i>
                        <i class="fi fi-rr-angle-right"></i>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="recent-report__chart">
                        <div id="chart3"></div>
                      </div>
                    </div>
                  </div>              
            </div>
          </div>

        </div>



        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i></a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel</div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar">
                      <i class="fas fa-sun"></i>
                    </span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar">
                      <i class="fas fa-moon"></i>
                    </span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active"><div class="white"></div></li>
                    <li title="cyan"><div class="cyan"></div></li>
                    <li title="black"><div class="black"></div></li>
                    <li title="purple"><div class="purple"></div></li>
                    <li title="orange"><div class="orange"></div></li>
                    <li title="green"><div class="green"></div></li>
                    <li title="red"><div class="red"></div></li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme"><i class="fas fa-undo"></i> Restore Default</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script> -->
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->

  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

  <script src="assets/js/page/chart-apexcharts.js"></script>


<script>

$(document).ready(function()
{

//+++++++++++++++++++++++++++ Fetch Data  +++++++++++++++++++++++++++++++++++++++ 

    load_data(); 
    function load_data(page, limits)  
    {  
        let action = "Load"; 
        $('#action').val("Insert");
        var limits = $('.form-control').val();
        $.ajax({  
                url:"Actions/Campaign_Action.php",  
                method:"POST",  
                data:{action:action, page:page, limits:limits},  
                success:function(data)
                    {  
                        $('#item').html(data);  
                    }  
              });  
    }

//+++++++++++++++++++++++++++ Pagination  +++++++++++++++++++++++++++++++++++++++

$(document).on('click', '.page-item', function(e)
 {
    e.preventDefault();
    var page = $(this).attr("id");
    var limits = $(this).val();
    load_data(page, limits);
  });     

//+++++++++++++++++++++++++++ Select Table rows  ++++++++++++++++++++++++++++++

$("select.form-control").change(function()
 {
    var limits = $(this).children("option:selected").val();
    var page = 1;
    load_data(page, limits);
  }); 

//+++++++++++++++++++++++++++ Insert Data  +++++++++++++++++++++++++++++++++++++++

$('#campaign_form').on('submit', function(event)
 {  
    event.preventDefault();
    var campaign_name = $('#campaign_name').val();   
    if (campaign_name == ''){
        $('#error').html("Campaign Name Field is Empty ");
    }
    else
    {
      $('#save_data').attr("class", "btn btn-primary btn-progress");
      var timezone_offset_minutes = new Date().getTimezoneOffset();
      timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
      var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
      $('#timezone').val(timezone);
      $.ajax({  
              url:"Actions/Campaign_Action.php",  
              method:"POST",  
              data:new FormData(this),  
              contentType:false,  
              processData:false,  
              success:function(data)
                    {  
                      if(data.status == 'success') {
                          $('.close').click();     
                          load_data();
                          count_cards();
                          $('#campaign_form')[0].reset();
                          $('#action').val("Insert");
                          $('#save_data').val("Insert");  
                          $('#save_data').attr("class", "btn btn-primary");   
                          swal("Congratulations","Data Inserted Successfully","success")
                          .then((willDelete) => {
                                  if (willDelete) {
                                    var email = encodeURIComponent(campaign_name); // Encode the email value
                                    window.location.href = 'http://localhost/MyStrika/update.php?email=' + email;
                                  }
                              })
                          
                      }
                      else if(data.status == 'error'){
                        $('.close').click();     
                          swal('oops', 'Campaign Already Exist', 'error')
                              .then((willDelete) => {
                                  if (willDelete) {
                                       
                                  }
                              })
                      }
              },
              error: function(xhr, status, error)
              {
                  alert("Error: " + xhr.responseText);
              }

      })  
    } 
  }); 

//+++++++++++++++++++++++++++ Update Data  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".update_campaign", function()
 {
    var user_id = $(this).data('eid');
    var action = "Fetch_Data";
    $.ajax({
            url:"Actions/Campaign_Action.php",  
            method:"POST",  
            data:{user_id:user_id, action:action},  
            dataType:"json",  
            success : function(data)
                  {   
                      $('#campaign_name').val(data.name); 
                      $('#save_data').val("Edit");  
                      $('#action').val("Edit");
                      $('#user_id').val(user_id);  
                  },
                  error: function(){
                  alert('Failed to export data. Please try again.');
                  }
    });              
  });

  //+++++++++++++++++++++++++++ copy campaign  +++++++++++++++++++++++++++++++++++++++

  $(document).on("click",".copy_campaign", function()
   {
      var user_id = $(this).data('eid');              
      $('#save_data').val("Copy_Campaign");  
      $('#action').val("Copy_campaign");
      $('#user_id').val(user_id);  
  });
              
//+++++++++++++++++++++++++++ copy Leads  +++++++++++++++++++++++++++++++++++++++
$(document).on("click",".copy_leads", function()
 {
    var id = $(this).data("eid");
    $("#lead").val(id);
})

$('#copy_leads_form').on('submit', function(event)
 {  
    event.preventDefault();
    var action = "Copy_Leads";
    var campaign_id  = $('select#copy_lead').val();
    var leads_id =  $("#lead").val();
    $.ajax({
            url: "Actions/Campaign_Action.php",
            type: "POST",
            data: {action:action, campaign_id:campaign_id, leads_id:leads_id},
            success: function(data)
                {
                  if(data.status == 'success') {
                      $('.close').click();
                      swal("Congratulations","Leads Copy Successfully","success");
                      load_data();
                  }
                  else if(data.status == 'error'){
                      $('.close').click();
                      swal("Error","Leads Not Copied","error");
                  }
                  else if(data.status == 'exist'){
                      $('.close').click();
                      swal('Good Job', 'Same Leads Already Exist in this Campaign', 'info');
                  }
                  else if(data.status == 'empty'){
                      $('.close').click();
                      swal('Good Job', 'No Leads Found in this Campaign', 'info');  
                  }
                },
                error: function(xhr, status, error)
                    {
                        alert("Error: " + xhr.responseText);
                    }
    });
 })
//+++++++++++++++++++++++++++ Active Emails  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".active_email", function()
 {
    var action = "Active";
    var id = $(this).data("eid");
    var status = ($(this).is(':checked')) ? '1' : '0'; 
    $.ajax({
            url: "Actions/Campaign_Action.php",
            type: "POST",
            data: {action:action, id:id, status:status},
            success: function(data)
                {
                    $(".inner-modal").html(data);
                     count_cards();  
                     load_data();
                }
        });
}); 

//+++++++++++++++++++++++++++ Edit Campaign  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".edit_campaign", function()
 {
    var action = "Edit_Campaign";
    var id = $(this).data("eid");
    

    window.location.href = 'http://localhost/MyStrika/update.php?email=' + id;



// alert(id);

    $.ajax({
            url: "Actions/Campaign_Action.php",
            type: "POST",
            data: {action:action, id:id, status:status},
            success: function(data)
                {
                    $(".inner-modal").html(data);
                     count_cards();  
                     load_data();
                }
        });
}); 

//+++++++++++++++++++++++++++ Delete Campaign  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".campaign_delete", function()
 {
    var action = "Delete_Campaign";
    var id = $(this).data("eid");
    var value = $(this).data("val");
    if(id){
      swal({
            title: value,
            text: 'Are you sure you want to delete this Campaign? Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
                if(willDelete) {
                  $.ajax({
                          url : "Actions/Campaign_Action.php",
                          type : "POST",
                          data : {action:action, id : id},
                           success : function(data)
                                 {
                                    load_data();
                                    count_cards();  
                                 }
                  });
                  swal("Deleted!","Your imaginary file has been deleted!","success");
                } 
                else{
                  swal("Not Deleted!", "Your imaginary file is safe!", "success");
                }
          });
     }
})

//+++++++++++++++++++++++++++ Delete Leads  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".lead_delete", function()
 {
    var action = "Delete_Leads";
    var id = $(this).data("eid");
    var value = $(this).data("val");
    if(id){
      swal({
            title: value,
            text: 'Are you sure you want to delete all Leads within selected Campaign? Deleting leads will remove associated emails from Unibox',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
                if(willDelete) {
                  $.ajax({
                          url : "Actions/Campaign_Action.php",
                          type : "POST",
                          data : {action:action, id : id},
                           success : function(data)
                                 {
                                    load_data();
                                    count_cards();  
                                 }
                  });
                  swal("Deleted!","Your imaginary file has been deleted!","success");
                } 
                else{
                  swal("Not Deleted!", "Your imaginary file is safe!", "success");
                }
          });
     }
})

//+++++++++++++++++++++++++++ Export Leads  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".lead_export", function()
 {
    var action = "Export_Leads";
    var id = $(this).data("eid");
    if(id){                
        $.ajax({
                type: 'POST',
                url: 'Actions/Campaign_Action.php',
                dataType: 'text',
                data: {action:action, id:id},
                success: function(response)
                {
                    var link = document.createElement('a');
                    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(response));
                    link.setAttribute('download', 'Leads.csv');
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                },
                error: function(){
                    alert('Failed to export data. Please try again.');
                }
        });
    }
})

              
//+++++++++++++++++++++++++++ Search Data  +++++++++++++++++++++++++++++++++++++++

$('#search').keyup(function(){
    var query = $('#search').val();
    var limits = $('.form-control').val();
    var action = "Search";
    if(query != '') {
        $.ajax({
                url:"Actions/Campaign_Action.php",
                method:"POST",
                data:{query:query, action:action, limits:limits},
                success:function(data)
                    {
                        $('#item').html(data);
                    }
              });
    }
    else {
        load_data();
    }
}); 

//+++++++++++++++++++++++++++ Top Card  +++++++++++++++++++++++++++++++++++++++

count_cards();  
function count_cards() 
{  
    var action = "count";  
    $.ajax({  
            url:"Actions/Campaign_Action.php",  
            method:"POST",  
            data:{action:action},  
            dataType:"json",  
            success : function(data){   
                    $('#all_emails').html(data.all_emails);
                    $('#active_emails').html(data.active_emails);
                    $('#success_emails').html(data.success_emails);  
            }
    });  
}    
}) // Start Document
</script>
</body>
</html>