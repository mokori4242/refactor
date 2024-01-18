function enrichReading(original) {
    const result = structuredClone(original);
    result.baseCharge = calculateBaseCharge(result);
    result.taxableCharge = Math.max(0, result.baseCharge - taxThreshold(result.year));
    return result;

    function calculateBaseCharge(aReading) {
        return baseRate(aReading.month, aReading.year) * aReading.quantity;
    }
}

reading = { customer: "ivan", quantity: 10, month: 5, year: 2017 };

// client1
const rawReading = acquireReading();
const aReading = enrichReading(rawReading);
const baseCharge = aReading.baseCharge;

// client2
const rawReading = acquireReading();
const aReading = enrichReading(rawReading);
const taxableCharge = aReading.taxableCharge;

// client3
const rawReading = acquireReading();
const aReading = enrichReading(rawReading);
const basicChargeAmount = aReading.baseCharge;

it('check reading unchanged', function () {
    const baseReading = { customer: "ivan", quantity: 15, month: 5, year: 2017 };
    const oracle = structuredClone(baseReading);
    enrichReading(baseReading);
    assert.deepEqual(baseReading, oracle);
});