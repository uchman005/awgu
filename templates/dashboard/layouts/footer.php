<footer class="main-footer">
  <strong>Copyright &copy; 2014-<?= date("Y") ?> Awgu Diocese</strong>
  All rights reserved.

</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= $assets ?>/dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= $assets ?>/dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= $assets ?>/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= $assets ?>/dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= $assets ?>/dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= $assets ?>/dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= $assets ?>/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= $assets ?>/dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= $assets ?>/dashboard/plugins/moment/moment.min.js"></script>
<script src="<?= $assets ?>/dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= $assets ?>/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= $assets ?>/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= $assets ?>/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $assets ?>/dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $assets ?>/dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= $assets ?>/dashboard/dist/js/pages/dashboard.js"></script>
<script>
  $(function() {
    // Summernote
    $('#summernote').summernote({
        toolbar: [
        
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']]
          
        ]
      
    })

  // CodeMirror
  CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
    mode: "htmlmixed",
    theme: "monokai"
  });
  })
</script>
</body>

</html>