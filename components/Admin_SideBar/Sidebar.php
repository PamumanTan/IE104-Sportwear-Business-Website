<?php
    function SideBar_Start() {
        echo '
            <div class="sidebar-container">
            <header>
                <div class="logo">
                    <a href="">
                        <img class="sidebar-icon" src="../../../asset/icons/Logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="search-box">
                    <div class="search-icon">
                        <img class="sidebar-icon" src="../../../asset/icons/search-normal.svg">
                    </div>
                    <input id="search-box-input" type="text" placeholder="Tìm kiếm">
                </div>
                <div class="right">
                    <div class="notify">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <div class="admin-button">
                        <i class="fa-regular fa-user"></i>
                    </div>
                </div>
            </header>
            <main class="admin-layout">
                <div class="sidebar">
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="account">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <p>Tài khoản</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="orders">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <p>Đơn hàng</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="products">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <p>Sản phẩm</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="customer">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-person"></i>
                            </div>
                            <p>Khách hàng</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="categories">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-shapes"></i>
                            </div>
                            <p>Hạng mục</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="discounts">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-piggy-bank"></i>
                            </div>
                            <p>Giảm giá</p>
                        </div>
                    </a>
                    <a href="" class="sidebar-item" onclick="return false">
                        <div class="sidebar-item-container" id="revenue">
                            <div class="sidebar-item-icon">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <p>Doanh thu</p>
                        </div>
                    </a>
                </div>

                <div class="content">
                    '
                ;
    
    };

    function SideBar_End() {
        echo '
                </div>
            </main>
        </div>
        <script src="https://kit.fontawesome.com/34f5218fc0.js" crossorigin="anonymous" defer></script>';
    }
?>