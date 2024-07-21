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
    <title>Dashboard</title>
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

  </head>
  <body>
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
  <a href="dashboard.php">
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
                <a href="mainpage.php">
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
                <a href="contact.php">
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
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">XL Axiata</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">ICE</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">Telnet</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">Claro Puerto Rico</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">T-Mobile</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">Claro Brasil</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">Azercell</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
                        <span class="sub-item">A1 Croatia</span>
                      </a>
                    </li>
                    <li>
                      <a href="accounts/xl-axiata.php">
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
                <h3 class="fw-bold mb-3">Dashboard</h3>
              </div>

            </div>
       

		<div class="row">
		    <div class="col-md-6 adjust-position">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Account List</h4>
            </div>
            <div class="card-body pb-0" style="height: 500px; overflow-y: auto;">
                <div class="table-responsive">
                    <table id="account-table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Account</th>
                            </tr>
                        </thead>
                        <tbody>
<tr><td><a href="accounts/vodafone.php">KCOM</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Liquid Telecom</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telenet</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Cellcom</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Albania</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone CR</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone D2 GmbH</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Solstice</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Greece</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Hungary</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Portugal</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Spain</a></td></tr>
<tr><td><a href="accounts/vodafone.php">America Movil S.A. de C.V.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Get</a></td></tr>
<tr><td><a href="accounts/vodafone.php">ICE</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Elisa</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Sonaecom (BeArtis)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Teracom AB</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Orange Romania</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Colt</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Network Rail</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Pelephone Communications Ltd.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telenor Hungary</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telenor Serbia</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telenor Denmark</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Romania</a></td></tr>
<tr><td><a href="accounts/vodafone.php">AT&T LATAM</a></td></tr>
<tr><td><a href="accounts/vodafone.php">ATT Mobility</a></td></tr>
<tr><td><a href="accounts/vodafone.php">US Cellular Corporation</a></td></tr>
<tr><td><a href="accounts/vodafone.php">ATT UVerse & Cricket(C1)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Charter Communications Inc</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Dish Network</a></td></tr>
<tr><td><a href="accounts/vodafone.php">TELUS Communications Company</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Claro Puerto Rico</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Claro DR</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Comcel/AMX Chile</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Azercell</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Axtel</a></td></tr>
<tr><td><a href="accounts/vodafone.php">NET</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Oi (Telemar)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">TIM Brasil S. A.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Enel S.p.A.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Fastweb SpA</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Interoute Telecommunications Ltd/ Exa Infrastructure UK Limited</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Safaricom Ltd.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Lumen (Centurylink)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Group plc</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone UK (Fixed)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">A1 Austria</a></td></tr>
<tr><td><a href="accounts/vodafone.php">A1 Croatia</a></td></tr>
<tr><td><a href="accounts/vodafone.php">A1 Bulgaria MobilTel (M-Tel)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">A1 Macedonia Postpaid</a></td></tr>
<tr><td><a href="accounts/vodafone.php">A1 Slovenia</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Veon Euroasia Kartel</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Veon Euroasia Unitel</a></td></tr>
<tr><td><a href="accounts/vodafone.php">KaR-Tel</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Bank Hapoalim B.M.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Mobile TeleSystems (MTS)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telkom SA Ltd.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">PPF</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Claro Brasil</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telefonica de Argentina</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telefonica del Peru</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telefonica Moviles Chile (Movistar)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telefonica Brazil</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Sony ITE Information Technology Europe</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Yorkshire Water Services Limited</a></td></tr>
<tr><td><a href="accounts/vodafone.php">SES Networks</a></td></tr>
<tr><td><a href="accounts/vodafone.php">BT Ignite Espana</a></td></tr>
<tr><td><a href="accounts/vodafone.php">BT plc</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Everything Everywhere Ltd.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">NTL Group Ltd</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Primacom</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Sunrise Telecom</a></td></tr>
<tr><td><a href="accounts/vodafone.php">UPC</a></td></tr>
<tr><td><a href="accounts/vodafone.php">UPC Holding BV</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Virgin Media Holdings Inc.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">ABN AMRO Bank N.V.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Delta Lloyd Life Belgium</a></td></tr>
<tr><td><a href="accounts/vodafone.php">HSBC Bank plc</a></td></tr>
<tr><td><a href="accounts/vodafone.php">The Standard Bank of South Africa Limited</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Cosmote</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Crnogorski Telekom AD</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Elion Enterprises (Eesti Telefon)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Hutchison 3G Ireland</a></td></tr>
<tr><td><a href="accounts/vodafone.php">JSC Kazakhtelecom</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Kcell</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Kyivstar</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Magyar Telekom Plc.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">SFR (Societe Francaise de Radiotelephone)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Sky Italia SpA</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Sky UK Limited</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Slovak Telekom (T-Com)</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Svyazinvest</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telekom Romania</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Telia Norway</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Veon</a></td></tr>
<tr><td><a href="accounts/vodafone.php">T-Mobile Czech Republic</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Italy</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Netherlands</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Ziggo</a></td></tr>
<tr><td><a href="accounts/vodafone.php">VeriFone Inc</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Verizon Wireless Inc.</a></td></tr>
<tr><td><a href="accounts/vodafone.php">ATT BSSe</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Greece</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Hungary</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Portugal</a></td></tr>
<tr><td><a href="accounts/vodafone.php">Vodafone Spain</a></td></tr>
<tr><td><a href="accounts/xl-axiata.php">XL Axiata</a></td></tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
	
		  <div class="col-md-6 adjust-position">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">SAM List</h4>
      </div>
      <div class="card-body pb-0" style="height: 500px; overflow-y: auto;">
        <div class="card-body">
          <div class="table-responsive">
            <table id="multi-filter-select" class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Contact Number</th>
                </tr>
              </thead>

              <tbody>
                <tr><td>Zion Gabay</td><td>052-5278926</td></tr>
                <tr><td>Moshe Atar</td><td>052-540-0530</td></tr>
                <tr><td>Irit Spector</td><td>052-4474232</td></tr>
                <tr><td>Adir Atias</td><td>052-6815377</td></tr>
                <tr><td>Kiran Koduri</td><td>+91-800 777 3951</td></tr>
                <tr><td>Michal Massa</td><td>054-5622620</td></tr>
                <tr><td>Smadar Matzri</td><td>052-6592443</td></tr>
                <tr><td>Yuval Shemesh</td><td>052-6148906</td></tr>
                <tr><td>Inbal Sharifi</td><td>052-6194058</td></tr>
                <tr><td>Alberto Kruszyn</td><td>054 421 5744</td></tr>
                <tr><td>Ornit Sapir</td><td>054-2336229</td></tr>
                <tr><td>Limor Yanai</td><td>054-6679003</td></tr>
                <tr><td>Arvinder Kaur</td><td>+91 73872 51112</td></tr>
                <tr><td>Miri Cohen</td><td>052-6148758</td></tr>
                <tr><td>Swapnil Doifode</td><td>+91-98904-40490</td></tr>
                <tr><td>Mahendra Gondaliya</td><td>+91-996-058-3897</td></tr>
                <tr><td>Pankaj Jain</td><td>+91-7798983029</td></tr>
                <tr><td>Gyan Prakash</td><td>+91 9960602889</td></tr>
                <tr><td>Ranjoo Singh</td><td>+91-98811 21091</td></tr>
                <tr><td>Nitin Gupta</td><td>+91-7798983626</td></tr>
                <tr><td>Animesh Kishore Prasad</td><td>+91-9890007506</td></tr>
              </tbody>
            </table>
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
  <!-- <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Case Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="case-data-table" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Case ID</th>
                                <th>Case Type</th>
                                <th>Title</th>
                                <th>Site</th>
                                <th>Case Status</th>
                                <th>Severity</th>
                                <th>Product Line</th>
                                <th>Product</th>
                                <th>Case Owner</th>
                                <th>Contact</th>
                                <th>Contact Type</th>
                                <th>Case Queue</th>
                                <th>Resolution</th>
                                <th>Mitigation Type</th>
                                <th>Account</th>
                                <th>Creation Date</th>
                                <th>Version</th>
                                <th>Component</th>
                                <th>Account Release</th>
                                <th>Resolution Classification</th>
                                <th>Resolution Mapping</th>
                                <th>Resolution Date</th>
                                <th>Release Phase</th>
                                <th>Instance ID</th>
                                <th>Instance Name</th>
                                <th>Instance Product Line</th>
                                <th>Knowledge Exclusion</th>
                                <th>Region</th>
                                <th>Business Unit</th>
                                <th>Security Issue</th>
                                <th>Case Team</th>
                                <th>Digital Blocker Date</th>
                                <th>Classification</th>
                                <th>Case SLA Blocker Time Days</th>
                                <th>Case SLA Resolution Time Days</th>
                                <th>Case Frozen SLA Achieved Resolution Date</th>
                                <th>Case Frozen SLA Resolution Severity</th>
                                <th>Case SLA Resolution Split L2 Time</th>
                                <th>Case SLA Resolution Split L3 Time</th>
                                <th>Case SLA Resolution Split Pending Analysis Time</th>
                                <th>Case Outflow Analysis Effort Category</th>
                                <th>Case End to End L2 Time</th>
                                <th>Case End to End L3 Time</th>
                                <th>Case End to End Customer Time</th>
                                <th>Case End to End Pending Analysis Time</th>
                                <th>Case End to End L3 Time Pending Additional Fix</th>
                                <th>Case End to End Customer Time Awaiting Resolution Confirmation</th>
                                <th>Digital Blocker</th>
                                <th>SP</th>
                                <th>Case Outflow Date</th>
                                <th>Case Unified Line</th>
                                <th>Case Unified Line Group</th>
                                <th>Case SLA Restore Time</th>
                                <th>Case SLA Achieved Restore Date</th>
                                <th>Case SLA Restore Severity</th>
                                <th>Case SLA Restore Days</th>
                                <th>Old Unified Line</th>
                                <th>Old Unified Line Group</th>
                                <th>Core Adoption Platform</th>
                                <th>Core Adoption Phase</th>
                                <th>Resolution Mapping for S1 Dashboard</th>
                                <th>Status Group</th>
                                <th>Creation Month</th>
                                <th>C K</th>
                                <th>Resolved With Without Fix</th>
                                <th>Resolution Month</th>
                                <th>Digital Account Group</th>
                                <th>Amdocs FY Creation</th>
                                <th>Digital Short Account Name</th>
                                <th>L2 SLA in Percentage</th>
                                <th>L3 SLA in Percentage</th>
                                <th>L2 SLA</th>
                                <th>L3 SLA</th>
                                <th>Old Unified Line Short Name</th>
                                <th>Case Version</th>
                                <th>Resolution Date Updated</th>
                                <th>Creation Date Text</th>
                                <th>Resolution Date Text</th>
                                <th>Digital Blocker Trigger Week</th>
                                <th>Closed with New Fix</th>
                                <th>SLA Week</th>
                                <th>SLA Month</th>
                                <th>Unified Group For OKR</th>
                                <th>Blocker Resolution Week</th>
                                <th>Digital Blocker Trigger Month</th>
                                <th>Blocker Creation Week</th>
                                <th>Digital Account</th>
                                <th>Resolution Date Text New</th>
                                <th>Digital Product Line</th>
                                <th>SLA Resolution Month</th>
                                <th>Top 5 Account</th>
                                <th>NEO Short Name</th>
                                <th>Creation Month Text</th>
                                <th>Unified Line Short Name</th>
                                <th>Unified Line Short Name for PI Quality</th>
                                <th>Sky UK to Remove</th>
                                <th>Outflow Month</th>
                                <th>Customer Time Updated</th>
                                <th>Case Location</th>
                                <th>Backlog Group</th>
                                <th>Unified Line Short Name for ATT</th>
                                <th>Digital Blocker Trigger Date Text</th>
                                <th>C Account</th>
                                <th>C Account with TC 2 X</th>
                                <th>Restore Week</th>
                                <th>Restore Month</th>
                                <th>Old Unified Line Short Name New</th>
                                <th>Old Unified Line Short Name for PI Quality</th>
                                <th>Old Unified Line Short Name for ATT</th>
                                <th>TMO Backlog Status Group</th>
                                <th>Adir 2</th>
                                <th>Adir 3</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Case ID</th>
                                <th>Case Type</th>
                                <th>Title</th>
                                <th>Site</th>
                                <th>Case Status</th>
                                <th>Severity</th>
                                <th>Product Line</th>
                                <th>Product</th>
                                <th>Case Owner</th>
                                <th>Contact</th>
                                <th>Contact Type</th>
                                <th>Case Queue</th>
                                <th>Resolution</th>
                                <th>Mitigation Type</th>
                                <th>Account</th>
                                <th>Creation Date</th>
                                <th>Version</th>
                                <th>Component</th>
                                <th>Account Release</th>
                                <th>Resolution Classification</th>
                                <th>Resolution Mapping</th>
                                <th>Resolution Date</th>
                                <th>Release Phase</th>
                                <th>Instance ID</th>
                                <th>Instance Name</th>
                                <th>Instance Product Line</th>
                                <th>Knowledge Exclusion</th>
                                <th>Region</th>
                                <th>Business Unit</th>
                                <th>Security Issue</th>
                                <th>Case Team</th>
                                <th>Digital Blocker Date</th>
                                <th>Classification</th>
                                <th>Case SLA Blocker Time Days</th>
                                <th>Case SLA Resolution Time Days</th>
                                <th>Case Frozen SLA Achieved Resolution Date</th>
                                <th>Case Frozen SLA Resolution Severity</th>
                                <th>Case SLA Resolution Split L2 Time</th>
                                <th>Case SLA Resolution Split L3 Time</th>
                                <th>Case SLA Resolution Split Pending Analysis Time</th>
                                <th>Case Outflow Analysis Effort Category</th>
                                <th>Case End to End L2 Time</th>
                                <th>Case End to End L3 Time</th>
                                <th>Case End to End Customer Time</th>
                                <th>Case End to End Pending Analysis Time</th>
                                <th>Case End to End L3 Time Pending Additional Fix</th>
                                <th>Case End to End Customer Time Awaiting Resolution Confirmation</th>
                                <th>Digital Blocker</th>
                                <th>SP</th>
                                <th>Case Outflow Date</th>
                                <th>Case Unified Line</th>
                                <th>Case Unified Line Group</th>
                                <th>Case SLA Restore Time</th>
                                <th>Case SLA Achieved Restore Date</th>
                                <th>Case SLA Restore Severity</th>
                                <th>Case SLA Restore Days</th>
                                <th>Old Unified Line</th>
                                <th>Old Unified Line Group</th>
                                <th>Core Adoption Platform</th>
                                <th>Core Adoption Phase</th>
                                <th>Resolution Mapping for S1 Dashboard</th>
                                <th>Status Group</th>
                                <th>Creation Month</th>
                                <th>C K</th>
                                <th>Resolved With Without Fix</th>
                                <th>Resolution Month</th>
                                <th>Digital Account Group</th>
                                <th>Amdocs FY Creation</th>
                                <th>Digital Short Account Name</th>
                                <th>L2 SLA in Percentage</th>
                                <th>L3 SLA in Percentage</th>
                                <th>L2 SLA</th>
                                <th>L3 SLA</th>
                                <th>Old Unified Line Short Name</th>
                                <th>Case Version</th>
                                <th>Resolution Date Updated</th>
                                <th>Creation Date Text</th>
                                <th>Resolution Date Text</th>
                                <th>Digital Blocker Trigger Week</th>
                                <th>Closed with New Fix</th>
                                <th>SLA Week</th>
                                <th>SLA Month</th>
                                <th>Unified Group For OKR</th>
                                <th>Blocker Resolution Week</th>
                                <th>Digital Blocker Trigger Month</th>
                                <th>Blocker Creation Week</th>
                                <th>Digital Account</th>
                                <th>Resolution Date Text New</th>
                                <th>Digital Product Line</th>
                                <th>SLA Resolution Month</th>
                                <th>Top 5 Account</th>
                                <th>NEO Short Name</th>
                                <th>Creation Month Text</th>
                                <th>Unified Line Short Name</th>
                                <th>Unified Line Short Name for PI Quality</th>
                                <th>Sky UK to Remove</th>
                                <th>Outflow Month</th>
                                <th>Customer Time Updated</th>
                                <th>Case Location</th>
                                <th>Backlog Group</th>
                                <th>Unified Line Short Name for ATT</th>
                                <th>Digital Blocker Trigger Date Text</th>
                                <th>C Account</th>
                                <th>C Account with TC 2 X</th>
                                <th>Restore Week</th>
                                <th>Restore Month</th>
                                <th>Old Unified Line Short Name New</th>
                                <th>Old Unified Line Short Name for PI Quality</th>
                                <th>Old Unified Line Short Name for ATT</th>
                                <th>TMO Backlog Status Group</th>
                                <th>Adir 2</th>
                                <th>Adir 3</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            // Query to fetch data
                            $sql = "SELECT * FROM data";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    foreach ($row as $value) {
                                        echo "<td>" . htmlspecialchars($value) . "</td>";
                                    }
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='100'>No results found</td></tr>";
                            }

                            // Close connection
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>! -->

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
            $("#case-data-table").DataTable({
                pageLength: 10,
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on("change", function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? "^" + val + "$" : "", true, false).draw();
                            });

                        column.data().unique().sort().each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + "</option>");
                        });
                    });
                },
            });
        });
    </script>

  <script>
    $(document).ready(function () {
      $("#multi-filter-select").DataTable({
        pageLength: 5,

      });
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $('#account-table').DataTable({
                pageLength: 5,
            });
        });
    </script>
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
                    data: [3, 2, 4, 3, 2, 4]
                },
                {
                    label: "S2 Cases",
                    backgroundColor: "rgb(54, 162, 235)",
                    borderColor: "rgb(54, 162, 235)",
                    borderWidth: 1,
                    data: [9, 8, 9, 9, 8, 9]
                },
                {
                    label: "S3 Cases",
                    backgroundColor: "rgb(255, 206, 86)",
                    borderColor: "rgb(255, 206, 86)",
                    borderWidth: 1,
                    data: [12, 13, 12, 12, 13, 12]
                },
                {
                    label: "S4 Cases",
                    backgroundColor: "rgb(75, 192, 192)",
                    borderColor: "rgb(75, 192, 192)",
                    borderWidth: 1,
                    data: [17, 18, 19, 17, 18, 19]
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
  </body>
</html>