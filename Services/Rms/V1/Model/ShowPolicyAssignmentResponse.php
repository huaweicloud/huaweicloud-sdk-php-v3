<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPolicyAssignmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPolicyAssignmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * id  规则ID
    * name  规则名字
    * description  规则描述
    * policyFilter  policyFilter
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * state  规则状态
    * created  规则创建时间
    * updated  规则更新时间
    * policyDefinitionId  规则的策略ID
    * customPolicy  customPolicy
    * parameters  规则参数
    * createdBy  规则的创建者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyAssignmentType' => 'string',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'policyFilter' => '\HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition',
            'period' => 'string',
            'state' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'policyDefinitionId' => 'string',
            'customPolicy' => '\HuaweiCloud\SDK\Rms\V1\Model\CustomPolicy',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]',
            'createdBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * id  规则ID
    * name  规则名字
    * description  规则描述
    * policyFilter  policyFilter
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * state  规则状态
    * created  规则创建时间
    * updated  规则更新时间
    * policyDefinitionId  规则的策略ID
    * customPolicy  customPolicy
    * parameters  规则参数
    * createdBy  规则的创建者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyAssignmentType' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'policyFilter' => null,
        'period' => null,
        'state' => null,
        'created' => null,
        'updated' => null,
        'policyDefinitionId' => null,
        'customPolicy' => null,
        'parameters' => null,
        'createdBy' => null
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
    * id  规则ID
    * name  规则名字
    * description  规则描述
    * policyFilter  policyFilter
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * state  规则状态
    * created  规则创建时间
    * updated  规则更新时间
    * policyDefinitionId  规则的策略ID
    * customPolicy  customPolicy
    * parameters  规则参数
    * createdBy  规则的创建者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyAssignmentType' => 'policy_assignment_type',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'policyFilter' => 'policy_filter',
            'period' => 'period',
            'state' => 'state',
            'created' => 'created',
            'updated' => 'updated',
            'policyDefinitionId' => 'policy_definition_id',
            'customPolicy' => 'custom_policy',
            'parameters' => 'parameters',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * id  规则ID
    * name  规则名字
    * description  规则描述
    * policyFilter  policyFilter
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * state  规则状态
    * created  规则创建时间
    * updated  规则更新时间
    * policyDefinitionId  规则的策略ID
    * customPolicy  customPolicy
    * parameters  规则参数
    * createdBy  规则的创建者
    *
    * @var string[]
    */
    protected static $setters = [
            'policyAssignmentType' => 'setPolicyAssignmentType',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'policyFilter' => 'setPolicyFilter',
            'period' => 'setPeriod',
            'state' => 'setState',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'policyDefinitionId' => 'setPolicyDefinitionId',
            'customPolicy' => 'setCustomPolicy',
            'parameters' => 'setParameters',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyAssignmentType  规则类型，包括预定义合规规则(builtin)和用户自定义合规规则(custom)
    * id  规则ID
    * name  规则名字
    * description  规则描述
    * policyFilter  policyFilter
    * period  触发周期值，可选值：One_Hour, Three_Hours, Six_Hours, Twelve_Hours, TwentyFour_Hours
    * state  规则状态
    * created  规则创建时间
    * updated  规则更新时间
    * policyDefinitionId  规则的策略ID
    * customPolicy  customPolicy
    * parameters  规则参数
    * createdBy  规则的创建者
    *
    * @var string[]
    */
    protected static $getters = [
            'policyAssignmentType' => 'getPolicyAssignmentType',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'policyFilter' => 'getPolicyFilter',
            'period' => 'getPeriod',
            'state' => 'getState',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'policyDefinitionId' => 'getPolicyDefinitionId',
            'customPolicy' => 'getCustomPolicy',
            'parameters' => 'getParameters',
            'createdBy' => 'getCreatedBy'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyFilter'] = isset($data['policyFilter']) ? $data['policyFilter'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['policyDefinitionId'] = isset($data['policyDefinitionId']) ? $data['policyDefinitionId'] : null;
        $this->container['customPolicy'] = isset($data['customPolicy']) ? $data['customPolicy'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
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
    * Gets id
    *  规则ID
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
    * @param string|null $id 规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名字
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
    * Gets policyFilter
    *  policyFilter
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition|null
    */
    public function getPolicyFilter()
    {
        return $this->container['policyFilter'];
    }

    /**
    * Sets policyFilter
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\PolicyFilterDefinition|null $policyFilter policyFilter
    *
    * @return $this
    */
    public function setPolicyFilter($policyFilter)
    {
        $this->container['policyFilter'] = $policyFilter;
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
    * Gets state
    *  规则状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 规则状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets created
    *  规则创建时间
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 规则创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  规则更新时间
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 规则更新时间
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets policyDefinitionId
    *  规则的策略ID
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
    * @param string|null $policyDefinitionId 规则的策略ID
    *
    * @return $this
    */
    public function setPolicyDefinitionId($policyDefinitionId)
    {
        $this->container['policyDefinitionId'] = $policyDefinitionId;
        return $this;
    }

    /**
    * Gets customPolicy
    *  customPolicy
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\CustomPolicy|null
    */
    public function getCustomPolicy()
    {
        return $this->container['customPolicy'];
    }

    /**
    * Sets customPolicy
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\CustomPolicy|null $customPolicy customPolicy
    *
    * @return $this
    */
    public function setCustomPolicy($customPolicy)
    {
        $this->container['customPolicy'] = $customPolicy;
        return $this;
    }

    /**
    * Gets parameters
    *  规则参数
    *
    * @return map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterValue]|null $parameters 规则参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets createdBy
    *  规则的创建者
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 规则的创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

