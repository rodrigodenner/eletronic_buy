
document.addEventListener("DOMContentLoaded", function () {
    const qtyInput = document.getElementById("qtyInput");
    const decrementQtyButton = document.getElementById("decrementQty");
    const incrementQtyButton = document.getElementById("incrementQty");

    decrementQtyButton.addEventListener("click", function () {
      // Diminuir o valor do campo de entrada
      const currentValue = parseInt(qtyInput.value) || 0;
      if (currentValue > 0) {
        qtyInput.value = currentValue - 1;
      }
    });

    incrementQtyButton.addEventListener("click", function () {
      // Aumentar o valor do campo de entrada
      const currentValue = parseInt(qtyInput.value) || 0;
      qtyInput.value = currentValue + 1;
    });
  });