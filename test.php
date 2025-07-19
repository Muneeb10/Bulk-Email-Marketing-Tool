<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Step Addition with Summernote</title>
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
</head>
<body>
    <div class="row">
        <!-- Step addition section -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-left: 0px;">
            <div class="card" style="box-shadow: none;">
                <div class="body">
                    <div id="plist" class="people-list" style="padding: 0px 10px 0px 0px; height: 500px; overflow-y: auto;">
                        <div class="m-b-20" style="overflow-y: auto;">
                            <div>
                                <div id="sequence_outer" style="width: 100%;">
                                    <!-- Existing sequence box -->
                                    <div class="sequence_box">
                                        <div class="sequence_heading">
                                            <span>Step - 1</span>
                                            <span style="display: flex; align-items: center;">
                                                <i id="" class="icons fi fi-rr-trash"></i>
                                                <i id="" class="icons fi fi-rr-paper-plane"></i>
                                            </span>
                                        </div>
                                        <div id="add" class="sequence_add add1">
                                            <div style="padding: 5px 0px; display: flex; justify-content: space-between;"> 
                                                <span id="subject_retrives">Enter Subject</span>
                                                <span style="display: flex; align-items: center;">
                                                    <i id="1" class="icons add_step fi fi-rr-add"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>   
                                    <!-- End of existing sequence box -->  
                                </div>
                                <div style="width: 100%; display: flex; justify-content: center;">
                                    <button type="button" onclick="addStep()" class="btn btn-primary" style="align-items: center; width: 150px">Add Step</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email composition section -->
        <div id="email_form" class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
            <div style="display: flex; justify-content: center; flex-direction: column; padding-right: 20px;">
                <div class="form-group row">
                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Subject</label>
                    <div class="col-sm-12 col-md-10" style="width: 100%;">
                        <input type="text" class="subject_value_1 form-control" id="subject_value_1">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Pre Header</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Body</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea id="email_body" class="summernote"></textarea>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <script src="assets/bundles/summernote/summernote-bs4.js"></script>
    <script>
        // Function to add a new step dynamically
        function addStep() {
            var currentStep = document.querySelectorAll('.sequence_box').length + 1;
            var newStep = document.createElement('div');
            newStep.classList.add('sequence_box');
            newStep.innerHTML = `
                <div class="sequence_heading">
                    <span>Step - ${currentStep}</span>
                    <span style="display: flex; align-items: center;">
                        <i id="" class="icons fi fi-rr-trash"></i>
                        <i id="" class="icons fi fi-rr-paper-plane"></i>
                    </span>
                </div>
                <div class="sequence_add add${currentStep}">
                    <div style="padding: 5px 0px; display: flex; justify-content: space-between;"> 
                        <span id="subject_retrives">Enter Subject</span>
                        <span style="display: flex; align-items: center;">
                            <i id="${currentStep}" class="icons add_step fi fi-rr-add"></i>
                        </span>
                    </div>
                </div>
            `;
            document.getElementById('sequence_outer').appendChild(newStep);
        }

        // Initialize Summernote
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
</body>
</html>
