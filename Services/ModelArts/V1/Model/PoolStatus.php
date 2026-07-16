<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    * message  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    * resources  resources
    * scope  **参数解释**：资源池当前支持的业务类型的状态信息。
    * driver  driver
    * parent  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    * root  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    * clusters  clusters
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'message' => 'string',
            'resources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusResources',
            'scope' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusScope[]',
            'driver' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusDriver',
            'parent' => 'string',
            'root' => 'string',
            'clusters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClusters'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    * message  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    * resources  resources
    * scope  **参数解释**：资源池当前支持的业务类型的状态信息。
    * driver  driver
    * parent  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    * root  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    * clusters  clusters
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'message' => null,
        'resources' => null,
        'scope' => null,
        'driver' => null,
        'parent' => null,
        'root' => null,
        'clusters' => null
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
    * phase  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    * message  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    * resources  resources
    * scope  **参数解释**：资源池当前支持的业务类型的状态信息。
    * driver  driver
    * parent  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    * root  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    * clusters  clusters
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'message' => 'message',
            'resources' => 'resources',
            'scope' => 'scope',
            'driver' => 'driver',
            'parent' => 'parent',
            'root' => 'root',
            'clusters' => 'clusters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    * message  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    * resources  resources
    * scope  **参数解释**：资源池当前支持的业务类型的状态信息。
    * driver  driver
    * parent  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    * root  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    * clusters  clusters
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'message' => 'setMessage',
            'resources' => 'setResources',
            'scope' => 'setScope',
            'driver' => 'setDriver',
            'parent' => 'setParent',
            'root' => 'setRoot',
            'clusters' => 'setClusters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    * message  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    * resources  resources
    * scope  **参数解释**：资源池当前支持的业务类型的状态信息。
    * driver  driver
    * parent  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    * root  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    * clusters  clusters
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'message' => 'getMessage',
            'resources' => 'getResources',
            'scope' => 'getScope',
            'driver' => 'getDriver',
            'parent' => 'getParent',
            'root' => 'getRoot',
            'clusters' => 'getClusters'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['root'] = isset($data['root']) ? $data['root'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
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
    *  **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
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
    * @param string $phase **参数解释**：资源池的状态。 **取值范围**：可选值如下： - Creating：资源池在创建中。 - Running：资源池在运行中。 - Abnormal：资源池异常。 - Deleting：资源池在删除中。 - Error：资源池错误。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：资源池当前状态的提示信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusResources|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusResources|null $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**：资源池当前支持的业务类型的状态信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusScope[]|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusScope[]|null $scope **参数解释**：资源池当前支持的业务类型的状态信息。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets driver
    *  driver
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusDriver|null
    */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
    * Sets driver
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusDriver|null $driver driver
    *
    * @return $this
    */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;
        return $this;
    }

    /**
    * Gets parent
    *  **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param string|null $parent **参数解释**：资源池所属父资源池的ID。物理池为空。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
        return $this;
    }

    /**
    * Gets root
    *  **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRoot()
    {
        return $this->container['root'];
    }

    /**
    * Sets root
    *
    * @param string|null $root **参数解释**：资源池根资源池的ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRoot($root)
    {
        $this->container['root'] = $root;
        return $this;
    }

    /**
    * Gets clusters
    *  clusters
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClusters|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClusters|null $clusters clusters
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
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

