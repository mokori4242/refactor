function getRating(aDrive) {
    return moreThanFiveLateDeliveries(aDrive)? 2 : 1;
}

function moreThanFiveLateDeliveries(dvr) {
    return dvr.numberOfLateDeliveries > 5;
}