<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpsDetailCertificates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpsDetail_certificates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    * certificateSource  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificateName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    * certificateValue  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * privateKey  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encCertificateValue  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * expireTime  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateType' => 'string',
            'certificateSource' => 'int',
            'certificateName' => 'string',
            'certificateValue' => 'string',
            'privateKey' => 'string',
            'encCertificateValue' => 'string',
            'encPrivateKey' => 'string',
            'expireTime' => 'int',
            'scmCertificateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    * certificateSource  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificateName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    * certificateValue  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * privateKey  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encCertificateValue  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * expireTime  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateType' => null,
        'certificateSource' => null,
        'certificateName' => null,
        'certificateValue' => null,
        'privateKey' => null,
        'encCertificateValue' => null,
        'encPrivateKey' => null,
        'expireTime' => 'int64',
        'scmCertificateId' => null
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
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    * certificateSource  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificateName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    * certificateValue  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * privateKey  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encCertificateValue  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * expireTime  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateType' => 'certificate_type',
            'certificateSource' => 'certificate_source',
            'certificateName' => 'certificate_name',
            'certificateValue' => 'certificate_value',
            'privateKey' => 'private_key',
            'encCertificateValue' => 'enc_certificate_value',
            'encPrivateKey' => 'enc_private_key',
            'expireTime' => 'expire_time',
            'scmCertificateId' => 'scm_certificate_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    * certificateSource  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificateName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    * certificateValue  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * privateKey  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encCertificateValue  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * expireTime  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateType' => 'setCertificateType',
            'certificateSource' => 'setCertificateSource',
            'certificateName' => 'setCertificateName',
            'certificateValue' => 'setCertificateValue',
            'privateKey' => 'setPrivateKey',
            'encCertificateValue' => 'setEncCertificateValue',
            'encPrivateKey' => 'setEncPrivateKey',
            'expireTime' => 'setExpireTime',
            'scmCertificateId' => 'setScmCertificateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    * certificateSource  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificateName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    * certificateValue  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * privateKey  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encCertificateValue  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    * expireTime  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateType' => 'getCertificateType',
            'certificateSource' => 'getCertificateSource',
            'certificateName' => 'getCertificateName',
            'certificateValue' => 'getCertificateValue',
            'privateKey' => 'getPrivateKey',
            'encCertificateValue' => 'getEncCertificateValue',
            'encPrivateKey' => 'getEncPrivateKey',
            'expireTime' => 'getExpireTime',
            'scmCertificateId' => 'getScmCertificateId'
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
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['certificateSource'] = isset($data['certificateSource']) ? $data['certificateSource'] : null;
        $this->container['certificateName'] = isset($data['certificateName']) ? $data['certificateName'] : null;
        $this->container['certificateValue'] = isset($data['certificateValue']) ? $data['certificateValue'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['encCertificateValue'] = isset($data['encCertificateValue']) ? $data['encCertificateValue'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
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
    * Gets certificateType
    *  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string|null $certificateType **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - server: 国际证书 - server_sm: 国密证书  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets certificateSource
    *  **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCertificateSource()
    {
        return $this->container['certificateSource'];
    }

    /**
    * Sets certificateSource
    *
    * @param int|null $certificateSource **参数解释：** 证书来源 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificateSource($certificateSource)
    {
        $this->container['certificateSource'] = $certificateSource;
        return $this;
    }

    /**
    * Gets certificateName
    *  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
    * Sets certificateName
    *
    * @param string|null $certificateName **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCertificateName($certificateName)
    {
        $this->container['certificateName'] = $certificateName;
        return $this;
    }

    /**
    * Gets certificateValue
    *  **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCertificateValue()
    {
        return $this->container['certificateValue'];
    }

    /**
    * Sets certificateValue
    *
    * @param string|null $certificateValue **参数解释：** 证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCertificateValue($certificateValue)
    {
        $this->container['certificateValue'] = $certificateValue;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey **参数解释：** 私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets encCertificateValue
    *  **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getEncCertificateValue()
    {
        return $this->container['encCertificateValue'];
    }

    /**
    * Sets encCertificateValue
    *
    * @param string|null $encCertificateValue **参数解释：** 国密证书加密证书内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEncCertificateValue($encCertificateValue)
    {
        $this->container['encCertificateValue'] = $encCertificateValue;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey **参数解释：** 国密证书加密私钥内容 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime **参数解释：** 证书过期时间，Unix时间戳格式，单位为毫秒 **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getScmCertificateId()
    {
        return $this->container['scmCertificateId'];
    }

    /**
    * Sets scmCertificateId
    *
    * @param string|null $scmCertificateId **参数解释：** SCM证书ID **约束限制：** 不涉及 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
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

