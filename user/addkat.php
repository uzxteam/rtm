<?php include_once "header.php"; ?>
        
        <div class="content-body">
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      
                     
                        <div class="basic-form">
                            <form method="POST" action="form/adsense.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="ads" class="form-control input-default" placeholder="Adsense KEY">
                                </div>
                                <?php
    while ($row = mysqli_fetch_array($user)) {
       echo "<select  name='id' class='form-control'><option >".$row['id']."</option> </select>";
     
    }
  ?> 
                                
                                <div class="form-group">
                                   
                                </div>
                                <button type="submit" name="save" class="btn mb-1 btn-primary">Saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
           
          
        </div>
       
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://t.me/uzx_team">UzX Team</a> 2023</p>
            </div>
        </div>
        
    </div>
    
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