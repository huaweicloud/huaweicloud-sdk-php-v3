<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDeviceProxy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDeviceProxy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxyName  **参数说明**：设备代理名称
    * proxyDevices  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxyName' => 'string',
            'proxyDevices' => 'string[]',
            'effectiveTimeRange' => '\HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRange',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxyName  **参数说明**：设备代理名称
    * proxyDevices  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxyName' => null,
        'proxyDevices' => null,
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
    * proxyName  **参数说明**：设备代理名称
    * proxyDevices  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxyName' => 'proxy_name',
            'proxyDevices' => 'proxy_devices',
            'effectiveTimeRange' => 'effective_time_range',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxyName  **参数说明**：设备代理名称
    * proxyDevices  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxyName' => 'setProxyName',
            'proxyDevices' => 'setProxyDevices',
            'effectiveTimeRange' => 'setEffectiveTimeRange',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxyName  **参数说明**：设备代理名称
    * proxyDevices  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    * effectiveTimeRange  effectiveTimeRange
    * appId  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxyName' => 'getProxyName',
            'proxyDevices' => 'getProxyDevices',
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
        $this->container['proxyName'] = isset($data['proxyName']) ? $data['proxyName'] : null;
        $this->container['proxyDevices'] = isset($data['proxyDevices']) ? $data['proxyDevices'] : null;
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
        if ($this->container['proxyName'] === null) {
            $invalidProperties[] = "'proxyName' can't be null";
        }
            if ((mb_strlen($this->container['proxyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'proxyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['proxyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'proxyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['proxyName'])) {
                $invalidProperties[] = "invalid value for 'proxyName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
            }
        if ($this->container['proxyDevices'] === null) {
            $invalidProperties[] = "'proxyDevices' can't be null";
        }
        if ($this->container['effectiveTimeRange'] === null) {
            $invalidProperties[] = "'effectiveTimeRange' can't be null";
        }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
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
    * Gets proxyName
    *  **参数说明**：设备代理名称
    *
    * @return string
    */
    public function getProxyName()
    {
        return $this->container['proxyName'];
    }

    /**
    * Sets proxyName
    *
    * @param string $proxyName **参数说明**：设备代理名称
    *
    * @return $this
    */
    public function setProxyName($proxyName)
    {
        $this->container['proxyName'] = $proxyName;
        return $this;
    }

    /**
    * Gets proxyDevices
    *  **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    *
    * @return string[]
    */
    public function getProxyDevices()
    {
        return $this->container['proxyDevices'];
    }

    /**
    * Sets proxyDevices
    *
    * @param string[] $proxyDevices **参数说明**：代理设备列表，列表内所有设备共享网关权限，即列表内任意一个网关下的子设备可以通过组里任意一个网关上线然后进行数据上报。 **取值范围**：列表内填写设备id，列表内最少有2个设备id，最多有10个设备id，设备id取值范围：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合，建议不少于4个字符。
    *
    * @return $this
    */
    public function setProxyDevices($proxyDevices)
    {
        $this->container['proxyDevices'] = $proxyDevices;
        return $this;
    }

    /**
    * Gets effectiveTimeRange
    *  effectiveTimeRange
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRange
    */
    public function getEffectiveTimeRange()
    {
        return $this->container['effectiveTimeRange'];
    }

    /**
    * Sets effectiveTimeRange
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\EffectiveTimeRange $effectiveTimeRange effectiveTimeRange
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
    *  **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId **参数说明**：资源空间ID。携带该参数指定创建的设备归属到哪个资源空间下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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

