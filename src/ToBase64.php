<?php

namespace Abublihi\Guid;

use Ramsey\Uuid\Guid\Guid;
use Ramsey\Uuid\Uuid;

/**
*  Takes a GUID and convert it to base64 that is compatible with microsoft immutable id
*
*  @author Abdulsalam Albulayhi
*/
class ToBase64
{
    private $uuid;
    private $base64;
    private $uuidFields;

    public function __construct($uuid)
    {
        $this->uuid = Uuid::fromString($uuid);
        $this->uuidFields = $this->uuid->getFields();
        $this->base64 = base64_encode($this->getLittleEndian());
    }

    public function getBase64()
    {
        return $this->base64;
    }

    /**
     * Encode the Guid to little-endian bytes
     *
     * @return string
     */
    public function getLittleEndian()
    {
        return pack(
            'ISSCC',
            $this->uuidFields['time_low'],
            $this->uuidFields['time_mid'],
            $this->uuidFields['time_hi_and_version'],
            $this->uuidFields['clock_seq_hi_and_reserved'],
            $this->uuidFields['clock_seq_low']
        ).hex2bin($this->uuid->getNodeHex());
    }

    /**
     * Encodes a Guid to base64
     *
     * @param string $guid
     * @return void
     */
    public static function encode($guid)
    {
        $toBase64 = new self($guid);
        return $toBase64->getBase64();
    }
}
