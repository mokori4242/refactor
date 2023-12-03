function getRating(aDrive) {
    return aDrive.numberOfLateDeliveries > 5 ? 2 : 1;
}