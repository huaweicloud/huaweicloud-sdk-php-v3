<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HpaEventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HpaEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    * hpaId  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    * status  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    * message  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    * currentReplicas  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    * finalReplicas  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    * recordTime  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hpaId' => 'string',
            'status' => 'string',
            'message' => 'string',
            'currentReplicas' => 'int',
            'targetReplicas' => 'int',
            'finalReplicas' => 'int',
            'recordTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    * hpaId  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    * status  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    * message  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    * currentReplicas  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    * finalReplicas  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    * recordTime  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hpaId' => null,
        'status' => null,
        'message' => null,
        'currentReplicas' => 'int32',
        'targetReplicas' => 'int32',
        'finalReplicas' => 'int32',
        'recordTime' => null
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
    * id  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    * hpaId  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    * status  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    * message  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    * currentReplicas  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    * finalReplicas  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    * recordTime  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hpaId' => 'hpa_id',
            'status' => 'status',
            'message' => 'message',
            'currentReplicas' => 'current_replicas',
            'targetReplicas' => 'target_replicas',
            'finalReplicas' => 'final_replicas',
            'recordTime' => 'record_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    * hpaId  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    * status  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    * message  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    * currentReplicas  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    * finalReplicas  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    * recordTime  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hpaId' => 'setHpaId',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'currentReplicas' => 'setCurrentReplicas',
            'targetReplicas' => 'setTargetReplicas',
            'finalReplicas' => 'setFinalReplicas',
            'recordTime' => 'setRecordTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    * hpaId  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    * status  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    * message  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    * currentReplicas  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    * finalReplicas  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    * recordTime  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hpaId' => 'getHpaId',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'currentReplicas' => 'getCurrentReplicas',
            'targetReplicas' => 'getTargetReplicas',
            'finalReplicas' => 'getFinalReplicas',
            'recordTime' => 'getRecordTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hpaId'] = isset($data['hpaId']) ? $data['hpaId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['currentReplicas'] = isset($data['currentReplicas']) ? $data['currentReplicas'] : null;
        $this->container['targetReplicas'] = isset($data['targetReplicas']) ? $data['targetReplicas'] : null;
        $this->container['finalReplicas'] = isset($data['finalReplicas']) ? $data['finalReplicas'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hpaId']) && (mb_strlen($this->container['hpaId']) > 255)) {
                $invalidProperties[] = "invalid value for 'hpaId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['hpaId']) && (mb_strlen($this->container['hpaId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hpaId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 512)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentReplicas']) && ($this->container['currentReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'currentReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentReplicas']) && ($this->container['currentReplicas'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentReplicas', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetReplicas']) && ($this->container['targetReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'targetReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['targetReplicas']) && ($this->container['targetReplicas'] < 0)) {
                $invalidProperties[] = "invalid value for 'targetReplicas', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finalReplicas']) && ($this->container['finalReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'finalReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['finalReplicas']) && ($this->container['finalReplicas'] < 0)) {
                $invalidProperties[] = "invalid value for 'finalReplicas', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recordTime']) && (mb_strlen($this->container['recordTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'recordTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['recordTime']) && (mb_strlen($this->container['recordTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'recordTime', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
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
    * @param string|null $id **参数解释：** 自动扩缩容策略事件ID **取值范围：** 事件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets hpaId
    *  **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    *
    * @return string|null
    */
    public function getHpaId()
    {
        return $this->container['hpaId'];
    }

    /**
    * Sets hpaId
    *
    * @param string|null $hpaId **参数解释：** 自动扩缩容策略ID **取值范围：** 策略ID
    *
    * @return $this
    */
    public function setHpaId($hpaId)
    {
        $this->container['hpaId'] = $hpaId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
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
    * @param string|null $status **参数解释：** 自动扩缩容事件状态。 **取值范围：** - SUCCESS: 成功 - FAILED: 失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 自动扩缩容规则执行信息。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets currentReplicas
    *  **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getCurrentReplicas()
    {
        return $this->container['currentReplicas'];
    }

    /**
    * Sets currentReplicas
    *
    * @param int|null $currentReplicas **参数解释：** 扩缩容前实例数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCurrentReplicas($currentReplicas)
    {
        $this->container['currentReplicas'] = $currentReplicas;
        return $this;
    }

    /**
    * Gets targetReplicas
    *  **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getTargetReplicas()
    {
        return $this->container['targetReplicas'];
    }

    /**
    * Sets targetReplicas
    *
    * @param int|null $targetReplicas **参数解释：** 预设目标实例数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTargetReplicas($targetReplicas)
    {
        $this->container['targetReplicas'] = $targetReplicas;
        return $this;
    }

    /**
    * Gets finalReplicas
    *  **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getFinalReplicas()
    {
        return $this->container['finalReplicas'];
    }

    /**
    * Sets finalReplicas
    *
    * @param int|null $finalReplicas **参数解释：** 扩缩容后实例数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFinalReplicas($finalReplicas)
    {
        $this->container['finalReplicas'] = $finalReplicas;
        return $this;
    }

    /**
    * Gets recordTime
    *  **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @return string|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param string|null $recordTime **参数解释：** 执行记录时间。 **取值范围：** 2025-05-20 10:05:55
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
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

