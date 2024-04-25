<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDeviceProxySimplify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDeviceProxySimplify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxyId  **参数说明**：代理ID。用来唯一标识一个代理规则
    * proxyName  **参数说明**：设备代理名称
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxyId' => 'string',
            'proxyName' => 'string',
            'effectiveTimeRange' => '\HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRangeResponseDTO',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxyId  **参数说明**：代理ID。用来唯一标识一个代理规则
    * proxyName  **参数说明**：设备代理名称
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxyId' => null,
        'proxyName' => null,
        'effectiveTimeRange' => null,
        'appId' => null
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
    * proxyId  **参数说明**：代理ID。用来唯一标识一个代理规则
    * proxyName  **参数说明**：设备代理名称
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxyId' => 'proxy_id',
            'proxyName' => 'proxy_name',
            'effectiveTimeRange' => 'effective_time_range',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxyId  **参数说明**：代理ID。用来唯一标识一个代理规则
    * proxyName  **参数说明**：设备代理名称
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxyId' => 'setProxyId',
            'proxyName' => 'setProxyName',
            'effectiveTimeRange' => 'setEffectiveTimeRange',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxyId  **参数说明**：代理ID。用来唯一标识一个代理规则
    * proxyName  **参数说明**：设备代理名称
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxyId' => 'getProxyId',
            'proxyName' => 'getProxyName',
            'effectiveTimeRange' => 'getEffectiveTimeRange',
            'appId' => 'getAppId'
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
        $this->container['proxyId'] = isset($data['proxyId']) ? $data['proxyId'] : null;
        $this->container['proxyName'] = isset($data['proxyName']) ? $data['proxyName'] : null;
        $this->container['effectiveTimeRange'] = isset($data['effectiveTimeRange']) ? $data['effectiveTimeRange'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['proxyId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['proxyId'])) {
                $invalidProperties[] = "invalid value for 'proxyId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
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
    * Gets proxyId
    *  **参数说明**：代理ID。用来唯一标识一个代理规则
    *
    * @return string|null
    */
    public function getProxyId()
    {
        return $this->container['proxyId'];
    }

    /**
    * Sets proxyId
    *
    * @param string|null $proxyId **参数说明**：代理ID。用来唯一标识一个代理规则
    *
    * @return $this
    */
    public function setProxyId($proxyId)
    {
        $this->container['proxyId'] = $proxyId;
        return $this;
    }

    /**
    * Gets proxyName
    *  **参数说明**：设备代理名称
    *
    * @return string|null
    */
    public function getProxyName()
    {
        return $this->container['proxyName'];
    }

    /**
    * Sets proxyName
    *
    * @param string|null $proxyName **参数说明**：设备代理名称
    *
    * @return $this
    */
    public function setProxyName($proxyName)
    {
        $this->container['proxyName'] = $proxyName;
        return $this;
    }

    /**
    * Gets effectiveTimeRange
    *  effectiveTimeRange
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRangeResponseDTO|null
    */
    public function getEffectiveTimeRange()
    {
        return $this->container['effectiveTimeRange'];
    }

    /**
    * Sets effectiveTimeRange
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRangeResponseDTO|null $effectiveTimeRange effectiveTimeRange
    *
    * @return $this
    */
    public function setEffectiveTimeRange($effectiveTimeRange)
    {
        $this->container['effectiveTimeRange'] = $effectiveTimeRange;
        return $this;
    }

    /**
    * Gets appId
    *  **参数说明**：资源空间ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数说明**：资源空间ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

