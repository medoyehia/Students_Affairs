 <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
               <br>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-header colcard ">
                                <h3 class="text-right"> شروط القبول بالأقسام العلمية (الأنتظام/ الانتساب) فى العام الجامعى 2019-2020م </h3>
                                <div class="option lext-left">
                                    <label class="text-white">view:</label>
                                    <span  data-view="full" >full</span>
                                    <span class="active" data-view="helf">| hlef</span>
                                </div>
                            </div>
                            <div class="card-body text-right">
                          <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                echo'<div class="condition">';
                                    echo'<h3 class="text-success">'.$row['Department_Name'].' <i class="far fa-check-square text-warning"></i></h3>';
                                echo'<div class="full-view" >';
                                
                                        echo'<p class="text-success">:'.$row['Department_Title'].'</p>';
                                        echo'<p>'.$row['Department_Description'].'</p>';
                                
                                        echo'<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal'.$row['Department_ID'].'"><i class="fa fa-edit"></i> Edit</button>';
                                        
                                        echo '&nbsp;<a href="dept_condition.php?do=Delete&Department_ID='.$row['Department_ID'].'" class="btn btn-outline-danger confirm">
                                        <i class="fa fa-user-times"></i> ';
                                        echo lang('DELETE_T');
                                        echo'</a>'; 
                                echo '</div>';
                                echo '</div>';
                                ?>
                                <div id="myModal<?php echo $row['Department_ID'] ?>" class="modal fade bd-example-modal-lg" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header colcard">
                                                 <h5 class="modal-title text-white">Edit department</h5>
                                                 <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="?do=Insert" method="post" enctype="multipart/form-data">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" name="Dept_name" id="name" class="form-control input"  placeholder="Enter your department name" >
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
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <?php } ?>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col col-sm-12">
                                        <a href="dept_condition.php?do=Add" class="btn btn-danger"><i class="fas fa-plus"></i> Insert Department</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


