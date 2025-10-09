<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetClusterFlavorSpecsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetClusterFlavorSpecsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterType  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterType  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterType' => null
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
    * clusterType  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterType' => 'clusterType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterType  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterType  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterType' => 'getClusterType'
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
    const CLUSTER_TYPE_VIRTUAL_MACHINE = 'VirtualMachine';
    const CLUSTER_TYPE_ARM64 = 'ARM64';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_VIRTUAL_MACHINE,
            self::CLUSTER_TYPE_ARM64,
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
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterType'] === null) {
            $invalidProperties[] = "'clusterType' can't be null";
        }
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets clusterType
    *  **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @return string
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string $clusterType **参数解释**： 该参数用于按集群架构查询可售卖规格 **取值范围**： - VirtualMachine: CCE集群 - ARM64: 鲲鹏集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
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

