<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptOrderOperationBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptOrderOperationBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchIndex  适用于批次操作时
    * instanceId  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    * operationType  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchIndex' => 'int',
            'instanceId' => 'int',
            'operationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchIndex  适用于批次操作时
    * instanceId  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    * operationType  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchIndex' => 'int32',
        'instanceId' => 'int64',
        'operationType' => null
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
    * batchIndex  适用于批次操作时
    * instanceId  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    * operationType  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchIndex' => 'batch_index',
            'instanceId' => 'instance_id',
            'operationType' => 'operation_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchIndex  适用于批次操作时
    * instanceId  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    * operationType  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @var string[]
    */
    protected static $setters = [
            'batchIndex' => 'setBatchIndex',
            'instanceId' => 'setInstanceId',
            'operationType' => 'setOperationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchIndex  适用于批次操作时
    * instanceId  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    * operationType  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @var string[]
    */
    protected static $getters = [
            'batchIndex' => 'getBatchIndex',
            'instanceId' => 'getInstanceId',
            'operationType' => 'getOperationType'
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
    const OPERATION_TYPE_CANCEL_INSTANCE = 'CANCEL_INSTANCE';
    const OPERATION_TYPE_SKIP_BATCH = 'SKIP_BATCH';
    const OPERATION_TYPE_CANCEL_ORDER = 'CANCEL_ORDER';
    const OPERATION_TYPE_PAUSE_ORDER = 'PAUSE_ORDER';
    const OPERATION_TYPE_CONTINUE_ORDER = 'CONTINUE_ORDER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_CANCEL_INSTANCE,
            self::OPERATION_TYPE_SKIP_BATCH,
            self::OPERATION_TYPE_CANCEL_ORDER,
            self::OPERATION_TYPE_PAUSE_ORDER,
            self::OPERATION_TYPE_CONTINUE_ORDER,
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
        $this->container['batchIndex'] = isset($data['batchIndex']) ? $data['batchIndex'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['batchIndex']) && ($this->container['batchIndex'] > 20)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['batchIndex']) && ($this->container['batchIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'batchIndex', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && ($this->container['instanceId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'instanceId', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['instanceId']) && ($this->container['instanceId'] < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', must be bigger than or equal to 1.";
            }
        if ($this->container['operationType'] === null) {
            $invalidProperties[] = "'operationType' can't be null";
        }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
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
    * Gets batchIndex
    *  适用于批次操作时
    *
    * @return int|null
    */
    public function getBatchIndex()
    {
        return $this->container['batchIndex'];
    }

    /**
    * Sets batchIndex
    *
    * @param int|null $batchIndex 适用于批次操作时
    *
    * @return $this
    */
    public function setBatchIndex($batchIndex)
    {
        $this->container['batchIndex'] = $batchIndex;
        return $this;
    }

    /**
    * Gets instanceId
    *  适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 适用于实例操作时 非script_execute_instance_do中iD，需要新增字段
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @return string
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string $operationType 操作类型：取消实例、跳过批次、取消整个工单、暂停整个工单、继续整个工单 CANCEL_INSTANCE：取消实例 SKIP_BATCH：跳过批次 CANCEL_ORDER：取消整个工单 PAUSE_ORDER：暂停整个工单 CONTINUE_ORDER：继续整个工单
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
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

