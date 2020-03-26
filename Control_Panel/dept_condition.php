<?php
    session_start();
    $noNavbar='';
    $navSider='';
    $pageTitle='Services_page';
    if(isset($_SESSION['username'])) 
    {
        
         include 'init.php';
        
        $do=isset($_GET['do'])?$_GET['do']:'Manage';
        if($do == 'Manage'){
        
            
            $query="Select * From level_department";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("errror");
            }
        ?>
<div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <br>
                <h1 class="mt-4" style="font-family: serif; color:#08526d">Department Condition</h1>
                <div class="table-responsive">
                   <table id="example" class="table table-bordered" style="width:100%">
                       <thead class="main-table ">
                        <tr>
                            <td >Department Name</td>
                            <td >Department Title</td>
                            <td width="55%" >Department_Description</td>
                            <td width="20%">Action </td>

                        </tr>
                       </thead>
                       <?php
            while($row=mysqli_fetch_array($result))
            {
                echo '<tr>'; 
                echo '<td>'.$row['Department_Name'].'</td>';
                echo '<td>'.$row['Department_Title'].'</td>';
                echo '<td>'.$row['Department_Description'].'</td>';
                echo '<td> 
                
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal'.$row['Department_ID'].'"><i class="fa fa-edit"></i> Edit</button>

                <a href="dept_condition.php?do=Delete&Department_ID='.$row['Department_ID'].' " class="btn btn-danger confirm">
                <i class="fa fa-user-times"></i>
                Delete
                </a>';
                echo'</td>';
                echo '</tr>'; 
                       ?>
                         <div id="myModal<?php echo $row['Department_ID'] ?>" class="modal fade bd-example-modal-lg" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header colcard">
                                         <h5 class="modal-title text-white">Edit department</h5>
                                         <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="container">
                                    <div class="modal-body">
                                        <form action="?do=Update" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="Dept_id" value="<?php echo $row['Department_ID'] ?>">
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="text" name="Dept_name" id="name" class="form-control input"  value="<?php echo $row['Department_Name']?>">
                                                <span id="nameMeg"></span>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="text" name="Dept_title" id="title" class="form-control input"  value="<?php echo $row['Department_Title']?>">
                                                <span id="titleMeg"></span>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <textarea name="Dept_description" id="body" class="form-control input" rows="6" ><?php echo $row['Department_Description']?></textarea>
                                                <span id="bodyMeg"></span>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <select name="Dept_level_id" id="Level" class="form-control action">
                                                    <option value="0">Select Level</option>
                                                    <option value="1">First Level</option>
                                                    <option value="2">Second Level</option>
                                                    <option value="3">Third Level</option>
                                                    <option value="4">Fourth Level</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile"><?php echo lang('CHOOSE_IMAGE') ?></label>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-info col-md-12 center-block"><i class="fas fa-file"></i> Add Department</button>       
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


<?php }elseif($do == 'Add') {?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <form action="?do=Insert" method="post" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-header text-center colcard" style="font-size:25px;">
                                    Enter The New Deparment  
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="text" name="Dept_name" id="name"  class="form-control input"  placeholder="Enter your department name" >
                                            <span id="nameMeg"></span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" name="Dept_title" id="title" class="form-control input"  placeholder="Enter your department Title" >
                                            <span id="titleMeg"></span>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea name="Dept_description" id="body" class="form-control input" rows="6" placeholder="Enter The Description"></textarea>
                                            <span id="bodyMeg"></span>
                                        </div>
                                        <?php
                                           $level = '';
                                           $query = "SELECT Level_Name,Level_ID FROM levels GROUP BY Level_Name ORDER BY Level_ID ASC";
                                           $result = mysqli_query($connection, $query);
                                           while($row = mysqli_fetch_array($result))
                                           {
                                               $level .= '<option value="'.$row["Level_ID"].'">'.$row["Level_Name"].'</option>';
                                           }
                                        ?>
                                        <div class="form-group col-md-12">
                                            <select name="Dept_level_id" id="Level" class="form-control action">
                                                <option><?php echo lang('S_LEVELS') ?></option>
                                                <?php echo $level; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile"><?php echo lang('CHOOSE_IMAGE') ?></label>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-info col-md-12 center-block"><i class="fas fa-file"></i> Add Department</button>       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </main>
    </div>
        <?php  ///////////////////////////////////////////////////// Insert Requests In DataBase //////////////////////////////////////
      }elseif($do == 'Insert') {
            echo '<div class="container" > ';

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            echo"<h1 class='text-center'>Insert File</h1>";
              
            $Department_Name                = $_POST['Dept_name'];
            $Department_Title               = $_POST['Dept_title'];
            $Department_Description         = $_POST['Dept_description'];
            $Department_Level_ID            = $_POST['Dept_level_id'];
                
            $ImageName = $_FILES['image']['name'];
            $ImageSize = $_FILES['image']['size'];
            $ImageTmp  =  $_FILES['image']['tmp_name'];
            $ImageType = $_FILES['image']['type'];

            $imageAllowedExtension=array("jpeg","png","jpg","gif");

            $imageExtension=strtolower(end(explode('.',$ImageName)));
            $FormErrors=array();
            
            if(!empty($ImageName) && !in_array($imageExtension,$imageAllowedExtension)){
                    $FormErrors[]='This Extension Not <strong>Allowed</strong>';
                }
            if($ImageSize > 4194304){
                    $FormErrors[]='Size of Image Not Procced <strong>4MB</strong>';
                }
            if(empty($Department_Name))
                {
                    $FormErrors[]='Please Enter The Department Name';
                }
            if(empty($Department_Title))
                {
                    $FormErrors[]='Please Enter The Department Title';
                }
            if(empty($Department_Description))
                {
                    $FormErrors[]='Please Enter The Department Description';
                }
            foreach($FormErrors as $error){
                    echo'<div class="alert alert-danger">' .$error .'</div>';
                }
            
            if(empty($FormErrors)){

                     $iamges= rand(0,100000000).'_'.$ImageName;
                     move_uploaded_file($ImageTmp,"Upload\\".$iamges);
                
                     $query="Insert into level_department(Department_Name,Department_Title,Department_Description,Department_File,Department_Level_ID) VALUES ('".$Department_Name."','".$Department_Title."','".$Department_Description."','".$iamges."','".$Department_Level_ID."')";
                     $result=mysqli_query($connection,$query);
                
                     if(!empty($result))
                     {
                         $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >File is Inserted</div>';
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
        }elseif($do == 'Update') {
            echo '<div id="layoutSidenav_content">';
            echo '<main>';
            echo '<div class="container-fluid">';
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //Get Variable from Form
                    $Department_ID                  = $_POST['Dept_id'];
                    $Department_Name                = $_POST['Dept_name'];
                    $Department_Title               = $_POST['Dept_title'];
                    $Department_Description         = $_POST['Dept_description'];
                    $Department_Level_ID            = $_POST['Dept_level_id'];

                    $ImageName = $_FILES['image']['name'];
                    $ImageSize = $_FILES['image']['size'];
                    $ImageTmp  =  $_FILES['image']['tmp_name'];
                    $ImageType = $_FILES['image']['type'];

                    $imageAllowedExtension=array("jpeg","png","jpg","gif");

                    $imageExtension=strtolower(end(explode('.',$ImageName)));
                    $FormErrors=array();

                    if(!empty($ImageName) && !in_array($imageExtension,$imageAllowedExtension)){
                            $FormErrors[]='This Extension Not <strong>Allowed</strong>';
                        }
                    if($ImageSize > 4194304){
                            $FormErrors[]='Size of Image Not Procced <strong>4MB</strong>';
                        }
                    if(empty($Department_Name))
                        {
                            $FormErrors[]='Please Enter The Department Name';
                        }
                    if(empty($Department_Title))
                        {
                            $FormErrors[]='Please Enter The Department Title';
                        }
                    if(empty($Department_Description))
                        {
                            $FormErrors[]='Please Enter The Department Description';
                        }
                    foreach($FormErrors as $error){
                            echo'<div class="alert alert-danger">' .$error .'</div>';
                    }
                if(empty($FormErrors)){
                    $iamges= rand(0,100000000).'_'.$ImageName;
                    move_uploaded_file($ImageTmp,"Upload\\".$iamges);
                    //Update The DB Whith This Info
                    $query=
                    "UPDATE 
                    level_department
                    SET 
                    Department_Name         =   '".$Department_Name."',
                    Department_Title        =   '".$Department_Title."',
                    Department_Description  =   '".$Department_Description."',
                    Department_File         =   '".$iamges."',
                    Department_Level_ID     =   '".$Department_Level_ID."'
                    WHERE Department_ID     =   '".$Department_ID."' "; 
                    $result=mysqli_query($connection,$query);
                    if(!empty($result))
                    $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >Data is Updated</div>';
                   // redirectHome($theMsg,'back');
                
                    }
                }else{
                echo '<div class="container">';
                $theMsg= '<div class="alert alert-danger">Sorry You Not Can Brows This Page Direct</div>';
                redirectHome($theMsg,'back');
                echo '</div>';

            }
            echo '</div>';
            echo '</main>';
            echo '</div>';
            
       ///////////////////////////////////////////////////// Update Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Edit') {
   
        ///////////////////////////////////////////////////// Delete Requests In DataBase //////////////////////////////////////
        }elseif($do == 'Delete') {
             //Delete page
                    echo '<h1 class="text-center">Delete Page</h1>';
                    echo '<div class="container" > ';
                       // Check If GET Request SSN Is Numeric & Get The Integer Value Of It 

                    $Department_Id=isset($_GET['Department_ID']) && is_numeric($_GET['Department_ID'])?intval($_GET['Department_ID']) : 0; //content ssn own admin


                    //Select All Data From DB Depend On This SSN
                    //$query="select * from staff where Staff_ID='".$Staff_id."' Limit 1 ";
                    $check=checkItem("Department_ID","level_department",$Department_Id);

                    //Execute Query
                  //$result=mysqli_query($connection,$query);

                    //If Select Content The Data $count Content The Number Of Row Featched
                   // $count=mysqli_num_rows($result);

                    //If $count value greater than from 0 .. return data in inputs
                    if($check > 0)
                    {
                           $query="DELETE FROM level_department WHERE Department_ID='".$Department_Id."' "; 
                             $result=mysqli_query($connection,$query);
                            if(!empty($result))
                                $theMsg= '<div class="alert alert-success alert-dismissible fade show" role="alert" >This Department Is Deleted </div>';
                                redirectHome($theMsg,'back');


                    }else{
                        $theMsg='<div class="alert alert-danger">this id is not exist</div>';
                        redirectHome($theMsg);

                    }
        
                echo '</div>';
        }
         
        
        echo '</div>';
        include $tpl.'footer.php';
        
    }else {
        
        header('location:index.php');
        exit();
        
    }

 ?>










      