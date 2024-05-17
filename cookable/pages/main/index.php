<body class="">
<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIt 25";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
         

               <h1 style="margin-top: 13%; margin-bottom: 5%; text-align: center; font-size:45px">Sản phẩm mới nhất</h1>
              
               <!-- search -->
               <div class="wrapper">
                    <div class="search-input">
                      <input type="text" placeholder="Bạn muốn ăn..">
                      <div class="autocom-box">
                        <li>Mì trộn trứng</li>
                        <li>Mì trộn trứng xúc xích</li>
                        <li>Mì trộn sốt bơ tỏi</li>
                        <li>Hamburger bò</li>
                        <li>Hamburger gà</li>
                        <li>Bánh mì</li>
                        <li>Bánh bao khoai môn</li>
                        <li>Kem việt quất</li>
                      </div>
                      <div class="icon"><i class="fas fa-search"></i></div>
                    </div>
                  </div>
                  <script src="../js/suggestions.js"></script>
                  <script src="../js/img4.js"></script>
                <!-- end search -->

               <ul class="product_list">
                <?php
                while ($row = mysqli_fetch_assoc($query_pro)){
                ?>
                     <li class="product_items">
                        <a href="sanpham.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product_item">
                            <img src="../admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                            <p class="title_product text_edit1"> <?php echo $row['tensanpham'] ?></p>
                            <p class="price_product text_edit1"><?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
                            <!-- <p><?php echo $row['tendanhmuc'] ?></p> -->
                        </a>
                        <button class="addCart">
                           Mua  
                        </button>
                     </li>
                  <?php 
                } 
                  ?>
               </ul>
               <div class="cartTab">
                  <h1>giỏ hàng</h1>
                  <div class="listCart">
                     <div class="item">
                        <div class="image">
                        </div>
                        <div class="name">
                        </div>
                        <div class="totalPrice">
                        </div>
                        <div class="quantity">
                          
                        </div>
                     </div>

                  </div>
                  <div class="btn">
                     <button class="close"> Đóng </button>
                     <button class="Check"> Tính tiền </button>

                  </div>
               </div>
       <script src="sanpham.js"></script>

</body>
