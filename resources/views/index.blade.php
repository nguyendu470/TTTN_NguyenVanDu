<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('admin.users.head')
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper" style="background-color: #f4f6f9;">
      
        
        @include('admin.users.sidebar')
        <div class="content-wrapper" >
       
            @yield('content')
            
           
        </div>
        
        <footer class="main-footer">
           
        </footer>
    </div>
   

    @include('admin.users.footer')
    {{-- jquery --}}
    @yield('js_sidebar')
</body>
<script>
    $(document).ready(function() {
        $('#datatable_employee').DataTable({
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });
    });
</script>

</html>
