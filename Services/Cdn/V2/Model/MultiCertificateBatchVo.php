<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiCertificateBatchVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiCertificateBatchVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    * certificateCategory  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    * encCertificate  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certName' => 'string',
            'certificateCategory' => 'int',
            'certificateType' => 'int',
            'certificate' => 'string',
            'privateKey' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string',
            'scmCertificateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    * certificateCategory  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    * encCertificate  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certName' => null,
        'certificateCategory' => 'int32',
        'certificateType' => 'int32',
        'certificate' => null,
        'privateKey' => null,
        'encCertificate' => null,
        'encPrivateKey' => null,
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
    * certName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    * certificateCategory  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    * encCertificate  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certName' => 'cert_name',
            'certificateCategory' => 'certificate_category',
            'certificateType' => 'certificate_type',
            'certificate' => 'certificate',
            'privateKey' => 'private_key',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key',
            'scmCertificateId' => 'scm_certificate_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    * certificateCategory  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    * encCertificate  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'certName' => 'setCertName',
            'certificateCategory' => 'setCertificateCategory',
            'certificateType' => 'setCertificateType',
            'certificate' => 'setCertificate',
            'privateKey' => 'setPrivateKey',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey',
            'scmCertificateId' => 'setScmCertificateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certName  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    * certificateCategory  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    * certificateType  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    * certificate  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    * privateKey  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    * encCertificate  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * encPrivateKey  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    * scmCertificateId  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'certName' => 'getCertName',
            'certificateCategory' => 'getCertificateCategory',
            'certificateType' => 'getCertificateType',
            'certificate' => 'getCertificate',
            'privateKey' => 'getPrivateKey',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey',
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
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certificateCategory'] = isset($data['certificateCategory']) ? $data['certificateCategory'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
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
    * Gets certName
    *  **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string|null $certName **参数解释：** 证书名称 **约束限制：** 不涉及 **取值范围：** - 3-64个字符 - 由英文字母、数字及“-”、“_”、空格组成  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets certificateCategory
    *  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCertificateCategory()
    {
        return $this->container['certificateCategory'];
    }

    /**
    * Sets certificateCategory
    *
    * @param int|null $certificateCategory **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 国际证书 - 1: 国密证书  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificateCategory($certificateCategory)
    {
        $this->container['certificateCategory'] = $certificateCategory;
        return $this;
    }

    /**
    * Gets certificateType
    *  **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param int|null $certificateType **参数解释：** 证书类型 **约束限制：** 不涉及 **取值范围：** - 0: 自有证书 - 1: 云托管证书 - 2: SCM证书  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets certificate
    *  **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate **参数解释：** SSL证书内容 **约束限制：** - 仅支持PEM编码格式 - 需要传入完整证书链  **取值范围：** 证书链长度不超过20KB **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $privateKey **参数解释：** SSL证书私钥内容 **约束限制：** - 仅支持PEM编码格式  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets encCertificate
    *  **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate **参数解释：** 国密证书加密证书内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_private_key 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $encPrivateKey **参数解释：** 国密证书加密私钥内容 **约束限制：** certificate_category 为 1 且 certificate_type 为 0 时必传，须与 enc_certificate 同时传入 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $scmCertificateId **参数解释：** SCM证书ID，配置SCM证书时必传 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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

