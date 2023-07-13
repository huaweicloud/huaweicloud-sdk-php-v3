<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Policy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationDefinition  operationDefinition
    * operationType  策略类型,例如 ‘backup’：自动备份
    * trigger  trigger
    * associatedVaults  关联的存储库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'operationDefinition' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate',
            'operationType' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerResp',
            'associatedVaults' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyAssociateVault[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationDefinition  operationDefinition
    * operationType  策略类型,例如 ‘backup’：自动备份
    * trigger  trigger
    * associatedVaults  关联的存储库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'id' => null,
        'name' => null,
        'operationDefinition' => null,
        'operationType' => null,
        'trigger' => null,
        'associatedVaults' => null
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
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationDefinition  operationDefinition
    * operationType  策略类型,例如 ‘backup’：自动备份
    * trigger  trigger
    * associatedVaults  关联的存储库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'id' => 'id',
            'name' => 'name',
            'operationDefinition' => 'operation_definition',
            'operationType' => 'operation_type',
            'trigger' => 'trigger',
            'associatedVaults' => 'associated_vaults'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationDefinition  operationDefinition
    * operationType  策略类型,例如 ‘backup’：自动备份
    * trigger  trigger
    * associatedVaults  关联的存储库
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'name' => 'setName',
            'operationDefinition' => 'setOperationDefinition',
            'operationType' => 'setOperationType',
            'trigger' => 'setTrigger',
            'associatedVaults' => 'setAssociatedVaults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationDefinition  operationDefinition
    * operationType  策略类型,例如 ‘backup’：自动备份
    * trigger  trigger
    * associatedVaults  关联的存储库
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'name' => 'getName',
            'operationDefinition' => 'getOperationDefinition',
            'operationType' => 'getOperationType',
            'trigger' => 'getTrigger',
            'associatedVaults' => 'getAssociatedVaults'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operationDefinition'] = isset($data['operationDefinition']) ? $data['operationDefinition'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['associatedVaults'] = isset($data['associatedVaults']) ? $data['associatedVaults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['operationDefinition'] === null) {
            $invalidProperties[] = "'operationDefinition' can't be null";
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
    * Gets enabled
    *  策略是否启用
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 策略是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets id
    *  策略ID
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
    * @param string $id 策略ID
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
    *  策略名称
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
    * @param string $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets operationDefinition
    *  operationDefinition
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate
    */
    public function getOperationDefinition()
    {
        return $this->container['operationDefinition'];
    }

    /**
    * Sets operationDefinition
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate $operationDefinition operationDefinition
    *
    * @return $this
    */
    public function setOperationDefinition($operationDefinition)
    {
        $this->container['operationDefinition'] = $operationDefinition;
        return $this;
    }

    /**
    * Gets operationType
    *  策略类型,例如 ‘backup’：自动备份
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
    * @param string $operationType 策略类型,例如 ‘backup’：自动备份
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerResp
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerResp $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets associatedVaults
    *  关联的存储库
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyAssociateVault[]|null
    */
    public function getAssociatedVaults()
    {
        return $this->container['associatedVaults'];
    }

    /**
    * Sets associatedVaults
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyAssociateVault[]|null $associatedVaults 关联的存储库
    *
    * @return $this
    */
    public function setAssociatedVaults($associatedVaults)
    {
        $this->container['associatedVaults'] = $associatedVaults;
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

