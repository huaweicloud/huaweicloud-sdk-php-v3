<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateId  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    * cnName  CA证书CN名称。
    * owner  CA证书所有者。
    * status  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    * verifyCode  CA证书验证码。
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    * templateId  绑定的自注册模板ID。
    * createDate  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * effectiveDate  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateId' => 'string',
            'cnName' => 'string',
            'owner' => 'string',
            'status' => 'bool',
            'verifyCode' => 'string',
            'provisionEnable' => 'bool',
            'templateId' => 'string',
            'createDate' => 'string',
            'effectiveDate' => 'string',
            'expiryDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateId  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    * cnName  CA证书CN名称。
    * owner  CA证书所有者。
    * status  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    * verifyCode  CA证书验证码。
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    * templateId  绑定的自注册模板ID。
    * createDate  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * effectiveDate  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateId' => null,
        'cnName' => null,
        'owner' => null,
        'status' => null,
        'verifyCode' => null,
        'provisionEnable' => null,
        'templateId' => null,
        'createDate' => null,
        'effectiveDate' => null,
        'expiryDate' => null
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
    * certificateId  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    * cnName  CA证书CN名称。
    * owner  CA证书所有者。
    * status  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    * verifyCode  CA证书验证码。
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    * templateId  绑定的自注册模板ID。
    * createDate  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * effectiveDate  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateId' => 'certificate_id',
            'cnName' => 'cn_name',
            'owner' => 'owner',
            'status' => 'status',
            'verifyCode' => 'verify_code',
            'provisionEnable' => 'provision_enable',
            'templateId' => 'template_id',
            'createDate' => 'create_date',
            'effectiveDate' => 'effective_date',
            'expiryDate' => 'expiry_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateId  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    * cnName  CA证书CN名称。
    * owner  CA证书所有者。
    * status  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    * verifyCode  CA证书验证码。
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    * templateId  绑定的自注册模板ID。
    * createDate  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * effectiveDate  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateId' => 'setCertificateId',
            'cnName' => 'setCnName',
            'owner' => 'setOwner',
            'status' => 'setStatus',
            'verifyCode' => 'setVerifyCode',
            'provisionEnable' => 'setProvisionEnable',
            'templateId' => 'setTemplateId',
            'createDate' => 'setCreateDate',
            'effectiveDate' => 'setEffectiveDate',
            'expiryDate' => 'setExpiryDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateId  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    * cnName  CA证书CN名称。
    * owner  CA证书所有者。
    * status  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    * verifyCode  CA证书验证码。
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    * templateId  绑定的自注册模板ID。
    * createDate  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * effectiveDate  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateId' => 'getCertificateId',
            'cnName' => 'getCnName',
            'owner' => 'getOwner',
            'status' => 'getStatus',
            'verifyCode' => 'getVerifyCode',
            'provisionEnable' => 'getProvisionEnable',
            'templateId' => 'getTemplateId',
            'createDate' => 'getCreateDate',
            'effectiveDate' => 'getEffectiveDate',
            'expiryDate' => 'getExpiryDate'
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
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['cnName'] = isset($data['cnName']) ? $data['cnName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['verifyCode'] = isset($data['verifyCode']) ? $data['verifyCode'] : null;
        $this->container['provisionEnable'] = isset($data['provisionEnable']) ? $data['provisionEnable'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
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
    * Gets certificateId
    *  CA证书ID，在上传CA证书时由平台分配的唯一标识。
    *
    * @return string|null
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string|null $certificateId CA证书ID，在上传CA证书时由平台分配的唯一标识。
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets cnName
    *  CA证书CN名称。
    *
    * @return string|null
    */
    public function getCnName()
    {
        return $this->container['cnName'];
    }

    /**
    * Sets cnName
    *
    * @param string|null $cnName CA证书CN名称。
    *
    * @return $this
    */
    public function setCnName($cnName)
    {
        $this->container['cnName'] = $cnName;
        return $this;
    }

    /**
    * Gets owner
    *  CA证书所有者。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner CA证书所有者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets status
    *  CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status CA证书验证状态。true代表证书已通过验证，可进行设备证书认证接入。false代表证书未通过验证。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets verifyCode
    *  CA证书验证码。
    *
    * @return string|null
    */
    public function getVerifyCode()
    {
        return $this->container['verifyCode'];
    }

    /**
    * Sets verifyCode
    *
    * @param string|null $verifyCode CA证书验证码。
    *
    * @return $this
    */
    public function setVerifyCode($verifyCode)
    {
        $this->container['verifyCode'] = $verifyCode;
        return $this;
    }

    /**
    * Gets provisionEnable
    *  是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    *
    * @return bool|null
    */
    public function getProvisionEnable()
    {
        return $this->container['provisionEnable'];
    }

    /**
    * Sets provisionEnable
    *
    * @param bool|null $provisionEnable 是否开启自注册能力，当为true时该功能必须配合自注册模板使用，true：是，false：否。
    *
    * @return $this
    */
    public function setProvisionEnable($provisionEnable)
    {
        $this->container['provisionEnable'] = $provisionEnable;
        return $this;
    }

    /**
    * Gets templateId
    *  绑定的自注册模板ID。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 绑定的自注册模板ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets createDate
    *  创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param string|null $createDate 创建证书日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
    * Sets effectiveDate
    *
    * @param string|null $effectiveDate CA证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate CA证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
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

