<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubnetIpAvailability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubnetIpAvailability';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cidr  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    * ipVersion  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    * usedIps  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    * totalIps  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cidr' => 'string',
            'ipVersion' => 'int',
            'usedIps' => 'int',
            'totalIps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cidr  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    * ipVersion  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    * usedIps  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    * totalIps  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cidr' => null,
        'ipVersion' => 'int32',
        'usedIps' => 'int32',
        'totalIps' => 'int32'
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
    * cidr  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    * ipVersion  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    * usedIps  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    * totalIps  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cidr' => 'cidr',
            'ipVersion' => 'ipVersion',
            'usedIps' => 'usedIps',
            'totalIps' => 'totalIps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cidr  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    * ipVersion  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    * usedIps  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    * totalIps  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'cidr' => 'setCidr',
            'ipVersion' => 'setIpVersion',
            'usedIps' => 'setUsedIps',
            'totalIps' => 'setTotalIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cidr  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    * ipVersion  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    * usedIps  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    * totalIps  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'cidr' => 'getCidr',
            'ipVersion' => 'getIpVersion',
            'usedIps' => 'getUsedIps',
            'totalIps' => 'getTotalIps'
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
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['usedIps'] = isset($data['usedIps']) ? $data['usedIps'] : null;
        $this->container['totalIps'] = isset($data['totalIps']) ? $data['totalIps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['usedIps'] === null) {
            $invalidProperties[] = "'usedIps' can't be null";
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
    * Gets cidr
    *  **参数解释**：子网的cidr。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr **参数解释**：子网的cidr。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion **参数解释**：网络版本。 **取值范围**：可选值如下： - 4：代表ipV4
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets usedIps
    *  **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getUsedIps()
    {
        return $this->container['usedIps'];
    }

    /**
    * Sets usedIps
    *
    * @param int $usedIps **参数解释**：已使用的IP数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUsedIps($usedIps)
    {
        $this->container['usedIps'] = $usedIps;
        return $this;
    }

    /**
    * Gets totalIps
    *  **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getTotalIps()
    {
        return $this->container['totalIps'];
    }

    /**
    * Sets totalIps
    *
    * @param int|null $totalIps **参数解释**：子网中总的IP数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTotalIps($totalIps)
    {
        $this->container['totalIps'] = $totalIps;
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

