<?php

namespace Pantheion\Hashing;

/**
 * Class to Hash passwords
 */
class Hash
{
    /**
     * Hashes a password. The cost is 10
     * by default
     *
     * @param string $string
     * @param integer $cost
     * @return string
     */
    public function make(string $string, int $cost = 10)
    {
        return password_hash($string, PASSWORD_BCRYPT, [
            'cost' => $cost
        ]);
    }

    /**
     * Checks if the string and
     * the hash match
     *
     * @param string $string
     * @param string $hash
     * @return bool
     */
    public function check(string $string, string $hash)
    {
        return password_verify($string, $hash);
    }

    /**
     * Gets the info from a hash
     *
     * @param string $hash
     * @return array
     */
    public function info(string $hash)
    {
        return password_get_info($hash);
    }
}