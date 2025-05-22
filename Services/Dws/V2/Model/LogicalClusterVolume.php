<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * usage  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    * total  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    * percent  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusterName' => 'string',
            'usage' => 'string',
            'total' => 'string',
            'percent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * usage  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    * total  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    * percent  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusterName' => null,
        'usage' => null,
        'total' => null,
        'percent' => null
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
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * usage  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    * total  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    * percent  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusterName' => 'logical_cluster_name',
            'usage' => 'usage',
            'total' => 'total',
            'percent' => 'percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * usage  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    * total  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    * percent  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusterName' => 'setLogicalClusterName',
            'usage' => 'setUsage',
            'total' => 'setTotal',
            'percent' => 'setPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * usage  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    * total  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    * percent  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusterName' => 'getLogicalClusterName',
            'usage' => 'getUsage',
            'total' => 'getTotal',
            'percent' => 'getPercent'
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
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
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
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets usage
    *  **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string|null $usage **参数解释**： 磁盘使用量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param string|null $total **参数解释**： 磁盘总量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets percent
    *  **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
    * Sets percent
    *
    * @param string|null $percent **参数解释**： 磁盘使用比例。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;
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

