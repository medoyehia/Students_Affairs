<?php
    session_start();
    $noNavbar='';
    $navSider='';
    $pageTitle='Request_page';
    if(isset($_SESSION['username'])) 
    {
        
         include 'init.php';
        
        $do=isset($_GET['do'])?$_GET['do']:'Manage';
        ///////////////////////////////////////////////////// Show All Requests ///////////////////////////////////////////////// 
        if($do == 'Manage'){
          $query="SELECT request.*,student.Student_Name,student.Student_Code,levels.Level_Name,level_department.Department_Name,wish_statment.Wish_Name,services.Filename
            FROM request
            INNER JOIN
            student
            ON
            student.Student_ID=request.Request_Student_ID
            INNER JOIN
            levels
            ON
            levels.Level_ID=request.Request_Level_ID
            INNER JOIN
            level_department
            ON
            level_department.Department_ID=request.Request_Dept_ID
            INNER JOIN
            wish_statment
            ON
            wish_statment.Wish_ID=request.Request_Wish_ID
            INNER JOIN
            services
            ON
            services.ID=request.Request_Classification
            WHERE
            request.Request_Status=0";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("errror");
            }
      ?>
   <br>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4" style="font-family: serif; color:#08526d">Control panel</h1>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered" style="width:100%">
                            <thead class="main-table ">
                                <tr>
                                  <td>Student Name</td>
                                  <td>Studen Code</td>
                                  <td>Level Name</td>
                                  <td>Department Name</td>
                                  <td>Wish Name </td>
                                  <td>Division</td>

                                    <td width="30%">Action </td>

                                </tr>
                                </thead>
                                <?php
                                while($row=mysqli_fetch_array($result))
                                {
                                echo '<tr>'; 
                                echo '<td>'.$row['Student_Name'].'</td>';
                                echo '<td>'.$row['Student_Code'].'</td>';
                                echo '<td>'.$row['Level_Name'].'</td>';
                                echo '<td>'.$row['Department_Name']. '</td>';
                                echo '<td>'.$row['Wish_Name']. '</td>';
                                echo '<td>'.$row['Request_Division'].' </td>';

                                echo '<td> 
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myReplay'.$row['Request_ID'].'"><i class="fa fa-reply-all"></i> Reply</button>

                                    <a href="Requests.php?do=Delete&Request_ID='.$row['Request_ID'].' " class="btn btn-danger confirm">
                                    <i class="fa fa-user-times"></i>
                                   Delete
                                    </a>

                                   <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#myModal'.$row['Request_ID'].'"><i class="fa fa-eye"></i> View</button>
                                    </td>';
                                echo '</tr>'; 

                                    ?>

                    <div class="modal fade" id="myModal<?php echo $row['Request_ID'] ?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header colcard">
                                    <h5 class="modal-title text-white">Request detailes</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row display">
                                            <div class="col-md-3">
                                                <!--<img src="teacher_image/'.$row["teacher_image"].'" class="img-thumbnail" />-->
                                                <img src="i.jpg" width="150" height="170">
                                            </div>

                                            <div class="col col-sm-9">
                                              <div class="row content">
                                                  <div class="col col-sm-4 text-info">Name <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Student_Name']; ?></div>
                                              </div>
                                              <div class="row content">
                                                  <div class="col col-sm-4 text-info">Email <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Requester_Email']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Level <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Level_Name']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Department <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Department_Name']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Statment <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Wish_Name']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Division <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Request_Division']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Request <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Filename']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info ">Request Other Title <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-5 ">: <?php echo $row['Request_Other_Title']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Request Priority <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-3 ">: <?php echo $row['Request_Priority']; ?></div>
                                              </div>
                                                <div class="row content">
                                                  <div class="col col-sm-4 text-info">Position Recruitment : <strong class="text-danger">*</strong></div>
                                                  <div class="col col-sm-3 ">: <?php echo $row['Position_Recruitment']; ?></div>
                                              </div>
                                             </div>
                                         </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                          </div>
        <!----------------------------------------------------------------Rplay--------------------------------------------------------->
                       <div id="myReplay<?php echo $row['Request_ID'] ?>" class="modal fade bd-example-modal-lg" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header colcard">
                                         <h5 class="modal-title text-white">Reply</h5>
                                         <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                     <div class="container">
                                         <form action="?do=Response" method="post" id="comment_form" enctype="multipart/form-data">
                                             <input type="hidden" name="rid" value="<?php echo $row['Request_ID'] ?>">
                                             <input type="hidden" name="requestcode" value="<?php echo $row['Request_Code'] ?>">
                                         <div class="row">
                                             <div class="col col-sm-12">
                                                 <input type="text" name="name" id="name" class="form-control input"  placeholder="Enter Your Title" required="required">
                                             </div>
                                         </div><br>
                                         <div class="row">
                                            <div class="col col-sm-12">
                                             <textarea name="message" id="message" class="form-control input" rows="5" placeholder="Enter Your Message"></textarea>
                                            </div>
                                         </div>
                                         <br>
                                        <div class="row">
                                            &nbsp; &nbsp; 
                                            <div class="col col-sm-11">
                                                 <input type="file" name="image" class="custom-file-input" id="customFile">
                                                 <label class="custom-file-label" for="customFile">CHOOSE_IMAGE</label>
                                             </div>
                                        </div>
                                         <br>
                                           <div class="row">
                                            <div class="col col-sm-12">
                                            <button type="submit" name="post" id="post" class="btn btn-info col-sm-12 center-block"><i class="fas fa-reply-all"></i>
                                                Replay    
                                            </button>                               
                                            </div>
                                        </div>
                                         </form>
                                    </div>
                                </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                            </table>
                        </div>
                    </div>
    </main>
</div>


      <?php  ///////////////////////////////////////////////////// ADD Requests /////////////////////////////////////////////////////
       }elseif($do == 'Add') {?>
            <div class="container" > 
            <h1 class="text-center">Insert Request</h1>
            <form action="?do=Insert" method="post" enctype="multipart/form-data">
                <input type="hidden" name="sid" value="<?php echo $_SESSION['Student_ID']; ?>" >
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Note:</strong> Please Check The Payment Of Tuition Fees To Complete The Process Successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                
                <!-- Start Row One -->
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <input type="text" id="name" class="form-control input"  placeholder="Enter Your Name" required="required">
                      <span id="nameMeg"></span>
                    </div>
                    <div class="form-group col-md-4">
                       <input type="Text" name="scode" id="scode" class="form-control input " autocomplete="off" placeholder="Enter Your Student Code" required="required">
                       <span id="scodeMeg"></span>
                    </div>
                    <div class="form-group col-md-4">
                       <input type="email" name="email" id="email" class="form-control input" autocomplete="off" placeholder="Enter Your Email @eample.com" required="required">
                       <span id="emailMeg"></span>
                    </div>
                </div>
                <!-- End Row One -->
                <?php
                $level = '';
                $query = "SELECT Level_Name,Level_ID FROM levels GROUP BY Level_Name ORDER BY Level_ID ASC";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($result))
                {
                 $level .= '<option value="'.$row["Level_ID"].'">'.$row["Level_Name"].'</option>';
                }
                ?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <select name="Level" id="Level" class="form-control action">
                          <option><?php echo lang('S_LEVELS') ?></option>
                          <?php echo $level; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                       <select name="Department" id="Department" class="form-control action">
                        <option value="">Select Department</option>
                       </select>
                    </div>
                    <div class="form-group col-md-2">
                       <select name="Wish" id="Wish" class="form-control">
                        <option value="">Select Division</option>
                       </select>
                    </div>
                    <div class="form-group col-md-2">
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-info active">
                            <input type="radio" name="option" value="انتظام" id="option1" checked> انتظام
                          </label>
                          <label class="btn btn-info">
                            <input type="radio" name="option" value="انتساب" id="option2"> انتساب
                          </label>
                        </div>
                    </div>
                </div>
                <!-- End Row Tow -->
                <?php
                $service = '';
                $query = "SELECT Filename,ID FROM services GROUP BY Filename ORDER BY ID ASC";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($result))
                {
                 $service .= '<option value="'.$row["ID"].'">'.$row["Filename"].'</option>';
                }
            
                ?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <select name="f" id="classic" class="form-control">
                          <option>Select Request</option>
                          <?php echo $service; ?>
                          <option value="20">شئ اخر</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                       <input type="text" name="title" id="title" class="form-control" placeholder="Enter Titl Request">
                    </div>
                    <div class="form-group col-md-4">
                        <select name="priority" id="classic" class="form-control">
                          <option value="">Select Priority</option>
                        <option class="text-danger" value="High">High</option>
                        <option class="text-warning" value="Medium">Medium</option>
                        <option class="text-success" value="Normal">Normal</option>
                        <option class="text-body" value="Low">Low</option>
                      </select>
                    </div>
                </div>
                <div class="form-row" id="add_fields_placeholderValue">
                    <div class="form-group col-md-4" >
                        <input type="text" class="form-control" placeholder="Enter The Orgainzation" name="organization" id="add_fields_placeholderValue">
                    </div>
                     <div class="form-group col-md-4" > 
                        <a class="btn btn-info" target="_blank" href="service.php?do=ManageStudent">Download the Files Requred</a>
                    </div>
                   <div class="form-group col-md-4" >  
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-info active">
                            <input type="radio" name="options" value="مؤجل" id="option1" checked> مؤجل
                          </label>
                          <label class="btn btn-info">
                            <input type="radio" name="options" value="غير مؤجل" id="option2"> غير مؤجل
                          </label>
                          <label class="btn btn-info">
                            <input type="radio" name="options" value="اعفاء" id="option3"> اعفاء
                          </label>
                        </div>
                    </div>
                   
                </div>
                <!-- End Row Three -->
                <div class="form-row">
                     <div class="form-group col-md-12">
                        <textarea name="body" class="form-control" rows="3" placeholder="Enter The Description"></textarea>
                    </div>
                </div>
                <!-- End Row Four -->
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <button type="button" class="btn btn-danger col-md-12 center-block showf" >
                            <i class="fa fa-plus-square"></i> 
                        </button>
                    </div>
                    <div class="form-group col-md-3">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile"><?php echo lang('CHOOSE_IMAGE') ?></label>
                    </div>
                    <div class="form-group col-md-4" name="showf" id="showf">
                      <input type="file" name="oimage" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile"><?php echo lang('CHOOSE_IMAGE') ?></label>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" name="request_code" class="form-control text-center text-danger" value="<?php echo rand(0, getrandmax());?>" readonly />
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                     <span id="conditionMsg"></span>
                        <span id="GmMsg"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-info col-md-6 center-block"><i class="fas fa-paper-plane"></i> Send Request</button>
                </div>
                <br>
            </form>
                
         
            
        <?php ///////////////////////////////////////////////////// Insert Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Insert') {
            
              //Insert New Staff
           // echo $_POST['username']. $_POST['password'] .$_POST['email'] .$_POST['admin'] .$_POST['fun'];
            
    echo '<div class="container" > ';

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
             echo"<h1 class='text-center'>Insert Staff</h1>";
            //Get Variable from Form
            $Request_Student_ID= $_POST['sid'];
            $Request_Student_Code=$_POST['scode'];
            $Requester_Email= $_POST['email'];
            $Request_Level_ID= $_POST['Level'];
            $Request_Dept_ID= $_POST['Department'];
            $Request_Wish_ID= $_POST['Wish'];
            $Request_Division= $_POST['option'];
            $Request_Classification = $_POST['f'];
            $Request_Other_Title= $_POST['title'];
            $Request_Priority= $_POST['priority'];
            $Request_Organization= $_POST['organization'];
            $Position_Recruitment= $_POST['options'];
            $Request_Body= $_POST['body'];
            $Request_Code= $_POST['request_code'];
            
            //Upload image
            $ImageName = $_FILES['image']['name'];
            $ImageSize = $_FILES['image']['size'];
            $ImageTmp  =  $_FILES['image']['tmp_name'];
            $ImageType = $_FILES['image']['type'];
            //List Of Allowed Type To Upload
            $imageAllowedExtension=array("jpeg","png","jpg","gif");
            //Get Image Extension
            $imageExtension=strtolower(end(explode('.',$ImageName)));
            //Validate The Form 
            $FormErrors=array();

            /*if(strlen($Username)< 4 || strlen($Username) >20 ){
                $FormErrors[]=
                    'UserName Not Can Less Than <strong> 4 Characters</strong> And Greater Than <strong> 20 Characters</strong> ';
            }
            if(empty($Username) ||empty($Email) || empty($Phone) || empty($Type) || empty($PassSSN) || empty($ImageName) )
            {
                $FormErrors[]='All Filed Required';
            }*/
            if(!empty($ImageName) && !in_array($imageExtension,$imageAllowedExtension)){
                $FormErrors[]='This Extension Not <strong>Allowed</strong>';
            }
            if($ImageSize > 4194304){
                $FormErrors[]='Size of Image Not Procced <strong>4MB</strong>';
            }
            /*if(strlen($PassSSN) != 14){
                $FormErrors[]='Enter The SSN that Consist From <strong>14 Numbers</strong>';
            }*/


            foreach($FormErrors as $error){
                echo'<div class="alert alert-danger">' .$error .'</div>';
            }
            //Chech If There's No Error Proceed The Update Operation
            if(empty($FormErrors)){
                $Request_Image= rand(0,100000000).'_'.$ImageName;
               move_uploaded_file($ImageTmp,"Upload\\".$Request_Image);
                //Insert The DB Whith This Info
                $query="
                INSERT INTO 
                    request
                    (Request_Student_ID,Request_Student_Code,Requester_Email,Request_Level_ID,Request_Dept_ID,Request_Wish_ID,Request_Division,
                    Request_Classification,Request_Other_Title,Request_Priority,Request_Organization,Position_Recruitment,Request_Body,
                    Request_Image,Request_Code,Request_Date
                    ) 
                VALUES
                    ('".$Request_Student_ID."','".$Request_Student_Code."','".$Requester_Email."','".$Request_Level_ID."','".$Request_Dept_ID."','".$Request_Wish_ID."',
                    '".$Request_Division."','".$Request_Classification."','".$Request_Other_Title."', '".$Request_Priority."',
                    '".$Request_Organization."','".$Position_Recruitment."','".$Request_Body."','".$Request_Image."','".$Request_Code."' ,now())";
                
                $result=mysqli_query($connection,$query);
                if(!empty($result)){
                    $last_id=mysqli_insert_id($connection);
                    $q = "insert into tests(sid) values('".$last_id."')";
                    $r=mysqli_query($connection,$q);
                    $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >Data is Inserted</div>';
                    redirectHome($theMsg,'back');

                    }
           }
        }else
        {
         echo '<div class="container">';
            $theMsg= '<div class="alert alert-danger">Sorry You Not Can Brows This Page Direct</div>';
            redirectHome($theMsg,'back');
         echo '</div>';

        }
        /*End Class Container */
    echo '</dive>'; 
        ///////////////////////////////////////////////////// Edit Requests ////////////////////////////////////////////////////
        }elseif($do == 'Edit') {
        ///////////////////////////////////////////////////// Update Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Update') {
        
        ///////////////////////////////////////////////////// Delete Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Delete') {
             echo '<h1 class="text-center">Delete Page</h1>';
                    echo '<div class="container" > ';
                    
                    $Request_Id=isset($_GET['Request_ID']) && is_numeric($_GET['Request_ID'])?intval($_GET['Request_ID']) : 0;


                  
                    $check=checkItem("Request_ID","request",$Request_Id);

                   
                    if($check > 0)
                    {
                           $query="DELETE FROM request WHERE Request_ID='".$Request_Id."' "; 
                             $result=mysqli_query($connection,$query);
                            if(!empty($result))
                                $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >This Request Is Deleted </div>';
                                redirectHome($theMsg,'back');


                    }else{
                        $theMsg='<div class="alert alert-danger">this id is not exist</div>';
                        redirectHome($theMsg);

                    }
        
                echo '</div>';
        ///////////////////////////////////////////////////// Activate Requests In DataBase //////////////////////////////////////    
        }elseif($do == 'ResponseManage') {
             $query="SELECT
             student.Student_Name,services.Filename,respons_to_request.Requester_Replay,respons_to_request.Requester_message,respons_to_request.Date
             FROM respons_to_request
             INNER JOIN
             student    
             ON
             student.Student_SSN=respons_to_request.Respons_Staff_SSN
             INNER JOIN
             request
             ON
             request.Request_ID=respons_to_request.Respons_Request_ID
             INNER JOIN
             services
             ON
             services.ID=request.Request_Classification
             WHERE respons_to_request.status=1 ";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("errror");
            }
                ?>
                <br>    
                <div class="container">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead class="main-table ">
                                <tr>
                                    <td>Staff Name</td>
                                    <td>Request Name</td>
                                    <td>Resonse Title</td>
                                    <td>Resonse Message</td>
                                    <td>Date</td>
                                    

                                </tr>
                            </thead>
                            <?php
            while($row=mysqli_fetch_array($result))
                {
                echo '<tr>'; 
                echo '<td>'.$row['Student_Name'].'</td>';
                echo '<td>'.$row['Filename'].'</td>';
                echo '<td>'.$row['Requester_Replay'].'</td>';
                echo '<td>'.$row['Requester_message']. '</td>';
                echo '<td>'.$row['Date']. '</td>';
                echo '</tr>'; 
            }
                           
        ///////////////////////////////////////////////////// Response Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Response') {
             if($_SERVER['REQUEST_METHOD']=='POST')
        {
             echo"<h1 class='text-center'>Insert Replay</h1>";
            $Requester_Replay=mysqli_real_escape_string($connection, $_POST['name']);
            $Requester_message = mysqli_real_escape_string($connection, $_POST["message"]);
            $Respons_Request_ID= $_POST['rid'];
            $Response_Request_Code= $_POST['requestcode'];
            //$Respons_Staff_SSN= $_POST['body'];
            
            
            //Upload image
            $ImageName = $_FILES['image']['name'];
            $ImageSize = $_FILES['image']['size'];
            $ImageTmp  =  $_FILES['image']['tmp_name'];
            $ImageType = $_FILES['image']['type'];
            //List Of Allowed Type To Upload
            $imageAllowedExtension=array("jpeg","png","jpg","gif");
            //Get Image Extension
            $imageExtension=strtolower(end(explode('.',$ImageName)));
            //Validate The Form 
            $FormErrors=array();

            /*if(strlen($Username)< 4 || strlen($Username) >20 ){
                $FormErrors[]=
                    'UserName Not Can Less Than <strong> 4 Characters</strong> And Greater Than <strong> 20 Characters</strong> ';
            }
            if(empty($Username) ||empty($Email) || empty($Phone) || empty($Type) || empty($PassSSN) || empty($ImageName) )
            {
                $FormErrors[]='All Filed Required';
            }*/
            if(!empty($ImageName) && !in_array($imageExtension,$imageAllowedExtension)){
                $FormErrors[]='This Extension Not <strong>Allowed</strong>';
            }
            if($ImageSize > 4194304){
                $FormErrors[]='Size of Image Not Procced <strong>4MB</strong>';
            }
            /*if(strlen($PassSSN) != 14){
                $FormErrors[]='Enter The SSN that Consist From <strong>14 Numbers</strong>';
            }*/


            foreach($FormErrors as $error){
                echo'<div class="alert alert-danger">' .$error .'</div>';
            }
            //Chech If There's No Error Proceed The Update Operation
            if(empty($FormErrors)){
                $Request_Image= rand(0,100000000).'_'.$ImageName;
               move_uploaded_file($ImageTmp,"Upload\\".$Request_Image);
                //Insert The DB Whith This Info
                $query="
                INSERT INTO 
                    respons_to_request
                    (Requester_Replay,Requester_message,Request_Image,Respons_Request_ID,Respons_Staff_SSN,Response_Request_Code,Date,status) 
                VALUES
                    ('".$Requester_Replay."','".$Requester_message."','".$Request_Image."', '".$Respons_Request_ID."','".$_SESSION['Student_SSN']."','".$Response_Request_Code."',now(),1)";
                
                $result=mysqli_query($connection,$query);
                if(!empty($result)){
                    $q ="UPDATE 
                        request
                        SET 
                        Request_Status     = 1
                        Where Request_ID='".$Respons_Request_ID."' ";
                    
                    $r=mysqli_query($connection,$q);
                    $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >Data is Inserted</div>';
                    redirectHome($theMsg,'back');

                    }
           }
        }else
        {
         echo '<div class="container">';
            $theMsg= '<div class="alert alert-danger">Sorry You Not Can Brows This Page Direct</div>';
            redirectHome($theMsg,'back');
         echo '</div>';

        }
        }
    
        /*End Class Container */
    echo '</dive>'; 
        
        
        include $tpl.'footer.php';
        
    }else {
        
        header('location:index.php');
        exit();
        
    }
 ?>
                    