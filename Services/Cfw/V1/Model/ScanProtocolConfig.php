<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScanProtocolConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScanProtocolConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  反病毒动作，0：观察 1：拦截 2：禁用
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'int',
            'protocolType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  反病毒动作，0：观察 1：拦截 2：禁用
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => 'int32',
        'protocolType' => 'int32'
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
    * action  反病毒动作，0：观察 1：拦截 2：禁用
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'protocolType' => 'protocol_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  反病毒动作，0：观察 1：拦截 2：禁用
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'protocolType' => 'setProtocolType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  反病毒动作，0：观察 1：拦截 2：禁用
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'protocolType' => 'getProtocolType'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['action']) && ($this->container['action'] > 2)) {
                $invalidProperties[] = "invalid value for 'action', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['action']) && ($this->container['action'] < 0)) {
                $invalidProperties[] = "invalid value for 'action', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocolType']) && ($this->container['protocolType'] > 7)) {
                $invalidProperties[] = "invalid value for 'protocolType', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['protocolType']) && ($this->container['protocolType'] < 0)) {
                $invalidProperties[] = "invalid value for 'protocolType', must be bigger than or equal to 0.";
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
    * Gets action
    *  反病毒动作，0：观察 1：拦截 2：禁用
    *
    * @return int|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int|null $action 反病毒动作，0：观察 1：拦截 2：禁用
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets protocolType
    *  协议类型
    *
    * @return int|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param int|null $protocolType 协议类型
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
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

