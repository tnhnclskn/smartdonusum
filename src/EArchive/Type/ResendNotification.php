<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ResendNotification implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\ResendNotificationPayload>
     */
    private array $resendNotificationPayloadList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\ResendNotificationPayload> $resendNotificationPayloadList
     */
    public function __construct(array $resendNotificationPayloadList)
    {
        $this->resendNotificationPayloadList = $resendNotificationPayloadList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\ResendNotificationPayload>
     */
    public function getResendNotificationPayloadList(): array
    {
        return $this->resendNotificationPayloadList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\ResendNotificationPayload> $resendNotificationPayloadList
     * @return static
     */
    public function withResendNotificationPayloadList(array $resendNotificationPayloadList): static
    {
        $new = clone $this;
        $new->resendNotificationPayloadList = $resendNotificationPayloadList;

        return $new;
    }
}

