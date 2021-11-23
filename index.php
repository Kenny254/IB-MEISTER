<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IB REPORT GENERATOR</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">   

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IB MEISTER<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Reporting</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Generate Reports:</h6>
                        <a class="collapse-item" href="#">General</a>
                        <a class="collapse-item" href="#">Design</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">BTEC Generator:</h6>
                        <a class="collapse-item" href="#">Cover Sheet</a>
                        <a class="collapse-item" href="#">Declaration forms</a>
                        <a class="collapse-item" href="#">Record Sheets</a>
                        <a class="collapse-item" href="#">Practical Sheet</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>File Manager</span>
                </a>
        
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Google Drive:</h6>
                        <a class="collapse-item" href="#">Program Guides</a>
                        <a class="collapse-item" href="#">IB Rubrics</a>
                        <a class="collapse-item" href="#">Exemplars</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h5 class="h5 mb-4 text-gray-800">IB Report Generator</h5>

                </div>
                <!-- /.container-fluid -->


 
<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Select Options</h6>


                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

            </div>

      <!-- Card Body -->
            <div class="card-body">


            <form method='POST'>

  <!-- Introductory Comments -->
            <div class="mb-3">
                        <label for="exampleFormControlSelect1">Introductory Note</label>
                <select class="form-control" id="exampleFormControlSelect1" name="3">
                    <option value="">
                      Choose an introductory comment</option>
                    <option value="is an excellent student.">
                        is an excellent student..</option>
                    <option value="is much more respectful to teachers and is doing extremely well in class and assignments. "> 
                        is much more respectful to teachers and is doing extremely well in class and assignments.</option>
                    <option value="is a little shy and quiet, so I would like to see (him/her) speak and volunteer in class more often. "> 
                        is a little shy and quiet , so I would like to see (him/her) speak and volunteer in class more often.</option>
                    <option value="is now more focused on the lesson, participates frequently and plays less. "> 
                        is now more focused on the lesson, participates frequently and plays less.</option>
                    <option value="should try to overcome (his/her) shyness and speak more often. "> 
                        should try to overcome (his/her) shyness and speak more often.</option>
                    <option value="has a great attitude and is generally well behaved. "> 
                        has a great attitude and is generally well behaved.</option>
                    <option value="is quite new to this level and should have no problem adapting and continuing to improve. "> 
                        is quite new to this level and should have no problem adapting and continuing to improve.</option>
                    <option value=""> 
                        has a great personality and a positive attitude towards learning.</option>
                    <option value="has a great personality and a positive attitude towards learning. "> 
                        has a good attitude and a great personality.</option>
                    <option value="is a model student, who is performing at the top of (his/her) ability. "> 
                        is a model student, who is performing at the top of (his/her) ability.</option>
                    <option value="is a friendly, cheerful student who gets along well with the other students in the class and makes an effort. "> 
                        is a friendly, cheerful student who gets along well with the other students in the class and makes an effort.</option>
                    <option value="is a smart studenlt and always seems to know the right answer. "> 
                        is a smart studenlt and always seems to know the right answer.</option>
                    <option value="has a great attitude and a great personality and (he/sho) makes a tremendous effort. "> 
                        (name) has a great attitude and a great personality and (he/sho) makes a tremendous effort.</option>
                    <option value="(name) is an excellent student with a great attitude to learnings. "> 
                        (name) is an excellent student with a great attitude to learnings.</option>
                </select>
            </div> 

  <!-- Behavioural comments -->
            <div class="mb-3">
                <label for="exampleFormControlSelect1">Bahaviour</label>
                <select class="form-control" id="exampleFormControlSelect1" name="4">
                <option value="">
                    Select students behavior</option>
                <option value="participates in all activities and always comes to class prepared. "> 
                    participates in all activities and always comes to class prepared.</option>
                <option value="participates in all activities and always comes to class prepared. "> (
                    participates in all activities and always comes to class prepared.</option>
                <option value="Sometimes (he/she) loses focus and becomes distracted but mostly (he/she) is attentive and well behaved. "> 
                    Sometimes (he/she) loses focus and becomes distracted but mostly (he/she) is attentive and well behaved.</option> 
                <option value="definitely likes to participate in class and during the various (subject) activities we play. "> 
                    definitely likes to participate in class and during the various (subject) activities we play.</option>
                <option value="enjoys all class activities. "> 
                    enjoys all class activities.</option>
                <option value="is willing to take part in all classroom activities. "> 
                    is willing to take part in all classroom activities.</option>
                <option value="enjoys participating and almost always completes (his/her) homework. "> 
                    enjoys participating and almost always completes (his/her) homework.</option>
                <option value="is cooperative and well mannered. "> 
                    is cooperative and well mannered.</option> 
                <option value="is self-confident and has excellent manners. "> 
                    is self-confident and has excellent manners.</option>
                <option value="has become more distracted this semester and seems more interested in talking to other students. "> 
                    has become more distracted this semester and seems more interested in talking to other students.</option> 
                <option value="always does (his/her) homework and classwork and is making great progress due to (his/her) diligence. "> 
                    always does (his/her) homework and classwork and is making great progress due to (his/her) diligence.</option> 
                <option value="always tries hard in class and completes (his/her) homework on time and thoroughly. "> 
                    always tries hard in class and completes (his/her) homework on time and thoroughly.</option>
                <option value="is a very patient relaxed student. This helps (him/her) try new things." > 
                    is a very patient relaxed student. This helps (him/her) try new things. </option>
                </select>
            </div>
            
 <!-- Subject remarks -->         
             <div class="mb-3">
                <label for="exampleFormControlSelect1">Subject Remarks</label>
                <select class="form-control" id="exampleFormControlSelect1" name="5" >
                <option value="">
                    Select subject remarks</option>
                <option value="demonstrated a thorough understanding of the (subject) topics we have covered in class."> 
                    has proven to have a key understanding of the (subject) topics we have been studying.</option>
                <option value="demonstrated a thorough understanding of the (subject) topics we have covered this term."> 
                    has proven to have an exhaustive understanding of the (subject) material we have covered this term.</option>
                <option value="demonstrated a thorough understanding of the (subject) topics we have covered in class."> 
                    has demonstrated a thorough understanding of the (subject) topics we have covered in class.</option>
                <option value="demonstrated a solid understanding of the (subject) topics we have been studying."> 
                    has demonstrated a solid understanding of the (subject) topics we have been studying.</option>
                <option value="mastered the fundamentals of (subject) in class due to (his/her) attention to detail and diligence."> 
                    has mastered the fundamentals of (subject) in class due to (his/her) attention to detail and diligence.</option>
                <option value="had proven to have a solid grasp of the (subject) topics we have been studying."> 
                    has proven to have a solid grasp of the (subject) topics we have been studying.</option>
                <option value="has proven to have an exhaustive grasp of the (subject) topics we have been studying."> 
                    has proven to have an exhaustive grasp of the (subject) topics we have been studying.</option>
                <option value="has  shown an intrinsic understanding of the (subject) material we have been studying."> 
                    has  shown an intrinsic understanding of the (subject) material we have been studying.</option>
                <option value="has exhibited a full understanding of the (subject) material we have been studying."> 
                    has exhibited a full understanding of the (subject) material we have been studying.</option>
                <option value="has shown a great grasp of the (subject) material we have been studying."> 
                    has shown a great grasp of the (subject) material we have been studying.</option> 
                <option value="has proven to have a great understanding of the (subject) material we have covered in class."> 
                    has proven to have a great understanding of the (subject) material we have covered in class.</option>
                <option value="has exhibited a detailed understanding of the (subject) material we have covered in class."> 
                    has exhibited a detailed understanding of the (subject) material we have covered in class.</option>
                <option value="has exhibited a vital grasp of the (subject) material we have covered in class."> 
                    has exhibited a vital grasp of the (subject) material we have covered in class.</option>
                <option value="has demonstrated an exhaustive grasp of the (subject) material we have covered in class."> 
                    has demonstrated an exhaustive grasp of the (subject) material we have covered in class.</option>
                </select>
            </div>

  <!-- CLAIRE Values -->
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">CLAIRE values</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="6">
                        <option value="">
                            Select the CLAIRE values demonstrated</option>
                        <option value="has demonstrated the CLAIRE values particularly curiosity.">
                            has demonstrated the CLAIRE values particularly curiosity.</option>
                        <option value="has demonstrated the CLAIRE values particularly leadership."> 
                            has demonstrated the CLAIRE values particularly leadership.</option>
                        <option value="has demonstrated the CLAIRE values particularly accountability."> 
                            has demonstrated the CLAIRE values particularly accountability.</option>
                        <option value="has demonstrated the CLAIRE values particularly being innovative."> 
                            has demonstrated the CLAIRE values particularly being innovative.</option>
                        <option value="has demonstrated the CLAIRE values particularly responsible citizenship."> 
                            has demonstrated the CLAIRE values particularly responsible citizenship.</option>
                        <option value="has demonstrated the CLAIRE has being one of the excellent student."> 
                            has demonstrated the CLAIRE has being one of the excellent student.</option>
                        </select>
                    </div>

  <!-- ATL Skills -->
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">ATL Skills</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="7">
                        <option value="">
                            Select the ATL Skills demonstrated</option>
                        <option value="has applied his thinking skills creatively and critically."> 
                            has applied his thinking skills creatively and critically.</option>
                        <option value="can easily communicate to both peers and teachers in a fluently."> 
                            can easily communicate to both peers and teachers in a fluently.</option>
                        <option value="has demostrated social skills throughout her exploratiions."> 
                            has demostrated social skills throughout her exploratiions.</option> 
                        <option value="is bale to self manage ,organise and reflect on (his/her) work."> 
                            is bale to self manage ,organise and reflect on (his/her) work.</option>
                        <option value="has shown great attitude and affection towards learning."> 
                            has shown great attitude and affection towards learning.</option>
                        <option value="has demonstrated effective research skills."> 
                            has demonstrated effective research skills.</option> 
                        </select>
                    </div>
<!-- Conclusion -->
                    <div class="mb-3">
                    <label for="exampleFormControlSelect1">Conclusion</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="8">
                    <option value="">
                        Choose a concluding comment</option>
                    <option value="is making steady progress in literacy and has started to enjoy (his/her) growing achievements."> 
                        is making steady progress in literacy and has started to enjoy (his/her) growing achievements.</option>
                    <option value="is achieving good success in this subject."> 
                        is achieving good success in this subject.</option>
                    <option value=" It's fun to teach (name) because I see (he/she) is always improving and learning new things."> 
                        It's fun to teach (name) because I see (he/she) is always improving and learning new things.</option> 
                    <option value="finds (subject) challenging but is making good progress."> 
                        finds (subject) challenging but is making good progress.</option>
                    <option value="finds (subject) challenging but is making progress."> 
                        finds (subject) challenging but is making progress.</option> 
                    <option value="is comprehension of the lesson material is level-appropriate."> 
                        comprehension of the lesson material is level-appropriate.</option>
                    <option value=""> 
                        has improved so much since (he/she) started! In short, (he/she) is doing well in class.</option>
                    <option value="has improved so much since (he/she) started! In short, (he/she) is doing well in class."> 
                        finds (subject) challenging but is making great progress.</option>
                    <option value="is progressing at a very rapid pace."> 
                        is progressing at a very rapid pace.</option> 
                    <option value="comprehension of the lesson material is very good."> 
                        comprehension of the lesson material is very good.</option> 
                    <option value="is doing very well and enjoys (his/her) classes."> 
                        is doing very well and enjoys (his/her) classes.</option> 
                    <option value="has great potential and works toward achieving it."> 
                        has great potential and works toward achieving it.</option>
                    <option value="Keep trying!"> 
                        Keep trying!</option>
                    </select>
                  </div>
                  
            </div>
          
            <button class="btn btn-primary" type="submit">Generate Comments</button>
       
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
            </div>
            <div class="card-body">

                <div class="mb-3"><label for="exampleFormControlInput1">Student Name</label>

    

                    <input autocomplete="true" class="form-control" id="exampleFormControlInput1" type="text" placeholder="e.g Ken Ronoh" name="0" >
                </div>

     
                <div class="mb-3">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="1">
                           <option value="">Select Gender</option>
                           <option value="He">Male</option>
                           <option value="She">Female</option>
                        </select>
                </div>
     
                <div class="mb-3"><label for="exampleFormControlInput1">Subject</label>
                <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="e.g Design or Criterion" name="2">
                </div>

            </div>
        </div>
        </form>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Generated Comments</h6>
        </div>

          <div class="card-body">
          <?php
                 $name0 = $_POST['0'];
                 $name1 = $_POST['1'];
                 $name2 = $_POST['2'];
                 $name3 = $_POST['3'];
                 $name4 = $_POST['4'];
                 $name5 = $_POST['5'];
                 $name6 = $_POST['6'];
                 $name7 = $_POST['7'];
                 $name8 = $_POST['8'];
                 $sentence = "$name0 $name3 $name1 $name4 $name0 $name5 $name1 $name6 $name1 $name7 $name0 $name8 "; 

                // Display replaced string
                $fsentence = str_replace("(subject)", "$name2", $sentence);
                $draft = str_replace("(his/her)", "$name1", $fsentence);
                $fdraft = str_replace("(name)", "$name0", $draft);

           ?>

             <textarea autocomplete='off' class="form-control" id="myInput" rows="10"> <?php echo $fdraft; ?> </textarea> <br>
             <button class="btn btn-success" onclick="myFunction()">Copy Comments</button> 
          </div>

        </div>

    </div>
</div>
</div>
</div>
</div>
<!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; IB Reporting Tools 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
        
    <!-- End of Content Wrapper -->

    </div>

   <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/clipboard.js"></script>

   

</body>

</html>