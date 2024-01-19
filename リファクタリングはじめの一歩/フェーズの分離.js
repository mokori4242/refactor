function priceOrder(product, quantity, shippingMethod) {
    const priceData = calculationPricingData(product, quantity);
    return applyShipping(priceData, shippingMethod);
}
function calculationPricingData(product, quantity) {
    const basePrice = product.basePrice * quantity;
    const discount = Math.max(quantity - product.discountThreshold, 0) * product.basePrice * product.discountRate;
    return { basePrice: basePrice, quantity: quantity, discount: discount};
}
function applyShipping(priceData, shippingMethod) {
    const shippingPerCase = (priceData.basePrice > shippingMethod.discountThreshold) ? shippingMethod.discountedFee : shippingMethod.feePerCase;
    const shippingCost = priceData.quantity * shippingPerCase;
    return priceData.basePrice - priceData.discount + shippingCost;
}