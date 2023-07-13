<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoScalingPolicyReqV11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoScalingPolicyReqV11';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeGroup  弹性伸缩规则适用的节点类型，当前只支持task节点。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeGroup' => 'string',
            'autoScalingPolicy' => '\HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeGroup  弹性伸缩规则适用的节点类型，当前只支持task节点。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeGroup' => null,
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
    * nodeGroup  弹性伸缩规则适用的节点类型，当前只支持task节点。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeGroup' => 'node_group',
            'autoScalingPolicy' => 'auto_scaling_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeGroup  弹性伸缩规则适用的节点类型，当前只支持task节点。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeGroup' => 'setNodeGroup',
            'autoScalingPolicy' => 'setAutoScalingPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeGroup  弹性伸缩规则适用的节点类型，当前只支持task节点。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeGroup' => 'getNodeGroup',
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
    const NODE_GROUP_TASK_NODE_DEFAULT_GROUP = 'task_node_default_group';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeGroupAllowableValues()
    {
        return [
            self::NODE_GROUP_TASK_NODE_DEFAULT_GROUP,
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
        $this->container['nodeGroup'] = isset($data['nodeGroup']) ? $data['nodeGroup'] : null;
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
        if ($this->container['nodeGroup'] === null) {
            $invalidProperties[] = "'nodeGroup' can't be null";
        }
            $allowedValues = $this->getNodeGroupAllowableValues();
                if (!is_null($this->container['nodeGroup']) && !in_array($this->container['nodeGroup'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeGroup', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['autoScalingPolicy'] === null) {
            $invalidProperties[] = "'autoScalingPolicy' can't be null";
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
    * Gets nodeGroup
    *  弹性伸缩规则适用的节点类型，当前只支持task节点。
    *
    * @return string
    */
    public function getNodeGroup()
    {
        return $this->container['nodeGroup'];
    }

    /**
    * Sets nodeGroup
    *
    * @param string $nodeGroup 弹性伸缩规则适用的节点类型，当前只支持task节点。
    *
    * @return $this
    */
    public function setNodeGroup($nodeGroup)
    {
        $this->container['nodeGroup'] = $nodeGroup;
        return $this;
    }

    /**
    * Gets autoScalingPolicy
    *  autoScalingPolicy
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy
    */
    public function getAutoScalingPolicy()
    {
        return $this->container['autoScalingPolicy'];
    }

    /**
    * Sets autoScalingPolicy
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy $autoScalingPolicy autoScalingPolicy
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

