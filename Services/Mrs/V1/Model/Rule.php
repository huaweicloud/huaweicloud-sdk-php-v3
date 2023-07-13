<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Rule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Rule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    * description  弹性伸缩规则的说明。  最大长度为1024字符。
    * adjustmentType  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    * coolDownMinutes  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    * scalingAdjustment  单次调整集群节点的个数。  取值范围[1～100]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'adjustmentType' => 'string',
            'coolDownMinutes' => 'int',
            'scalingAdjustment' => 'int',
            'trigger' => '\HuaweiCloud\SDK\Mrs\V1\Model\Trigger'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    * description  弹性伸缩规则的说明。  最大长度为1024字符。
    * adjustmentType  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    * coolDownMinutes  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    * scalingAdjustment  单次调整集群节点的个数。  取值范围[1～100]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'adjustmentType' => null,
        'coolDownMinutes' => 'int32',
        'scalingAdjustment' => 'int32',
        'trigger' => null
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
    * name  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    * description  弹性伸缩规则的说明。  最大长度为1024字符。
    * adjustmentType  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    * coolDownMinutes  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    * scalingAdjustment  单次调整集群节点的个数。  取值范围[1～100]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'adjustmentType' => 'adjustment_type',
            'coolDownMinutes' => 'cool_down_minutes',
            'scalingAdjustment' => 'scaling_adjustment',
            'trigger' => 'trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    * description  弹性伸缩规则的说明。  最大长度为1024字符。
    * adjustmentType  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    * coolDownMinutes  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    * scalingAdjustment  单次调整集群节点的个数。  取值范围[1～100]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'adjustmentType' => 'setAdjustmentType',
            'coolDownMinutes' => 'setCoolDownMinutes',
            'scalingAdjustment' => 'setScalingAdjustment',
            'trigger' => 'setTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    * description  弹性伸缩规则的说明。  最大长度为1024字符。
    * adjustmentType  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    * coolDownMinutes  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    * scalingAdjustment  单次调整集群节点的个数。  取值范围[1～100]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'adjustmentType' => 'getAdjustmentType',
            'coolDownMinutes' => 'getCoolDownMinutes',
            'scalingAdjustment' => 'getScalingAdjustment',
            'trigger' => 'getTrigger'
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
    const ADJUSTMENT_TYPE_SCALE_OUT = 'scale_out';
    const ADJUSTMENT_TYPE_SCALE_IN = 'scale_in';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdjustmentTypeAllowableValues()
    {
        return [
            self::ADJUSTMENT_TYPE_SCALE_OUT,
            self::ADJUSTMENT_TYPE_SCALE_IN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adjustmentType'] = isset($data['adjustmentType']) ? $data['adjustmentType'] : null;
        $this->container['coolDownMinutes'] = isset($data['coolDownMinutes']) ? $data['coolDownMinutes'] : null;
        $this->container['scalingAdjustment'] = isset($data['scalingAdjustment']) ? $data['scalingAdjustment'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adjustmentType'] === null) {
            $invalidProperties[] = "'adjustmentType' can't be null";
        }
            $allowedValues = $this->getAdjustmentTypeAllowableValues();
                if (!is_null($this->container['adjustmentType']) && !in_array($this->container['adjustmentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adjustmentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['coolDownMinutes'] === null) {
            $invalidProperties[] = "'coolDownMinutes' can't be null";
        }
            if (($this->container['coolDownMinutes'] > 10080)) {
                $invalidProperties[] = "invalid value for 'coolDownMinutes', must be smaller than or equal to 10080.";
            }
            if (($this->container['coolDownMinutes'] < 0)) {
                $invalidProperties[] = "invalid value for 'coolDownMinutes', must be bigger than or equal to 0.";
            }
        if ($this->container['scalingAdjustment'] === null) {
            $invalidProperties[] = "'scalingAdjustment' can't be null";
        }
            if (($this->container['scalingAdjustment'] > 100)) {
                $invalidProperties[] = "invalid value for 'scalingAdjustment', must be smaller than or equal to 100.";
            }
            if (($this->container['scalingAdjustment'] < 1)) {
                $invalidProperties[] = "invalid value for 'scalingAdjustment', must be bigger than or equal to 1.";
            }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
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
    * Gets name
    *  弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
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
    * @param string $name 弹性伸缩规则的名称。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  在一个节点组范围内，不允许重名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  弹性伸缩规则的说明。  最大长度为1024字符。
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
    * @param string|null $description 弹性伸缩规则的说明。  最大长度为1024字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adjustmentType
    *  弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    *
    * @return string
    */
    public function getAdjustmentType()
    {
        return $this->container['adjustmentType'];
    }

    /**
    * Sets adjustmentType
    *
    * @param string $adjustmentType 弹性伸缩规则的调整类型，只允许以下类型：  枚举值： - scale_out：扩容 - scale_in：缩容
    *
    * @return $this
    */
    public function setAdjustmentType($adjustmentType)
    {
        $this->container['adjustmentType'] = $adjustmentType;
        return $this;
    }

    /**
    * Gets coolDownMinutes
    *  触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    *
    * @return int
    */
    public function getCoolDownMinutes()
    {
        return $this->container['coolDownMinutes'];
    }

    /**
    * Sets coolDownMinutes
    *
    * @param int $coolDownMinutes 触发弹性伸缩规则后，该集群处于冷却状态（不再执行弹性伸缩操作）的时长，单位为分钟。  取值范围[0～10080]，10080为一周的分钟数。
    *
    * @return $this
    */
    public function setCoolDownMinutes($coolDownMinutes)
    {
        $this->container['coolDownMinutes'] = $coolDownMinutes;
        return $this;
    }

    /**
    * Gets scalingAdjustment
    *  单次调整集群节点的个数。  取值范围[1～100]
    *
    * @return int
    */
    public function getScalingAdjustment()
    {
        return $this->container['scalingAdjustment'];
    }

    /**
    * Sets scalingAdjustment
    *
    * @param int $scalingAdjustment 单次调整集群节点的个数。  取值范围[1～100]
    *
    * @return $this
    */
    public function setScalingAdjustment($scalingAdjustment)
    {
        $this->container['scalingAdjustment'] = $scalingAdjustment;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\Trigger
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\Trigger $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
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

