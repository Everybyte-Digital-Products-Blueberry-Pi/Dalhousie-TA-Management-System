<!-- Courses will show on click in prof.html. Show courses that a prof is teaching. -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Professor Hours Approval</title>
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
          <div class="mr-1"><h5>DALTAMS</h5></div>
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
                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                      </a>
                      <div
                        tabindex="-1"
                        role="menu"
                        aria-hidden="true"
                        class="dropdown-menu dropdown-menu-right"
                        x-placement="bottom-end"
                        style="
                          position: absolute;
                          will-change: transform;
                          top: 0px;
                          left: 0px;
                          transform: translate3d(-180px, 44px, 0px);
                        "
                      >
                        <div class="card-body">
                          <img
                            width="60"
                            src="assets/images/avatars/4.jpg"
                            alt="Card image cap"
                            class="rounded-circle"
                          />
                          <br />
                          <br />
                          <h5 class="card-title">John Doe</h5>
                          <h6 class="card-subtitle">
                            Professor
                          </h6>
                          <p>
                            Email: ab12345@dal.ca<br />Phone: (123) 456 789<br />Courses:
                            CSCI 1234, CSCI 5678
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="widget-content-left ml-3 header-user-info">
                    <div class="widget-heading">
                      Alina Mclourd
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
                  <a href="prof.html">
                    <i class="metismenu-icon pe-7s-user"></i>
                    My Dashboard
                  </a>
                </li>
                <li>
                  <a href="pCourses.html">
                    <i class="metismenu-icon pe-7s-id"></i>
                    My Courses
                  </a>
                </li>
                <li>
                  <a href="pPostings.html">
                    <i class="metismenu-icon pe-7s-file"></i>
                    My Postings
                  </a>
                </li>
                <li>
                  <a href="pHourAprv.php" class="mm-active">
                    <i class="metismenu-icon pe-7s-file"></i>
                    Hours Approval
                  </a>
                </li>
                <li>
                  <a href="jobsP.html" target="_blank">
                    <i class="metismenu-icon pe-7s-file"></i>
                    View Jobs
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
                            <th>Position</th>
                            <th>Status</th>
                            <th>Details</th>
                            
                          </tr>
                        </thead>
                        <!---PHP-->

                        <?php          
                        include_once 'connect.php';
                        $sql = "SELECT E_name,  DalId, CourseID,id, Position FROM form ORDER BY form.id DESC"; //Extracting data from the form table
                        $index = 1;
                        $result = mysqli_query($conn,$sql);
                        $idList = array(); //an array holding all the ids
                        $modal = "ExampleModalTAY"; //the class name for the modals
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $empName = $row["E_name"];
                                $BId = $row["DalId"];
                                $cID = $row["CourseID"];
                                $id = $row["id"];
                                $idList[$id] = $modal.$id; //generating the modal class name for creating required amount of modals
                                $position = $row["Position"];
                                //To display Marker instead of MK
                                if($position=="MK")
                                {
                                  $position = "Marker";
                                }
                                //Command to extract status information
                                $status_sql = "SELECT status FROM status WHERE status.id=$id";
                                $statusRow = mysqli_fetch_assoc(mysqli_query($conn, $status_sql));
                                $status = $statusRow["status"]; 
                                echo '<tbody>
                                <tr>
                                <th scope="row">'.$index.'</th>
                                <td>'.$empName.'</td>
                                <td>'.$BId.'</td>
                                <td>'.$cID.'</td>
                                <td>'.$position.'</td>
                                <td>';
                                if($status=="approved")
                                {
                                  echo '<div class="mb-2 mr-2 badge badge-success">
                                  Approved
                                  </div>';
                                }
                                else if($status == "declined")
                                {
                                  echo '<div class="mb-2 mr-2 badge badge-danger">
                                  Declined
                                  </div>';
                                }
                                else
                                {
                                  echo '<div class="mb-2 mr-2 badge badge-warning">
                                  Pending
                                  </div>';
                                }

                                echo '</td>
                                <td>';
                                
                                    echo  '<button
                                    type="button"
                                    class="btn mr-2 mb-2 btn-primary"
                                    data-toggle="modal"
                                    data-target="#'.$idList[$id].'" 
                                    >
                                    View
                                    </button>
                                </td>
                                </tr>';
                                
                                
                                $index ++;
                            }
                        }

                        else
                        {
                          echo "You haven't recieved any applications yet.";
                        }
                        ?>
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
    <script
      type="text/javascript"
      src="./assets/scripts/main.js"
    ></script>
    <!-- Code injected by live-server -->
    <script type="text/javascript">
      // <![CDATA[  <-- For SVG support
      if ("WebSocket" in window) {
        (function () {
          function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
              var elem = sheets[i];
              var parent = elem.parentElement || head;
              parent.removeChild(elem);
              var rel = elem.rel;
              if (
                (elem.href && typeof rel != "string") ||
                rel.length == 0 ||
                rel.toLowerCase() == "stylesheet"
              ) {
                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, "");
                elem.href =
                  url +
                  (url.indexOf("?") >= 0 ? "&" : "?") +
                  "_cacheOverride=" +
                  new Date().valueOf();
              }
              parent.appendChild(elem);
            }
          }
          var protocol =
            window.location.protocol === "http:" ? "ws://" : "wss://";
          var address =
            protocol + window.location.host + window.location.pathname + "/ws";
          var socket = new WebSocket(address);
          socket.onmessage = function (msg) {
            if (msg.data == "reload") window.location.reload();
            else if (msg.data == "refreshcss") refreshCSS();
          };
          if (
            sessionStorage &&
            !sessionStorage.getItem("IsThisFirstTime_Log_From_LiveServer")
          ) {
            console.log("Live reload enabled.");
            sessionStorage.setItem("IsThisFirstTime_Log_From_LiveServer", true);
          }
        })();
      } else {
        console.error(
          "Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading."
        );
      }
      // ]]>
    </script>

    <!-- Modal TA Done-->
    <?php
    //Get the ids from the idList array to extract form information based on the the id
    $i = 0;
    $keys = array_keys($idList);
    while($i<sizeof($idList))
    {
      $sql = "SELECT E_name, Curr_Dal_stu, DalId, IName, CourseID, CRN, Term, Year, Total_hour, IClass_hours, Office_hours, Grading_hours, Other_hours, id, Position FROM form WHERE form.id = $keys[$i]";
      $result = mysqli_query($conn, $sql);
      $modal = mysqli_fetch_assoc($result);
      $eName = $modal["E_name"];
      $currStd = $modal["Curr_Dal_stu"];
      $dalId = $modal["DalId"];
      $iName = $modal["IName"];
      $courseId = $modal["CourseID"];
      $CRN = $modal["CRN"];
      $Term = $modal["Term"];
      $Year = $modal["Year"];
      $THours = $modal["Total_hour"];
      $CHours = $modal["IClass_hours"];
      $OHours = $modal["Office_hours"];
      $GHours = $modal["Grading_hours"];
      $OtHours = $modal["Other_hours"];
      $position = $modal["Position"];
      if($position=="MK")
      {
        $position = "Marker";
      }

      $sql2 = "SELECT status FROM status WHERE id = $keys[$i]";
      $result2 = mysqli_query($conn, $sql2);
      $statusRow = mysqli_fetch_assoc($result2);
      $statusVal = $statusRow["status"];

      echo '<div
    class="modal fade"
    id="'.$idList[$keys[$i]].'"
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
                Emplyoyee Name: '.$eName.'
              </li>
              <li class="list-group-item">Current Dal Student: Yes</li>
              <li class="list-group-item">ID#: '.$dalId.' </li>
              <li class="list-group-item">
                Course ID &amp; CRN no: '. $courseId.' &sol; '. $CRN.'
              </li>
              <li class="list-group-item">Term: '.$Term.'</li>
              <li class="list-group-item">Year: '.$Year.'</li>
              <li class="list-group-item">
                Submission Time: 12:30PM, Jan 18, 2020
              </li>
            </ul>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Position: '.$position.'</li>
              <li class="list-group-item">Total Hours: '.$THours.'</li>';
              if($position == "TA")
              {
                echo '<li class="list-group-item">In-Class Duties: '.$CHours.' </li>
                <li class="list-group-item">Office Duties: '.$OHours.'</li>
                <li class="list-group-item">
                  Marking, Grading, Invigilating: '.$GHours.'
                </li>
                <li class="list-group-item">Others (Labs): '.$OtHours.'</li>';
              }

            echo '</ul>
          </div>
        </div>
        <div class="modal-footer">';
        if(mysqli_num_rows($result2)>0)
        {
          if($statusVal=="approved")
          {
            echo '<a href = "status.php?id='.$keys[$i].'&status=declined" class="btn btn-danger">
            Decline
          </a>';
          }
          else
          {
            echo '<a href = "status.php?id='.$keys[$i].'&status=approved" class="btn btn-success">
            Approve
          </a>';
          }
        }
        else
        {
          echo '<a href = "status.php?id='.$keys[$i].'&status=approved" class="btn btn-success">
          Approve
    </a>
    <a href = "status.php?id='.$keys[$i].'&status=declined" class="btn btn-danger">
      Decline
    </a>';
        }
        
      echo '<button
        type="button"
        class="btn btn-secondary"
        data-dismiss="modal"
      >
        Close
      </button>
        </div>
      </div>
    </div>
  </div>';
    $i++;
    }
    
    ?>
            <div class="jvectormap-tip"></div>
  </body>
</html>
