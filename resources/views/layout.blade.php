<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../assets/images/edusupport-favicon.png">
    <title>@yield('page_title')</title>
    
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    {{-- <link rel="stylesheet" href="../../assets/css/table.css"> --}}    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    
    {{-- <style>
        table.dataTable thead .sorting {
            background-image: url("../images/sort_both.png")
        }

        table.dataTable thead .sorting_asc {
            background-image: url("../images/sort_asc.png") !important
        }

        table.dataTable thead .sorting_desc {
            background-image: url("../images/sort_desc.png") !important
        }

        table.dataTable thead .sorting_asc_disabled {
            background-image: url("../images/sort_asc_disabled.png")
        }

        table.dataTable thead .sorting_desc_disabled {
            background-image: url("../images/sort_desc_disabled.png")
        }
    </style> --}}
</head>
<body>
    @include('inc/header')
@yield('main_content')
<script> 
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>