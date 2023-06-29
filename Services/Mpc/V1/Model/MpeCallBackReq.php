<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MpeCallBackReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MpeCallBackReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  任务类型
    * taskId  任务ID。
    * status  任务状态。
    * completeRatio  任务完成进度百分比值。
    * description  任务执行描述。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'taskId' => 'string',
            'status' => 'string',
            'completeRatio' => 'int',
            'description' => 'string',
            'metaData' => '\HuaweiCloud\SDK\Mpc\V1\Model\MpeMetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  任务类型
    * taskId  任务ID。
    * status  任务状态。
    * completeRatio  任务完成进度百分比值。
    * description  任务执行描述。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'taskId' => null,
        'status' => null,
        'completeRatio' => 'int32',
        'description' => null,
        'metaData' => null
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
    * taskType  任务类型
    * taskId  任务ID。
    * status  任务状态。
    * completeRatio  任务完成进度百分比值。
    * description  任务执行描述。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'taskId' => 'task_id',
            'status' => 'status',
            'completeRatio' => 'complete_ratio',
            'description' => 'description',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  任务类型
    * taskId  任务ID。
    * status  任务状态。
    * completeRatio  任务完成进度百分比值。
    * description  任务执行描述。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'completeRatio' => 'setCompleteRatio',
            'description' => 'setDescription',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  任务类型
    * taskId  任务ID。
    * status  任务状态。
    * completeRatio  任务完成进度百分比值。
    * description  任务执行描述。
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'completeRatio' => 'getCompleteRatio',
            'description' => 'getDescription',
            'metaData' => 'getMetaData'
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
    const TASK_TYPE_CONCAT = 'CONCAT';
    const TASK_TYPE_AUDIO = 'AUDIO';
    const TASK_TYPE_CUT = 'CUT';
    const TASK_TYPE_PARSE = 'PARSE';
    const TASK_TYPE_MD5 = 'MD5';
    const TASK_TYPE_SNAPSHOT = 'SNAPSHOT';
    const TASK_TYPE_REMUX = 'REMUX';
    const TASK_TYPE_ANIMATION = 'ANIMATION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_CONCAT,
            self::TASK_TYPE_AUDIO,
            self::TASK_TYPE_CUT,
            self::TASK_TYPE_PARSE,
            self::TASK_TYPE_MD5,
            self::TASK_TYPE_SNAPSHOT,
            self::TASK_TYPE_REMUX,
            self::TASK_TYPE_ANIMATION,
        ];
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['completeRatio'] = isset($data['completeRatio']) ? $data['completeRatio'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 16)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['completeRatio']) && ($this->container['completeRatio'] > 100)) {
                $invalidProperties[] = "invalid value for 'completeRatio', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['completeRatio']) && ($this->container['completeRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'completeRatio', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets taskType
    *  任务类型
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
    * @param string|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。
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
    * @param string|null $status 任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets completeRatio
    *  任务完成进度百分比值。
    *
    * @return int|null
    */
    public function getCompleteRatio()
    {
        return $this->container['completeRatio'];
    }

    /**
    * Sets completeRatio
    *
    * @param int|null $completeRatio 任务完成进度百分比值。
    *
    * @return $this
    */
    public function setCompleteRatio($completeRatio)
    {
        $this->container['completeRatio'] = $completeRatio;
        return $this;
    }

    /**
    * Gets description
    *  任务执行描述。
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
    * @param string|null $description 任务执行描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MpeMetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MpeMetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

