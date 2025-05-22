<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkitemStatusRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkitemStatusRecords';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workItemRecordId  工作项的记录id，一个工作项对应一条记录
    * workItemId  工作项id
    * projectId  devcloud项目的32位id
    * workItemStatuses  操作历史
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workItemRecordId' => 'string',
            'workItemId' => 'string',
            'projectId' => 'string',
            'workItemStatuses' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemStatus[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workItemRecordId  工作项的记录id，一个工作项对应一条记录
    * workItemId  工作项id
    * projectId  devcloud项目的32位id
    * workItemStatuses  操作历史
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workItemRecordId' => null,
        'workItemId' => null,
        'projectId' => null,
        'workItemStatuses' => null
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
    * workItemRecordId  工作项的记录id，一个工作项对应一条记录
    * workItemId  工作项id
    * projectId  devcloud项目的32位id
    * workItemStatuses  操作历史
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workItemRecordId' => 'work_item_record_id',
            'workItemId' => 'work_item_id',
            'projectId' => 'project_id',
            'workItemStatuses' => 'work_item_statuses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workItemRecordId  工作项的记录id，一个工作项对应一条记录
    * workItemId  工作项id
    * projectId  devcloud项目的32位id
    * workItemStatuses  操作历史
    *
    * @var string[]
    */
    protected static $setters = [
            'workItemRecordId' => 'setWorkItemRecordId',
            'workItemId' => 'setWorkItemId',
            'projectId' => 'setProjectId',
            'workItemStatuses' => 'setWorkItemStatuses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workItemRecordId  工作项的记录id，一个工作项对应一条记录
    * workItemId  工作项id
    * projectId  devcloud项目的32位id
    * workItemStatuses  操作历史
    *
    * @var string[]
    */
    protected static $getters = [
            'workItemRecordId' => 'getWorkItemRecordId',
            'workItemId' => 'getWorkItemId',
            'projectId' => 'getProjectId',
            'workItemStatuses' => 'getWorkItemStatuses'
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
        $this->container['workItemRecordId'] = isset($data['workItemRecordId']) ? $data['workItemRecordId'] : null;
        $this->container['workItemId'] = isset($data['workItemId']) ? $data['workItemId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workItemStatuses'] = isset($data['workItemStatuses']) ? $data['workItemStatuses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workItemRecordId']) && (mb_strlen($this->container['workItemRecordId']) > 32)) {
                $invalidProperties[] = "invalid value for 'workItemRecordId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['workItemRecordId']) && (mb_strlen($this->container['workItemRecordId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workItemRecordId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workItemRecordId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['workItemRecordId'])) {
                $invalidProperties[] = "invalid value for 'workItemRecordId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    * Gets workItemRecordId
    *  工作项的记录id，一个工作项对应一条记录
    *
    * @return string|null
    */
    public function getWorkItemRecordId()
    {
        return $this->container['workItemRecordId'];
    }

    /**
    * Sets workItemRecordId
    *
    * @param string|null $workItemRecordId 工作项的记录id，一个工作项对应一条记录
    *
    * @return $this
    */
    public function setWorkItemRecordId($workItemRecordId)
    {
        $this->container['workItemRecordId'] = $workItemRecordId;
        return $this;
    }

    /**
    * Gets workItemId
    *  工作项id
    *
    * @return string|null
    */
    public function getWorkItemId()
    {
        return $this->container['workItemId'];
    }

    /**
    * Sets workItemId
    *
    * @param string|null $workItemId 工作项id
    *
    * @return $this
    */
    public function setWorkItemId($workItemId)
    {
        $this->container['workItemId'] = $workItemId;
        return $this;
    }

    /**
    * Gets projectId
    *  devcloud项目的32位id
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
    * @param string|null $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workItemStatuses
    *  操作历史
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemStatus[]|null
    */
    public function getWorkItemStatuses()
    {
        return $this->container['workItemStatuses'];
    }

    /**
    * Sets workItemStatuses
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemStatus[]|null $workItemStatuses 操作历史
    *
    * @return $this
    */
    public function setWorkItemStatuses($workItemStatuses)
    {
        $this->container['workItemStatuses'] = $workItemStatuses;
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

