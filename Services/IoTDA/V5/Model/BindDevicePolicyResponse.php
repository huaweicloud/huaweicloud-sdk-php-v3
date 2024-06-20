<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindDevicePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindDevicePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略ID。
    * targetType  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * successTargets  成功的目标id列表。
    * failureTargets  失败的目标id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'targetType' => 'string',
            'successTargets' => 'string[]',
            'failureTargets' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DevicePolicyBindOrUnbindFailureDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略ID。
    * targetType  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * successTargets  成功的目标id列表。
    * failureTargets  失败的目标id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'targetType' => null,
        'successTargets' => null,
        'failureTargets' => null
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
    * policyId  策略ID。
    * targetType  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * successTargets  成功的目标id列表。
    * failureTargets  失败的目标id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'targetType' => 'target_type',
            'successTargets' => 'success_targets',
            'failureTargets' => 'failure_targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略ID。
    * targetType  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * successTargets  成功的目标id列表。
    * failureTargets  失败的目标id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'targetType' => 'setTargetType',
            'successTargets' => 'setSuccessTargets',
            'failureTargets' => 'setFailureTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略ID。
    * targetType  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    * successTargets  成功的目标id列表。
    * failureTargets  失败的目标id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'targetType' => 'getTargetType',
            'successTargets' => 'getSuccessTargets',
            'failureTargets' => 'getFailureTargets'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['successTargets'] = isset($data['successTargets']) ? $data['successTargets'] : null;
        $this->container['failureTargets'] = isset($data['failureTargets']) ? $data['failureTargets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets policyId
    *  策略ID。
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID。
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets targetType
    *  **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType **参数说明**：策略的目标类型。 **取值范围**：device|product|app，device表示设备，product表示产品，app表示整个资源空间。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets successTargets
    *  成功的目标id列表。
    *
    * @return string[]|null
    */
    public function getSuccessTargets()
    {
        return $this->container['successTargets'];
    }

    /**
    * Sets successTargets
    *
    * @param string[]|null $successTargets 成功的目标id列表。
    *
    * @return $this
    */
    public function setSuccessTargets($successTargets)
    {
        $this->container['successTargets'] = $successTargets;
        return $this;
    }

    /**
    * Gets failureTargets
    *  失败的目标id列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DevicePolicyBindOrUnbindFailureDetail[]|null
    */
    public function getFailureTargets()
    {
        return $this->container['failureTargets'];
    }

    /**
    * Sets failureTargets
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DevicePolicyBindOrUnbindFailureDetail[]|null $failureTargets 失败的目标id列表
    *
    * @return $this
    */
    public function setFailureTargets($failureTargets)
    {
        $this->container['failureTargets'] = $failureTargets;
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

