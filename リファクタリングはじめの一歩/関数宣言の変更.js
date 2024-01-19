- function inNewEngland(aCustomer) {
    return xxNewinNewEngland(aCustomer.address.state);
}

function xxNewinNewEngland(stateCode) {
    return ["MA", "CT", "ME", "VT", "NH", "RI"].includes(stateCode);
}

+ function inNewEngland(stateCode) {
    return ["MA", "CT", "ME", "VT", "NH", "RI"].includes(stateCode);
}

- const newEnglanders = someCustomers.filter(c => xxNewinNewEngland(c.address.state));
+ const newEnglanders = someCustomers.filter(c => inNewEngland(c.address.state));