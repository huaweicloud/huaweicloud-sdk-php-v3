<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HpaRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HpaRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
    * hpaId  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    * schedule  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    * disable  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    * status  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hpaId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'schedule' => 'string',
            'targetReplicas' => 'int',
            'disable' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
    * hpaId  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    * schedule  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    * disable  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    * status  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hpaId' => null,
        'name' => null,
        'type' => null,
        'schedule' => null,
        'targetReplicas' => 'int32',
        'disable' => null,
        'status' => null
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
    * id  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
    * hpaId  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    * schedule  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    * disable  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    * status  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hpaId' => 'hpa_id',
            'name' => 'name',
            'type' => 'type',
            'schedule' => 'schedule',
            'targetReplicas' => 'target_replicas',
            'disable' => 'disable',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
    * hpaId  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    * schedule  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    * disable  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    * status  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hpaId' => 'setHpaId',
            'name' => 'setName',
            'type' => 'setType',
            'schedule' => 'setSchedule',
            'targetReplicas' => 'setTargetReplicas',
            'disable' => 'setDisable',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
    * hpaId  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    * schedule  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    * targetReplicas  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    * disable  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    * status  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hpaId' => 'getHpaId',
            'name' => 'getName',
            'type' => 'getType',
            'schedule' => 'getSchedule',
            'targetReplicas' => 'getTargetReplicas',
            'disable' => 'getDisable',
            'status' => 'getStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['targetReplicas'] = isset($data['targetReplicas']) ? $data['targetReplicas'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schedule']) && (mb_strlen($this->container['schedule']) > 64)) {
                $invalidProperties[] = "invalid value for 'schedule', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['schedule']) && (mb_strlen($this->container['schedule']) < 0)) {
                $invalidProperties[] = "invalid value for 'schedule', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetReplicas']) && ($this->container['targetReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'targetReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['targetReplicas']) && ($this->container['targetReplicas'] < 1)) {
                $invalidProperties[] = "invalid value for 'targetReplicas', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['disable']) && (mb_strlen($this->container['disable']) > 16)) {
                $invalidProperties[] = "invalid value for 'disable', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['disable']) && (mb_strlen($this->container['disable']) < 0)) {
                $invalidProperties[] = "invalid value for 'disable', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 自动扩缩容规则ID **取值范围：** 不涉及。
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
    *  **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
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
    * @param string|null $hpaId **参数解释：** 自动扩缩容规则关联的策略ID **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setHpaId($hpaId)
    {
        $this->container['hpaId'] = $hpaId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 自动扩缩容规则名 **取值范围：** 支持4-64个字符，可以包含字母、汉字、数字、中划线和下划线。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
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
    * @param string|null $type **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets schedule
    *  **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param string|null $schedule **参数解释：** 定时自动扩缩容执行的cron表达式，不支持秒，从分钟开始设定 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets targetReplicas
    *  **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
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
    * @param int|null $targetReplicas **参数解释：** 自动扩缩容目标实例数。 **取值范围：** 1-128
    *
    * @return $this
    */
    public function setTargetReplicas($targetReplicas)
    {
        $this->container['targetReplicas'] = $targetReplicas;
        return $this;
    }

    /**
    * Gets disable
    *  **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    *
    * @return string|null
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param string|null $disable **参数解释：** 自动扩缩容规则是否启用。 **取值范围：** - false - true
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
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
    * @param string|null $status **参数解释：** 自动扩缩容规则状态。 **取值范围：** - CREATING：创建中 - CONFIG_SUCCESS：配置成功 - EXECUTE_SUCCESS：执行成功 - DELETED：已删除 - FAILED: 执行失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

