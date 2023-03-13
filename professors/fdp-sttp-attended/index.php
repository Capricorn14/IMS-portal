<?php 
include('../../config.php');
session_start();
?>
<!DOCTYPE html> 

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FDP / STTP </title>

    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <?php include('../../header.php'); ?>

    <!-- Modal -->
    <!-- this is add data form Make changes to variables, keep same variables -->
    <div class="modal fade mt-2" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST" enctype="multipart/form-data" >

                    <div class="modal-body">

                        <div class="form-group">
                            <label>Academic Year</label>
                            <select name="Academic_year" class="form-control" required>
                                <option value="">--Select Year--</option>
                                <option name="Academic_year" value="2017-18">2017-18</option>
                                <option name="Academic_year" value="2018-19">2018-19</option>
                                <option name="Academic_year" value="2019-20">2019-20</option>
                                <option name="Academic_year" value="2020-21">2020-21</option>
                                <option name="Academic_year" value="2021-22">2021-22</option>
                                <option name="Academic_year" value="2021-22">2022-23</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Name of The Teacher </label>
                            <input type="text"  name="Name_Of_The_Teacher" class="form-control" placeholder="Enter Name of Teacher" required>
                        </div>

                        <div class="form-group">
                            <label>Branch</label>
                            <select name="Branch" class="form-control" required>
                                <option value="">--Select Branch--</option>
                                <option name="Branch" value="IT">IT</option>
                                <option name="Branch" value="EXTC">EXTC</option>
                                <option name="Branch" value="Mechanical">Mechanical</option>
                                <option name="Branch" value="Computers">Computers</option>
                                <option name="Branch" value="Electrical">Electrical</option>
                                <option name="Branch" value="Humanities">Humanities</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Title of Program </label>
                            <input type="text"  name="Title_Of_Program" class="form-control" placeholder="Enter Title" required>
                        </div>

                        <div class="form-group">
                            <label> Professional Body Or Organization Associated</label>
                            <input type="text"  name="Professional_Body_Or_Organization_Associated" class="form-control" placeholder="Enter Professional Bod Or Organization Associated" required>
                        </div>

                        <div class="form-group">
                            <label> Course Type </label>
                            <input type="text" name="Course_Type"  class="form-control" placeholder="Enter Course Type" required>
                        </div>

                        <div class="form-group">
                            <label> Organizing Institute And Location</label>
                            <input type="text" name="Organizing_Institute_And_Location" class="form-control" placeholder="Enter Organizing Institute And Location" required>
                        </div>

                        <div class="form-group">
                            <label> Starting Date </label>
                            <input type="date" name="Dates_From" class="form-control" placeholder="Enter Start Date" required>
                        </div>

                        <div class="form-group">
                            <label> Ending Date </label>
                            <input type="date"  name="Dates_To" class="form-control" placeholder="Enter Ending Date" required>
                        </div>

                        <div class="form-group">
                            <label> Duration </label>
                            <input type="number" name="Duration"  class="form-control" placeholder="Total Number of Days" required>
                        </div>

                        <div class="form-group">
                            <label> TA Received </label>
                            <input type="number" name="TA_Received"  class="form-control" placeholder="TA Received" required>
                        </div>

                        <div class="form-group">
                            <label> Registration Amount</label>
                            <input type="number" name="Registration_Amount"  class="form-control" placeholder="Enter Registration Amount" required>
                        </div>

                        <div class="form-group">
                            <label> Soft Copy of Application Letter/ Reimbursement Letter of Registration & TA Amount(Duly Signed By Principal) </label>
                                <input type="file" name="pdffile1" id="pdffile1" required/><br>
                                <img src="" id="pdf-file1-tag" width="100px" />

                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            
                                            reader.onload = function (e) {
                                                $('#pdf-file1-tag').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $("#pdffile1").change(function(){
                                        readURL(this);
                                    });
                                </script><br>
                        </div>

                        <div class="form-group">
                            <label> Course Certificate </label>
                                <input type="file" name="pdffile2" id="pdffile2" required/><br>
                                <img src="" id="pdf-file2-tag" width="100px" />

                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            
                                            reader.onload = function (e) {
                                                $('#pdf-file2-tag').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    $("#pdffile2").change(function(){
                                        readURL(this);
                                    });
                                </script><br>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="insertbutton" name="insertdata" class="btn btn-primary" onClick="datechecker() ">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM  -->
    <!-- dont make changes-->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes, Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

 <!-- main card -->
 <!-- buttons and search buttoncard -->
            <div class="card">
                <div class="card-body">
                <?php 
                if($_SESSION["role"] == true) {
                    echo "Welcome". " ".$_SESSION["role"] ;
                } else {
                    header("Location:index.php"); 
                }
                ?>

            <div class="card-body mt-5">
                <h2> FDP / STTP Organised </h2>
            </div>
            <div class="card">
                <div class="card-body btn-group">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal"> 
                        ADD DATA
                    </button>
            </form> &nbsp;

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" onclick="exportTableToCSVuser('UserData_FDP_STTP_ATTENDED.csv')" class="btn btn-success">Export to excel</button>
			</form> &nbsp; &nbsp; 
        
            <form method="post">
                <label>Search</label>
                <input type="text" name="search">
                <input type="submit" name="submit">
            </form>
            </div>
            </div>

             <!-- table -->
            <div id="tabledataid" class="card">
                <div class="card-body">
                      <!-- th change -->
                    <table id="datatableid" class="table table-bordered table-dark mt-2">
                        <thead>
                            <tr>
                                <th scope="col"> ID </th>
                                <th scope="col"> ACADEMIC YEAR </th>
                                <th scope="col"> NAME OF THE TEACHER </th>
                                <th scope="col"> BRANCH </th>
                                <th scope="col"> TITLE OF PROGRAM </th>
                                <th scope="col"> PROFESSIONAL BODY OR ORGANIZATION ASSOCIATED  </th>
                                <th scope="col"> COURSE TYPE</th>
                                <th scope="col"> ORGANIZING INSTITUTE AND LOCATION</th>
                                <th scope="col"> FROM DATE </th>
                                <th scope="col"> END DATE </th>
                                <th scope="col"> DURATION </th>
                                <th scope="col"> TA RECEIVED </th>
                                <th scope="col"> REGISTRATION AMOUNT</th>
                               
                            </tr>
                        </thead>
                        
                        <?php
                         $user = $_SESSION["role"];
                        
                         $result = "SELECT * FROM credentials WHERE username = '$user'";
 
                         $query = mysqli_query($connection, $result);
                         $queryresult = mysqli_num_rows($query); 
                             if($queryresult > 0){
                                 while($row = mysqli_fetch_assoc($query)){ 
                                     $id = $row['id'];
                                     $branch = $row['branch'];
                                 }  
                             }

                        $table_query = "SELECT * FROM fdpsttpattended WHERE user_id=$id";  
                        $query_run = mysqli_query($connection, $table_query);
                        $query_result = mysqli_num_rows($query_run); ?>

                        <?php if($query_result > 0){
                                        while($developer = mysqli_fetch_assoc($query_run)){   
                                            ?>
                        <tbody> <!-- change -->
                            <tr>
                                <td> <?php echo $developer['id']; ?> </td>
                                <td> <?php echo $developer['Academic_year']; ?> </td> 
                                <td> <?php echo $developer['Name_Of_The_Teacher']; ?> </td> 
                                <td> <?php echo $developer['Branch']; ?> </td>
                                <td> <?php echo $developer['Title_Of_Program']; ?> </td>
                                <td> <?php echo $developer['Professional_Body_Or_Organization_Associated']; ?> </td>
                                <td> <?php echo $developer['Course_Type']; ?> </td>
                                <td> <?php echo $developer['Organizing_Institute_And_Location']; ?> </td>
                                <td> <?php echo $developer['Dates_From']; ?> </td>
                                <td> <?php echo $developer['Dates_To']; ?> </td>
                                <td> <?php echo $developer['Duration']; ?> </td>
                                <td> <?php echo $developer['TA_Received']; ?> </td>
                                <td> <?php echo $developer['Registration_Amount']; ?> </td>

                                <td>
                                    <!-- <a href="read.php?viewid=" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> -->
                                    <a class="edit btn-success editbtn" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                    <a href="uploadsfdpattended1/<?php echo $developer['pdffile1']; ?>"  class="download" title="Download" data-toggle="tooltip"><i class="fa fa-download"></i></a>

                                    <a href="uploadsfdpattended2/<?php echo $developer['pdffile2']; ?>"  class="download" title="Download" data-toggle="tooltip"><i class="fa fa-download"></i></a>
                                    
                                    <a class="delete btn-danger deletebtn" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>       
                                    <!-- <button class="btn"><i class="fa fa-download"></i> Download</button> -->
                                </td>
                                <!-- <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td> -->
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
            
        </div> 
    </div>

    <!-- EDIT POP UP FORM  -->
    <!-- this is edit data form Make changes to variables and placeholder, keep same variables -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Data </h5> &nbsp;
                    <h5 class="modal-title" id="exampleModalLabel"> (Please enter the dates again)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <input type="hidden" name="update_id" id="update_id">

                    <div class="modal-body">

                    <div class="form-group">
                            <label> Academic Year </label>
                            <input type="text"  id="Academic_year" value="$Academic_year" name="Academic_year" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Name of The Teacher </label>
                            <input type="text" id="Name_Of_The_Teacher"   name="Name_Of_The_Teacher" class="form-control" placeholder="Enter Name of Teacher" required>
                        </div>

                        <div class="form-group">
                            <label>Branch </label>
                            <input type="text"  id="Branch" name="Branch" value="$Branch" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Title of Program </label>
                            <input type="text" id="Title_Of_Program" name="Title_Of_Program"  class="form-control" placeholder="Enter Title" required>
                        </div>

                        <div class="form-group">
                            <label> Professional Body Or Organization Associated</label>
                            <input type="text" id="Professional_Body_Or_Organization_Associated" name="Professional_Body_Or_Organization_Associated" class="form-control" placeholder="Enter Professional Bod Or Organization Associated" required>
                        </div>

                        <div class="form-group">
                            <label> Course Type </label>
                            <input type="text" id="Course_Type" name="Course_Type" class="form-control" placeholder="Enter Course Type" required>
                        </div>

                        <div class="form-group">
                            <label> Organizing Institute And Location</label>
                            <input type="text" id="Organizing_Institute_And_Location" name="Organizing_Institute_And_Location" class="form-control" placeholder="Enter Organizing Institute And Location" required>
                        </div>

                        <div class="form-group">
                            <label> Starting Date </label>
                            <input type="date" id="Dates_From" name="Dates_From" class="form-control" placeholder="Enter Start Date" required>
                        </div>

                        <div class="form-group">
                            <label> Ending Date </label>
                            <input type="date" id="Dates_To" name="Dates_To" class="form-control" placeholder="Enter Ending Date" required>
                        </div>

                        <div class="form-group">
                            <label> Duration </label>
                            <input type="text" name="Duration" id="Duration" class="form-control" placeholder="Total Number of Days" required>
                        </div>

                        <div class="form-group">
                            <label> TA Received </label>
                            <input type="text" name="TA_Received" id="TA_Received" class="form-control" placeholder="TA Received" required>
                        </div>

                        <div class="form-group">
                            <label> Registration Amount</label>
                            <input type="text" name="Registration_Amount" id="Registration_Amount" class="form-control" placeholder="Enter Registration Amount" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

<!--Search data -->
<div id="srch" class="card-body">

    <h4> Search Data </h4>
    <table class="table table-bordered ">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> ACADEMIC YEAR </th>
            <th scope="col"> NAME OF THE TEACHER </th>
            <th scope="col"> BRANCH </th>
            <th scope="col"> TITLE OF PROGRAM </th>
            <th scope="col"> PROFESSIONAL BODY OR ORGANIZATION ASSOCIATED  </th>
            <th scope="col"> COURSE TYPE</th>
            <th scope="col"> ORGANIZING INSTITUTE AND LOCATION</th>
            <th scope="col"> FROM DATE </th>
            <th scope="col"> END DATE </th>
            <th scope="col"> DURATION </th>
            <th scope="col"> TA RECEIVED </th>
            <th scope="col"> REGISTRATION AMOUNT</th>
        </tr>
    <thead>  

<?php 
    if (isset($_POST["submit"])) 
    {
        $str = mysqli_real_escape_string($connection, $_POST["search"]);

        $sth = "SELECT * FROM `fdpsttpattended` WHERE user_id=$id AND (Academic_Year LIKE '%$str%' OR Name_Of_The_Teacher LIKE '%$str%' OR Branch LIKE '%$str%' OR Title_Of_Program LIKE '%$str%' OR Professional_Body_Or_Organization_Associated LIKE '%$str%' OR Course_Type LIKE '%$str%'  OR Organizing_Institute_And_Location LIKE '%$str%' OR Duration LIKE '%$str%' OR TA_Received LIKE '%$str%' OR Registration_Amount LIKE '%$str%')";
        $result = mysqli_query($connection, $sth);
        $queryresult = mysqli_num_rows($result); ?>

                    <div class="card">
                        <div class="card-body btn-group">
                        <div> Results- </div> &nbsp; &nbsp;
                        <button class="btn btn-success" onclick="exportTableToCSV('Search_Data.csv')"> Export Data </button>
                        </div>
                    </div>
                    
                    <?php if($queryresult > 0){
                while($row = mysqli_fetch_assoc($result)){   
                    ?>
                    <tbody id="srch"> 
             
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['Academic_year']; ?> </td> 
                            <td> <?php echo $row['Name_Of_The_Teacher']; ?> </td> 
                            <td> <?php echo $row['Branch']; ?> </td>
                            <td> <?php echo $row['Title_Of_Program']; ?> </td>
                            <td> <?php echo $row['Professional_Body_Or_Organization_Associated']; ?> </td>
                            <td> <?php echo $row['Course_Type']; ?> </td>
                            <td> <?php echo $row['Organizing_Institute_And_Location']; ?> </td>
                            <td> <?php echo $row['Dates_From']; ?> </td>
                            <td> <?php echo $row['Dates_To']; ?> </td>
                            <td> <?php echo $row['Duration']; ?> </td>
                            <td> <?php echo $row['TA_Received']; ?> </td>
                            <td> <?php echo $row['Registration_Amount']; ?> </td>
                            <td>
                                <!--<a href="read.php?viewid=<?php echo htmlentities ($row['id']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>-->
                                <a class="edit btn-success editbtn" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="uploadsfdpattended1/<?php echo $row['pdffile1']; ?>"  class="download" title="Download" data-toggle="tooltip"><i class="fa fa-download"></i></a>
                                <a href="uploadsfdpattended2/<?php echo $row['pdffile2']; ?>"  class="download" title="Download" data-toggle="tooltip"><i class="fa fa-download"></i></a>
                                
                                <a class="delete btn-danger deletebtn" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>       
                                <!-- <button class="btn"><i class="fa fa-download"></i> Download</button> -->
                            </td>
                            <!-- <td>
                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                            </td> -->
                        </tr>
                    <tbody>
                    <?php 
            }

        } else {
            echo "No Results Found";
        }
    }
    ?>
    </table>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <!--<script type="text/javascript">
        function EnableDisableTextBox(Approving_Body) {
            var selectedValue = Approving_Body.options[Approving_Body.selectedIndex].value;
            var txtOther = document.getElementById("txtOther");
            txtOther.disabled = selectedValue == other ? false : true;
            if (!txtOther.disabled) {
                txtOther.focus();
            }
        }
    </script> -->

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                //chnage this keep same variable as above
                $('#update_id').val(data[0]);
                $('#Academic_year').val(data[1]);
                $('#Name_Of_The_Teacher').val(data[2]);
                $('#Branch').val(data[3]);
                $('#Title_Of_Program').val(data[4]);
                $('#Professional_Body_Or_Organization_Associated').val(data[5]);
                $('#Course_Type').val(data[6]);
                $('#Organizing_Institute_And_Location').val(data[7]);
                $('#Dates_From').val(data[8]);
                $('#Dates_To').val(data[9]);
                $('#Duration').val(data[10]);
                $('#TA_Received').val(data[11]);
                $('#Registration_Amount').val(data[12]);
            });
        });
    </script>

<!--<script>
        function datechecker() {
            if(document.getElementById('insertbutton').clicked == true) {
                alert("Dhjkd");
            }
        }
</script>-->

<script>  
    //user-defined function to download CSV file  
    function downloadCSVuser(csv, filename) {  
        var csvFile;  
        var downloadLink;  

        //define the file type to text/csv  
        csvFile = new Blob([csv], {type: 'text/csv'});  
        downloadLink = document.createElement("a");  
        downloadLink.download = filename;  
        downloadLink.href = window.URL.createObjectURL(csvFile);  
        downloadLink.style.display = "none";  

        document.body.appendChild(downloadLink);  
        downloadLink.click();  
    }  

    //user-defined function to export the data to CSV file format  
    function exportTableToCSVuser(filename) {  
    //declare a JavaScript variable of array type  
    var csv = [];  
    var x=document.getElementById("tabledataid");
    var rows = x.querySelectorAll("table tr");  

    //merge the whole data in tabular form   
    for(var i=0; i<rows.length; i++) {  
        var row = [], cols = rows[i].querySelectorAll("td, th");  
        for( var j=1; j<cols.length-1; j++)  
        row.push(cols[j].innerText);  
        csv.push(row.join(","));  
    }   
    //call the function to download the CSV file  
    downloadCSVuser(csv.join("\n"), filename);  
    }  
</script> 

<script>  
    //user-defined function to download CSV file  
    function downloadCSV(csv, filename) {  
        var csvFile;  
        var downloadLink;  

        //define the file type to text/csv  
        csvFile = new Blob([csv], {type: 'text/csv'});  
        downloadLink = document.createElement("a");  
        downloadLink.download = filename;  
        downloadLink.href = window.URL.createObjectURL(csvFile);  
        downloadLink.style.display = "none";  

        document.body.appendChild(downloadLink);  
        downloadLink.click();  
    }  

    //user-defined function to export the data to CSV file format  
    function exportTableToCSV(filename) {  
    //declare a JavaScript variable of array type  
    var csv = [];  
    var x=document.getElementById("srch");
    var rows = x.querySelectorAll("table tr");  

    //merge the whole data in tabular form   
    for(var i=0; i<rows.length; i++) {  
        var row = [], cols = rows[i].querySelectorAll("td, th");  
        for( var j=1; j<cols.length-1; j++)  
        row.push(cols[j].innerText);  
        csv.push(row.join(","));  
    }   
    //call the function to download the CSV file  
    downloadCSV(csv.join("\n"), filename);  
    }  
</script> 

</body>
</html>