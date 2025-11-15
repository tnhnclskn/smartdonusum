<?php

namespace SmartDonusum\EArchive\Type;

class ResponseDocument
{
    /**
     * @var null | string
     */
    private ?string $document_uuid = null;

    /**
     * @var null | string
     */
    private ?string $document_id = null;

    /**
     * @var null | string
     */
    private ?string $envelope_uuid = null;

    /**
     * @var null | string
     */
    private ?string $document_profile = null;

    /**
     * @var null | string
     */
    private ?string $system_creation_time = null;

    /**
     * @var null | string
     */
    private ?string $document_issue_date = null;

    /**
     * @var null | string
     */
    private ?string $source_id = null;

    /**
     * @var null | string
     */
    private ?string $destination_id = null;

    /**
     * @var null | string
     */
    private ?string $source_urn = null;

    /**
     * @var null | string
     */
    private ?string $source_title = null;

    /**
     * @var null | string
     */
    private ?string $destination_urn = null;

    /**
     * @var null | string
     */
    private ?string $currency_code = null;

    /**
     * @var null | string
     */
    private ?string $invoice_total = null;

    /**
     * @var null | string
     */
    private ?string $state_code = null;

    /**
     * @var null | string
     */
    private ?string $state_explanation = null;

    /**
     * @var null | string
     */
    private ?string $cause = null;

    /**
     * @var null | string
     */
    private ?string $content_type = null;

    /**
     * @var null | mixed
     */
    private mixed $document_content = null;

    /**
     * @var int
     */
    private int $emailSent;

    /**
     * @var null | string
     */
    private ?string $emailSentDate = null;

    /**
     * @var null | string
     */
    private ?string $cancelled = null;

    /**
     * @var null | string
     */
    private ?string $cancel_date = null;

    /**
     * @var null | string
     */
    private ?string $reference_document_uuid = null;

    /**
     * @var null | string
     */
    private ?string $response_document_uuid = null;

    /**
     * @var null | string
     */
    private ?string $response_code = null;

    /**
     * @var null | string
     */
    private ?string $response_validation_state = null;

    /**
     * @var null | string
     */
    private ?string $response_received_date = null;

    /**
     * @var null | string
     */
    private ?string $gtb_reference_no = null;

    /**
     * @var null | string
     */
    private ?string $gtb_gcb_tescil_no = null;

    /**
     * @var null | string
     */
    private ?string $gtb_fiili_ihracat_tarihi = null;

    /**
     * @var null | string
     */
    private ?string $reserved1 = null;

    /**
     * @var null | string
     */
    private ?string $reserved2 = null;

    /**
     * @var null | string
     */
    private ?string $reserved3 = null;

    /**
     * @var null | string
     */
    private ?string $document_type_code = null;

    /**
     * @var array<int<0,max>, string>
     */
    private array $notes;

    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\DocumentInfo>
     */
    private array $despatchInfo;

    /**
     * @var null | \SmartDonusum\EArchive\Type\DocumentInfo
     */
    private ?\SmartDonusum\EArchive\Type\DocumentInfo $orderInfo = null;

    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\TaxInfo>
     */
    private array $taxInfo;

    /**
     * @var null | string
     */
    private ?string $taxInclusiveAmount = null;

    /**
     * @var null | string
     */
    private ?string $taxExlusiveAmount = null;

    /**
     * @var null | string
     */
    private ?string $allowanceTotalAmount = null;

    /**
     * @var null | string
     */
    private ?string $taxAmount0015 = null;

    /**
     * @var null | string
     */
    private ?string $lineExtensionAmount = null;

    /**
     * @var null | string
     */
    private ?string $suplierPersonName = null;

    /**
     * @var null | string
     */
    private ?string $supplierPersonMiddleName = null;

    /**
     * @var null | string
     */
    private ?string $supplierPersonFamilyName = null;

    /**
     * @var null | string
     */
    private ?string $customerPersonName = null;

    /**
     * @var null | string
     */
    private ?string $customerPersonMiddleName = null;

    /**
     * @var null | string
     */
    private ?string $customerPersonFamilyName = null;

    /**
     * @var null | string
     */
    private ?string $destination_title = null;

    /**
     * @var null | string
     */
    private ?string $is_read = null;

    /**
     * @var null | string
     */
    private ?string $is_archieved = null;

    /**
     * @var null | string
     */
    private ?string $is_accounted = null;

    /**
     * @var null | string
     */
    private ?string $is_transferred = null;

    /**
     * @var null | string
     */
    private ?string $is_printed = null;

    /**
     * @var null | string
     */
    private ?string $local_id = null;

    /**
     * @var null | string
     */
    private ?string $sendingType = null;

    /**
     * @var null | string
     */
    private ?string $buyerCustomerPartyName = null;

    /**
     * @var null | string
     */
    private ?string $buyerCustomerPersonName = null;

    /**
     * @var null | string
     */
    private ?string $buyerCustomerPersonFamilyName = null;

    /**
     * @var null | string
     */
    private ?string $report_no = null;

    /**
     * @var null | string
     */
    private ?string $cancel_report_no = null;

    /**
     * @var null | string
     */
    private ?string $objected = null;

    /**
     * @var null | string
     */
    private ?string $objectionReason = null;

    /**
     * @var null | string
     */
    private ?string $objectionDate = null;

    /**
     * @var null | string
     */
    private ?string $objectionReportNo = null;

    /**
     * @var null | string
     */
    private ?string $objectionType = null;

    /**
     * @var null | string
     */
    private ?string $objectionDocumentNo = null;

    /**
     * @var null | string
     */
    private ?string $destinationEmail = null;

    /**
     * @var null | string
     */
    private ?string $destinationMobile = null;

    /**
     * @var null | string
     */
    private ?string $smsSentDate = null;

    /**
     * @var null | int
     */
    private ?int $cancelPortalStatus = null;

    /**
     * @var null | string
     */
    private ?string $cancelReason = null;

    /**
     * @var null | string
     */
    private ?string $chargeTotalAmount = null;

    /**
     * @return null | string
     */
    public function getDocumentUuid(): ?string
    {
        return $this->document_uuid;
    }

    /**
     * @param null | string $document_uuid
     * @return static
     */
    public function withDocumentUuid(?string $document_uuid): static
    {
        $new = clone $this;
        $new->document_uuid = $document_uuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentId(): ?string
    {
        return $this->document_id;
    }

    /**
     * @param null | string $document_id
     * @return static
     */
    public function withDocumentId(?string $document_id): static
    {
        $new = clone $this;
        $new->document_id = $document_id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEnvelopeUuid(): ?string
    {
        return $this->envelope_uuid;
    }

    /**
     * @param null | string $envelope_uuid
     * @return static
     */
    public function withEnvelopeUuid(?string $envelope_uuid): static
    {
        $new = clone $this;
        $new->envelope_uuid = $envelope_uuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentProfile(): ?string
    {
        return $this->document_profile;
    }

    /**
     * @param null | string $document_profile
     * @return static
     */
    public function withDocumentProfile(?string $document_profile): static
    {
        $new = clone $this;
        $new->document_profile = $document_profile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSystemCreationTime(): ?string
    {
        return $this->system_creation_time;
    }

    /**
     * @param null | string $system_creation_time
     * @return static
     */
    public function withSystemCreationTime(?string $system_creation_time): static
    {
        $new = clone $this;
        $new->system_creation_time = $system_creation_time;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentIssueDate(): ?string
    {
        return $this->document_issue_date;
    }

    /**
     * @param null | string $document_issue_date
     * @return static
     */
    public function withDocumentIssueDate(?string $document_issue_date): static
    {
        $new = clone $this;
        $new->document_issue_date = $document_issue_date;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSourceId(): ?string
    {
        return $this->source_id;
    }

    /**
     * @param null | string $source_id
     * @return static
     */
    public function withSourceId(?string $source_id): static
    {
        $new = clone $this;
        $new->source_id = $source_id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationId(): ?string
    {
        return $this->destination_id;
    }

    /**
     * @param null | string $destination_id
     * @return static
     */
    public function withDestinationId(?string $destination_id): static
    {
        $new = clone $this;
        $new->destination_id = $destination_id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSourceUrn(): ?string
    {
        return $this->source_urn;
    }

    /**
     * @param null | string $source_urn
     * @return static
     */
    public function withSourceUrn(?string $source_urn): static
    {
        $new = clone $this;
        $new->source_urn = $source_urn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSourceTitle(): ?string
    {
        return $this->source_title;
    }

    /**
     * @param null | string $source_title
     * @return static
     */
    public function withSourceTitle(?string $source_title): static
    {
        $new = clone $this;
        $new->source_title = $source_title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationUrn(): ?string
    {
        return $this->destination_urn;
    }

    /**
     * @param null | string $destination_urn
     * @return static
     */
    public function withDestinationUrn(?string $destination_urn): static
    {
        $new = clone $this;
        $new->destination_urn = $destination_urn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currency_code;
    }

    /**
     * @param null | string $currency_code
     * @return static
     */
    public function withCurrencyCode(?string $currency_code): static
    {
        $new = clone $this;
        $new->currency_code = $currency_code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getInvoiceTotal(): ?string
    {
        return $this->invoice_total;
    }

    /**
     * @param null | string $invoice_total
     * @return static
     */
    public function withInvoiceTotal(?string $invoice_total): static
    {
        $new = clone $this;
        $new->invoice_total = $invoice_total;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStateCode(): ?string
    {
        return $this->state_code;
    }

    /**
     * @param null | string $state_code
     * @return static
     */
    public function withStateCode(?string $state_code): static
    {
        $new = clone $this;
        $new->state_code = $state_code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStateExplanation(): ?string
    {
        return $this->state_explanation;
    }

    /**
     * @param null | string $state_explanation
     * @return static
     */
    public function withStateExplanation(?string $state_explanation): static
    {
        $new = clone $this;
        $new->state_explanation = $state_explanation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCause(): ?string
    {
        return $this->cause;
    }

    /**
     * @param null | string $cause
     * @return static
     */
    public function withCause(?string $cause): static
    {
        $new = clone $this;
        $new->cause = $cause;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContentType(): ?string
    {
        return $this->content_type;
    }

    /**
     * @param null | string $content_type
     * @return static
     */
    public function withContentType(?string $content_type): static
    {
        $new = clone $this;
        $new->content_type = $content_type;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getDocumentContent(): mixed
    {
        return $this->document_content;
    }

    /**
     * @param null | mixed $document_content
     * @return static
     */
    public function withDocumentContent(mixed $document_content): static
    {
        $new = clone $this;
        $new->document_content = $document_content;

        return $new;
    }

    /**
     * @return int
     */
    public function getEmailSent(): int
    {
        return $this->emailSent;
    }

    /**
     * @param int $emailSent
     * @return static
     */
    public function withEmailSent(int $emailSent): static
    {
        $new = clone $this;
        $new->emailSent = $emailSent;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmailSentDate(): ?string
    {
        return $this->emailSentDate;
    }

    /**
     * @param null | string $emailSentDate
     * @return static
     */
    public function withEmailSentDate(?string $emailSentDate): static
    {
        $new = clone $this;
        $new->emailSentDate = $emailSentDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCancelled(): ?string
    {
        return $this->cancelled;
    }

    /**
     * @param null | string $cancelled
     * @return static
     */
    public function withCancelled(?string $cancelled): static
    {
        $new = clone $this;
        $new->cancelled = $cancelled;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCancelDate(): ?string
    {
        return $this->cancel_date;
    }

    /**
     * @param null | string $cancel_date
     * @return static
     */
    public function withCancelDate(?string $cancel_date): static
    {
        $new = clone $this;
        $new->cancel_date = $cancel_date;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReferenceDocumentUuid(): ?string
    {
        return $this->reference_document_uuid;
    }

    /**
     * @param null | string $reference_document_uuid
     * @return static
     */
    public function withReferenceDocumentUuid(?string $reference_document_uuid): static
    {
        $new = clone $this;
        $new->reference_document_uuid = $reference_document_uuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseDocumentUuid(): ?string
    {
        return $this->response_document_uuid;
    }

    /**
     * @param null | string $response_document_uuid
     * @return static
     */
    public function withResponseDocumentUuid(?string $response_document_uuid): static
    {
        $new = clone $this;
        $new->response_document_uuid = $response_document_uuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseCode(): ?string
    {
        return $this->response_code;
    }

    /**
     * @param null | string $response_code
     * @return static
     */
    public function withResponseCode(?string $response_code): static
    {
        $new = clone $this;
        $new->response_code = $response_code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseValidationState(): ?string
    {
        return $this->response_validation_state;
    }

    /**
     * @param null | string $response_validation_state
     * @return static
     */
    public function withResponseValidationState(?string $response_validation_state): static
    {
        $new = clone $this;
        $new->response_validation_state = $response_validation_state;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseReceivedDate(): ?string
    {
        return $this->response_received_date;
    }

    /**
     * @param null | string $response_received_date
     * @return static
     */
    public function withResponseReceivedDate(?string $response_received_date): static
    {
        $new = clone $this;
        $new->response_received_date = $response_received_date;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGtbReferenceNo(): ?string
    {
        return $this->gtb_reference_no;
    }

    /**
     * @param null | string $gtb_reference_no
     * @return static
     */
    public function withGtbReferenceNo(?string $gtb_reference_no): static
    {
        $new = clone $this;
        $new->gtb_reference_no = $gtb_reference_no;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGtbGcbTescilNo(): ?string
    {
        return $this->gtb_gcb_tescil_no;
    }

    /**
     * @param null | string $gtb_gcb_tescil_no
     * @return static
     */
    public function withGtbGcbTescilNo(?string $gtb_gcb_tescil_no): static
    {
        $new = clone $this;
        $new->gtb_gcb_tescil_no = $gtb_gcb_tescil_no;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGtbFiiliIhracatTarihi(): ?string
    {
        return $this->gtb_fiili_ihracat_tarihi;
    }

    /**
     * @param null | string $gtb_fiili_ihracat_tarihi
     * @return static
     */
    public function withGtbFiiliIhracatTarihi(?string $gtb_fiili_ihracat_tarihi): static
    {
        $new = clone $this;
        $new->gtb_fiili_ihracat_tarihi = $gtb_fiili_ihracat_tarihi;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReserved1(): ?string
    {
        return $this->reserved1;
    }

    /**
     * @param null | string $reserved1
     * @return static
     */
    public function withReserved1(?string $reserved1): static
    {
        $new = clone $this;
        $new->reserved1 = $reserved1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReserved2(): ?string
    {
        return $this->reserved2;
    }

    /**
     * @param null | string $reserved2
     * @return static
     */
    public function withReserved2(?string $reserved2): static
    {
        $new = clone $this;
        $new->reserved2 = $reserved2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReserved3(): ?string
    {
        return $this->reserved3;
    }

    /**
     * @param null | string $reserved3
     * @return static
     */
    public function withReserved3(?string $reserved3): static
    {
        $new = clone $this;
        $new->reserved3 = $reserved3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentTypeCode(): ?string
    {
        return $this->document_type_code;
    }

    /**
     * @param null | string $document_type_code
     * @return static
     */
    public function withDocumentTypeCode(?string $document_type_code): static
    {
        $new = clone $this;
        $new->document_type_code = $document_type_code;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getNotes(): array
    {
        return $this->notes;
    }

    /**
     * @param array<int<0,max>, string> $notes
     * @return static
     */
    public function withNotes(array $notes): static
    {
        $new = clone $this;
        $new->notes = $notes;

        return $new;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\DocumentInfo>
     */
    public function getDespatchInfo(): array
    {
        return $this->despatchInfo;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\DocumentInfo> $despatchInfo
     * @return static
     */
    public function withDespatchInfo(array $despatchInfo): static
    {
        $new = clone $this;
        $new->despatchInfo = $despatchInfo;

        return $new;
    }

    /**
     * @return null | \SmartDonusum\EArchive\Type\DocumentInfo
     */
    public function getOrderInfo(): ?\SmartDonusum\EArchive\Type\DocumentInfo
    {
        return $this->orderInfo;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\DocumentInfo $orderInfo
     * @return static
     */
    public function withOrderInfo(?\SmartDonusum\EArchive\Type\DocumentInfo $orderInfo): static
    {
        $new = clone $this;
        $new->orderInfo = $orderInfo;

        return $new;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\TaxInfo>
     */
    public function getTaxInfo(): array
    {
        return $this->taxInfo;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\TaxInfo> $taxInfo
     * @return static
     */
    public function withTaxInfo(array $taxInfo): static
    {
        $new = clone $this;
        $new->taxInfo = $taxInfo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxInclusiveAmount(): ?string
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * @param null | string $taxInclusiveAmount
     * @return static
     */
    public function withTaxInclusiveAmount(?string $taxInclusiveAmount): static
    {
        $new = clone $this;
        $new->taxInclusiveAmount = $taxInclusiveAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxExlusiveAmount(): ?string
    {
        return $this->taxExlusiveAmount;
    }

    /**
     * @param null | string $taxExlusiveAmount
     * @return static
     */
    public function withTaxExlusiveAmount(?string $taxExlusiveAmount): static
    {
        $new = clone $this;
        $new->taxExlusiveAmount = $taxExlusiveAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAllowanceTotalAmount(): ?string
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * @param null | string $allowanceTotalAmount
     * @return static
     */
    public function withAllowanceTotalAmount(?string $allowanceTotalAmount): static
    {
        $new = clone $this;
        $new->allowanceTotalAmount = $allowanceTotalAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxAmount0015(): ?string
    {
        return $this->taxAmount0015;
    }

    /**
     * @param null | string $taxAmount0015
     * @return static
     */
    public function withTaxAmount0015(?string $taxAmount0015): static
    {
        $new = clone $this;
        $new->taxAmount0015 = $taxAmount0015;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLineExtensionAmount(): ?string
    {
        return $this->lineExtensionAmount;
    }

    /**
     * @param null | string $lineExtensionAmount
     * @return static
     */
    public function withLineExtensionAmount(?string $lineExtensionAmount): static
    {
        $new = clone $this;
        $new->lineExtensionAmount = $lineExtensionAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuplierPersonName(): ?string
    {
        return $this->suplierPersonName;
    }

    /**
     * @param null | string $suplierPersonName
     * @return static
     */
    public function withSuplierPersonName(?string $suplierPersonName): static
    {
        $new = clone $this;
        $new->suplierPersonName = $suplierPersonName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSupplierPersonMiddleName(): ?string
    {
        return $this->supplierPersonMiddleName;
    }

    /**
     * @param null | string $supplierPersonMiddleName
     * @return static
     */
    public function withSupplierPersonMiddleName(?string $supplierPersonMiddleName): static
    {
        $new = clone $this;
        $new->supplierPersonMiddleName = $supplierPersonMiddleName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSupplierPersonFamilyName(): ?string
    {
        return $this->supplierPersonFamilyName;
    }

    /**
     * @param null | string $supplierPersonFamilyName
     * @return static
     */
    public function withSupplierPersonFamilyName(?string $supplierPersonFamilyName): static
    {
        $new = clone $this;
        $new->supplierPersonFamilyName = $supplierPersonFamilyName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerPersonName(): ?string
    {
        return $this->customerPersonName;
    }

    /**
     * @param null | string $customerPersonName
     * @return static
     */
    public function withCustomerPersonName(?string $customerPersonName): static
    {
        $new = clone $this;
        $new->customerPersonName = $customerPersonName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerPersonMiddleName(): ?string
    {
        return $this->customerPersonMiddleName;
    }

    /**
     * @param null | string $customerPersonMiddleName
     * @return static
     */
    public function withCustomerPersonMiddleName(?string $customerPersonMiddleName): static
    {
        $new = clone $this;
        $new->customerPersonMiddleName = $customerPersonMiddleName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerPersonFamilyName(): ?string
    {
        return $this->customerPersonFamilyName;
    }

    /**
     * @param null | string $customerPersonFamilyName
     * @return static
     */
    public function withCustomerPersonFamilyName(?string $customerPersonFamilyName): static
    {
        $new = clone $this;
        $new->customerPersonFamilyName = $customerPersonFamilyName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationTitle(): ?string
    {
        return $this->destination_title;
    }

    /**
     * @param null | string $destination_title
     * @return static
     */
    public function withDestinationTitle(?string $destination_title): static
    {
        $new = clone $this;
        $new->destination_title = $destination_title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsRead(): ?string
    {
        return $this->is_read;
    }

    /**
     * @param null | string $is_read
     * @return static
     */
    public function withIsRead(?string $is_read): static
    {
        $new = clone $this;
        $new->is_read = $is_read;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsArchieved(): ?string
    {
        return $this->is_archieved;
    }

    /**
     * @param null | string $is_archieved
     * @return static
     */
    public function withIsArchieved(?string $is_archieved): static
    {
        $new = clone $this;
        $new->is_archieved = $is_archieved;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsAccounted(): ?string
    {
        return $this->is_accounted;
    }

    /**
     * @param null | string $is_accounted
     * @return static
     */
    public function withIsAccounted(?string $is_accounted): static
    {
        $new = clone $this;
        $new->is_accounted = $is_accounted;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsTransferred(): ?string
    {
        return $this->is_transferred;
    }

    /**
     * @param null | string $is_transferred
     * @return static
     */
    public function withIsTransferred(?string $is_transferred): static
    {
        $new = clone $this;
        $new->is_transferred = $is_transferred;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsPrinted(): ?string
    {
        return $this->is_printed;
    }

    /**
     * @param null | string $is_printed
     * @return static
     */
    public function withIsPrinted(?string $is_printed): static
    {
        $new = clone $this;
        $new->is_printed = $is_printed;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLocalId(): ?string
    {
        return $this->local_id;
    }

    /**
     * @param null | string $local_id
     * @return static
     */
    public function withLocalId(?string $local_id): static
    {
        $new = clone $this;
        $new->local_id = $local_id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSendingType(): ?string
    {
        return $this->sendingType;
    }

    /**
     * @param null | string $sendingType
     * @return static
     */
    public function withSendingType(?string $sendingType): static
    {
        $new = clone $this;
        $new->sendingType = $sendingType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBuyerCustomerPartyName(): ?string
    {
        return $this->buyerCustomerPartyName;
    }

    /**
     * @param null | string $buyerCustomerPartyName
     * @return static
     */
    public function withBuyerCustomerPartyName(?string $buyerCustomerPartyName): static
    {
        $new = clone $this;
        $new->buyerCustomerPartyName = $buyerCustomerPartyName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBuyerCustomerPersonName(): ?string
    {
        return $this->buyerCustomerPersonName;
    }

    /**
     * @param null | string $buyerCustomerPersonName
     * @return static
     */
    public function withBuyerCustomerPersonName(?string $buyerCustomerPersonName): static
    {
        $new = clone $this;
        $new->buyerCustomerPersonName = $buyerCustomerPersonName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBuyerCustomerPersonFamilyName(): ?string
    {
        return $this->buyerCustomerPersonFamilyName;
    }

    /**
     * @param null | string $buyerCustomerPersonFamilyName
     * @return static
     */
    public function withBuyerCustomerPersonFamilyName(?string $buyerCustomerPersonFamilyName): static
    {
        $new = clone $this;
        $new->buyerCustomerPersonFamilyName = $buyerCustomerPersonFamilyName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReportNo(): ?string
    {
        return $this->report_no;
    }

    /**
     * @param null | string $report_no
     * @return static
     */
    public function withReportNo(?string $report_no): static
    {
        $new = clone $this;
        $new->report_no = $report_no;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCancelReportNo(): ?string
    {
        return $this->cancel_report_no;
    }

    /**
     * @param null | string $cancel_report_no
     * @return static
     */
    public function withCancelReportNo(?string $cancel_report_no): static
    {
        $new = clone $this;
        $new->cancel_report_no = $cancel_report_no;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjected(): ?string
    {
        return $this->objected;
    }

    /**
     * @param null | string $objected
     * @return static
     */
    public function withObjected(?string $objected): static
    {
        $new = clone $this;
        $new->objected = $objected;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionReason(): ?string
    {
        return $this->objectionReason;
    }

    /**
     * @param null | string $objectionReason
     * @return static
     */
    public function withObjectionReason(?string $objectionReason): static
    {
        $new = clone $this;
        $new->objectionReason = $objectionReason;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionDate(): ?string
    {
        return $this->objectionDate;
    }

    /**
     * @param null | string $objectionDate
     * @return static
     */
    public function withObjectionDate(?string $objectionDate): static
    {
        $new = clone $this;
        $new->objectionDate = $objectionDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionReportNo(): ?string
    {
        return $this->objectionReportNo;
    }

    /**
     * @param null | string $objectionReportNo
     * @return static
     */
    public function withObjectionReportNo(?string $objectionReportNo): static
    {
        $new = clone $this;
        $new->objectionReportNo = $objectionReportNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionType(): ?string
    {
        return $this->objectionType;
    }

    /**
     * @param null | string $objectionType
     * @return static
     */
    public function withObjectionType(?string $objectionType): static
    {
        $new = clone $this;
        $new->objectionType = $objectionType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionDocumentNo(): ?string
    {
        return $this->objectionDocumentNo;
    }

    /**
     * @param null | string $objectionDocumentNo
     * @return static
     */
    public function withObjectionDocumentNo(?string $objectionDocumentNo): static
    {
        $new = clone $this;
        $new->objectionDocumentNo = $objectionDocumentNo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationEmail(): ?string
    {
        return $this->destinationEmail;
    }

    /**
     * @param null | string $destinationEmail
     * @return static
     */
    public function withDestinationEmail(?string $destinationEmail): static
    {
        $new = clone $this;
        $new->destinationEmail = $destinationEmail;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationMobile(): ?string
    {
        return $this->destinationMobile;
    }

    /**
     * @param null | string $destinationMobile
     * @return static
     */
    public function withDestinationMobile(?string $destinationMobile): static
    {
        $new = clone $this;
        $new->destinationMobile = $destinationMobile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSmsSentDate(): ?string
    {
        return $this->smsSentDate;
    }

    /**
     * @param null | string $smsSentDate
     * @return static
     */
    public function withSmsSentDate(?string $smsSentDate): static
    {
        $new = clone $this;
        $new->smsSentDate = $smsSentDate;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCancelPortalStatus(): ?int
    {
        return $this->cancelPortalStatus;
    }

    /**
     * @param null | int $cancelPortalStatus
     * @return static
     */
    public function withCancelPortalStatus(?int $cancelPortalStatus): static
    {
        $new = clone $this;
        $new->cancelPortalStatus = $cancelPortalStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * @param null | string $cancelReason
     * @return static
     */
    public function withCancelReason(?string $cancelReason): static
    {
        $new = clone $this;
        $new->cancelReason = $cancelReason;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getChargeTotalAmount(): ?string
    {
        return $this->chargeTotalAmount;
    }

    /**
     * @param null | string $chargeTotalAmount
     * @return static
     */
    public function withChargeTotalAmount(?string $chargeTotalAmount): static
    {
        $new = clone $this;
        $new->chargeTotalAmount = $chargeTotalAmount;

        return $new;
    }
}

