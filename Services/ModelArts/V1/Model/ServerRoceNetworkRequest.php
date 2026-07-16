<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerRoceNetworkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerRoceNetworkRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * networkType  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    * physicalNetwork  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'networkType' => 'string',
            'physicalNetwork' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * networkType  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    * physicalNetwork  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'networkType' => null,
        'physicalNetwork' => null
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
    * networkType  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    * physicalNetwork  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'networkType' => 'network_type',
            'physicalNetwork' => 'physical_network'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * networkType  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    * physicalNetwork  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'networkType' => 'setNetworkType',
            'physicalNetwork' => 'setPhysicalNetwork'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * networkType  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    * physicalNetwork  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'networkType' => 'getNetworkType',
            'physicalNetwork' => 'getPhysicalNetwork'
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
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['physicalNetwork'] = isset($data['physicalNetwork']) ? $data['physicalNetwork'] : null;
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
    * Gets networkType
    *  **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType **参数解释**：RoCE网络类型。 **约束限制**：不涉及。 **取值范围**：  - vxlan_roce  - roce_v2  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets physicalNetwork
    *  **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPhysicalNetwork()
    {
        return $this->container['physicalNetwork'];
    }

    /**
    * Sets physicalNetwork
    *
    * @param string|null $physicalNetwork **参数解释**：物理网络名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPhysicalNetwork($physicalNetwork)
    {
        $this->container['physicalNetwork'] = $physicalNetwork;
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

