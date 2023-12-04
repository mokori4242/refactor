const bassPrice = order.quantity * order.itemPrice;
const quantityDiscount = Math.max(0, order.quantity - 500) * order.itemPrice * 0.05;
const shipping = Math.min(bassPrice * 0.1, 100);
return bassPrice - quantityDiscount + shipping;