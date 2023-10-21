
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

    <?php foreach($products as  $product):?>
    <div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="<?= $product->img?>" alt="..." />
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder"><?= $product->title?></h5>
                    <?= number_format($product->price,2,',','.')?>
                </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product?id=<?= $product->id?>">View options</a>
                </div>
            </div>
        </div>
    </div> 
    <?php endforeach?>    
</div>