<?php
/**
 * @file
 * Contains Boldizart\Tokengenerator;
 */
namespace Boldizart;

class Tokengenerator
{
    private $token;

    public function __construct(){
        $this->token = '';
    }
    /**
     * Create random token with these parameters.
     */
    public function token(
        $length  = 0,   // The length of token
        $lower  = true, // Add lowercase characters
        $upper  = true, // Add uppercase characters
        $number = true, // Add numbers
        $special = false // Add special characthers
    ){
        $this->token = '';
        $length = ($length) ? $length : rand(8, 28);

        $char = '';
        $chars = [
            'numbers' => '0123456789',
            'lower_chars' => 'abcdefghijklmnopqrstuvwxyz',
            'upper_chars' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'special_chars' => '_?!@.-:'
        ];

        $char .= ($lower) ? $chars['lower_chars'] : '';
        $char .= ($upper) ? $chars['upper_chars'] : '';
        $char .= ($number) ? $chars['numbers'] : '';
        $char .= ($special) ? $chars['special_chars'] : '';

        $charLength = strlen($char);

        for ($i = 0; $i < $length; $i++) {
            $this->token .= $char[rand(0, $charLength - 1)];
        }

        return (empty($this->token)) ? false : $this->token;
    }
}
