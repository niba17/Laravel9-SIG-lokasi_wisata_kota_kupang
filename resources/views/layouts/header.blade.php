<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.svg" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/main.css" />

    <!-- Jquery JS -->
    <script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/fontawesomeFree620/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/template') }}/plugins/fontawesome-free/css/all.min.css"> --}}

    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugin') }}/sweetAlert2/sweetalert2.all.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin') }}/DataTables/datatables.min.css" />
    <script type="text/javascript" src="{{ asset('/plugin') }}/DataTables/datatables.min.js"></script>



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false,
  });
</script>

</head>
