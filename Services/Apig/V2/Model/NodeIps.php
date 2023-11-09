<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeIps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeIps';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * livedata  livedata节点IP地址列表
    * shubao  shubao节点IP地址列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'livedata' => 'string[]',
            'shubao' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * livedata  livedata节点IP地址列表
    * shubao  shubao节点IP地址列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'livedata' => null,
        'shubao' => null
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
    * livedata  livedata节点IP地址列表
    * shubao  shubao节点IP地址列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'livedata' => 'livedata',
            'shubao' => 'shubao'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * livedata  livedata节点IP地址列表
    * shubao  shubao节点IP地址列表
    *
    * @var string[]
    */
    protected static $setters = [
            'livedata' => 'setLivedata',
            'shubao' => 'setShubao'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * livedata  livedata节点IP地址列表
    * shubao  shubao节点IP地址列表
    *
    * @var string[]
    */
    protected static $getters = [
            'livedata' => 'getLivedata',
            'shubao' => 'getShubao'
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
        $this->container['livedata'] = isset($data['livedata']) ? $data['livedata'] : null;
        $this->container['shubao'] = isset($data['shubao']) ? $data['shubao'] : null;
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
    * Gets livedata
    *  livedata节点IP地址列表
    *
    * @return string[]|null
    */
    public function getLivedata()
    {
        return $this->container['livedata'];
    }

    /**
    * Sets livedata
    *
    * @param string[]|null $livedata livedata节点IP地址列表
    *
    * @return $this
    */
    public function setLivedata($livedata)
    {
        $this->container['livedata'] = $livedata;
        return $this;
    }

    /**
    * Gets shubao
    *  shubao节点IP地址列表
    *
    * @return string[]|null
    */
    public function getShubao()
    {
        return $this->container['shubao'];
    }

    /**
    * Sets shubao
    *
    * @param string[]|null $shubao shubao节点IP地址列表
    *
    * @return $this
    */
    public function setShubao($shubao)
    {
        $this->container['shubao'] = $shubao;
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

