<?php

function canAccessService($user)
{
    return $user->age >= 18 && $user->isMember;
}
