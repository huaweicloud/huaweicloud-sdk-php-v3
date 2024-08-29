<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicationAssetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicationAssetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetInfo  加密后的资产信息。
    * encryptionInfo  encryptionInfo
    * expireTime  过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'assetInfo' => 'string',
            'encryptionInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReplicationEncInfo',
            'expireTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  资产ID。
    * assetInfo  加密后的资产信息。
    * encryptionInfo  encryptionInfo
    * expireTime  过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'assetInfo' => null,
        'encryptionInfo' => null,
        'expireTime' => 'int64'
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
    * assetId  资产ID。
    * assetInfo  加密后的资产信息。
    * encryptionInfo  encryptionInfo
    * expireTime  过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'assetInfo' => 'asset_info',
            'encryptionInfo' => 'encryption_info',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  资产ID。
    * assetInfo  加密后的资产信息。
    * encryptionInfo  encryptionInfo
    * expireTime  过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'assetInfo' => 'setAssetInfo',
            'encryptionInfo' => 'setEncryptionInfo',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  资产ID。
    * assetInfo  加密后的资产信息。
    * encryptionInfo  encryptionInfo
    * expireTime  过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'assetInfo' => 'getAssetInfo',
            'encryptionInfo' => 'getEncryptionInfo',
            'expireTime' => 'getExpireTime'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetInfo'] = isset($data['assetInfo']) ? $data['assetInfo'] : null;
        $this->container['encryptionInfo'] = isset($data['encryptionInfo']) ? $data['encryptionInfo'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetInfo']) && (mb_strlen($this->container['assetInfo']) > 100000)) {
                $invalidProperties[] = "invalid value for 'assetInfo', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['assetInfo']) && (mb_strlen($this->container['assetInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
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
    * Gets assetId
    *  资产ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetInfo
    *  加密后的资产信息。
    *
    * @return string|null
    */
    public function getAssetInfo()
    {
        return $this->container['assetInfo'];
    }

    /**
    * Sets assetInfo
    *
    * @param string|null $assetInfo 加密后的资产信息。
    *
    * @return $this
    */
    public function setAssetInfo($assetInfo)
    {
        $this->container['assetInfo'] = $assetInfo;
        return $this;
    }

    /**
    * Gets encryptionInfo
    *  encryptionInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReplicationEncInfo|null
    */
    public function getEncryptionInfo()
    {
        return $this->container['encryptionInfo'];
    }

    /**
    * Sets encryptionInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReplicationEncInfo|null $encryptionInfo encryptionInfo
    *
    * @return $this
    */
    public function setEncryptionInfo($encryptionInfo)
    {
        $this->container['encryptionInfo'] = $encryptionInfo;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
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
    * @param int|null $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

