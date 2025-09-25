<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组织策略ID
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 -  replication: 复制
    * domainId  组织策略所属账号ID
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * status  组织策略状态
    * domainName  组织策略所属账号
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'operationType' => 'string',
            'domainId' => 'string',
            'policyName' => 'string',
            'policyEnabled' => 'bool',
            'policyOperationDefinition' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate',
            'policyTrigger' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq',
            'status' => 'string',
            'domainName' => 'string',
            'effectiveScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组织策略ID
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 -  replication: 复制
    * domainId  组织策略所属账号ID
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * status  组织策略状态
    * domainName  组织策略所属账号
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'operationType' => null,
        'domainId' => null,
        'policyName' => null,
        'policyEnabled' => null,
        'policyOperationDefinition' => null,
        'policyTrigger' => null,
        'status' => null,
        'domainName' => null,
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
    * id  组织策略ID
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 -  replication: 复制
    * domainId  组织策略所属账号ID
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * status  组织策略状态
    * domainName  组织策略所属账号
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'operationType' => 'operation_type',
            'domainId' => 'domain_id',
            'policyName' => 'policy_name',
            'policyEnabled' => 'policy_enabled',
            'policyOperationDefinition' => 'policy_operation_definition',
            'policyTrigger' => 'policy_trigger',
            'status' => 'status',
            'domainName' => 'domain_name',
            'effectiveScope' => 'effective_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组织策略ID
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 -  replication: 复制
    * domainId  组织策略所属账号ID
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * status  组织策略状态
    * domainName  组织策略所属账号
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'operationType' => 'setOperationType',
            'domainId' => 'setDomainId',
            'policyName' => 'setPolicyName',
            'policyEnabled' => 'setPolicyEnabled',
            'policyOperationDefinition' => 'setPolicyOperationDefinition',
            'policyTrigger' => 'setPolicyTrigger',
            'status' => 'setStatus',
            'domainName' => 'setDomainName',
            'effectiveScope' => 'setEffectiveScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组织策略ID
    * name  组织策略名称
    * description  组织策略描述
    * operationType  组织策略类型 - backup: 备份 -  replication: 复制
    * domainId  组织策略所属账号ID
    * policyName  策略名称
    * policyEnabled  策略是否开启
    * policyOperationDefinition  policyOperationDefinition
    * policyTrigger  policyTrigger
    * status  组织策略状态
    * domainName  组织策略所属账号
    * effectiveScope  组织策略生效范围
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'operationType' => 'getOperationType',
            'domainId' => 'getDomainId',
            'policyName' => 'getPolicyName',
            'policyEnabled' => 'getPolicyEnabled',
            'policyOperationDefinition' => 'getPolicyOperationDefinition',
            'policyTrigger' => 'getPolicyTrigger',
            'status' => 'getStatus',
            'domainName' => 'getDomainName',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyEnabled'] = isset($data['policyEnabled']) ? $data['policyEnabled'] : null;
        $this->container['policyOperationDefinition'] = isset($data['policyOperationDefinition']) ? $data['policyOperationDefinition'] : null;
        $this->container['policyTrigger'] = isset($data['policyTrigger']) ? $data['policyTrigger'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
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

        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets id
    *  组织策略ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 组织策略ID
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
    *  组织策略类型 - backup: 备份 -  replication: 复制
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
    * @param string $operationType 组织策略类型 - backup: 备份 -  replication: 复制
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets domainId
    *  组织策略所属账号ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 组织策略所属账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets status
    *  组织策略状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 组织策略状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainName
    *  组织策略所属账号
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 组织策略所属账号
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
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

