<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateSubNetworkInterfaceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateSubNetworkInterfaceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentId  目的宿主网卡ID
    * subNetworkInterfaces  待迁移辅助弹性网卡列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentId' => 'string',
            'subNetworkInterfaces' => 'map[string,string][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentId  目的宿主网卡ID
    * subNetworkInterfaces  待迁移辅助弹性网卡列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentId' => null,
        'subNetworkInterfaces' => null
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
    * parentId  目的宿主网卡ID
    * subNetworkInterfaces  待迁移辅助弹性网卡列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentId' => 'parent_id',
            'subNetworkInterfaces' => 'sub_network_interfaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentId  目的宿主网卡ID
    * subNetworkInterfaces  待迁移辅助弹性网卡列表
    *
    * @var string[]
    */
    protected static $setters = [
            'parentId' => 'setParentId',
            'subNetworkInterfaces' => 'setSubNetworkInterfaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentId  目的宿主网卡ID
    * subNetworkInterfaces  待迁移辅助弹性网卡列表
    *
    * @var string[]
    */
    protected static $getters = [
            'parentId' => 'getParentId',
            'subNetworkInterfaces' => 'getSubNetworkInterfaces'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['subNetworkInterfaces'] = isset($data['subNetworkInterfaces']) ? $data['subNetworkInterfaces'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['subNetworkInterfaces'] === null) {
            $invalidProperties[] = "'subNetworkInterfaces' can't be null";
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
    * Gets parentId
    *  目的宿主网卡ID
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 目的宿主网卡ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets subNetworkInterfaces
    *  待迁移辅助弹性网卡列表
    *
    * @return map[string,string][]
    */
    public function getSubNetworkInterfaces()
    {
        return $this->container['subNetworkInterfaces'];
    }

    /**
    * Sets subNetworkInterfaces
    *
    * @param map[string,string][] $subNetworkInterfaces 待迁移辅助弹性网卡列表
    *
    * @return $this
    */
    public function setSubNetworkInterfaces($subNetworkInterfaces)
    {
        $this->container['subNetworkInterfaces'] = $subNetworkInterfaces;
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

