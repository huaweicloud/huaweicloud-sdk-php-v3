<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashboardDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashboardDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建者
    * dataType  数据类型：0=用例成功率；1=用例时长
    * id  唯一ID，主键
    * name  看板标题
    * serviceId  服务ID
    * taskIds  任务ID列表
    * taskType  任务类型，仅支持持续拨测和冒烟测试
    * updateTime  修改时间
    * updateUser  修改者
    * viewType  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'createUser' => 'string',
            'dataType' => 'string',
            'id' => 'string',
            'name' => 'string',
            'serviceId' => 'string',
            'taskIds' => 'string[]',
            'taskType' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string',
            'viewType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建者
    * dataType  数据类型：0=用例成功率；1=用例时长
    * id  唯一ID，主键
    * name  看板标题
    * serviceId  服务ID
    * taskIds  任务ID列表
    * taskType  任务类型，仅支持持续拨测和冒烟测试
    * updateTime  修改时间
    * updateUser  修改者
    * viewType  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'createUser' => null,
        'dataType' => null,
        'id' => null,
        'name' => null,
        'serviceId' => null,
        'taskIds' => null,
        'taskType' => null,
        'updateTime' => 'int64',
        'updateUser' => null,
        'viewType' => null
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
    * createTime  创建时间
    * createUser  创建者
    * dataType  数据类型：0=用例成功率；1=用例时长
    * id  唯一ID，主键
    * name  看板标题
    * serviceId  服务ID
    * taskIds  任务ID列表
    * taskType  任务类型，仅支持持续拨测和冒烟测试
    * updateTime  修改时间
    * updateUser  修改者
    * viewType  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'dataType' => 'data_type',
            'id' => 'id',
            'name' => 'name',
            'serviceId' => 'service_id',
            'taskIds' => 'task_ids',
            'taskType' => 'task_type',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'viewType' => 'view_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * createUser  创建者
    * dataType  数据类型：0=用例成功率；1=用例时长
    * id  唯一ID，主键
    * name  看板标题
    * serviceId  服务ID
    * taskIds  任务ID列表
    * taskType  任务类型，仅支持持续拨测和冒烟测试
    * updateTime  修改时间
    * updateUser  修改者
    * viewType  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'dataType' => 'setDataType',
            'id' => 'setId',
            'name' => 'setName',
            'serviceId' => 'setServiceId',
            'taskIds' => 'setTaskIds',
            'taskType' => 'setTaskType',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'viewType' => 'setViewType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * createUser  创建者
    * dataType  数据类型：0=用例成功率；1=用例时长
    * id  唯一ID，主键
    * name  看板标题
    * serviceId  服务ID
    * taskIds  任务ID列表
    * taskType  任务类型，仅支持持续拨测和冒烟测试
    * updateTime  修改时间
    * updateUser  修改者
    * viewType  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'dataType' => 'getDataType',
            'id' => 'getId',
            'name' => 'getName',
            'serviceId' => 'getServiceId',
            'taskIds' => 'getTaskIds',
            'taskType' => 'getTaskType',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'viewType' => 'getViewType'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
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
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型：0=用例成功率；1=用例时长
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据类型：0=用例成功率；1=用例时长
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets id
    *  唯一ID，主键
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
    * @param string|null $id 唯一ID，主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  看板标题
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
    * @param string|null $name 看板标题
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务ID
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务ID
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets taskIds
    *  任务ID列表
    *
    * @return string[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[]|null $taskIds 任务ID列表
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，仅支持持续拨测和冒烟测试
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型，仅支持持续拨测和冒烟测试
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  修改者
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 修改者
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets viewType
    *  看板类型：0=折线图；1=散点图；2=饼图
    *
    * @return string|null
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param string|null $viewType 看板类型：0=折线图；1=散点图；2=饼图
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
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

