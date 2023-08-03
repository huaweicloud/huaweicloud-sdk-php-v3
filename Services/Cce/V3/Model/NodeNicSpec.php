<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeNicSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeNicSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primaryNic  primaryNic
    * extNics  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryNic' => '\HuaweiCloud\SDK\Cce\V3\Model\NicSpec',
            'extNics' => '\HuaweiCloud\SDK\Cce\V3\Model\NicSpec[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryNic  primaryNic
    * extNics  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryNic' => null,
        'extNics' => null
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
    * primaryNic  primaryNic
    * extNics  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryNic' => 'primaryNic',
            'extNics' => 'extNics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryNic  primaryNic
    * extNics  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryNic' => 'setPrimaryNic',
            'extNics' => 'setExtNics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryNic  primaryNic
    * extNics  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryNic' => 'getPrimaryNic',
            'extNics' => 'getExtNics'
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
        $this->container['primaryNic'] = isset($data['primaryNic']) ? $data['primaryNic'] : null;
        $this->container['extNics'] = isset($data['extNics']) ? $data['extNics'] : null;
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
    * Gets primaryNic
    *  primaryNic
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NicSpec|null
    */
    public function getPrimaryNic()
    {
        return $this->container['primaryNic'];
    }

    /**
    * Sets primaryNic
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NicSpec|null $primaryNic primaryNic
    *
    * @return $this
    */
    public function setPrimaryNic($primaryNic)
    {
        $this->container['primaryNic'] = $primaryNic;
        return $this;
    }

    /**
    * Gets extNics
    *  扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NicSpec[]|null
    */
    public function getExtNics()
    {
        return $this->container['extNics'];
    }

    /**
    * Sets extNics
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NicSpec[]|null $extNics 扩展网卡 >创建节点池添加节点时不支持该参数。
    *
    * @return $this
    */
    public function setExtNics($extNics)
    {
        $this->container['extNics'] = $extNics;
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

