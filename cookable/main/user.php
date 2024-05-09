<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE - USER - Tài khoản</title>
    <link rel="stylesheet" href="../css/user-shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div id="wrapper">
        <!--header-->
        <div id="header">
            <a href="" class="logo">
                <i class="fa-solid fa-truck-fast"></i>
            </a>
            <div id="menu">
                <div class="item">
                    <a href="">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="">Sản phẩm</a>
                </div>
                <div class="item">
                    <a href="">Blog</a>
                </div>
                <div class="item">
                    <a href="">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="">Tính calo</a>
                </div><div class="item">
                    <a href="">Công thức nấu ăn</a>
                </div>
            </div>
            <div id="actions">
                <div class="item">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>
        
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>USER - TÀI KHOẢN</span>
                </h2>
                <p>Bạn là một thành viên của Cookable với nhiều ưu đãi.</p>
                <p>Bạn muốn đổi mật khẩu để tăng tính bảo mật?</p>
                <p>Đổi mật khẩu ngay thôi!</p>
            <a href="user_changepass.php">
                <button> Đổi mật khẩu </button> 
            </a>  
            </div>
            <div class="box-right">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_1.png?raw=true" alt="">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_2.png?raw=true" alt="">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_3.png?raw=true" alt="">
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/to_bottom.png?raw=true" alt="">
                </a>
            </div>
        </div>
        
        <div id="wp-user">

            <!--thong tin ca nhan-->
            <h2>THÔNG TIN TÀI KHOẢN COOKABLE</h2>
            <div class="user-info">            
                <label for="username">Tên người dùng</label>
                <div id="usernameDisplay">antony76</div>

                <label for="name">Họ và tên</label>
                <div id="nameDisplay">nguyen van a</div>
                
                <label for="year">Năm sinh</label>
                <div id="yearDisplay">2010</div>
            
                <label for="email">Email</label>
                <div id="emailDisplay">nguyenvanantony67@gmail.com</div>
            </div><br>       
            <script>/*
                // Lấy dữ liệu từ các trường nhập
                const nameInput = document.getElementById('name');
                const yearInput = document.getElementById('year');
                const usernameInput = document.getElementById('username');
                const emailInput = document.getElementById('email');
                
                // Hiển thị thông tin trong các phần tử <div>
                const nameDisplay = document.getElementById('nameDisplay');
                nameDisplay.textContent = nameInput.value;
                
                const yearDisplay = document.getElementById('yearDisplay');
                yearDisplay.textContent = yearInput.value;
                
                const usernameDisplay = document.getElementById('usernameDisplay');
                usernameDisplay.textContent = usernameInput.value;
                
                const emailDisplay = document.getElementById('emailDisplay');
                emailDisplay.textContent = emailInput.value;*/
            </script>

            <!--doi mat khau-->
            <h3>Bạn muốn đổi mật khẩu sao?</h3>
            <a href="user_changepass.php">
                <button> Đổi mật khẩu </button>  
            </a><br>

            <!--dang xuat-->
            <h3>Hay là bạn muốn đăng xuất?</h3>
            <a href="user_login.php">
                <button> Đăng xuất </button>  
            </a>    
        </div>

    
        <!--footer-->
        <div id="footer">
    <div class="box">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <p>Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>
    </div>
    <div class="box">
        <h3>NỘI DUNG</h3>
        <ul class="quick-menu">
            <div class="item">
                <a href="">Trang chủ</a>
            </div>
            <div class="item">
                <a href="">Sản phẩm</a>
            </div>
            <div class="item">
                <a href="">Blog</a>
            </div>
            <div class="item">
                <a href="">Liên hệ</a>
            </div>
            <div class="item">
                <a href="">Tính calo</a>
            </div>
            <div class="item"> 
                <a href=""> Công thức nấu ăn</a>
            </div>
        </ul>
    </div>
    <div class="box">
        <h3>LIÊN HỆ</h3>
        <form action="">
            <input type="text" placeholder="Địa chỉ email">
            <button>Nhận tin</button>
        </form>
    </div>
    </div>
    </div>
    <!-- Thêm vào cuối tệp index.html -->
    <div id="chatbot-circle" onclick="toggleChat()">
    <p> 
    <i class="fa-solid fa-robot"></i>
    </p>
    </div>
    
    <div id="chatbot-interface" style="display: none;">
    <div id="chatbot-messages"></div>
    <input id="chatbot-input" type="text" placeholder="Type your message here" />
    </div>
    
    <script>
    function toggleChat() {
    var chatInterface = document.getElementById('chatbot-interface');
    if (chatInterface.style.display === "none") {
    chatInterface.style.display = "block";
    } 
    else {
    chatInterface.style.display = "none";
    }
    }
    </script>

</body>
</html>