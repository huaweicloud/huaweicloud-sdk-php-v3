<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAiFirewallConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAiFirewallConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceId' => 'string',
            'sourceSecret' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceId' => null,
        'sourceSecret' => null,
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
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceId' => 'source_id',
            'sourceSecret' => 'source_secret',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceId' => 'setSourceId',
            'sourceSecret' => 'setSourceSecret',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceId' => 'getSourceId',
            'sourceSecret' => 'getSourceSecret',
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceSecret'] = isset($data['sourceSecret']) ? $data['sourceSecret'] : null;
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
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceSecret']) && (mb_strlen($this->container['sourceSecret']) > 256)) {
                $invalidProperties[] = "invalid value for 'sourceSecret', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sourceSecret']) && (mb_strlen($this->container['sourceSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceSecret', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 128)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
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
    * Gets sourceId
    *  **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释**: 防火墙AK（Access Key），用于身份标识 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceSecret
    *  **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSourceSecret()
    {
        return $this->container['sourceSecret'];
    }

    /**
    * Sets sourceSecret
    *
    * @param string|null $sourceSecret **参数解释**: 防火墙SK（Secret Key），用于签名认证，解密返回 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSourceSecret($sourceSecret)
    {
        $this->container['sourceSecret'] = $sourceSecret;
        return $this;
    }

    /**
    * Gets appId
    *  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $appId **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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

