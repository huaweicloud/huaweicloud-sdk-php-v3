<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MindmapBackup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MindmapBackup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bakName  备份名称
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * id  id 主键
    * memo  备注
    * mindmap  脑图JSON
    * mindmapId  脑图Id
    * type  备份类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bakName' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'id' => 'string',
            'memo' => 'string',
            'mindmap' => 'string',
            'mindmapId' => 'string',
            'type' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bakName  备份名称
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * id  id 主键
    * memo  备注
    * mindmap  脑图JSON
    * mindmapId  脑图Id
    * type  备份类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bakName' => null,
        'createTime' => null,
        'creatorName' => null,
        'creatorNum' => null,
        'id' => null,
        'memo' => null,
        'mindmap' => null,
        'mindmapId' => null,
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
    * bakName  备份名称
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * id  id 主键
    * memo  备注
    * mindmap  脑图JSON
    * mindmapId  脑图Id
    * type  备份类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bakName' => 'bak_name',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'id' => 'id',
            'memo' => 'memo',
            'mindmap' => 'mindmap',
            'mindmapId' => 'mindmap_id',
            'type' => 'type',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bakName  备份名称
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * id  id 主键
    * memo  备注
    * mindmap  脑图JSON
    * mindmapId  脑图Id
    * type  备份类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'bakName' => 'setBakName',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'id' => 'setId',
            'memo' => 'setMemo',
            'mindmap' => 'setMindmap',
            'mindmapId' => 'setMindmapId',
            'type' => 'setType',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bakName  备份名称
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * id  id 主键
    * memo  备注
    * mindmap  脑图JSON
    * mindmapId  脑图Id
    * type  备份类型
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'bakName' => 'getBakName',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'id' => 'getId',
            'memo' => 'getMemo',
            'mindmap' => 'getMindmap',
            'mindmapId' => 'getMindmapId',
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
        $this->container['bakName'] = isset($data['bakName']) ? $data['bakName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['mindmap'] = isset($data['mindmap']) ? $data['mindmap'] : null;
        $this->container['mindmapId'] = isset($data['mindmapId']) ? $data['mindmapId'] : null;
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
    * Gets bakName
    *  备份名称
    *
    * @return string|null
    */
    public function getBakName()
    {
        return $this->container['bakName'];
    }

    /**
    * Sets bakName
    *
    * @param string|null $bakName 备份名称
    *
    * @return $this
    */
    public function setBakName($bakName)
    {
        $this->container['bakName'] = $bakName;
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
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorNum
    *  创建人工号
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
    * @param string|null $creatorNum 创建人工号
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
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
    * Gets memo
    *  备注
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 备注
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets mindmap
    *  脑图JSON
    *
    * @return string|null
    */
    public function getMindmap()
    {
        return $this->container['mindmap'];
    }

    /**
    * Sets mindmap
    *
    * @param string|null $mindmap 脑图JSON
    *
    * @return $this
    */
    public function setMindmap($mindmap)
    {
        $this->container['mindmap'] = $mindmap;
        return $this;
    }

    /**
    * Gets mindmapId
    *  脑图Id
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
    * @param string|null $mindmapId 脑图Id
    *
    * @return $this
    */
    public function setMindmapId($mindmapId)
    {
        $this->container['mindmapId'] = $mindmapId;
        return $this;
    }

    /**
    * Gets type
    *  备份类型
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
    * @param string|null $type 备份类型
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

