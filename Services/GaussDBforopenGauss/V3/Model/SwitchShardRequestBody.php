<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchShardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchShardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shards  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shards' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\Shards[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shards  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shards' => null
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
    * shards  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shards' => 'shards'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shards  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @var string[]
    */
    protected static $setters = [
            'shards' => 'setShards'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shards  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @var string[]
    */
    protected static $getters = [
            'shards' => 'getShards'
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
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shards'] === null) {
            $invalidProperties[] = "'shards' can't be null";
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
    * Gets shards
    *  节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\Shards[]
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\Shards[] $shards 节点列表，支持对单个或者多个DN分片做主备切换。节点信息为将要升主的备DN分片对应的节点id和组件id。
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
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

