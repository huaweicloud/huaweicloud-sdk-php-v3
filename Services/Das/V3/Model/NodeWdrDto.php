<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeWdrDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeWdrDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeWdr  节点WDR报表下载地址
    * nodeName  节点WDR报表名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeWdr' => 'string',
            'nodeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeWdr  节点WDR报表下载地址
    * nodeName  节点WDR报表名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeWdr' => null,
        'nodeName' => null
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
    * nodeWdr  节点WDR报表下载地址
    * nodeName  节点WDR报表名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeWdr' => 'node_wdr',
            'nodeName' => 'node_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeWdr  节点WDR报表下载地址
    * nodeName  节点WDR报表名称
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeWdr' => 'setNodeWdr',
            'nodeName' => 'setNodeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeWdr  节点WDR报表下载地址
    * nodeName  节点WDR报表名称
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeWdr' => 'getNodeWdr',
            'nodeName' => 'getNodeName'
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
        $this->container['nodeWdr'] = isset($data['nodeWdr']) ? $data['nodeWdr'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
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
    * Gets nodeWdr
    *  节点WDR报表下载地址
    *
    * @return string|null
    */
    public function getNodeWdr()
    {
        return $this->container['nodeWdr'];
    }

    /**
    * Sets nodeWdr
    *
    * @param string|null $nodeWdr 节点WDR报表下载地址
    *
    * @return $this
    */
    public function setNodeWdr($nodeWdr)
    {
        $this->container['nodeWdr'] = $nodeWdr;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点WDR报表名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点WDR报表名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
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

