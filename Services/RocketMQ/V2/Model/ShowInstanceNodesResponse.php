<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceNodesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceNodesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nextOffset  下个分页的offset。
    * previousOffset  上个分页的offset。
    * nodes  后台任务ID
    * total  总个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextOffset' => 'int',
            'previousOffset' => 'int',
            'nodes' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\NodeContextEntity[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextOffset  下个分页的offset。
    * previousOffset  上个分页的offset。
    * nodes  后台任务ID
    * total  总个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nextOffset' => 'int32',
        'previousOffset' => 'int32',
        'nodes' => null,
        'total' => null
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
    * nextOffset  下个分页的offset。
    * previousOffset  上个分页的offset。
    * nodes  后台任务ID
    * total  总个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextOffset' => 'next_offset',
            'previousOffset' => 'previous_offset',
            'nodes' => 'nodes',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextOffset  下个分页的offset。
    * previousOffset  上个分页的offset。
    * nodes  后台任务ID
    * total  总个数
    *
    * @var string[]
    */
    protected static $setters = [
            'nextOffset' => 'setNextOffset',
            'previousOffset' => 'setPreviousOffset',
            'nodes' => 'setNodes',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextOffset  下个分页的offset。
    * previousOffset  上个分页的offset。
    * nodes  后台任务ID
    * total  总个数
    *
    * @var string[]
    */
    protected static $getters = [
            'nextOffset' => 'getNextOffset',
            'previousOffset' => 'getPreviousOffset',
            'nodes' => 'getNodes',
            'total' => 'getTotal'
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
        $this->container['nextOffset'] = isset($data['nextOffset']) ? $data['nextOffset'] : null;
        $this->container['previousOffset'] = isset($data['previousOffset']) ? $data['previousOffset'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets nextOffset
    *  下个分页的offset。
    *
    * @return int|null
    */
    public function getNextOffset()
    {
        return $this->container['nextOffset'];
    }

    /**
    * Sets nextOffset
    *
    * @param int|null $nextOffset 下个分页的offset。
    *
    * @return $this
    */
    public function setNextOffset($nextOffset)
    {
        $this->container['nextOffset'] = $nextOffset;
        return $this;
    }

    /**
    * Gets previousOffset
    *  上个分页的offset。
    *
    * @return int|null
    */
    public function getPreviousOffset()
    {
        return $this->container['previousOffset'];
    }

    /**
    * Sets previousOffset
    *
    * @param int|null $previousOffset 上个分页的offset。
    *
    * @return $this
    */
    public function setPreviousOffset($previousOffset)
    {
        $this->container['previousOffset'] = $previousOffset;
        return $this;
    }

    /**
    * Gets nodes
    *  后台任务ID
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\NodeContextEntity[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\NodeContextEntity[]|null $nodes 后台任务ID
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets total
    *  总个数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总个数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

