<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWhitelistReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWhitelistReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  白名单所在的项目ID
    * listenerId  白名单关联的监听器ID
    * enableWhitelist  是否开启白名单访问控制开关。true：开启；false：关闭
    * whitelist  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'listenerId' => 'string',
            'enableWhitelist' => 'bool',
            'whitelist' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  白名单所在的项目ID
    * listenerId  白名单关联的监听器ID
    * enableWhitelist  是否开启白名单访问控制开关。true：开启；false：关闭
    * whitelist  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'listenerId' => null,
        'enableWhitelist' => null,
        'whitelist' => null
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
    * tenantId  白名单所在的项目ID
    * listenerId  白名单关联的监听器ID
    * enableWhitelist  是否开启白名单访问控制开关。true：开启；false：关闭
    * whitelist  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'listenerId' => 'listener_id',
            'enableWhitelist' => 'enable_whitelist',
            'whitelist' => 'whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  白名单所在的项目ID
    * listenerId  白名单关联的监听器ID
    * enableWhitelist  是否开启白名单访问控制开关。true：开启；false：关闭
    * whitelist  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'listenerId' => 'setListenerId',
            'enableWhitelist' => 'setEnableWhitelist',
            'whitelist' => 'setWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  白名单所在的项目ID
    * listenerId  白名单关联的监听器ID
    * enableWhitelist  是否开启白名单访问控制开关。true：开启；false：关闭
    * whitelist  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'listenerId' => 'getListenerId',
            'enableWhitelist' => 'getEnableWhitelist',
            'whitelist' => 'getWhitelist'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['enableWhitelist'] = isset($data['enableWhitelist']) ? $data['enableWhitelist'] : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listenerId'] === null) {
            $invalidProperties[] = "'listenerId' can't be null";
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
    * Gets tenantId
    *  白名单所在的项目ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 白名单所在的项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets listenerId
    *  白名单关联的监听器ID
    *
    * @return string
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string $listenerId 白名单关联的监听器ID
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets enableWhitelist
    *  是否开启白名单访问控制开关。true：开启；false：关闭
    *
    * @return bool|null
    */
    public function getEnableWhitelist()
    {
        return $this->container['enableWhitelist'];
    }

    /**
    * Sets enableWhitelist
    *
    * @param bool|null $enableWhitelist 是否开启白名单访问控制开关。true：开启；false：关闭
    *
    * @return $this
    */
    public function setEnableWhitelist($enableWhitelist)
    {
        $this->container['enableWhitelist'] = $enableWhitelist;
        return $this;
    }

    /**
    * Gets whitelist
    *  白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @return string|null
    */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
    * Sets whitelist
    *
    * @param string|null $whitelist 白名单IP列表。可以是ip，例如192.168.10.123。也可以是一个网段，例如192.168.10.1/24。不同的值之间用逗号分隔。 不传，默认为空。
    *
    * @return $this
    */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;
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

