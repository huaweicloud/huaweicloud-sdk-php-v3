<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetSelection  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    * targetResource  targetResource
    * targetInstances  实例信息
    * orderNo  步骤号
    * batchStrategy  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    * subTargetInstances  目标实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetSelection' => 'string',
            'targetResource' => '\HuaweiCloud\SDK\Coc\V1\Model\TargetResource',
            'targetInstances' => 'string',
            'orderNo' => 'int',
            'batchStrategy' => 'string',
            'subTargetInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetSelection  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    * targetResource  targetResource
    * targetInstances  实例信息
    * orderNo  步骤号
    * batchStrategy  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    * subTargetInstances  目标实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetSelection' => null,
        'targetResource' => null,
        'targetInstances' => null,
        'orderNo' => 'int32',
        'batchStrategy' => null,
        'subTargetInstances' => null
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
    * targetSelection  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    * targetResource  targetResource
    * targetInstances  实例信息
    * orderNo  步骤号
    * batchStrategy  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    * subTargetInstances  目标实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetSelection' => 'target_selection',
            'targetResource' => 'target_resource',
            'targetInstances' => 'target_instances',
            'orderNo' => 'order_no',
            'batchStrategy' => 'batch_strategy',
            'subTargetInstances' => 'sub_target_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetSelection  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    * targetResource  targetResource
    * targetInstances  实例信息
    * orderNo  步骤号
    * batchStrategy  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    * subTargetInstances  目标实例
    *
    * @var string[]
    */
    protected static $setters = [
            'targetSelection' => 'setTargetSelection',
            'targetResource' => 'setTargetResource',
            'targetInstances' => 'setTargetInstances',
            'orderNo' => 'setOrderNo',
            'batchStrategy' => 'setBatchStrategy',
            'subTargetInstances' => 'setSubTargetInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetSelection  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    * targetResource  targetResource
    * targetInstances  实例信息
    * orderNo  步骤号
    * batchStrategy  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    * subTargetInstances  目标实例
    *
    * @var string[]
    */
    protected static $getters = [
            'targetSelection' => 'getTargetSelection',
            'targetResource' => 'getTargetResource',
            'targetInstances' => 'getTargetInstances',
            'orderNo' => 'getOrderNo',
            'batchStrategy' => 'getBatchStrategy',
            'subTargetInstances' => 'getSubTargetInstances'
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
    const TARGET_SELECTION_ALL = 'ALL';
    const TARGET_SELECTION_MANUAL = 'MANUAL';
    const TARGET_SELECTION_NONE = 'NONE';
    const BATCH_STRATEGY_AUTO_BATCH = 'AUTO_BATCH';
    const BATCH_STRATEGY_MANUAL_BATCH = 'MANUAL_BATCH';
    const BATCH_STRATEGY_NONE = 'NONE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetSelectionAllowableValues()
    {
        return [
            self::TARGET_SELECTION_ALL,
            self::TARGET_SELECTION_MANUAL,
            self::TARGET_SELECTION_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBatchStrategyAllowableValues()
    {
        return [
            self::BATCH_STRATEGY_AUTO_BATCH,
            self::BATCH_STRATEGY_MANUAL_BATCH,
            self::BATCH_STRATEGY_NONE,
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
        $this->container['targetSelection'] = isset($data['targetSelection']) ? $data['targetSelection'] : null;
        $this->container['targetResource'] = isset($data['targetResource']) ? $data['targetResource'] : null;
        $this->container['targetInstances'] = isset($data['targetInstances']) ? $data['targetInstances'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['batchStrategy'] = isset($data['batchStrategy']) ? $data['batchStrategy'] : null;
        $this->container['subTargetInstances'] = isset($data['subTargetInstances']) ? $data['subTargetInstances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetSelection'] === null) {
            $invalidProperties[] = "'targetSelection' can't be null";
        }
            $allowedValues = $this->getTargetSelectionAllowableValues();
                if (!is_null($this->container['targetSelection']) && !in_array($this->container['targetSelection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetSelection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['targetSelection']) > 32)) {
                $invalidProperties[] = "invalid value for 'targetSelection', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['targetSelection']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetSelection', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetInstances']) && (mb_strlen($this->container['targetInstances']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'targetInstances', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['targetInstances']) && (mb_strlen($this->container['targetInstances']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetInstances', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['orderNo'] === null) {
            $invalidProperties[] = "'orderNo' can't be null";
        }
            if (($this->container['orderNo'] > 10000)) {
                $invalidProperties[] = "invalid value for 'orderNo', must be smaller than or equal to 10000.";
            }
            if (($this->container['orderNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'orderNo', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBatchStrategyAllowableValues();
                if (!is_null($this->container['batchStrategy']) && !in_array($this->container['batchStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'batchStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['batchStrategy']) && (mb_strlen($this->container['batchStrategy']) > 32)) {
                $invalidProperties[] = "invalid value for 'batchStrategy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['batchStrategy']) && (mb_strlen($this->container['batchStrategy']) < 0)) {
                $invalidProperties[] = "invalid value for 'batchStrategy', the character length must be bigger than or equal to 0.";
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
    * Gets targetSelection
    *  目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    *
    * @return string
    */
    public function getTargetSelection()
    {
        return $this->container['targetSelection'];
    }

    /**
    * Sets targetSelection
    *
    * @param string $targetSelection 目标选择方式，枚举值：ALL 全部实例，MANUAL 手动选择, NONE
    *
    * @return $this
    */
    public function setTargetSelection($targetSelection)
    {
        $this->container['targetSelection'] = $targetSelection;
        return $this;
    }

    /**
    * Gets targetResource
    *  targetResource
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TargetResource|null
    */
    public function getTargetResource()
    {
        return $this->container['targetResource'];
    }

    /**
    * Sets targetResource
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TargetResource|null $targetResource targetResource
    *
    * @return $this
    */
    public function setTargetResource($targetResource)
    {
        $this->container['targetResource'] = $targetResource;
        return $this;
    }

    /**
    * Gets targetInstances
    *  实例信息
    *
    * @return string|null
    */
    public function getTargetInstances()
    {
        return $this->container['targetInstances'];
    }

    /**
    * Sets targetInstances
    *
    * @param string|null $targetInstances 实例信息
    *
    * @return $this
    */
    public function setTargetInstances($targetInstances)
    {
        $this->container['targetInstances'] = $targetInstances;
        return $this;
    }

    /**
    * Gets orderNo
    *  步骤号
    *
    * @return int
    */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
    * Sets orderNo
    *
    * @param int $orderNo 步骤号
    *
    * @return $this
    */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;
        return $this;
    }

    /**
    * Gets batchStrategy
    *  实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    *
    * @return string|null
    */
    public function getBatchStrategy()
    {
        return $this->container['batchStrategy'];
    }

    /**
    * Sets batchStrategy
    *
    * @param string|null $batchStrategy 实例分批策略(AUTO_BATCH,MANUAL_BATCH,NONE)
    *
    * @return $this
    */
    public function setBatchStrategy($batchStrategy)
    {
        $this->container['batchStrategy'] = $batchStrategy;
        return $this;
    }

    /**
    * Gets subTargetInstances
    *  目标实例
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[]|null
    */
    public function getSubTargetInstances()
    {
        return $this->container['subTargetInstances'];
    }

    /**
    * Sets subTargetInstances
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[]|null $subTargetInstances 目标实例
    *
    * @return $this
    */
    public function setSubTargetInstances($subTargetInstances)
    {
        $this->container['subTargetInstances'] = $subTargetInstances;
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

