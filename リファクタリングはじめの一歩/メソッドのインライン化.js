function getRating(drive) {
    return (drive.numberOfLateDeliveries > 5) ? 2 : 1;
}