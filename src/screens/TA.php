<!-- TA main Dashboard and profile page -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TA dashboard</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This is an example dashboard created using build-in elements and components."
    />
    <meta name="msapplication-tap-highlight" content="no" />
    <link href="../styles/custom-styles/styles.calendar.css" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" />
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script
      type="text/javascript"
      charset="UTF-8"
      src="../scripts/scripts.TA.js"
    ></script>
  </head>
  <body>
    <div
      class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"
    >
      <div class="app-header header-shadow">
        <div class="app-header__logo">
          <div><h5>DALTAMS</h5></div>
          <div><h6>TA Dashboard</h6></div>
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
                      TA
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
            <div><h5>DALTAMS</h5></div>
            <div><h6>TA Dashboard</h6></div>
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
                  <a href="jobs.html" target="_blank">
                    <i class="metismenu-icon pe-7s-pendrive"></i>
                    Jobs
                  </a>
                </li>

                <li>
                  <a href="profile.html" class="mm-active">
                    <i class="metismenu-icon pe-7s-user"></i>
                    My Dashboard
                  </a>
                </li>

                <li>
                  <a href="TAcourses.html">
                    <i class="metismenu-icon pe-7s-file"></i>
                    My Courses
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
		<?php	 
        session_start();
         include_once 'course-list.php';
          
        ?>		  
        <div class="app-main__outer">
          <div class="app-main__inner">
            <div class="row">
              <!-- Hours of submission by Ab -->
              <form class="col-md-12 col-lg-6" method="post" action="TA.php">
                <div class="mb-3 card">
                  <div class="ml-3 mt-3 card-title">Hour Submission</div>
                  <div class="ml-3 mr-3 position-relative form-group">
                    <label for="exampleCustomSelect" class=""
                      >Select Course</label
                    ><select
                      type="select"
                      id="exampleCustomSelect"
                      name="Courses"
                      class="custom-select"
                    >
                      <option value="">Select</option>
                      <option value="CSCI 1800">CSCI 1800 MK</option>
                      <option value="CSCI 2100">CSCI 2100 TA</option>
                      <option value="CSCI 3000">CSCI 3000 MK</option>
                    </select>
                  </div>
                  <input
                    type="submit"
                    name="submit"
                    class="btn ml-2 mb-2 mr-2 btn-primary"
                    value= "Confirm Selection"
                  />
                  <button type="button" class="btn ml-2 mb-2 mr-2 btn-primary" data-toggle="modal"
                    data-target="#modalTAHSub">Feedback</button>
                </div>
              </form>

		      <?php
                if(isset($_POST['submit']))
                {  
                  $course = $_POST['Courses'];  // Storing Selected Value In Variable
                  $_SESSION['course'] = $course;
                }
              ?>   
				   
																					 
												
				 
              <!-- Calendar by Su -->
              <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                  <div class="calendar__header">
                    <div class="card-title">Mon</div>
                    <div class="card-title">Tue</div>
                    <div class="card-title">Wed</div>
													 
									   
													  
													  
                  </div>
                  <div class="calendar__week">
                    <div class="calendar__day">
                      <div class="calender_date card-title">1</div>
                      <p class="card-subtitle">
                        11:35-12:25 <br />
                        Busy
                      </p>
                    </div>
                    <div class="calendar__day">
                      <div class="calender_date card-title">2</div>
                      <p class="card-subtitle">
                        2:25-3:55 <br />
                        Busy
                      </p>
                    </div>
                    <div class="calendar__day">
                      <div class="calender_date card-title">3</div>
                      <p class="card-subtitle">
                        4:35-5:25 <br />
                        Busy
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Courses and Feedback by Nh or Ab (Need to decide) -->
            <div class="row"></div>

            <!-- This is the basic information by Su-->
            <div class="row"></div>

            <!-- This is the Hours of Work and payrate of the TA by Undecided.-->
            <div class="row"></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <!-- Modal TA Hour Submission-->
    <div
      class="modal fade"
      id="modalTAHSub"
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
          <div class="">
            <div class="card-body">
              <h5 class="card-title">Basic Information</h5>
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: <?php echo $courses[$course]['eName']  ?>
                </li>
                <li class="list-group-item">Current Dal Student: <?php echo $courses[$course]['CurrStudent']  ?></li>
                <li class="list-group-item">ID#: <?php echo $courses[$course]['Id']  ?></li>
                <li class="list-group-item">Instructor: <?php echo $courses[$course]['iName']  ?></li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: <?php echo $courses[$course]['CourseID']  ?> / <?php echo $courses[$course]['CRN']  ?>
                </li>
                <li class="list-group-item">Term: <?php echo $courses[$course]['Term']  ?></li>
                <li class="list-group-item">Year: <?php echo $courses[$course]['year']  ?></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">
                Teaching Assistant Duties Form
              </h5>
              <h6 class="card-subtitle">
                Article 17.1 – Dalhousie / CUPE 3912 Collective Agreement (^)
              </h6>
<<<<<<< HEAD:src/screens/TA.html
              <form class="needs-validation">
=======
              <form class="" method="post" action="insert.php">
>>>>>>> fca9ca8918be5f7162fdc5907f2e41c019638e54:src/screens/TA.php
                <div class="form-row">
                  <div class="col-md-auto">
                    <div class="position-relative form-group">
                      <label for="exampleCustomSelect" class=""
                        >Total Hours</label
                      ><select
                        type="select"
                        id="HourSub"
                        name="tHours"
                        class="custom-select"
                      >
                        <option value="">Select</option>
                        <option value="25">25</option>
                        <option value="35">35</option>
                        <option value="45">45</option>
                        <option value="65">65</option>
                        <option value="90">90</option>
                        <option value="110">110</option>
                        <option value="130">130</option>
                        <option value="0">Other</option>
                      </select>
                    </div>
                    <div class="position-relative form-group 0 box">
                      <label for="examplePassword11" class=""
                        >Note: Above TA assignment together with other TA
                        assignments for other courses cannot exceed 130 hours
                        per semester - as per (^) </label
                      ><input
                        id="totalHours"
                        placeholder="Enter total hours"
                        type="text"
                        class="form-control"
						name="otherTHours"					
                      />
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend" style="width: 30%;">
                        <span class="input-group-text" style="width: 100%;"
                          >In-Class Duties</span
                        >
                      </div>
                      <input
                        name="inclassDuties"
                        type="text"
                        class="form-control"
<<<<<<< HEAD:src/screens/TA.html
                        placeholder="Enter hours" required
=======
                        placeholder="Enter hours"
												 
>>>>>>> fca9ca8918be5f7162fdc5907f2e41c019638e54:src/screens/TA.php
                      />
                    </div>
                    <br />
                    <div class="input-group">
                      <div class="input-group-prepend" style="width: 30%;">
                        <span class="input-group-text" style="width: 100%;"
                          >Office Duties</span
                        >
                      </div>
                      <input
                        name="officeDuties"
                        type="text"
                        class="form-control"
<<<<<<< HEAD:src/screens/TA.html
                        placeholder="Enter hours" required
=======
                        placeholder="Enter hours"
												 
>>>>>>> fca9ca8918be5f7162fdc5907f2e41c019638e54:src/screens/TA.php
                      />
                    </div>
                    <br />
                    <div class="input-group">
                      <div class="input-group-prepend" style="width: 30%;">
                        <span class="input-group-text" style="width: 100%;"
                          >Marking, Grading, Invigilating</span
                        >
                      </div>
                      <input
                        name="markingHours"
                        type="text"
                        class="form-control"
<<<<<<< HEAD:src/screens/TA.html
                        placeholder="Enter hours" required
=======
                        placeholder="Enter hours"
												 
>>>>>>> fca9ca8918be5f7162fdc5907f2e41c019638e54:src/screens/TA.php
                      />
                    </div>
                    <br />
                    <div class="input-group">
                      <div class="input-group-prepend" style="width: 30%;">
                        <span class="input-group-text" style="width: 100%;"
                          >Others</span
                        >
                      </div>
                      <input
                        name="otherHours"
                        type="text"
                        class="form-control"
                        placeholder="Enter hours"
												 
                      />
                    </div>
                    <br />
                  </div>
                </div>
<<<<<<< HEAD:src/screens/TA.html
                <button type="submit" class="btn btn-primary" onclick="checkTotalHours()">
                  Check values
                </button>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-dismiss="modal">
=======
				<?php
                $page = "insert.php";
                $target = "_blank" 
                ?>
				<?php echo '<input onsubmit="window.open('.$page.','.$target.')" type="submit" name="hourSubmit" value="Submit" class="btn btn-primary">' ?>
				</input>																																				
              </form>
            </div>
          </div>
          <!-- <div class="modal-footer">
				   
						   
            <button type="button" class="btn btn-primary" data-dismiss="modal">
										 
								  
			 
>>>>>>> fca9ca8918be5f7162fdc5907f2e41c019638e54:src/screens/TA.php
              Submit
            </button>
          </div> -->
        </div>
			  
      </div>
    </div>
    <!-- Modal Marker Hour Submission-->
    <div
      class="modal fade"
      id="modalMKSub"
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
              <h5 class="card-title">Basic Information</h5>
              <ul class="list-group">
                <li class="list-group-item">
                  Emplyoyee Name: Abdullah X
                </li>
                <li class="list-group-item">Current Dal Student: Yes</li>
                <li class="list-group-item">ID# B00xxxxxx</li>
                <li class="list-group-item">Instructor: Andrew X</li>
                <li class="list-group-item">
                  Course ID &amp; CRN no: CSCI 8000 / 123456
                </li>
                <li class="list-group-item">Term: Summer</li>
                <li class="list-group-item">Year: 2020</li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">
                Marker Form
              </h5>
              <h6 class="card-subtitle">
                *Please note that the estimated # of hours is for budget
                forecasting only and should not be interpreted as an employment
                contract for a specific number of hours of work. Reporting hours
                will be done through Timesheets to be submitted bi-weekly by
                approver to timesheets@cs.dal.ca by due dates outlined in Marker
                Timesheets. (^)
              </h6>
              <form class="">
                <div class="form-row">
                  <div class="col-md-auto">
                    <div class="position-relative form-group">
                      <label for="examplePassword11" class=""
                        >Estimated # of marking hours</label
                      ><input
                        placeholder="Enter hours"
                        type="number"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
					  

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">
              Submit
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="jvectormap-tip"></div>
  </body>
</html>
