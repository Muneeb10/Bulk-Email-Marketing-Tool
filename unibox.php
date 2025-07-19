<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("Links/Links.php"); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .fi{
      color: #666;
      font-size: 13px;
      padding: 0px;
      margin-right: 5px;
    }
    .email_option{
      padding: 8px; 
    }
    .clearfix:hover{
      background-color: #6777ef;
    }
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb {
      background: rgb(87, 87, 87); 
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #646464; 
    }
    .clearfix
    {
      border: 1px solid #eee; 
      margin-bottom: 5px;
    }
    .clearfix_1
    {
      background-color: #f0f3ff;
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
              <div class="row">
                <section class="section">
                  <!-- Filter Buttons -->
                  <div class="row" style="margin-bottom: 20px; ">
                    <div class="col-12">
                      <div class="card mb-0">
                        <div class="card-body" style="padding: 30px 20px; ">
                          <ul class="nav nav-pills">
                            <div class="selectgroup w-100" style="margin-bottom: 10px;">
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="1" class="selectgroup-input-radio" checked>
                                <span class="selectgroup-button" >
                                  <span><i class="form_btn fi fi-rr-paper-plane"></i> All</span>
                                  <span id="all_emails"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="2" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-play"></i>New</span>
                                  <span id="unibox_new"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="3" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-eye"></i>Viewed</span>
                                  <span id="unibox_view"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="4" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-exit"></i>Sent</span>
                                  <span>5</span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="5" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-refresh"></i>Auto Reply</span>
                                  <span>6</span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="out_office" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-delete-user"></i>Out of Office</span>
                                  <span id="out_office"></span>
                                </span>
                              </label>
                            </div>
                            <div class="selectgroup w-100" style="margin-bottom: 0px;">
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="7" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-alarm-clock"></i>Scheduled</span>
                                  <span>7</span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="intrusted" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-following"></i>Interested</span>
                                  <span id="intrusted"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="meeting" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-business-time"></i>Meeting Sche</span>
                                  <span id="meeting"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="closed" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-handshake"></i>Closed</span>
                                  <span id="closed"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="wrong_person" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-user-slash"></i>Wrong Person</span>
                                  <span id="wrong_person"></span>
                                </span>
                              </label>
                              <label id="btn" class="selectgroup-item">
                                <input type="radio" name="radio1" value="not_intrusted" class="selectgroup-input-radio">
                                <span class="selectgroup-button">
                                  <span><i class="form_btn fi fi-rr-heart-crack"></i>Not Interested</span>
                                  <span id="not_intrusted"></span>
                                </span>
                              </label>
                            </div>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Filter Buttons -->
                  
                  <div class="section-body">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                        <div class="card">
                          <div class="body">
                            <div id="plist" class="people-list">
                              <div class="chat-search">
                                <input type="text" id="search_email" class="form-control" placeholder="Search..." />
                              </div>
                              <div class="m-b-20">
                                <div id="chat-scroll">
                                  <ul id="email_list" class="chat-list list-unstyled m-b-0" style="padding: 0px 10px;">

                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>    
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                        <div class="card">  
                          <!-- Header -->
                          <div class="chat" style="visibility: hidden; display: flex; align-items: center; justify-content: space-between; ">
                            <div class="chat-header">           
                              <div class="chat-about">
                                <div class="chat-with" style="color: #6777ef;"> </div>
                                <div class="chat-num-messages"></div>
                                <span>New</span> - <span>Closed</span> - <span>Paused</span>
                              </div>
                            </div>
                            <div class="inbox-header" style="display: flex; align-items: center; justify-content: center;">
                              <div class="mail-option">
                                <div class="email-btn-group m-l-15" style="display: flex; align-items: center;">
                                  <a href="#" class="col-dark-gray waves-effect m-r-20" title="Resume" data-toggle="tooltip"><i class="email_icon fi-rr-play"></i></a>
                                  <div class="dropdown">
                                    <a href="#" class="col-dark-gray waves-effect m-r-20" title="Resume"  data-toggle="dropdown"><i class="email_icon fi-rr-edit"></i></a>
                                    <div class="dropdown-menu dropleft" style="position: absolute;">
                                      <button type="button" id="info_btn" class="" data-toggle="modal"data-target="#ModalCenter" style="width: 100%; padding:0px; border: none; outline: none; background-color: #fff;">  
                                        <a class="dropdown-item"><i class="email_option fi fi-rr-chart-line-up" data-toggle="modal" data-target="#ModalCenter"></i>Detail</a>
                                        <input type="hidden" name="email_info" id="email_info" /> 
                                      </button>
                                      <a class="dropdown-item" id="delete_email"><i class="email_option fi fi-rr-trash"></i>Delete E-mail</a>
                                      <a class="dropdown-item" id="delete_lead"><i class="email_option fi fi-rr-trash"></i>Leads Delete</a>
                                    </div>
                                  </div>
                                  <!-- Mark Status -->
                                  <div style="width: 200px; height: 40px; margin-right: 10px; display: flex; justify-content: center;">
                                    <select id="account_type" name="sender_account_type" class="form-select form-control">
                                      <option value="" selected>Select an Option</option>
                                      <option value="closed">Closed</option>
                                      <option value="intrusted">Intrusted</option>
                                      <option value="wrong_person">Wrong Person</option>
                                      <option value="not_intrusted">Not Intrusted</option>
                                      <option value="out_office">Out of Office</option>
                                      <option value="meeting">Meeting Schedule</option>
                                    </select>
                                    <input type="hidden" name="email_id" id="email_id" /> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Header -->

                          <div class="chat-box" id="mychatbox">
                            <div class="card-body">
                              <div class="card" style="min-height: 380px; max-height: 380px; overflow-y: scroll; box-shadow: none;">
                                <div class="boxs mail_listing">
                                  <div class="inbox-body no-pad" style="padding: 20px 20px 20px 0px;">
                                    <section class="mail-list"  id="email_box">
                                      
                                    </section>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
        
        
                <!-- Reply Form -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-body" style="padding: 0px;">
                        <div class="row" style="margin-bottom: 0px;">
                          <div class="card" style="margin-bottom: 0px; padding: 20px;">
                            <form action="" id="reply_form">
                              <div class="card-header">
                                <h4>Write Your Reply Message Below</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="card-body" style=" padding-bottom: 20px; padding-left: 60px; display: flex; flex-direction: column; justify-content: center;">
                                <div class="form-group row " style="width: 100%;">
                                  <div class="" style="width: 80%;">
                                    <input type="text" class="form-control" id="reply_cc" placeholder="CC">
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%;">
                                  <div class="" style="width: 80%; display: flex;">
                                    <input type="date" class="form-control" id="reply_date" placeholder="Schedule">
                                    <input type="time" class="form-control" id="reply_time" placeholder="Schedule" style="margin-left: 20px;">
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%; margin-bottom: 0px;" >
                                  <div class="" style="width: 80%;">
                                    <textarea class="summernote" id="reply_body"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%; margin-bottom: 0px;" >
                                  <div class="" style="width: 80%; display: flex; justify-content: center;">
                                    <button class="btn btn-primary" style="width: 100px;">Send Reply</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>            
                    </div>
                  </div>
                </div>

                <!-- Forward Form -->

                <div class="modal fade" id="myModals" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-body" style="padding: 0px;">
                        <div class="row" style="margin-bottom: 0px;">
                          <form action="" id="forward_form">
                            <div class="card" style="margin-bottom: 0px; padding: 20px;">
                              <div class="card-header">
                                <h4>Write Your Email Body Below to Forward</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="card-body" style=" padding-bottom: 20px; padding-left: 60px; display: flex; flex-direction: column; justify-content: center;">
                                <div class="form-group row " style="width: 100%;">
                                  <div class="" style="width: 80%;">
                                    <input type="text" class="form-control" id="forward_cc" placeholder="to">
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%;">
                                  <div class="" style="width: 80%; display: flex;">
                                    <input type="date" class="form-control" id="forward_date" placeholder="Schedule">
                                    <input type="time" class="form-control" id="forward_time" placeholder="Schedule" style="margin-left: 20px;">
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%; margin-bottom: 0px;" >
                                  <div class="" style="width: 80%;">
                                    <textarea class="summernote" id="forward_message"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row" style="width: 100%; margin-bottom: 0px;" >
                                  <div class="" style="width: 80%; display: flex; justify-content: center;">
                                    <button class="btn btn-primary" style="width: 150px;">Forward Email</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Info Form -->

                <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <form action="" id="campaign_form">
                        <div class="modal-header">
                          <h4 id="bulk_heading">Campaign / Lead Details</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="card" id="campaign_popup" style="box-shadow: none; margin-bottom: 0px;">
                            <div class="card-body">
                              <label for="inputPassword4">Campaign Name</label>
                              <input type="text" class="form-control" id="campaign_name" name="campaign_name" readonly placeholder="Enter Campaign Name">
                              <br>
                              <label for="inputPassword4">Lead Name</label>
                              <input type="text" class="form-control" id="lead_name" name="campaign_name" readonly placeholder="Enter Campaign Name">
                              <br>
                              <label for="inputPassword4">Lead Email</label>
                              <input type="text" class="form-control" id="lead_email" name="campaign_name" readonly placeholder="Enter Campaign Name">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <footer class="main-footer">
                <div class="footer-left">
                  <a href="templateshub.net">Templateshub</a>
                </div>
                <div class="footer-right"></div>
              </footer>
            </div>
          </div>
      </div>
    
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="assets/js/page/chat.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>



  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

  <script src="assets/bundles/prism/prism.js"></script>



  <script src="assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="assets/bundles/codemirror/lib/codemirror.js"></script>
  <script src="assets/bundles/codemirror/mode/javascript/javascript.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="assets/bundles/ckeditor/ckeditor.js"></script>

  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/js/page/datatables.js"></script>


<!-- Selection option -->
  <script src="assets/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>



<script>
$(document).ready(function()
{

//+++++++++++++++++++++++++++ Load Inbox Emails  +++++++++++++++++++++++++++++++++++++++ 

  load_inbox(); 
  function load_inbox()  
  {    
    let action = "Insert"; 
    $('#email_box').html('<div style="width:100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">'+'<span style="font-size: 20px; color: #6777ef;">Loading Email Thread.</span>'+'<span>Give it a minute to load...</span>'+'</div>');
    $.ajax({  
            url:"Actions/Unibox_Action.php",  
            method:"POST",  
            data:{action:action},  
            success:function(data)
            {  
              $('#email_box').html('<div style="width:100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">'+'<span style="font-size: 20px; color: #6777ef;">No Emails selected.</span>'+'<span>Select an Email to display its content here.</span>'+'</div>');
              load_data();
              count_cards();  
            }  
    });  
  }
            
//+++++++++++++++  Load Email IDs  +++++++++++++++++++++++
            
  function load_data()  
  {  
    let action = "Load"; 
    $.ajax({  
            url:"Actions/Unibox_Action.php",  
            method:"POST",  
            data:{action:action},  
            success:function(data)
            {            
              $('#email_list').html(data);  
            }  
    });  
  }

  function Header_Show()
  {
    $('.chat').css('visibility', 'visible');
  }
  function Header_Hide()
  {
    $('.chat').css('visibility', 'hidden');
  }

// ++++++++++++++++  Display Emails  ++++++++++++++++++++
    
  $(document).on("click", ".clearfix", function() 
  {
    var clickedElement = $(this);
    var user_id = clickedElement.data('eid');
    $("#email_id").val(user_id);
    Header_Show();
    var action = "Fetch_Emails";
    $.ajax({
        url: "Actions/Unibox_Action.php",
        method: "POST",
        data: { user_id: user_id, action: action },
        success: function(data) 
        {
            $('#email_box').html(data);
        },
        error: function(xhr, status, error) {
        alert('AJAX Error:', status, error);
        }
    });
  });

  $(document).on("click", ".clearfix", function() 
  {
    var clickedElement = $(this);
    var user_id = clickedElement.data('eid');
    $("#email_id").val(user_id);
    var action = "Fetch_Emailss";
    $.ajax({
        url: "Actions/Unibox_Action.php",
        method: "POST",
        data: { user_id: user_id, action: action },
        dataType: "json",
        success: function(data) 
        {
          $('.chat-num-messages').html(data.unibox_subject);
          $('.chat-with').html(data.unibox_mail_to);
          $('#email_info').val(data.unibox_mail_from);
          $('#account_type').val(data.unibox_status);
          $('.clearfix').removeClass('active');
          clickedElement.addClass('active');  
          if (data.status == 1) {
              clickedElement.attr('class', 'clearfix clearfix_' + user_id + ' active');
          }
          count_cards();  
        },
        error: function(xhr, status, error) {
          alert('ok AJAX Error:', status, error);
        }
    });
  });
      
// ++++++++++++++++  Filter Emails  ++++++++++++++++++++

  $('input[type="radio"]').change(function() 
  {
    let action = "Filter";
    $('#email_box').html(' <div style="width:100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">'+'<span style="font-size: 20px; color: #6777ef;">Loading Email Thread.</span>'+'<span>Give it a minute to load...</span>'+'</div>');
    var option = $(this).val();
    $.ajax({
            url: 'Actions/Unibox_Action.php', // PHP script to handle data retrieval
            method: 'POST',
            data: { action:action, option: option }, // Send selected option to PHP script
            success: function(data) 
            {  
              $('#email_list').html(data);
              $('#email_box').html(' <div style="width:100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">'+'<span style="font-size: 20px; color: #6777ef;">No Emails selected.</span>'+'<span>Select an Email to display its content here.</span>'+'</div>');
              Header_Hide();   
            }
    });
  });

// ++++++++++++++ Mark Status +++++++++++++++++++++++++

  $('#account_type').change(function() 
  {
    var selectedValue = $(this).val();
    var id = $('#email_id').val();
    let action = "Status";
    $.ajax({
            url: 'Actions/Unibox_Action.php', // PHP script to handle the saving
            type: 'POST',
            data: { action:action, id:id, status: selectedValue },
            success: function(response) 
            {
              count_cards();  
            },
            error: function(xhr, status, error) {
                console.error('Error saving status:', error);
            }
    });
  });

// +++++++++++++++++  Search Email  ++++++++++++++++++++++

  $('#search_email').keyup(function(){
    var query = $(this).val();
    var action = "Search";
    if(query != '') 
    {
      $.ajax({
              url:"Actions/Unibox_Action.php",
              method:"POST",
              data:{query:query, action:action},
              success:function(data)
              {
                $('#email_list').html(data);  
              }
      });
    }
    else {
        load_data();
    }
  }); 

// +++++++++++++++++  Email info  ++++++++++++++++++++++

  $('#info_btn').click(function() 
  {
    let id = $('#email_info').val();
    let action = "Fetch_Info";
    if(id)
    {
      $.ajax({
              url: "Actions/Unibox_Action.php",
              method: "POST",
              data: { id:id, action:action },
              dataType: "json",
              success: function(data) 
              {
                $('#campaign_name').val(data.campaign_name);
                $('#lead_name').val(data.lead_name);
                $('#lead_email').val(data.lead_email);
              },
              error: function() {
                alert('Failed to export data. Please try again.');
              }
      });
    }
    else{
        $('.close').click();
        swal('oops', 'Please Select Email', 'error')
    }
  });

//+++++++++++++++++++++++++++ Delete lead  +++++++++++++++++++++++++++++++++++++++

  $('#delete_lead').click(function() 
  {
    var action = "Delete_Lead";
    let id = $('#email_info').val();  
    if(id){
        swal({
            title: id,
            text: 'Are you sure you want to delete this Lead? Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url: "Actions/Unibox_Action.php",
                    type: "POST",
                    data: {action: action, id: id},
                    success: function(data) {
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                    },
                    error: function() {
                        swal("Oops!", "Failed to delete the lead. Please try again.", "error");
                    }
                });
            } else {
                swal("Not Deleted!", "Your imaginary file is safe!", "success");
            }
        });
    } else {
        swal("Error!", "Email ID is empty.", "error");
    }
  });

// +++++++++++++++++ Delete Email ++++++++++++++++++++++++++++

  $('#delete_email').click(function() 
  {
    var action = "Delete_Email";
    let id = $('#email_id').val();
    let sender_email = $('.chat-with').text();
    let receiver_email = $('#email_info').val();
    if(id){
        swal({
            title:receiver_email,
            text: 'Are you sure you want to delete this Lead? Once deleted, you will not be able to recover this imaginary file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if(willDelete) {
                $.ajax({
                    url: "Actions/Unibox_Action.php",
                    type: "POST",
                    data: {action: action, id: id, sender_email:sender_email, receiver_email:receiver_email},
                    success: function(data) {
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        load_data();
                        count_cards();
                        $('#email_box').html('');
                    },
                    error: function() {
                        swal("Oops!", "Failed to delete the lead. Please try again.", "error");
                    }
                });
            } else {
                swal("Not Deleted!", "Your imaginary file is safe!", "success");
            }
        });
    } else {
        swal("Error!", "Email ID is empty.", "error");
    }
  });

// ++++++++++++++++++  Count Data  ++++++++++++++++++++++

  count_cards();  
  function count_cards() 
  {  
    var action = "count";  
    $.ajax({  
            url:"Actions/Unibox_Action.php",  
            method:"POST",  
            data:{action:action},  
            dataType:"json",  
            success : function(data){   
                    $('#all_emails').html(data.all_emails);
                    $('#unibox_new').html(data.unibox_new);
                    $('#unibox_view').html(data.unibox_view);  
                    $('#out_office').html(data.out_office);  
                    $('#intrusted').html(data.intrusted);  
                    $('#meeting').html(data.meeting);  
                    $('#closed').html(data.closed);  
                    $('#wrong_person').html(data.wrong_person);  
                    $('#not_intrusted').html(data.not_intrusted);  
            }
    });  
  }  

//+++++++++++++++++  Reply Email  +++++++++++++++++++++++++

$('#reply_form').on('submit', function(event) 
{
    event.preventDefault();
    let reply_cc = $('#reply_cc').val();
    let reply_date = $('#reply_date').val();
    let reply_time = $('#reply_time').val();
    let reply_body = $('#reply_body').val();
    let reply_subject = $('.chat-num-messages').text();
    let sender_email = $('.chat-with').text();
    let receiver_email = $('#email_info').val();
    let action = "Reply_Email";
    $.ajax({
        url: "Actions/Unibox_Action.php",
        type: "POST",
        dataType: "json",
        data: {
            action: action,
            reply_cc: reply_cc,
            reply_date: reply_date,
            reply_time: reply_time,
            reply_body: reply_body,
            reply_subject: reply_subject,
            sender_email: sender_email,
            receiver_email: receiver_email
        },
        success: function(data) 
        {
          if (data.status === 'success') {
              swal("Congratulations", "Reply Sent Successfully", "success");
          } else if (data.status === 'error') {
              swal("Error", "Failed to send reply", "error");
          }
        },
        error: function(xhr, textStatus, errorThrown) {
            swal("Error", "Failed to send reply: " + errorThrown, "error");
        }
    });
  });

//+++++++++++++++++  Forward Email  +++++++++++++++++++++++++

  $('#forward_form').on('submit', function(event) 
  {
    event.preventDefault();
    let action = "Forward_Email";
    let forward_cc = $('#forward_cc').val();
    let forward_date = $('#forward_date').val();
    let forward_time = $('#forward_time').val();
    let forward_message = $('#forward_message').val();
    let sender_email = $('.chat-with').text();
    let forward_subject = $('.chat-num-messages').text();
    let Subject = forward_subject.substring(4);
    $.ajax({
        url: "Actions/Unibox_Action.php",
        type: "POST",
        dataType: "json",
        data: { action: action, forward_cc: forward_cc, forward_date: forward_date, forward_time: forward_time, forward_message: forward_message, forward_subject: Subject, sender_email: sender_email},
        success: function(data) {
            if (data.status === 'success') {
                swal("Congratulations", "Forward Sent Successfully", "success");
            } else if (data.status === 'error') {
                swal("Error", "Failed to Forward", "error");
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            swal("Error", "Failed to send reply: " + errorThrown, "error");
        }
    });
  });
})
</script>
</body>
</html>