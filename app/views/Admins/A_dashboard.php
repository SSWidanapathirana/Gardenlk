<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo SITENAME; ?></title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/A_dashboard.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['User type', 'Count'],
          ['Customers',     200],
          ['Sellers',      30],
          ['Delivery Persons',  20],
          ['Moderators', 20],
          ['Admins',    5]
        ]);

        var options = {
          title: 'Total users'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

   </head>

<body>
<?php include_once APPROOT . '/views/includes/A_sidenav.php'; ?> 
  <section class="home-section">
    <nav>
      <div class="sidebar-topic">
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Customers</div>
            <div class="number">200</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Sellers</div>
            <div class="number">30</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Delivery Persons</div>
            <div class="number">20</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Moderators</div>
            <div class="number">20</div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Admins</div>
            <div class="number">5</div> 
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">User Chart</div>
          <div class="sales-details">
              <div id="piechart" style="width: 900px; height: 500px;"></div>
          </div>
        </div>
         <div class="top-sales box">
          <div class="title">Top Seling Plants</div>
          <ul class="top-sales-details">
            <li>
              <span class="product">Cactus</span>
            <span class="price">$1107</span>
          </li>
          </ul>
        </div>  
      </div>
    </div>



    <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
              <div class="title">Contact Issues</div>
              <div class="sales-details">
                <div id="piechart" style="width: 900px; height: 500px;"></div>
                    <?php foreach($data['contact'] as $contact): ?>
                      <div><table style="width: 900px;">
                        <tr>
                        Name :<?php echo $contact->name; ?>
                        </tr><br><br>
                        <tr>
                        Email :<?php echo $contact->email; ?>
                        </tr><br><br>
                      <tr>
                      Message :<?php echo $contact->message; ?> 
                      </tr><br><br>
                      </table></div>
                      
                    <?php endforeach; ?>
                      </div>
          </div>
        </div>
    </div>
        <br>
   



  </section>



</body>
</html>

