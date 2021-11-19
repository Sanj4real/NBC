<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Business Academy College</title>
        <!-- Favicon Link -->

        <!--build:css css/theme.min.css -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/line-awesome.min.css" />
       

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="css/dropify.min.css" />
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

        <!-- Bootstrap Dropdown Hover CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <!-- endbuild -->
    </head>

    <body class="sidebar-is-reduced">
        <header class="l-header">
            <div class="l-header__inner">
                <div class="c-header-icon js-hamburger">
                    <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
                </div>
                <div class="header-searchbar-wrap">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?" />
                        <button type="submit" class="searchButton">
                            <i class="las la-search"></i>
                        </button>
                    </div>
                    <div class="search-right">
                        <div class="select-box" id="selectbox1">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="a" value="1" name="Ben" checked="checked" />
                                    <span class="select-box__input-text">Filter</span>
                                </div>
                                <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="0" value="1" name="Ben" />
                                    <span class="select-box__input-text">Cream</span>
                                </div>
                                <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="1" value="2" name="Ben" />
                                    <span class="select-box__input-text">Cheese</span>
                                </div>
                                <div class="select-box__value">
                                    <input class="select-box__input" type="radio" id="2" value="3" name="Ben" />
                                    <span class="select-box__input-text">Milk</span>
                                </div>
                                <img class="select-box__icon" src="img/arrow-down.png" alt="Arrow Icon" aria-hidden="true" />
                            </div>
                            <ul class="select-box__list">
                                <li>
                                    <label class="select-box__option" for="0" aria-hidden="aria-hidden">Cream</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="1" aria-hidden="aria-hidden">Cheese</label>
                                </li>
                                <li>
                                    <label class="select-box__option" for="2" aria-hidden="aria-hidden">Milk</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info">
                <button><i class="las la-search"></i></button>
                <button><i class="las la-bell"></i></button>
                <button><i class="las la-user-circle"></i></button>
            </div>
        </header>

