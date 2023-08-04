$(function () {
    getTotalValue();

    function getTotalValue() {
        let total = $(".total-price").data("price");
        let couponPrice = $(".coupon-div")?.data("price") ?? 0;
        $(".total-price-all").text(`$${total - couponPrice}`);
    }

    $(document).on("click", ".btn-remove-product", function (e) {
        let url = $(this).data("action");
        confirmDelete()
            .then(function () {
                $.post(url, (res) => {
                    let cart = res.cart;
                    let cartProductId = res.product_cart_id;
                    $("#productCountCart").text(cart.product_count);
                    $(".total-price")
                        .text(`$${cart.total_price}`)
                        .data("price", cart.product_count);
                    $(`#row-${cartProductId}`).remove();
                    getTotalValue();
                });
            })
            .catch(function () {});
    });

    const TIME_TO_UPDATE = 1000;

    $(document).on(
        "click",
        ".btn-update-quantity",
        _.debounce(function (e) {
            let url = $(this).data("action");
            let id = $(this).data("id");
            let data = {
                product_quantity: $(`#productQuantityInput-${id}`).val(),
            };
            $.post(url, data, (res) => {
                let cartProductId = res.product_cart_id;
                let cart = res.cart;
                $("#productCountCart").text(cart.product_count);
                if (res.remove_product) {
                    $(`#row-${cartProductId}`).remove();
                } else {
                    $(`#cartProductPrice${cartProductId}`).html(
                        `$${res.cart_product_price}`
                    );
                }
                getTotalValue();
               
                $(".total-price").text(`$${cart.total_price}`);
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "success",
                    showConfirmButton: false,
                    timer: 1500,
                });
            });
        }, TIME_TO_UPDATE)
    );
});
