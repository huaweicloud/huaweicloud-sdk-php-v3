<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCasePageParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCasePageParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  offset
    * limit  limit
    * deleted  deleted
    * idCollection  idCollection
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeIdCollection  nodeIdCollection
    * projectId  projectId
    * isArchive  isArchive
    * caseName  caseName
    * hasSubMindmap  hasSubMindmap
    * subMindmapId  subMindmapId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'deleted' => 'string',
            'idCollection' => 'string[]',
            'mindmapId' => 'string',
            'nodeId' => 'string',
            'nodeIdCollection' => 'string[]',
            'projectId' => 'string',
            'isArchive' => 'bool',
            'caseName' => 'string',
            'hasSubMindmap' => 'bool',
            'subMindmapId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  offset
    * limit  limit
    * deleted  deleted
    * idCollection  idCollection
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeIdCollection  nodeIdCollection
    * projectId  projectId
    * isArchive  isArchive
    * caseName  caseName
    * hasSubMindmap  hasSubMindmap
    * subMindmapId  subMindmapId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'deleted' => null,
        'idCollection' => null,
        'mindmapId' => null,
        'nodeId' => null,
        'nodeIdCollection' => null,
        'projectId' => null,
        'isArchive' => null,
        'caseName' => null,
        'hasSubMindmap' => null,
        'subMindmapId' => null
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
    * deleted  deleted
    * idCollection  idCollection
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeIdCollection  nodeIdCollection
    * projectId  projectId
    * isArchive  isArchive
    * caseName  caseName
    * hasSubMindmap  hasSubMindmap
    * subMindmapId  subMindmapId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'deleted' => 'deleted',
            'idCollection' => 'id_collection',
            'mindmapId' => 'mindmap_id',
            'nodeId' => 'node_id',
            'nodeIdCollection' => 'node_id_collection',
            'projectId' => 'project_id',
            'isArchive' => 'is_archive',
            'caseName' => 'case_name',
            'hasSubMindmap' => 'has_sub_mindmap',
            'subMindmapId' => 'sub_mindmap_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  offset
    * limit  limit
    * deleted  deleted
    * idCollection  idCollection
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeIdCollection  nodeIdCollection
    * projectId  projectId
    * isArchive  isArchive
    * caseName  caseName
    * hasSubMindmap  hasSubMindmap
    * subMindmapId  subMindmapId
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'deleted' => 'setDeleted',
            'idCollection' => 'setIdCollection',
            'mindmapId' => 'setMindmapId',
            'nodeId' => 'setNodeId',
            'nodeIdCollection' => 'setNodeIdCollection',
            'projectId' => 'setProjectId',
            'isArchive' => 'setIsArchive',
            'caseName' => 'setCaseName',
            'hasSubMindmap' => 'setHasSubMindmap',
            'subMindmapId' => 'setSubMindmapId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  offset
    * limit  limit
    * deleted  deleted
    * idCollection  idCollection
    * mindmapId  mindmapId
    * nodeId  nodeId
    * nodeIdCollection  nodeIdCollection
    * projectId  projectId
    * isArchive  isArchive
    * caseName  caseName
    * hasSubMindmap  hasSubMindmap
    * subMindmapId  subMindmapId
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'deleted' => 'getDeleted',
            'idCollection' => 'getIdCollection',
            'mindmapId' => 'getMindmapId',
            'nodeId' => 'getNodeId',
            'nodeIdCollection' => 'getNodeIdCollection',
            'projectId' => 'getProjectId',
            'isArchive' => 'getIsArchive',
            'caseName' => 'getCaseName',
            'hasSubMindmap' => 'getHasSubMindmap',
            'subMindmapId' => 'getSubMindmapId'
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['idCollection'] = isset($data['idCollection']) ? $data['idCollection'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeIdCollection'] = isset($data['nodeIdCollection']) ? $data['nodeIdCollection'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isArchive'] = isset($data['isArchive']) ? $data['isArchive'] : null;
        $this->container['caseName'] = isset($data['caseName']) ? $data['caseName'] : null;
        $this->container['hasSubMindmap'] = isset($data['hasSubMindmap']) ? $data['hasSubMindmap'] : null;
        $this->container['subMindmapId'] = isset($data['subMindmapId']) ? $data['subMindmapId'] : null;
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
    * Gets idCollection
    *  idCollection
    *
    * @return string[]|null
    */
    public function getIdCollection()
    {
        return $this->container['idCollection'];
    }

    /**
    * Sets idCollection
    *
    * @param string[]|null $idCollection idCollection
    *
    * @return $this
    */
    public function setIdCollection($idCollection)
    {
        $this->container['idCollection'] = $idCollection;
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
    * Gets nodeIdCollection
    *  nodeIdCollection
    *
    * @return string[]|null
    */
    public function getNodeIdCollection()
    {
        return $this->container['nodeIdCollection'];
    }

    /**
    * Sets nodeIdCollection
    *
    * @param string[]|null $nodeIdCollection nodeIdCollection
    *
    * @return $this
    */
    public function setNodeIdCollection($nodeIdCollection)
    {
        $this->container['nodeIdCollection'] = $nodeIdCollection;
        return $this;
    }

    /**
    * Gets projectId
    *  projectId
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId projectId
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isArchive
    *  isArchive
    *
    * @return bool|null
    */
    public function getIsArchive()
    {
        return $this->container['isArchive'];
    }

    /**
    * Sets isArchive
    *
    * @param bool|null $isArchive isArchive
    *
    * @return $this
    */
    public function setIsArchive($isArchive)
    {
        $this->container['isArchive'] = $isArchive;
        return $this;
    }

    /**
    * Gets caseName
    *  caseName
    *
    * @return string|null
    */
    public function getCaseName()
    {
        return $this->container['caseName'];
    }

    /**
    * Sets caseName
    *
    * @param string|null $caseName caseName
    *
    * @return $this
    */
    public function setCaseName($caseName)
    {
        $this->container['caseName'] = $caseName;
        return $this;
    }

    /**
    * Gets hasSubMindmap
    *  hasSubMindmap
    *
    * @return bool|null
    */
    public function getHasSubMindmap()
    {
        return $this->container['hasSubMindmap'];
    }

    /**
    * Sets hasSubMindmap
    *
    * @param bool|null $hasSubMindmap hasSubMindmap
    *
    * @return $this
    */
    public function setHasSubMindmap($hasSubMindmap)
    {
        $this->container['hasSubMindmap'] = $hasSubMindmap;
        return $this;
    }

    /**
    * Gets subMindmapId
    *  subMindmapId
    *
    * @return string[]|null
    */
    public function getSubMindmapId()
    {
        return $this->container['subMindmapId'];
    }

    /**
    * Sets subMindmapId
    *
    * @param string[]|null $subMindmapId subMindmapId
    *
    * @return $this
    */
    public function setSubMindmapId($subMindmapId)
    {
        $this->container['subMindmapId'] = $subMindmapId;
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

