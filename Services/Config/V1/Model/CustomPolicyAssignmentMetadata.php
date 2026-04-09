<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomPolicyAssignmentMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomPolicyAssignmentMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  规则描述
    * period  触发周期
    * parameters  输入参数
    * policyFilter  policyFilter
    * policyFilterV2  policyFilterV2
    * functionUrn  自定义函数的urn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'period' => 'string',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Config\V1\Model\PolicyParameterValue]',
            'policyFilter' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinition',
            'policyFilterV2' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinitionV2',
            'functionUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  规则描述
    * period  触发周期
    * parameters  输入参数
    * policyFilter  policyFilter
    * policyFilterV2  policyFilterV2
    * functionUrn  自定义函数的urn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'period' => null,
        'parameters' => null,
        'policyFilter' => null,
        'policyFilterV2' => null,
        'functionUrn' => null
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
    * description  规则描述
    * period  触发周期
    * parameters  输入参数
    * policyFilter  policyFilter
    * policyFilterV2  policyFilterV2
    * functionUrn  自定义函数的urn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'period' => 'period',
            'parameters' => 'parameters',
            'policyFilter' => 'policy_filter',
            'policyFilterV2' => 'policy_filter_v2',
            'functionUrn' => 'function_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  规则描述
    * period  触发周期
    * parameters  输入参数
    * policyFilter  policyFilter
    * policyFilterV2  policyFilterV2
    * functionUrn  自定义函数的urn
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'period' => 'setPeriod',
            'parameters' => 'setParameters',
            'policyFilter' => 'setPolicyFilter',
            'policyFilterV2' => 'setPolicyFilterV2',
            'functionUrn' => 'setFunctionUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  规则描述
    * period  触发周期
    * parameters  输入参数
    * policyFilter  policyFilter
    * policyFilterV2  policyFilterV2
    * functionUrn  自定义函数的urn
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'period' => 'getPeriod',
            'parameters' => 'getParameters',
            'policyFilter' => 'getPolicyFilter',
            'policyFilterV2' => 'getPolicyFilterV2',
            'functionUrn' => 'getFunctionUrn'
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
    const PERIOD_ONE_HOUR = 'One_Hour';
    const PERIOD_THREE_HOURS = 'Three_Hours';
    const PERIOD_SIX_HOURS = 'Six_Hours';
    const PERIOD_TWELVE_HOURS = 'Twelve_Hours';
    const PERIOD_TWENTY_FOUR_HOURS = 'TwentyFour_Hours';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_ONE_HOUR,
            self::PERIOD_THREE_HOURS,
            self::PERIOD_SIX_HOURS,
            self::PERIOD_TWELVE_HOURS,
            self::PERIOD_TWENTY_FOUR_HOURS,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['policyFilter'] = isset($data['policyFilter']) ? $data['policyFilter'] : null;
        $this->container['policyFilterV2'] = isset($data['policyFilterV2']) ? $data['policyFilterV2'] : null;
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            $allowedValues = $this->getPeriodAllowableValues();
                if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
        }
            if ((mb_strlen($this->container['functionUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'functionUrn', the character length must be smaller than or equal to 1024.";
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
    * Gets description
    *  规则描述
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
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets period
    *  触发周期
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 触发周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets parameters
    *  输入参数
    *
    * @return map[string,\HuaweiCloud\SDK\Config\V1\Model\PolicyParameterValue]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,\HuaweiCloud\SDK\Config\V1\Model\PolicyParameterValue]|null $parameters 输入参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets policyFilter
    *  policyFilter
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinition|null
    */
    public function getPolicyFilter()
    {
        return $this->container['policyFilter'];
    }

    /**
    * Sets policyFilter
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinition|null $policyFilter policyFilter
    *
    * @return $this
    */
    public function setPolicyFilter($policyFilter)
    {
        $this->container['policyFilter'] = $policyFilter;
        return $this;
    }

    /**
    * Gets policyFilterV2
    *  policyFilterV2
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinitionV2|null
    */
    public function getPolicyFilterV2()
    {
        return $this->container['policyFilterV2'];
    }

    /**
    * Sets policyFilterV2
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinitionV2|null $policyFilterV2 policyFilterV2
    *
    * @return $this
    */
    public function setPolicyFilterV2($policyFilterV2)
    {
        $this->container['policyFilterV2'] = $policyFilterV2;
        return $this;
    }

    /**
    * Gets functionUrn
    *  自定义函数的urn
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 自定义函数的urn
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
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

