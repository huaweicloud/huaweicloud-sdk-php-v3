<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicyCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicyCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 - replication: 复制
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'operationType' => 'string',
            'policyName' => 'string',
            'policyEnabled' => 'bool',
            'policyOperationDefinition' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate',
            'policyTrigger' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 - replication: 复制
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'operationType' => null,
        'policyName' => null,
        'policyEnabled' => null,
        'policyOperationDefinition' => null,
        'policyTrigger' => null
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
    * operationType  组织策略类型 - backup: 备份 - replication: 复制
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'operationType' => 'operation_type',
            'policyName' => 'policy_name',
            'policyEnabled' => 'policy_enabled',
            'policyOperationDefinition' => 'policy_operation_definition',
            'policyTrigger' => 'policy_trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 - replication: 复制
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'operationType' => 'setOperationType',
            'policyName' => 'setPolicyName',
            'policyEnabled' => 'setPolicyEnabled',
            'policyOperationDefinition' => 'setPolicyOperationDefinition',
            'policyTrigger' => 'setPolicyTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 - replication: 复制
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'operationType' => 'getOperationType',
            'policyName' => 'getPolicyName',
            'policyEnabled' => 'getPolicyEnabled',
            'policyOperationDefinition' => 'getPolicyOperationDefinition',
            'policyTrigger' => 'getPolicyTrigger'
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
    const OPERATION_TYPE_BACKUP = 'backup';
    const OPERATION_TYPE_REPLICATION = 'replication';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_BACKUP,
            self::OPERATION_TYPE_REPLICATION,
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
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyEnabled'] = isset($data['policyEnabled']) ? $data['policyEnabled'] : null;
        $this->container['policyOperationDefinition'] = isset($data['policyOperationDefinition']) ? $data['policyOperationDefinition'] : null;
        $this->container['policyTrigger'] = isset($data['policyTrigger']) ? $data['policyTrigger'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operationType'] === null) {
            $invalidProperties[] = "'operationType' can't be null";
        }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['policyEnabled'] === null) {
            $invalidProperties[] = "'policyEnabled' can't be null";
        }
        if ($this->container['policyOperationDefinition'] === null) {
            $invalidProperties[] = "'policyOperationDefinition' can't be null";
        }
        if ($this->container['policyTrigger'] === null) {
            $invalidProperties[] = "'policyTrigger' can't be null";
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 组织策略名称
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
    * Gets operationType
    *  组织策略类型 - backup: 备份 - replication: 复制
    *
    * @return string
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string $operationType 组织策略类型 - backup: 备份 - replication: 复制
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
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
    * @return bool
    */
    public function getPolicyEnabled()
    {
        return $this->container['policyEnabled'];
    }

    /**
    * Sets policyEnabled
    *
    * @param bool $policyEnabled 策略是否开启
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
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate
    */
    public function getPolicyOperationDefinition()
    {
        return $this->container['policyOperationDefinition'];
    }

    /**
    * Sets policyOperationDefinition
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate $policyOperationDefinition policyOperationDefinition
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
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq
    */
    public function getPolicyTrigger()
    {
        return $this->container['policyTrigger'];
    }

    /**
    * Sets policyTrigger
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq $policyTrigger policyTrigger
    *
    * @return $this
    */
    public function setPolicyTrigger($policyTrigger)
    {
        $this->container['policyTrigger'] = $policyTrigger;
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

