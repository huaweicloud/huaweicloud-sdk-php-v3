<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLivePlatformReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLivePlatformReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  直播平台名称
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'authConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateCustomPlatformAuthConfig',
            'callbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  直播平台名称
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'authConfig' => null,
        'callbackConfig' => null
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
    * name  直播平台名称
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'authConfig' => 'auth_config',
            'callbackConfig' => 'callback_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  直播平台名称
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'authConfig' => 'setAuthConfig',
            'callbackConfig' => 'setCallbackConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  直播平台名称
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'authConfig' => 'getAuthConfig',
            'callbackConfig' => 'getCallbackConfig'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authConfig'] = isset($data['authConfig']) ? $data['authConfig'] : null;
        $this->container['callbackConfig'] = isset($data['callbackConfig']) ? $data['callbackConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9]+$/.";
            }
        if ($this->container['callbackConfig'] === null) {
            $invalidProperties[] = "'callbackConfig' can't be null";
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
    * Gets name
    *  直播平台名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 直播平台名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authConfig
    *  authConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateCustomPlatformAuthConfig|null
    */
    public function getAuthConfig()
    {
        return $this->container['authConfig'];
    }

    /**
    * Sets authConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\UpdateCustomPlatformAuthConfig|null $authConfig authConfig
    *
    * @return $this
    */
    public function setAuthConfig($authConfig)
    {
        $this->container['authConfig'] = $authConfig;
        return $this;
    }

    /**
    * Gets callbackConfig
    *  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[]
    */
    public function getCallbackConfig()
    {
        return $this->container['callbackConfig'];
    }

    /**
    * Sets callbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[] $callbackConfig 自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @return $this
    */
    public function setCallbackConfig($callbackConfig)
    {
        $this->container['callbackConfig'] = $callbackConfig;
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

