<?php

namespace SmartDonusum\EArchive\Type;

class ResendNotificationPayload
{
    /**
     * @var string
     */
    private string $documentUuid;

    /**
     * @var 'SMS' | 'EMAIL'
     */
    private string $notificationType;

    /**
     * @var null | string
     */
    private ?string $emailOrSms = null;

    /**
     * @return string
     */
    public function getDocumentUuid(): string
    {
        return $this->documentUuid;
    }

    /**
     * @param string $documentUuid
     * @return static
     */
    public function withDocumentUuid(string $documentUuid): static
    {
        $new = clone $this;
        $new->documentUuid = $documentUuid;

        return $new;
    }

    /**
     * @return 'SMS' | 'EMAIL'
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }

    /**
     * @param 'SMS' | 'EMAIL' $notificationType
     * @return static
     */
    public function withNotificationType(string $notificationType): static
    {
        $new = clone $this;
        $new->notificationType = $notificationType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmailOrSms(): ?string
    {
        return $this->emailOrSms;
    }

    /**
     * @param null | string $emailOrSms
     * @return static
     */
    public function withEmailOrSms(?string $emailOrSms): static
    {
        $new = clone $this;
        $new->emailOrSms = $emailOrSms;

        return $new;
    }
}

