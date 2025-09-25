<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicyUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicyUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  组织策略名称
    * description  组织策略描述
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'policyName' => 'string',
            'policyEnabled' => 'bool',
            'policyOperationDefinition' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate',
            'policyTrigger' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq',
            'effectiveScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  组织策略名称
    * description  组织策略描述
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'policyName' => null,
        'policyEnabled' => null,
        'policyOperationDefinition' => null,
        'policyTrigger' => null,
        'effectiveScope' => null
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
    * name  组织策略名称
    * description  组织策略描述
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'policyName' => 'policy_name',
            'policyEnabled' => 'policy_enabled',
            'policyOperationDefinition' => 'policy_operation_definition',
            'policyTrigger' => 'policy_trigger',
            'effectiveScope' => 'effective_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  组织策略名称
    * description  组织策略描述
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'policyName' => 'setPolicyName',
            'policyEnabled' => 'setPolicyEnabled',
            'policyOperationDefinition' => 'setPolicyOperationDefinition',
            'policyTrigger' => 'setPolicyTrigger',
            'effectiveScope' => 'setEffectiveScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  组织策略名称
    * description  组织策略描述
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'policyName' => 'getPolicyName',
            'policyEnabled' => 'getPolicyEnabled',
            'policyOperationDefinition' => 'getPolicyOperationDefinition',
            'policyTrigger' => 'getPolicyTrigger',
            'effectiveScope' => 'getEffectiveScope'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyEnabled'] = isset($data['policyEnabled']) ? $data['policyEnabled'] : null;
        $this->container['policyOperationDefinition'] = isset($data['policyOperationDefinition']) ? $data['policyOperationDefinition'] : null;
        $this->container['policyTrigger'] = isset($data['policyTrigger']) ? $data['policyTrigger'] : null;
        $this->container['effectiveScope'] = isset($data['effectiveScope']) ? $data['effectiveScope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveScope']) && (mb_strlen($this->container['effectiveScope']) > 255)) {
                $invalidProperties[] = "invalid value for 'effectiveScope', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['effectiveScope']) && (mb_strlen($this->container['effectiveScope']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveScope', the character length must be bigger than or equal to 0.";
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
    *  组织策略名称
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
    * @param string|null $name 组织策略名称
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
    *  组织策略描述
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
    * @param string|null $description 组织策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyEnabled
    *  策略是否开启
    *
    * @return bool|null
    */
    public function getPolicyEnabled()
    {
        return $this->container['policyEnabled'];
    }

    /**
    * Sets policyEnabled
    *
    * @param bool|null $policyEnabled 策略是否开启
    *
    * @return $this
    */
    public function setPolicyEnabled($policyEnabled)
    {
        $this->container['policyEnabled'] = $policyEnabled;
        return $this;
    }

    /**
    * Gets policyOperationDefinition
    *  policyOperationDefinition
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate|null
    */
    public function getPolicyOperationDefinition()
    {
        return $this->container['policyOperationDefinition'];
    }

    /**
    * Sets policyOperationDefinition
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate|null $policyOperationDefinition policyOperationDefinition
    *
    * @return $this
    */
    public function setPolicyOperationDefinition($policyOperationDefinition)
    {
        $this->container['policyOperationDefinition'] = $policyOperationDefinition;
        return $this;
    }

    /**
    * Gets policyTrigger
    *  policyTrigger
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq|null
    */
    public function getPolicyTrigger()
    {
        return $this->container['policyTrigger'];
    }

    /**
    * Sets policyTrigger
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq|null $policyTrigger policyTrigger
    *
    * @return $this
    */
    public function setPolicyTrigger($policyTrigger)
    {
        $this->container['policyTrigger'] = $policyTrigger;
        return $this;
    }

    /**
    * Gets effectiveScope
    *  组织策略生效范围
    *
    * @return string|null
    */
    public function getEffectiveScope()
    {
        return $this->container['effectiveScope'];
    }

    /**
    * Sets effectiveScope
    *
    * @param string|null $effectiveScope 组织策略生效范围
    *
    * @return $this
    */
    public function setEffectiveScope($effectiveScope)
    {
        $this->container['effectiveScope'] = $effectiveScope;
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

