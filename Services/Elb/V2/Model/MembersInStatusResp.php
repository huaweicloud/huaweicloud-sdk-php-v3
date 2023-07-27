<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MembersInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MembersInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后端云服务器ID
    * address  后端云服务器的IP地址
    * protocolPort  后端云服务器的端口号
    * operatingStatus  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'address' => 'string',
            'protocolPort' => 'int',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后端云服务器ID
    * address  后端云服务器的IP地址
    * protocolPort  后端云服务器的端口号
    * operatingStatus  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'operatingStatus' => null,
        'provisioningStatus' => null
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
    * id  后端云服务器ID
    * address  后端云服务器的IP地址
    * protocolPort  后端云服务器的端口号
    * operatingStatus  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后端云服务器ID
    * address  后端云服务器的IP地址
    * protocolPort  后端云服务器的端口号
    * operatingStatus  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后端云服务器ID
    * address  后端云服务器的IP地址
    * protocolPort  后端云服务器的端口号
    * operatingStatus  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    * provisioningStatus  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'operatingStatus' => 'getOperatingStatus',
            'provisioningStatus' => 'getProvisioningStatus'
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
    const OPERATING_STATUS_ONLINE = 'ONLINE';
    const OPERATING_STATUS_OFFLINE = 'OFFLINE';
    const OPERATING_STATUS_DISABLED = 'DISABLED';
    const OPERATING_STATUS_NO_MONITOR = 'NO_MONITOR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatingStatusAllowableValues()
    {
        return [
            self::OPERATING_STATUS_ONLINE,
            self::OPERATING_STATUS_OFFLINE,
            self::OPERATING_STATUS_DISABLED,
            self::OPERATING_STATUS_NO_MONITOR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 64)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['address']) < 0)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
        }
            if (($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['protocolPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 0.";
            }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
            $allowedValues = $this->getOperatingStatusAllowableValues();
                if (!is_null($this->container['operatingStatus']) && !in_array($this->container['operatingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operatingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operatingStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['operatingStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
            if ((mb_strlen($this->container['provisioningStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['provisioningStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  后端云服务器ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 后端云服务器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets address
    *  后端云服务器的IP地址
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 后端云服务器的IP地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端云服务器的端口号
    *
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort 后端云服务器的端口号
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    *
    * @return string
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string $operatingStatus 后端云服务器的健康检状态；可以为：ONLINE：健康检查在线；OFFLINE：健康检查离线；DISABLED：后端云服务器无对应的弹性云服务器；NO_MONITOR：健康检查未开启
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 监听器的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

