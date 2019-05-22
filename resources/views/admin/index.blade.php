<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin/partial/head')
</head>
<body class="hold-transition skin-blue  sidebar-mini">
        @include('admin/partial/header')
        @include('admin/partial/sidebar')
            @section('content')
            @show

        @include('admin/partial/footer')
    </div>    
</body>
</html>