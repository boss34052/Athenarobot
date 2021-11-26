<?php
	session_start();
	include('server2.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Slamtec Athena</title>
<link href="service.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.19/css/uikit.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 

<header>
    <nav>
        <div class="container">
            <div class="nav-grid">
                <div class="logo">
                    <h1>Slamtec Athena</h1>
                    <span>Potharam Hospital Project</span>
                </div>
                <div class="fr">
                    <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="data.php">Data</a></li>
                    <li><a href="about.html">About</a></li>
                    </ul>
                </div>
            </div>
            <!-- grid -->

        </div>
    </nav>
    <!-- nav -->

</header>
<!-- header -->

<nav class="content">
    <div class="container">
        <div class="content-heading">
            <h1>Services Robotic</h1>
            <h2>
            <?php 
            date_default_timezone_set('Asia/Bangkok');
            $date_nows2 = date('Y-m-d H:i:s');
            echo "<br>";
            echo $date_nows2; 
            ?>
            </h2>
            <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
        </div>
        <!-- content-heading -->

        <div class="content-services">
            
                <div class="content-services-block">
                    <div class="select">
                        <h1><p class="output">Select The Bed Number?</p></h1>
                    </div>
                    <div class="">
                        <img src="img/image2.jpg" alt=""  style="width: 100%;height: 150px;">
                    </div>
                    <div class="content-services-grid">
                    <form action="d_in.php" method="post">
                    <table class="AdminDataList AdminDataTable uk-table uk-table-divider uk-table-justify uk-table-small InputfieldTable" style="width:100%;">
                    <tbody class="ui-sortable">    
                    <tr>
                            <td style="width:50%;">
                            <select id="select1" name="d_1">
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>
                            
                            </td>
                            <td style="width:50%;">
                            <select id="select2" name="d_2" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>    
                            
                            </td>
                        </tr>

                        

                        <tr>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch1" checked>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                            </td>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch2" checked disabled>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                        
                            </td>
                        </tr>
                        

                        <tr>
                            <td style="width:50%;">
                            <select id="select3" name="d_3" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>
                            
                            </td>
                            <td style="width:50%;">
                            <select id="select4" name="d_4" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select> 
                            
                            </td>     
                        </tr>

                        <tr>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch3" checked disabled>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                            </td>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch4" checked disabled>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td style="width:50%;">
                            <select id="select5" name="d_5" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>
                            
                            </td>
                            <td style="width:50%;">
                            <select id="select6" name="d_6" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>
                        
                            </td>
                        </tr>

                            <tr>
                                <td style="width:50%;">
                                    <label class="switch" style="display:table-cell;">
                                        <input type="checkbox" id="switch5" checked disabled>
                                        <span>
                                            <em></em>
                                            <strong></strong>
                                        </span>
                                    </label>
                                </td>
                                <td style="width:50%;">
                                    <label class="switch" style="display:table-cell;">
                                        <input type="checkbox" id="switch6" checked disabled>
                                        <span>
                                            <em></em>
                                            <strong></strong>
                                        </span>
                                    </label>
                                </td>
                            </tr>
                            
                        

                        <tr>
                            <td style="width:50%;">
                            <select id="select7" name="d_7" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select>
                            
                            </td>
                            <td style="width:50%;">
                            <select id="select8" name="d_8" disabled>
                                    <option value="">--Select Bed--</option>
                                    <option type="hidden" value="Bed1" id="Bed1">Bed1</option>
                                    <option type="hidden" value="Bed2" id="Bed2">Bed2</option>
                                    <option type="hidden" value="Bed3" id="Bed3">Bed3</option>
                                    <option type="hidden" value="Bed4" id="Bed4">Bed4</option>
                                    <option type="hidden" value="Bed5" id="Bed5">Bed5</option>
                                    <option type="hidden" value="Bed6" id="Bed6">Bed6</option>
                                    <option type="hidden" value="Bed7" id="Bed7">Bed7</option>
                                    <option type="hidden" value="Bed8" id="Bed8">Bed8</option>
                            </select> 
                            
                            </td>
                        </tr>

                        <tr>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch7" checked disabled>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                            </td>
                            <td style="width:50%;">
                                <label class="switch" style="display:table-cell;">
                                    <input type="checkbox" id="switch8" checked disabled>
                                    <span>
                                        <em></em>
                                        <strong></strong>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        
                    
                    </tbody>
                    </table>
                    </div>

                    <div class="rows">
                            <button type="submit" id="button" name="save" onclick="forconfirm()"style="width: 100px;">Confirm</button>
                    </div>
                    
                    </form>     

                    <div class="confirm">
                        <div class="first-row">
                            <a href="data.php"><button id="button" onclick="fordatalog()" style="width: 100px; height: 40px;">Data Log</button></a>
                            <button id="btnlock" onclick="forlock()"style="width: 100px;">Lock All</button>
                            <button id="button" onclick="forcancel()" style="width: 100px;">Cancel</button>
                        </div>
                    </div>



                </div>
        </div>    

    </div>
</nav>  

<form action="d_in.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="container">
                   
            <center>
                <br><br><br>
                <h3>DateTime, Date, Bed Number Save To Database</h3>
                <p>
                <h3>( วันที่และเวลาบันทึกหมายเลขเตียง )
                    <br>
                </h3>
                </p>
                 
            </center>
                    
    </div>
</form>
<br>
 
    <?php 
        $sql_date = "SELECT * FROM date_tbl"
        or die ("Error : ".mysqlierror($sql_date));
        $sql_date = mysqli_query($conn, $sql_date);
    ?>
 
    <div class="container">
        <div class="row">
 
            <?php foreach ($sql_date as $rs){ ?>
            <div class="col-md-4">
 
                <div class="card" style="">
                    
                    <div class="card-body">
                    <b>	
                    <p class="card-text">1st : <?php echo $rs['d_1']; ?></p>
                    <br/>
                    <p class="card-text">2nd : <?php echo $rs['d_2']; ?></p>
                    <br/>
                    <p class="card-text">3rd : <?php echo $rs['d_3']; ?></p>
                    <br/>
                    <p class="card-text">4th : <?php echo $rs['d_4']; ?></p>
                    <br/>
                    <p class="card-text">5th : <?php echo $rs['d_5']; ?></p>
                    <br/>
                    <p class="card-text">6th : <?php echo $rs['d_6']; ?></p>
                    <br/>
                    <p class="card-text">7th : <?php echo $rs['d_7']; ?></p>
                    <br/>
                    <p class="card-text">8th : <?php echo $rs['d_8']; ?></p>
                    <br/>
                    <p class="card-text">Date and Time : <?php echo date('d/m/Y H:i:s',strtotime($rs['d_insert'].' +7 hours' )); ?></p>
                	</b>
                    </div>
                </div>
                <br/>
                 
            </div>
 
            
            <?php }?>
 
        </div>
    </div>  
    
<!-- dribbble -->
<a class="dribbble" href="https://dribbble.com/shots/5436550-Lock-switch-animation" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
<script src="service.js"></script>

</body>
</html>
