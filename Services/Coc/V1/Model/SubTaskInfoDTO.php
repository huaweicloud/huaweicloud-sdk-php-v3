<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subTaskType  子任务类型
    * subAssociatedTaskId  作业、脚本的id
    * subAssociatedTaskName  作业、脚本的名称
    * subAssociatedTaskType  作业、脚本的分类：自定义、公共
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subTaskType' => 'string',
            'subAssociatedTaskId' => 'string',
            'subAssociatedTaskName' => 'string',
            'subAssociatedTaskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subTaskType  子任务类型
    * subAssociatedTaskId  作业、脚本的id
    * subAssociatedTaskName  作业、脚本的名称
    * subAssociatedTaskType  作业、脚本的分类：自定义、公共
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subTaskType' => null,
        'subAssociatedTaskId' => null,
        'subAssociatedTaskName' => null,
        'subAssociatedTaskType' => null
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
    * subTaskType  子任务类型
    * subAssociatedTaskId  作业、脚本的id
    * subAssociatedTaskName  作业、脚本的名称
    * subAssociatedTaskType  作业、脚本的分类：自定义、公共
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subTaskType' => 'sub_task_type',
            'subAssociatedTaskId' => 'sub_associated_task_id',
            'subAssociatedTaskName' => 'sub_associated_task_name',
            'subAssociatedTaskType' => 'sub_associated_task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subTaskType  子任务类型
    * subAssociatedTaskId  作业、脚本的id
    * subAssociatedTaskName  作业、脚本的名称
    * subAssociatedTaskType  作业、脚本的分类：自定义、公共
    *
    * @var string[]
    */
    protected static $setters = [
            'subTaskType' => 'setSubTaskType',
            'subAssociatedTaskId' => 'setSubAssociatedTaskId',
            'subAssociatedTaskName' => 'setSubAssociatedTaskName',
            'subAssociatedTaskType' => 'setSubAssociatedTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subTaskType  子任务类型
    * subAssociatedTaskId  作业、脚本的id
    * subAssociatedTaskName  作业、脚本的名称
    * subAssociatedTaskType  作业、脚本的分类：自定义、公共
    *
    * @var string[]
    */
    protected static $getters = [
            'subTaskType' => 'getSubTaskType',
            'subAssociatedTaskId' => 'getSubAssociatedTaskId',
            'subAssociatedTaskName' => 'getSubAssociatedTaskName',
            'subAssociatedTaskType' => 'getSubAssociatedTaskType'
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
        $this->container['subTaskType'] = isset($data['subTaskType']) ? $data['subTaskType'] : null;
        $this->container['subAssociatedTaskId'] = isset($data['subAssociatedTaskId']) ? $data['subAssociatedTaskId'] : null;
        $this->container['subAssociatedTaskName'] = isset($data['subAssociatedTaskName']) ? $data['subAssociatedTaskName'] : null;
        $this->container['subAssociatedTaskType'] = isset($data['subAssociatedTaskType']) ? $data['subAssociatedTaskType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subAssociatedTaskId']) && (mb_strlen($this->container['subAssociatedTaskId']) > 100)) {
                $invalidProperties[] = "invalid value for 'subAssociatedTaskId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['subAssociatedTaskId']) && (mb_strlen($this->container['subAssociatedTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subAssociatedTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subAssociatedTaskName']) && (mb_strlen($this->container['subAssociatedTaskName']) > 255)) {
                $invalidProperties[] = "invalid value for 'subAssociatedTaskName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['subAssociatedTaskName']) && (mb_strlen($this->container['subAssociatedTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'subAssociatedTaskName', the character length must be bigger than or equal to 0.";
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
    * Gets subTaskType
    *  子任务类型
    *
    * @return string|null
    */
    public function getSubTaskType()
    {
        return $this->container['subTaskType'];
    }

    /**
    * Sets subTaskType
    *
    * @param string|null $subTaskType 子任务类型
    *
    * @return $this
    */
    public function setSubTaskType($subTaskType)
    {
        $this->container['subTaskType'] = $subTaskType;
        return $this;
    }

    /**
    * Gets subAssociatedTaskId
    *  作业、脚本的id
    *
    * @return string|null
    */
    public function getSubAssociatedTaskId()
    {
        return $this->container['subAssociatedTaskId'];
    }

    /**
    * Sets subAssociatedTaskId
    *
    * @param string|null $subAssociatedTaskId 作业、脚本的id
    *
    * @return $this
    */
    public function setSubAssociatedTaskId($subAssociatedTaskId)
    {
        $this->container['subAssociatedTaskId'] = $subAssociatedTaskId;
        return $this;
    }

    /**
    * Gets subAssociatedTaskName
    *  作业、脚本的名称
    *
    * @return string|null
    */
    public function getSubAssociatedTaskName()
    {
        return $this->container['subAssociatedTaskName'];
    }

    /**
    * Sets subAssociatedTaskName
    *
    * @param string|null $subAssociatedTaskName 作业、脚本的名称
    *
    * @return $this
    */
    public function setSubAssociatedTaskName($subAssociatedTaskName)
    {
        $this->container['subAssociatedTaskName'] = $subAssociatedTaskName;
        return $this;
    }

    /**
    * Gets subAssociatedTaskType
    *  作业、脚本的分类：自定义、公共
    *
    * @return string|null
    */
    public function getSubAssociatedTaskType()
    {
        return $this->container['subAssociatedTaskType'];
    }

    /**
    * Sets subAssociatedTaskType
    *
    * @param string|null $subAssociatedTaskType 作业、脚本的分类：自定义、公共
    *
    * @return $this
    */
    public function setSubAssociatedTaskType($subAssociatedTaskType)
    {
        $this->container['subAssociatedTaskType'] = $subAssociatedTaskType;
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

