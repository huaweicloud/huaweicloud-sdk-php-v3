<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactorParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactorParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  offset
    * limit  limit
    * type  type
    * name  name
    * parentNodeIds  parentNodeIds
    * assetId  assetId
    * creatorNum  creatorNum
    * mindmapId  mindmapId
    * testpointId  testpointId
    * mindmapNodeId  mindmapNodeId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'type' => 'string',
            'name' => 'string',
            'parentNodeIds' => 'string[]',
            'assetId' => 'string',
            'creatorNum' => 'string',
            'mindmapId' => 'string',
            'testpointId' => 'string',
            'mindmapNodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  offset
    * limit  limit
    * type  type
    * name  name
    * parentNodeIds  parentNodeIds
    * assetId  assetId
    * creatorNum  creatorNum
    * mindmapId  mindmapId
    * testpointId  testpointId
    * mindmapNodeId  mindmapNodeId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'type' => null,
        'name' => null,
        'parentNodeIds' => null,
        'assetId' => null,
        'creatorNum' => null,
        'mindmapId' => null,
        'testpointId' => null,
        'mindmapNodeId' => null
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
    * offset  offset
    * limit  limit
    * type  type
    * name  name
    * parentNodeIds  parentNodeIds
    * assetId  assetId
    * creatorNum  creatorNum
    * mindmapId  mindmapId
    * testpointId  testpointId
    * mindmapNodeId  mindmapNodeId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'type' => 'type',
            'name' => 'name',
            'parentNodeIds' => 'parent_node_ids',
            'assetId' => 'asset_id',
            'creatorNum' => 'creator_num',
            'mindmapId' => 'mindmap_id',
            'testpointId' => 'testpoint_id',
            'mindmapNodeId' => 'mindmap_node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  offset
    * limit  limit
    * type  type
    * name  name
    * parentNodeIds  parentNodeIds
    * assetId  assetId
    * creatorNum  creatorNum
    * mindmapId  mindmapId
    * testpointId  testpointId
    * mindmapNodeId  mindmapNodeId
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'type' => 'setType',
            'name' => 'setName',
            'parentNodeIds' => 'setParentNodeIds',
            'assetId' => 'setAssetId',
            'creatorNum' => 'setCreatorNum',
            'mindmapId' => 'setMindmapId',
            'testpointId' => 'setTestpointId',
            'mindmapNodeId' => 'setMindmapNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  offset
    * limit  limit
    * type  type
    * name  name
    * parentNodeIds  parentNodeIds
    * assetId  assetId
    * creatorNum  creatorNum
    * mindmapId  mindmapId
    * testpointId  testpointId
    * mindmapNodeId  mindmapNodeId
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'type' => 'getType',
            'name' => 'getName',
            'parentNodeIds' => 'getParentNodeIds',
            'assetId' => 'getAssetId',
            'creatorNum' => 'getCreatorNum',
            'mindmapId' => 'getMindmapId',
            'testpointId' => 'getTestpointId',
            'mindmapNodeId' => 'getMindmapNodeId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentNodeIds'] = isset($data['parentNodeIds']) ? $data['parentNodeIds'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['testpointId'] = isset($data['testpointId']) ? $data['testpointId'] : null;
        $this->container['mindmapNodeId'] = isset($data['mindmapNodeId']) ? $data['mindmapNodeId'] : null;
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
    * Gets offset
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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
    * Gets name
    *  name
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentNodeIds
    *  parentNodeIds
    *
    * @return string[]|null
    */
    public function getParentNodeIds()
    {
        return $this->container['parentNodeIds'];
    }

    /**
    * Sets parentNodeIds
    *
    * @param string[]|null $parentNodeIds parentNodeIds
    *
    * @return $this
    */
    public function setParentNodeIds($parentNodeIds)
    {
        $this->container['parentNodeIds'] = $parentNodeIds;
        return $this;
    }

    /**
    * Gets assetId
    *  assetId
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId assetId
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets creatorNum
    *  creatorNum
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum creatorNum
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
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
    * Gets testpointId
    *  testpointId
    *
    * @return string|null
    */
    public function getTestpointId()
    {
        return $this->container['testpointId'];
    }

    /**
    * Sets testpointId
    *
    * @param string|null $testpointId testpointId
    *
    * @return $this
    */
    public function setTestpointId($testpointId)
    {
        $this->container['testpointId'] = $testpointId;
        return $this;
    }

    /**
    * Gets mindmapNodeId
    *  mindmapNodeId
    *
    * @return string|null
    */
    public function getMindmapNodeId()
    {
        return $this->container['mindmapNodeId'];
    }

    /**
    * Sets mindmapNodeId
    *
    * @param string|null $mindmapNodeId mindmapNodeId
    *
    * @return $this
    */
    public function setMindmapNodeId($mindmapNodeId)
    {
        $this->container['mindmapNodeId'] = $mindmapNodeId;
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

