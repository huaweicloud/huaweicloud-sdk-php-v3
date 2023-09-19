<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AcceptanceBillResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AcceptanceBillResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueDate  出票日期。
    * dueDate  汇票到期日。
    * billStatus  票据状态。
    * billNumber  票据号码。
    * issuerFullName  出票人全称。
    * issuerAccount  出票人账号。
    * issuerBankName  出票人开户银行。
    * issuerBankNumber  出票人开户行号。
    * payeeFullName  收款人全称。
    * payeeAccount  收款人账号。
    * payeeBankName  收款人开户银行。
    * payeeBankNumber  收款人开户行号。
    * issuanceGuarantorName  出票保证人名称。
    * issuanceGuarantorAddress  出票保证人地址。
    * issuanceGuarantorAccount  出票保证人账号。
    * issuanceGuaranteeDate  出票保证日期。
    * issuanceGuarantorBankNumber  出票保证人开户行行号。
    * issuanceGuarantorBankName  出票保证人开户行名称。
    * amountInWords  大写票据金额。
    * amountInFigures  小写票据金额。
    * acceptorFullName  承兑人全称。
    * acceptorAccount  承兑人账号。
    * acceptorBankNumber  承兑人开户行行号。
    * acceptorBankName  承兑人开户行名称。
    * contractNumber  交易合同号。
    * assignability  能否转让。
    * issuerCommitment  出票人承诺。
    * acceptorCommitment  承兑人承诺。
    * acceptanceDate  承兑日期。
    * acceptanceGuarantorName  承兑保证人名称。
    * acceptanceGuarantorAddress  承兑保证人地址。
    * acceptanceGuarantorAccount  承兑保证人账号。
    * acceptanceGuaranteeDate  承兑保证日期。
    * acceptanceGuarantorBankNumber  承兑保证人开户行行号。
    * acceptanceGuarantorBankName  承兑保证人开户行名称。
    * issuerRatingEntity  出票人评级主体。
    * issuerCreditRating  出票人信用等级。
    * issuerRatingDueDate  出票人评级到期日。
    * acceptorRatingEntity  承兑人评级主体。
    * acceptorCreditRating  承兑人信用等级。
    * acceptorRatingDueDate  承兑人评级到期日。
    * billPackageNumber  票据包号。
    * remarks  备注。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueDate' => 'string',
            'dueDate' => 'string',
            'billStatus' => 'string',
            'billNumber' => 'string',
            'issuerFullName' => 'string',
            'issuerAccount' => 'string',
            'issuerBankName' => 'string',
            'issuerBankNumber' => 'string',
            'payeeFullName' => 'string',
            'payeeAccount' => 'string',
            'payeeBankName' => 'string',
            'payeeBankNumber' => 'string',
            'issuanceGuarantorName' => 'string',
            'issuanceGuarantorAddress' => 'string',
            'issuanceGuarantorAccount' => 'string',
            'issuanceGuaranteeDate' => 'string',
            'issuanceGuarantorBankNumber' => 'string',
            'issuanceGuarantorBankName' => 'string',
            'amountInWords' => 'string',
            'amountInFigures' => 'string',
            'acceptorFullName' => 'string',
            'acceptorAccount' => 'string',
            'acceptorBankNumber' => 'string',
            'acceptorBankName' => 'string',
            'contractNumber' => 'string',
            'assignability' => 'string',
            'issuerCommitment' => 'string',
            'acceptorCommitment' => 'string',
            'acceptanceDate' => 'string',
            'acceptanceGuarantorName' => 'string',
            'acceptanceGuarantorAddress' => 'string',
            'acceptanceGuarantorAccount' => 'string',
            'acceptanceGuaranteeDate' => 'string',
            'acceptanceGuarantorBankNumber' => 'string',
            'acceptanceGuarantorBankName' => 'string',
            'issuerRatingEntity' => 'string',
            'issuerCreditRating' => 'string',
            'issuerRatingDueDate' => 'string',
            'acceptorRatingEntity' => 'string',
            'acceptorCreditRating' => 'string',
            'acceptorRatingDueDate' => 'string',
            'billPackageNumber' => 'string',
            'remarks' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueDate  出票日期。
    * dueDate  汇票到期日。
    * billStatus  票据状态。
    * billNumber  票据号码。
    * issuerFullName  出票人全称。
    * issuerAccount  出票人账号。
    * issuerBankName  出票人开户银行。
    * issuerBankNumber  出票人开户行号。
    * payeeFullName  收款人全称。
    * payeeAccount  收款人账号。
    * payeeBankName  收款人开户银行。
    * payeeBankNumber  收款人开户行号。
    * issuanceGuarantorName  出票保证人名称。
    * issuanceGuarantorAddress  出票保证人地址。
    * issuanceGuarantorAccount  出票保证人账号。
    * issuanceGuaranteeDate  出票保证日期。
    * issuanceGuarantorBankNumber  出票保证人开户行行号。
    * issuanceGuarantorBankName  出票保证人开户行名称。
    * amountInWords  大写票据金额。
    * amountInFigures  小写票据金额。
    * acceptorFullName  承兑人全称。
    * acceptorAccount  承兑人账号。
    * acceptorBankNumber  承兑人开户行行号。
    * acceptorBankName  承兑人开户行名称。
    * contractNumber  交易合同号。
    * assignability  能否转让。
    * issuerCommitment  出票人承诺。
    * acceptorCommitment  承兑人承诺。
    * acceptanceDate  承兑日期。
    * acceptanceGuarantorName  承兑保证人名称。
    * acceptanceGuarantorAddress  承兑保证人地址。
    * acceptanceGuarantorAccount  承兑保证人账号。
    * acceptanceGuaranteeDate  承兑保证日期。
    * acceptanceGuarantorBankNumber  承兑保证人开户行行号。
    * acceptanceGuarantorBankName  承兑保证人开户行名称。
    * issuerRatingEntity  出票人评级主体。
    * issuerCreditRating  出票人信用等级。
    * issuerRatingDueDate  出票人评级到期日。
    * acceptorRatingEntity  承兑人评级主体。
    * acceptorCreditRating  承兑人信用等级。
    * acceptorRatingDueDate  承兑人评级到期日。
    * billPackageNumber  票据包号。
    * remarks  备注。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueDate' => null,
        'dueDate' => null,
        'billStatus' => null,
        'billNumber' => null,
        'issuerFullName' => null,
        'issuerAccount' => null,
        'issuerBankName' => null,
        'issuerBankNumber' => null,
        'payeeFullName' => null,
        'payeeAccount' => null,
        'payeeBankName' => null,
        'payeeBankNumber' => null,
        'issuanceGuarantorName' => null,
        'issuanceGuarantorAddress' => null,
        'issuanceGuarantorAccount' => null,
        'issuanceGuaranteeDate' => null,
        'issuanceGuarantorBankNumber' => null,
        'issuanceGuarantorBankName' => null,
        'amountInWords' => null,
        'amountInFigures' => null,
        'acceptorFullName' => null,
        'acceptorAccount' => null,
        'acceptorBankNumber' => null,
        'acceptorBankName' => null,
        'contractNumber' => null,
        'assignability' => null,
        'issuerCommitment' => null,
        'acceptorCommitment' => null,
        'acceptanceDate' => null,
        'acceptanceGuarantorName' => null,
        'acceptanceGuarantorAddress' => null,
        'acceptanceGuarantorAccount' => null,
        'acceptanceGuaranteeDate' => null,
        'acceptanceGuarantorBankNumber' => null,
        'acceptanceGuarantorBankName' => null,
        'issuerRatingEntity' => null,
        'issuerCreditRating' => null,
        'issuerRatingDueDate' => null,
        'acceptorRatingEntity' => null,
        'acceptorCreditRating' => null,
        'acceptorRatingDueDate' => null,
        'billPackageNumber' => null,
        'remarks' => null,
        'confidence' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * issueDate  出票日期。
    * dueDate  汇票到期日。
    * billStatus  票据状态。
    * billNumber  票据号码。
    * issuerFullName  出票人全称。
    * issuerAccount  出票人账号。
    * issuerBankName  出票人开户银行。
    * issuerBankNumber  出票人开户行号。
    * payeeFullName  收款人全称。
    * payeeAccount  收款人账号。
    * payeeBankName  收款人开户银行。
    * payeeBankNumber  收款人开户行号。
    * issuanceGuarantorName  出票保证人名称。
    * issuanceGuarantorAddress  出票保证人地址。
    * issuanceGuarantorAccount  出票保证人账号。
    * issuanceGuaranteeDate  出票保证日期。
    * issuanceGuarantorBankNumber  出票保证人开户行行号。
    * issuanceGuarantorBankName  出票保证人开户行名称。
    * amountInWords  大写票据金额。
    * amountInFigures  小写票据金额。
    * acceptorFullName  承兑人全称。
    * acceptorAccount  承兑人账号。
    * acceptorBankNumber  承兑人开户行行号。
    * acceptorBankName  承兑人开户行名称。
    * contractNumber  交易合同号。
    * assignability  能否转让。
    * issuerCommitment  出票人承诺。
    * acceptorCommitment  承兑人承诺。
    * acceptanceDate  承兑日期。
    * acceptanceGuarantorName  承兑保证人名称。
    * acceptanceGuarantorAddress  承兑保证人地址。
    * acceptanceGuarantorAccount  承兑保证人账号。
    * acceptanceGuaranteeDate  承兑保证日期。
    * acceptanceGuarantorBankNumber  承兑保证人开户行行号。
    * acceptanceGuarantorBankName  承兑保证人开户行名称。
    * issuerRatingEntity  出票人评级主体。
    * issuerCreditRating  出票人信用等级。
    * issuerRatingDueDate  出票人评级到期日。
    * acceptorRatingEntity  承兑人评级主体。
    * acceptorCreditRating  承兑人信用等级。
    * acceptorRatingDueDate  承兑人评级到期日。
    * billPackageNumber  票据包号。
    * remarks  备注。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueDate' => 'issue_date',
            'dueDate' => 'due_date',
            'billStatus' => 'bill_status',
            'billNumber' => 'bill_number',
            'issuerFullName' => 'issuer_full_name',
            'issuerAccount' => 'issuer_account',
            'issuerBankName' => 'issuer_bank_name',
            'issuerBankNumber' => 'issuer_bank_number',
            'payeeFullName' => 'payee_full_name',
            'payeeAccount' => 'payee_account',
            'payeeBankName' => 'payee_bank_name',
            'payeeBankNumber' => 'payee_bank_number',
            'issuanceGuarantorName' => 'issuance_guarantor_name',
            'issuanceGuarantorAddress' => 'issuance_guarantor_address',
            'issuanceGuarantorAccount' => 'issuance_guarantor_account',
            'issuanceGuaranteeDate' => 'issuance_guarantee_date',
            'issuanceGuarantorBankNumber' => 'issuance_guarantor_bank_number',
            'issuanceGuarantorBankName' => 'issuance_guarantor_bank_name',
            'amountInWords' => 'amount_in_words',
            'amountInFigures' => 'amount_in_figures',
            'acceptorFullName' => 'acceptor_full_name',
            'acceptorAccount' => 'acceptor_account',
            'acceptorBankNumber' => 'acceptor_bank_number',
            'acceptorBankName' => 'acceptor_bank_name',
            'contractNumber' => 'contract_number',
            'assignability' => 'assignability',
            'issuerCommitment' => 'issuer_commitment',
            'acceptorCommitment' => 'acceptor_commitment',
            'acceptanceDate' => 'acceptance_date',
            'acceptanceGuarantorName' => 'acceptance_guarantor_name',
            'acceptanceGuarantorAddress' => 'acceptance_guarantor_address',
            'acceptanceGuarantorAccount' => 'acceptance_guarantor_account',
            'acceptanceGuaranteeDate' => 'acceptance_guarantee_date',
            'acceptanceGuarantorBankNumber' => 'acceptance_guarantor_bank_number',
            'acceptanceGuarantorBankName' => 'acceptance_guarantor_bank_name',
            'issuerRatingEntity' => 'issuer_rating_entity',
            'issuerCreditRating' => 'issuer_credit_rating',
            'issuerRatingDueDate' => 'issuer_rating_due_date',
            'acceptorRatingEntity' => 'acceptor_rating_entity',
            'acceptorCreditRating' => 'acceptor_credit_rating',
            'acceptorRatingDueDate' => 'acceptor_rating_due_date',
            'billPackageNumber' => 'bill_package_number',
            'remarks' => 'remarks',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueDate  出票日期。
    * dueDate  汇票到期日。
    * billStatus  票据状态。
    * billNumber  票据号码。
    * issuerFullName  出票人全称。
    * issuerAccount  出票人账号。
    * issuerBankName  出票人开户银行。
    * issuerBankNumber  出票人开户行号。
    * payeeFullName  收款人全称。
    * payeeAccount  收款人账号。
    * payeeBankName  收款人开户银行。
    * payeeBankNumber  收款人开户行号。
    * issuanceGuarantorName  出票保证人名称。
    * issuanceGuarantorAddress  出票保证人地址。
    * issuanceGuarantorAccount  出票保证人账号。
    * issuanceGuaranteeDate  出票保证日期。
    * issuanceGuarantorBankNumber  出票保证人开户行行号。
    * issuanceGuarantorBankName  出票保证人开户行名称。
    * amountInWords  大写票据金额。
    * amountInFigures  小写票据金额。
    * acceptorFullName  承兑人全称。
    * acceptorAccount  承兑人账号。
    * acceptorBankNumber  承兑人开户行行号。
    * acceptorBankName  承兑人开户行名称。
    * contractNumber  交易合同号。
    * assignability  能否转让。
    * issuerCommitment  出票人承诺。
    * acceptorCommitment  承兑人承诺。
    * acceptanceDate  承兑日期。
    * acceptanceGuarantorName  承兑保证人名称。
    * acceptanceGuarantorAddress  承兑保证人地址。
    * acceptanceGuarantorAccount  承兑保证人账号。
    * acceptanceGuaranteeDate  承兑保证日期。
    * acceptanceGuarantorBankNumber  承兑保证人开户行行号。
    * acceptanceGuarantorBankName  承兑保证人开户行名称。
    * issuerRatingEntity  出票人评级主体。
    * issuerCreditRating  出票人信用等级。
    * issuerRatingDueDate  出票人评级到期日。
    * acceptorRatingEntity  承兑人评级主体。
    * acceptorCreditRating  承兑人信用等级。
    * acceptorRatingDueDate  承兑人评级到期日。
    * billPackageNumber  票据包号。
    * remarks  备注。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'issueDate' => 'setIssueDate',
            'dueDate' => 'setDueDate',
            'billStatus' => 'setBillStatus',
            'billNumber' => 'setBillNumber',
            'issuerFullName' => 'setIssuerFullName',
            'issuerAccount' => 'setIssuerAccount',
            'issuerBankName' => 'setIssuerBankName',
            'issuerBankNumber' => 'setIssuerBankNumber',
            'payeeFullName' => 'setPayeeFullName',
            'payeeAccount' => 'setPayeeAccount',
            'payeeBankName' => 'setPayeeBankName',
            'payeeBankNumber' => 'setPayeeBankNumber',
            'issuanceGuarantorName' => 'setIssuanceGuarantorName',
            'issuanceGuarantorAddress' => 'setIssuanceGuarantorAddress',
            'issuanceGuarantorAccount' => 'setIssuanceGuarantorAccount',
            'issuanceGuaranteeDate' => 'setIssuanceGuaranteeDate',
            'issuanceGuarantorBankNumber' => 'setIssuanceGuarantorBankNumber',
            'issuanceGuarantorBankName' => 'setIssuanceGuarantorBankName',
            'amountInWords' => 'setAmountInWords',
            'amountInFigures' => 'setAmountInFigures',
            'acceptorFullName' => 'setAcceptorFullName',
            'acceptorAccount' => 'setAcceptorAccount',
            'acceptorBankNumber' => 'setAcceptorBankNumber',
            'acceptorBankName' => 'setAcceptorBankName',
            'contractNumber' => 'setContractNumber',
            'assignability' => 'setAssignability',
            'issuerCommitment' => 'setIssuerCommitment',
            'acceptorCommitment' => 'setAcceptorCommitment',
            'acceptanceDate' => 'setAcceptanceDate',
            'acceptanceGuarantorName' => 'setAcceptanceGuarantorName',
            'acceptanceGuarantorAddress' => 'setAcceptanceGuarantorAddress',
            'acceptanceGuarantorAccount' => 'setAcceptanceGuarantorAccount',
            'acceptanceGuaranteeDate' => 'setAcceptanceGuaranteeDate',
            'acceptanceGuarantorBankNumber' => 'setAcceptanceGuarantorBankNumber',
            'acceptanceGuarantorBankName' => 'setAcceptanceGuarantorBankName',
            'issuerRatingEntity' => 'setIssuerRatingEntity',
            'issuerCreditRating' => 'setIssuerCreditRating',
            'issuerRatingDueDate' => 'setIssuerRatingDueDate',
            'acceptorRatingEntity' => 'setAcceptorRatingEntity',
            'acceptorCreditRating' => 'setAcceptorCreditRating',
            'acceptorRatingDueDate' => 'setAcceptorRatingDueDate',
            'billPackageNumber' => 'setBillPackageNumber',
            'remarks' => 'setRemarks',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueDate  出票日期。
    * dueDate  汇票到期日。
    * billStatus  票据状态。
    * billNumber  票据号码。
    * issuerFullName  出票人全称。
    * issuerAccount  出票人账号。
    * issuerBankName  出票人开户银行。
    * issuerBankNumber  出票人开户行号。
    * payeeFullName  收款人全称。
    * payeeAccount  收款人账号。
    * payeeBankName  收款人开户银行。
    * payeeBankNumber  收款人开户行号。
    * issuanceGuarantorName  出票保证人名称。
    * issuanceGuarantorAddress  出票保证人地址。
    * issuanceGuarantorAccount  出票保证人账号。
    * issuanceGuaranteeDate  出票保证日期。
    * issuanceGuarantorBankNumber  出票保证人开户行行号。
    * issuanceGuarantorBankName  出票保证人开户行名称。
    * amountInWords  大写票据金额。
    * amountInFigures  小写票据金额。
    * acceptorFullName  承兑人全称。
    * acceptorAccount  承兑人账号。
    * acceptorBankNumber  承兑人开户行行号。
    * acceptorBankName  承兑人开户行名称。
    * contractNumber  交易合同号。
    * assignability  能否转让。
    * issuerCommitment  出票人承诺。
    * acceptorCommitment  承兑人承诺。
    * acceptanceDate  承兑日期。
    * acceptanceGuarantorName  承兑保证人名称。
    * acceptanceGuarantorAddress  承兑保证人地址。
    * acceptanceGuarantorAccount  承兑保证人账号。
    * acceptanceGuaranteeDate  承兑保证日期。
    * acceptanceGuarantorBankNumber  承兑保证人开户行行号。
    * acceptanceGuarantorBankName  承兑保证人开户行名称。
    * issuerRatingEntity  出票人评级主体。
    * issuerCreditRating  出票人信用等级。
    * issuerRatingDueDate  出票人评级到期日。
    * acceptorRatingEntity  承兑人评级主体。
    * acceptorCreditRating  承兑人信用等级。
    * acceptorRatingDueDate  承兑人评级到期日。
    * billPackageNumber  票据包号。
    * remarks  备注。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'issueDate' => 'getIssueDate',
            'dueDate' => 'getDueDate',
            'billStatus' => 'getBillStatus',
            'billNumber' => 'getBillNumber',
            'issuerFullName' => 'getIssuerFullName',
            'issuerAccount' => 'getIssuerAccount',
            'issuerBankName' => 'getIssuerBankName',
            'issuerBankNumber' => 'getIssuerBankNumber',
            'payeeFullName' => 'getPayeeFullName',
            'payeeAccount' => 'getPayeeAccount',
            'payeeBankName' => 'getPayeeBankName',
            'payeeBankNumber' => 'getPayeeBankNumber',
            'issuanceGuarantorName' => 'getIssuanceGuarantorName',
            'issuanceGuarantorAddress' => 'getIssuanceGuarantorAddress',
            'issuanceGuarantorAccount' => 'getIssuanceGuarantorAccount',
            'issuanceGuaranteeDate' => 'getIssuanceGuaranteeDate',
            'issuanceGuarantorBankNumber' => 'getIssuanceGuarantorBankNumber',
            'issuanceGuarantorBankName' => 'getIssuanceGuarantorBankName',
            'amountInWords' => 'getAmountInWords',
            'amountInFigures' => 'getAmountInFigures',
            'acceptorFullName' => 'getAcceptorFullName',
            'acceptorAccount' => 'getAcceptorAccount',
            'acceptorBankNumber' => 'getAcceptorBankNumber',
            'acceptorBankName' => 'getAcceptorBankName',
            'contractNumber' => 'getContractNumber',
            'assignability' => 'getAssignability',
            'issuerCommitment' => 'getIssuerCommitment',
            'acceptorCommitment' => 'getAcceptorCommitment',
            'acceptanceDate' => 'getAcceptanceDate',
            'acceptanceGuarantorName' => 'getAcceptanceGuarantorName',
            'acceptanceGuarantorAddress' => 'getAcceptanceGuarantorAddress',
            'acceptanceGuarantorAccount' => 'getAcceptanceGuarantorAccount',
            'acceptanceGuaranteeDate' => 'getAcceptanceGuaranteeDate',
            'acceptanceGuarantorBankNumber' => 'getAcceptanceGuarantorBankNumber',
            'acceptanceGuarantorBankName' => 'getAcceptanceGuarantorBankName',
            'issuerRatingEntity' => 'getIssuerRatingEntity',
            'issuerCreditRating' => 'getIssuerCreditRating',
            'issuerRatingDueDate' => 'getIssuerRatingDueDate',
            'acceptorRatingEntity' => 'getAcceptorRatingEntity',
            'acceptorCreditRating' => 'getAcceptorCreditRating',
            'acceptorRatingDueDate' => 'getAcceptorRatingDueDate',
            'billPackageNumber' => 'getBillPackageNumber',
            'remarks' => 'getRemarks',
            'confidence' => 'getConfidence'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['billStatus'] = isset($data['billStatus']) ? $data['billStatus'] : null;
        $this->container['billNumber'] = isset($data['billNumber']) ? $data['billNumber'] : null;
        $this->container['issuerFullName'] = isset($data['issuerFullName']) ? $data['issuerFullName'] : null;
        $this->container['issuerAccount'] = isset($data['issuerAccount']) ? $data['issuerAccount'] : null;
        $this->container['issuerBankName'] = isset($data['issuerBankName']) ? $data['issuerBankName'] : null;
        $this->container['issuerBankNumber'] = isset($data['issuerBankNumber']) ? $data['issuerBankNumber'] : null;
        $this->container['payeeFullName'] = isset($data['payeeFullName']) ? $data['payeeFullName'] : null;
        $this->container['payeeAccount'] = isset($data['payeeAccount']) ? $data['payeeAccount'] : null;
        $this->container['payeeBankName'] = isset($data['payeeBankName']) ? $data['payeeBankName'] : null;
        $this->container['payeeBankNumber'] = isset($data['payeeBankNumber']) ? $data['payeeBankNumber'] : null;
        $this->container['issuanceGuarantorName'] = isset($data['issuanceGuarantorName']) ? $data['issuanceGuarantorName'] : null;
        $this->container['issuanceGuarantorAddress'] = isset($data['issuanceGuarantorAddress']) ? $data['issuanceGuarantorAddress'] : null;
        $this->container['issuanceGuarantorAccount'] = isset($data['issuanceGuarantorAccount']) ? $data['issuanceGuarantorAccount'] : null;
        $this->container['issuanceGuaranteeDate'] = isset($data['issuanceGuaranteeDate']) ? $data['issuanceGuaranteeDate'] : null;
        $this->container['issuanceGuarantorBankNumber'] = isset($data['issuanceGuarantorBankNumber']) ? $data['issuanceGuarantorBankNumber'] : null;
        $this->container['issuanceGuarantorBankName'] = isset($data['issuanceGuarantorBankName']) ? $data['issuanceGuarantorBankName'] : null;
        $this->container['amountInWords'] = isset($data['amountInWords']) ? $data['amountInWords'] : null;
        $this->container['amountInFigures'] = isset($data['amountInFigures']) ? $data['amountInFigures'] : null;
        $this->container['acceptorFullName'] = isset($data['acceptorFullName']) ? $data['acceptorFullName'] : null;
        $this->container['acceptorAccount'] = isset($data['acceptorAccount']) ? $data['acceptorAccount'] : null;
        $this->container['acceptorBankNumber'] = isset($data['acceptorBankNumber']) ? $data['acceptorBankNumber'] : null;
        $this->container['acceptorBankName'] = isset($data['acceptorBankName']) ? $data['acceptorBankName'] : null;
        $this->container['contractNumber'] = isset($data['contractNumber']) ? $data['contractNumber'] : null;
        $this->container['assignability'] = isset($data['assignability']) ? $data['assignability'] : null;
        $this->container['issuerCommitment'] = isset($data['issuerCommitment']) ? $data['issuerCommitment'] : null;
        $this->container['acceptorCommitment'] = isset($data['acceptorCommitment']) ? $data['acceptorCommitment'] : null;
        $this->container['acceptanceDate'] = isset($data['acceptanceDate']) ? $data['acceptanceDate'] : null;
        $this->container['acceptanceGuarantorName'] = isset($data['acceptanceGuarantorName']) ? $data['acceptanceGuarantorName'] : null;
        $this->container['acceptanceGuarantorAddress'] = isset($data['acceptanceGuarantorAddress']) ? $data['acceptanceGuarantorAddress'] : null;
        $this->container['acceptanceGuarantorAccount'] = isset($data['acceptanceGuarantorAccount']) ? $data['acceptanceGuarantorAccount'] : null;
        $this->container['acceptanceGuaranteeDate'] = isset($data['acceptanceGuaranteeDate']) ? $data['acceptanceGuaranteeDate'] : null;
        $this->container['acceptanceGuarantorBankNumber'] = isset($data['acceptanceGuarantorBankNumber']) ? $data['acceptanceGuarantorBankNumber'] : null;
        $this->container['acceptanceGuarantorBankName'] = isset($data['acceptanceGuarantorBankName']) ? $data['acceptanceGuarantorBankName'] : null;
        $this->container['issuerRatingEntity'] = isset($data['issuerRatingEntity']) ? $data['issuerRatingEntity'] : null;
        $this->container['issuerCreditRating'] = isset($data['issuerCreditRating']) ? $data['issuerCreditRating'] : null;
        $this->container['issuerRatingDueDate'] = isset($data['issuerRatingDueDate']) ? $data['issuerRatingDueDate'] : null;
        $this->container['acceptorRatingEntity'] = isset($data['acceptorRatingEntity']) ? $data['acceptorRatingEntity'] : null;
        $this->container['acceptorCreditRating'] = isset($data['acceptorCreditRating']) ? $data['acceptorCreditRating'] : null;
        $this->container['acceptorRatingDueDate'] = isset($data['acceptorRatingDueDate']) ? $data['acceptorRatingDueDate'] : null;
        $this->container['billPackageNumber'] = isset($data['billPackageNumber']) ? $data['billPackageNumber'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets issueDate
    *  出票日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 出票日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets dueDate
    *  汇票到期日。
    *
    * @return string|null
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string|null $dueDate 汇票到期日。
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets billStatus
    *  票据状态。
    *
    * @return string|null
    */
    public function getBillStatus()
    {
        return $this->container['billStatus'];
    }

    /**
    * Sets billStatus
    *
    * @param string|null $billStatus 票据状态。
    *
    * @return $this
    */
    public function setBillStatus($billStatus)
    {
        $this->container['billStatus'] = $billStatus;
        return $this;
    }

    /**
    * Gets billNumber
    *  票据号码。
    *
    * @return string|null
    */
    public function getBillNumber()
    {
        return $this->container['billNumber'];
    }

    /**
    * Sets billNumber
    *
    * @param string|null $billNumber 票据号码。
    *
    * @return $this
    */
    public function setBillNumber($billNumber)
    {
        $this->container['billNumber'] = $billNumber;
        return $this;
    }

    /**
    * Gets issuerFullName
    *  出票人全称。
    *
    * @return string|null
    */
    public function getIssuerFullName()
    {
        return $this->container['issuerFullName'];
    }

    /**
    * Sets issuerFullName
    *
    * @param string|null $issuerFullName 出票人全称。
    *
    * @return $this
    */
    public function setIssuerFullName($issuerFullName)
    {
        $this->container['issuerFullName'] = $issuerFullName;
        return $this;
    }

    /**
    * Gets issuerAccount
    *  出票人账号。
    *
    * @return string|null
    */
    public function getIssuerAccount()
    {
        return $this->container['issuerAccount'];
    }

    /**
    * Sets issuerAccount
    *
    * @param string|null $issuerAccount 出票人账号。
    *
    * @return $this
    */
    public function setIssuerAccount($issuerAccount)
    {
        $this->container['issuerAccount'] = $issuerAccount;
        return $this;
    }

    /**
    * Gets issuerBankName
    *  出票人开户银行。
    *
    * @return string|null
    */
    public function getIssuerBankName()
    {
        return $this->container['issuerBankName'];
    }

    /**
    * Sets issuerBankName
    *
    * @param string|null $issuerBankName 出票人开户银行。
    *
    * @return $this
    */
    public function setIssuerBankName($issuerBankName)
    {
        $this->container['issuerBankName'] = $issuerBankName;
        return $this;
    }

    /**
    * Gets issuerBankNumber
    *  出票人开户行号。
    *
    * @return string|null
    */
    public function getIssuerBankNumber()
    {
        return $this->container['issuerBankNumber'];
    }

    /**
    * Sets issuerBankNumber
    *
    * @param string|null $issuerBankNumber 出票人开户行号。
    *
    * @return $this
    */
    public function setIssuerBankNumber($issuerBankNumber)
    {
        $this->container['issuerBankNumber'] = $issuerBankNumber;
        return $this;
    }

    /**
    * Gets payeeFullName
    *  收款人全称。
    *
    * @return string|null
    */
    public function getPayeeFullName()
    {
        return $this->container['payeeFullName'];
    }

    /**
    * Sets payeeFullName
    *
    * @param string|null $payeeFullName 收款人全称。
    *
    * @return $this
    */
    public function setPayeeFullName($payeeFullName)
    {
        $this->container['payeeFullName'] = $payeeFullName;
        return $this;
    }

    /**
    * Gets payeeAccount
    *  收款人账号。
    *
    * @return string|null
    */
    public function getPayeeAccount()
    {
        return $this->container['payeeAccount'];
    }

    /**
    * Sets payeeAccount
    *
    * @param string|null $payeeAccount 收款人账号。
    *
    * @return $this
    */
    public function setPayeeAccount($payeeAccount)
    {
        $this->container['payeeAccount'] = $payeeAccount;
        return $this;
    }

    /**
    * Gets payeeBankName
    *  收款人开户银行。
    *
    * @return string|null
    */
    public function getPayeeBankName()
    {
        return $this->container['payeeBankName'];
    }

    /**
    * Sets payeeBankName
    *
    * @param string|null $payeeBankName 收款人开户银行。
    *
    * @return $this
    */
    public function setPayeeBankName($payeeBankName)
    {
        $this->container['payeeBankName'] = $payeeBankName;
        return $this;
    }

    /**
    * Gets payeeBankNumber
    *  收款人开户行号。
    *
    * @return string|null
    */
    public function getPayeeBankNumber()
    {
        return $this->container['payeeBankNumber'];
    }

    /**
    * Sets payeeBankNumber
    *
    * @param string|null $payeeBankNumber 收款人开户行号。
    *
    * @return $this
    */
    public function setPayeeBankNumber($payeeBankNumber)
    {
        $this->container['payeeBankNumber'] = $payeeBankNumber;
        return $this;
    }

    /**
    * Gets issuanceGuarantorName
    *  出票保证人名称。
    *
    * @return string|null
    */
    public function getIssuanceGuarantorName()
    {
        return $this->container['issuanceGuarantorName'];
    }

    /**
    * Sets issuanceGuarantorName
    *
    * @param string|null $issuanceGuarantorName 出票保证人名称。
    *
    * @return $this
    */
    public function setIssuanceGuarantorName($issuanceGuarantorName)
    {
        $this->container['issuanceGuarantorName'] = $issuanceGuarantorName;
        return $this;
    }

    /**
    * Gets issuanceGuarantorAddress
    *  出票保证人地址。
    *
    * @return string|null
    */
    public function getIssuanceGuarantorAddress()
    {
        return $this->container['issuanceGuarantorAddress'];
    }

    /**
    * Sets issuanceGuarantorAddress
    *
    * @param string|null $issuanceGuarantorAddress 出票保证人地址。
    *
    * @return $this
    */
    public function setIssuanceGuarantorAddress($issuanceGuarantorAddress)
    {
        $this->container['issuanceGuarantorAddress'] = $issuanceGuarantorAddress;
        return $this;
    }

    /**
    * Gets issuanceGuarantorAccount
    *  出票保证人账号。
    *
    * @return string|null
    */
    public function getIssuanceGuarantorAccount()
    {
        return $this->container['issuanceGuarantorAccount'];
    }

    /**
    * Sets issuanceGuarantorAccount
    *
    * @param string|null $issuanceGuarantorAccount 出票保证人账号。
    *
    * @return $this
    */
    public function setIssuanceGuarantorAccount($issuanceGuarantorAccount)
    {
        $this->container['issuanceGuarantorAccount'] = $issuanceGuarantorAccount;
        return $this;
    }

    /**
    * Gets issuanceGuaranteeDate
    *  出票保证日期。
    *
    * @return string|null
    */
    public function getIssuanceGuaranteeDate()
    {
        return $this->container['issuanceGuaranteeDate'];
    }

    /**
    * Sets issuanceGuaranteeDate
    *
    * @param string|null $issuanceGuaranteeDate 出票保证日期。
    *
    * @return $this
    */
    public function setIssuanceGuaranteeDate($issuanceGuaranteeDate)
    {
        $this->container['issuanceGuaranteeDate'] = $issuanceGuaranteeDate;
        return $this;
    }

    /**
    * Gets issuanceGuarantorBankNumber
    *  出票保证人开户行行号。
    *
    * @return string|null
    */
    public function getIssuanceGuarantorBankNumber()
    {
        return $this->container['issuanceGuarantorBankNumber'];
    }

    /**
    * Sets issuanceGuarantorBankNumber
    *
    * @param string|null $issuanceGuarantorBankNumber 出票保证人开户行行号。
    *
    * @return $this
    */
    public function setIssuanceGuarantorBankNumber($issuanceGuarantorBankNumber)
    {
        $this->container['issuanceGuarantorBankNumber'] = $issuanceGuarantorBankNumber;
        return $this;
    }

    /**
    * Gets issuanceGuarantorBankName
    *  出票保证人开户行名称。
    *
    * @return string|null
    */
    public function getIssuanceGuarantorBankName()
    {
        return $this->container['issuanceGuarantorBankName'];
    }

    /**
    * Sets issuanceGuarantorBankName
    *
    * @param string|null $issuanceGuarantorBankName 出票保证人开户行名称。
    *
    * @return $this
    */
    public function setIssuanceGuarantorBankName($issuanceGuarantorBankName)
    {
        $this->container['issuanceGuarantorBankName'] = $issuanceGuarantorBankName;
        return $this;
    }

    /**
    * Gets amountInWords
    *  大写票据金额。
    *
    * @return string|null
    */
    public function getAmountInWords()
    {
        return $this->container['amountInWords'];
    }

    /**
    * Sets amountInWords
    *
    * @param string|null $amountInWords 大写票据金额。
    *
    * @return $this
    */
    public function setAmountInWords($amountInWords)
    {
        $this->container['amountInWords'] = $amountInWords;
        return $this;
    }

    /**
    * Gets amountInFigures
    *  小写票据金额。
    *
    * @return string|null
    */
    public function getAmountInFigures()
    {
        return $this->container['amountInFigures'];
    }

    /**
    * Sets amountInFigures
    *
    * @param string|null $amountInFigures 小写票据金额。
    *
    * @return $this
    */
    public function setAmountInFigures($amountInFigures)
    {
        $this->container['amountInFigures'] = $amountInFigures;
        return $this;
    }

    /**
    * Gets acceptorFullName
    *  承兑人全称。
    *
    * @return string|null
    */
    public function getAcceptorFullName()
    {
        return $this->container['acceptorFullName'];
    }

    /**
    * Sets acceptorFullName
    *
    * @param string|null $acceptorFullName 承兑人全称。
    *
    * @return $this
    */
    public function setAcceptorFullName($acceptorFullName)
    {
        $this->container['acceptorFullName'] = $acceptorFullName;
        return $this;
    }

    /**
    * Gets acceptorAccount
    *  承兑人账号。
    *
    * @return string|null
    */
    public function getAcceptorAccount()
    {
        return $this->container['acceptorAccount'];
    }

    /**
    * Sets acceptorAccount
    *
    * @param string|null $acceptorAccount 承兑人账号。
    *
    * @return $this
    */
    public function setAcceptorAccount($acceptorAccount)
    {
        $this->container['acceptorAccount'] = $acceptorAccount;
        return $this;
    }

    /**
    * Gets acceptorBankNumber
    *  承兑人开户行行号。
    *
    * @return string|null
    */
    public function getAcceptorBankNumber()
    {
        return $this->container['acceptorBankNumber'];
    }

    /**
    * Sets acceptorBankNumber
    *
    * @param string|null $acceptorBankNumber 承兑人开户行行号。
    *
    * @return $this
    */
    public function setAcceptorBankNumber($acceptorBankNumber)
    {
        $this->container['acceptorBankNumber'] = $acceptorBankNumber;
        return $this;
    }

    /**
    * Gets acceptorBankName
    *  承兑人开户行名称。
    *
    * @return string|null
    */
    public function getAcceptorBankName()
    {
        return $this->container['acceptorBankName'];
    }

    /**
    * Sets acceptorBankName
    *
    * @param string|null $acceptorBankName 承兑人开户行名称。
    *
    * @return $this
    */
    public function setAcceptorBankName($acceptorBankName)
    {
        $this->container['acceptorBankName'] = $acceptorBankName;
        return $this;
    }

    /**
    * Gets contractNumber
    *  交易合同号。
    *
    * @return string|null
    */
    public function getContractNumber()
    {
        return $this->container['contractNumber'];
    }

    /**
    * Sets contractNumber
    *
    * @param string|null $contractNumber 交易合同号。
    *
    * @return $this
    */
    public function setContractNumber($contractNumber)
    {
        $this->container['contractNumber'] = $contractNumber;
        return $this;
    }

    /**
    * Gets assignability
    *  能否转让。
    *
    * @return string|null
    */
    public function getAssignability()
    {
        return $this->container['assignability'];
    }

    /**
    * Sets assignability
    *
    * @param string|null $assignability 能否转让。
    *
    * @return $this
    */
    public function setAssignability($assignability)
    {
        $this->container['assignability'] = $assignability;
        return $this;
    }

    /**
    * Gets issuerCommitment
    *  出票人承诺。
    *
    * @return string|null
    */
    public function getIssuerCommitment()
    {
        return $this->container['issuerCommitment'];
    }

    /**
    * Sets issuerCommitment
    *
    * @param string|null $issuerCommitment 出票人承诺。
    *
    * @return $this
    */
    public function setIssuerCommitment($issuerCommitment)
    {
        $this->container['issuerCommitment'] = $issuerCommitment;
        return $this;
    }

    /**
    * Gets acceptorCommitment
    *  承兑人承诺。
    *
    * @return string|null
    */
    public function getAcceptorCommitment()
    {
        return $this->container['acceptorCommitment'];
    }

    /**
    * Sets acceptorCommitment
    *
    * @param string|null $acceptorCommitment 承兑人承诺。
    *
    * @return $this
    */
    public function setAcceptorCommitment($acceptorCommitment)
    {
        $this->container['acceptorCommitment'] = $acceptorCommitment;
        return $this;
    }

    /**
    * Gets acceptanceDate
    *  承兑日期。
    *
    * @return string|null
    */
    public function getAcceptanceDate()
    {
        return $this->container['acceptanceDate'];
    }

    /**
    * Sets acceptanceDate
    *
    * @param string|null $acceptanceDate 承兑日期。
    *
    * @return $this
    */
    public function setAcceptanceDate($acceptanceDate)
    {
        $this->container['acceptanceDate'] = $acceptanceDate;
        return $this;
    }

    /**
    * Gets acceptanceGuarantorName
    *  承兑保证人名称。
    *
    * @return string|null
    */
    public function getAcceptanceGuarantorName()
    {
        return $this->container['acceptanceGuarantorName'];
    }

    /**
    * Sets acceptanceGuarantorName
    *
    * @param string|null $acceptanceGuarantorName 承兑保证人名称。
    *
    * @return $this
    */
    public function setAcceptanceGuarantorName($acceptanceGuarantorName)
    {
        $this->container['acceptanceGuarantorName'] = $acceptanceGuarantorName;
        return $this;
    }

    /**
    * Gets acceptanceGuarantorAddress
    *  承兑保证人地址。
    *
    * @return string|null
    */
    public function getAcceptanceGuarantorAddress()
    {
        return $this->container['acceptanceGuarantorAddress'];
    }

    /**
    * Sets acceptanceGuarantorAddress
    *
    * @param string|null $acceptanceGuarantorAddress 承兑保证人地址。
    *
    * @return $this
    */
    public function setAcceptanceGuarantorAddress($acceptanceGuarantorAddress)
    {
        $this->container['acceptanceGuarantorAddress'] = $acceptanceGuarantorAddress;
        return $this;
    }

    /**
    * Gets acceptanceGuarantorAccount
    *  承兑保证人账号。
    *
    * @return string|null
    */
    public function getAcceptanceGuarantorAccount()
    {
        return $this->container['acceptanceGuarantorAccount'];
    }

    /**
    * Sets acceptanceGuarantorAccount
    *
    * @param string|null $acceptanceGuarantorAccount 承兑保证人账号。
    *
    * @return $this
    */
    public function setAcceptanceGuarantorAccount($acceptanceGuarantorAccount)
    {
        $this->container['acceptanceGuarantorAccount'] = $acceptanceGuarantorAccount;
        return $this;
    }

    /**
    * Gets acceptanceGuaranteeDate
    *  承兑保证日期。
    *
    * @return string|null
    */
    public function getAcceptanceGuaranteeDate()
    {
        return $this->container['acceptanceGuaranteeDate'];
    }

    /**
    * Sets acceptanceGuaranteeDate
    *
    * @param string|null $acceptanceGuaranteeDate 承兑保证日期。
    *
    * @return $this
    */
    public function setAcceptanceGuaranteeDate($acceptanceGuaranteeDate)
    {
        $this->container['acceptanceGuaranteeDate'] = $acceptanceGuaranteeDate;
        return $this;
    }

    /**
    * Gets acceptanceGuarantorBankNumber
    *  承兑保证人开户行行号。
    *
    * @return string|null
    */
    public function getAcceptanceGuarantorBankNumber()
    {
        return $this->container['acceptanceGuarantorBankNumber'];
    }

    /**
    * Sets acceptanceGuarantorBankNumber
    *
    * @param string|null $acceptanceGuarantorBankNumber 承兑保证人开户行行号。
    *
    * @return $this
    */
    public function setAcceptanceGuarantorBankNumber($acceptanceGuarantorBankNumber)
    {
        $this->container['acceptanceGuarantorBankNumber'] = $acceptanceGuarantorBankNumber;
        return $this;
    }

    /**
    * Gets acceptanceGuarantorBankName
    *  承兑保证人开户行名称。
    *
    * @return string|null
    */
    public function getAcceptanceGuarantorBankName()
    {
        return $this->container['acceptanceGuarantorBankName'];
    }

    /**
    * Sets acceptanceGuarantorBankName
    *
    * @param string|null $acceptanceGuarantorBankName 承兑保证人开户行名称。
    *
    * @return $this
    */
    public function setAcceptanceGuarantorBankName($acceptanceGuarantorBankName)
    {
        $this->container['acceptanceGuarantorBankName'] = $acceptanceGuarantorBankName;
        return $this;
    }

    /**
    * Gets issuerRatingEntity
    *  出票人评级主体。
    *
    * @return string|null
    */
    public function getIssuerRatingEntity()
    {
        return $this->container['issuerRatingEntity'];
    }

    /**
    * Sets issuerRatingEntity
    *
    * @param string|null $issuerRatingEntity 出票人评级主体。
    *
    * @return $this
    */
    public function setIssuerRatingEntity($issuerRatingEntity)
    {
        $this->container['issuerRatingEntity'] = $issuerRatingEntity;
        return $this;
    }

    /**
    * Gets issuerCreditRating
    *  出票人信用等级。
    *
    * @return string|null
    */
    public function getIssuerCreditRating()
    {
        return $this->container['issuerCreditRating'];
    }

    /**
    * Sets issuerCreditRating
    *
    * @param string|null $issuerCreditRating 出票人信用等级。
    *
    * @return $this
    */
    public function setIssuerCreditRating($issuerCreditRating)
    {
        $this->container['issuerCreditRating'] = $issuerCreditRating;
        return $this;
    }

    /**
    * Gets issuerRatingDueDate
    *  出票人评级到期日。
    *
    * @return string|null
    */
    public function getIssuerRatingDueDate()
    {
        return $this->container['issuerRatingDueDate'];
    }

    /**
    * Sets issuerRatingDueDate
    *
    * @param string|null $issuerRatingDueDate 出票人评级到期日。
    *
    * @return $this
    */
    public function setIssuerRatingDueDate($issuerRatingDueDate)
    {
        $this->container['issuerRatingDueDate'] = $issuerRatingDueDate;
        return $this;
    }

    /**
    * Gets acceptorRatingEntity
    *  承兑人评级主体。
    *
    * @return string|null
    */
    public function getAcceptorRatingEntity()
    {
        return $this->container['acceptorRatingEntity'];
    }

    /**
    * Sets acceptorRatingEntity
    *
    * @param string|null $acceptorRatingEntity 承兑人评级主体。
    *
    * @return $this
    */
    public function setAcceptorRatingEntity($acceptorRatingEntity)
    {
        $this->container['acceptorRatingEntity'] = $acceptorRatingEntity;
        return $this;
    }

    /**
    * Gets acceptorCreditRating
    *  承兑人信用等级。
    *
    * @return string|null
    */
    public function getAcceptorCreditRating()
    {
        return $this->container['acceptorCreditRating'];
    }

    /**
    * Sets acceptorCreditRating
    *
    * @param string|null $acceptorCreditRating 承兑人信用等级。
    *
    * @return $this
    */
    public function setAcceptorCreditRating($acceptorCreditRating)
    {
        $this->container['acceptorCreditRating'] = $acceptorCreditRating;
        return $this;
    }

    /**
    * Gets acceptorRatingDueDate
    *  承兑人评级到期日。
    *
    * @return string|null
    */
    public function getAcceptorRatingDueDate()
    {
        return $this->container['acceptorRatingDueDate'];
    }

    /**
    * Sets acceptorRatingDueDate
    *
    * @param string|null $acceptorRatingDueDate 承兑人评级到期日。
    *
    * @return $this
    */
    public function setAcceptorRatingDueDate($acceptorRatingDueDate)
    {
        $this->container['acceptorRatingDueDate'] = $acceptorRatingDueDate;
        return $this;
    }

    /**
    * Gets billPackageNumber
    *  票据包号。
    *
    * @return string|null
    */
    public function getBillPackageNumber()
    {
        return $this->container['billPackageNumber'];
    }

    /**
    * Sets billPackageNumber
    *
    * @param string|null $billPackageNumber 票据包号。
    *
    * @return $this
    */
    public function setBillPackageNumber($billPackageNumber)
    {
        $this->container['billPackageNumber'] = $billPackageNumber;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets confidence
    *  各个字段的置信度。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 各个字段的置信度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

