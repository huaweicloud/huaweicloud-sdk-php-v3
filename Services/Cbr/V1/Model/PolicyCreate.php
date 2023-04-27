<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否启用策略
    * name  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
    * operationDefinition  operationDefinition
    * operationType  策略类型，如备份，复制 Enum:[ backup，replication]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'name' => 'string',
            'operationDefinition' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyoODCreate',
            'operationType' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否启用策略
    * name  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
    * operationDefinition  operationDefinition
    * operationType  策略类型，如备份，复制 Enum:[ backup，replication]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'name' => null,
        'operationDefinition' => null,
        'operationType' => null,
        'trigger' => null
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
    * enabled  是否启用策略
    * name  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
    * operationDefinition  operationDefinition
    * operationType  策略类型，如备份，复制 Enum:[ backup，replication]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'name' => 'name',
            'operationDefinition' => 'operation_definition',
            'operationType' => 'operation_type',
            'trigger' => 'trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否启用策略
    * name  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
    * operationDefinition  operationDefinition
    * operationType  策略类型，如备份，复制 Enum:[ backup，replication]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'name' => 'setName',
            'operationDefinition' => 'setOperationDefinition',
            'operationType' => 'setOperationType',
            'trigger' => 'setTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否启用策略
    * name  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
    * operationDefinition  operationDefinition
    * operationType  策略类型，如备份，复制 Enum:[ backup，replication]
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'name' => 'getName',
            'operationDefinition' => 'getOperationDefinition',
            'operationType' => 'getOperationType',
            'trigger' => 'getTrigger'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : true;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operationDefinition'] = isset($data['operationDefinition']) ? $data['operationDefinition'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
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
            if (!preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
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
    *  是否启用策略
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用策略
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets name
    *  策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
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
    * @param string $name 策略名称，长度限制：1- 64，只能由中文、字母、数字、“_”、“-”组成。
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
    *  策略类型，如备份，复制 Enum:[ backup，replication]
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
    * @param string $operationType 策略类型，如备份，复制 Enum:[ backup，replication]
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
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\PolicyTriggerReq $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
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

