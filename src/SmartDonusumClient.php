<?php

namespace SmartDonusum;

use Phpro\SoapClient\Caller\Caller;
use SmartDonusum\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class SmartDonusumClient
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
    public function sendInvoice(\SmartDonusum\Type\SendInvoice $parameters): \SmartDonusum\Type\SendInvoiceResponse
    {
        $response = ($this->caller)('sendInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadInvoiceList $parameters
     * @return ResultInterface & Type\UploadInvoiceListResponse
     * @throws SoapException
     */
    public function uploadInvoiceList(\SmartDonusum\Type\UploadInvoiceList $parameters): \SmartDonusum\Type\UploadInvoiceListResponse
    {
        $response = ($this->caller)('uploadInvoiceList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\UploadInvoiceListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDocumentFlag $parameters
     * @return ResultInterface & Type\SetDocumentFlagResponse
     * @throws SoapException
     */
    public function setDocumentFlag(\SmartDonusum\Type\SetDocumentFlag $parameters): \SmartDonusum\Type\SetDocumentFlagResponse
    {
        $response = ($this->caller)('setDocumentFlag', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SetDocumentFlagResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCreditActionsforCustomer $parameters
     * @return ResultInterface & Type\GetCreditActionsforCustomerResponse
     * @throws SoapException
     */
    public function getCreditActionsforCustomer(\SmartDonusum\Type\GetCreditActionsforCustomer $parameters): \SmartDonusum\Type\GetCreditActionsforCustomerResponse
    {
        $response = ($this->caller)('getCreditActionsforCustomer', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetCreditActionsforCustomerResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPrefixList $parameters
     * @return ResultInterface & Type\GetPrefixListResponse
     * @throws SoapException
     */
    public function getPrefixList(\SmartDonusum\Type\GetPrefixList $parameters): \SmartDonusum\Type\GetPrefixListResponse
    {
        $response = ($this->caller)('getPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendSignedInvoice $parameters
     * @return ResultInterface & Type\SendSignedInvoiceResponse
     * @throws SoapException
     */
    public function sendSignedInvoice(\SmartDonusum\Type\SendSignedInvoice $parameters): \SmartDonusum\Type\SendSignedInvoiceResponse
    {
        $response = ($this->caller)('sendSignedInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendSignedInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendInvoiceWithoutDocumentId $parameters
     * @return ResultInterface & Type\SendInvoiceWithoutDocumentIdResponse
     * @throws SoapException
     */
    public function sendInvoiceWithoutDocumentId(\SmartDonusum\Type\SendInvoiceWithoutDocumentId $parameters): \SmartDonusum\Type\SendInvoiceWithoutDocumentIdResponse
    {
        $response = ($this->caller)('sendInvoiceWithoutDocumentId', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendInvoiceWithoutDocumentIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateInvoice $parameters
     * @return ResultInterface & Type\UpdateInvoiceResponse
     * @throws SoapException
     */
    public function updateInvoice(\SmartDonusum\Type\UpdateInvoice $parameters): \SmartDonusum\Type\UpdateInvoiceResponse
    {
        $response = ($this->caller)('updateInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\UpdateInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendApplicationResponse $parameters
     * @return ResultInterface & Type\SendApplicationResponseResponse
     * @throws SoapException
     */
    public function sendApplicationResponse(\SmartDonusum\Type\SendApplicationResponse $parameters): \SmartDonusum\Type\SendApplicationResponseResponse
    {
        $response = ($this->caller)('sendApplicationResponse', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendApplicationResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ControlInvoiceXML $parameters
     * @return ResultInterface & Type\ControlInvoiceXMLResponse
     * @throws SoapException
     */
    public function controlInvoiceXML(\SmartDonusum\Type\ControlInvoiceXML $parameters): \SmartDonusum\Type\ControlInvoiceXMLResponse
    {
        $response = ($this->caller)('controlInvoiceXML', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\ControlInvoiceXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ControlApplicationResponseXML $parameters
     * @return ResultInterface & Type\ControlApplicationResponseXMLResponse
     * @throws SoapException
     */
    public function controlApplicationResponseXML(\SmartDonusum\Type\ControlApplicationResponseXML $parameters): \SmartDonusum\Type\ControlApplicationResponseXMLResponse
    {
        $response = ($this->caller)('controlApplicationResponseXML', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\ControlApplicationResponseXMLResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerGBList $parameters
     * @return ResultInterface & Type\GetCustomerGBListResponse
     * @throws SoapException
     */
    public function getCustomerGBList(\SmartDonusum\Type\GetCustomerGBList $parameters): \SmartDonusum\Type\GetCustomerGBListResponse
    {
        $response = ($this->caller)('getCustomerGBList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetCustomerGBListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerPKList $parameters
     * @return ResultInterface & Type\GetCustomerPKListResponse
     * @throws SoapException
     */
    public function getCustomerPKList(\SmartDonusum\Type\GetCustomerPKList $parameters): \SmartDonusum\Type\GetCustomerPKListResponse
    {
        $response = ($this->caller)('getCustomerPKList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetCustomerPKListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CancelInvoice $parameters
     * @return ResultInterface & Type\CancelInvoiceResponse
     * @throws SoapException
     */
    public function cancelInvoice(\SmartDonusum\Type\CancelInvoice $parameters): \SmartDonusum\Type\CancelInvoiceResponse
    {
        $response = ($this->caller)('cancelInvoice', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\CancelInvoiceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditCount $parameters
     * @return ResultInterface & Type\GetCustomerCreditCountResponse
     * @throws SoapException
     */
    public function getCustomerCreditCount(\SmartDonusum\Type\GetCustomerCreditCount $parameters): \SmartDonusum\Type\GetCustomerCreditCountResponse
    {
        $response = ($this->caller)('getCustomerCreditCount', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetCustomerCreditCountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCustomerCreditSpace $parameters
     * @return ResultInterface & Type\GetCustomerCreditSpaceResponse
     * @throws SoapException
     */
    public function getCustomerCreditSpace(\SmartDonusum\Type\GetCustomerCreditSpace $parameters): \SmartDonusum\Type\GetCustomerCreditSpaceResponse
    {
        $response = ($this->caller)('getCustomerCreditSpace', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetCustomerCreditSpaceResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetUserAliases $parameters
     * @return ResultInterface & Type\GetUserAliasesResponse
     * @throws SoapException
     */
    public function getUserAliases(\SmartDonusum\Type\GetUserAliases $parameters): \SmartDonusum\Type\GetUserAliasesResponse
    {
        $response = ($this->caller)('getUserAliases', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetUserAliasesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendAppResponse $parameters
     * @return ResultInterface & Type\SendAppResponseResponse
     * @throws SoapException
     */
    public function sendAppResponse(\SmartDonusum\Type\SendAppResponse $parameters): \SmartDonusum\Type\SendAppResponseResponse
    {
        $response = ($this->caller)('sendAppResponse', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendAppResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendAppResponseList $parameters
     * @return ResultInterface & Type\SendAppResponseListResponse
     * @throws SoapException
     */
    public function sendAppResponseList(\SmartDonusum\Type\SendAppResponseList $parameters): \SmartDonusum\Type\SendAppResponseListResponse
    {
        $response = ($this->caller)('sendAppResponseList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SendAppResponseListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetNewUUID $parameters
     * @return ResultInterface & Type\GetNewUUIDResponse
     * @throws SoapException
     */
    public function getNewUUID(\SmartDonusum\Type\GetNewUUID $parameters): \SmartDonusum\Type\GetNewUUIDResponse
    {
        $response = ($this->caller)('getNewUUID', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetNewUUIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetXsltList $parameters
     * @return ResultInterface & Type\GetXsltListResponse
     * @throws SoapException
     */
    public function getXsltList(\SmartDonusum\Type\GetXsltList $parameters): \SmartDonusum\Type\GetXsltListResponse
    {
        $response = ($this->caller)('GetXsltList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetXsltListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UploadXslt $parameters
     * @return ResultInterface & Type\UploadXsltResponse
     * @throws SoapException
     */
    public function uploadXslt(\SmartDonusum\Type\UploadXslt $parameters): \SmartDonusum\Type\UploadXsltResponse
    {
        $response = ($this->caller)('UploadXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\UploadXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\DeleteXslt $parameters
     * @return ResultInterface & Type\DeleteXsltResponse
     * @throws SoapException
     */
    public function deleteXslt(\SmartDonusum\Type\DeleteXslt $parameters): \SmartDonusum\Type\DeleteXsltResponse
    {
        $response = ($this->caller)('DeleteXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\DeleteXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetDraftDocumentPreview $parameters
     * @return ResultInterface & Type\GetDraftDocumentPreviewResponse
     * @throws SoapException
     */
    public function getDraftDocumentPreview(\SmartDonusum\Type\GetDraftDocumentPreview $parameters): \SmartDonusum\Type\GetDraftDocumentPreviewResponse
    {
        $response = ($this->caller)('GetDraftDocumentPreview', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetDraftDocumentPreviewResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UpdateXslt $parameters
     * @return ResultInterface & Type\UpdateXsltResponse
     * @throws SoapException
     */
    public function updateXslt(\SmartDonusum\Type\UpdateXslt $parameters): \SmartDonusum\Type\UpdateXsltResponse
    {
        $response = ($this->caller)('UpdateXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\UpdateXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SaveToTaslak $parameters
     * @return ResultInterface & Type\SaveToTaslakResponse
     * @throws SoapException
     */
    public function saveToTaslak(\SmartDonusum\Type\SaveToTaslak $parameters): \SmartDonusum\Type\SaveToTaslakResponse
    {
        $response = ($this->caller)('saveToTaslak', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SaveToTaslakResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetOutboxInvoiceStatusWithLogs $parameters
     * @return ResultInterface & Type\GetOutboxInvoiceStatusWithLogsResponse
     * @throws SoapException
     */
    public function getOutboxInvoiceStatusWithLogs(\SmartDonusum\Type\GetOutboxInvoiceStatusWithLogs $parameters): \SmartDonusum\Type\GetOutboxInvoiceStatusWithLogsResponse
    {
        $response = ($this->caller)('GetOutboxInvoiceStatusWithLogs', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\GetOutboxInvoiceStatusWithLogsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddPrefixList $parameters
     * @return ResultInterface & Type\AddPrefixListResponse
     * @throws SoapException
     */
    public function addPrefixList(\SmartDonusum\Type\AddPrefixList $parameters): \SmartDonusum\Type\AddPrefixListResponse
    {
        $response = ($this->caller)('addPrefixList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\AddPrefixListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetPrefixStatusList $parameters
     * @return ResultInterface & Type\SetPrefixStatusListResponse
     * @throws SoapException
     */
    public function setPrefixStatusList(\SmartDonusum\Type\SetPrefixStatusList $parameters): \SmartDonusum\Type\SetPrefixStatusListResponse
    {
        $response = ($this->caller)('setPrefixStatusList', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SetPrefixStatusListResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SetDefaultXslt $parameters
     * @return ResultInterface & Type\SetDefaultXsltResponse
     * @throws SoapException
     */
    public function setDefaultXslt(\SmartDonusum\Type\SetDefaultXslt $parameters): \SmartDonusum\Type\SetDefaultXsltResponse
    {
        $response = ($this->caller)('SetDefaultXslt', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\SetDefaultXsltResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ResendDocument $parameters
     * @return ResultInterface & Type\ResendDocumentResponse
     * @throws SoapException
     */
    public function resendDocument(\SmartDonusum\Type\ResendDocument $parameters): \SmartDonusum\Type\ResendDocumentResponse
    {
        $response = ($this->caller)('ResendDocument', $parameters);

        \Psl\Type\instance_of(\SmartDonusum\Type\ResendDocumentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

