<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupPolicyInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupPolicyInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationType  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'operationType' => 'string',
            'operationDefinition' => '\HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionInfo',
            'trigger' => '\HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationType  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'id' => null,
        'name' => null,
        'operationType' => null,
        'operationDefinition' => null,
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
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationType  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'id' => 'id',
            'name' => 'name',
            'operationType' => 'operation_type',
            'operationDefinition' => 'operation_definition',
            'trigger' => 'trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationType  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'name' => 'setName',
            'operationType' => 'setOperationType',
            'operationDefinition' => 'setOperationDefinition',
            'trigger' => 'setTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  策略是否启用
    * id  策略ID
    * name  策略名称
    * operationType  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'name' => 'getName',
            'operationType' => 'getOperationType',
            'operationDefinition' => 'getOperationDefinition',
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
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['operationDefinition'] = isset($data['operationDefinition']) ? $data['operationDefinition'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) > 128)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be bigger than or equal to 1.";
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
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 策略是否启用
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 策略ID
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets operationType
    *  备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 备份类型。备份（backup）、复制(replication)，包含如下2种。   - backup ：备份。   - replication ：复制。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets operationDefinition
    *  operationDefinition
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionInfo|null
    */
    public function getOperationDefinition()
    {
        return $this->container['operationDefinition'];
    }

    /**
    * Sets operationDefinition
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionInfo|null $operationDefinition operationDefinition
    *
    * @return $this
    */
    public function setOperationDefinition($operationDefinition)
    {
        $this->container['operationDefinition'] = $operationDefinition;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerInfo|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerInfo|null $trigger trigger
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

