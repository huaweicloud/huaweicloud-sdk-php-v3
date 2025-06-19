<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewPageParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewPageParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleted  deleted
    * limit  每页显示的条目数量，最大支持200条
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeValue  nodeValue
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * status  status
    * type  type
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleted' => 'string',
            'limit' => 'int',
            'mindmapId' => 'string',
            'nodeId' => 'string',
            'nodeValue' => 'string',
            'offset' => 'int',
            'status' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleted  deleted
    * limit  每页显示的条目数量，最大支持200条
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeValue  nodeValue
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * status  status
    * type  type
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleted' => null,
        'limit' => 'int32',
        'mindmapId' => null,
        'nodeId' => null,
        'nodeValue' => null,
        'offset' => 'int32',
        'status' => null,
        'type' => null
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
    * deleted  deleted
    * limit  每页显示的条目数量，最大支持200条
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeValue  nodeValue
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * status  status
    * type  type
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleted' => 'deleted',
            'limit' => 'limit',
            'mindmapId' => 'mindmap_id',
            'nodeId' => 'node_id',
            'nodeValue' => 'node_value',
            'offset' => 'offset',
            'status' => 'status',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleted  deleted
    * limit  每页显示的条目数量，最大支持200条
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeValue  nodeValue
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * status  status
    * type  type
    *
    * @var string[]
    */
    protected static $setters = [
            'deleted' => 'setDeleted',
            'limit' => 'setLimit',
            'mindmapId' => 'setMindmapId',
            'nodeId' => 'setNodeId',
            'nodeValue' => 'setNodeValue',
            'offset' => 'setOffset',
            'status' => 'setStatus',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleted  deleted
    * limit  每页显示的条目数量，最大支持200条
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeValue  nodeValue
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * status  status
    * type  type
    *
    * @var string[]
    */
    protected static $getters = [
            'deleted' => 'getDeleted',
            'limit' => 'getLimit',
            'mindmapId' => 'getMindmapId',
            'nodeId' => 'getNodeId',
            'nodeValue' => 'getNodeValue',
            'offset' => 'getOffset',
            'status' => 'getStatus',
            'type' => 'getType'
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeValue'] = isset($data['nodeValue']) ? $data['nodeValue'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets deleted
    *  deleted
    *
    * @return string|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string|null $deleted deleted
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，最大支持200条
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，最大支持200条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets mindmapId
    *  mindmapId
    *
    * @return string|null
    */
    public function getMindmapId()
    {
        return $this->container['mindmapId'];
    }

    /**
    * Sets mindmapId
    *
    * @param string|null $mindmapId mindmapId
    *
    * @return $this
    */
    public function setMindmapId($mindmapId)
    {
        $this->container['mindmapId'] = $mindmapId;
        return $this;
    }

    /**
    * Gets nodeId
    *  nodeId
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId nodeId
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeValue
    *  nodeValue
    *
    * @return string|null
    */
    public function getNodeValue()
    {
        return $this->container['nodeValue'];
    }

    /**
    * Sets nodeValue
    *
    * @param string|null $nodeValue nodeValue
    *
    * @return $this
    */
    public function setNodeValue($nodeValue)
    {
        $this->container['nodeValue'] = $nodeValue;
        return $this;
    }

    /**
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

