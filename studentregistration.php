
<!DOCTYPE html>
<?php
include 'session.php';
//register
include 'connection.php';
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EDUCLASS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/faces/cccc.png" />
  <script>
	function registration2()
	{
        var regno= document.getElementById("regno").value;
		var name= document.getElementById("name").value;
		
		var bch_id= document.getElementById("bch_id").value;
		var address= document.getElementById("address").value;
		var email= document.getElementById("email").value;
		var gender= document.getElementById("gender").value;
		
		var district= document.getElementById("district").value;
		var phone= document.getElementById("phone").value;
		var ac_no= document.getElementById("ac_no").value;
		var password= document.getElementById("password").value;
		
		
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(regno=='')
		{
			alert('Please enter your regno');
		}
		
		else if(name=='')
		{
			alert('Please enter your name');
		}
		else if(bch_id=='')
		{
			alert('Please enter your batch');
		}
		else if(address=='')
		{
			alert('Please enter your address');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(gender=='')
		{
			alert('Please enter your gender');
		}
		
		else if(district=='')
		{
			alert('Please enter your district');
		}else if(ac_no=='')
		{
			alert('Please enter your ac_no');
		}
		
		
		
		else if(phone=='')
		{
			alert('Please enter your phone number');
		}
		else if(password=='')
		{
			alert('Please enter your user  password');
		}
		
		
	}
	
</script>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h4> <a class="navbar-brand brand-logo mr-5"><b><font face ="WildWest">&nbsp;EDUCLASS</font><img src="images/faces/cccc.png" alt="oh" width="44" height="512"></b></a></h4>
        <div align="justify"></div>
        <div align="justify"></div>
        
      </a></a><a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/faces/cccc.png"  width="44" height="512"/></b></a></h4>
        <div align="justify"></div></a>      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago                  </p>
                </div>
              </a>            </div>
          </li>
          <li class="nav-item nav-profile dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown2"><img src="images/faces/face6.jpg" alt="profile"/></a></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings              </a>
               <a class="dropdown-item"  href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout              </a>            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>            </a>          </li>
        </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="teacherhome.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Schools</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="teachergistration.php">Register schools</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">School lists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">School wise detailes</a></li>
				<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">School Search</a></li>
				
				
              </ul>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">students</span>
              <i class=""></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
			  <li class="nav-item"> <a class="nav-link" href="">Register students</a></li>
              <!--  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">student List</a></li>-->
				<li class="nav-item"><a class="nav-link" href="studetailestr.php">student Detailes</a></li>
			<!--	<li class="nav-item"><a class="nav-link" href="exxcelupload.php">excel upload</a></li>-->
				<li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Search</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">attendance</span>
              <i class=""></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="attendance.php">take attendance</a></li>
				<li class="nav-item"> <a class="nav-link" href="attendancerecord.php">attendance Detailes</a></li>
			<!--	<li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">view attendance</a></li>
			    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">search attendance</a></li>-->
				
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Notes Hub</span>
              <!--<i class="menu-arrow"></i>-->
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">upload notes</a></li>
	            <li class="nav-item"> <a class="nav-link" href="">view notes</a></li>
				 <li class="nav-item"> <a class="nav-link" href="">search notes</a></li
              </ul>
            </div>
          </li>
		  
          <li class="nav-item">
           <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Class Shedules</span>
              <i class=""></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">shedule classes</a></li>
				<li class="nav-item"> <a class="nav-link" href="">view shedules</a></li>
				
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Exam/Assignments</span>
              <i class=""></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> shedule </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> view 
				</a></li>
				 <li class="nav-item"> <a class="nav-link" href=""> verify marks</a></li>
				  <li class="nav-item"> <a class="nav-link" href=""> exam results</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
          <!--  <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>-->
          </li>
          <li class="nav-item">
           <!-- <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>-->
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 <!-- <h3 class="font-weight-bold">Welcome </h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>-->
                </div>
                <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today(<?php echo date('Y-m-d'); ?>)
                    </button>
                 <!--   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>-->
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
         <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/cc.jpg" alt="people"
				  
				  
				  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
    



        <!-- Sign up form -->
        <section class="signup">
		
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
						 <?php
                  if(isset($_REQUEST['msg']))
                  {

                      echo '<tr><td colspan="2" align="center" style="color:#FF0000">'.$_REQUEST['msg'].'</td></tr>';
                  }

                  ?>
                         <form  class="forms-sample" action= "dosaaving.php" method="post" >
						 <div class="form-group">
                               
                                <input type="text" name="regno" id="regno" placeholder="registerno"  class="form-control"  required>
                            </div>

                            <div class="form-group">
                               
                                <input type="text" name="name" id="name" placeholder="Name"  class="form-control"  required>
                            </div>
							<div class="form-group">
                      <label ></label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-15">
					  <select class="form-control" id="bch_id" name="bch_id">
                            <?php
                    $sql="SELECT bch_id,bch_name FROM tbl_batch";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['bch_id'].'" >'.$row['bch_name'].'</option>';
                    }
                    ?>
                              
                            </select>
                          </div>
                    </div>
							<div class="form-group">
                               
                                <input type="text" name="address" id="address" placeholder="address"   class="form-control" required>
                            </div>
							<div class="form-group">
                               
                                <input type="text" name="email" id="email" placeholder="email"   class="form-control" required>
                            </div>
							<div class="form-group">
                               
                                <input type="gender" name="gender" id="gender" placeholder="gender"  class="form-control" required>
                            </div>
							 <div class="form-group">
                      <label > </label>
                    <!--  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="class" name="class">
					-->
					<div class="col-sm-15">
                            <select class="form-control" id="district" name="did">
							
                              <?php
                     $sql="SELECT * FROM tbl_district";
			
                    $result=mysqli_query($db , $sql);
                    while($row = mysqli_fetch_assoc($result))
		
                    {
                        //if($type==$row['mtype_id'])
                            //echo '<option value="'.$row['mtype_id'].'" selected="selected">'.$row['m_type'].'</option>';
                        //else
                             echo '<option value="'.$row['did'].'" >'.$row['district'].'</option>';
                    }
                    ?>
                            </select>
                          </div>
                    </div>
                            <div class="form-group">
                                
                                <input type="text" name="ac_no" id="ac_no" placeholder="account_no"   class="form-control" required>
                            </div>
							<div class="form-group">
                              
                                <input type="number" name="phone" id="phone" placeholder="phone"  class="form-control" required>
								
                            </div>
                          
							<div class="form-group">
         
                                <input type="password" name="password" id="password" placeholder="password"  class="form-control" required>
                            </div>
                           <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>-->
                            <div class="form-group form-button">
                                <input type="submit" name="register2" id="signup"  onclick="registration2()" class="form-submit" value="register"/>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <figure><img src="images/jk.jpg" alt="sing up image"></figure>
                        <!--<a href="#" class="signup-image-link">I am already member</a>-->
                    </div>
                </div>
            </div>
        </section>
		</div>
            <!--      <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>-->
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                  <!--  <div class="card-body">
                      <p class="mb-4">Number of schools</p>
                      <p class="fs-30 mb-2">100</p>
                      <p>10.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                  <!--  <div class="card-body">
                      <p class="mb-4">Total Faculty</p>
                      <p class="fs-30 mb-2">34043</p>
                      <p>22.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                   <!-- <div class="card-body">
                      <p class="mb-4">Number of students</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>2.00% (30 days)</p>
                    </div>-->
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                   <!-- <div class="card-body">
                      <p class="mb-4">Number of parents</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>0.22% (30 days)</p>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © EDUCLASS   <a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">EDUCLASS <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

