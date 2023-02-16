<?php

namespace lib;

class Signature
{
    /**
     *
     * @param string $secret
     * @param array  $payload
     * @return string
     */
    private function compute_hash($secret, $payload)
    {
        return base64_encode(hash_hmac('sha256', json_encode($payload), utf8_encode($secret)));
    }


    /**
     *
     * @param string $user_string
     * @param string $known_string
     * @param array  $payload
     * @return bool
     */
    protected function hash_valid($user_string, $known_string, $payload)
    {
        $hash = $this->compute_hash($user_string, $payload);

        return hash_equals($known_string, $hash);
    }
}