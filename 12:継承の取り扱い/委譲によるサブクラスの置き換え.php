<?php

class Show
{
    public function makeReservation()
    {
        echo "General Show Reservation\n";
    }
}

class Movie extends Show
{
    public function makeReservation()
    {
        echo "Movie Reservation\n";
    }
}

class Theater extends Show
{
    public function makeReservation()
    {
        echo "Theater Reservation\n";
    }
}

// クライアントコード
$movie = new Movie();
$movie->makeReservation(); // Movie Reservation

$theater = new Theater();
$theater->makeReservation(); // Theater Reservation
