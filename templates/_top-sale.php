      <?php
      $urunler = $product->getData();
      ?>
      
      <!-- TOP SALE START-->
      <section id="top-sale">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">Çok Satanlar</h4>
          <hr />
          <!-- owl carousel-->
          <div class="owl-carousel owl-theme">
            <?php foreach($urunler as $item) { ?>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="#"
                  ><img
                    src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>""
                    alt="product1"
                    class="img-fluid"
                /></a>
                <div class="text-center">
                  <h6><?php echo $item['item_name'] ?? 'Unknown'; ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="fas fa-star"></i>
                    </span>
                    <span>
                      <i class="far fa-star"></i>
                    </span>
                  </div>
                  <div class="price py-2">
                    <span>₺<?php echo $item['item_price'] ?? "0";?></span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">
                    Sepete Ekle
                  </button>
                </div>
              </div>
            </div>
<?php } ?>
          </div>
        </div>
      </section>
      <!-- TOP SALE END-->