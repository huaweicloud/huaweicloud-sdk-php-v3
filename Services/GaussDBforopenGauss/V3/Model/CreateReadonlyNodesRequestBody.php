<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReadonlyNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReadonlyNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeDistribution  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeDistribution' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\NodeDistributionOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeDistribution  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeDistribution' => null
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
    * nodeDistribution  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeDistribution' => 'node_distribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeDistribution  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeDistribution' => 'setNodeDistribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeDistribution  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeDistribution' => 'getNodeDistribution'
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
        $this->container['nodeDistribution'] = isset($data['nodeDistribution']) ? $data['nodeDistribution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeDistribution'] === null) {
            $invalidProperties[] = "'nodeDistribution' can't be null";
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
    * Gets nodeDistribution
    *  **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\NodeDistributionOption[]
    */
    public function getNodeDistribution()
    {
        return $this->container['nodeDistribution'];
    }

    /**
    * Sets nodeDistribution
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\NodeDistributionOption[] $nodeDistribution **参数解释**: 新创建只读节点在各可用区的分布情况。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setNodeDistribution($nodeDistribution)
    {
        $this->container['nodeDistribution'] = $nodeDistribution;
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

