<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableDnssecConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableDnssecConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneName  **参数解释：** 域名。 **取值范围：** 不涉及。
    * keyTag  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    * flag  **参数解释：** 旗标。 **取值范围：** 不涉及。
    * digestAlgorithm  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    * digestType  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    * digest  **参数解释：** 摘要。 **取值范围：** 不涉及。
    * signature  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    * signatureType  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    * kskPublicKey  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    * dsRecord  **参数解释：** DS记录。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * status  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneName' => 'string',
            'keyTag' => 'int',
            'flag' => 'int',
            'digestAlgorithm' => 'string',
            'digestType' => 'int',
            'digest' => 'string',
            'signature' => 'string',
            'signatureType' => 'int',
            'kskPublicKey' => 'string',
            'dsRecord' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneName  **参数解释：** 域名。 **取值范围：** 不涉及。
    * keyTag  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    * flag  **参数解释：** 旗标。 **取值范围：** 不涉及。
    * digestAlgorithm  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    * digestType  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    * digest  **参数解释：** 摘要。 **取值范围：** 不涉及。
    * signature  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    * signatureType  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    * kskPublicKey  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    * dsRecord  **参数解释：** DS记录。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * status  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneName' => null,
        'keyTag' => null,
        'flag' => null,
        'digestAlgorithm' => null,
        'digestType' => null,
        'digest' => null,
        'signature' => null,
        'signatureType' => null,
        'kskPublicKey' => null,
        'dsRecord' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'status' => null
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
    * zoneName  **参数解释：** 域名。 **取值范围：** 不涉及。
    * keyTag  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    * flag  **参数解释：** 旗标。 **取值范围：** 不涉及。
    * digestAlgorithm  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    * digestType  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    * digest  **参数解释：** 摘要。 **取值范围：** 不涉及。
    * signature  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    * signatureType  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    * kskPublicKey  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    * dsRecord  **参数解释：** DS记录。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * status  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneName' => 'zone_name',
            'keyTag' => 'key_tag',
            'flag' => 'flag',
            'digestAlgorithm' => 'digest_algorithm',
            'digestType' => 'digest_type',
            'digest' => 'digest',
            'signature' => 'signature',
            'signatureType' => 'signature_type',
            'kskPublicKey' => 'ksk_public_key',
            'dsRecord' => 'ds_record',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneName  **参数解释：** 域名。 **取值范围：** 不涉及。
    * keyTag  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    * flag  **参数解释：** 旗标。 **取值范围：** 不涉及。
    * digestAlgorithm  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    * digestType  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    * digest  **参数解释：** 摘要。 **取值范围：** 不涉及。
    * signature  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    * signatureType  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    * kskPublicKey  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    * dsRecord  **参数解释：** DS记录。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * status  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneName' => 'setZoneName',
            'keyTag' => 'setKeyTag',
            'flag' => 'setFlag',
            'digestAlgorithm' => 'setDigestAlgorithm',
            'digestType' => 'setDigestType',
            'digest' => 'setDigest',
            'signature' => 'setSignature',
            'signatureType' => 'setSignatureType',
            'kskPublicKey' => 'setKskPublicKey',
            'dsRecord' => 'setDsRecord',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneName  **参数解释：** 域名。 **取值范围：** 不涉及。
    * keyTag  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    * flag  **参数解释：** 旗标。 **取值范围：** 不涉及。
    * digestAlgorithm  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    * digestType  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    * digest  **参数解释：** 摘要。 **取值范围：** 不涉及。
    * signature  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    * signatureType  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    * kskPublicKey  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    * dsRecord  **参数解释：** DS记录。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * updatedAt  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    * status  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneName' => 'getZoneName',
            'keyTag' => 'getKeyTag',
            'flag' => 'getFlag',
            'digestAlgorithm' => 'getDigestAlgorithm',
            'digestType' => 'getDigestType',
            'digest' => 'getDigest',
            'signature' => 'getSignature',
            'signatureType' => 'getSignatureType',
            'kskPublicKey' => 'getKskPublicKey',
            'dsRecord' => 'getDsRecord',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'status' => 'getStatus'
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
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['keyTag'] = isset($data['keyTag']) ? $data['keyTag'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['digestAlgorithm'] = isset($data['digestAlgorithm']) ? $data['digestAlgorithm'] : null;
        $this->container['digestType'] = isset($data['digestType']) ? $data['digestType'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['kskPublicKey'] = isset($data['kskPublicKey']) ? $data['kskPublicKey'] : null;
        $this->container['dsRecord'] = isset($data['dsRecord']) ? $data['dsRecord'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets zoneName
    *  **参数解释：** 域名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName **参数解释：** 域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets keyTag
    *  **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getKeyTag()
    {
        return $this->container['keyTag'];
    }

    /**
    * Sets keyTag
    *
    * @param int|null $keyTag **参数解释：** 密钥标签。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setKeyTag($keyTag)
    {
        $this->container['keyTag'] = $keyTag;
        return $this;
    }

    /**
    * Gets flag
    *  **参数解释：** 旗标。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param int|null $flag **参数解释：** 旗标。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets digestAlgorithm
    *  **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDigestAlgorithm()
    {
        return $this->container['digestAlgorithm'];
    }

    /**
    * Sets digestAlgorithm
    *
    * @param string|null $digestAlgorithm **参数解释：** 摘要算法。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDigestAlgorithm($digestAlgorithm)
    {
        $this->container['digestAlgorithm'] = $digestAlgorithm;
        return $this;
    }

    /**
    * Gets digestType
    *  **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDigestType()
    {
        return $this->container['digestType'];
    }

    /**
    * Sets digestType
    *
    * @param int|null $digestType **参数解释：** 摘要算法类型。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDigestType($digestType)
    {
        $this->container['digestType'] = $digestType;
        return $this;
    }

    /**
    * Gets digest
    *  **参数解释：** 摘要。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest **参数解释：** 摘要。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets signature
    *  **参数解释：** 签名算法。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature **参数解释：** 签名算法。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets signatureType
    *  **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSignatureType()
    {
        return $this->container['signatureType'];
    }

    /**
    * Sets signatureType
    *
    * @param int|null $signatureType **参数解释：** 签名算法类型。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSignatureType($signatureType)
    {
        $this->container['signatureType'] = $signatureType;
        return $this;
    }

    /**
    * Gets kskPublicKey
    *  **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getKskPublicKey()
    {
        return $this->container['kskPublicKey'];
    }

    /**
    * Sets kskPublicKey
    *
    * @param string|null $kskPublicKey **参数解释：** 公有密钥。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setKskPublicKey($kskPublicKey)
    {
        $this->container['kskPublicKey'] = $kskPublicKey;
        return $this;
    }

    /**
    * Gets dsRecord
    *  **参数解释：** DS记录。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDsRecord()
    {
        return $this->container['dsRecord'];
    }

    /**
    * Sets dsRecord
    *
    * @param string|null $dsRecord **参数解释：** DS记录。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDsRecord($dsRecord)
    {
        $this->container['dsRecord'] = $dsRecord;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 状态。 **取值范围：** - ENABLE：启用 - DISABLE：关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

