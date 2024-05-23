<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyAssignmentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyAssignmentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * name  规则名字
    * description  规则描述
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * policyFilter  policyFilter
    * customPolicy  customPolicy
    * policyDefinitionId  策略定义ID
    * parameters  规则参数
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyAssignmentType' => 'string',
            'name' => 'string',
            'description' => 'string',
            'period' => 'string',
            'policyFilter' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyFilterDefinition',
            'customPolicy' => '\HuaweiCloud\SDK\Config\V1\Model\CustomPolicy',
            'policyDefinitionId' => 'string',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Config\V1\Model\PolicyParameterValue]',
            'tags' => '\HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * name  规则名字
    * description  规则描述
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * policyFilter  policyFilter
    * customPolicy  customPolicy
    * policyDefinitionId  策略定义ID
    * parameters  规则参数
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyAssignmentType' => null,
        'name' => null,
        'description' => null,
        'period' => null,
        'policyFilter' => null,
        'customPolicy' => null,
        'policyDefinitionId' => null,
        'parameters' => null,
        'tags' => null
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
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * name  规则名字
    * description  规则描述
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * policyFilter  policyFilter
    * customPolicy  customPolicy
    * policyDefinitionId  策略定义ID
    * parameters  规则参数
    * tags  tags
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyAssignmentType' => 'policy_assignment_type',
            'name' => 'name',
            'description' => 'description',
            'period' => 'period',
            'policyFilter' => 'policy_filter',
            'customPolicy' => 'custom_policy',
            'policyDefinitionId' => 'policy_definition_id',
            'parameters' => 'parameters',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * name  规则名字
    * description  规则描述
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * policyFilter  policyFilter
    * customPolicy  customPolicy
    * policyDefinitionId  策略定义ID
    * parameters  规则参数
    * tags  tags
    *
    * @var string[]
    */
    protected static $setters = [
            'policyAssignmentType' => 'setPolicyAssignmentType',
            'name' => 'setName',
            'description' => 'setDescription',
            'period' => 'setPeriod',
            'policyFilter' => 'setPolicyFilter',
            'customPolicy' => 'setCustomPolicy',
            'policyDefinitionId' => 'setPolicyDefinitionId',
            'parameters' => 'setParameters',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * name  规则名字
    * description  规则描述
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * policyFilter  policyFilter
    * customPolicy  customPolicy
    * policyDefinitionId  策略定义ID
    * parameters  规则参数
    * tags  tags
    *
    * @var string[]
    */
    protected static $getters = [
            'policyAssignmentType' => 'getPolicyAssignmentType',
            'name' => 'getName',
            'description' => 'getDescription',
            'period' => 'getPeriod',
            'policyFilter' => 'getPolicyFilter',
            'customPolicy' => 'getCustomPolicy',
            'policyDefinitionId' => 'getPolicyDefinitionId',
            'parameters' => 'getParameters',
            'tags' => 'getTags'
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
    const POLICY_ASSIGNMENT_TYPE_BUILTIN = 'builtin';
    const POLICY_ASSIGNMENT_TYPE_CUSTOM = 'custom';
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
    public function getPolicyAssignmentTypeAllowableValues()
    {
        return [
            self::POLICY_ASSIGNMENT_TYPE_BUILTIN,
            self::POLICY_ASSIGNMENT_TYPE_CUSTOM,
        ];
    }

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
        $this->container['policyAssignmentType'] = isset($data['policyAssignmentType']) ? $data['policyAssignmentType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['policyFilter'] = isset($data['policyFilter']) ? $data['policyFilter'] : null;
        $this->container['customPolicy'] = isset($data['customPolicy']) ? $data['customPolicy'] : null;
        $this->container['policyDefinitionId'] = isset($data['policyDefinitionId']) ? $data['policyDefinitionId'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPolicyAssignmentTypeAllowableValues();
                if (!is_null($this->container['policyAssignmentType']) && !in_array($this->container['policyAssignmentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyAssignmentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/[^']+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[^']+/.";
            }
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

            if (!is_null($this->container['policyDefinitionId']) && (mb_strlen($this->container['policyDefinitionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'policyDefinitionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['policyDefinitionId']) && !preg_match("/[\\w-]+/", $this->container['policyDefinitionId'])) {
                $invalidProperties[] = "invalid value for 'policyDefinitionId', must be conform to the pattern /[\\w-]+/.";
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
    * Gets policyAssignmentType
    *  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    *
    * @return string|null
    */
    public function getPolicyAssignmentType()
    {
        return $this->container['policyAssignmentType'];
    }

    /**
    * Sets policyAssignmentType
    *
    * @param string|null $policyAssignmentType 规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    *
    * @return $this
    */
    public function setPolicyAssignmentType($policyAssignmentType)
    {
        $this->container['policyAssignmentType'] = $policyAssignmentType;
        return $this;
    }

    /**
    * Gets name
    *  规则名字
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
    * @param string $name 规则名字
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
    *  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
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
    * @param string|null $period 触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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
    * Gets customPolicy
    *  customPolicy
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\CustomPolicy|null
    */
    public function getCustomPolicy()
    {
        return $this->container['customPolicy'];
    }

    /**
    * Sets customPolicy
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\CustomPolicy|null $customPolicy customPolicy
    *
    * @return $this
    */
    public function setCustomPolicy($customPolicy)
    {
        $this->container['customPolicy'] = $customPolicy;
        return $this;
    }

    /**
    * Gets policyDefinitionId
    *  策略定义ID
    *
    * @return string|null
    */
    public function getPolicyDefinitionId()
    {
        return $this->container['policyDefinitionId'];
    }

    /**
    * Sets policyDefinitionId
    *
    * @param string|null $policyDefinitionId 策略定义ID
    *
    * @return $this
    */
    public function setPolicyDefinitionId($policyDefinitionId)
    {
        $this->container['policyDefinitionId'] = $policyDefinitionId;
        return $this;
    }

    /**
    * Gets parameters
    *  规则参数
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
    * @param map[string,\HuaweiCloud\SDK\Config\V1\Model\PolicyParameterValue]|null $parameters 规则参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets tags
    *  tags
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

