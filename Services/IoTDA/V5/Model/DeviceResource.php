<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceName  deviceName
    * deviceId  deviceId
    * nodeId  nodeId
    * productId  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    * tags  **参数说明**：设备绑定的标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceName' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef',
            'deviceId' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef',
            'nodeId' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef',
            'productId' => 'object',
            'tags' => '\HuaweiCloud\SDK\IoTDA\V5\Model\TagRef[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceName  deviceName
    * deviceId  deviceId
    * nodeId  nodeId
    * productId  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    * tags  **参数说明**：设备绑定的标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceName' => null,
        'deviceId' => null,
        'nodeId' => null,
        'productId' => null,
        'tags' => null
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
    * deviceName  deviceName
    * deviceId  deviceId
    * nodeId  nodeId
    * productId  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    * tags  **参数说明**：设备绑定的标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceName' => 'device_name',
            'deviceId' => 'device_id',
            'nodeId' => 'node_id',
            'productId' => 'product_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceName  deviceName
    * deviceId  deviceId
    * nodeId  nodeId
    * productId  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    * tags  **参数说明**：设备绑定的标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceName' => 'setDeviceName',
            'deviceId' => 'setDeviceId',
            'nodeId' => 'setNodeId',
            'productId' => 'setProductId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceName  deviceName
    * deviceId  deviceId
    * nodeId  nodeId
    * productId  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    * tags  **参数说明**：设备绑定的标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceName' => 'getDeviceName',
            'deviceId' => 'getDeviceId',
            'nodeId' => 'getNodeId',
            'productId' => 'getProductId',
            'tags' => 'getTags'
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
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
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
    * Gets deviceName
    *  deviceName
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef|null $deviceName deviceName
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets deviceId
    *  deviceId
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef|null $deviceId deviceId
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  nodeId
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ParameterRef $nodeId nodeId
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets productId
    *  **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    *
    * @return object
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param object $productId **参数说明**：设备所属的产品id，可以是一个明确的静态字符串id，也可以是动态的模板参数引用 - 明确的静态字符串：\"642bf260f2f9030e44210d8d\"。**取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。\" - 参数引用: {\"ref\" : \"iotda::certificate::country\"}
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数说明**：设备绑定的标签列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\TagRef[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\TagRef[]|null $tags **参数说明**：设备绑定的标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

