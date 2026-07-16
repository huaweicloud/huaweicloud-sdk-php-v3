<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    * connectionStatus  connectionStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'connectionStatus' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NetworkConnectionStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    * connectionStatus  connectionStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'connectionStatus' => null
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
    * phase  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    * connectionStatus  connectionStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'connectionStatus' => 'connectionStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    * connectionStatus  connectionStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'connectionStatus' => 'setConnectionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    * connectionStatus  connectionStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'connectionStatus' => 'getConnectionStatus'
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
        $this->container['connectionStatus'] = isset($data['connectionStatus']) ? $data['connectionStatus'] : null;
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
    *  **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
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
    * @param string $phase **参数解释**：网络资源的当前状态。 **取值范围**：可选值如下： - Creating：网络创建中。 - Active：网络正常。 - Abnormal：网络异常。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets connectionStatus
    *  connectionStatus
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NetworkConnectionStatus|null
    */
    public function getConnectionStatus()
    {
        return $this->container['connectionStatus'];
    }

    /**
    * Sets connectionStatus
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NetworkConnectionStatus|null $connectionStatus connectionStatus
    *
    * @return $this
    */
    public function setConnectionStatus($connectionStatus)
    {
        $this->container['connectionStatus'] = $connectionStatus;
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

