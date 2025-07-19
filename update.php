<!DOCTYPE html>
<html lang="en">
<head>
<?php include("Links/Links.php"); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  

  
  <style>

#Stop_sending_emails_on_reply.clicked {
  background-color: #28a745;
}
    /* width */
    ::-webkit-scrollbar {
      width: 3px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(87, 87, 87); 
      border-radius: 10px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #646464; 
    }

#email_box{
  background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    padding-top: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
}

.message_field p{
  width: 300px;
        /*height: 50px;*/
        /* border: 1px solid red; */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
}


  
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #6777ef;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #5cb85c;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  transform: translateX(26px);
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
                <!-- <div class="form-group"> -->
                <div class="selectgroup w-80">
                <h4 style="color: #6777ef; font-size: 25px;">Campaign:</h4>
                <h4 id="campaign_names" style="text-transform: capitalize; color: #6777ef; font-size: 25px;"></h4>
                </div>
                <div class="selectgroup w-80">
                  <label id="btn" class="selectgroup-item" style="width: 150px; line-height: 30px;">
                    <input type="radio" name="radio1" value="1" class="selectgroup-input-radio" checked>
                    <span class="selectgroup-button" style="padding-top: 0px;">1 - Email Sequence</span>
                  </label>

                  <label id="btn" class="selectgroup-item" style="width: 150px;">
                    <input type="radio" name="radio1" value="2" class="selectgroup-input-radio">
                    <span class="selectgroup-button" style="padding-top: 0px;">2 - Leads</span>
                  </label>
                  <label id="btn" class="selectgroup-item" style="width: 150px;">
                    <input type="radio" name="radio1" value="3" class="selectgroup-input-radio">
                    <span class="selectgroup-button" style="padding-top: 0px;">3 - Setting</span>
                  </label>
                </div>
      
                <!-- </div> -->

              </div>
            </div>
          </div>
        </div>
        


        <div id="box_1" class="row" > 
          
        


          <div class="col-12">
            <form action="" id="email_entry_form">
            <!-- <div class="card"> -->
              <div class="card-header" id="email_box">
                <div class="row" style="padding: 20px 10px;" >


                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">  
                    <div style="justify-content: center; flex-direction: column; padding-right: 20px;">
                      
                      <div class="form-group row" style="padding-left: 30px;">
                        <div class="" style="width: 100%;">
                          <a href="#" class="form-control" style="width: 100%; padding: 10px; box-shadow: none; border-color: #e4e6fc;">Primary</a>
                        </div>
                      </div>
                      
                      <div class="form-group row" style="padding-left: 30px;">
                        <div class="" style="width: 100%; display: flex; justify-content: space-between;">  
                          <span id="prevbtn" style="width: 60px; height: 42px; background-color: #f0f3ff; margin: 0px 5px;  border-radius: 5px; color: #fff; display:flex; justify-content: center; align-items: center;"><i style="margin-right: 0px;" class="icons fi fi-rr-angle-left"></i></span>
                          <span id="nextbtn" style="width: 60px; height: 42px; background-color: #f0f3ff; margin: 0px 5px;  border-radius: 5px; color: #fff; display:flex; justify-content: center; align-items: center;"><i style="margin-right: 0px;" class="icons fi fi-rr-angle-right"></i></span>
                          <span id="deleteBtn" style="width: 60px; height: 42px; background-color: #f0f3ff; margin: 0px 5px;  border-radius: 5px; color: #fff; display:flex; justify-content: center; align-items: center;"><i style="margin-right: 0px;" class="icons fi fi-rr-trash"></i></span>
                          <span data-toggle="modal" data-target="#signature" style="width: 60px; height: 42px; background-color: #f0f3ff; border-radius: 5px; color:#fff; display:flex; justify-content: center; align-items: center;"> <i style="margin-right: 0px;" class="icons fi fi-rr-paper-plane"></i></span>
                        </div>
                      </div>
                       
                      <div class="form-group row" style="padding-left: 30px; margin-top: 2px;">
                        <div class="" style="width: 100%;">
                          <input type="number" id="step" name="step" min="1" class="form-control" style="width: 100%;" placeholder="Enter Step - 1">
                          <input type="text" id="subject_retrive" name="subject_retrive" class="form-control" style=" width: 100%; margin-top: 20px;" placeholder="Subject">
                        </div>
                      </div>

                      <div class="form-group row" style="padding-left: 30px; align-items: center;">
                        <label for="daye" style="margin-bottom: 0px;">Wait</label>
                        <input type="number" name="after_day" min="0" class="subject_value_1 form-control" style="width: 80px; margin: 0px 5px;" id="after_day">
                        <label for="days" style="margin-bottom: 0px;">Days</label>
                      </div> 

                      <div class="form-group row" style="padding-left: 30px;">
                   
                   
                       <input type="hidden" name="action" id="action" />  
                        <input type="hidden" name="user_id" id="user_id" /> 
                        <input type="hidden" name="email" id="email" /> 
                        <input type="submit" name="button_action" id="save_data" class="btn btn-primary" value="Insert" />  
                    
                   
          
            
                      </div>

<p id="error" style="text-align: center; color: red;"></p>


                    </div> 
                  </div>

                  <div id="email_form" class="col-xs-12 col-sm-12 col-md-12 col-lg-8">                     
                    <div style=" justify-content: center; flex-direction: column; padding-right: 20px;">
                      
                      <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Subject</label>
                        <div class="col-sm-12 col-md-10" style="width: 100%;">
                          <input type="text" class="subject_value_1 form-control" id="subject" name="subject">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Pre Header</label>
                        <div class="col-sm-12 col-md-10">
                          <input type="text" class="form-control" id="pre_header" name="pre_header">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Body</label>
                        <div class="col-sm-12 col-md-10">
                          <textarea id="message" class="summernote" name="message"></textarea>
                        </div>
                      </div>
                    
                    </div> 
                  </div>


                </div>
                
                
                
                
                <div class="card" style="box-shadow: none; padding:0px 20px;" id="item">
                  
              </div>
            </div>
            <!-- </div> -->
          </div>
        </form>
        </div>








        
        <div id="box_2" class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
                          <h4 id="campaign_name_2" style="text-transform: capitalize; color: #6777ef; font-size: 25px;">Schedual</h4>
                <div style="display: flex;">    
                <div class="d-flex justify-content-center"> 
                              <div class="search" style="margin-right: 20px;"> 
                                <input type="text" class="search-input" id="search" placeholder="Search..." name=""> 
                                <a href="#" class="search-icon"> 
                                  <i class="fa fa-search"></i> 
                                </a> 
                              </div> 
                            </div> 
                  <button type="button" id="" class="btn btn-primary" data-toggle="modal" data-target="#leads_csv" style="width: 178px; margin-right: 20px;"><i id="icons" class="form_btn fi fi-rr-layer-plus"></i>Select CSV File</button>
                  <button type="button" id="" class="btn btn-primary" data-toggle="modal" data-target="#update_lead" style="width: 178px;"><i id="icons" class="form_btn fi fi-rr-layer-plus"></i>Create Leads</button>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive" id="item_2">
                           
                  
                </div>
              </div>
            </div>
          </div>
        </div>














        <div id="box_3" class="row">
          <div class="col-12">
            <div class="card-body">
              <section class="section">
                <div class="section-body">
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="empty-state" data-height="400">
                            <h2>Accounts to use</h2>
                            <p class="lead"> Select one or more accounts from your warmup pool to send emails from. They must be active in Home tab. Adjust warmup config accordingly.</p>
                              
                            <div class="form-group" style="width: 100%; background-color: aquamarine;">
                              <select class="form-control selectric" id="sender_email" name="multipleSelect[]" multiple="" style="text-align: left; width: 100%;">
                              <option>Select Sender Emails</option>
                              
                              <?php

                                     require_once 'Actions/Update_Action.php';
                                     $object = new Update();
                                     $result = $object->execute_query("SELECT sender_id, sender_email FROM sender_emails WHERE sender_control = '1'");

                                     if ($result) {

                                    while ($rows = mysqli_fetch_assoc($result)) {
    // // Echo out options
                                    echo '<option value="' . $rows['sender_id'] . '">' . $rows['sender_email'] . '</option>';
                                    }
                                    } else {
                                      echo '<option>Campaign Not Found</option>';
                                        
                                    }
                                 ?>
                              </select>
                            </div>
                            <button id="email_save_btn" class="btn btn-primary mt-4" style="width: 100px;">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="empty-state" data-height="400">
                            <h2>Stop sending emails on reply</h2>
                            <p class="lead">Stop sending emails to a lead if a response has been received.</p>
                           
                           
                            <label class="switch">
                              <input type="checkbox" id="toggleButton">
                              <span class="slider"></span>
                            </label>
                  

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                              
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="empty-state" data-height="400">
                            <h2>Open Tracking</h2>
                            <p class="lead">
                              Track email opens (Reduced deliverability)
                            </p>
                            <!-- <a href="#" class="btn btn-primary mt-4" style="width: 100px;">Inactive</a> -->
                            <label class="switch">
                              <input type="checkbox" id="open_traking">
                              <span class="slider"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="empty-state" data-height="400">
                            <h2>Enable Signature Embedding</h2>
                            <p class="lead"> Do you want to Apply your configured Signature? Signature can be created on "Home" tab. Signature must also be enabled in "Settings" tab. Signature must also be enabled in "Home" > "Campaign Setting".</p>
                            <!-- <a href="#" class="btn btn-primary mt-4" style="width: 100px;">Inactive</a> -->
                            <label class="switch">
                              <input type="checkbox" id="enable_signature">
                              <span class="slider"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                   

                  </div>
                              
                  
                              
                  <div class="row">
                    <div class="col-12 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="empty-state" data-height="400">    
                            <h2>Daily sending limit</h2>
                            <p class="lead"> Max number of emails to send per day for this campaign. (Daily Max new leads + Follow up emails) Limits at per sending email account, can be controlled in home tab.</p>
                            <!-- <a href="#" class="btn btn-primary mt-4" style="width: 100px;">Inactive</a> -->
                            <div class="form-group" style="display: flex; align-items: center; justify-content: center;">
                                <label style="width: 100px;">Per Day</label>
                                <input type="text" class="form-control" id="sending_limit">
                            </div>
                            <div class="form-group row mb-4">
                          <button id="sending_limit_btn" class="btn btn-primary" style="width: 100px;">Save</button>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-sm-12">
                        <div class="card" style="margin-bottom: 0px;">
                          <div class="empty-state">
                            <h4>Good Bye Message [Alpha] (Optional)</h4>
                            <p class="lead">This Email is fired only when a prospect is marked "Not Interested" (Automatically using above option).

This gives you last chance to pitch something in a Goodbye message. (Like a Loom video link)</p>
                            <div class="" style="width: 90%;">
                              <textarea class="summernote-simple"></textarea>
                            </div>
                            <div class="form-group row mb-4">
                              <button id="good_bye_message" class="btn btn-primary" style="width: 100px;">Save</button>
                            </div>
                          </div> 
                        </div>
                      </div>
                    </div>
                              
                   
                      
                     
                              
                   
                              
                   
                  </div>
                </section>    
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






<!-- Vertically Center -->
<div class="modal fade" id="leads_csv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="agriment_heading">Upload Prospects CSV</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card" id="add_email" style="margin-bottom: 0px; box-shadow: none;">
          <div class="card-body">
<form action="" id="email_id_form">
            <div class="form-group" id="office365_instructions" style="padding-top: 0px;">
              <div class="container" style="margin-top: 0px;">
                <img src="assets/img/cloud-computing.png" id="file_icon" width="100px" height="100px" style="margin-bottom: 20px;">
                <input type="file" id="file-input" name="file" multiple />
                <label for="file-input">&nbsp; Select CSV file</label>
                <ul id="files-list" style="width: 100%;"></ul>
                <p id="csv_error" style="color: red;"></p>
                <button class="btn btn-primary" >Download Sample CSV</button>
              </div>      
            </div>
            <div class="form-group" id="office365_instructions" style="padding-top: 0px; margin-left: 30px;">
              <label for="" style="color: #6777ef; font-size: 0.8rem;">It must have fullname and email column as in sample.</label> 
              <div class="pretty p-default">
                <input id="option" type="checkbox" />
                <div class="state p-warning">
                  <label>Allow Duplicates?</label>
                </div>
              </div>  
              <label for="" style="margin-top: 10px; color: #6777ef; font-size: 0.8rem;">(Uncheck if you don't want duplicates from Other Campaigns)</label> 
            </div>
            <div class="card-footer text-right">
              <input type="hidden" name="action" id="email_action" value="bulk_email_action" />  
              <input type="hidden" name="leads_campaign" id="leads_campaign" /> 
              <input type="submit" id="email_save_data"  class="btn btn-primary" value="UPLOAD Leads" style="margin-right: 5px;" />        
            </div>
  </form>
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
        <h4 id="agriment_heading">First Time Requirement</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Agriment -->
        




<!-- Add Email Form -->
        <div class="card" id="add_email" style="margin-bottom: 0px; box-shadow: none;">
          <div class="card-body">
            <form action="" id="lead_form">
            <div class="form-row">
                <label for="inputEmail4">Name on Email</label>
                <input type="text" class="form-control" id="lead_name" name="lead_name" placeholder="Lead Name">
            </div>

            <div class="form-row" style="margin-top: 10px;">
                <label for="inputEmail4">Name on Email</label>
                <input type="email" class="form-control" id="lead_email" name="lead_email" placeholder="Lead Email">
            </div>

           

          
            <div class="card-footer text-right" style="display: flex;">
              
              <input type="hidden" name="action" id="action_lead" />  
                  <input type="hidden" name="lead_user_id" id="lead_user_id" /> 
                  <input type="hidden" name="lead_campaign" id="lead_campaign" /> 
                  <input type="submit" name="button_action" id="lead_save_data" class="btn btn-primary" value="Add Lead" />  
             
            
            </div>
            </form>
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
         
         <!-- Agriment -->
       

         <div class="row">
          <div class="col-12">
            <div class="card" style="box-shadow: none; margin-bottom: 0px;">
              <div class="card-header">
                <h4>Full Name : Muneeb Yousaf</h4>
                <!-- <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div> -->
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
       
       
       <!-- Add Email Form -->
       
      </div>
     
    </div>
  </div>

</div>





<div class="modal fade" id="signature" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="row">
                  <div class="col-12">
                    <div class="card" style="margin-bottom: 0px; box-shadow: none;">
                      <div class="card-header" style="display: block; text-align: center;">
                        <h4>Send a Test email for selected email</h4>
                        <label for="">Please save your campaign and all email steps first before sending test email.</label>
                        <h4 id="email_title" style="color: #536bf6;"></h4>
                      </div>
                      <div class="card-body">
                         <label for="inputPassword4">Where shall we send Test Email To?</label>
                         <input type="email" class="form-control" id="campaign_config" placeholder="Destination Email ID">
                      </div>
                      <div class="form-group row mb-4">
                        <div class="col-sm-12 col-md-10">
                          <button id="" class="btn btn-primary signature_update">Send Email</button>
                        </div>
                      </div>
                    </div>
                  </div>
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
  <script>

    document.querySelector('#box_2').style.display = 'none';
    document.querySelector('#box_3').style.display = 'none';
    // document.querySelector('#box_2').style.display = 'none';
     
    document.querySelectorAll('#btn').forEach((item) => {
       item.addEventListener("click", (e) => {
            if(e.target.value == 1)
            {
              document.querySelector('#box_1').style.display = 'block';
              document.querySelector('#box_2').style.display = 'none';
              document.querySelector('#box_3').style.display = 'none';
            }
            else if (e.target.value == 2) 
            {
              document.querySelector('#box_1').style.display = 'none';
              document.querySelector('#box_2').style.display = 'block';
              document.querySelector('#box_3').style.display = 'none';
              
            }
            else if (e.target.value == 3) 
            {
              document.querySelector('#box_1').style.display = 'none';
              document.querySelector('#box_2').style.display = 'none';
              document.querySelector('#box_3').style.display = 'block';
              
            }
       })
    })
  </script>


<script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->

  <script src="assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="assets/bundles/codemirror/lib/codemirror.js"></script>
  <script src="assets/bundles/codemirror/mode/javascript/javascript.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- <script src="assets/bundles/ckeditor/ckeditor.js"></script> -->
  <!-- Page Specific JS File -->
  <!-- <script src="assets/js/page/ckeditor.js"></script> -->
  <!-- General JS Scripts -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="assets/js/page/chat.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  
  <!-- <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script> -->

  

  <script src="assets/js/page/datatables.js"></script>
 

  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

  <script>

</script>

<script>

   
</script>


<script>
  





$(document).ready(function()
{



let fileInput = document.getElementById("file-input");
let fileList = document.getElementById("files-list");
let fileIcon = document.getElementById("file_icon");
let error = document.getElementById("csv_error");

fileInput.addEventListener("change", () => {
    fileList.innerHTML = "";  
    fileIcon.src = 'assets/img/cloud-computing.png';
    const file = fileInput.files[0]; // Get the first file from the input
    if (file) {
        if (file.name.toLowerCase().endsWith('.csv')) {
            let reader = new FileReader();
            let listItem = document.createElement("li");
            let fileName = file.name;
            let fileSize = (file.size / 1024).toFixed(1);
            if (fileSize >= 1024) {
                fileSize = (fileSize / 1024).toFixed(1);
                listItem.innerHTML = `<p id="file_name">${fileName}</p><p id="file_size">${fileSize}MB</p>`;
            } 
            else {
                listItem.innerHTML = `<p id="file_name">${fileName}</p><p id="file_size">${fileSize}KB</p>`;
            }
            fileList.appendChild(listItem);
            fileIcon.src = 'assets/img/check.png';
        } 
        else {
            error.innerHTML = "Please select a CSV file.";
            setTimeout(() => { 
                error.innerHTML = ''; 
            }, 2000);
            fileInput.value = ''; // Clear the file input
        }
    }
});
})
</script>

<script>

 // Retrieve input value from input1 and update input2
 document.getElementById("subject").addEventListener("input", function() {
            var inputValue = document.getElementById("subject").value;
            document.getElementById("subject_retrive").value = inputValue;
        });


$(document).ready(function()
{
    $("#bulk_btns").hide();
    const urlParams = new URLSearchParams(window.location.search);
    const email = urlParams.get('email');
    $('#email').val(email);

    // $('.card-block').attr('name', 'message_body');
    // $('.card-block').attr('id', 'message_body');
    
//+++++++++++++++++++++++++++ Fetch Data  +++++++++++++++++++++++++++++++++++++++ 

    load_data(); 
    function load_data()  
    {  
        var action = "Load"; 
        var campaign_name = email;
        // var limits = $('.form-control').val();
        var campaign = $('#email').val();
        $.ajax({  
                url:"Actions/Update_Action.php",  
                method:"POST",  
                data:{action:action, campaign:campaign},  
                success:function(data)
                    {  
                        $('#item').html(data);         
                    },
                    error: function(xhr, status, error)
              {
                  alert("Error: " + xhr.responseText);
              }
              });  
    }

    load_Leads(); 
    function load_Leads(page, limits = 200)  
    {  
        var action = "Load_Leads"; 
        $('#action').val("Insert");
        $('#action_lead').val("Insert_Leads");

    $('#leads_campaign').val(email);


        var campaign_name = email;
        // var limits = $('.form-control').val();
        var limits = 200;
        var campaign = $('#email').val();
        $.ajax({  
                url:"Actions/Update_Action.php",  
                method:"POST",  
                data:{action:action, campaign:campaign, page:page, limits:limits},  
                success:function(data)
                    {  
                        $('#item_2').html(data);         
                    },
                    error: function(xhr, status, error)
              {
                  alert("Error: " + xhr.responseText);
              }
              });  
    }

    Leads_Campaign();

function Leads_Campaign() {
    var action = "Leads_Campaign";
    var campaign = $('#email').val();
    console.log(campaign);
    $.ajax({
        url: "Actions/Update_Action.php",
        method: "POST",
        data: { action: action, campaign: campaign }, // Change email to campaign  
        dataType:"json",  
        success: function(data) {
        
          $('#campaign_names').html(data.title);
          $('#campaign_name_2').html(data.title);
  
       
        },
        error: function(xhr, status, error) {
            alert("Error: " + xhr.responseText);
        }
    });
}

//+++++++++++++++++++++++++++ Pagination  +++++++++++++++++++++++++++++++++++++++

$(document).on('click', '.page-item', function(e)
 {
      e.preventDefault();
      var page = $(this).attr("id");
      var limits = $(this).val();
      load_Leads(page, limits);
  });     

//+++++++++++++++++++++++++++ Select Table rows  ++++++++++++++++++++++++++++++

// $("select.form-control").change(function()
//  {
//       var limits = $(this).children("option:selected").val();
//       var page = 1;
//       load_data(page, limits);
//   }); 

//+++++++++++++++++++++++++++ Insert Email Data  +++++++++++++++++++++++++++++++++++++++

$('#email_entry_form').on('submit', function(event)
 {  
      event.preventDefault();
      var email_step = $('#step').val();   
      var email_after_day = $('#after_day').val();   
      var email_subject = $('#subject').val();   
      var email_pre_header = $('#pre_header').val();   
      var email_message = $('.card-block').html();


      setTimeout(() => { $('#error').fadeIn().html(''); }, 3000);

      if (email_step == ''){
          $('#error').html("Sequence Field is Empty ");
      }
      else if(email_subject == '')
      {
          $('#error').html("Subject Field is Empty ");
      }
      else if(email_message == '')
      {
          $('#error').html("Email is Empty ");
      }
      else
      {
      $.ajax({  
              url:"Actions/Update_Action.php",  
              method:"POST",  
              data:new FormData(this),  
              contentType:false,  
              processData:false,  
              success:function(data)
                    {  
                      if(data.status == 'success') {
                        load_data();
                        $('#email_entry_form')[0].reset();   
                        $('.card-block').html('');   
                        $('#save_data').val("Insert");  
                      $('#action').val("Insert");
                      $('#user_id').val('');                 
                      }
                      else if(data.status == 'error'){
                        $('.close').click();     
                          swal('oops', 'Campaign Already Exist', 'error')
                              .then((willDelete) => {
                                  if (willDelete) {

                        $('#email_entry_form')[0].reset();   
                        $('.card-block').html('');   
                        $('#save_data').val("Insert");  
                      $('#action').val("Insert");
                      $('#user_id').val('');                  
                                       
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
     
//+++++++++++++++++++++++++++ Email Update  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#update_email", function()
 {
      var user_id = $(this).data('eid');
      var action = "Fetch_Email_Data";
      $.ajax({
              url:"Actions/Update_Action.php",  
              method:"POST",  
              data:{user_id:user_id, action:action},  
              dataType:"json",  
              success : function(data)
                  {   
                      $('#step').val(data.step);
                      $('#after_day').val(data.after_day);
                      $('#subject').val(data.subject);
                      $('#pre_header').val(data.pre_header);
                      $('.card-block').html(data.message);
                      $('#save_data').val("Edit_Email");  
                      $('#action').val("Edit_Email");
                      $('#user_id').val(user_id);  
                      
                      
                      $('#message').html(data.message);
                     

                  },
                  error: function(xhr, status, error)
                  {
                    alert("Error: " + xhr.responseText);
                  }
      })
  });

//+++++++++++++++++++++++++++ Delete Email Sequence  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#delete_btn", function()
{
    var action = "Delete_Email";
    var id = $(this).data("eid");
    if(id)
    {
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
                          url : "Actions/Update_Action.php",
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

//+++++++++++++++++++++++++++ Next, Previous And Delete Button  +++++++++++++++++++++++++++++++++++++++



var currentPosition = -1;
var id = '';

function fetchData() {
    var action = "Next_Button";
    $.ajax({
        url: "Actions/Update_Action.php",
        type: "POST",
        dataType: "json",
        data: { position: currentPosition, action: action },
        success: function(data) {
            if (!data.error) { // Check if data is available
                var rowData = data.data;
                var totalRecords = data.total_records;
                id = rowData.email_id;
                $("#email_entry_form #step").val(rowData.email_sequance);
                $("#email_entry_form #after_day").val(rowData.email_after_day);
                $("#email_entry_form #subject").val(rowData.email_subject);
                $("#email_entry_form #pre_header").val(rowData.email_pre_header);
                $("#email_entry_form .card-block").html(rowData.email_message);
                
            } 
            else {
                currentPosition--; // Decrement position as we went beyond the last record
            }
        }
    });
}


$("#nextbtn").click(function() {
    currentPosition++; // Increment position
    console.log(currentPosition);
    fetchData(); // Fetch data for the new position
});

$("#prevbtn").click(function() {
    if (currentPosition > 0) {
        currentPosition--; // Decrement position if not already at the beginning
        console.log(currentPosition);
        fetchData(); // Fetch data for the new position
    }
});

$('#deleteBtn').click(function() {
    var action = "Delete_Single_Email";
    $.ajax({
        url: 'Actions/Update_Action.php',
        type: 'post',
        data: { action: action, id: id },
        success: function(response) {
          
                if (currentPosition === 0) {
                    // If currentPosition is 0, meaning it was the last record, clear the form
                    $("#email_entry_form #step").val('');
                    $("#email_entry_form #after_day").val('');
                    $("#email_entry_form #subject").val('');
                    $("#email_entry_form #pre_header").val('');
                    $("#email_entry_form .card-block").html('');
              
                    load_data();
                    fetchData(); // Fetch the next data after successful deletion
                } else {
                    fetchData(); // Fetch the next data after successful deletion
                }
              
        }
    });
});


//+++++++++++++++++++++++++++ Insert Leads  +++++++++++++++++++++++++++++++++++++++

$('#lead_form').on('submit', function(event)
 {  
    event.preventDefault();

    var lead_name = $('#lead_name').val();   
    var lead_email = $('#lead_email').val(); 
    $('#lead_campaign').val(email);

    if (lead_name == ''){
      $('#error').html("Lead Name Field is Empty ");
    }
    else if(lead_email == '')
    {
      $('#error').html("Lead Email Field is Empty ");      
    }
    else
    {
      $.ajax({  
              url:"Actions/Update_Action.php",  
              method:"POST",  
              data:new FormData(this),  
              contentType:false,  
              processData:false,  
              success:function(data)
                    {  
                      if(data.status == 'success') {
                          $('.close').click();     
                          load_Leads();
                          count_cards();
                          $('#lead_form')[0].reset();

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
     

//+++++++++++++++++++++++++++ Update Leads  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#update_leads", function()
 {

  // alert("hello");
  
      var user_id = $(this).data('eid');
      var action = "Fetch_Single_Data";
      $.ajax({
              url:"Actions/Update_Action.php",  
              method:"POST",  
              data:{user_id:user_id, action:action},  
              dataType:"json",  
              success : function(data)
                  {   
                    
                    $('#lead_name').val(data.name);
                    $('#lead_email').val(data.email);
                    $('.label').html(data.campaign);                                          
                    $('#lead_save_data').val("Edit_Lead");  
                    $('#action_lead').val("Edit_Lead");
                    $('#lead_user_id').val(user_id);      
                    $('#lead_campaign').val(email);      
                  },
                  error: function(xhr, status, error)
              {
                  alert("Error: " + xhr.responseText);
              }


            });              
  });




 


//+++++++++++++++++++++++++++ Bulk Leads Entry Form  +++++++++++++++++++++++++++++++++++++++


$('#email_id_form').on("submit", function(e) {  
    e.preventDefault();         
    $.ajax({  
            url:"Actions/Update_Action.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,            
            cache:false,                 
            processData:false,          
            success: function(data)
                 {   
                   load_Leads();  
                   // count_cards();  
                   if(data.status == 'success') {
                     
                     $('.close').click();
                        $('#email_id_form')[0].reset();
                        $("#file_name, #file_size").html('');
                        $("#file_icon").attr('src', 'assets/img/cloud-computing.png');
                      swal('Good Job', 'Emails Insert Successfully. Existing entries are not modified. Only new entries are added.', 'success');
                    }
                    else if(data.status == 'exist') {
                        $('#email_id_form')[0].reset();
                        $("#file_name, #file_size").html('');     
                        $("#file_icon").attr('src', 'assets/img/cloud-computing.png');
                        $('#email_close_btn').click();
                          swal('Good Job', 'These Emails alrady exist', 'success');
                    }
                    else if(data.status == 'error') {
                        swal('Good Job', 'Emails Not Inserted', 'success');
                    }    
            },
            error: function(xhr, status, error)
              {
                  alert("Error: " + xhr.responseText);
              }
    })  
});  



//+++++++++++++++++++++++++++ Active Emails  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".active_email", function(){
    var action = "Active";
    var id = $(this).data("eid");
    var status = ($(this).is(':checked')) ? '1' : '0';  
    
    $.ajax({
            url: "Actions/Update_Action.php",
            type: "POST",
            data: {action:action, id:id, status:status},
            success: function(data)
                {
                    $(".inner-modal").html(data);
                     count_cards();  
                }
        });
}); 

            

//+++++++++++++++++++++++++++ Delete Leads  +++++++++++++++++++++++++++++++++++++++

$(document).on("click","#delete_btn", function(){
    var action = "Delete_Leads";
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
                          url : "Actions/Update_Action.php",
                          type : "POST",
                          data : {action:action, id : id},
                           success : function(data)
                                 {
                                    load_Leads();
                                    // count_cards();  
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


//+++++++++++++++++++++++++++ Search Data  +++++++++++++++++++++++++++++++++++++++

$('#search').keyup(function(){
    var query = $('#search').val();
    // var limits = $('.form-control').val();
    var limits = 3;
    // var campaign_name = 1854987069;
    var action = "Search";
    if(query != '') {
        $.ajax({
                url:"Actions/Update_Action.php",
                method:"POST",
                data:{query:query, action:action, limits:limits, campaign_name:email},
                success:function(data)
                    {
                        $('#item_2').html(data);
                    }
              });
    }
    else {
        load_Leads();
    }
}); 

//+++++++++++++++++++++++++++ Select Sender Emails  +++++++++++++++++++++++++++++++++++++++

$("#email_save_btn").click(function(){
    var action = "Senter_Emails";
    var selectedValues = [];
    
    $("#sender_email option:selected").each(function(){
        selectedValues.push($(this).val());
    });
    
    var campaign = $('#email').val();
    
    $.ajax({
        url: 'Actions/Update_Action.php',
        type: 'post',
        data: {action: action, campaign: campaign, selectedValues: JSON.stringify(selectedValues)}, // Serialize the array
        success: function(data){
          if(data.status == 'success') {
                     
            // $("#sender_email").empty();
                      swal('Good Job', 'Emails Insert Successfully..', 'success');
                    }
                    else if(data.status == 'error') {
                        swal('Good Job', 'Emails Not Inserted', 'success');
                    }    
        }
    });
});


//+++++++++++++++++++++++++++ Setting  +++++++++++++++++++++++++++++++++++++++

//----------  Stop Email  ---------------

$('#toggleButton').on("click",function(){
    var action = "Stop_Emails";
    var campaign = $('#email').val();
    var status = ($(this).is(':checked')) ? '1' : '0';  
    $.ajax({
            url: "Actions/Update_Action.php",
            type: "POST",
            data: {action:action, id:campaign, status:status},
            success: function(data)
                {
                }
        });
}); 

//----------  Stop Traking  ---------------


$('#open_traking').on("click",function(){
    var action = "Open_Traking";
    var campaign = $('#email').val();
    var status = ($(this).is(':checked')) ? '1' : '0';  
    $.ajax({
            url: "Actions/Update_Action.php",
            type: "POST",
            data: {action:action, id:campaign, status:status},
            success: function(data)
                {
                }
        });
}); 

$('#enable_signature').on("click",function(){
    var action = "Enable_Signature";
    var campaign = $('#email').val();
    var status = ($(this).is(':checked')) ? '1' : '0';  
    $.ajax({
            url: "Actions/Update_Action.php",
            type: "POST",
            data: {action:action, id:campaign, status:status},
            success: function(data)
                {
                }
        });
}); 

$('#sending_limit_btn').on("click",function(){
    var action = "Sending_Limit";
    var campaign = $('#email').val();
    var value = $('#sending_limit').val();

    if (value != '') {
      
      
      $.ajax({
        url: "Actions/Update_Action.php",
      type: "POST",
    data: {action:action, campaign:campaign, value:value},
  success: function(data)
{
  if(data.status == 'success') {
    swal('Good Job', 'Limit Insert Successfully..', 'success');
  }
else if(data.status == 'error') {
  swal('Good Job', 'Limit Not Inserted', 'success');
  }    
  }
  });
  
  }
  else{
  swal('Good Job', 'Please Enter Value', 'success');
  swal("Ohoo!", "Please Enter Value", "error");


}

      }); 

$('#good_bye_message').on("click",function(){
    var action = "Good_Bye_Message";
    var campaign = $('#email').val();
    var email_message = $('.summernote-simple').val();
    
if (email_message != '') {
  
  
  $.ajax({
    url: "Actions/Update_Action.php",
  type: "POST",
data: {action:action, campaign:campaign, email_message:email_message},
success: function(data)
{
  if(data.status == 'success') {
    swal('Good Job', 'Message Insert Successfully..', 'success');
  }
else if(data.status == 'error') {
  swal('Good Job', 'Message Not Inserted', 'success');
  }    
  }
  });
  
  }
  else{
    swal("Ohoo!", "Email Body is Empty", "error");
  

}



}); 



Stop_Emails();
function Stop_Emails() {
    var action = "Leads_Status";
    var campaign = $('#email').val();
    // console.log(campaign);
    $.ajax({
        url: "Actions/Update_Action.php",
        method: "POST",
        data: { action: action, campaign: campaign }, // Change email to campaign  
        dataType:"json",  
        success: function(data) {
          if (data.stop_email == 1) 
          {
            $('#toggleButton').prop('checked', true);
          }
          if (data.open_traking == 1) 
          {
            $('#open_traking').prop('checked', true);
          }
          if (data.enable_signature == 1) 
          {
            $('#enable_signature').prop('checked', true);
          }
        },
        error: function(xhr, status, error) {
            alert("Error: " + xhr.responseText);
        }
    });
}

















//+++++++++++++++++++++++++++ Top Card  +++++++++++++++++++++++++++++++++++++++


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