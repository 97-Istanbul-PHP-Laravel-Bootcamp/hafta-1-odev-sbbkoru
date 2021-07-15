      <!-- sepet kısmı başlangıç -->
      <section id="cart" class="py-3">
        <div class="container-fluid w-75">
          <h5 class="font-baloo font-size-20">Sepetiniz</h5>

          <!-- ürünler -->
          <div class="row">
            <div class="col-sm-9">
              <!-- ürünler -->
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img
                    src="./assets/products/1.png"
                    alt="cart1"
                    class="img-fluid"
                    style="height: 120px"
                  />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20">Samsung Galaxy 9</h5>
                  <small>by Samsung</small>
                  <!-- ürün oylama-->
                  <div class="d-flex">
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
                    <a href="#" class="px-2 font-rale font-size-14"
                      >5,136 oylama</a
                    >
                  </div>
                  <!-- ürün oylama -->

                  <!-- qty -->
                  <div class="qty d-flex pt-2">
                    <div class="d-flex font-rale">
                      <button class="qty-up border bg-light" data-id="pro2">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input
                        type="text"
                        class="qty_input border px-2 w-100 bg-light"
                        data-id="pro2"
                        disabled
                        value="1"
                        placeholder="1"
                      />
                      <button class="qty-down border bg-light" data-id="pro2">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                    <button
                      type="submit"
                      class="btn font-baloo text-danger px-3 border-right"
                    >
                      Ürünü Sil
                    </button>
                    <button
                      type="submit"
                      class="btn font-baloo text-danger px-3"
                    >
                      Kaydet
                    </button>
                  </div>
                  <!-- qty -->
                </div>
                <div class="col-sm-2 text-right">
                  <div class="font-size-20 text-danger font-baloo">
                    ₺ <span class="product_price">1299</span>
                  </div>
                </div>
              </div>
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img
                    src="./assets/products/2.png"
                    alt="cart1"
                    class="img-fluid"
                    style="height: 120px"
                  />
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                  <small>by Samsung</small>
                  <!-- ürün oylama-->
                  <div class="d-flex">
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
                    <a href="#" class="px-2 font-rale font-size-14"
                      >5,136 oylama</a
                    >
                  </div>
                  <!-- ürün oylama -->

                  <!-- qty -->
                  <div class="qty d-flex pt-2">
                    <div class="d-flex font-rale">
                      <button class="qty-up border bg-light" data-id="pro1">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input
                        type="text"
                        data-id="pro1"
                        class="qty_input border px-2 w-100 bg-light"
                        disabled
                        value="1"
                        placeholder="1"
                      />
                      <button class="qty-down border bg-light" data-id="pro1">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                    <button
                      type="submit"
                      class="btn font-baloo text-danger px-3 border-right"
                    >
                      Ürünü Sil
                    </button>
                    <button
                      type="submit"
                      class="btn font-baloo text-danger px-3"
                    >
                      Kaydet
                    </button>
                  </div>
                  <!-- qty -->
                </div>
                <div class="col-sm-2 text-right">
                  <div class="font-size-20 text-danger font-baloo">
                    ₺ <span class="product_price">1299</span>
                  </div>
                </div>
              </div>
              <!-- ürünler -->
            </div>
            <!-- ürünler sonu -->
            <!-- ara toplam -->
            <div class="col-sm-3">
              <div class="sub-total border text-center mt-2">
                <h6 class="font-size-12 font-rale text-success py-3">
                  <i class="fas fa-check"></i>Siparişiniz ÜCRETSİZ kargo
                  şartlarını sağlamaktadır.
                </h6>
                <div class="border-top py-4">
                  <h5 class="font-baloo font-size-20">
                    Aratoplam (2 Ürün)&nbsp;
                    <span class="text-danger"
                      >₺<span class="text-danger" id="deal-price"></span
                      >2598.00</span
                    >
                  </h5>
                  <button type="submit" class="btn btn-success mt-3">
                    Satın Al
                  </button>
                </div>
              </div>
            </div>
            <!-- ara toplam sonu -->
          </div>
        </div>
      </section>
      <!-- sepet kısmı son-->