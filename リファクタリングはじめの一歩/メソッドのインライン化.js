function getRating(drive) {
    return moreThanFiveLateDeliveries(drive) ? 2 : 1;
}

function moreThanFiveLateDeliveries(drive) {
    return drive.numberOfLateDeliveries > 5;
}