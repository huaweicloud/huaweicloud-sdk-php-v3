<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsurancePolicyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsurancePolicyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bankName  发卡行。
    * billNumber  billNumber
    * company  company
    * effectiveDate  effectiveDate
    * applicantName  applicantName
    * applicantSex  applicantSex
    * applicantBirthday  applicantBirthday
    * applicantIdType  applicantIdType
    * applicantIdNumber  applicantIdNumber
    * insurantList  被保人列表（第一个默认为主被保人）。
    * beneficiaryList  受益人列表。
    * insuranceList  保险项目信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bankName' => 'string',
            'billNumber' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'company' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'effectiveDate' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'applicantName' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'applicantSex' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'applicantBirthday' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'applicantIdType' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'applicantIdNumber' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurantList' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurantItem[]',
            'beneficiaryList' => '\HuaweiCloud\SDK\Ocr\V1\Model\BeneficiaryItem[]',
            'insuranceList' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsuranceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bankName  发卡行。
    * billNumber  billNumber
    * company  company
    * effectiveDate  effectiveDate
    * applicantName  applicantName
    * applicantSex  applicantSex
    * applicantBirthday  applicantBirthday
    * applicantIdType  applicantIdType
    * applicantIdNumber  applicantIdNumber
    * insurantList  被保人列表（第一个默认为主被保人）。
    * beneficiaryList  受益人列表。
    * insuranceList  保险项目信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bankName' => null,
        'billNumber' => null,
        'company' => null,
        'effectiveDate' => null,
        'applicantName' => null,
        'applicantSex' => null,
        'applicantBirthday' => null,
        'applicantIdType' => null,
        'applicantIdNumber' => null,
        'insurantList' => null,
        'beneficiaryList' => null,
        'insuranceList' => null
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
    * bankName  发卡行。
    * billNumber  billNumber
    * company  company
    * effectiveDate  effectiveDate
    * applicantName  applicantName
    * applicantSex  applicantSex
    * applicantBirthday  applicantBirthday
    * applicantIdType  applicantIdType
    * applicantIdNumber  applicantIdNumber
    * insurantList  被保人列表（第一个默认为主被保人）。
    * beneficiaryList  受益人列表。
    * insuranceList  保险项目信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bankName' => 'bank_name',
            'billNumber' => 'bill_number',
            'company' => 'company',
            'effectiveDate' => 'effective_date',
            'applicantName' => 'applicant_name',
            'applicantSex' => 'applicant_sex',
            'applicantBirthday' => 'applicant_birthday',
            'applicantIdType' => 'applicant_id_type',
            'applicantIdNumber' => 'applicant_id_number',
            'insurantList' => 'insurant_list',
            'beneficiaryList' => 'beneficiary_list',
            'insuranceList' => 'insurance_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bankName  发卡行。
    * billNumber  billNumber
    * company  company
    * effectiveDate  effectiveDate
    * applicantName  applicantName
    * applicantSex  applicantSex
    * applicantBirthday  applicantBirthday
    * applicantIdType  applicantIdType
    * applicantIdNumber  applicantIdNumber
    * insurantList  被保人列表（第一个默认为主被保人）。
    * beneficiaryList  受益人列表。
    * insuranceList  保险项目信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'bankName' => 'setBankName',
            'billNumber' => 'setBillNumber',
            'company' => 'setCompany',
            'effectiveDate' => 'setEffectiveDate',
            'applicantName' => 'setApplicantName',
            'applicantSex' => 'setApplicantSex',
            'applicantBirthday' => 'setApplicantBirthday',
            'applicantIdType' => 'setApplicantIdType',
            'applicantIdNumber' => 'setApplicantIdNumber',
            'insurantList' => 'setInsurantList',
            'beneficiaryList' => 'setBeneficiaryList',
            'insuranceList' => 'setInsuranceList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bankName  发卡行。
    * billNumber  billNumber
    * company  company
    * effectiveDate  effectiveDate
    * applicantName  applicantName
    * applicantSex  applicantSex
    * applicantBirthday  applicantBirthday
    * applicantIdType  applicantIdType
    * applicantIdNumber  applicantIdNumber
    * insurantList  被保人列表（第一个默认为主被保人）。
    * beneficiaryList  受益人列表。
    * insuranceList  保险项目信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'bankName' => 'getBankName',
            'billNumber' => 'getBillNumber',
            'company' => 'getCompany',
            'effectiveDate' => 'getEffectiveDate',
            'applicantName' => 'getApplicantName',
            'applicantSex' => 'getApplicantSex',
            'applicantBirthday' => 'getApplicantBirthday',
            'applicantIdType' => 'getApplicantIdType',
            'applicantIdNumber' => 'getApplicantIdNumber',
            'insurantList' => 'getInsurantList',
            'beneficiaryList' => 'getBeneficiaryList',
            'insuranceList' => 'getInsuranceList'
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
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['billNumber'] = isset($data['billNumber']) ? $data['billNumber'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['applicantName'] = isset($data['applicantName']) ? $data['applicantName'] : null;
        $this->container['applicantSex'] = isset($data['applicantSex']) ? $data['applicantSex'] : null;
        $this->container['applicantBirthday'] = isset($data['applicantBirthday']) ? $data['applicantBirthday'] : null;
        $this->container['applicantIdType'] = isset($data['applicantIdType']) ? $data['applicantIdType'] : null;
        $this->container['applicantIdNumber'] = isset($data['applicantIdNumber']) ? $data['applicantIdNumber'] : null;
        $this->container['insurantList'] = isset($data['insurantList']) ? $data['insurantList'] : null;
        $this->container['beneficiaryList'] = isset($data['beneficiaryList']) ? $data['beneficiaryList'] : null;
        $this->container['insuranceList'] = isset($data['insuranceList']) ? $data['insuranceList'] : null;
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
    * Gets bankName
    *  发卡行。
    *
    * @return string|null
    */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
    * Sets bankName
    *
    * @param string|null $bankName 发卡行。
    *
    * @return $this
    */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;
        return $this;
    }

    /**
    * Gets billNumber
    *  billNumber
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getBillNumber()
    {
        return $this->container['billNumber'];
    }

    /**
    * Sets billNumber
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $billNumber billNumber
    *
    * @return $this
    */
    public function setBillNumber($billNumber)
    {
        $this->container['billNumber'] = $billNumber;
        return $this;
    }

    /**
    * Gets company
    *  company
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
    * Sets company
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $company company
    *
    * @return $this
    */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  effectiveDate
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
    * Sets effectiveDate
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $effectiveDate effectiveDate
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets applicantName
    *  applicantName
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getApplicantName()
    {
        return $this->container['applicantName'];
    }

    /**
    * Sets applicantName
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $applicantName applicantName
    *
    * @return $this
    */
    public function setApplicantName($applicantName)
    {
        $this->container['applicantName'] = $applicantName;
        return $this;
    }

    /**
    * Gets applicantSex
    *  applicantSex
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getApplicantSex()
    {
        return $this->container['applicantSex'];
    }

    /**
    * Sets applicantSex
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $applicantSex applicantSex
    *
    * @return $this
    */
    public function setApplicantSex($applicantSex)
    {
        $this->container['applicantSex'] = $applicantSex;
        return $this;
    }

    /**
    * Gets applicantBirthday
    *  applicantBirthday
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getApplicantBirthday()
    {
        return $this->container['applicantBirthday'];
    }

    /**
    * Sets applicantBirthday
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $applicantBirthday applicantBirthday
    *
    * @return $this
    */
    public function setApplicantBirthday($applicantBirthday)
    {
        $this->container['applicantBirthday'] = $applicantBirthday;
        return $this;
    }

    /**
    * Gets applicantIdType
    *  applicantIdType
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getApplicantIdType()
    {
        return $this->container['applicantIdType'];
    }

    /**
    * Sets applicantIdType
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $applicantIdType applicantIdType
    *
    * @return $this
    */
    public function setApplicantIdType($applicantIdType)
    {
        $this->container['applicantIdType'] = $applicantIdType;
        return $this;
    }

    /**
    * Gets applicantIdNumber
    *  applicantIdNumber
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getApplicantIdNumber()
    {
        return $this->container['applicantIdNumber'];
    }

    /**
    * Sets applicantIdNumber
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $applicantIdNumber applicantIdNumber
    *
    * @return $this
    */
    public function setApplicantIdNumber($applicantIdNumber)
    {
        $this->container['applicantIdNumber'] = $applicantIdNumber;
        return $this;
    }

    /**
    * Gets insurantList
    *  被保人列表（第一个默认为主被保人）。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurantItem[]|null
    */
    public function getInsurantList()
    {
        return $this->container['insurantList'];
    }

    /**
    * Sets insurantList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurantItem[]|null $insurantList 被保人列表（第一个默认为主被保人）。
    *
    * @return $this
    */
    public function setInsurantList($insurantList)
    {
        $this->container['insurantList'] = $insurantList;
        return $this;
    }

    /**
    * Gets beneficiaryList
    *  受益人列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\BeneficiaryItem[]|null
    */
    public function getBeneficiaryList()
    {
        return $this->container['beneficiaryList'];
    }

    /**
    * Sets beneficiaryList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\BeneficiaryItem[]|null $beneficiaryList 受益人列表。
    *
    * @return $this
    */
    public function setBeneficiaryList($beneficiaryList)
    {
        $this->container['beneficiaryList'] = $beneficiaryList;
        return $this;
    }

    /**
    * Gets insuranceList
    *  保险项目信息列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsuranceItem[]|null
    */
    public function getInsuranceList()
    {
        return $this->container['insuranceList'];
    }

    /**
    * Sets insuranceList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsuranceItem[]|null $insuranceList 保险项目信息列表。
    *
    * @return $this
    */
    public function setInsuranceList($insuranceList)
    {
        $this->container['insuranceList'] = $insuranceList;
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

