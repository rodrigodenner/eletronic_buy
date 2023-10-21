
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          
        </div>
          <?php foreach ($products['products'] as $product): ?>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
              <img
                  src="<?=$product['img']; ?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">
                  <?=$product['product'];?>
                </p>
                <p class="text-muted">
                  <?=$product['brand'];?>
                </p>
              </div>
              <form action="/quantity" method="get" class="col-md-3 col-lg-3 col-xl-2 d-flex">
                
                <button class="btn btn-link px-2" id="decrementQty">
                  <i class="fas fa-minus" style="color: red;"></i>
                </button>

                  <input type="text" id="qtyInput" name="qty" value="<?=$product['qty'];?>" class="form-control form-control-sm">
                  <input type="hidden" name="id" value="<?=$product['id'];?>">

                <button class="btn btn-link px-2" id="incrementQty">
                  <i class="fas fa-plus"></i>
                </button>  
                 
              </form>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
              <h5 class="mb-0">R$ <?= number_format($product['subtotal'], 2, ',', '.'); ?></h5>

              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="/remove?id=<?=$product['id'] ?>" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
          <?php endforeach ?>
        <div class="card rounded-3 mb-4">
          <div class="d-flex justify-content-between">
            <div class="p-2">
              <div class="p-2">
                <label for="">
                  <input type="text" class="form-control form-control-lg" placeholder="Discound code" />
                </label>
              </div>
            </div>
            <div class="p-2 d-flex align-items-center">
            <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2 ">Order total:</span> <span
                  class="lead fw-normal">R$ <?= number_format($products['total'], 2, ',', '.') ?></span>
            </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
          <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>