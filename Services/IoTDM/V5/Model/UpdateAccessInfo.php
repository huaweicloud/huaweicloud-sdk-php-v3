<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAccessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAccessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessType  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * domainName  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    * publicAddressesEnable  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessType' => 'string',
            'domainName' => 'string',
            'publicAddressesEnable' => 'bool',
            'ipWhitelist' => '\HuaweiCloud\SDK\IoTDM\V5\Model\IPWhiteList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessType  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * domainName  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    * publicAddressesEnable  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessType' => null,
        'domainName' => null,
        'publicAddressesEnable' => null,
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
    * accessType  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * domainName  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    * publicAddressesEnable  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessType' => 'access_type',
            'domainName' => 'domain_name',
            'publicAddressesEnable' => 'public_addresses_enable',
            'ipWhitelist' => 'ip_whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessType  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * domainName  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    * publicAddressesEnable  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $setters = [
            'accessType' => 'setAccessType',
            'domainName' => 'setDomainName',
            'publicAddressesEnable' => 'setPublicAddressesEnable',
            'ipWhitelist' => 'setIpWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessType  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    * domainName  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    * publicAddressesEnable  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    * ipWhitelist  ipWhitelist
    *
    * @var string[]
    */
    protected static $getters = [
            'accessType' => 'getAccessType',
            'domainName' => 'getDomainName',
            'publicAddressesEnable' => 'getPublicAddressesEnable',
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
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['publicAddressesEnable'] = isset($data['publicAddressesEnable']) ? $data['publicAddressesEnable'] : null;
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
        if ($this->container['accessType'] === null) {
            $invalidProperties[] = "'accessType' can't be null";
        }
            if (!preg_match("/(APP_HTTPS|APP_AMQP|APP_MQTT|DEVICE_COAP|DEVICE_MQTT|DEVICE_HTTPS)/", $this->container['accessType'])) {
                $invalidProperties[] = "invalid value for 'accessType', must be conform to the pattern /(APP_HTTPS|APP_AMQP|APP_MQTT|DEVICE_COAP|DEVICE_MQTT|DEVICE_HTTPS)/.";
            }
            if (!is_null($this->container['domainName']) && !preg_match("/^([a-zA-Z0-9]+(-[a-zA-Z0-9]+)*\\.)+[a-zA-Z0-9]{0,}$/", $this->container['domainName'])) {
                $invalidProperties[] = "invalid value for 'domainName', must be conform to the pattern /^([a-zA-Z0-9]+(-[a-zA-Z0-9]+)*\\.)+[a-zA-Z0-9]{0,}$/.";
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
    * Gets accessType
    *  **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    *
    * @return string
    */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
    * Sets accessType
    *
    * @param string $accessType **参数说明**：接入地址的类型，如应用接入的HTTPS协议的取值为：APP_HTTPS，设备接入的MQTT协议的取值为：DEVICE_MQTT。 **取值范围**： - APP_HTTPS：应用接入HTTPS协议 - APP_AMQP：应用接入AMQP协议 - APP_MQTT：应用接入MQTT协议 - DEVICE_COAP：设备接入COAP协议 - DEVICE_MQTT：设备接入MQTT协议 - DEVICE_HTTPS：设备接入HTTPS协议
    *
    * @return $this
    */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数说明**：接入域名，如果需要更新域名，则携带该字段。
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
    * @param string|null $domainName **参数说明**：接入域名，如果需要更新域名，则携带该字段。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets publicAddressesEnable
    *  **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    *
    * @return bool|null
    */
    public function getPublicAddressesEnable()
    {
        return $this->container['publicAddressesEnable'];
    }

    /**
    * Sets publicAddressesEnable
    *
    * @param bool|null $publicAddressesEnable **参数说明**：是否配置公网接入地址。约束：access_type为APP_HTTPS/APP_AMQP/APP_MQTT的公网地址会同时被解绑或绑定。access_type为DEVICE_MQTT/DEVICE_HTTPS的公网地址会同时被解绑或绑定。 **取值范围**： - true：配置公网接入地址，平台将自动分配公网接入地址。 - false: 解绑公网接入地址，解绑公网地址不会被删除，再次配置公网地址将绑定原来的公网地址。
    *
    * @return $this
    */
    public function setPublicAddressesEnable($publicAddressesEnable)
    {
        $this->container['publicAddressesEnable'] = $publicAddressesEnable;
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

