<style>
  .row {
    margin-bottom: 10px;
  }

  .product-pop-up {
    overflow-x: hidden;
    background: inherit;
    font-size: 13px;
    padding: 20px 30px
  }

  .product-pop-up .product-pop-up-img img {
    width: 240px
  }

  .product-pop-up #form-giaohang {
    display: none
  }

  .product-pop-up #form-giaohang .title {
    margin-top: 0
  }

  .product-pop-up #form-nhanhang {
    display: none
  }

  .product-pop-up #form-nhanhang .title {
    margin-top: 0
  }

  .product-pop-up .error {
    color: #a94442
  }

  .product-pop-up .name {
    margin-top: 0;
    font-size: 14px;
    font-weight: 700;
    color: #404041;
    border-bottom: 1px solid #e2e3e4;
    padding-bottom: 10px;
    line-height: 20px
  }

  .product-pop-up .price-transport {
    color: #404041;
    padding: 0
  }

  .product-pop-up .price-transport span {
    font-weight: 700;
    color: #2e318d;
    font-size: 15px
  }

  .product-pop-up .apdung {
    font-size: 12px;
    color: #96989b
  }

  .product-pop-up .price-total {
    margin-top: 20px;
    position: relative;
    border: 1px solid #e2e3e4;
    padding: 13px 5px 5px;
    margin-bottom: 10px
  }

  .product-pop-up .price-total p {
    position: absolute;
    color: #fff;
    background: #2e318d;
    padding: 3px 15px;
    top: -12px;
    left: 0
  }

  .product-pop-up .price-total p:before {
    position: absolute;
    content: "";
    height: 0;
    width: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #2e318d;
    top: 100%;
    left: 9px
  }

  .product-pop-up .price-total span {
    font-size: 25px;
    font-weight: 700;
    color: #e81c24;
    padding-left: 30px
  }

  .product-pop-up .detail-only-vta {
    float: none;
    border-style: dashed
  }

  .product-pop-up .popup-radio:after,
  .product-pop-up .popup-radio:before {
    content: " ";
    display: table
  }

  .product-pop-up .popup-radio:after {
    clear: both
  }

  .product-pop-up .popup-radio>div {
    float: left;
    margin-top: 5px;
    margin-bottom: 5px;
    padding-right: 15px
  }

  .product-pop-up .popup-buttons {
    margin-top: 15px
  }

  .product-pop-up .popup-buttons .button,
  .product-pop-up .popup-buttons .sweet-alert button,
  .sweet-alert .product-pop-up .popup-buttons button {
    margin-right: 5px;
    margin-left: 5px
  }

  .product-pop-up .popup-payment .radio {
    margin-top: 5px;
    margin-bottom: 5px
  }

  .product-pop-up .popup-payment .choose-payment-type {
    background-color: white;
    margin-left: 20px
  }

  #popup-payment-type .product-pop-up .popup-payment .choose-payment-type,
  .listnganhang .choose-payment-type {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
  }

  .input {
    padding: 5px 12px;
    margin-bottom: 5px;
    height: 32px;
    font-size: 12px;
    border-radius: 3px;
    display: block;
    border: 1px solid #e2e3e4;
    width: 100%
  }
</style>
<?php
$image = base_url('upload/unknown.png');
if(file_exists('upload/product/'.$product->image)) {
  $image = base_url('upload/product/'.$product->image);
}
$price = ($product->price-($product->price*$product->discount/100));
$token = md5($price);
?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog product-pop-up" style="width:768px; height:100%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">THÔNG TIN MUA HÀNG</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="product-pop-up-img">
              <figure data-feedback="fb:likes, fb:comments">
                <img src="<?php echo $image; ?>" alt="<?php echo $product->name;?>" class="img-responsive center-block">
              </figure>

            </div>
            <h2 class="name"><?php echo $product->name;?></h2>

            <input type="hidden" id="hdphivanchuyen" value="0">

            <div id="pnlCoupon" style="display: none;" class="price-transport">
              <span id="lblDiscountType" style=" font-weight: normal; color: inherit;">Giảm giá : </span>
              <span id="txtCoupon">0đ</span>
            </div>
            <div class="price-total">
              <p>Tổng số tiền phải thanh toán</p>
              <span id="pnTotalOrder">
              <?php echo number_format($price,0,',','.'); ?>đ
              </span>
            </div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <p class="title">
              Thông tin người mua
            </p>
            <div class="popup-radio">
              <div class="radio">
                <label>
                  <input checked="check" id="Gender" name="Gender" type="radio" value="M"> Anh
                </label>
              </div>
              <div class="radio">
                <label>
                  <input id="Gender" name="Gender" type="radio" value="F"> Chị
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="input" id="user_name" maxlength="50" name="user_name" placeholder="Họ tên của bạn (bắt buộc)" type="text" value="">
              </div>
              <div class="col-sm-6">
                <input class="input" id="user_phone" name="Phone" placeholder="Số di động (Bắt buộc)" type="text" value="">
              </div>
              <div class="col-sm-6">
                <input class="input" id="user_email" name="Email" placeholder="Email" type="text" value="">
              </div>
            </div>
            <div id="form-recievedtype">
              <div class="row">
                <div class="col-sm-12">
                  <input class="input" id="user_address" maxlength="256" name="Address" placeholder="Nhập địa chỉ để nhận hàng" type="text" value="">
                </div>
              </div>
            </div>

            <p class="title">
              Nhập mã khuyến mãi để được giảm giá
            </p>
            <div class="nhapVcoupon">

              <div class="verdes">
                <div class="verdes-element full">
                  <input class="input" id="coupon" maxlength="50" name="CouponCode" placeholder="Nhập mã khuyến mãi để được giảm giá" type="text"
                    value="">
                </div>
                <div class="verdes-element">
                  <a href="javascript:UseCoupon();" id="btnUseCoupon" class="button button-blue">Sử dụng</a>
                  <a href="javascript:UnUseCoupon();" id="btnUnUseCoupon" style="display: none;" class="button button-red">Hủy</a>
                </div>
              </div>
              <div style="margin-top: 5px;color: #cc3333; font-style: italic; text-align: right;display:none" id="voucher-notice">*Nhấn "Sử dụng" để nhận ưu đãi giảm giá</div>
            </div>
          </div>
        </div>
      </div>
      <div class="alert alert-danger hide">
      </div>
      <div class="alert alert-success hide">
      </div>
      <input type="hidden" id="token" value="<?= $token?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="order-btn">Đặt mua</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $('#myModal').on('hidden.bs.modal', function () {
      $('.alert-danger').addClass('hide');
      $('.alert-success').addClass('hide');
    });
    // Khi người dùng click Đăng ký
    $('#order-btn').click(function () {
      console.log("Order click");
      // Lấy dữ liệu
      var data = {
        user_name: $('#user_name').val(),
        user_email: $('#user_email').val(),
        user_phone: $('#user_phone').val(),
        user_address: $('#user_address').val(),
        coupon: $('$#coupon').val(),
        token: $('#token').val(),
        price: <?= $price?>
      };
      console.log(data);
      // Gửi ajax
      $.ajax({
        type: "post",
        dataType: "JSON",
        url: "<?= site_url('checkout/ajax'); ?>",
        data: data,
        success: function (result) {
          // Có lỗi, tức là key error = 1
          if (result.hasOwnProperty('error') && result.error == '1') {
            var html = '';

            // Lặp qua các key và xử lý nối lỗi
            $.each(result, function (key, item) {
              // Tránh key error ra vì nó là key thông báo trạng thái
              if (key != 'error') {
                html += '<li>' + item + '</li>';
              }
            });
            $('.alert-danger').html(html).removeClass('hide');
            $('.alert-success').addClass('hide');
          }
          else { // Thành công
            $('.alert-success').html('Đặt hàng thành công!').removeClass('hide');
            $('.alert-danger').addClass('hide');

            // 4 giay sau sẽ tắt popup
            setTimeout(function () {
              $('#myModal').modal('hide');
              // Ẩn thông báo lỗi
              $('.alert-danger').addClass('hide');
              $('.alert-success').addClass('hide');
            }, 4000);
          }
        }
      });
    });
  });
</script>