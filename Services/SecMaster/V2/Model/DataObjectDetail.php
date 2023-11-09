<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataObjectDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataObjectDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * dataObject  dataObject
    * dataclassRef  dataclassRef
    * formatVersion  格式版本
    * id  事件唯一标识，UUID格式，最大36个字符
    * projectId  当前项目的id
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * version  版本
    * workspaceId  当前的工作空间id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'dataObject' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataObject',
            'dataclassRef' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertDetailDataclassRef',
            'formatVersion' => 'int',
            'id' => 'string',
            'projectId' => 'string',
            'updateTime' => 'string',
            'version' => 'int',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * dataObject  dataObject
    * dataclassRef  dataclassRef
    * formatVersion  格式版本
    * id  事件唯一标识，UUID格式，最大36个字符
    * projectId  当前项目的id
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * version  版本
    * workspaceId  当前的工作空间id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'dataObject' => null,
        'dataclassRef' => null,
        'formatVersion' => null,
        'id' => null,
        'projectId' => null,
        'updateTime' => null,
        'version' => null,
        'workspaceId' => null
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
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * dataObject  dataObject
    * dataclassRef  dataclassRef
    * formatVersion  格式版本
    * id  事件唯一标识，UUID格式，最大36个字符
    * projectId  当前项目的id
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * version  版本
    * workspaceId  当前的工作空间id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'dataObject' => 'data_object',
            'dataclassRef' => 'dataclass_ref',
            'formatVersion' => 'format_version',
            'id' => 'id',
            'projectId' => 'project_id',
            'updateTime' => 'update_time',
            'version' => 'version',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * dataObject  dataObject
    * dataclassRef  dataclassRef
    * formatVersion  格式版本
    * id  事件唯一标识，UUID格式，最大36个字符
    * projectId  当前项目的id
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * version  版本
    * workspaceId  当前的工作空间id
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'dataObject' => 'setDataObject',
            'dataclassRef' => 'setDataclassRef',
            'formatVersion' => 'setFormatVersion',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'updateTime' => 'setUpdateTime',
            'version' => 'setVersion',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * dataObject  dataObject
    * dataclassRef  dataclassRef
    * formatVersion  格式版本
    * id  事件唯一标识，UUID格式，最大36个字符
    * projectId  当前项目的id
    * updateTime  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    * version  版本
    * workspaceId  当前的工作空间id
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'dataObject' => 'getDataObject',
            'dataclassRef' => 'getDataclassRef',
            'formatVersion' => 'getFormatVersion',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'updateTime' => 'getUpdateTime',
            'version' => 'getVersion',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['dataObject'] = isset($data['dataObject']) ? $data['dataObject'] : null;
        $this->container['dataclassRef'] = isset($data['dataclassRef']) ? $data['dataclassRef'] : null;
        $this->container['formatVersion'] = isset($data['formatVersion']) ? $data['formatVersion'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] > 999)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] < 0)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 30)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 999)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    * Gets createTime
    *  记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
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
    * @param string|null $createTime 记录时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dataObject
    *  dataObject
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataObject|null
    */
    public function getDataObject()
    {
        return $this->container['dataObject'];
    }

    /**
    * Sets dataObject
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataObject|null $dataObject dataObject
    *
    * @return $this
    */
    public function setDataObject($dataObject)
    {
        $this->container['dataObject'] = $dataObject;
        return $this;
    }

    /**
    * Gets dataclassRef
    *  dataclassRef
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDetailDataclassRef|null
    */
    public function getDataclassRef()
    {
        return $this->container['dataclassRef'];
    }

    /**
    * Sets dataclassRef
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDetailDataclassRef|null $dataclassRef dataclassRef
    *
    * @return $this
    */
    public function setDataclassRef($dataclassRef)
    {
        $this->container['dataclassRef'] = $dataclassRef;
        return $this;
    }

    /**
    * Gets formatVersion
    *  格式版本
    *
    * @return int|null
    */
    public function getFormatVersion()
    {
        return $this->container['formatVersion'];
    }

    /**
    * Sets formatVersion
    *
    * @param int|null $formatVersion 格式版本
    *
    * @return $this
    */
    public function setFormatVersion($formatVersion)
    {
        $this->container['formatVersion'] = $formatVersion;
        return $this;
    }

    /**
    * Gets id
    *  事件唯一标识，UUID格式，最大36个字符
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
    * @param string|null $id 事件唯一标识，UUID格式，最大36个字符
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  当前项目的id
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
    * @param string|null $projectId 当前项目的id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
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
    * @param string|null $updateTime 更新时间，格式ISO8601：YYYY-MM-DDTHH:mm:ss.ms+timezone。时区信息为事件发生时区，无法解析时区的时间，默认时区填东八区
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets workspaceId
    *  当前的工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 当前的工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

