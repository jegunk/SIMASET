<?PHP defined('BASEPATH') OR exit('No direct script access allowed'); ?>
</div>
</div>
</div>
</div>
<input type='hidden' id="baseurl" value="<?PHP echo base_url();?>">
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script src="<?PHP echo base_url();?>assets/js/custom.js"></script>


        
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>template/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
        <!-- page script -->

<?PHP if($jsfile!=NULL){
?>
<script src="<?PHP echo base_url();?>assets/js/<?PHP echo $jsfile;?>.js"></script>
<?PHP 
}
?>
</body>
</html>