<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEngineSupportFeaturesPropertiesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEngineSupportFeaturesPropertiesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxTask  转储功能的最大任务数。
    * minTask  转储功能的最小任务数。
    * maxNode  转储功能的最大节点数。
    * minNode  转储功能的最小节点数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxTask' => 'string',
            'minTask' => 'string',
            'maxNode' => 'string',
            'minNode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxTask  转储功能的最大任务数。
    * minTask  转储功能的最小任务数。
    * maxNode  转储功能的最大节点数。
    * minNode  转储功能的最小节点数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxTask' => null,
        'minTask' => null,
        'maxNode' => null,
        'minNode' => null
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
    * maxTask  转储功能的最大任务数。
    * minTask  转储功能的最小任务数。
    * maxNode  转储功能的最大节点数。
    * minNode  转储功能的最小节点数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxTask' => 'max_task',
            'minTask' => 'min_task',
            'maxNode' => 'max_node',
            'minNode' => 'min_node'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxTask  转储功能的最大任务数。
    * minTask  转储功能的最小任务数。
    * maxNode  转储功能的最大节点数。
    * minNode  转储功能的最小节点数。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxTask' => 'setMaxTask',
            'minTask' => 'setMinTask',
            'maxNode' => 'setMaxNode',
            'minNode' => 'setMinNode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxTask  转储功能的最大任务数。
    * minTask  转储功能的最小任务数。
    * maxNode  转储功能的最大节点数。
    * minNode  转储功能的最小节点数。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxTask' => 'getMaxTask',
            'minTask' => 'getMinTask',
            'maxNode' => 'getMaxNode',
            'minNode' => 'getMinNode'
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
        $this->container['maxTask'] = isset($data['maxTask']) ? $data['maxTask'] : null;
        $this->container['minTask'] = isset($data['minTask']) ? $data['minTask'] : null;
        $this->container['maxNode'] = isset($data['maxNode']) ? $data['maxNode'] : null;
        $this->container['minNode'] = isset($data['minNode']) ? $data['minNode'] : null;
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
    * Gets maxTask
    *  转储功能的最大任务数。
    *
    * @return string|null
    */
    public function getMaxTask()
    {
        return $this->container['maxTask'];
    }

    /**
    * Sets maxTask
    *
    * @param string|null $maxTask 转储功能的最大任务数。
    *
    * @return $this
    */
    public function setMaxTask($maxTask)
    {
        $this->container['maxTask'] = $maxTask;
        return $this;
    }

    /**
    * Gets minTask
    *  转储功能的最小任务数。
    *
    * @return string|null
    */
    public function getMinTask()
    {
        return $this->container['minTask'];
    }

    /**
    * Sets minTask
    *
    * @param string|null $minTask 转储功能的最小任务数。
    *
    * @return $this
    */
    public function setMinTask($minTask)
    {
        $this->container['minTask'] = $minTask;
        return $this;
    }

    /**
    * Gets maxNode
    *  转储功能的最大节点数。
    *
    * @return string|null
    */
    public function getMaxNode()
    {
        return $this->container['maxNode'];
    }

    /**
    * Sets maxNode
    *
    * @param string|null $maxNode 转储功能的最大节点数。
    *
    * @return $this
    */
    public function setMaxNode($maxNode)
    {
        $this->container['maxNode'] = $maxNode;
        return $this;
    }

    /**
    * Gets minNode
    *  转储功能的最小节点数。
    *
    * @return string|null
    */
    public function getMinNode()
    {
        return $this->container['minNode'];
    }

    /**
    * Sets minNode
    *
    * @param string|null $minNode 转储功能的最小节点数。
    *
    * @return $this
    */
    public function setMinNode($minNode)
    {
        $this->container['minNode'] = $minNode;
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

