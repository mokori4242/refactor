<?php

function canAccessService($user)
{
    return $user->role === "admin" || $user->isSpecialMember;
}
