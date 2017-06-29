<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Encoder;

use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTDecodeFailureException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException;

/**
 * JWTEncoderInterface.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
interface JWTEncoderInterface
{
    /**
     * @param array $data
     * @param array $header
     *
     * @return string the encoded token string
     *
     * @throws JWTEncodeFailureException If an error occurred while trying to create
     *                                   the token (invalid crypto key, invalid payload...)
     */
    public function encode(array $data, array $header = []);

    /**
     * @param string $token
     * @param array  $header
     *
     * @return array
     *
     * @throws JWTDecodeFailureException If an error occurred while trying to load the token
     *                                   (invalid signature, invalid crypto key, expired token...)
     */
    public function decode($token, array &$header = []);
}
