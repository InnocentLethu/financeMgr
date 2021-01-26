
<?php
 require_once("../financeMgr/PHP/functions.php");
 require_once ("../financeMgr/PHP/databaseOperation.php");
 
?>
<!DOCTYPE html>
<head>

    <title> Event Request </title>
    
    <!-- Custom Stylesheet -->
    
    <link href="css1.css" rel="stylesheet" type="text/css"/>

    <!--include or link all these libraries -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> <!--bootstrap css-->
    <link href="datatables/css/jquery.dataTables.min.css" rel="stylesheet" />   <!--datatables css-->
    <link href="font%20awesome/css/all.css" rel="stylesheet" />  <!--fontawesome css (links all fontawesome css's)-->

</head>

<body>

    <main>
        <div class="container" text-center>
            <h1 class="py-4 bg-dark text-light text-lg-right rounded"><i class="fas fa-money-bill-wave"></i> Finance Manager </h1>
           
            <div class="d-flex justify-content-center">
                
                <form action="" method="post" class="w-50" enctype="multipart/form-data">
                    <center>
                    <H2>Event Request</H2>
                    </center>
                    <!--  <div class="py-2">
                        <label> Event ID </label>
                        <?php //inp("<i class='fas fa-clock'></i>","Event ID","event_id","","text","readonly");
                        
                        ?>
                    </div>-->
                    
   
                     
                    <div class="pt-2">
                        
                        <label> Enter Start Date For The event</label>
                         <?php inp("<i class='fas fa-calendar-check'></i>","Start_Date","start_date","","date","");
                        
                        ?>
                    </div> 
                    
                     
                     <div class="pt-2">
                         
                         <label> Enter End Date For The Event </label>
                         <?php inp("<i class='fas fa-calendar-times'></i>","End Date","end_date","","date","");
                        
                        ?>
                    </div>  
                    
                    <div class="pt-2">
                        <label> Upload Proof Of Payment </label>
                        <div class="input-group mb-2">
                        <input name="upload" type="file" class="file" value="Upload" data-browse-on-zone-click="true">
                        <br>
                        <br>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <?php 
                             buttonEle("btn-create","btn-success","Request", "request", "data-toggle='tooltip' data-placement='bottom' title='Request Event'");
                        ?>
                        
                        <?php 
                             buttonEle("btn-refresh","btn-primary","Refresh", "refresh", "data-toggle='tooltip' data-placement='bottom' title='Refresh Requests' Table'");
                        ?>
                        
                        <?php 
                            // buttonEle("btn-update","btn-info","Update", "update", "data-toggle='tooltip' data-placement='bottom' title='Update changes'");
                        ?>
                        
                        <?php 
                             //buttonEle("btn-delete","btn-danger","Delete", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete Requested Event'");
                        ?>
                    </div>
                </form>
                
            </div>
            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Event ID</th>
                            <th>Event Approved?</th>
                            <!--<th>Event Paid?</th>-->
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Leader ID</th>
                            <th>Admin ID</th>
                           <!-- <th>Edit</th> -->
                        </tr>
                        
                    </thead>
                    <tbody id="tbody">
                        <?php
                        if(isset($_POST['refresh']))
                        {
                          $results = refresh();
                          
                          if($results)
                          {
                              while($row = mysqli_fetch_assoc($results))
                              {
                                ?>
                        <tr>
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['eventID']; ?></td>
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['eventApproved']; ?></td>
                            <!--<td data-id="<?php //echo $row['eventID'];?>"><?php //echo $row['eventPaid']; ?></td>-->
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['eventStart']; ?></td>
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['eventEnd']; ?></td>
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['leaderID']; ?></td>
                            <td data-id="<?php echo $row['eventID'];?>"><?php echo $row['adminID']; ?></td>
                            <!--<td><i class="fas fa-edit btnedit" data-id="<?php //echo $row['eventID'];?>"></i></td> -->
                        </tr>
                                  <?php 
                                  
                                  
                              }
                          }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
     <!--js links must be in the correct order as like the website-->

    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>       <!--jquery js-->
    <script src="bootstrap/js/popper.min.js"></script>          <!--popper js-->
    <script src="bootstrap/js/bootstrap.min.js"></script>       <!--bootstrap js-->
    <script src="datatables/js/jquery.dataTables.min.js"></script> <!--Tables -->
    
    <script src="../MyApp/PHP/javascript.js"></script>
    
 
</body>
</html>