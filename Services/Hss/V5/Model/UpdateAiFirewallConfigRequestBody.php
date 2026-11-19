<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAiFirewallConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAiFirewallConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * sourceId  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * sourceSecret  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * appId  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && !preg_match("/^[0-9a-fA-F]*$/", $this->container['sourceId'])) {
                $invalidProperties[] = "invalid value for 'sourceId', must be conform to the pattern /^[0-9a-fA-F]*$/.";
            }
            if (!is_null($this->container['sourceSecret']) && (mb_strlen($this->container['sourceSecret']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceSecret', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceSecret']) && (mb_strlen($this->container['sourceSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceSecret', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceSecret']) && !preg_match("/^[A-Za-z0-9_-]*$/", $this->container['sourceSecret'])) {
                $invalidProperties[] = "invalid value for 'sourceSecret', must be conform to the pattern /^[A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[0-9a-fA-F-]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[0-9a-fA-F-]*$/.";
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
    *  **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $sourceId **参数解释**: 防火墙AK（Access Key），用于身份标识，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_secret、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $sourceSecret **参数解释**: 防火墙SK（Secret Key），用于签名认证，明文传入，加密存储 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、app_id同时配置 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string|null $appId **参数解释**: 应用ID，标识接入防火墙的应用 **约束限制**: 非必填，但配置防火墙检测时需要与source_id、source_secret同时配置 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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

