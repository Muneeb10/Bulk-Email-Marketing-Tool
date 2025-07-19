<!DOCTYPE html>
<html lang="en">
<head>
<?php include("Links/Links.php"); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      .theme-white .selectric-items li.highlighte {
    background-color: #6777ef;
    color: #fff;
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

    
      <div class="main-content">
        <section class="section">
          
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Totale Leads</h5>
                          <h2 id="all_emails" class="mb-3 font-18">258</h2>
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
                          <h5 class="font-15">Active Leads</h5>
                          <h2 id="active_emails" class="mb-3 font-18">258</h2>
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
                          <h5 class="font-15">Inactive Leads</h5>
                          <h2 id="inactive_emails" class="mb-3 font-18">258</h2>
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
      <div class="card-body" style="padding: 30px 20px; ">
        
          <div class="selectgroup w-100" style="margin-bottom: -5px; display: flex; justify-content: space-between; align-items: center;">
            <h4 style="color: #6777ef;">Leads</h4>
            <button type="button" id="bulk_btns" class="btn btn-primary" data-toggle="modal"data-target="#ModalCenter" style="width: 178px;"><i id="icons" class="form_btn fi fi-rr-layer-plus"></i> Select Action</button>
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
                                <select class="form-control" style="height: 40px; background-color: #f0f3ff;">
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





        <!-- Bulk Center -->
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="bulk_heading">Bulk Action on (1) IDs</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 
                 <!-- Agriment -->
                <div class="card" id="Bulk_btns" style="box-shadow: none; margin-bottom: 0px;">
                   
                  <div class="card-body">
                    <label for="" style="color: #6777ef; font-size: 0.8rem;">Using these will result in mass action.</label>
                    <label>Please have patience when using these.</label>
                  
                    <div class="buttons" style="display: flex;;">
                    
                      <a href="#" id="bulk_active" style="text-align:left;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn fi fi-rr-user-check"></i> Bulk Active</a>
                      <a href="#" id="bulk_deactive" style="text-align:left;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn fi fi-rr-delete-user"></i> Bulk De-Active</a>
                    </div>
                    <div class="buttons" style="display: flex; justify-content: center;">
                     
                      <a href="#" id="delete_btn" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn fi fi-rr-trash"></i> Bulk Delete</a>
                    </div>
                  </div>
                 
                </div>
              
              </div>
             
            </div>
          </div>

        </div>







        <div class="modal fade" id="info" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-body" style="padding: 0px;">
                <div class="row" style="margin-bottom: 0px; margin-top: 20px;">
                <h4 id="bulk_heading">Lead Activity</h4>
              </div>
              <div class="modal-body">
                 <div class="row">
                  <div class="col-12">
                    <div class="card" style="box-shadow: none; margin-bottom: 0px;">
                      <div class="card-header">
                        <h4>Full Name : Muneeb Yousaf</h4>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <tr>
                              <th class="text-center">#</th>
                              <th>Sending Date</th>
                              <th>Send</th>
                              <th>Sending Email Sequence</th>
                              <th>Reply Date</th>
                              <th>Reply</th>
                              <th>Reply Email Sequence</th>
                              <th>Status</th>
                            </tr>
                            <tr>
                              <td class="p-0 text-center">1</td>
                              <td>2018-01-20</td>
                              <td>Sent</td>
                              <td class="text-truncate">Email Seq 1</td>
                              <td>2019-05-28</td>
                              <td class="align-middle">Reply</td>
                              <td class="text-truncate">Email Seq 1</td>
                              <td>
                                <div class="progress-text">50%</div>
                                <div class="progress" data-height="6">
                                  <div class="progress-bar bg-success" data-width="50%"></div>
                                </div>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
             
            </div>
          </div>

        </div>







        <div class="modal fade" id="update_lead" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="agriment_heading"> Update Lead</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="lead_form">
                <div class="modal-body">
                
                  <div class="card" id="add_email" style="margin-bottom: 0px; box-shadow: none;">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Name on Email</label>
                          <input type="text" class="form-control" id="lead_name" name="lead_name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Email Address</label>
                          <input type="email" class="form-control" id="lead_email" name="lead_email" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Account Type</label>
                        <!-- <select id="lead_campaign" name="lead_campaign" class="form-control selectric">
                         
 
                        </select> -->
 


                        <select class="form-control selectric" id="lead_campaign" name="lead_campaign">
                        
                        <?php

require_once 'Actions/Leads_Action.php';
$object = new Leads();
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
                     
                      <div class="card-footer text-right">
                        <input type="hidden" name="action" id="action" />  
                        <input type="hidden" name="user_id" id="user_id" /> 
                        <input type="submit" name="button_action" id="save_data" class="btn btn-primary" value="Insert" />  
                      </div>
                    
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>








        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> 
            <i class="fa fa-spin fa-cog"></i>
          </a>
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
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
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
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>

  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>


  <script src="assets/js/page/posts.js"></script>


  <script>
$(document).ready(function()
{

//+++++++++++++++++++++++++++ Fetch Data  +++++++++++++++++++++++++++++++++++++++ 
$("#bulk_btns").hide();

    load_data(); 
    function load_data(page, limits)  
    {  
        var action = "Load"; 
        $('#action').val("Insert");
        var limits = $('.form-control').val();
        $.ajax({  
                url:"Actions/Leads_Action.php",  
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


     

//+++++++++++++++++++++++++++ Update Data  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#update_leads", function()
 {

  
      var user_id = $(this).data('eid');
      var action = "Fetch_Single_Data";
      $.ajax({
              url:"Actions/Leads_Action.php",  
              method:"POST",  
              data:{user_id:user_id, action:action},  
              dataType:"json",  
              success : function(data)
                  {   
                    
                    $('#lead_name').val(data.name);
                    $('#lead_email').val(data.email);
                    $('.label').html(data.campaign);                                          
                    $('#save_data').val("Edit");  
                    $('#action').val("Edit");
                    $('#user_id').val(user_id);      
                  }
            });              
  });





  $('#lead_form').on("submit", function(e) {  
    e.preventDefault();         

      var action = "Edit_Lead"; 
      var lead_id = $('#user_id').val(); 
      var lead_name = $('#lead_name').val(); 
      var lead_email = $('#lead_email').val();  
      var lead_campaign = $('select#lead_campaign').val(); 

// alert(sender_account_type);



    $.ajax({
              url:"Actions/Leads_Action.php",  
              method:"POST",  
              data:{action:action, lead_id:lead_id, lead_name:lead_name, lead_email:lead_email, lead_campaign:lead_campaign},  
              dataType:"json",  
              success : function(data)
                  {   
                    
                    if(data.status == 'success') {
                      $('.close').click();
                        swal('Good Job', 'Selected Emails are Inactive', 'success');
                        count_cards(); 
                        load_data();
                           
                    }
                    else if(data.status == 'error') {
                        swal('opps', 'Some Thing Wents Wrong', 'error')
                            .then((willDelete) => {
                                if (willDelete) {
                                  $('#bulk_btns').click();                                   
                                   
                                } 
                            }) 
                    }
                  }
            });              



  })
              
//+++++++++++++++++++++++++++ Active Emails  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".active_email", function(){
    var action = "Active";
    var id = $(this).data("eid");
    var status = ($(this).is(':checked')) ? '1' : '0';  
    
    $.ajax({
            url: "Actions/Leads_Action.php",
            type: "POST",
            data: {action:action, id:id, status:status},
            success: function(data)
                {
                    $(".inner-modal").html(data);
                     count_cards();  
                }
        });
}); 

//+++++++++++++++++++++++++++ Active Multipule Rows  +++++++++++++++++++++++++++++++++++++++

$("#bulk_active").on("click",function(){
    var action = "Bulk_Active";
    var id = [];
    $('input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
      // $(".modal-backdrop").attr('class', 'modal-backdrop fade');
      // $("#ModalCenter").hide()
    });
    $.ajax({
            url : "Actions/Leads_Action.php",
            type : "POST",
            data : {action:action, id : id},
            success : function(data)
                  {
                    if(data.status == 'success') {
                      $('.close').click();
                        swal('Good Job', 'Selected Emails are Active ss', 'success');
                        load_data();
                        $('#bulk_btns').hide();

                      }
                    else if(data.status == 'error'){
                      $('.close').click();
                        swal('opps', 'Some Thing Wents Wrong', 'error')
                            .then((willDelete) => {
                                if (willDelete) {
                                  $('#bulk_btns').click();                                   
                                } 
                            }) 
                    }
                    count_cards();  
            }
    });
});
            
//+++++++++++++++++++++++++++ Deactive Multipule Rows  +++++++++++++++++++++++++++++++++++++++

$("#bulk_deactive").on("click",function(){
    var action = "Bulk_deactive";
    var id = [];
    $('input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
      $(".modal-backdrop").attr('class', 'modal-backdrop fade');
      $("#ModalCenter").hide()
    });
    $.ajax({
            url : "Actions/Leads_Action.php",
            type : "POST",
            data : {action:action, id : id},
            success : function(data)
                 {
                    if(data.status == 'success') {
                      $('.close').click();
                        swal('Good Job', 'Selected Emails are Inactive', 'success');
                        count_cards(); 
                           
                    }
                    else if(data.status == 'error') {
                        swal('opps', 'Some Thing Wents Wrong', 'error')
                            .then((willDelete) => {
                                if (willDelete) {
                                  $('#bulk_btns').click();                                   
                                   
                                } 
                            }) 
                    }
            }
    });
});
            
//+++++++++++++++++++++++++++ Select Multipule Rows  +++++++++++++++++++++++++++++++++++++++

$(document).on("change", "#checkbox-all", function() 
{
  $('.checkboxs').prop('checked', $(this).prop('checked'));

  var checkedCount = $('.checkboxs:checked').length;
  $('#bulk_heading').html('Bulk Action on ('+ checkedCount +') IDs');


  if ($(this).is(':checked')) 
  {
    $('#bulk_btns').show();
  } else {
    $('#bulk_btns').hide();
  }
});


$(document).on("change", ".checkboxs", function() {
  var checkedCount = $('.checkboxs:checked').length;
  // let ids = checkedCount - 1;
  if(checkedCount > 1)
  {
    $('#bulk_btns').show();
    $('#bulk_heading').html('Bulk Action on ('+ checkedCount +') IDs');

  }
  else{
    $('#bulk_btns').hide();
  }
});

//+++++++++++++++++++++++++++ Delete Single Row  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#delete_btn", function(){
    var action = "Delete_Single";
    var id = $(this).data("eid");
    if(id){
      swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
                if(willDelete) {
                  $.ajax({
                          url : "Actions/Leads_Action.php",
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

//+++++++++++++++++++++++++++  Delete Multiple Data  +++++++++++++++++++++++++++++++++++++++

$("#delete_btn").on("click",function() {
    var action = "Delete";
    var id = [];
    $('input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
    });
    
    if(id.length > 0) {
      $('.close').click();
        swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                        url : "Actions/Leads_Action.php",
                        type : "POST",
                        data : {action:action, id : id},
                        success : function(data)
                              {
                                swal("Deleted!","Your imaginary file has been deleted!","success");
                                  load_data(); 
                                  count_cards();  
                              }
                });
                 
            } 
            else{
                swal("Not Deleted!", "Your imaginary file is safe!", "success");
            }
        });       
    }
});
              
//+++++++++++++++++++++++++++ Search Data  +++++++++++++++++++++++++++++++++++++++

$('#search').keyup(function(){
    var query = $('#search').val();
    var limits = $('.form-control').val();
    var action = "Search";
    if(query != '') {
        $.ajax({
                url:"Actions/Leads_Action.php",
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
function count_cards() {  
    var action = "count";  
    $.ajax({  
            url:"Actions/Leads_Action.php",  
            method:"POST",  
            data:{action:action},  
            dataType:"json",  
            success : function(data){   
                    $('#all_emails').html(data.all_emails);
                    $('#active_emails').html(data.active_emails);
                    $('#inactive_emails').html(data.inactive_emails);  
            }
    });  
}    



$(".close").on("click", function(){
    load_data();
    $("#bulk_btns").hide();
  })
  
  $("#ModalCenter").on("click", function(){   
    
    load_data();
    $("#bulk_btns").hide();
  
})









}) // Start Document
</script>

</body>
</html>