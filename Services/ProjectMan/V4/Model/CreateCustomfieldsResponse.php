<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomfieldsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomfieldsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * options  字段选项
    * region  系统字段
    * id  字段ID
    * identifier  字段ID
    * projectId  项目ID
    * trackerId  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * customField  系统字段名
    * type  字段类型
    * name  字段名称
    * sort  系统字段
    * memo  字段描述
    * created  创建时间
    * modified  修改时间
    * isDelete  是否被删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'options' => 'string',
            'region' => 'string',
            'id' => 'int',
            'identifier' => 'string',
            'projectId' => 'int',
            'trackerId' => 'int',
            'customField' => 'string',
            'type' => 'string',
            'name' => 'string',
            'sort' => 'int',
            'memo' => 'string',
            'created' => 'string',
            'modified' => 'string',
            'isDelete' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * options  字段选项
    * region  系统字段
    * id  字段ID
    * identifier  字段ID
    * projectId  项目ID
    * trackerId  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * customField  系统字段名
    * type  字段类型
    * name  字段名称
    * sort  系统字段
    * memo  字段描述
    * created  创建时间
    * modified  修改时间
    * isDelete  是否被删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'options' => null,
        'region' => null,
        'id' => 'int32',
        'identifier' => null,
        'projectId' => 'int32',
        'trackerId' => 'int32',
        'customField' => null,
        'type' => null,
        'name' => null,
        'sort' => 'int32',
        'memo' => null,
        'created' => null,
        'modified' => null,
        'isDelete' => null
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
    * options  字段选项
    * region  系统字段
    * id  字段ID
    * identifier  字段ID
    * projectId  项目ID
    * trackerId  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * customField  系统字段名
    * type  字段类型
    * name  字段名称
    * sort  系统字段
    * memo  字段描述
    * created  创建时间
    * modified  修改时间
    * isDelete  是否被删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'options' => 'options',
            'region' => 'region',
            'id' => 'id',
            'identifier' => 'identifier',
            'projectId' => 'project_id',
            'trackerId' => 'tracker_id',
            'customField' => 'custom_field',
            'type' => 'type',
            'name' => 'name',
            'sort' => 'sort',
            'memo' => 'memo',
            'created' => 'created',
            'modified' => 'modified',
            'isDelete' => 'is_delete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * options  字段选项
    * region  系统字段
    * id  字段ID
    * identifier  字段ID
    * projectId  项目ID
    * trackerId  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * customField  系统字段名
    * type  字段类型
    * name  字段名称
    * sort  系统字段
    * memo  字段描述
    * created  创建时间
    * modified  修改时间
    * isDelete  是否被删除
    *
    * @var string[]
    */
    protected static $setters = [
            'options' => 'setOptions',
            'region' => 'setRegion',
            'id' => 'setId',
            'identifier' => 'setIdentifier',
            'projectId' => 'setProjectId',
            'trackerId' => 'setTrackerId',
            'customField' => 'setCustomField',
            'type' => 'setType',
            'name' => 'setName',
            'sort' => 'setSort',
            'memo' => 'setMemo',
            'created' => 'setCreated',
            'modified' => 'setModified',
            'isDelete' => 'setIsDelete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * options  字段选项
    * region  系统字段
    * id  字段ID
    * identifier  字段ID
    * projectId  项目ID
    * trackerId  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * customField  系统字段名
    * type  字段类型
    * name  字段名称
    * sort  系统字段
    * memo  字段描述
    * created  创建时间
    * modified  修改时间
    * isDelete  是否被删除
    *
    * @var string[]
    */
    protected static $getters = [
            'options' => 'getOptions',
            'region' => 'getRegion',
            'id' => 'getId',
            'identifier' => 'getIdentifier',
            'projectId' => 'getProjectId',
            'trackerId' => 'getTrackerId',
            'customField' => 'getCustomField',
            'type' => 'getType',
            'name' => 'getName',
            'sort' => 'getSort',
            'memo' => 'getMemo',
            'created' => 'getCreated',
            'modified' => 'getModified',
            'isDelete' => 'getIsDelete'
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
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['customField'] = isset($data['customField']) ? $data['customField'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
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
    * Gets options
    *  字段选项
    *
    * @return string|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param string|null $options 字段选项
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets region
    *  系统字段
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 系统字段
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets id
    *  字段ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 字段ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets identifier
    *  字段ID
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier 字段ID
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId 工作项类型id 2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets customField
    *  系统字段名
    *
    * @return string|null
    */
    public function getCustomField()
    {
        return $this->container['customField'];
    }

    /**
    * Sets customField
    *
    * @param string|null $customField 系统字段名
    *
    * @return $this
    */
    public function setCustomField($customField)
    {
        $this->container['customField'] = $customField;
        return $this;
    }

    /**
    * Gets type
    *  字段类型
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
    * @param string|null $type 字段类型
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
    *  字段名称
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
    * @param string|null $name 字段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sort
    *  系统字段
    *
    * @return int|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param int|null $sort 系统字段
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets memo
    *  字段描述
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
    * @param string|null $memo 字段描述
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets created
    *  创建时间
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets modified
    *  修改时间
    *
    * @return string|null
    */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
    * Sets modified
    *
    * @param string|null $modified 修改时间
    *
    * @return $this
    */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;
        return $this;
    }

    /**
    * Gets isDelete
    *  是否被删除
    *
    * @return bool|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param bool|null $isDelete 是否被删除
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
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

