<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Key implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Key';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canPush  是否允许推送
    * createdAt  部署密钥新建时间
    * key  部署密钥
    * keyId  部署密钥id
    * keyTitle  部署密钥名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canPush' => 'bool',
            'createdAt' => 'string',
            'key' => 'string',
            'keyId' => 'string',
            'keyTitle' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canPush  是否允许推送
    * createdAt  部署密钥新建时间
    * key  部署密钥
    * keyId  部署密钥id
    * keyTitle  部署密钥名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canPush' => null,
        'createdAt' => null,
        'key' => null,
        'keyId' => null,
        'keyTitle' => null
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
    * canPush  是否允许推送
    * createdAt  部署密钥新建时间
    * key  部署密钥
    * keyId  部署密钥id
    * keyTitle  部署密钥名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canPush' => 'can_push',
            'createdAt' => 'created_at',
            'key' => 'key',
            'keyId' => 'key_id',
            'keyTitle' => 'key_title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canPush  是否允许推送
    * createdAt  部署密钥新建时间
    * key  部署密钥
    * keyId  部署密钥id
    * keyTitle  部署密钥名称
    *
    * @var string[]
    */
    protected static $setters = [
            'canPush' => 'setCanPush',
            'createdAt' => 'setCreatedAt',
            'key' => 'setKey',
            'keyId' => 'setKeyId',
            'keyTitle' => 'setKeyTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canPush  是否允许推送
    * createdAt  部署密钥新建时间
    * key  部署密钥
    * keyId  部署密钥id
    * keyTitle  部署密钥名称
    *
    * @var string[]
    */
    protected static $getters = [
            'canPush' => 'getCanPush',
            'createdAt' => 'getCreatedAt',
            'key' => 'getKey',
            'keyId' => 'getKeyId',
            'keyTitle' => 'getKeyTitle'
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
        $this->container['canPush'] = isset($data['canPush']) ? $data['canPush'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['keyTitle'] = isset($data['keyTitle']) ? $data['keyTitle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createdAt']) && !preg_match("/yyyy-MM-dd HH:mm:ss/", $this->container['createdAt'])) {
                $invalidProperties[] = "invalid value for 'createdAt', must be conform to the pattern /yyyy-MM-dd HH:mm:ss/.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 40)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 1.";
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
    * Gets canPush
    *  是否允许推送
    *
    * @return bool|null
    */
    public function getCanPush()
    {
        return $this->container['canPush'];
    }

    /**
    * Sets canPush
    *
    * @param bool|null $canPush 是否允许推送
    *
    * @return $this
    */
    public function setCanPush($canPush)
    {
        $this->container['canPush'] = $canPush;
        return $this;
    }

    /**
    * Gets createdAt
    *  部署密钥新建时间
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
    * @param string|null $createdAt 部署密钥新建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets key
    *  部署密钥
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 部署密钥
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets keyId
    *  部署密钥id
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 部署密钥id
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets keyTitle
    *  部署密钥名称
    *
    * @return string|null
    */
    public function getKeyTitle()
    {
        return $this->container['keyTitle'];
    }

    /**
    * Sets keyTitle
    *
    * @param string|null $keyTitle 部署密钥名称
    *
    * @return $this
    */
    public function setKeyTitle($keyTitle)
    {
        $this->container['keyTitle'] = $keyTitle;
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

