<?php

interface Verifier
{
    public static function verify(object $user, string $password): bool;
}
