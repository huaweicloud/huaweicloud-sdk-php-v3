<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolSpecUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolSpecUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    * autoscaling  autoscaling
    * extensionScaleGroups  extensionScaleGroups
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeTemplate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate',
            'initialNodeCount' => 'int',
            'autoscaling' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling',
            'extensionScaleGroups' => '\HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    * autoscaling  autoscaling
    * extensionScaleGroups  extensionScaleGroups
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeTemplate' => null,
        'initialNodeCount' => 'int32',
        'autoscaling' => null,
        'extensionScaleGroups' => null
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
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    * autoscaling  autoscaling
    * extensionScaleGroups  extensionScaleGroups
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeTemplate' => 'nodeTemplate',
            'initialNodeCount' => 'initialNodeCount',
            'autoscaling' => 'autoscaling',
            'extensionScaleGroups' => 'extensionScaleGroups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    * autoscaling  autoscaling
    * extensionScaleGroups  extensionScaleGroups
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeTemplate' => 'setNodeTemplate',
            'initialNodeCount' => 'setInitialNodeCount',
            'autoscaling' => 'setAutoscaling',
            'extensionScaleGroups' => 'setExtensionScaleGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeTemplate  nodeTemplate
    * initialNodeCount  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    * autoscaling  autoscaling
    * extensionScaleGroups  extensionScaleGroups
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeTemplate' => 'getNodeTemplate',
            'initialNodeCount' => 'getInitialNodeCount',
            'autoscaling' => 'getAutoscaling',
            'extensionScaleGroups' => 'getExtensionScaleGroups'
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
        $this->container['nodeTemplate'] = isset($data['nodeTemplate']) ? $data['nodeTemplate'] : null;
        $this->container['initialNodeCount'] = isset($data['initialNodeCount']) ? $data['initialNodeCount'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['extensionScaleGroups'] = isset($data['extensionScaleGroups']) ? $data['extensionScaleGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeTemplate'] === null) {
            $invalidProperties[] = "'nodeTemplate' can't be null";
        }
        if ($this->container['initialNodeCount'] === null) {
            $invalidProperties[] = "'initialNodeCount' can't be null";
        }
        if ($this->container['autoscaling'] === null) {
            $invalidProperties[] = "'autoscaling' can't be null";
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
    * Gets nodeTemplate
    *  nodeTemplate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate
    */
    public function getNodeTemplate()
    {
        return $this->container['nodeTemplate'];
    }

    /**
    * Sets nodeTemplate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate $nodeTemplate nodeTemplate
    *
    * @return $this
    */
    public function setNodeTemplate($nodeTemplate)
    {
        $this->container['nodeTemplate'] = $nodeTemplate;
        return $this;
    }

    /**
    * Gets initialNodeCount
    *  节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    *
    * @return int
    */
    public function getInitialNodeCount()
    {
        return $this->container['initialNodeCount'];
    }

    /**
    * Sets initialNodeCount
    *
    * @param int $initialNodeCount 节点池初始化节点个数。查询时为节点池目标节点数量。默认值为0。
    *
    * @return $this
    */
    public function setInitialNodeCount($initialNodeCount)
    {
        $this->container['initialNodeCount'] = $initialNodeCount;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets extensionScaleGroups
    *  extensionScaleGroups
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup|null
    */
    public function getExtensionScaleGroups()
    {
        return $this->container['extensionScaleGroups'];
    }

    /**
    * Sets extensionScaleGroups
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup|null $extensionScaleGroups extensionScaleGroups
    *
    * @return $this
    */
    public function setExtensionScaleGroups($extensionScaleGroups)
    {
        $this->container['extensionScaleGroups'] = $extensionScaleGroups;
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

