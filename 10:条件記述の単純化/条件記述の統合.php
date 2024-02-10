<?php

function canAccessService($user)
{
    if ($user->role === "admin") {
        return true;
    }
    if ($user->isSpecialMember) {
        return true;
    }
    return false;
}
