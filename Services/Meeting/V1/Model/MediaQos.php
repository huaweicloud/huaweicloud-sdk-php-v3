<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MediaQos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MediaQos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upList  客户端-->服务器方向QoS
    * downList  服务器-->客户端方向QoS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upList' => '\HuaweiCloud\SDK\Meeting\V1\Model\Qos[]',
            'downList' => '\HuaweiCloud\SDK\Meeting\V1\Model\Qos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upList  客户端-->服务器方向QoS
    * downList  服务器-->客户端方向QoS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upList' => null,
        'downList' => null
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
    * upList  客户端-->服务器方向QoS
    * downList  服务器-->客户端方向QoS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upList' => 'upList',
            'downList' => 'downList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upList  客户端-->服务器方向QoS
    * downList  服务器-->客户端方向QoS
    *
    * @var string[]
    */
    protected static $setters = [
            'upList' => 'setUpList',
            'downList' => 'setDownList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upList  客户端-->服务器方向QoS
    * downList  服务器-->客户端方向QoS
    *
    * @var string[]
    */
    protected static $getters = [
            'upList' => 'getUpList',
            'downList' => 'getDownList'
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
        $this->container['upList'] = isset($data['upList']) ? $data['upList'] : null;
        $this->container['downList'] = isset($data['downList']) ? $data['downList'] : null;
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
    * Gets upList
    *  客户端-->服务器方向QoS
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\Qos[]|null
    */
    public function getUpList()
    {
        return $this->container['upList'];
    }

    /**
    * Sets upList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\Qos[]|null $upList 客户端-->服务器方向QoS
    *
    * @return $this
    */
    public function setUpList($upList)
    {
        $this->container['upList'] = $upList;
        return $this;
    }

    /**
    * Gets downList
    *  服务器-->客户端方向QoS
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\Qos[]|null
    */
    public function getDownList()
    {
        return $this->container['downList'];
    }

    /**
    * Sets downList
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\Qos[]|null $downList 服务器-->客户端方向QoS
    *
    * @return $this
    */
    public function setDownList($downList)
    {
        $this->container['downList'] = $downList;
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

