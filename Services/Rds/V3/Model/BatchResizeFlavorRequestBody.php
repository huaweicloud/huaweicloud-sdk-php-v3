<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResizeFlavorRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResizeFlavorRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    * specCode  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    * delay  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * autoPay  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * occupyIp  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'specCode' => 'string',
            'delay' => 'bool',
            'autoPay' => 'bool',
            'occupyIp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    * specCode  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    * delay  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * autoPay  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * occupyIp  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'specCode' => null,
        'delay' => null,
        'autoPay' => null,
        'occupyIp' => null
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
    * instanceIds  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    * specCode  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    * delay  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * autoPay  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * occupyIp  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'specCode' => 'spec_code',
            'delay' => 'delay',
            'autoPay' => 'auto_pay',
            'occupyIp' => 'occupy_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    * specCode  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    * delay  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * autoPay  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * occupyIp  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'specCode' => 'setSpecCode',
            'delay' => 'setDelay',
            'autoPay' => 'setAutoPay',
            'occupyIp' => 'setOccupyIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    * specCode  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    * delay  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * autoPay  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    * occupyIp  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'specCode' => 'getSpecCode',
            'delay' => 'getDelay',
            'autoPay' => 'getAutoPay',
            'occupyIp' => 'getOccupyIp'
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['autoPay'] = isset($data['autoPay']) ? $data['autoPay'] : null;
        $this->container['occupyIp'] = isset($data['occupyIp']) ? $data['occupyIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
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
    * Gets instanceIds
    *  **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds **参数解释**：   实例ID列表。   **约束限制**：  一次最多下发10个实例。   **取值范围**：  不涉及。  **默认取值**：   不涉及。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets specCode
    *  **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode **参数解释**：  资源规格编码。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    *
    * @return bool|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param bool|null $delay **参数解释**：  是否进行定时规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets autoPay
    *  **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    *
    * @return bool|null
    */
    public function getAutoPay()
    {
        return $this->container['autoPay'];
    }

    /**
    * Sets autoPay
    *
    * @param bool|null $autoPay **参数解释**：  变更包周期实例的规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   false
    *
    * @return $this
    */
    public function setAutoPay($autoPay)
    {
        $this->container['autoPay'] = $autoPay;
        return $this;
    }

    /**
    * Gets occupyIp
    *  **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @return bool|null
    */
    public function getOccupyIp()
    {
        return $this->container['occupyIp'];
    }

    /**
    * Sets occupyIp
    *
    * @param bool|null $occupyIp **参数解释**：  表示是否占用ip进行规格变更。  **约束限制**：   不涉及。   **取值范围**：  不涉及。   **默认取值**：   true
    *
    * @return $this
    */
    public function setOccupyIp($occupyIp)
    {
        $this->container['occupyIp'] = $occupyIp;
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

