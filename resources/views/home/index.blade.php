
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <!-- include Header layout -->
    @include('layout.header')
    <!-- Header ends -->

    <!-- Main content begins -->
    <div class="main-content">
        <div class="container">
            <div class="content">
                <h3>Getting Started with Laravel 5.5</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
        </div>
    </div>
    <!-- Main content ends here -->

    <!-- Include footer layout -->
    @include('layout.footer')
    
    <!-- Bootstrap JavaScript -->
    <script src="/js/app.js"></script>
</body>

</html>