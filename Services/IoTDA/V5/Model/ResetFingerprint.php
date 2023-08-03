<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetFingerprint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetFingerprint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fingerprint  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    * forceDisconnect  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fingerprint' => 'string',
            'forceDisconnect' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fingerprint  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    * forceDisconnect  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fingerprint' => null,
        'forceDisconnect' => null
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
    * fingerprint  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    * forceDisconnect  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fingerprint' => 'fingerprint',
            'forceDisconnect' => 'force_disconnect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fingerprint  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    * forceDisconnect  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @var string[]
    */
    protected static $setters = [
            'fingerprint' => 'setFingerprint',
            'forceDisconnect' => 'setForceDisconnect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fingerprint  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    * forceDisconnect  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @var string[]
    */
    protected static $getters = [
            'fingerprint' => 'getFingerprint',
            'forceDisconnect' => 'getForceDisconnect'
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
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['forceDisconnect'] = isset($data['forceDisconnect']) ? $data['forceDisconnect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fingerprint']) && !preg_match("/^[a-fA-F0-9]{40}$|^[a-fA-F0-9]{64}$/", $this->container['fingerprint'])) {
                $invalidProperties[] = "invalid value for 'fingerprint', must be conform to the pattern /^[a-fA-F0-9]{40}$|^[a-fA-F0-9]{64}$/.";
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
    * Gets fingerprint
    *  **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint **参数说明**：设备指纹。设置该字段时平台将设备指纹重置为指定值；不携带时将之置空，后续设备第一次接入时，该设备指纹的值将设置为第一次接入时的证书指纹。 **取值范围**：长度为40的十六进制字符串或者长度为64的十六进制字符串。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets forceDisconnect
    *  **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @return bool|null
    */
    public function getForceDisconnect()
    {
        return $this->container['forceDisconnect'];
    }

    /**
    * Sets forceDisconnect
    *
    * @param bool|null $forceDisconnect **参数说明**：是否强制断开设备的连接，当前仅限长连接。默认值false。
    *
    * @return $this
    */
    public function setForceDisconnect($forceDisconnect)
    {
        $this->container['forceDisconnect'] = $forceDisconnect;
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

