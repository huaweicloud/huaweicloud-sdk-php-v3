<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetDeviceSecretResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetDeviceSecretResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * secret  设备密钥。
    * secretType  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'secret' => 'string',
            'secretType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * secret  设备密钥。
    * secretType  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'secret' => null,
        'secretType' => null
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
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * secret  设备密钥。
    * secretType  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'secret' => 'secret',
            'secretType' => 'secret_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * secret  设备密钥。
    * secretType  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'secret' => 'setSecret',
            'secretType' => 'setSecretType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * secret  设备密钥。
    * secretType  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'secret' => 'getSecret',
            'secretType' => 'getSecretType'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['secret']) && (mb_strlen($this->container['secret']) > 32)) {
                $invalidProperties[] = "invalid value for 'secret', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['secret']) && (mb_strlen($this->container['secret']) < 8)) {
                $invalidProperties[] = "invalid value for 'secret', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['secret']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['secret'])) {
                $invalidProperties[] = "invalid value for 'secret', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['secretType']) && !preg_match("/PRIMARY|SECONDARY/", $this->container['secretType'])) {
                $invalidProperties[] = "invalid value for 'secretType', must be conform to the pattern /PRIMARY|SECONDARY/.";
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
    * Gets deviceId
    *  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets secret
    *  设备密钥。
    *
    * @return string|null
    */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
    * Sets secret
    *
    * @param string|null $secret 设备密钥。
    *
    * @return $this
    */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;
        return $this;
    }

    /**
    * Gets secretType
    *  **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @return string|null
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string|null $secretType **参数说明**：重置设备秘钥的的类型。 **取值范围**： - PRIMARY：重置主秘钥。设备秘钥鉴权优先使用的密钥，当设备接入物联网平台时，平台将优先使用主密钥进行校验。 - SECONDARY：重置辅秘钥。设备的备用密钥，当主密钥校验不通过时，会启用辅密钥校验，辅密钥与主密钥有相同的效力；辅密钥对coap协议接入的设备不生效。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
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

