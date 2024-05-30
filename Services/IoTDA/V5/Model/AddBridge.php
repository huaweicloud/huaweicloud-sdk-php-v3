<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBridge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBridge';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bridgeName  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * bridgeId  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bridgeName' => 'string',
            'bridgeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bridgeName  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * bridgeId  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bridgeName' => null,
        'bridgeId' => null
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
    * bridgeName  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * bridgeId  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bridgeName' => 'bridge_name',
            'bridgeId' => 'bridge_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bridgeName  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * bridgeId  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'bridgeName' => 'setBridgeName',
            'bridgeId' => 'setBridgeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bridgeName  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * bridgeId  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'bridgeName' => 'getBridgeName',
            'bridgeId' => 'getBridgeId'
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
        $this->container['bridgeName'] = isset($data['bridgeName']) ? $data['bridgeName'] : null;
        $this->container['bridgeId'] = isset($data['bridgeId']) ? $data['bridgeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bridgeName'] === null) {
            $invalidProperties[] = "'bridgeName' can't be null";
        }
            if ((mb_strlen($this->container['bridgeName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bridgeName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bridgeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bridgeName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['bridgeName'])) {
                $invalidProperties[] = "invalid value for 'bridgeName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['bridgeId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['bridgeId'])) {
                $invalidProperties[] = "invalid value for 'bridgeId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
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
    * Gets bridgeName
    *  网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return string
    */
    public function getBridgeName()
    {
        return $this->container['bridgeName'];
    }

    /**
    * Sets bridgeName
    *
    * @param string $bridgeName 网桥名称。**取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setBridgeName($bridgeName)
    {
        $this->container['bridgeName'] = $bridgeName;
        return $this;
    }

    /**
    * Gets bridgeId
    *  网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @return string|null
    */
    public function getBridgeId()
    {
        return $this->container['bridgeId'];
    }

    /**
    * Sets bridgeId
    *
    * @param string|null $bridgeId 网桥ID。**取值范围**：长度不超过36，只允许字母、数字、_-字符的组合。
    *
    * @return $this
    */
    public function setBridgeId($bridgeId)
    {
        $this->container['bridgeId'] = $bridgeId;
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

