<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogicalClustersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogicalClustersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusters  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    * count  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    * addEnable  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusters' => '\HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterInfo[]',
            'count' => 'int',
            'addEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusters  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    * count  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    * addEnable  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusters' => null,
        'count' => 'int32',
        'addEnable' => null
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
    * logicalClusters  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    * count  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    * addEnable  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusters' => 'logical_clusters',
            'count' => 'count',
            'addEnable' => 'add_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusters  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    * count  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    * addEnable  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusters' => 'setLogicalClusters',
            'count' => 'setCount',
            'addEnable' => 'setAddEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusters  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    * count  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    * addEnable  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusters' => 'getLogicalClusters',
            'count' => 'getCount',
            'addEnable' => 'getAddEnable'
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
        $this->container['logicalClusters'] = isset($data['logicalClusters']) ? $data['logicalClusters'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['addEnable'] = isset($data['addEnable']) ? $data['addEnable'] : null;
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
    * Gets logicalClusters
    *  **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterInfo[]|null
    */
    public function getLogicalClusters()
    {
        return $this->container['logicalClusters'];
    }

    /**
    * Sets logicalClusters
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterInfo[]|null $logicalClusters **参数解释**： 逻辑集群列表信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusters($logicalClusters)
    {
        $this->container['logicalClusters'] = $logicalClusters;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 逻辑集群总数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets addEnable
    *  **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAddEnable()
    {
        return $this->container['addEnable'];
    }

    /**
    * Sets addEnable
    *
    * @param bool|null $addEnable **参数解释**： 作为互斥结果，如果集群内有其他运维操作，该值为false，此时不能添加逻辑集群。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAddEnable($addEnable)
    {
        $this->container['addEnable'] = $addEnable;
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

