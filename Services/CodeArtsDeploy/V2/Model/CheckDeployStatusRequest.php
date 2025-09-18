<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDeployStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDeployStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  task_id
    * recordId  record_id
    * stepState  是否返回部署任务各步骤的状态， true返回， false不返回
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'recordId' => 'string',
            'stepState' => 'bool',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  task_id
    * recordId  record_id
    * stepState  是否返回部署任务各步骤的状态， true返回， false不返回
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'recordId' => null,
        'stepState' => null,
        'contentType' => null
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
    * taskId  task_id
    * recordId  record_id
    * stepState  是否返回部署任务各步骤的状态， true返回， false不返回
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'recordId' => 'record_id',
            'stepState' => 'step_state',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  task_id
    * recordId  record_id
    * stepState  是否返回部署任务各步骤的状态， true返回， false不返回
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'recordId' => 'setRecordId',
            'stepState' => 'setStepState',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  task_id
    * recordId  record_id
    * stepState  是否返回部署任务各步骤的状态， true返回， false不返回
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'recordId' => 'getRecordId',
            'stepState' => 'getStepState',
            'contentType' => 'getContentType'
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
    const CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8 = 'application/json;charset=utf-8';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8,
            self::CONTENT_TYPE_APPLICATION_JSON,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['stepState'] = isset($data['stepState']) ? $data['stepState'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['taskId']) < 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 32)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 32)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['recordId']) && !preg_match("/^[A-Za-z0-9]{32}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets taskId
    *  task_id
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId task_id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets recordId
    *  record_id
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId record_id
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets stepState
    *  是否返回部署任务各步骤的状态， true返回， false不返回
    *
    * @return bool|null
    */
    public function getStepState()
    {
        return $this->container['stepState'];
    }

    /**
    * Sets stepState
    *
    * @param bool|null $stepState 是否返回部署任务各步骤的状态， true返回， false不返回
    *
    * @return $this
    */
    public function setStepState($stepState)
    {
        $this->container['stepState'] = $stepState;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

