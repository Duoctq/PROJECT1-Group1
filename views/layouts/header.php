<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./asset/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./asset/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./asset/images/LogoVn1.png" alt="" height="150px" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrime"
                    aria-controls="navbarPrime" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarPrime" style="justify-content: space-between;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Danh mục <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="sub-menu">
                                <?php foreach($categories as $category) : ?>
                                <li><a href=""><?= $category['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm...">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    
                    <div class="b_use d-none d-lg-flex align-items-stretch">
                        <div id="js-login-toggle" class="p-2 btn-account d-none d-lg-flex align-items-center justify-content-center head_svg custom-cursor-on-hover">
                            <i class="bi bi-person-circle fs-3" style="color: #007bff;"></i>
                        </div>
                        <a class="p-2 btn-cart position-relative d-inline-flex head_svg" title="Giỏ hàng" href="/cart">
                            <i class="bi bi-cart fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>