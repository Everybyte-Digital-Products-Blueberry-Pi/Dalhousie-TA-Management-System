<!-- Courses will show on click in prof.html. Show courses that a prof is teaching. -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Prof Dashboard</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This is an example dashboard created using build-in elements and components."
    />
    <meta name="msapplication-tap-highlight" content="no" />
    <link href="./main.css" rel="stylesheet" />
    <link
      href="../styles/seiyria-slider/bootstrap-slider/dist/css/bootstrap-slider.min.css"
      rel="stylesheet"
    />
    <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
        from {
          opacity: 0.99;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes chartjs-render-animation {
        from {
          opacity: 0.99;
        }
        to {
          opacity: 1;
        }
      }
      .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
      }
    </style>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="http://maps.google.com/maps-api-v3/api/js/41/7/intl/en_gb/common.js"
    ></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="http://maps.google.com/maps-api-v3/api/js/41/7/intl/en_gb/util.js"
    ></script>
  </head>
  <body>
    <div
      class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"
    >
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div><h5>DALTAMS</h5></div>
          <div><h6>Professor Dashboard</h6></div>
          <div class="header__pane ml-auto">
            <div>
              <button
                type="button"
                class="hamburger close-sidebar-btn hamburger--elastic"
                data-class="closed-sidebar"
              >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="app-header__mobile-menu">
          <div>
            <button
              type="button"
              class="hamburger hamburger--elastic mobile-toggle-nav"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div class="app-header__menu">
          <span>
            <button
              type="button"
              class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
            >
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>
        <div class="app-header__content">
          <div class="app-header-right">
            <div class="header-btn-lg pr-0">
              <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                    <div class="btn-group">
                      <a
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="p-0 btn"
                      >
                        <img
                          width="42"
                          class="rounded-circle"
                          src="assets/images/avatars/1.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                  <div class="widget-content-left ml-3 header-user-info">
                    <div class="widget-heading">
                      BlueBerry Pi
                    </div>
                    <div class="widget-subheading">
                      Professor
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
              <div>
                <button
                  type="button"
                  class="hamburger close-sidebar-btn hamburger--elastic"
                  data-class="closed-sidebar"
                >
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="app-header__mobile-menu">
            <div>
              <button
                type="button"
                class="hamburger hamburger--elastic mobile-toggle-nav"
              >
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
          <div class="app-header__menu">
            <span>
              <button
                type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav"
              >
                <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
              </button>
            </span>
          </div>
          <div class="scrollbar-sidebar ps ps--active-y">
            <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu metismenu">
                <li>
                  <a href="Prof.html">
                    <i class="metismenu-icon pe-7s-user"></i>
                    My Dashboard
                  </a>
                </li>

                <li>
                  <a href="jobposting.html">
                    <i class="metismenu-icon pe-7s-file"></i>
                    View Jobs
                  </a>
                </li>

                <li>
                  <a href="pcourses.html">
                    <i class="metismenu-icon pe-7s-id"></i>
                    My Courses
                  </a>
                </li>

                <li>
                  <a href="pHourAprv.html" class="mm-active">
                    <i class="metismenu-icon pe-7s-file"></i>
                    Hours Approval
                  </a>
                </li>
              </ul>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div
                class="ps__thumb-x"
                tabindex="0"
                style="left: 0px; width: 0px;"
              ></div>
            </div>
            <div
              class="ps__rail-y"
              style="top: 0px; height: 706px; right: 0px;"
            >
              <div
                class="ps__thumb-y"
                tabindex="0"
                style="top: 0px; height: 589px;"
              ></div>
            </div>
          </div>
        </div>
        <div class="app-main__outer">
          <div class="app-main__inner">
            <ul
              class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav"
            >
              <li class="nav-item">
                <a
                  role="tab"
                  class="nav-link show active"
                  id="tab-0"
                  data-toggle="tab"
                  href="#tab-content-0"
                  aria-selected="true"
                >
                  <span>TA</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  role="tab"
                  class="nav-link show"
                  id="tab-1"
                  data-toggle="tab"
                  href="#tab-content-1"
                  aria-selected="false"
                >
                  <span>Marker</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div
                class="tab-pane tabs-animation fade active show"
                id="tab-content-0"
                role="tabpanel"
              >
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <h5 class="card-title">TA Hours Approval</h5>
                    <div class="table-responsive">
                      <table class="mb-0 table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>B00#</th>
                            <th>Course ID</th>
                            <th>Status</th>
                            <th>Details</th>
                          </tr>
                        </thead>
<<<<<<< HEAD:src/screens/pHourAprv.html
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark Otto</td>
                            <td>B00891215</td>
                            <td>CSCI 1180</td>
                            <td>
                              <div class="mb-2 mr-2 badge badge-success">
                                Approved
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalTAY"
                              >
                                View
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Sreya Goshal</td>
                            <td>B00891216</td>
                            <td>CSCI 1183</td>
                            <td>
                              <div class="mb-2 mr-2 badge badge-danger">
                                Declined
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalTAY"
                              >
                                View
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Hassan Saleh</td>
                            <td>B00891217</td>
                            <td>CSCI 1186</td>
                            <td>
                              <div id="status" class="mb-2 mr-2 badge badge-warning">
                                Pending
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalTAN"
                              >
                                View
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane tabs-animation fade"
                id="tab-content-1"
                role="tabpanel"
              >
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <h5 class="card-title">Markers Hours Approval</h5>
                    <div class="table-responsive">
                      <table class="mb-0 table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>B00#</th>
                            <th>Course ID</th>
                            <th>Status</th>
                            <th>Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark Otto</td>
                            <td>B00891215</td>
                            <td>CSCI 1180</td>
                            <td>
                              <div class="mb-2 mr-2 badge badge-success">
                                Approved
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalMkY"
                              >
                                View
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Sreya Goshal</td>
                            <td>B00891216</td>
                            <td>CSCI 1183</td>
                            <td>
                              <div class="mb-2 mr-2 badge badge-danger">
                                Declined
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalMkY"
                              >
                                View
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Hassan Saleh</td>
                            <td>B00891217</td>
                            <td>CSCI 1186</td>
                            <td>
                              <div class="mb-2 mr-2 badge badge-warning">
                                Pending
                              </div>
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn mr-2 mb-2 btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModalMkN"
                              >
                                View
                              </button>
                            </td>
                          </tr>
=======
                        <?php 
                        include_once 'connect.php';
                        $sql = "SELECT E_name, DalId, CourseID, id FROM form ORDER BY form.id DESC";
                        $index = 1;
                        $result = mysqli_query($conn,$sql);
                        $firstAppId = "";
                        $secondAppId = "";
                        $thirdAppId = "";
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $eName = $row["E_name"];
                                $B00 = $row["DalId"];
                                $cID = $row["CourseID"];
                                $id = $row["id"];
                                if($index<4)
                                {
                                    echo '<tbody>
                                    <tr>
                                    <th scope="row">'.$index.'</th>
                                    <td>'.$eName.'</td>
                                    <td>'.$B00.'</td>
                                    <td>'.$cID.'</td>
                                    <td>
                                        <div class="mb-2 mr-2 badge badge-success">
                                        Approved
                                        </div>
                                    </td>
                                    <td>';
                                    if($index == 1)
                                    {
                                      $modalId = "exampleModalTAY";
                                      $firstAppId = $id;
                                    }
                                    else if($index == 2)
                                    {
                                      $modalId = "exampleModalTAN";
                                      $secondAppId = $id;
                                    }
                                    else 
                                    {
                                      $modalId = "exampleModalMKY";
                                      $thirdAppId = $id;
                                    }
                                       echo  '<button
                                        type="button"
                                        class="btn mr-2 mb-2 btn-primary"
                                        data-toggle="modal"
                                        data-target="#'.$modalId.'"
                                        >
                                        View
                                        </button>
                                    </td>
                                    </tr>';
                                }
                                
                                $index ++;
                            }
                        }
                        ?>
>>>>>>> f5338c8db5a728b6f6179a1a4feda1a0b5c67530:src/screens/pHourAprv.php
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <!--Modal Feedback Evaluation-->
    <!-- Modal TA Done-->
    <?php
    $fSql = "SELECT E_name, Curr_Dal_stu, DalId, IName, CourseID, CRN, Term, Year, Total_hour, IClass_hours, Office_hours, Grading_hours, Other_hours, id FROM form WHERE form.id = $firstAppId";
    $fResult = mysqli_query($conn, $fSql);
    $fModal = mysqli_fetch_assoc($fResult);
    $fEName = $fModal["E_name"];
    $fCurrStd = $fModal["Curr_Dal_stu"];
    $fDalId = $fModal["DalId"];
    $fIName = $fModal["IName"];
    $fCourseId = $fModal["CourseID"];
    $fCRN = $fModal["CRN"];
    $fTerm = $fModal["Term"];
    $fYear = $fModal["Year"];
    $fTHours = $fModal["Total_hour"];
    $fCHours = $fModal["IClass_hours"];
    $fOHours = $fModal["Office_hours"];
    $fGHours = $fModal["Grading_hours"];
    $fOHours = $fModal["Other_hours"];
    ?>
    <div
      class="modal fade"
      id="exampleModalTAY"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: <?php echo $fEName ?>
                </li>
                <li class="list-group-item">Current Dal Student: Yes</li>
                <li class="list-group-item">ID# <?php echo $fDalId ?></li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: <?php echo $fCourseId ?> &sol; <?php echo $fCRN ?>
                </li>
                <li class="list-group-item">Term: <?php echo $fTerm ?></li>
                <li class="list-group-item">Year: <?php echo $fYear ?></li>
                <li class="list-group-item">
                  Submission Time: 12:30PM, Jan 18, 2020
                </li>
              </ul>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Position: TA</li>
                <li class="list-group-item">Total Hours: <?php echo $fTHours ?></li>
                <li class="list-group-item">In-Class Duties: <?php echo $fCHours ?></li>
                <li class="list-group-item">Office Duties: <?php echo $fOHours ?></li>
                <li class="list-group-item">
                  Marking, Grading, Invigilating: <?php echo $fGHours ?>
                </li>
                <li class="list-group-item">Others (Labs): <?php echo $fOtHours ?></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal TA Undone-->
    <?php
    $sSql = "SELECT E_name, Curr_Dal_stu, DalId, IName, CourseID, CRN, Term, Year, Total_hour, IClass_hours, Office_hours, Grading_hours, Other_hours, id FROM form WHERE form.id = $secondAppId";
    $sResult = mysqli_query($conn, $sSql);
    $sModal = mysqli_fetch_assoc($sResult);
    $sEName = $sModal["E_name"];
    $sCurrStd = $sModal["Curr_Dal_stu"];
    $sDalId = $sModal["DalId"];
    $sIName = $sModal["IName"];
    $sCourseId = $sModal["CourseID"];
    $sCRN = $sModal["CRN"];
    $sTerm = $sModal["Term"];
    $sYear = $sModal["Year"];
    $sTHours = $sModal["Total_hour"];
    $sCHours = $sModal["IClass_hours"];
    $sOHours = $sModal["Office_hours"];
    $sGHours = $sModal["Grading_hours"];
    $sOtHours = $sModal["Other_hours"];
    ?>
    <div
      class="modal fade"
      id="exampleModalTAN"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: <?php echo $sEName ?>
                </li>
                <li class="list-group-item">Current Dal Student: Yes</li>
                <li class="list-group-item">ID# <?php echo $sDalId ?></li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: <?php echo $sCourseId ?> &sol; <?php echo $sCRN ?>
                </li>
                <li class="list-group-item">Term: <?php echo $sTerm ?></li>
                <li class="list-group-item">Year: <?php echo $sYear ?></li>
                <li class="list-group-item">
                  Submission Time: 12:30PM, Jan 18, 2020
                </li>
              </ul>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Position: TA</li>
                <li class="list-group-item">Total Hours: <?php echo $sTHours ?></li>
                <li class="list-group-item">In-Class Duties: <?php echo $sCHours ?></li>
                <li class="list-group-item">Office Duties: <?php echo $sOHours ?></li>
                <li class="list-group-item">
                  Marking, Grading, Invigilating: <?php echo $sGHours ?>
                </li>
                <li class="list-group-item">Others (Labs): <?php echo $sOtHours ?></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button id="approved" type="button" class="btn btn-success" onclick="changeValue()" data-dismiss="modal">
              Approve
            </button>
            <button id="declined" type="button" class="btn btn-danger" data-dismiss="modal">
              Decline
            </button>
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <?php
    $tSql = "SELECT E_name, Curr_Dal_stu, DalId, IName, CourseID, CRN, Term, Year, Total_hour, IClass_hours, Office_hours, Grading_hours, Other_hours, id FROM form WHERE form.id = $thirdAppId";
    $tResult = mysqli_query($conn, $tSql);
    $tModal = mysqli_fetch_assoc($tResult);
    $tEName = $tModal["E_name"];
    $tCurrStd = $tModal["Curr_Dal_stu"];
    $tDalId = $tModal["DalId"];
    $tIName = $tModal["IName"];
    $tCourseId = $tModal["CourseID"];
    $tCRN = $tModal["CRN"];
    $tTerm = $tModal["Term"];
    $tYear = $tModal["Year"];
    $tTHours = $tModal["Total_hour"];
    $tCHours = $tModal["IClass_hours"];
    $tOHours = $tModal["Office_hours"];
    $tGHours = $tModal["Grading_hours"];
    $tOtHours = $tModal["Other_hours"];
    ?>
    <!-- Modal Marker Done-->
    <div
      class="modal fade"
      id="exampleModalMkY"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: <?php echo $tEName ?>
                </li>
                <li class="list-group-item">Current Dal Student: <?php echo $CurrStudent ?></li>
                <li class="list-group-item">ID#: <?php echo $tDalId ?></li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: <?php echo $tCourseId ?> &sol; <?php echo $tCRN ?>
                </li>
                <li class="list-group-item">Term: <?php echo $tTerm ?></li>
                <li class="list-group-item">Year: <?php echo $tYear ?></li>
                <li class="list-group-item">
                  Submission Time: 12:30PM, Jan 18, 2020
                </li>
              </ul>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Position: Marker</li>
                <li class="list-group-item">Total Hours: <?php echo $tTHours ?></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal TA Undone-->
    <div
      class="modal fade"
      id="exampleModalMkN"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      style="display: none;"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Details</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: Abdullah X
                </li>
                <li class="list-group-item">Current Dal Student: Yes</li>
                <li class="list-group-item">ID# B00xxxxxx</li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: CSCI 8000 &sol; 123456
                </li>
                <li class="list-group-item">Term: Summer</li>
                <li class="list-group-item">Year: 2020</li>
                <li class="list-group-item">
                  Submission Time: 12:30PM, Jan 18, 2020
                </li>
              </ul>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">Position: Marker</li>
                <li class="list-group-item">Total Hours: 10</li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button name="status" type="button" class="btn btn-success" data-dismiss="modal">
              Approve
            </button>
            <button name="status" type="button" class="btn btn-danger" data-dismiss="modal">
              Decline
            </button>
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD:src/screens/pHourAprv.html

    <script
      type="text/javascript"
      src="../scripts/scripts.pcourses.js"
    ></script>
<script
  type="text/javascript"
  src="../scripts/scripts.pHourAprv.js">
</script>
=======
>>>>>>> f5338c8db5a728b6f6179a1a4feda1a0b5c67530:src/screens/pHourAprv.php
    <div class="jvectormap-tip"></div>
  </body>
</html>
