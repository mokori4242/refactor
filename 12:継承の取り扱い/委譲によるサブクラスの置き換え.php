<?php

class Show
{
    private $reservationHandler;

    public function __construct(ReservationHandler $handler)
    {
        $this->reservationHandler = $handler;
    }

    public function makeReservation()
    {
        $this->reservationHandler->handleReservation();
    }
}

interface ReservationHandler
{
    public function handleReservation();
}

class MovieReservationHandler implements ReservationHandler
{
    public function handleReservation()
    {
        echo "Movie Reservation\n";
    }
}

class TheaterReservationHandler implements ReservationHandler
{
    public function handleReservation()
    {
        echo "Theater Reservation\n";
    }
}

// クライアントコード
$movieShow = new Show(new MovieReservationHandler());
$movieShow->makeReservation(); // Movie Reservation

$theaterShow = new Show(new TheaterReservationHandler());
$theaterShow->makeReservation(); // Theater Reservation
