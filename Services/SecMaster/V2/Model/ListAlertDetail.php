<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataObject  dataObject
    * createTime  Create time
    * updateTime  Update time
    * projectId  Id value
    * workspaceId  Id value
    * id  The name, display only
    * type  The name, display only
    * version  The name, display only
    * formatVersion  The name, display only
    * dataclassRef  dataclassRef
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataObject' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRsp',
            'createTime' => 'string',
            'updateTime' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'id' => 'string',
            'type' => 'string',
            'version' => 'int',
            'formatVersion' => 'int',
            'dataclassRef' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertDetailDataclassRef'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataObject  dataObject
    * createTime  Create time
    * updateTime  Update time
    * projectId  Id value
    * workspaceId  Id value
    * id  The name, display only
    * type  The name, display only
    * version  The name, display only
    * formatVersion  The name, display only
    * dataclassRef  dataclassRef
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataObject' => null,
        'createTime' => null,
        'updateTime' => null,
        'projectId' => null,
        'workspaceId' => null,
        'id' => null,
        'type' => null,
        'version' => null,
        'formatVersion' => null,
        'dataclassRef' => null
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
    * dataObject  dataObject
    * createTime  Create time
    * updateTime  Update time
    * projectId  Id value
    * workspaceId  Id value
    * id  The name, display only
    * type  The name, display only
    * version  The name, display only
    * formatVersion  The name, display only
    * dataclassRef  dataclassRef
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataObject' => 'data_object',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'id' => 'id',
            'type' => 'type',
            'version' => 'version',
            'formatVersion' => 'format_version',
            'dataclassRef' => 'dataclass_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataObject  dataObject
    * createTime  Create time
    * updateTime  Update time
    * projectId  Id value
    * workspaceId  Id value
    * id  The name, display only
    * type  The name, display only
    * version  The name, display only
    * formatVersion  The name, display only
    * dataclassRef  dataclassRef
    *
    * @var string[]
    */
    protected static $setters = [
            'dataObject' => 'setDataObject',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'id' => 'setId',
            'type' => 'setType',
            'version' => 'setVersion',
            'formatVersion' => 'setFormatVersion',
            'dataclassRef' => 'setDataclassRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataObject  dataObject
    * createTime  Create time
    * updateTime  Update time
    * projectId  Id value
    * workspaceId  Id value
    * id  The name, display only
    * type  The name, display only
    * version  The name, display only
    * formatVersion  The name, display only
    * dataclassRef  dataclassRef
    *
    * @var string[]
    */
    protected static $getters = [
            'dataObject' => 'getDataObject',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'id' => 'getId',
            'type' => 'getType',
            'version' => 'getVersion',
            'formatVersion' => 'getFormatVersion',
            'dataclassRef' => 'getDataclassRef'
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
        $this->container['dataObject'] = isset($data['dataObject']) ? $data['dataObject'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['formatVersion'] = isset($data['formatVersion']) ? $data['formatVersion'] : null;
        $this->container['dataclassRef'] = isset($data['dataclassRef']) ? $data['dataclassRef'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 1024)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 1024)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 1024)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] > 1024)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] < 0)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be bigger than or equal to 0.";
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
    * Gets dataObject
    *  dataObject
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRsp|null
    */
    public function getDataObject()
    {
        return $this->container['dataObject'];
    }

    /**
    * Sets dataObject
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ListAlertRsp|null $dataObject dataObject
    *
    * @return $this
    */
    public function setDataObject($dataObject)
    {
        $this->container['dataObject'] = $dataObject;
        return $this;
    }

    /**
    * Gets createTime
    *  Create time
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
    * @param string|null $createTime Create time
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  Update time
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
    * @param string|null $updateTime Update time
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets projectId
    *  Id value
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
    * @param string|null $projectId Id value
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  Id value
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
    * @param string|null $workspaceId Id value
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets id
    *  The name, display only
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
    * @param string|null $id The name, display only
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  The name, display only
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
    * @param string|null $type The name, display only
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  The name, display only
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
    * @param int|null $version The name, display only
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets formatVersion
    *  The name, display only
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
    * @param int|null $formatVersion The name, display only
    *
    * @return $this
    */
    public function setFormatVersion($formatVersion)
    {
        $this->container['formatVersion'] = $formatVersion;
        return $this;
    }

    /**
    * Gets dataclassRef
    *  dataclassRef
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertDetailDataclassRef|null
    */
    public function getDataclassRef()
    {
        return $this->container['dataclassRef'];
    }

    /**
    * Sets dataclassRef
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAlertDetailDataclassRef|null $dataclassRef dataclassRef
    *
    * @return $this
    */
    public function setDataclassRef($dataclassRef)
    {
        $this->container['dataclassRef'] = $dataclassRef;
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

