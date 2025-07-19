<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("Links/Links.php"); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    
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
          <!-- Top Card  -->
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Active Emails</h5>
                          <h2  id="active_emails" class="mb-3 font-18">258</h2>
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
                          <h5 class="font-15">Totale Emails</h5>
                          <h2 id="all_emails" class="mb-3 font-18" id="email_signature">258</h2>
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
                          <h5 class="font-15">Success Emails</h5>
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
          <!-- Buttons -->
          <div class="row" style="margin-bottom: 20px; ">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-body" style="padding: 20px; ">
                  <div class="selectgroup w-100" style="margin-bottom: -5px; display: flex; justify-content: space-between; align-items: center;">
                    <h4 style="color: #6777ef;">Sender E-mails</h4>
                    <div style="width: 50%; display: flex;  justify-content: flex-end; align-items: center;">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#email_popup" style="width: 150px;" id="bulk_email_btn"><i id="icons" class="form_btn fi fi-rr-envelopes"></i>Bulk Email IDs</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter" style="width: 150px;" id="bulk_btns"><i id="icons" class="form_btn fi fi-rr-layer-plus"></i>Bulk Action</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin: 0px 20px; width: 150px;"><i id="icons" class="form_btn fi fi-rr-user-add"></i> Add Email ID</button>
                      <button type="button" class="btn btn-primary" id="validate_dns" style="width: 150px;"><i id="icons" class="form_btn fi fi-rr-database"></i>Validate DNS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Table -->
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

        <!-- Single Email Entry Form -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="agriment_heading">First Time Requirement</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" id="user_form">
                <div class="modal-body">
                  <!-- Agriment -->
                  <div class="card" id="agriment" style="margin-bottom: 0px; box-shadow: none;">
                    <div class="card-body">
                      You must agree to follow below instructions before starting with Mystrika.
                      <ol>
                        <li>Read the email from onboard series first. We send first email after you verify email id with us.</li>
                        <li>Never mark any Warmup Email as Spam. If we find out, it's instant permanent ban on Mystrika.</li>
                        <li>Set an email filter if you don't want to see warmup emails at all. Video Guide.</li>
                        <li>Don't start your Campaigns/Cold Emails. Unless you have warmed for 2 weeks, and has "Success %" over 90.</li>
                      </ol>
                      (By clicking "I Agree", you agree to these terms)
                    </div>
                    <div class="card-footer text-right">
                      <a id="agriment_btn" class="btn btn-primary" style="color: #fff;">I Agree</a>
                    </div>
                  </div>
                  <!-- Add Email Form -->
                  <div class="card" id="add_email" style="margin-bottom: 0px; box-shadow: none;">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Name on Email</label>
                          <input type="text" class="form-control" id="sender_name" name="sender_name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Email Address</label>
                          <input type="email" class="form-control" id="sender_email" name="sender_email" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Account Type</label>
                        <select id="account_type" name="sender_account_type" class="form-control selectric">
                          <option value="gmail">G-Mail / G-Suite</option>
                          <option value="smtp">SMTP / IMAP</option>
                          <option value="office360">Office 365 / Outlook</option>
                        </select>
                      </div>
                      <div class="form-group" id="gmail_instructions">
                        <ol>
                          <li>Enable IMAP access in Setting > Forwarding.</li>
                          <li>Enable 2FA in your account.</li>
                          <li>Generate App Specific Password.</li>
                        </ol>
                        <label for="" style="color: #6777ef; font-size: 0.8rem;">This is not your Account Password.</label> <br>
                        <label>App Password</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-lock" style="font-size: 18px;"></i>
                            </div>
                          </div>
                          <input type="password" class="form-control pwstrength" id="sender_app_password" name="sender_app_password" placeholder="Google App Password" data-indicator="pwindicator">
                        </div>
                        <!-- <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="labels"></div>
                        </div> -->
                      </div>
                      <div class="form-group" id="smtp_instructios" style="padding: 0px;">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="imap_host" name="imap_host" placeholder="IMAP Host">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="imap_port" name="imap_port" placeholder="IMAP Port">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="imap_username" name="imap_username" placeholder="IMAP Username">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="imap_password" name="imap_password" placeholder="IMAP Password">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="smtp_host" name="smtp_host" placeholder="SMTP Host">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="smtp_port" name="smtp_port" placeholder="SMTP Port">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="smtp_username" name="smtp_username" placeholder="SMTP Username">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="smtp_password" name="smtp_password" placeholder="SMTP Password">
                          </div>
                        </div>
                      </div>

                      <div class="form-group" id="office365_instructions">
                        <label for="" style="color: #6777ef; font-size: 0.8rem;">You must Enable SMTP access and Wait for at least one hour.</label> 
                        <label for="" style="color: #6777ef; font-size: 0.8rem;">Purchased from Microsoft</label> 
                        <ol>
                          <li>Log into Microsoft Admin portal.</li>
                          <li>Go to Active Users.</li>
                          <li>In side window > Mail tab > Manage Email Apps.</li>
                          <li>Checkmark the Authenticated SMTP box & checkmark IMAP box.</li>
                          <li>Save Changes.</li>
                        </ol>
                        <label for="" style="color: #6777ef; font-size: 0.8rem;">Purchased from GoDaddy</label>
                        <ol>
                          <li>Log into GoDaddy account.</li>
                          <li>Go to My Products.</li>
                          <li>Scroll down to Email and Office section.</li>
                          <li>Go to Manage All > Select user > Manage > Advanced Settings.</li>
                          <li>Enable SMTP Authentication.</li>
                        </ol>
                        <label style="color: #6777ef; font-size: 0.8rem;"> OAuth Cannot be used to add Free Outlook / Hotmail email ids.</label>
                      </div>

                      <div class="card-footer text-right">
                        <input type="hidden" name="action" id="action" />  
                        <input type="hidden" name="user_id" id="user_id" /> 
                        <input type="submit" name="button_action" id="save_data" class="btn btn-primary" value="Insert" />  
                      </div>
                      <div style="width: 100%; display: flex; justify-content: center;">
                        <span id="error" style="color: red;"></span>
                        <span id="success_message" style="color: green;"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Bulk Actions -->
        <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="bulk_heading">Bulk Action on (1) IDs</h4>
                <button type="button" id="close_btn" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card" id="Bulk_btns"  style="margin-bottom: 0px; box-shadow: none;">
                  <div class="card-body">
                    <label for="" style="color: #6777ef; font-size: 0.8rem;">Using these will result in mass action.</label>
                    <label>Please have patience when using these.</label>
                    <div class="buttons" style="display: flex;;">
                      <a href="#" data-toggle="modal" data-target="#wormup_config" style="text-align:left;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn  fi fi-rr-mug-hot-alt"></i> Warmup Config</a>
                      <a href="#" id="bulk_active" style="text-align:left;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn  fi fi-rr-user-check"></i> Bulk Active</a>
                    </div>
                    <div class="buttons" style="display: flex;;">
                      <a href="#" id="campaign_btn" style="text-align:left;" style="justify-content: flex-start;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn  fi fi-rr-paper-plane"></i>Campaign Config</a>
                      <a href="#" id="Bulk_deactive" style="text-align:left;" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn  fi fi-rr-delete-user"></i> Bulk De-Active</a>
                    </div>
                    <div class="buttons" style="display: flex; justify-content: center;">
                      <a href="#" id="delete_btn" class="btn btn-icon icon-left btn-primary"><i id="icons" class="form_btn  fi fi-rr-trash"></i> Bulk Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card" id="campaign_popup"  style="margin-bottom: 0px; box-shadow: none;">
                  <form action="" id="campaign_config_form">
                    <div class="card-body">
                      <label>Update limits for Campaign</label><br>
                      <label for="inputPassword4">Max Daily Campaign emails</label>
                      <input type="number" class="form-control" id="campaign_config" value="50" placeholder="Max Reply">
                    </div>
                    <div class="card-footer text-right" style="display: flex;">
                      <input type="hidden" name="action" id="wormup_action" />  
                      <input type="hidden" name="user_ids" id="campaign_user_ids" /> 
                      <input type="submit" name="button_action" id="campaign_save_data"  class="btn btn-primary" value="UPDATE SETTINGS" style="margin-right: 5px;" />  
                      <input type="" name="button_action" id="campaign_close"  class="btn btn-primary" value="Close" style="margin-left: 5px;" />  
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Google Authanticator -->
        <div class="modal fade" id="google_authenticator" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="bulk_heading">G-Authenticator 2FA OTP</h4>
                <button type="button" id="close_btn" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card" id="campaign_popup"  style="margin-bottom: 0px; box-shadow: none; display: flex; justify-content: center;">
                  <form action="" id="google_authenticator_form">
                    <div class="avator_container" style=" width: 100%; display: flex; justify-content: center; flex-direction: column;">
                      <div class="Avater">
                        <img src="assets/img/avator.jpg" alt="" id="avator_image" width="100%" height="100%">
                      </div>
                      <label for="image_pre" style="background-color: #fff; position: relative; top: -15px;">
                        <i class="fas fa-camera" style="padding: 0px 8px;"></i>
                      </label>
                      <input type="file" accept="image/png image/jpg" id="image_pre">
                    </div> 
                    <div style="width: 100%; display: flex; justify-content: center;">
                      <div class="" style="display: flex; justify-content: space-between; align-items: center; background-color: #f0f3ff; border-radius: 5px; width: 180px; padding: 7px 15px 7px 15px; font-size: 20px;">
                        <label for="inputCity" style=" margin: 0px;  cursor: pointer;">847529</label>
                        <label for="inputCity" style="margin: 0px;font-size: 15px;">30</label>
                      </div>
                    </div>
                    <ol style="padding-right: 20px; margin-top: 20px;">
                      <li>  This sub-system is built for Mass Users, interested in offloading Google Authenticator to Mystrika for their Email Account.</li>
                      <li> Remember to Save your Backup Codes, before proceeding. If you are updating. Do not leave this page without confirming Token on Google Account.</li>
                    </ol>
                    <div class="card-footer text-right" style="display: flex;">
                      <input type="hidden" name="action" id="wormup_action" />  
                      <input type="hidden" name="user_ids" id="campaign_user_ids" /> 
                      <input type="submit" name="button_action" id="campaign_save_data"  class="btn btn-primary" value="UPDATE SETTINGS" style="margin-right: 5px;" />  
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <!-- Bulk email -->
        <div class="modal fade" id="email_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="bulk_heading">Bulk Upload Email IDs</h4>
                <button type="button" id="email_close_btn" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" id="email_id_form">
                  <div class="card-body">
                    <div class="container">
                      <img src="assets/img/cloud-computing.png" id="file_icon" width="100px" height="100px" style="margin-bottom: 20px;">
                      <input type="file" id="file-input" name="file" multiple />
                      <label for="file-input">&nbsp; Select CSV file</label>
                      <ul id="files-list"></ul>
                      <p id="csv_error" style="color: red;"></p>
                    </div>
                    <div class="card-footer text-right" style="display: flex; justify-content: space-around;">  
                      <a href="assets/file/csvUploadGoogle.csv" class="btn btn-primary" style="width: 100%; margin-right: 5px;" download >Sample Google CSV</a>
                      <a href="assets/file/csvUploadIMAP.csv" class="btn btn-primary" style="width: 100%; margin-right: 5px;" download > Sample IMAP CSV</a>
                    </div>
                    <label style="padding: 0rem 1.25rem;" for="inputPassword4">provider_type must be google or imap only depending on which CSV used as in sample.</label>
                    <label style="padding: 0rem 1.25rem;" for=""> Existing entries are not modified. Only new entries are added.</label>
                  </div>
                  <div class="card-footer text-right" style="display: flex;">  
                    <input type="hidden" name="action" id="email_action" value="bulk_email_action" />  
                    <!-- <input type="hidden" name="user_ids" id="campaign_user_ids" />  -->
                    <input type="submit" id="email_save_data"  class="btn btn-primary" value="UPLOAD EMAILS" style="margin-right: 5px;" />        
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Warmup Config modal -->
        <div  id="wormup_config" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                <button type="button" class="close" id="large_close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" id="wormup_form">
                  <div class="card" id="warmup_popup"  style="margin-bottom: 0px; box-shadow: none;">
                    <div class="card-body">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email Code</label>
                          <input type="text" class="form-control" id="email_code" value=""   placeholder="Emails" disabled>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Created Date</label>
                          <input type="text" class="form-control" id="create_date" value="" placeholder="Max Reply" disabled>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">SMTP Used</label>
                          <input type="text" class="form-control" id="smtp_used" value="" placeholder="Emails" disabled>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">IMAP Used</label>
                          <input type="text" class="form-control" id="imap_used" value="" placeholder="Max Reply" disabled>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Max Email</label>
                          <input type="number" class="form-control" id="max_email" name="max_email" value="" placeholder="Emails">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Max Reply</label>
                          <input type="number" class="form-control" id="max_reply" name="max_reply" value="" placeholder="Max Reply">
                        </div>
                      </div>
                      <label style="text-align: center;">Warmup Schedule (Optional)</label>
                      <div class="form-row">
                        <label>Warmup on Days</label>
                        <div class="form-group" style="width: 100%;">
                          <div class="selectgroup selectgroup-pills" id="wormup_days" style="display: flex;  align-items: senter; flex-basis: 1;">
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="sunday" value="Sun" class="selectgroup-input">
                              <span class="selectgroup-button">Sun</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="moday" value="Mon" class="selectgroup-input">
                              <span class="selectgroup-button">Mon</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="tuesday" value="Tues" class="selectgroup-input">
                              <span class="selectgroup-button">Tues</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="wednesday" value="Wed" class="selectgroup-input">
                              <span class="selectgroup-button">Wed</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="thursday" value="Thur" class="selectgroup-input">
                              <span class="selectgroup-button">Thur</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="friday" value="Fri" class="selectgroup-input">
                              <span class="selectgroup-button">Fri</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="checkbox" name="" id="saturday" value="Sat" class="selectgroup-input">
                              <span class="selectgroup-button">Sat</span>
                            </label>
                          </div>
                        </div>                     
                      </div>   
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <div class="form-row"> 
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Warmup End Time</label>
                              <input type="time" id="start_time" name="start_time">                        
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Warmup End Time</label>
                              <input type="time" id="end_time"  name="start_time">                        
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Warmup Timezone</label>
                          <div id="time_zone"></div>
                          <select class="form-control selectric" id="time_zone">
                            <option>Select Time Zone</option>
                            <?php
                              $timezones = timezone_identifiers_list();
                              foreach ($timezones as $timezone) {
                                  $timezone_object = new DateTimeZone($timezone);
                                  $offset = $timezone_object->getOffset(new DateTime());
                                  $offset_hours = floor(abs($offset) / 3600);
                                  $offset_minutes = floor((abs($offset) - ($offset_hours * 3600)) / 60);
                                  $offset_sign = ($offset < 0 ? '-' : '+');
                                  $formatted_offset = sprintf('%s%02d:%02d', $offset_sign, $offset_hours, $offset_minutes);
    
                                  echo ' <option value="'.$timezone . ' (GMT ' . $formatted_offset . ')'.'">'. $timezone . ' (GMT ' . $formatted_offset . ')' . '</option>';
                              }
                            ?>
                          </select>

                          
                        </div>
                      </div>
                      <div class="pretty p-default">
                        <input id="option" name="check" type="checkbox" />
                        <div class="state p-warning">
                          <label>Do you want to skip warmup phase?</label>
                        </div>
                      </div>
                      <div class="form-group" id="conferm_messages">
                        <ol>
                          <li>We do not recommend to skip Warmup Phase. Warmup is required to gradually increase sending limit for minimum 4 weeks.</li>
                          <li>Only use this option if you are transferring currently warmed up address.</li>
                        </ol>
                      </div>
                    </div>
                    <div class="card-footer text-right" style="display: flex; justify-content: center;">
                      <input type="hidden" name="action" id="wormup_action" />  
                      <input type="hidden" name="user_ids" id="wormup_user_ids" /> 
                      <input type="submit" name="button_action" id="wormup_save_data" class="btn btn-primary" value="UPDATE SETTINGS" style="margin-right: 10px; width: 200px;" />  
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Warmup Statistics  -->
        <div class="modal fade" id="warmup_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="card" style="margin-bottom: 0px; margin-right: 10px; box-shadow: none;">
                <div class="card-header">
                  <h4>Warmup Statistics (7 days)</h4>
                </div>
                <div class="card-body">
                  <div class="recent-report__chart">
                    <div id="chart1"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Signatures -->
        <div class="modal fade" id="signature" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="row">
                  <div class="col-12">
                    <div class="card" style="margin-bottom: 0px; box-shadow: none;">
                      <div class="card-header" style="display: block; text-align: center;">
                        <h4>Update Signature for this Email ID</h4>
                        <h4 id="email_title" style="color: #536bf6;"></h4>
                      </div>
                      <div class="card-body">
                        <div class="col-sm-12">
                          <textarea id="email_signature" class="summernote"></textarea>
                        </div>
                        <div class="form-group row mb-4">
                          <div class="col-sm-12 col-md-10">
                            <button id="" class="btn btn-primary signature_update">Update</button>
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
 
        <!-- Setting Panal -->
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
                    <input type="radio" name="value" value="" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="" class="selectgroup-input select-sidebar" checked>
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

      </div> <!-- Main Content -->
    
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


$(document).ready(function(){
  $("#add_email").hide();
  $("#smtp_instructios").hide();
  $("#office365_instructions").hide();

  $("#agriment_btn").click(function(){
    $("#agriment").hide();
    $("#add_email").show();
    $("#agriment_heading").html("Add a new Email ID");
  });
  
  $("select#account_type").change(function(){
    var account_type = $(this).children("option:selected").val();
    if(account_type == 'smtp')
    {
        $("#gmail_instructions").hide();
        $("#office365_instructions").hide();
        $("#smtp_instructios").show();   
    }
    else if(account_type == 'gmail')
    {
        $("#gmail_instructions").show();
        $("#smtp_instructios").hide();
        $("#office365_instructions").hide();
    }
    else if(account_type == 'office360')
    {
        $("#gmail_instructions").hide();
        $("#smtp_instructios").hide();
        $("#office365_instructions").show();
    }
  });
});
 
      
  $("#wormup_popup").hide();
  $("#campaign_popup").hide();
  $("#delete_popup").hide();
  $("#conferm_message").hide();
  $("#conferm_messages").hide();
  $("#email_id_popup").hide();
      
  $("#warmup_btn").click(function(){
    $("#Bulk_btns").hide();
    $("#wormup_config").show();
    $("#bulk_heading").html("Bulk Warmup Config on (1) IDs");
  });
    
  $("#email_ids").click(function(){
    $("#Bulk_btns").hide();
    $("#email_id_popup").show();
    $("#bulk_heading").html("Bulk Warmup Config on (1) IDs");
  });
          
  $("#option").click(function(){
    if($(this).is(":checked")){
      $("#conferm_message").show();
    }
    else if($(this).is(":not(:checked)")){
      $("#conferm_message").hide();
    }
  });
  
  $("#options").click(function(){
    if($(this).is(":checked")){
        $("#conferm_messages").show();
    }
    else if($(this).is(":not(:checked)")){
        $("#conferm_messages").hide();
    }
  });
  
  $("#campaign_btn").click(function(){
    $("#Bulk_btns").hide();
    $("#campaign_popup").show();
    $("#bulk_heading").html("Bulk Campaign Config on (1) IDs");
  });
   
  $("#warmup_close").click(function(){
    $("#Bulk_btns").show();
    $("#warmup_popup").hide();
    $("#bulk_heading").html("Bulk Action on (1) IDs");  
  });

  $("#email_id_close").click(function(){
    $("#Bulk_btns").show();
    $("#email_id_popup").hide();
    $("#bulk_heading").html("Bulk Action on (1) IDs");  
  });

  $("#campaign_close").click(function(){
    $("#Bulk_btns").show();
    $("#campaign_popup").hide();
    $("#bulk_heading").html("Bulk Action on (1) IDs");  
  });

  $("#delete_close").click(function(){
    $("#Bulk_btns").show();
    $("#delete_popup").hide();
    $("#bulk_heading").html("Bulk Action on (1) IDs");  
  });
  
  $(document).on("click","#checkbox-all", function(){
    if ($('#checkbox-all').prop("checked")) {    
        $("#bulk_btns").show();
        $("#bulk_email_btn").hide();
    }
    else{
      $("#bulk_btns").hide();
      $("#bulk_email_btn").show();
    }
  }) 
  
  $("#bulk_btns").hide();

  $(document).on("click",".checkboxs", function(){
    var $checkboxes = $('.custom-checkbox input[type="checkbox"]');
    
    $checkboxes.change(function(){
      var id = $checkboxes.filter(':checked').length;
      if(id >= 2){   
        $("#bulk_btns").show();
        $("#bulk_email_btn").hide();
      }
      else{          
        $("#bulk_btns").hide();
        $("#bulk_email_btn").show();
      }
    });
  }); // Select multiple rowa
  </script>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script> -->
  <script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/page/posts.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/chart-apexcharts.js"></script>
  <script src="assets/bundles/summernote/summernote-bs4.js"></script>

<script>
$(document).ready(function()
{

//+++++++++++++++++++++++++++ Fetch Data  +++++++++++++++++++++++++++++++++++++++ 

    load_data(); 
    function load_data(page, limits)  
    {  
        var action = "Load"; 
        $('#action').val("Insert");
        var limits = $('.form-control').val();
        $.ajax({  
                url:"Actions/Sender_Action.php",  
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

$('#user_form').on('submit', function(event)
 {  
      event.preventDefault();
      var sender_name = $('#sender_name').val(); 
      var sender_email = $('#sender_email').val();  
      var sender_account_type = $('select#account_type').val(); 
      var sender_app_password = $('#sender_app_password').val();
      var imap_host = $('#imap_host').val();
      var imap_port = $('#imap_port').val();
      var imap_username = $('#imap_username').val();
      var imap_password = $('#imap_password').val();
      var smtp_host = $('#smtp_host').val();
      var smtp_port = $('#smtp_port').val();
      var smtp_username = $('#smtp_username').val();
      var smtp_password = $('#smtp_password').val();
    
      setTimeout(() => { $('#error').fadeIn().html(''); }, 3000);
      setTimeout(() => { $('#success_message').fadeIn().html(''); }, 3000);
    
      if (sender_account_type == 'gmail'){
          if (sender_name == '') {
              $('#error').html("Sender Name Field is Empty");
          }
          else if(sender_email == ''){
              $('#error').html("Sender Email Field is Empty");
          }
          else if (sender_app_password == ''){
              $('#error').html("App Password Field is Empty ");
          }
          else{
              $('#save_data').attr("class", "btn btn-primary btn-progress");  
              $.ajax({  
                      url:"Actions/Sender_Action.php",  
                      method:"POST",  
                      data:new FormData(this),  
                      contentType:false,  
                      processData:false,  
                      success:function(data)
                         {  
                              $('.close').click();
                              if(data.status == 'insert') {
                                  swal("Congratulations","Data Inserted Successfully","success")
                                  .then((willDelete) => {
                                      if (willDelete) {
                                          $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                          $("#add_email").show()
                                      }
                                  })
                              }
                              else if(data.status == 'invalid'){
                                  swal('oops', 'You Enter Invalid Email.', 'error')
                                  .then((willDelete) => {
                                      if (willDelete) {
                                          $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                          $("#add_email").show()
                                      }
                                  })
                              }
                              else if(data.status == 'error'){
                                  swal('oops', data.value, 'error')
                                  .then((willDelete) => {
                                      if (willDelete) {
                                          $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                          $("#add_email").show()
                                      }
                                  })
                              }
                              else if(data.status == 'exist'){
                                  swal('oops', 'Email Already Exist', 'info')
                                  .then((willDelete) => {
                                      if (willDelete) {
                                          $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                          $("#add_email").show()
                                      }
                                  })
                              }
                              $('#user_form')[0].reset();
                              $('#action').val("Insert");
                              $('#save_data').val("Insert");  
                              $('#save_data').attr("class", "btn btn-primary");  
                              setTimeout(() => { $('#error').fadeIn().html(''); }, 3000);
                              load_data();
                              count_cards();  

                          },
                          error: function(xhr, status, error)
                             {
                                  alert("Error: " + xhr.responseText);
                              }

                    })  
          }
      }
      else if (sender_account_type == 'smtp') 
      {
          if (sender_name == '') {
              $('#error').html("Sender Name Field is Empty");
          }
          else if(sender_email == ''){
              $('#error').html("Sender Email Field is Empty");
          }
          else if (imap_host == ''){
              $('#error').html("IMAP Host Field is Empty ");
          }
          else if (imap_port == ''){
              $('#error').html("IMAP Port Field is Empty ");
          }
          else if (imap_username == ''){
              $('#error').html("IMAP Username Field is Empty ");
          }
          else if (imap_password == ''){
              $('#error').html("IMAP Password Field is Empty ");
          }
          else if (smtp_host == ''){
              $('#error').html("AMTP Host Field is Empty ");
          }
          else if (smtp_port == ''){
              $('#error').html("SMTP Port Field is Empty ");
          }
          else if (smtp_username == ''){
              $('#error').html("SMTP Username Field is Empty ");
          }
          else if (smtp_password == ''){
              $('#error').html("SMTP Password Field is Empty ");
          }
          else{
              $('#save_data').attr("class", "btn btn-primary btn-progress");  
              $.ajax({  
                      url:"Actions/Sender_Action.php",  
                      method:"POST",  
                      data:new FormData(this),  
                      contentType:false,  
                      processData:false,  
                      success:function(data)
                          { 
                              $('#success_message').fadeIn().html(data);
                              $('#user_form')[0].reset();
                              $('#action').val("Insert");
                              $('#save_data').val("Insert");
                              $('#save_data').attr("class", "btn btn-primary");  
                              $('#error').fadeIn().html('');
                              load_data(); 
                              count_cards();  

                          }
                    })  
              }
      }
      else if (sender_account_type == 'office360')
      {
     
      } 
  }); 

//+++++++++++++++++++++++++++ Update Data  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".Update_btn", function()
 {
      var user_id = $(this).attr('id');
      var action = "Fetch_Single_Data";
      $("#agriment").hide();
      $("#add_email").show();
      $.ajax({
              url:"Actions/Sender_Action.php",  
              method:"POST",  
              data:{user_id:user_id, action:action},  
              dataType:"json",  
              success : function(data)
                  {   
                      $('#sender_name').val(data.name); 
                      $('#sender_email').val(data.email);  
                      let account = data.account_type;
                    
                      $('.label').html(account);

                      $("#account_type").val(account);
                      if(account == 'gmail'){
                          $("#gmail_instructions").show();
                          $("#office365_instructions").hide();
                          $("#smtp_instructios").hide();
                      }
                      else if(account == "smtp" || account == "imap"){
                          $("#gmail_instructions").hide();
                          $("#office365_instructions").hide();
                          $("#smtp_instructios").show();
                      }
                      $('#sender_app_password').val(data.app_password);
                      $('#imap_host').val(data.imap_host);
                      $('#imap_port').val(data.imap_port);
                      $('#imap_username').val(data.imap_username);
                      $('#imap_password').val(data.imap_password);
                      $('#smtp_host').val(data.smtp_host);
                      $('#smtp_port').val(data.smtp_port);
                      $('#smtp_username').val(data.smtp_username);
                      $('#smtp_password').val(data.smtp_password);
                      $('#save_data').val("Edit");  
                      $('#action').val("Edit");
                      $('#user_id').val(user_id);  
                  }
            });              
  });
              
//+++++++++++++++++++++++++++  Single Update Worm up Cnfig  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".wormup_config", function(){
    var id = $(this).attr('id');
    var action = "Single_Wormup_Config";
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{user_id:id, action:action},  
            dataType:"json",  
            success : function(data)
                   {   
                      function warmup_time(warmup) { 
                          warmup = warmup.trim();   
                          const [hours, minutes, seconds] = warmup.split(':');  
                          const start_full_time = `${hours}:${minutes}`;  
                          return start_full_time;
                      }
                      $("#warmup_popup").show();
                      $('#start_time').attr('value', warmup_time(data.start_time));
                      $('#end_time').attr("value", warmup_time(data.end_time));
                      $('#email_code').val(data.email_code);
                      $('#max_email').val(data.max_email);
                      $('#max_reply').val(data.max_reply);
                      $('.label').html(data.time_zone);
                      let days = data.days;
                      if(days != ''){
                        for (let i = 0; i < data.days.length; i++) {
                          $('#' + data.days[i]).prop('checked', true);  
                        } 
                      }
                      const date = new Date(data.create_date);
                      const options = { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' };
                      const email_full_date = date.toLocaleDateString('en-GB', options);
                      $('#create_date').val(email_full_date);
                      const smtp_date = new Date();
                      const smtp_options = { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' };
                      const smtp_full_date = smtp_date.toLocaleDateString('en-GB', smtp_options);
                      $('#smtp_used').val(smtp_full_date);
                      $('#imap_used').val(smtp_full_date);
                      $('#wormup_save_data').val("Edit");  
                      $('#wormup_action').val("Edit");
                      $('#wormup_user_ids').val(id);    
                    }
    });
});

$('#wormup_form').on('submit', function(event){  
    event.preventDefault();
    var action = "Insert_Wormup_Config";
    let id = [];
    let ids = $('#wormup_user_ids').val(); 
    id.push(ids);
    $('table tr td input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
    });
    array_id = $.grep(id, function(value) {
      return value.trim() !== ""; 
    });
    var max_email  = $('#max_email').val(); 
    var max_reply  = $('#max_reply').val();  
    var start_time = $('#start_time').val(); 
    var end_time   = $('#end_time').val();
    var time_zone  = $('select#time_zone').val();
    var option = ($('.p-default input[name="check"]:checked').is(':checked')) ? '1' : '0';
    var days = [];
    $('.selectgroup-pills input[type="checkbox"]:checked').each(function() {
        days.push($(this).attr('id'));
    })
    if (days.length === 0) {
        days.push('0');
    }
    $(".modal-backdrop").attr('class', 'modal-backdrop fade');
    $("#ModalCenter").hide() 
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{action:action, id:array_id, max_email:max_email, max_reply:max_reply, start_time:start_time, end_time:end_time, time_zone:time_zone, days:days, option:option},  
            dataType:"json",  
            success : function(data)
                  {
                      if(data.status === 'success'){
                          $('#large_close').click();
                          swal('Good Job', 'wormup Update Successfully', 'success')
                              .then((willDelete) => {
                                  if (willDelete) {
                                      $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                      $("#ModalCenter").show()
                                  }
                               })   
                      }
                      else if(data.status == 'error'){
                          $('.close').click();
                          swal('Good Job', 'wormup Not Update', 'error') 
                              .then((willDelete) => {
                                  if (willDelete) {
                                      $('.wormup_config').click();
                                  }
                              })   
                      }
            }
     })
})

//+++++++++++++++++++++++++++  Campaign config Update   +++++++++++++++++++++++++++++++++++++++
$(document).on("click",".campaign_config", function() {
    let id = [];
    var ids = $(this).attr('id');
    id.push(ids);
    if (id.length === 1) {
        $("#bulk_heading").html("Campaign Config on ("+ id +") IDs");
    }
    else{
        $("#bulk_heading").html("Bulk Campaign Config on ("+ id.length +") IDs");
    }
    $("#Bulk_btns").hide();
    $("#campaign_close").hide();
    $("#campaign_popup").show();
    var action = "Single_Campaign_Config";
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{user_id:id, action:action},  
            dataType:"json",  
            success : function(data)
                  {   
                    $('#campaign_config').val(data.campaign_config);
                    $('#campaign_save_data').val("UPDATE");  
                    $('#campaign_user_ids').val(id);    
                  }
          })
})

$('#campaign_config_form').on('submit', function(event){  
    event.preventDefault();
    var action = "Insert_Campaign_Config";
    let id = [];
    let ids = $('#campaign_user_ids').val();  
    id.push(ids);
    $('table tr td input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
    });
    array_id = $.grep(id, function(value) {
      return value.trim() !== ""; 
    });
    let value = $('#campaign_config').val();
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{action:action, id:array_id, value:value},  
            dataType:"json",  
            success : function(data)
                    { 
                      if(data.status === 'success'){
                        $("#ModalCenter").hide();
                        $("#Bulk_btns").hide();
                        swal('Good Job', 'Selected Emails are Active', 'success')
                        .then((willDelete) => {
                             if (willDelete) {
                                if(array_id.length === 1){
                                  $('.close').click();
                                  load_data();
                                  $("#Bulk_btns").show();
                                  $("#campaign_popup").hide();
                                }
                                else{
                                  $("#Bulk_btns").show();
                                  $("#campaign_popup").hide();
                                  $("#ModalCenter").show(); 
                                  $("#campaign_close").show(); 
                                }
                            } 
                        })
                     }    
                   }
          })
  })

//+++++++++++++++++++++++++++  Email Signature Update   +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".update_email_signature", function(){
    var user_id = $(this).attr('id');
    var action = "Update_Email_Signature";
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{user_id:user_id, action:action},  
            dataType:"json",  
            success : function(data)
                   {   
                    $('.card-block').html(data.email_signature); 
                    $('.signature_update').attr("id", user_id);  
                    $('#email_title').html(data.email);  
                  }
    });
});
      
$('.signature_update').on("click", function(){
    var id = $(this).attr('id');
    let signature = $('.card-block').html();
    let action = "Update_Signature";
    $.ajax({
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{action:action, signature:signature, id:id},  
            dataType:"json",  
            success : function(data)
                   {   
                      $(".modal-backdrop").attr('class', 'modal fade');
                      $("#signature").hide()
                      if(data.status == 'success'){
                        swal('Good Job', 'Signature Update Successfully', 'success');
                      }
                      else if(data.status == 'error'){
                          swal('Good Job', 'Signature Not Update', 'error')
                              .then((willDelete) => {
                                  if (willDelete) {
                                      $(".modal-backdrop").attr('class', 'modal fade show');
                                      $("#signature").show()
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
            url: "Actions/Sender_Action.php",
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
      $(".modal-backdrop").attr('class', 'modal-backdrop fade');
      $("#ModalCenter").hide()
    });
    $.ajax({
            url : "Actions/Sender_Action.php",
            type : "POST",
            data : {action:action, id : id},
            success : function(data)
                  {
                    if(data.status == 'success') {
                        swal('Good Job', 'Selected Emails are Active ss', 'success')
                            .then((willDelete) => {
                                if (willDelete) {
                                    $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                    $("#ModalCenter").show();
                                } 
                            })
                    }
                    else if(data.status == 'error'){
                        swal('opps', 'Some Thing Wents Wrong', 'error')
                            .then((willDelete) => {
                                if (willDelete) {
                                    $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                    $("#ModalCenter").show()
                                } 
                            }) 
                    }
                    count_cards();  
            }
    });
});
            
//+++++++++++++++++++++++++++ Deactive Multipule Rows  +++++++++++++++++++++++++++++++++++++++

$("#Bulk_deactive").on("click",function(){
    var action = "Bulk_deactive";
    var id = [];
    $('input[name="checkbox[]"]:checked').each(function() {
      id.push($(this).attr('id'));
      $(".modal-backdrop").attr('class', 'modal-backdrop fade');
      $("#ModalCenter").hide()
    });
    $.ajax({
            url : "Actions/Sender_Action.php",
            type : "POST",
            data : {action:action, id : id},
            success : function(data)
                 {
                    if(data.status == 'success') {
                        swal('Good Job', 'Selected Emails are Inactive', 'success')
                            .then((willDelete) => {
                                if (willDelete) {
                                    $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                    $("#ModalCenter").show()
                                } 
                            })
                    }
                    else if(data.status == 'error') {
                        swal('opps', 'Some Thing Wents Wrong', 'error')
                            .then((willDelete) => {
                                if (willDelete) {
                                    $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                                    $("#ModalCenter").show()
                                } 
                            }) 
                    }
                    count_cards(); 
            }
    });
});
            
//+++++++++++++++++++++++++++ Select Multipule Rows  +++++++++++++++++++++++++++++++++++++++

$(document).on("change", "#checkbox-all", function() {
  $('.checkboxs').prop('checked', $(this).prop('checked'));
  if ($(this).is(':checked')) {
    $('#bulk_email_btn').hide();
    $('#bulk_btns').show();
  } else {
    $('#bulk_email_btn').show();
    $('#bulk_btns').hide();
  }
});




// $(document).on("click","#checkbox-all", function(){
//     if($('#checkbox-all').prop("checked")) {
//         $('table tr td input[type=checkbox]').each(function(){
//           $('#' + this.id).prop('checked', true);

//         })
//     }
//     else
//     {
//         $('table tr td input[type=checkbox]').each(function(){
//             $('#' + this.id).prop('checked', false);
//         })
//     }
// }) 

//+++++++++++++++++++++++++++ Delete Single Row  +++++++++++++++++++++++++++++++++++++++

$(document).on("click",".delete_single", function(){
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
                          url : "Actions/Sender_Action.php",
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
    if(id.length === 0){
        $(".modal-backdrop").attr('class', 'modal-backdrop fade');
        $("#ModalCenter").hide()
        swal ( "Oops" ,  "Please Select atleast one checkbox." ,  "error" );
    }
    else if(id.length > 1 || id.length === 1) {
        $(".modal-backdrop").attr('class', 'modal-backdrop fade');
        $("#ModalCenter").hide()
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
                        url : "Actions/Sender_Action.php",
                        type : "POST",
                        data : {action:action, id : id},
                        success : function(data)
                              {
                                  load_data(); 
                                  count_cards();  
                              }
                });
                swal("Deleted!","Your imaginary file has been deleted!","success")
                  .then((willDelete) => {
                      if (willDelete) {
                          $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                          $("#ModalCenter").show()
                      } 
                  })
            } 
            else{
                swal("Not Deleted!", "Your imaginary file is safe!", "success")
                    .then((willDelete) => {
                        if (willDelete) {
                            $(".modal-backdrop").attr('class', 'modal-backdrop fade show');
                            $("#ModalCenter").show()
                        }     
                    })  
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
                url:"Actions/Sender_Action.php",
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

//+++++++++++++++++++++++++++ DNS Validate  +++++++++++++++++++++++++++++++++++++++

$("#validate_dns").on("click", function() {
    swal('Validate DNS', 'We validate DMARC record for "quarantine / reject" only.', 'info');
    var action = "DNS_Validate"; 
    $.ajax({  
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:{action:action},  
            success: function(data) 
                 {
                    if(data.status == 'success'){
                        swal(data.domain, 'Domain has valid SPF and DMARC records','success');
                    }
                    else if(data.status == 'error'){
                        swal(data.domain, 'Domain does not have valid SPF and/or\n DMARC records', 'error');
                    }
                  }
    });  
})

//+++++++++++++++++++++++++++ Bulk Emails Entry Form  +++++++++++++++++++++++++++++++++++++++

$('#email_id_form').on("submit", function(e) {  
    e.preventDefault();         
    $.ajax({  
            url:"Actions/Sender_Action.php",  
            method:"POST",  
            data:new FormData(this),  
            contentType:false,            
            cache:false,                 
            processData:false,          
            success: function(data)
                 {   
                    load_data();  
                    count_cards();  
                    if(data.status == 'success') {
                        $('#email_id_form')[0].reset();
                        $("#file_name, #file_size").html('');
                        $("#file_icon").attr('src', 'assets/img/cloud-computing.png');
                        $('#email_close_btn').click();
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
            }
    })  
});  

//+++++++++++++++++++++++++++ Reset Form  +++++++++++++++++++++++++++++++++++++++

$(".close").on("click", function(){
    $('#user_form')[0].reset();
    $('#action').val("Insert");
    $('#save_data').val("Insert");  
    let account = $('#account_type').val();  
    if(account == 'gmail'){
        $("#gmail_instructions").show();
        $("#office365_instructions").hide();
        $("#smtp_instructios").hide();
    }
    else if(account == "smtp") {
        $("#gmail_instructions").hide();
        $("#office365_instructions").hide();
        $("#smtp_instructios").show();
    }
})

$("#close_btn").on("click", function(){
    load_data();
    $("#bulk_btns").hide();
    $("#bulk_email_btn").show();
    $('#wormup_form')[0].reset();
})

$("#ModalCenter").on("click", function(){   
    $('#wormup_form')[0].reset();
    setTimeout(() => { 
      let id = $(".modal-backdrop").attr('class');
      if(id == undefined){
          load_data();
          $("#bulk_btns").hide();
          $("#bulk_email_btn").show();
      }
    }, 500);
})

//+++++++++++++++++++++++++++ Top Card  +++++++++++++++++++++++++++++++++++++++

count_cards();  
function count_cards() {  
    var action = "count";  
    $.ajax({  
            url:"Actions/Sender_Action.php",  
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
<script>
        let btn = document.getElementById("image_pre");
        let images = document.getElementById("avator_image");
        btn.onchange = function(){
        images.src = URL.createObjectURL(btn.files[0]);
        }
</script>
<script>
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

</script>
</body>
</html>