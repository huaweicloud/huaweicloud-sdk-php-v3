<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBackupPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBackupPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    * policyId  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'policyId' => 'string',
            'operationDefinition' => '\HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionRequestInfo',
            'trigger' => '\HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    * policyId  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'policyId' => null,
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
    * enabled  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    * policyId  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'policyId' => 'policy_id',
            'operationDefinition' => 'operation_definition',
            'trigger' => 'trigger'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    * policyId  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'policyId' => 'setPolicyId',
            'operationDefinition' => 'setOperationDefinition',
            'trigger' => 'setTrigger'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    * policyId  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * operationDefinition  operationDefinition
    * trigger  trigger
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'policyId' => 'getPolicyId',
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
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
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
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
    * @param bool|null $enabled **参数解释**: 策略是否启用，缺省值：true **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: true
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId **参数解释**: 策略ID,若开启防护时开启备份防护，该字段必选 **约束限制**: 不涉及 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets operationDefinition
    *  operationDefinition
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionRequestInfo|null
    */
    public function getOperationDefinition()
    {
        return $this->container['operationDefinition'];
    }

    /**
    * Sets operationDefinition
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OperationDefinitionRequestInfo|null $operationDefinition operationDefinition
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerRequestInfo|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BackupTriggerRequestInfo|null $trigger trigger
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

