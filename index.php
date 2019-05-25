<!DOCTYPE html>
<html lang="en">
  <!-- HEAD -->
  <?php include 'src/index/head.php'; ?>
<body>

  <!-- Navigation -->
  <?php include 'src/navigation.php'; ?>

  <!-- Cabeçario -->
  <?php include 'src/index/header.php'; ?>

  <?php include 'src/index/section_vem-de-ex.php'; ?>

  <!--  Icons Grid -->
  <?php include 'src/index/section_icons.php'; ?>

  <!--  Call to Action -->
  <?php include 'src/index/section_call-to-action.php'; ?>

  <!-- Encontrar -->
  <?php include 'src/index/section_encontrar.php'; ?>

  <!-- Banner -->
  <?php include 'src/index/section_banner.php'; ?>

  <!-- Time -->
  <?php include 'src/index/section_team.php'; ?>

  <!-- Footer -->
  <?php include 'src/index/footer.php'; ?>

  <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
  <script>
    $("a[href^='#']").click(function(e) {
      e.preventDefault();

      var position = $($(this).attr("href")).offset().top;

      $("body, html").animate({
        scrollTop: position
      } /* speed */ );
    });
  </script>
</body>

</html>
