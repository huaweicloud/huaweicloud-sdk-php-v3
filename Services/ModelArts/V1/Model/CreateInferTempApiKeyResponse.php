<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInferTempApiKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInferTempApiKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiKey  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    * expireTime  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    * createTime  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiKey' => 'string',
            'expireTime' => 'int',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiKey  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    * expireTime  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    * createTime  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiKey' => null,
        'expireTime' => 'int64',
        'createTime' => 'int64'
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
    * apiKey  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    * expireTime  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    * createTime  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiKey' => 'api_key',
            'expireTime' => 'expire_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiKey  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    * expireTime  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    * createTime  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiKey' => 'setApiKey',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiKey  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    * expireTime  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    * createTime  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiKey' => 'getApiKey',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime'
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
        $this->container['apiKey'] = isset($data['apiKey']) ? $data['apiKey'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets apiKey
    *  **参数解释：** 临时apikey。 **取值范围：**不涉及。
    *
    * @return string|null
    */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
    * Sets apiKey
    *
    * @param string|null $apiKey **参数解释：** 临时apikey。 **取值范围：**不涉及。
    *
    * @return $this
    */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
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
    * @param int|null $expireTime **参数解释：** 临时apikey超时时间。 **取值范围：**不涉及。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释：** 临时apikey创建时间。 **取值范围：**不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

