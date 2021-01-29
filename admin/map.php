<?php include '../public/includes/links.php'; ?>
<?php include '../public/includes/session.php'; ?>
<body>
<style type="text/css">
  .box {
      -webkit-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      -moz-box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      box-shadow: 0px 1px 8px 1px rgba(140,132,140,1);
      padding: 0px; border-radius: 10px;
  }
  #mapid { height: 600px; 
            width: 100%;
          /* z-index: 1;*/
        }
</style>
    <div class="main-section">

      <!-- START nav -->
      <?php include '../public/includes/navloggedin.php'; ?>
      <!-- END nav -->
   <div id="mapid">
        
      </div>
    <div class="container-fluid">
      
      
    </div>
      <!-- - - - - -end- - - - -  -->
<script type="text/javascript">
  $( document ).ready(function() {
    console.log('Non');
      var mymap = L.map('mapid').setView([14.2691, 121.4113], 13);

  L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
  attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
}).addTo(mymap);
  var marker = L.marker([14.2691, 121.4113]).addTo(mymap);
  marker.bindPopup("<b>Crime Here!</b><br>May pinatay dito.").openPopup();
  var marker = L.marker([14.2651255, 121.3658771]).addTo(mymap);
});




</script>
  <!-- <?php include '../public/includes/footer.php'; ?> -->
  </div>
  <?php include '../public/includes/loader.php'; ?>
</body>
<?php include '../public/includes/cores.php'; ?>