<?php

function canAccessService($user)
{
    if ($user->age < 18) {
        return false;
    }
    if (!$user->isMember) {
        return false;
    }
    return true;
}
