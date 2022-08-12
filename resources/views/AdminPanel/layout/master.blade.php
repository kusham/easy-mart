<!DOCTYPE html>
<html lang="en">

<head>
    @include('AdminPanel.layout.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('AdminPanel.layout.preLoader')
    <div class="wrapper">

        @include('AdminPanel.layout.navbar')
        @include('AdminPanel.layout.sidebar')
        <main>

            @yield('content')
        </main>
        @include('AdminPanel.layout.footer')


        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('adminPanel/plugins/jquery/jquery.min.js') }}"></script>



    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminPanel/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminPanel/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminPanel/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('adminPanel/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminPanel/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminPanel/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminPanel/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminPanel/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminPanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminPanel/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminPanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminPanel/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminPanel/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminPanel/dist/js/pages/dashboard.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- data table --}}
    <script src="{{ asset('adminPanel/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminPanel/data-table/data-table-act.js') }}"></script>

    {{-- summer note --}}
    <script src="{{ asset('adminPanel/summernote/summernote.js') }}"></script>

    @yield('script')

</body>

</html>
