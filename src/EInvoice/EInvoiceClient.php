<?php

namespace SmartDonusum\EInvoice;

use Phpro\SoapClient\Caller\Caller;
use SmartDonusum\EInvoice\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class EInvoiceClient
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
    public function sendInvoice(\SmartDonusum\EInvoice\Type\SendInvoice $parameters): \SmartDonusum\EInvoice\Type\SendInvoiceResponse
    {
        $response = ($this->caller)('sendInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadInvoiceList $parameters
     * @return ResultInterface & Type\UploadInvoiceListResponse
     * @throws SoapException
     */
    public function uploadInvoiceList(\SmartDonusum\EInvoice\Type\UploadInvoiceList $parameters): \SmartDonusum\EInvoice\Type\UploadInvoiceListResponse
    {
        $response = ($this->caller)('uploadInvoiceList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\UploadInvoiceListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDocumentFlag $parameters
     * @return ResultInterface & Type\SetDocumentFlagResponse
     * @throws SoapException
     */
    public function setDocumentFlag(\SmartDonusum\EInvoice\Type\SetDocumentFlag $parameters): \SmartDonusum\EInvoice\Type\SetDocumentFlagResponse
    {
        $response = ($this->caller)('setDocumentFlag', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SetDocumentFlagResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCreditActionsforCustomer $parameters
     * @return ResultInterface & Type\GetCreditActionsforCustomerResponse
     * @throws SoapException
     */
    public function getCreditActionsforCustomer(\SmartDonusum\EInvoice\Type\GetCreditActionsforCustomer $parameters): \SmartDonusum\EInvoice\Type\GetCreditActionsforCustomerResponse
    {
        $response = ($this->caller)('getCreditActionsforCustomer', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetCreditActionsforCustomerResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPrefixList $parameters
     * @return ResultInterface & Type\GetPrefixListResponse
     * @throws SoapException
     */
    public function getPrefixList(\SmartDonusum\EInvoice\Type\GetPrefixList $parameters): \SmartDonusum\EInvoice\Type\GetPrefixListResponse
    {
        $response = ($this->caller)('getPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendSignedInvoice $parameters
     * @return ResultInterface & Type\SendSignedInvoiceResponse
     * @throws SoapException
     */
    public function sendSignedInvoice(\SmartDonusum\EInvoice\Type\SendSignedInvoice $parameters): \SmartDonusum\EInvoice\Type\SendSignedInvoiceResponse
    {
        $response = ($this->caller)('sendSignedInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendSignedInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendInvoiceWithoutDocumentId $parameters
     * @return ResultInterface & Type\SendInvoiceWithoutDocumentIdResponse
     * @throws SoapException
     */
    public function sendInvoiceWithoutDocumentId(\SmartDonusum\EInvoice\Type\SendInvoiceWithoutDocumentId $parameters): \SmartDonusum\EInvoice\Type\SendInvoiceWithoutDocumentIdResponse
    {
        $response = ($this->caller)('sendInvoiceWithoutDocumentId', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendInvoiceWithoutDocumentIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateInvoice $parameters
     * @return ResultInterface & Type\UpdateInvoiceResponse
     * @throws SoapException
     */
    public function updateInvoice(\SmartDonusum\EInvoice\Type\UpdateInvoice $parameters): \SmartDonusum\EInvoice\Type\UpdateInvoiceResponse
    {
        $response = ($this->caller)('updateInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\UpdateInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendApplicationResponse $parameters
     * @return ResultInterface & Type\SendApplicationResponseResponse
     * @throws SoapException
     */
    public function sendApplicationResponse(\SmartDonusum\EInvoice\Type\SendApplicationResponse $parameters): \SmartDonusum\EInvoice\Type\SendApplicationResponseResponse
    {
        $response = ($this->caller)('sendApplicationResponse', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendApplicationResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ControlInvoiceXML $parameters
     * @return ResultInterface & Type\ControlInvoiceXMLResponse
     * @throws SoapException
     */
    public function controlInvoiceXML(\SmartDonusum\EInvoice\Type\ControlInvoiceXML $parameters): \SmartDonusum\EInvoice\Type\ControlInvoiceXMLResponse
    {
        $response = ($this->caller)('controlInvoiceXML', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\ControlInvoiceXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ControlApplicationResponseXML $parameters
     * @return ResultInterface & Type\ControlApplicationResponseXMLResponse
     * @throws SoapException
     */
    public function controlApplicationResponseXML(\SmartDonusum\EInvoice\Type\ControlApplicationResponseXML $parameters): \SmartDonusum\EInvoice\Type\ControlApplicationResponseXMLResponse
    {
        $response = ($this->caller)('controlApplicationResponseXML', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\ControlApplicationResponseXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerGBList $parameters
     * @return ResultInterface & Type\GetCustomerGBListResponse
     * @throws SoapException
     */
    public function getCustomerGBList(\SmartDonusum\EInvoice\Type\GetCustomerGBList $parameters): \SmartDonusum\EInvoice\Type\GetCustomerGBListResponse
    {
        $response = ($this->caller)('getCustomerGBList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetCustomerGBListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerPKList $parameters
     * @return ResultInterface & Type\GetCustomerPKListResponse
     * @throws SoapException
     */
    public function getCustomerPKList(\SmartDonusum\EInvoice\Type\GetCustomerPKList $parameters): \SmartDonusum\EInvoice\Type\GetCustomerPKListResponse
    {
        $response = ($this->caller)('getCustomerPKList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetCustomerPKListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CancelInvoice $parameters
     * @return ResultInterface & Type\CancelInvoiceResponse
     * @throws SoapException
     */
    public function cancelInvoice(\SmartDonusum\EInvoice\Type\CancelInvoice $parameters): \SmartDonusum\EInvoice\Type\CancelInvoiceResponse
    {
        $response = ($this->caller)('cancelInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\CancelInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditCount $parameters
     * @return ResultInterface & Type\GetCustomerCreditCountResponse
     * @throws SoapException
     */
    public function getCustomerCreditCount(\SmartDonusum\EInvoice\Type\GetCustomerCreditCount $parameters): \SmartDonusum\EInvoice\Type\GetCustomerCreditCountResponse
    {
        $response = ($this->caller)('getCustomerCreditCount', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetCustomerCreditCountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditSpace $parameters
     * @return ResultInterface & Type\GetCustomerCreditSpaceResponse
     * @throws SoapException
     */
    public function getCustomerCreditSpace(\SmartDonusum\EInvoice\Type\GetCustomerCreditSpace $parameters): \SmartDonusum\EInvoice\Type\GetCustomerCreditSpaceResponse
    {
        $response = ($this->caller)('getCustomerCreditSpace', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetCustomerCreditSpaceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserAliases $parameters
     * @return ResultInterface & Type\GetUserAliasesResponse
     * @throws SoapException
     */
    public function getUserAliases(\SmartDonusum\EInvoice\Type\GetUserAliases $parameters): \SmartDonusum\EInvoice\Type\GetUserAliasesResponse
    {
        $response = ($this->caller)('getUserAliases', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetUserAliasesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendAppResponse $parameters
     * @return ResultInterface & Type\SendAppResponseResponse
     * @throws SoapException
     */
    public function sendAppResponse(\SmartDonusum\EInvoice\Type\SendAppResponse $parameters): \SmartDonusum\EInvoice\Type\SendAppResponseResponse
    {
        $response = ($this->caller)('sendAppResponse', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendAppResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendAppResponseList $parameters
     * @return ResultInterface & Type\SendAppResponseListResponse
     * @throws SoapException
     */
    public function sendAppResponseList(\SmartDonusum\EInvoice\Type\SendAppResponseList $parameters): \SmartDonusum\EInvoice\Type\SendAppResponseListResponse
    {
        $response = ($this->caller)('sendAppResponseList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SendAppResponseListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetNewUUID $parameters
     * @return ResultInterface & Type\GetNewUUIDResponse
     * @throws SoapException
     */
    public function getNewUUID(\SmartDonusum\EInvoice\Type\GetNewUUID $parameters): \SmartDonusum\EInvoice\Type\GetNewUUIDResponse
    {
        $response = ($this->caller)('getNewUUID', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetNewUUIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetXsltList $parameters
     * @return ResultInterface & Type\GetXsltListResponse
     * @throws SoapException
     */
    public function getXsltList(\SmartDonusum\EInvoice\Type\GetXsltList $parameters): \SmartDonusum\EInvoice\Type\GetXsltListResponse
    {
        $response = ($this->caller)('GetXsltList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetXsltListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadXslt $parameters
     * @return ResultInterface & Type\UploadXsltResponse
     * @throws SoapException
     */
    public function uploadXslt(\SmartDonusum\EInvoice\Type\UploadXslt $parameters): \SmartDonusum\EInvoice\Type\UploadXsltResponse
    {
        $response = ($this->caller)('UploadXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\UploadXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteXslt $parameters
     * @return ResultInterface & Type\DeleteXsltResponse
     * @throws SoapException
     */
    public function deleteXslt(\SmartDonusum\EInvoice\Type\DeleteXslt $parameters): \SmartDonusum\EInvoice\Type\DeleteXsltResponse
    {
        $response = ($this->caller)('DeleteXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\DeleteXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDraftDocumentPreview $parameters
     * @return ResultInterface & Type\GetDraftDocumentPreviewResponse
     * @throws SoapException
     */
    public function getDraftDocumentPreview(\SmartDonusum\EInvoice\Type\GetDraftDocumentPreview $parameters): \SmartDonusum\EInvoice\Type\GetDraftDocumentPreviewResponse
    {
        $response = ($this->caller)('GetDraftDocumentPreview', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetDraftDocumentPreviewResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateXslt $parameters
     * @return ResultInterface & Type\UpdateXsltResponse
     * @throws SoapException
     */
    public function updateXslt(\SmartDonusum\EInvoice\Type\UpdateXslt $parameters): \SmartDonusum\EInvoice\Type\UpdateXsltResponse
    {
        $response = ($this->caller)('UpdateXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\UpdateXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SaveToTaslak $parameters
     * @return ResultInterface & Type\SaveToTaslakResponse
     * @throws SoapException
     */
    public function saveToTaslak(\SmartDonusum\EInvoice\Type\SaveToTaslak $parameters): \SmartDonusum\EInvoice\Type\SaveToTaslakResponse
    {
        $response = ($this->caller)('saveToTaslak', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SaveToTaslakResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetOutboxInvoiceStatusWithLogs $parameters
     * @return ResultInterface & Type\GetOutboxInvoiceStatusWithLogsResponse
     * @throws SoapException
     */
    public function getOutboxInvoiceStatusWithLogs(\SmartDonusum\EInvoice\Type\GetOutboxInvoiceStatusWithLogs $parameters): \SmartDonusum\EInvoice\Type\GetOutboxInvoiceStatusWithLogsResponse
    {
        $response = ($this->caller)('GetOutboxInvoiceStatusWithLogs', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\GetOutboxInvoiceStatusWithLogsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddPrefixList $parameters
     * @return ResultInterface & Type\AddPrefixListResponse
     * @throws SoapException
     */
    public function addPrefixList(\SmartDonusum\EInvoice\Type\AddPrefixList $parameters): \SmartDonusum\EInvoice\Type\AddPrefixListResponse
    {
        $response = ($this->caller)('addPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\AddPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetPrefixStatusList $parameters
     * @return ResultInterface & Type\SetPrefixStatusListResponse
     * @throws SoapException
     */
    public function setPrefixStatusList(\SmartDonusum\EInvoice\Type\SetPrefixStatusList $parameters): \SmartDonusum\EInvoice\Type\SetPrefixStatusListResponse
    {
        $response = ($this->caller)('setPrefixStatusList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SetPrefixStatusListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDefaultXslt $parameters
     * @return ResultInterface & Type\SetDefaultXsltResponse
     * @throws SoapException
     */
    public function setDefaultXslt(\SmartDonusum\EInvoice\Type\SetDefaultXslt $parameters): \SmartDonusum\EInvoice\Type\SetDefaultXsltResponse
    {
        $response = ($this->caller)('SetDefaultXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\SetDefaultXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ResendDocument $parameters
     * @return ResultInterface & Type\ResendDocumentResponse
     * @throws SoapException
     */
    public function resendDocument(\SmartDonusum\EInvoice\Type\ResendDocument $parameters): \SmartDonusum\EInvoice\Type\ResendDocumentResponse
    {
        $response = ($this->caller)('ResendDocument', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\EInvoice\Type\ResendDocumentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

