<?php include_once "header.php"; ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <div class="container-fluid mt-3">
        <div class="row">
        <?php

  if(isset($_GET['id'])){
    $id=$_GET['id'];
   echo "  <div class='col-lg-3 col-sm-6'>";
   echo "<a href='addsubkategor.html'> ";
   echo " <div class='card gradient-2'> ";
   echo "<div class='card-body'> ";
   echo "   <h3 class='card-title text-white'>SUB Kategoriya qo'shish</h3>";
   echo " <span class='float-right display-5 opacity-5'><i class='fa fa-plus'></i></span> ";
   echo "</div> ";
   echo "</div> ";
   echo " </a>";
   echo "  </div>";
   
  }

 
  ?>
         
                    
                   
                    <div class="col-lg-3 col-sm-6">
                       
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">SUB Kategoriya</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Fayllar</h2>
                                    <h2 class="text-white">124345 </h2>
                                  
                                </div>
                               
                            </div>
                        </div>
                   
                    </div>
                   
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://t.me/uzx_team">UzX Team</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>