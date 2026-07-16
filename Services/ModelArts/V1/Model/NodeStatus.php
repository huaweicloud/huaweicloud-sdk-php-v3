<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    * az  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    * privateIp  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    * resources  resources
    * availableResources  availableResources
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'az' => 'string',
            'privateIp' => 'string',
            'resources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource',
            'availableResources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    * az  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    * privateIp  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    * resources  resources
    * availableResources  availableResources
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'az' => null,
        'privateIp' => null,
        'resources' => null,
        'availableResources' => null
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
    * phase  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    * az  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    * privateIp  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    * resources  resources
    * availableResources  availableResources
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'az' => 'az',
            'privateIp' => 'privateIp',
            'resources' => 'resources',
            'availableResources' => 'availableResources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    * az  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    * privateIp  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    * resources  resources
    * availableResources  availableResources
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'az' => 'setAz',
            'privateIp' => 'setPrivateIp',
            'resources' => 'setResources',
            'availableResources' => 'setAvailableResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    * az  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    * privateIp  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    * resources  resources
    * availableResources  availableResources
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'az' => 'getAz',
            'privateIp' => 'getPrivateIp',
            'resources' => 'getResources',
            'availableResources' => 'getAvailableResources'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['availableResources'] = isset($data['availableResources']) ? $data['availableResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phase'] === null) {
            $invalidProperties[] = "'phase' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['availableResources'] === null) {
            $invalidProperties[] = "'availableResources' can't be null";
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
    * Gets phase
    *  **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    *
    * @return string
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string $phase **参数解释**：节点当前状态。 **取值范围**：可选值如下： - Available：节点可用。 - Creating：节点创建中。 - Deleting：节点删除中。 - Abnormal：节点异常。 - Checking: 节点自检中。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets az
    *  **参数解释**：节点所在的az。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az **参数解释**：节点所在的az。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**：节点的IP地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets availableResources
    *  availableResources
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource
    */
    public function getAvailableResources()
    {
        return $this->container['availableResources'];
    }

    /**
    * Sets availableResources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResource $availableResources availableResources
    *
    * @return $this
    */
    public function setAvailableResources($availableResources)
    {
        $this->container['availableResources'] = $availableResources;
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

