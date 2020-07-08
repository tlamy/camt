<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class ReturnInformation
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $additionalInformation;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getAdditionalInformation(): string
    {
        return $this->additionalInformation;
    }

    public static function fromUnstructured(string $code, string $additionalInformation): self
    {
        $information = new self();
        $information->code = $code;
        $information->additionalInformation = $additionalInformation;

        return $information;
    }
}
