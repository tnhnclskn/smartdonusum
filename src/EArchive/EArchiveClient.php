<?php

namespace SmartDonusum\EArchive;

use Phpro\SoapClient\Caller\Caller;
use SmartDonusum\EArchive\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class EArchiveClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\SendInvoice $parameters
     * @return ResultInterface & Type\SendInvoiceResponse
     * @throws SoapException
     */
    public function sendInvoice(\SmartDonusum\EArchive\Type\SendInvoice $parameters): \SmartDonusum\EArchive\Type\SendInvoiceResponse
    {
        $response = ($this->caller)('sendInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendSignedInvoice $parameters
     * @return ResultInterface & Type\SendSignedInvoiceResponse
     * @throws SoapException
     */
    public function sendSignedInvoice(\SmartDonusum\EArchive\Type\SendSignedInvoice $parameters): \SmartDonusum\EArchive\Type\SendSignedInvoiceResponse
    {
        $response = ($this->caller)('sendSignedInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendSignedInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendInvoiceWithoutId $parameters
     * @return ResultInterface & Type\SendInvoiceWithoutIdResponse
     * @throws SoapException
     */
    public function sendInvoiceWithoutId(\SmartDonusum\EArchive\Type\SendInvoiceWithoutId $parameters): \SmartDonusum\EArchive\Type\SendInvoiceWithoutIdResponse
    {
        $response = ($this->caller)('sendInvoiceWithoutId', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendInvoiceWithoutIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendInvoiceWithoutIdAndUuid $parameters
     * @return ResultInterface & Type\SendInvoiceWithoutIdAndUuidResponse
     * @throws SoapException
     */
    public function sendInvoiceWithoutIdAndUuid(\SmartDonusum\EArchive\Type\SendInvoiceWithoutIdAndUuid $parameters): \SmartDonusum\EArchive\Type\SendInvoiceWithoutIdAndUuidResponse
    {
        $response = ($this->caller)('sendInvoiceWithoutIdAndUuid', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendInvoiceWithoutIdAndUuidResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendAndApproveInvoice $parameters
     * @return ResultInterface & Type\SendAndApproveInvoiceResponse
     * @throws SoapException
     */
    public function sendAndApproveInvoice(\SmartDonusum\EArchive\Type\SendAndApproveInvoice $parameters): \SmartDonusum\EArchive\Type\SendAndApproveInvoiceResponse
    {
        $response = ($this->caller)('sendAndApproveInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendAndApproveInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendZReport $parameters
     * @return ResultInterface & Type\SendZReportResponse
     * @throws SoapException
     */
    public function sendZReport(\SmartDonusum\EArchive\Type\SendZReport $parameters): \SmartDonusum\EArchive\Type\SendZReportResponse
    {
        $response = ($this->caller)('sendZReport', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SendZReportResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateInvoice $parameters
     * @return ResultInterface & Type\UpdateInvoiceResponse
     * @throws SoapException
     */
    public function updateInvoice(\SmartDonusum\EArchive\Type\UpdateInvoice $parameters): \SmartDonusum\EArchive\Type\UpdateInvoiceResponse
    {
        $response = ($this->caller)('updateInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\UpdateInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CancelInvoice $parameters
     * @return ResultInterface & Type\CancelInvoiceResponse
     * @throws SoapException
     */
    public function cancelInvoice(\SmartDonusum\EArchive\Type\CancelInvoice $parameters): \SmartDonusum\EArchive\Type\CancelInvoiceResponse
    {
        $response = ($this->caller)('cancelInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\CancelInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ObjectInvoice $parameters
     * @return ResultInterface & Type\ObjectInvoiceResponse
     * @throws SoapException
     */
    public function objectInvoice(\SmartDonusum\EArchive\Type\ObjectInvoice $parameters): \SmartDonusum\EArchive\Type\ObjectInvoiceResponse
    {
        $response = ($this->caller)('objectInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\ObjectInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoice $parameters
     * @return ResultInterface & Type\QueryInvoiceResponse
     * @throws SoapException
     */
    public function queryInvoice(\SmartDonusum\EArchive\Type\QueryInvoice $parameters): \SmartDonusum\EArchive\Type\QueryInvoiceResponse
    {
        $response = ($this->caller)('QueryInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryArchivedInvoice $parameters
     * @return ResultInterface & Type\QueryArchivedInvoiceResponse
     * @throws SoapException
     */
    public function queryArchivedInvoice(\SmartDonusum\EArchive\Type\QueryArchivedInvoice $parameters): \SmartDonusum\EArchive\Type\QueryArchivedInvoiceResponse
    {
        $response = ($this->caller)('QueryArchivedInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryArchivedInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoiceWithLocalId $parameters
     * @return ResultInterface & Type\QueryInvoiceWithLocalIdResponse
     * @throws SoapException
     */
    public function queryInvoiceWithLocalId(\SmartDonusum\EArchive\Type\QueryInvoiceWithLocalId $parameters): \SmartDonusum\EArchive\Type\QueryInvoiceWithLocalIdResponse
    {
        $response = ($this->caller)('QueryInvoiceWithLocalId', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoiceWithLocalIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoiceWithReferenceCode $parameters
     * @return ResultInterface & Type\QueryInvoiceWithReferenceCodeResponse
     * @throws SoapException
     */
    public function queryInvoiceWithReferenceCode(\SmartDonusum\EArchive\Type\QueryInvoiceWithReferenceCode $parameters): \SmartDonusum\EArchive\Type\QueryInvoiceWithReferenceCodeResponse
    {
        $response = ($this->caller)('QueryInvoiceWithReferenceCode', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoiceWithReferenceCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoicesWithReceivedDate $parameters
     * @return ResultInterface & Type\QueryInvoicesWithReceivedDateResponse
     * @throws SoapException
     */
    public function queryInvoicesWithReceivedDate(\SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDate $parameters): \SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDateResponse
    {
        $response = ($this->caller)('QueryInvoicesWithReceivedDate', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoicesWithReceivedDateWithSearchParams $parameters
     * @return ResultInterface & Type\QueryInvoicesWithReceivedDateWithSearchParamsResponse
     * @throws SoapException
     */
    public function queryInvoicesWithReceivedDateWithSearchParams(\SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDateWithSearchParams $parameters): \SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDateWithSearchParamsResponse
    {
        $response = ($this->caller)('QueryInvoicesWithReceivedDateWithSearchParams', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoicesWithReceivedDateWithSearchParamsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoicesWithDocumentDate $parameters
     * @return ResultInterface & Type\QueryInvoicesWithDocumentDateResponse
     * @throws SoapException
     */
    public function queryInvoicesWithDocumentDate(\SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDate $parameters): \SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDateResponse
    {
        $response = ($this->caller)('QueryInvoicesWithDocumentDate', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoicesWithDocumentDateAndSearchParams $parameters
     * @return ResultInterface & Type\QueryInvoicesWithDocumentDateAndSearchParamsResponse
     * @throws SoapException
     */
    public function queryInvoicesWithDocumentDateAndSearchParams(\SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDateAndSearchParams $parameters): \SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDateAndSearchParamsResponse
    {
        $response = ($this->caller)('QueryInvoicesWithDocumentDateAndSearchParams', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoicesWithDocumentDateAndSearchParamsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryArchivedInvoicesWithDocumentDate $parameters
     * @return ResultInterface & Type\QueryArchivedInvoicesWithDocumentDateResponse
     * @throws SoapException
     */
    public function queryArchivedInvoicesWithDocumentDate(\SmartDonusum\EArchive\Type\QueryArchivedInvoicesWithDocumentDate $parameters): \SmartDonusum\EArchive\Type\QueryArchivedInvoicesWithDocumentDateResponse
    {
        $response = ($this->caller)('QueryArchivedInvoicesWithDocumentDate', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryArchivedInvoicesWithDocumentDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\QueryInvoicesWithGUIDList $parameters
     * @return ResultInterface & Type\QueryInvoicesWithGUIDListResponse
     * @throws SoapException
     */
    public function queryInvoicesWithGUIDList(\SmartDonusum\EArchive\Type\QueryInvoicesWithGUIDList $parameters): \SmartDonusum\EArchive\Type\QueryInvoicesWithGUIDListResponse
    {
        $response = ($this->caller)('QueryInvoicesWithGUIDList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\QueryInvoicesWithGUIDListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetLastInvoiceIdAndDate $parameters
     * @return ResultInterface & Type\GetLastInvoiceIdAndDateResponse
     * @throws SoapException
     */
    public function getLastInvoiceIdAndDate(\SmartDonusum\EArchive\Type\GetLastInvoiceIdAndDate $parameters): \SmartDonusum\EArchive\Type\GetLastInvoiceIdAndDateResponse
    {
        $response = ($this->caller)('GetLastInvoiceIdAndDate', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetLastInvoiceIdAndDateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ControlInvoiceXML $parameters
     * @return ResultInterface & Type\ControlInvoiceXMLResponse
     * @throws SoapException
     */
    public function controlInvoiceXML(\SmartDonusum\EArchive\Type\ControlInvoiceXML $parameters): \SmartDonusum\EArchive\Type\ControlInvoiceXMLResponse
    {
        $response = ($this->caller)('controlInvoiceXML', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\ControlInvoiceXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetEmailSent $parameters
     * @return ResultInterface & Type\SetEmailSentResponse
     * @throws SoapException
     */
    public function setEmailSent(\SmartDonusum\EArchive\Type\SetEmailSent $parameters): \SmartDonusum\EArchive\Type\SetEmailSentResponse
    {
        $response = ($this->caller)('setEmailSent', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SetEmailSentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditCount $parameters
     * @return ResultInterface & Type\GetCustomerCreditCountResponse
     * @throws SoapException
     */
    public function getCustomerCreditCount(\SmartDonusum\EArchive\Type\GetCustomerCreditCount $parameters): \SmartDonusum\EArchive\Type\GetCustomerCreditCountResponse
    {
        $response = ($this->caller)('getCustomerCreditCount', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetCustomerCreditCountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditSpace $parameters
     * @return ResultInterface & Type\GetCustomerCreditSpaceResponse
     * @throws SoapException
     */
    public function getCustomerCreditSpace(\SmartDonusum\EArchive\Type\GetCustomerCreditSpace $parameters): \SmartDonusum\EArchive\Type\GetCustomerCreditSpaceResponse
    {
        $response = ($this->caller)('getCustomerCreditSpace', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetCustomerCreditSpaceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\IsEFaturaUser $parameters
     * @return ResultInterface & Type\IsEFaturaUserResponse
     * @throws SoapException
     */
    public function isEFaturaUser(\SmartDonusum\EArchive\Type\IsEFaturaUser $parameters): \SmartDonusum\EArchive\Type\IsEFaturaUserResponse
    {
        $response = ($this->caller)('isEFaturaUser', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\IsEFaturaUserResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDocumentFlag $parameters
     * @return ResultInterface & Type\SetDocumentFlagResponse
     * @throws SoapException
     */
    public function setDocumentFlag(\SmartDonusum\EArchive\Type\SetDocumentFlag $parameters): \SmartDonusum\EArchive\Type\SetDocumentFlagResponse
    {
        $response = ($this->caller)('setDocumentFlag', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SetDocumentFlagResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCreditActionsforCustomer $parameters
     * @return ResultInterface & Type\GetCreditActionsforCustomerResponse
     * @throws SoapException
     */
    public function getCreditActionsforCustomer(\SmartDonusum\EArchive\Type\GetCreditActionsforCustomer $parameters): \SmartDonusum\EArchive\Type\GetCreditActionsforCustomerResponse
    {
        $response = ($this->caller)('getCreditActionsforCustomer', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetCreditActionsforCustomerResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPrefixList $parameters
     * @return ResultInterface & Type\GetPrefixListResponse
     * @throws SoapException
     */
    public function getPrefixList(\SmartDonusum\EArchive\Type\GetPrefixList $parameters): \SmartDonusum\EArchive\Type\GetPrefixListResponse
    {
        $response = ($this->caller)('getPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetNewUUID $parameters
     * @return ResultInterface & Type\GetNewUUIDResponse
     * @throws SoapException
     */
    public function getNewUUID(\SmartDonusum\EArchive\Type\GetNewUUID $parameters): \SmartDonusum\EArchive\Type\GetNewUUIDResponse
    {
        $response = ($this->caller)('getNewUUID', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetNewUUIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetXsltList $parameters
     * @return ResultInterface & Type\GetXsltListResponse
     * @throws SoapException
     */
    public function getXsltList(\SmartDonusum\EArchive\Type\GetXsltList $parameters): \SmartDonusum\EArchive\Type\GetXsltListResponse
    {
        $response = ($this->caller)('GetXsltList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetXsltListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEAInvoiceStatusWithLogs $parameters
     * @return ResultInterface & Type\GetEAInvoiceStatusWithLogsResponse
     * @throws SoapException
     */
    public function getEAInvoiceStatusWithLogs(\SmartDonusum\EArchive\Type\GetEAInvoiceStatusWithLogs $parameters): \SmartDonusum\EArchive\Type\GetEAInvoiceStatusWithLogsResponse
    {
        $response = ($this->caller)('GetEAInvoiceStatusWithLogs', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetEAInvoiceStatusWithLogsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ResendNotification $parameters
     * @return ResultInterface & Type\ResendNotificationResponse
     * @throws SoapException
     */
    public function resendNotification(\SmartDonusum\EArchive\Type\ResendNotification $parameters): \SmartDonusum\EArchive\Type\ResendNotificationResponse
    {
        $response = ($this->caller)('ResendNotification', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\ResendNotificationResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadXslt $parameters
     * @return ResultInterface & Type\UploadXsltResponse
     * @throws SoapException
     */
    public function uploadXslt(\SmartDonusum\EArchive\Type\UploadXslt $parameters): \SmartDonusum\EArchive\Type\UploadXsltResponse
    {
        $response = ($this->caller)('UploadXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\UploadXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteXslt $parameters
     * @return ResultInterface & Type\DeleteXsltResponse
     * @throws SoapException
     */
    public function deleteXslt(\SmartDonusum\EArchive\Type\DeleteXslt $parameters): \SmartDonusum\EArchive\Type\DeleteXsltResponse
    {
        $response = ($this->caller)('DeleteXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\DeleteXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateXslt $parameters
     * @return ResultInterface & Type\UpdateXsltResponse
     * @throws SoapException
     */
    public function updateXslt(\SmartDonusum\EArchive\Type\UpdateXslt $parameters): \SmartDonusum\EArchive\Type\UpdateXsltResponse
    {
        $response = ($this->caller)('UpdateXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\UpdateXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDraftDocumentPreview $parameters
     * @return ResultInterface & Type\GetDraftDocumentPreviewResponse
     * @throws SoapException
     */
    public function getDraftDocumentPreview(\SmartDonusum\EArchive\Type\GetDraftDocumentPreview $parameters): \SmartDonusum\EArchive\Type\GetDraftDocumentPreviewResponse
    {
        $response = ($this->caller)('GetDraftDocumentPreview', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\GetDraftDocumentPreviewResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddPrefixList $parameters
     * @return ResultInterface & Type\AddPrefixListResponse
     * @throws SoapException
     */
    public function addPrefixList(\SmartDonusum\EArchive\Type\AddPrefixList $parameters): \SmartDonusum\EArchive\Type\AddPrefixListResponse
    {
        $response = ($this->caller)('addPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\AddPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetPrefixStatusList $parameters
     * @return ResultInterface & Type\SetPrefixStatusListResponse
     * @throws SoapException
     */
    public function setPrefixStatusList(\SmartDonusum\EArchive\Type\SetPrefixStatusList $parameters): \SmartDonusum\EArchive\Type\SetPrefixStatusListResponse
    {
        $response = ($this->caller)('setPrefixStatusList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SetPrefixStatusListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDefaultXslt $parameters
     * @return ResultInterface & Type\SetDefaultXsltResponse
     * @throws SoapException
     */
    public function setDefaultXslt(\SmartDonusum\EArchive\Type\SetDefaultXslt $parameters): \SmartDonusum\EArchive\Type\SetDefaultXsltResponse
    {
        $response = ($this->caller)('SetDefaultXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EArchive\Type\SetDefaultXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

