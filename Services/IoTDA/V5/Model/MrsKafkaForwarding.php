<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MrsKafkaForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MrsKafkaForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * kerberosAuthentication  是否Kerberos认证，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addresses' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]',
            'topic' => 'string',
            'kerberosAuthentication' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * kerberosAuthentication  是否Kerberos认证，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addresses' => null,
        'topic' => null,
        'kerberosAuthentication' => null
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
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * kerberosAuthentication  是否Kerberos认证，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addresses' => 'addresses',
            'topic' => 'topic',
            'kerberosAuthentication' => 'kerberos_authentication'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * kerberosAuthentication  是否Kerberos认证，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'addresses' => 'setAddresses',
            'topic' => 'setTopic',
            'kerberosAuthentication' => 'setKerberosAuthentication'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * kerberosAuthentication  是否Kerberos认证，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'addresses' => 'getAddresses',
            'topic' => 'getTopic',
            'kerberosAuthentication' => 'getKerberosAuthentication'
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['kerberosAuthentication'] = isset($data['kerberosAuthentication']) ? $data['kerberosAuthentication'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 256)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
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
    * Gets addresses
    *  **参数说明**：转发kafka消息对应的地址列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[] $addresses **参数说明**：转发kafka消息对应的地址列表
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：转发kafka消息关联的topic信息。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数说明**：转发kafka消息关联的topic信息。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets kerberosAuthentication
    *  是否Kerberos认证，默认为false。
    *
    * @return bool|null
    */
    public function getKerberosAuthentication()
    {
        return $this->container['kerberosAuthentication'];
    }

    /**
    * Sets kerberosAuthentication
    *
    * @param bool|null $kerberosAuthentication 是否Kerberos认证，默认为false。
    *
    * @return $this
    */
    public function setKerberosAuthentication($kerberosAuthentication)
    {
        $this->container['kerberosAuthentication'] = $kerberosAuthentication;
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

