<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSetBackupPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSetBackupPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * succeededNum  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    * failedNum  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    * failedInstances  **参数解释**: 设置失败的实例记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'succeededNum' => 'int',
            'failedNum' => 'int',
            'failedInstances' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BatchSetBackupPolicyFailedRecordResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * succeededNum  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    * failedNum  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    * failedInstances  **参数解释**: 设置失败的实例记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'succeededNum' => null,
        'failedNum' => null,
        'failedInstances' => null
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
    * succeededNum  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    * failedNum  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    * failedInstances  **参数解释**: 设置失败的实例记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'succeededNum' => 'succeeded_num',
            'failedNum' => 'failed_num',
            'failedInstances' => 'failed_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * succeededNum  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    * failedNum  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    * failedInstances  **参数解释**: 设置失败的实例记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'succeededNum' => 'setSucceededNum',
            'failedNum' => 'setFailedNum',
            'failedInstances' => 'setFailedInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * succeededNum  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    * failedNum  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    * failedInstances  **参数解释**: 设置失败的实例记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'succeededNum' => 'getSucceededNum',
            'failedNum' => 'getFailedNum',
            'failedInstances' => 'getFailedInstances'
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
        $this->container['succeededNum'] = isset($data['succeededNum']) ? $data['succeededNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['failedInstances'] = isset($data['failedInstances']) ? $data['failedInstances'] : null;
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
    * Gets succeededNum
    *  **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getSucceededNum()
    {
        return $this->container['succeededNum'];
    }

    /**
    * Sets succeededNum
    *
    * @param int|null $succeededNum **参数解释**: 设置成功的实例数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSucceededNum($succeededNum)
    {
        $this->container['succeededNum'] = $succeededNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释**: 设置失败的实例数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets failedInstances
    *  **参数解释**: 设置失败的实例记录。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BatchSetBackupPolicyFailedRecordResult[]|null
    */
    public function getFailedInstances()
    {
        return $this->container['failedInstances'];
    }

    /**
    * Sets failedInstances
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BatchSetBackupPolicyFailedRecordResult[]|null $failedInstances **参数解释**: 设置失败的实例记录。
    *
    * @return $this
    */
    public function setFailedInstances($failedInstances)
    {
        $this->container['failedInstances'] = $failedInstances;
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

