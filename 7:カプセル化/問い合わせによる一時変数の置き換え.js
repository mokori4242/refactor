class Order {
    constructor(quantity, item) {
        this._quantity = quantity;
        this._item = item;
    }

    get basePrice() {
        return this._quantity * this._item.price;
    }

    get price() {
        if (this.basePrice > 1000) {
            return this.basePrice * 0.95;
        } else {
            return this.basePrice * 0.98;
        }
    }
}