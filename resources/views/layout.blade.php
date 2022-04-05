<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../assets/images/edusupport-favicon.png">
    <title>@yield('page_title')</title>
    
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/app.css">
    {{-- <link rel="stylesheet" href="../../assets/css/table.css"> --}}    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.5/b-2.2.2/cr-1.5.5/fh-3.2.2/r-2.2.9/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.5/b-2.2.2/cr-1.5.5/fh-3.2.2/r-2.2.9/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/datatables.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.0.2/js/dataTables.fixedColumns.min.js"></script>
    
    
</head>
<body>
    @include('inc/header')
@yield('main_content')
<script> 
    $(document).ready( function () {
    $('#table_id').DataTable({
        scrollY: 480,
        scrollX: true,
        paging: true,
        "language": {
            "url": "../../assets/lang/az/datatable-locale.json"
        },
        fixedColumns:   {
            left: 1,
        },
    });
} );
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script></body>
</html>