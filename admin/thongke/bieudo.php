
  <div class="row2">
    <div class="row2 font_title">
      <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content ">
      <div
              id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
      </div>

      <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
          const data = google.visualization.arrayToDataTable([
            ['danhmuc', 'soluong'],
            <?php
            foreach($listthongke as $thongke) {
              extract($thongke);
              echo "['$tendm', $countsp],";
            } 
            ?>
          ]);

// Set Options
          const options = {
            title:'THỐNG KÊ DANH MỤC SẢN PHẨM',
            is3D:true
          };

// Draw
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>
  </div>