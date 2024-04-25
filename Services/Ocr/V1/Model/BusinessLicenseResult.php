<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessLicenseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessLicenseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * registrationNumber  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    * name  企业名称。
    * type  公司/企业类型/主体类型/类型。
    * address  住所/营业场所/企业住所/主要经营场所/经营场所。
    * legalRepresentative  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    * registeredCapital  注册资本/出资额。
    * organizationForm  组成形式。
    * foundDate  成立日期/注册日期。
    * businessTerm  营业期限。
    * businessScope  经营范围。
    * issueDate  发照日期。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'registrationNumber' => 'string',
            'name' => 'string',
            'type' => 'string',
            'address' => 'string',
            'legalRepresentative' => 'string',
            'registeredCapital' => 'string',
            'organizationForm' => 'string',
            'foundDate' => 'string',
            'businessTerm' => 'string',
            'businessScope' => 'string',
            'issueDate' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * registrationNumber  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    * name  企业名称。
    * type  公司/企业类型/主体类型/类型。
    * address  住所/营业场所/企业住所/主要经营场所/经营场所。
    * legalRepresentative  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    * registeredCapital  注册资本/出资额。
    * organizationForm  组成形式。
    * foundDate  成立日期/注册日期。
    * businessTerm  营业期限。
    * businessScope  经营范围。
    * issueDate  发照日期。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'registrationNumber' => null,
        'name' => null,
        'type' => null,
        'address' => null,
        'legalRepresentative' => null,
        'registeredCapital' => null,
        'organizationForm' => null,
        'foundDate' => null,
        'businessTerm' => null,
        'businessScope' => null,
        'issueDate' => null,
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
    * registrationNumber  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    * name  企业名称。
    * type  公司/企业类型/主体类型/类型。
    * address  住所/营业场所/企业住所/主要经营场所/经营场所。
    * legalRepresentative  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    * registeredCapital  注册资本/出资额。
    * organizationForm  组成形式。
    * foundDate  成立日期/注册日期。
    * businessTerm  营业期限。
    * businessScope  经营范围。
    * issueDate  发照日期。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'registrationNumber' => 'registration_number',
            'name' => 'name',
            'type' => 'type',
            'address' => 'address',
            'legalRepresentative' => 'legal_representative',
            'registeredCapital' => 'registered_capital',
            'organizationForm' => 'organization_form',
            'foundDate' => 'found_date',
            'businessTerm' => 'business_term',
            'businessScope' => 'business_scope',
            'issueDate' => 'issue_date',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * registrationNumber  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    * name  企业名称。
    * type  公司/企业类型/主体类型/类型。
    * address  住所/营业场所/企业住所/主要经营场所/经营场所。
    * legalRepresentative  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    * registeredCapital  注册资本/出资额。
    * organizationForm  组成形式。
    * foundDate  成立日期/注册日期。
    * businessTerm  营业期限。
    * businessScope  经营范围。
    * issueDate  发照日期。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'registrationNumber' => 'setRegistrationNumber',
            'name' => 'setName',
            'type' => 'setType',
            'address' => 'setAddress',
            'legalRepresentative' => 'setLegalRepresentative',
            'registeredCapital' => 'setRegisteredCapital',
            'organizationForm' => 'setOrganizationForm',
            'foundDate' => 'setFoundDate',
            'businessTerm' => 'setBusinessTerm',
            'businessScope' => 'setBusinessScope',
            'issueDate' => 'setIssueDate',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * registrationNumber  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    * name  企业名称。
    * type  公司/企业类型/主体类型/类型。
    * address  住所/营业场所/企业住所/主要经营场所/经营场所。
    * legalRepresentative  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    * registeredCapital  注册资本/出资额。
    * organizationForm  组成形式。
    * foundDate  成立日期/注册日期。
    * businessTerm  营业期限。
    * businessScope  经营范围。
    * issueDate  发照日期。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'registrationNumber' => 'getRegistrationNumber',
            'name' => 'getName',
            'type' => 'getType',
            'address' => 'getAddress',
            'legalRepresentative' => 'getLegalRepresentative',
            'registeredCapital' => 'getRegisteredCapital',
            'organizationForm' => 'getOrganizationForm',
            'foundDate' => 'getFoundDate',
            'businessTerm' => 'getBusinessTerm',
            'businessScope' => 'getBusinessScope',
            'issueDate' => 'getIssueDate',
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
        $this->container['registrationNumber'] = isset($data['registrationNumber']) ? $data['registrationNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['legalRepresentative'] = isset($data['legalRepresentative']) ? $data['legalRepresentative'] : null;
        $this->container['registeredCapital'] = isset($data['registeredCapital']) ? $data['registeredCapital'] : null;
        $this->container['organizationForm'] = isset($data['organizationForm']) ? $data['organizationForm'] : null;
        $this->container['foundDate'] = isset($data['foundDate']) ? $data['foundDate'] : null;
        $this->container['businessTerm'] = isset($data['businessTerm']) ? $data['businessTerm'] : null;
        $this->container['businessScope'] = isset($data['businessScope']) ? $data['businessScope'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
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
    * Gets registrationNumber
    *  - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    *
    * @return string|null
    */
    public function getRegistrationNumber()
    {
        return $this->container['registrationNumber'];
    }

    /**
    * Sets registrationNumber
    *
    * @param string|null $registrationNumber - 老版本营业执照对应注册号。 - 新三证合一版本营业执照对应社会保障号。
    *
    * @return $this
    */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->container['registrationNumber'] = $registrationNumber;
        return $this;
    }

    /**
    * Gets name
    *  企业名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 企业名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  公司/企业类型/主体类型/类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 公司/企业类型/主体类型/类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets address
    *  住所/营业场所/企业住所/主要经营场所/经营场所。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 住所/营业场所/企业住所/主要经营场所/经营场所。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets legalRepresentative
    *  法定代表人/负责人/执行事务合伙人/投资人/经营者。
    *
    * @return string|null
    */
    public function getLegalRepresentative()
    {
        return $this->container['legalRepresentative'];
    }

    /**
    * Sets legalRepresentative
    *
    * @param string|null $legalRepresentative 法定代表人/负责人/执行事务合伙人/投资人/经营者。
    *
    * @return $this
    */
    public function setLegalRepresentative($legalRepresentative)
    {
        $this->container['legalRepresentative'] = $legalRepresentative;
        return $this;
    }

    /**
    * Gets registeredCapital
    *  注册资本/出资额。
    *
    * @return string|null
    */
    public function getRegisteredCapital()
    {
        return $this->container['registeredCapital'];
    }

    /**
    * Sets registeredCapital
    *
    * @param string|null $registeredCapital 注册资本/出资额。
    *
    * @return $this
    */
    public function setRegisteredCapital($registeredCapital)
    {
        $this->container['registeredCapital'] = $registeredCapital;
        return $this;
    }

    /**
    * Gets organizationForm
    *  组成形式。
    *
    * @return string|null
    */
    public function getOrganizationForm()
    {
        return $this->container['organizationForm'];
    }

    /**
    * Sets organizationForm
    *
    * @param string|null $organizationForm 组成形式。
    *
    * @return $this
    */
    public function setOrganizationForm($organizationForm)
    {
        $this->container['organizationForm'] = $organizationForm;
        return $this;
    }

    /**
    * Gets foundDate
    *  成立日期/注册日期。
    *
    * @return string|null
    */
    public function getFoundDate()
    {
        return $this->container['foundDate'];
    }

    /**
    * Sets foundDate
    *
    * @param string|null $foundDate 成立日期/注册日期。
    *
    * @return $this
    */
    public function setFoundDate($foundDate)
    {
        $this->container['foundDate'] = $foundDate;
        return $this;
    }

    /**
    * Gets businessTerm
    *  营业期限。
    *
    * @return string|null
    */
    public function getBusinessTerm()
    {
        return $this->container['businessTerm'];
    }

    /**
    * Sets businessTerm
    *
    * @param string|null $businessTerm 营业期限。
    *
    * @return $this
    */
    public function setBusinessTerm($businessTerm)
    {
        $this->container['businessTerm'] = $businessTerm;
        return $this;
    }

    /**
    * Gets businessScope
    *  经营范围。
    *
    * @return string|null
    */
    public function getBusinessScope()
    {
        return $this->container['businessScope'];
    }

    /**
    * Sets businessScope
    *
    * @param string|null $businessScope 经营范围。
    *
    * @return $this
    */
    public function setBusinessScope($businessScope)
    {
        $this->container['businessScope'] = $businessScope;
        return $this;
    }

    /**
    * Gets issueDate
    *  发照日期。
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
    * @param string|null $issueDate 发照日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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

