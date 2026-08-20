<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeDeploymentSolutionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeDeploymentSolutionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * solution  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * masterAz  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    * loggerAz  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'solution' => 'string',
            'availabilityZone' => 'string',
            'masterAz' => 'string',
            'loggerAz' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * solution  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * masterAz  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    * loggerAz  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'solution' => null,
        'availabilityZone' => null,
        'masterAz' => null,
        'loggerAz' => null
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
    * solution  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * masterAz  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    * loggerAz  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'solution' => 'solution',
            'availabilityZone' => 'availability_zone',
            'masterAz' => 'master_az',
            'loggerAz' => 'logger_az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * solution  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * masterAz  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    * loggerAz  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'solution' => 'setSolution',
            'availabilityZone' => 'setAvailabilityZone',
            'masterAz' => 'setMasterAz',
            'loggerAz' => 'setLoggerAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * solution  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * masterAz  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    * loggerAz  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'solution' => 'getSolution',
            'availabilityZone' => 'getAvailabilityZone',
            'masterAz' => 'getMasterAz',
            'loggerAz' => 'getLoggerAz'
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
    const SOLUTION_LOGGER = 'logger';
    const SOLUTION_TRISET = 'triset';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSolutionAllowableValues()
    {
        return [
            self::SOLUTION_LOGGER,
            self::SOLUTION_TRISET,
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
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['masterAz'] = isset($data['masterAz']) ? $data['masterAz'] : null;
        $this->container['loggerAz'] = isset($data['loggerAz']) ? $data['loggerAz'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['solution'] === null) {
            $invalidProperties[] = "'solution' can't be null";
        }
            $allowedValues = $this->getSolutionAllowableValues();
                if (!is_null($this->container['solution']) && !in_array($this->container['solution'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'solution', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['solution']) > 100)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['solution']) < 0)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 100)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['masterAz']) && (mb_strlen($this->container['masterAz']) > 100)) {
                $invalidProperties[] = "invalid value for 'masterAz', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['masterAz']) && (mb_strlen($this->container['masterAz']) < 0)) {
                $invalidProperties[] = "invalid value for 'masterAz', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loggerAz']) && (mb_strlen($this->container['loggerAz']) > 100)) {
                $invalidProperties[] = "invalid value for 'loggerAz', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['loggerAz']) && (mb_strlen($this->container['loggerAz']) < 0)) {
                $invalidProperties[] = "invalid value for 'loggerAz', the character length must be bigger than or equal to 0.";
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
    * Gets solution
    *  **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string $solution **参数解释**: 变更后的目标部署形态。 **约束限制**: 必填。取值需为当前实例允许变更的目标形态。 **取值范围**: - logger：一主一备一日志节点 - triset：一主两备三节点  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释**: 部署可用区，多个可用区以英文逗号\",\"隔开。 **约束限制**: 必填。不可包含 []()^%&\\\\'`|\";=?$<> 等特殊字符。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets masterAz
    *  **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    *
    * @return string|null
    */
    public function getMasterAz()
    {
        return $this->container['masterAz'];
    }

    /**
    * Sets masterAz
    *
    * @param string|null $masterAz **参数解释**: 主可用区。 **约束限制**: 不填时默认使用当前主可用区。 **取值范围**: 不涉及。 **默认取值**: 当前实例的主可用区。
    *
    * @return $this
    */
    public function setMasterAz($masterAz)
    {
        $this->container['masterAz'] = $masterAz;
        return $this;
    }

    /**
    * Gets loggerAz
    *  **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getLoggerAz()
    {
        return $this->container['loggerAz'];
    }

    /**
    * Sets loggerAz
    *
    * @param string|null $loggerAz **参数解释**: 日志可用区。 **约束限制**: 带日志节点的部署形态（如 logger）需要传该参数。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLoggerAz($loggerAz)
    {
        $this->container['loggerAz'] = $loggerAz;
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

