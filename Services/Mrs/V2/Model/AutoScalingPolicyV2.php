<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingPolicyV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingPolicyV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeGroupName  节点组名称。
    * resourcePoolName  资源计划名称
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeGroupName' => 'string',
            'resourcePoolName' => 'string',
            'autoScalingPolicy' => '\HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeGroupName  节点组名称。
    * resourcePoolName  资源计划名称
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeGroupName' => null,
        'resourcePoolName' => null,
        'autoScalingPolicy' => null
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
    * nodeGroupName  节点组名称。
    * resourcePoolName  资源计划名称
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeGroupName' => 'node_group_name',
            'resourcePoolName' => 'resource_pool_name',
            'autoScalingPolicy' => 'auto_scaling_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeGroupName  节点组名称。
    * resourcePoolName  资源计划名称
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeGroupName' => 'setNodeGroupName',
            'resourcePoolName' => 'setResourcePoolName',
            'autoScalingPolicy' => 'setAutoScalingPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeGroupName  节点组名称。
    * resourcePoolName  资源计划名称
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeGroupName' => 'getNodeGroupName',
            'resourcePoolName' => 'getResourcePoolName',
            'autoScalingPolicy' => 'getAutoScalingPolicy'
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
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
        $this->container['resourcePoolName'] = isset($data['resourcePoolName']) ? $data['resourcePoolName'] : null;
        $this->container['autoScalingPolicy'] = isset($data['autoScalingPolicy']) ? $data['autoScalingPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourcePoolName'] === null) {
            $invalidProperties[] = "'resourcePoolName' can't be null";
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
    * Gets nodeGroupName
    *  节点组名称。
    *
    * @return string|null
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string|null $nodeGroupName 节点组名称。
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
        return $this;
    }

    /**
    * Gets resourcePoolName
    *  资源计划名称
    *
    * @return string
    */
    public function getResourcePoolName()
    {
        return $this->container['resourcePoolName'];
    }

    /**
    * Sets resourcePoolName
    *
    * @param string $resourcePoolName 资源计划名称
    *
    * @return $this
    */
    public function setResourcePoolName($resourcePoolName)
    {
        $this->container['resourcePoolName'] = $resourcePoolName;
        return $this;
    }

    /**
    * Gets autoScalingPolicy
    *  autoScalingPolicy
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy|null
    */
    public function getAutoScalingPolicy()
    {
        return $this->container['autoScalingPolicy'];
    }

    /**
    * Sets autoScalingPolicy
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy|null $autoScalingPolicy autoScalingPolicy
    *
    * @return $this
    */
    public function setAutoScalingPolicy($autoScalingPolicy)
    {
        $this->container['autoScalingPolicy'] = $autoScalingPolicy;
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

