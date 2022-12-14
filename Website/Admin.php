<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Admin</title>
        <link href="update.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <style>
        .admin-introductory{
            background-color: black;
            color: white;
            
            /* grid-template-columns: 1fr 1fr; */
        }

        .admin-introductory .sa-table{
            padding-top: 50px;
            padding-bottom: 100px;

        }

        .admin-introductory  .na-table{
            padding-top: 50px;
            padding-bottom: 100px;

        }

        .admin-introductory .ci-table{
            padding-top: 50px;
            padding-bottom: 100px;

        }

        
        .admin-introductory .woredas-table{
            padding-top: 50px;
            padding-bottom: 100px;

        }

        .admin-introductory .control{
            padding-bottom: 70px;
            padding-top: 0px;
        }
        .admin-introductory .inbox{
            padding-bottom: 70px;
            padding-left: 0px;
            background-color: black;
            width: 100%;
            display: flex;
        }

        .admin-introductory .inbox .outbox{
            
        }

        nav .right-nav{
            padding-left:0px;
            background-color: white;
        }

         a{
             padding-top: 10px;
             text-align: left;
             height: 50px;
             padding-left: 10px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            color: orangered;
            float: right;
        }

        th{
            background-color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <body>
        <div class="tl-container">

            <div class="navigation-bar">
                <div class="right-nav-bar">
                    <div class="left-link-nav">
                        <a href="index.html"><span class="nav-hover-span"></span>Home</a>
                    </div>
                    <div class="right-link-nav">
                        <div class="dropdown">
                            <span><span class="nav-hover-span"></span>Services</span>
                            <div class="dropdown-content">
                                <div class="link-wrapper">
                                    <ul>
                                        <li>
                                            <div class="link1">
                                                <a href="SystemAdminstrator.html"><span class="nav-hover-span"></span> System</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="link2">
                                                <a href="NetworkAdminstrato.html"><span class="nav-hover-span"></span>Network</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="link3">
                                                <a href="CommunicationAndInformation.html"><span class="nav-hover-span"></span>Communication and Network</a>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    
                                    
                                </div>
                                


                            </div>
                        </div>
                    </div>     
                    <div class="right-right-link-nav">
                        <a  href="about.html"><span class="nav-hover-span"></span>About</a>
                    </div>
                </div>
                
                <div class="left-nav-bar">
                    <a href="index.html"><span class="nav-hover-span"></span>Log Out</a>
                    
                </div>
            </div>

    
                
            


            <!--The End Of Navigation Bar -->

            
            <!--The Start of The Introductory/Well Come Part-->
            <div class="admin-introductory">
            

                <div class="control">
                    <h1>Control Panel</h1>
        
                    <div class="table-btn-wrapper">
                        <a href="Add.html" class="btn-primary">Add Employee</a>
                        <a href="delete.html" class="btn-danger">Delete Employee</a>
                        <a href="Addworeda.html" class= "btn">Add Woreda</a>
                    </div>
                </div>
         
                <div class="sa-table">
                    <h1>System Adminstrators List</h1>
                    <table>
                        <th>ID</th>
                        <th>fname</th>
                        <th>mname</th>
                        <th>lname</th>
                        <th>Email</th>
                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ict");
                            if($conn-> connect_error){
                                die("Connection failed:". $conn-> connect_error);
                            }

                            $sql = "SELECT id, fname, mname, lname, email from systemadminstrator";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>". $row["id"] ."</td><td>" .$row["fname"] ."</td><td>" .$row["mname"] ."</td><td>" .$row["lname"]
                                    ."</td><td>" .$row["email"] ."</td></tr>";
                                }
                                echo "</table>";
                            }else {
                                echo "0 result";
                            }
                            
                            ?>
                        </tr>
                    </table>
                </div>

                <div class="na-table">
                    <h1>Network Adminstrators List</h1>
                    <table>
                        <th>ID</th>
                        <th>fname</th>
                        <th>mname</th>
                        <th>lname</th>
                        <th>Email</th>
                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ict");
                            if($conn-> connect_error){
                                die("Connection failed:". $conn-> connect_error);
                            }

                            $sql = "SELECT id, fname, mname, lname, email from networkadminstrator";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>". $row["id"] ."</td><td>" .$row["fname"] ."</td><td>" .$row["mname"] ."</td><td>" .$row["lname"]
                                    ."</td><td>" .$row["email"] ."</td></tr>";
                                }
                                echo "</table>";
                            }else {
                                echo "0 result";
                            }
                            
                            ?>
                        </tr>
                    </table>
                </div>

                <div class="ci-table">
                    <h1>Communication And Information Employees List</h1>
                    <table>
                        <th>ID</th>
                        <th>fname</th>
                        <th>mname</th>
                        <th>lname</th>
                        <th>Email</th>
                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ict");
                            if($conn-> connect_error){
                                die("Connection failed:". $conn-> connect_error);
                            }

                            $sql = "SELECT id, fname, mname, lname, email from communicationandinformation";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>". $row["id"] ."</td><td>" .$row["fname"] ."</td><td>" .$row["mname"] ."</td><td>" .$row["lname"]
                                    ."</td><td>" .$row["email"] ."</td></tr>";
                                }
                                echo "</table>";
                            }else {
                                echo "0 result";
                            }
                            
                            ?>
                        </tr>
                    </table>
                </div>

                <div class="woredas-table">
                    <h1>East Gojjam Zone Woreda's List</h1>
                    <a href="Addworeda.html" class="btn-primary">Add Woreda</a><br>

                    
                    <table>
                        <th>ID</th>
                        <th>Woreda Name</th>
                        <th>phone</th>
                        <th>Email</th>
                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "ict");
                            if($conn-> connect_error){
                                die("Connection failed:". $conn-> connect_error);
                            }

                            $sql = "SELECT id, woredaname, phone, email from woreda";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>". $row["id"] ."</td><td>" .$row["woredaname"] ."</td><td>" .$row["phone"] 
                                    ."</td><td>" .$row["email"] ."</td></tr>";
                                }
                                echo "</table>";
                            }else {
                                echo "0 result";
                            }
                            
                            ?>
                        </tr>
                    </table>
                </div>


               
                <div class="inbox">
                    <textarea name="inbox" id="inbox-textarea" cols="30" rows="25"></textarea>
                    <script>
                       var d =localStorage.getItem("maincomment");
                      document.getElementById("inbox-textarea").innerHTML = d;
                      // alert("The Value Received is " + b);
                      //  var resetValue = "";
                     //  localStorage.setItem("myValue", resetValue);
                   </script>
                
                 <div class="outbox">
                     <input type="text" name="outbox" placeholder="Message" required><br>
                     <input type="email" name="email" placeholder="Email" required><br>
                     <button type="submit">Send</button><br>
                 </div>
                </div>
 
            </div>
            
        </div>
    </body>
</html>
















<!-- <div class="admin-employee-control">
    <div class="admin-list">

        <h1>Manage Admin</h1>
        <br/>
        <br/>

       
        <br/>
        <br/>
        <br/>
        
                    <div class="table-btn-wrapper">
                        <a href="Add.html" class="btn-primary">Add Admin</a>
                         <a href="saupdate.html" class="btn-secondary">Update Admin</a> 
                        <a href="delete.html" class="btn-danger">Delete Admin</a>
                    </div>
    </div>
</div> 

