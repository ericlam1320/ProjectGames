<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <link rel="shortcut icon" href="AdminAssets/img/favicon.html">
    <base href="{{ asset('') }}" >

    <title>@yield('title')</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

     <link href="AdminAssets/css/bootstrap.min.css" rel="stylesheet">
    <link href="AdminAssets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="AdminAssets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="AdminAssets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="AdminAssets/css/owl.carousel.css" type="text/css">

      <!--right slidebar-->
      <link href="AdminAssets/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="AdminAssets/css/style.css" rel="stylesheet">
    <link href="AdminAssets/css/style-responsive.css" rel="stylesheet" />

    <script type="text/javascript" src="AdminAssets/assets/ckeditor/ckeditor.js"></script>
    


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="AdminAssets/AdminAssets/js/html5shiv.js"></script>
      <script src="AdminAssets/AdminAssets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      @include('admin.layout.header')
      <!--header end-->
      <!--sidebar start-->
      @include('admin.layout.sidebar')
      <!--sidebar end-->
      <!--main content start-->
      @yield('content')
      <!--main content end-->
      <!--footer start-->
      @include('admin.layout.footer')
      <!--footer end-->
  </section>

    <script src="AdminAssets/js/jquery.js"></script>
    <script src="AdminAssets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="AdminAssets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="AdminAssets/js/jquery.scrollTo.min.js"></script>
    <script src="AdminAssets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="AdminAssets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="AdminAssets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="AdminAssets/js/owl.carousel.js" ></script>
    <script src="AdminAssets/js/jquery.customSelect.min.js" ></script>
    <script src="AdminAssets/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="AdminAssets/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="AdminAssets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="AdminAssets/js/sparkline-chart.js"></script>
    <script src="AdminAssets/js/easy-pie-chart.js"></script>
    <script src="AdminAssets/js/count.js"></script>
    @yield('script')

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
