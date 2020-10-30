<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use Webpayby\Payment\Exceptions\SSLException;

class Encrypter
{
    /* @var resource $pk*/
    private $pk;

    /**
     * Encrypter constructor.
     *
     * @param string $certificate
     *
     * @throws SSLException
     */
    public function __construct(string $certificate)
    {
        $this->pk = $this->getOpenSSLPublicKey($certificate);
    }

    /**
     * @param array $data
     *
     * @return string
     * @throws SSLException
     */
    public function base64Encrypt(array $data): string
    {
        return base64_encode($this->encrypt($data));
    }

    /**
     * @param array $data
     *
     * @return string
     * @throws SSLException
     */
    private function encrypt(array $data): string
    {
        if (false === openssl_public_encrypt(json_encode($data), $encryptedData, $this->pk)) {
            throw new SSLException('Encryption error.');
        }

        return $encryptedData;
    }

    /**
     * @param string $certificate
     *
     * @return resource
     * @throws SSLException
     */
    private function getOpenSSLPublicKey(string $certificate)
    {
        $resource =  openssl_get_publickey($certificate);
        if (false === $resource) {
            throw new SSLException('Something wrong with certificate.');
        }

        return $resource;
    }
}
