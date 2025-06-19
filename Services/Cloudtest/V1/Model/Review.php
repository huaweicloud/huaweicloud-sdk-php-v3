<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Review implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Review';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * charger  名称
    * createTime  创建时间
    * creator  创建人
    * deleted  是否删除
    * description  描述
    * id  id 主键
    * mindmapId  脑图id
    * nodeId  节点id
    * nodeValue  节点值
    * status  状态
    * type  类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'charger' => 'string',
            'createTime' => 'string',
            'creator' => 'string',
            'deleted' => 'string',
            'description' => 'string',
            'id' => 'string',
            'mindmapId' => 'string',
            'nodeId' => 'string',
            'nodeValue' => 'string',
            'status' => 'string',
            'type' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * charger  名称
    * createTime  创建时间
    * creator  创建人
    * deleted  是否删除
    * description  描述
    * id  id 主键
    * mindmapId  脑图id
    * nodeId  节点id
    * nodeValue  节点值
    * status  状态
    * type  类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'charger' => null,
        'createTime' => null,
        'creator' => null,
        'deleted' => null,
        'description' => null,
        'id' => null,
        'mindmapId' => null,
        'nodeId' => null,
        'nodeValue' => null,
        'status' => null,
        'type' => null,
        'updateTime' => null
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
    * charger  名称
    * createTime  创建时间
    * creator  创建人
    * deleted  是否删除
    * description  描述
    * id  id 主键
    * mindmapId  脑图id
    * nodeId  节点id
    * nodeValue  节点值
    * status  状态
    * type  类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'charger' => 'charger',
            'createTime' => 'create_time',
            'creator' => 'creator',
            'deleted' => 'deleted',
            'description' => 'description',
            'id' => 'id',
            'mindmapId' => 'mindmap_id',
            'nodeId' => 'node_id',
            'nodeValue' => 'node_value',
            'status' => 'status',
            'type' => 'type',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * charger  名称
    * createTime  创建时间
    * creator  创建人
    * deleted  是否删除
    * description  描述
    * id  id 主键
    * mindmapId  脑图id
    * nodeId  节点id
    * nodeValue  节点值
    * status  状态
    * type  类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'charger' => 'setCharger',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'deleted' => 'setDeleted',
            'description' => 'setDescription',
            'id' => 'setId',
            'mindmapId' => 'setMindmapId',
            'nodeId' => 'setNodeId',
            'nodeValue' => 'setNodeValue',
            'status' => 'setStatus',
            'type' => 'setType',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * charger  名称
    * createTime  创建时间
    * creator  创建人
    * deleted  是否删除
    * description  描述
    * id  id 主键
    * mindmapId  脑图id
    * nodeId  节点id
    * nodeValue  节点值
    * status  状态
    * type  类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'charger' => 'getCharger',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'deleted' => 'getDeleted',
            'description' => 'getDescription',
            'id' => 'getId',
            'mindmapId' => 'getMindmapId',
            'nodeId' => 'getNodeId',
            'nodeValue' => 'getNodeValue',
            'status' => 'getStatus',
            'type' => 'getType',
            'updateTime' => 'getUpdateTime'
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
        $this->container['charger'] = isset($data['charger']) ? $data['charger'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeValue'] = isset($data['nodeValue']) ? $data['nodeValue'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets charger
    *  名称
    *
    * @return string|null
    */
    public function getCharger()
    {
        return $this->container['charger'];
    }

    /**
    * Sets charger
    *
    * @param string|null $charger 名称
    *
    * @return $this
    */
    public function setCharger($charger)
    {
        $this->container['charger'] = $charger;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets deleted
    *  是否删除
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
    * @param string|null $deleted 是否删除
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  id 主键
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mindmapId
    *  脑图id
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
    * @param string|null $mindmapId 脑图id
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
    *  节点id
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
    * @param string|null $nodeId 节点id
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
    *  节点值
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
    * @param string|null $nodeValue 节点值
    *
    * @return $this
    */
    public function setNodeValue($nodeValue)
    {
        $this->container['nodeValue'] = $nodeValue;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
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
    *  类型
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
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

