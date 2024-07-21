<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'db.php';
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>XL Axiata</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
	<style>
    .navbar {
      background-color: blue !important; /* Override default background color */
    }
    </style>
    <style>
    .logout-btn {
      color: #000000; /* Light gray text color */
      background-color: #ffffff; /* Dark background color */
      border-radius: 4px; /* Optional: rounded corners */
      padding: 8px 12px; /* Padding for better spacing */
      text-decoration: none; /* Remove underline from the link */
    }

    .logout-btn:hover {
      background-color: #555; /* Slightly lighter gray on hover */
      color: #fff; /* White text color on hover */
    }
  </style>
  <style>
        /* Styles for the popup */
        .popup {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .popup-content {
            position: relative;
            width: 500px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
  </head>
  <body>
  <div class="popup" id="popup">
        <div class="popup-content">
		       <div class="popup-head-row">
          <div class="card-title">Important</div>
        </div>
            <span class="close-btn" id="close-btn">&times;</span>
            <p>Approved For Basice Support Cases Handling</p>
        </div>
    </div>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">

        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
			      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Navigation</h4>
      </li>
<li class="nav-item active">
  <a href="../dashboard.php">
    <i class="fas fa-home"></i>
    <p>Dashboard</p>
  </a>
</li>
	<li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Components</h4>
      </li>
              <li class="nav-item active">
                <a href="../mainpage.php">
                  <i class="fas fa-money-check"></i>
                  <p>Main Page</p>
               
                </a>
              </li>
<li class="nav-item active">
  <a href="http://sciomeil/sites/PBG-Oncall-Support-Info/Pages/On-Call-Manager.aspx" " target="_blank">
    <i class="fas fa-headphones"></i>
    <p>Oncall Page</p>
  </a>
</li>
<li class="nav-item active">
  <a href="https://confluence/display/AC/FY24+CES+Consolidate+Cadence" " target="_blank">
    <i class="icon-graph"></i>
    <p>CES Consolidate Cadence</p>
  </a>
</li>

			                <li class="nav-item active">
                <a href="../contact.php">
                  <i class="fas fa-headset"></i>
                  <p>Contact Us</p>
               
                </a>
              </li>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">List</h4>
      </li>
    <li class="nav-item active">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas fa-th-list"></i>
                  <p>Accounts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">XL Axiata</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">ICE</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">Telnet</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">Claro Puerto Rico</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">T-Mobile</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">Claro Brasil</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">Azercell</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">A1 Croatia</span>
                      </a>
                    </li>
                    <li>
                      <a href="xl-axiata.php">
                        <span class="sub-item">PPF</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
<div class="container-fluid">
  <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
    <!-- Removed search functionality -->
  </nav>

  <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
    <!-- Removed search functionality -->

    <li class="nav-item">
      <a class="nav-link logout-btn" href="logout.php">
        <i class="fa fa-sign-out-alt"></i> Logout
      </a>
    </li>
  </ul>
</div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">XL Axiata</h3>
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-primary card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="text">
                          <p class="card-category">SAM</p>
                          <h4 class="card-title">Mahendra Gondaliya</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			                <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-success card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-map"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Region</p>
                          <h4 class="card-title">APAC</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-secondary card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-map-marker"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Country</p>
                          <h4 class="card-title">Indonesia</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  </div>

<div class="row">

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <div class="card-title">In-Flow Out-Flow</div>
        </div>
        <div class="card-body pb-0" style="max-height: 370px; overflow-y: auto;">
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
		         <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Fix No Fix</div>
                    </div>
                    <div class="card-body pb-0" style="max-height: 370px; overflow-y: auto;">
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		              <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Average Handling Time</div>
                    </div>
                    <div class="card-body pb-0" style="max-height: 370px; overflow-y: auto;">
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 </div>
		 <div class="row">
<div class="col-md-6">
    <div class="card card-round">
      <div class="card-header">
        <div class="card-head-row">
          <div class="card-title">About</div>
        </div>
      </div>
      <div class="card-body" style="height: 550px; overflow-y: auto;">
        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <p>PT XL Axiata Tbk[4] (formerly PT Excelcomindo Pratama Tbk), is an Indonesia-based mobile telecommunications services operator headquartered at Jakarta.[5] It is the third largest mobile telecommunications company in Indonesia.</p>
            <p>The operator's coverage includes Java, Bali, and Lombok as well as the principal cities in and around Sumatra, Kalimantan and Sulawesi.</p>
            <p>XL offers data communication, broadband Internet, MegaFon mobile communication and 3G services over GSM 900 and GSM 1800 networks.</p>
			<p>Initially, XL provided cellular mobile telephony services using the GSM 900 technology. A few years after launching services, the company was awarded a license for implementing a DCS 1800 network, and to operate an ISP and VoIP service. In 2006, XL obtained a 3G license, which services launched in September of the same year.</</p>
			<p>At the end of 2010, the company had more than 22,000 BTS towers across Indonesia.[6] XL is the second largest mobile network operator in Indonesia, with a subscriber's strength of 55.1 million users.<p>
			<p>Shares of XL surged in May 2019, one day after Axiata Group announced talks with Norway's Telenor aimed at combining their Asian operations.[8]</p>
          </div>

        </div>
      </div>
    </div>
	</div>
	            <div class="col-md-6 adjust-position">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Installed Product</h4>
                    </div>
                    <div class="card-body pb-0" style="height: 550px; overflow-y: auto;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Product Line</th>
                                        <
                                        <th>Final Release</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Product Line</th>
                                       
                                        <th>Final Release</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sql = "SELECT product_line, product, final_release FROM installed_products";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . htmlspecialchars($row["product_line"]) . "</td>";
                                        
                                            echo "<td>" . htmlspecialchars($row["final_release"]) . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>No results found</td></tr>";
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
	 <div class="row">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Focal Points</div>
      </div>
      <div class="card-body" style="height: 300px; overflow-y: auto;">
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Type</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>AriNugroho Suprapto</td>
              <td>Sales Director</td>
            </tr>
            <tr>
              <td>Daniel Kremer</td>
              <td>Finance Deputy</td>
            </tr>
            <tr>
              <td>Mahendra Gondaliya</td>
              <td>SAM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <div class="col-md-7">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Agreement</div>
      </div>
      <div class="card-body" style="height: 300px; overflow-y: auto;">
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">Agreement</th>
              <th scope="col">FOPs</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>XL RM CM</td>
              <td>APRM, Billing, CRM, MEC</td>
              <td>1 Jul 2024</td>
              <td>30 Jun 2025</td>
            </tr>
            <tr>
              <td>XL Axiata jNetx</td>
              <td>ASP</td>
              <td>23 Aug 2023</td>
              <td>22 Aug 2024</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>



   <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Extension Support</div>
      </div>
      <div class="card-body" style="max-height: 250px; overflow-y: auto;">
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">Financial Year</th>
              <th scope="col">Requested RC</th>
              <th scope="col">Approved RC</th>
              <th scope="col">Approved Till</th>
			  <th scope="col">Approved by</th>
			  <th scope="col">Comment</th>
            </tr>
          </thead>
          <tbody>
		   <tr>
              <td>FY 23</td>
              <td>3 MM</td>
              <td>2.5 MM</td>
              <td>Q2-24</td>
			  <td>Prakash Pandey</td>
			  <td>Approver for Q2 to 2024</td>
            </tr>
            <tr>
              <td>FY 24</td>
              <td>3 MM</td>
              <td>2.5 MM</td>
              <td>Q2-24</td>
			  <td>Prakash Pandey</td>
			  <td>Approver for Q2 to 2024</td>
            </tr>
            <tr>
              <td>FY 25</td>
              <td>5 MM</td>
              <td>3.5 MM</td>
              <td>Full Year</td>
			  <td>Udayvir Singh Bhadouria</td>
			  <td>Approver for Full Year</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
    


     </div>




        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">

          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>


    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>


    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	<script>
  $(document).ready(function () {
    $("#multi-filter-select").DataTable({
      pageLength: 5,
      initComplete: function () {
        this.api()
          .columns()
          .every(function () {
            var column = this;
            var select = $(
              '<select class="form-select"><option value=""></option></select>'
            )
              .appendTo($(column.footer()).empty())
              .on("change", function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column
                  .search(val ? "^" + val + "$" : "", true, false)
                  .draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append(
                  '<option value="' + d + '">' + d + "</option>"
                );
              });
          });
      },
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('lineChart').getContext('2d');
    var barChart = document.getElementById("barChart").getContext("2d");
    var pieChart = document.getElementById("pieChart").getContext("2d");

var myLineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [
                {
                    label: "S1 Cases",
                    borderColor: "#ff6384",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#1d7af3",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    borderWidth: 2,
                    data: [4.2, 3.5, 7.4, 8, 2.9, 6.6]
                },
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                labels: {
                    padding: 10,
                    fontColor: "#1d7af3"
                }
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {left: 15, right: 15, top: 15, bottom: 15}
            }
        }
    });

    var barChart = document.getElementById("barChart").getContext("2d");
    var myBarChart = new Chart(barChart, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [
                {
                    label: "S1 Cases",
                    backgroundColor: "rgb(255, 99, 132)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 1,
                    data: [1, 1, 2, 0, 0, 0]
                },
                {
                    label: "S2 Cases",
                    backgroundColor: "rgb(54, 162, 235)",
                    borderColor: "rgb(54, 162, 235)",
                    borderWidth: 1,
                    data: [17, 7, 16, 6, 9, 9]
                },
                {
                    label: "S3 Cases",
                    backgroundColor: "rgb(255, 206, 86)",
                    borderColor: "rgb(255, 206, 86)",
                    borderWidth: 1,
                    data: [11, 3, 8, 2, 2, 4]
                },
                {
                    label: "S4 Cases",
                    backgroundColor: "rgb(75, 192, 192)",
                    borderColor: "rgb(75, 192, 192)",
                    borderWidth: 1,
                    data: [1, 0, 2, 1, 4, 0]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var pieChart = document.getElementById("pieChart").getContext("2d");
    var myPieChart = new Chart(pieChart, {
        type: "pie",
        data: {
            datasets: [{
                data: [60, 40], // Updated data with only 2 values
                backgroundColor: ["#1d7af3", "#f3545d"], // Updated colors to match the number of data points
                borderWidth: 0
            }],
            labels: ["Fix", "No Fix"] // Updated labels to match the number of data points
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                labels: {
                    fontColor: "rgb(154, 154, 154)",
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: "percentage",
                fontColor: "white",
                fontSize: 14
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    });
</script>
<script>
        // Get the popup and close button elements
        const popup = document.getElementById('popup');
        const closeBtn = document.getElementById('close-btn');

        // Add an event listener to the close button
        closeBtn.addEventListener('click', () => {
            // Hide the popup when the close button is clicked
            popup.style.display = 'none';
        });
    </script>

	

  </body>
</html>