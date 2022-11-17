<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  诊断项名称
    * causeIds  原因ID列表
    * impactIds  影响ID列表
    * adviceIds  建议ID列表
    * result  诊断结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'causeIds' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]',
            'impactIds' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]',
            'adviceIds' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  诊断项名称
    * causeIds  原因ID列表
    * impactIds  影响ID列表
    * adviceIds  建议ID列表
    * result  诊断结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'causeIds' => null,
        'impactIds' => null,
        'adviceIds' => null,
        'result' => null
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
    * name  诊断项名称
    * causeIds  原因ID列表
    * impactIds  影响ID列表
    * adviceIds  建议ID列表
    * result  诊断结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'causeIds' => 'cause_ids',
            'impactIds' => 'impact_ids',
            'adviceIds' => 'advice_ids',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  诊断项名称
    * causeIds  原因ID列表
    * impactIds  影响ID列表
    * adviceIds  建议ID列表
    * result  诊断结果
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'causeIds' => 'setCauseIds',
            'impactIds' => 'setImpactIds',
            'adviceIds' => 'setAdviceIds',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  诊断项名称
    * causeIds  原因ID列表
    * impactIds  影响ID列表
    * adviceIds  建议ID列表
    * result  诊断结果
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'causeIds' => 'getCauseIds',
            'impactIds' => 'getImpactIds',
            'adviceIds' => 'getAdviceIds',
            'result' => 'getResult'
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
    const NAME_CONNECTION_NUM = 'connection_num';
    const NAME_RX_CONTROLLED = 'rx_controlled';
    const NAME_PERSISTENCE = 'persistence';
    const NAME_CENTRALIZED_EXPIRATION = 'centralized_expiration';
    const NAME_INNER_MEMORY_FRAGMENTATION = 'inner_memory_fragmentation';
    const NAME_TIME_CONSUMING_COMMANDS = 'time_consuming_commands';
    const NAME_HIT_RATIO = 'hit_ratio';
    const NAME_MEMORY_USAGE = 'memory_usage';
    const NAME_CPU_USAGE = 'cpu_usage';
    const RESULT_FAILED = 'failed';
    const RESULT_ABNORMAL = 'abnormal';
    const RESULT_NORMAL = 'normal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_CONNECTION_NUM,
            self::NAME_RX_CONTROLLED,
            self::NAME_PERSISTENCE,
            self::NAME_CENTRALIZED_EXPIRATION,
            self::NAME_INNER_MEMORY_FRAGMENTATION,
            self::NAME_TIME_CONSUMING_COMMANDS,
            self::NAME_HIT_RATIO,
            self::NAME_MEMORY_USAGE,
            self::NAME_CPU_USAGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_FAILED,
            self::RESULT_ABNORMAL,
            self::RESULT_NORMAL,
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
        $this->container['causeIds'] = isset($data['causeIds']) ? $data['causeIds'] : null;
        $this->container['impactIds'] = isset($data['impactIds']) ? $data['impactIds'] : null;
        $this->container['adviceIds'] = isset($data['adviceIds']) ? $data['adviceIds'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
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
    * Gets name
    *  诊断项名称
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
    * @param string $name 诊断项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets causeIds
    *  原因ID列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null
    */
    public function getCauseIds()
    {
        return $this->container['causeIds'];
    }

    /**
    * Sets causeIds
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null $causeIds 原因ID列表
    *
    * @return $this
    */
    public function setCauseIds($causeIds)
    {
        $this->container['causeIds'] = $causeIds;
        return $this;
    }

    /**
    * Gets impactIds
    *  影响ID列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null
    */
    public function getImpactIds()
    {
        return $this->container['impactIds'];
    }

    /**
    * Sets impactIds
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null $impactIds 影响ID列表
    *
    * @return $this
    */
    public function setImpactIds($impactIds)
    {
        $this->container['impactIds'] = $impactIds;
        return $this;
    }

    /**
    * Gets adviceIds
    *  建议ID列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null
    */
    public function getAdviceIds()
    {
        return $this->container['adviceIds'];
    }

    /**
    * Sets adviceIds
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConclusionItem[]|null $adviceIds 建议ID列表
    *
    * @return $this
    */
    public function setAdviceIds($adviceIds)
    {
        $this->container['adviceIds'] = $adviceIds;
        return $this;
    }

    /**
    * Gets result
    *  诊断结果
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 诊断结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

