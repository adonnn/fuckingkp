<!DOCTYPE html>
<html lang="en">

<head>
 @include('default.Template.head')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    @include('default.Template.navbar')
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
   @include('default.Template.header')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="scrolled-offset">
   @include('default.Template.body')
  </section><!-- End Hero -->
  <br><br><br><br>
  <!-- ======= Footer ======= -->
  <footer id="footer">
   @include('default.Template.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>
