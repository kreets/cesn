<?php

use App\Reservation;
use Carbon\Carbon;

function overlapingReservation($months = 3){
    $overlappingReservations = [];

    // Define date range
    $currentDate = Carbon::now();
    $endDate = $currentDate->copy()->addMonths($months);

    // Fetch reservations within the date range
    $reservations = Reservation::where('reservation_from', '>=', $currentDate)
        ->where('reservation_to', '<=', $endDate)
        ->get();

    foreach ($reservations as $reservation1) {
        if (!isset($overlappingReservations[$reservation1->room_id])) {
            $overlappingReservations[$reservation1->room_id] = [];
        }

        foreach ($reservations as $reservation2) {
            if (
                $reservation1->id !== $reservation2->id &&
                $reservation1->room_id === $reservation2->room_id &&
                $reservation1->reservation_from < $reservation2->reservation_to &&
                $reservation1->reservation_to > $reservation2->reservation_from
            ) {
                if (!in_array($reservation1->id, $overlappingReservations[$reservation1->room_id])) {
                    $overlappingReservations[$reservation1->room_id][] = $reservation1->id;
                }
                if (!in_array($reservation2->id, $overlappingReservations[$reservation1->room_id])) {
                    $overlappingReservations[$reservation1->room_id][] = $reservation2->id;
                }
            }
        }
    }

    return $overlappingReservations;
}

function collidingReservation() {
    $overlappingReservations = overlapingReservation();
    $totalCount = 0;

    foreach ($overlappingReservations as $roomReservations) {
        $totalCount += count($roomReservations);
    }

    return $totalCount;
}

function awaitingReservations(){
    return Reservation::where('confirmable', false)->where('is_confirmed', false)->orderBy('reservation_from')->count();
}

function quotes(){
    return \App\Quote::all();
}