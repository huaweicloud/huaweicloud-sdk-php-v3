<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * port  **参数说明**：实例的应用/设备的安全接入端口
    * nonTlsPort  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    * websocketPort  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    * domainName  **参数说明**：实例的接入域名
    * privateAddresses  **参数说明**：实例的私网接入地址列表
    * publicAddress  **参数说明**：实例的公网接入地址
    * ipv6Address  **参数说明**：实例的ipv6接入地址列表
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'port' => 'int',
            'nonTlsPort' => 'int',
            'websocketPort' => 'int',
            'domainName' => 'string',
            'privateAddresses' => 'string[]',
            'publicAddress' => 'string[]',
            'ipv6Address' => 'string[]',
            'ipWhitelist' => '\HuaweiCloud\SDK\IoTDM\V5\Model\IPWhiteList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * port  **参数说明**：实例的应用/设备的安全接入端口
    * nonTlsPort  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    * websocketPort  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    * domainName  **参数说明**：实例的接入域名
    * privateAddresses  **参数说明**：实例的私网接入地址列表
    * publicAddress  **参数说明**：实例的公网接入地址
    * ipv6Address  **参数说明**：实例的ipv6接入地址列表
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'port' => 'int32',
        'nonTlsPort' => 'int32',
        'websocketPort' => 'int32',
        'domainName' => null,
        'privateAddresses' => null,
        'publicAddress' => null,
        'ipv6Address' => null,
        'ipWhitelist' => null
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
    * type  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * port  **参数说明**：实例的应用/设备的安全接入端口
    * nonTlsPort  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    * websocketPort  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    * domainName  **参数说明**：实例的接入域名
    * privateAddresses  **参数说明**：实例的私网接入地址列表
    * publicAddress  **参数说明**：实例的公网接入地址
    * ipv6Address  **参数说明**：实例的ipv6接入地址列表
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'port' => 'port',
            'nonTlsPort' => 'non_tls_port',
            'websocketPort' => 'websocket_port',
            'domainName' => 'domain_name',
            'privateAddresses' => 'private_addresses',
            'publicAddress' => 'public_address',
            'ipv6Address' => 'ipv6_address',
            'ipWhitelist' => 'ip_whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * port  **参数说明**：实例的应用/设备的安全接入端口
    * nonTlsPort  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    * websocketPort  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    * domainName  **参数说明**：实例的接入域名
    * privateAddresses  **参数说明**：实例的私网接入地址列表
    * publicAddress  **参数说明**：实例的公网接入地址
    * ipv6Address  **参数说明**：实例的ipv6接入地址列表
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'port' => 'setPort',
            'nonTlsPort' => 'setNonTlsPort',
            'websocketPort' => 'setWebsocketPort',
            'domainName' => 'setDomainName',
            'privateAddresses' => 'setPrivateAddresses',
            'publicAddress' => 'setPublicAddress',
            'ipv6Address' => 'setIpv6Address',
            'ipWhitelist' => 'setIpWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * port  **参数说明**：实例的应用/设备的安全接入端口
    * nonTlsPort  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    * websocketPort  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    * domainName  **参数说明**：实例的接入域名
    * privateAddresses  **参数说明**：实例的私网接入地址列表
    * publicAddress  **参数说明**：实例的公网接入地址
    * ipv6Address  **参数说明**：实例的ipv6接入地址列表
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'port' => 'getPort',
            'nonTlsPort' => 'getNonTlsPort',
            'websocketPort' => 'getWebsocketPort',
            'domainName' => 'getDomainName',
            'privateAddresses' => 'getPrivateAddresses',
            'publicAddress' => 'getPublicAddress',
            'ipv6Address' => 'getIpv6Address',
            'ipWhitelist' => 'getIpWhitelist'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['nonTlsPort'] = isset($data['nonTlsPort']) ? $data['nonTlsPort'] : null;
        $this->container['websocketPort'] = isset($data['websocketPort']) ? $data['websocketPort'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['privateAddresses'] = isset($data['privateAddresses']) ? $data['privateAddresses'] : null;
        $this->container['publicAddress'] = isset($data['publicAddress']) ? $data['publicAddress'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
        $this->container['ipWhitelist'] = isset($data['ipWhitelist']) ? $data['ipWhitelist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && !preg_match("/(APP_HTTPS|APP_AMQP|APP_MQTT|DEVICE_COAP|DEVICE_MQTT|DEVICE_HTTPS)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(APP_HTTPS|APP_AMQP|APP_MQTT|DEVICE_COAP|DEVICE_MQTT|DEVICE_HTTPS)/.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nonTlsPort']) && ($this->container['nonTlsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'nonTlsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['nonTlsPort']) && ($this->container['nonTlsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'nonTlsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['websocketPort']) && ($this->container['websocketPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'websocketPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['websocketPort']) && ($this->container['websocketPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'websocketPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainName']) && !preg_match("/^(?=^.{3,255}$)[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+$/", $this->container['domainName'])) {
                $invalidProperties[] = "invalid value for 'domainName', must be conform to the pattern /^(?=^.{3,255}$)[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+$/.";
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
    * Gets type
    *  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets port
    *  **参数说明**：实例的应用/设备的安全接入端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数说明**：实例的应用/设备的安全接入端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets nonTlsPort
    *  **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    *
    * @return int|null
    */
    public function getNonTlsPort()
    {
        return $this->container['nonTlsPort'];
    }

    /**
    * Sets nonTlsPort
    *
    * @param int|null $nonTlsPort **参数说明**：实例的应用/设备的非安全接入端口。返回null时表示该类型的接入地址不支持非安全端口接入。
    *
    * @return $this
    */
    public function setNonTlsPort($nonTlsPort)
    {
        $this->container['nonTlsPort'] = $nonTlsPort;
        return $this;
    }

    /**
    * Gets websocketPort
    *  **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    *
    * @return int|null
    */
    public function getWebsocketPort()
    {
        return $this->container['websocketPort'];
    }

    /**
    * Sets websocketPort
    *
    * @param int|null $websocketPort **参数说明**：基于WebSocket的MQTT接入端口。返回null时表示该类型的接入地址不支持WebSocket端口接入。
    *
    * @return $this
    */
    public function setWebsocketPort($websocketPort)
    {
        $this->container['websocketPort'] = $websocketPort;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数说明**：实例的接入域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数说明**：实例的接入域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets privateAddresses
    *  **参数说明**：实例的私网接入地址列表
    *
    * @return string[]|null
    */
    public function getPrivateAddresses()
    {
        return $this->container['privateAddresses'];
    }

    /**
    * Sets privateAddresses
    *
    * @param string[]|null $privateAddresses **参数说明**：实例的私网接入地址列表
    *
    * @return $this
    */
    public function setPrivateAddresses($privateAddresses)
    {
        $this->container['privateAddresses'] = $privateAddresses;
        return $this;
    }

    /**
    * Gets publicAddress
    *  **参数说明**：实例的公网接入地址
    *
    * @return string[]|null
    */
    public function getPublicAddress()
    {
        return $this->container['publicAddress'];
    }

    /**
    * Sets publicAddress
    *
    * @param string[]|null $publicAddress **参数说明**：实例的公网接入地址
    *
    * @return $this
    */
    public function setPublicAddress($publicAddress)
    {
        $this->container['publicAddress'] = $publicAddress;
        return $this;
    }

    /**
    * Gets ipv6Address
    *  **参数说明**：实例的ipv6接入地址列表
    *
    * @return string[]|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string[]|null $ipv6Address **参数说明**：实例的ipv6接入地址列表
    *
    * @return $this
    */
    public function setIpv6Address($ipv6Address)
    {
        $this->container['ipv6Address'] = $ipv6Address;
        return $this;
    }

    /**
    * Gets ipWhitelist
    *  ipWhitelist
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\IPWhiteList|null
    */
    public function getIpWhitelist()
    {
        return $this->container['ipWhitelist'];
    }

    /**
    * Sets ipWhitelist
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\IPWhiteList|null $ipWhitelist ipWhitelist
    *
    * @return $this
    */
    public function setIpWhitelist($ipWhitelist)
    {
        $this->container['ipWhitelist'] = $ipWhitelist;
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

