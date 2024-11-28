<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLivePlatformResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLivePlatformResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * platformId  平台ID
    * accessType  accessType
    * name  直播平台名称
    * authorizationInfo  authorizationInfo
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'platformId' => 'string',
            'accessType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AccessTypeEnum',
            'name' => 'string',
            'authorizationInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformAuthorizationInfo',
            'authConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CustomPlatformAuthConfig',
            'callbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * platformId  平台ID
    * accessType  accessType
    * name  直播平台名称
    * authorizationInfo  authorizationInfo
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'platformId' => null,
        'accessType' => null,
        'name' => null,
        'authorizationInfo' => null,
        'authConfig' => null,
        'callbackConfig' => null,
        'xRequestId' => null
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
    * platformId  平台ID
    * accessType  accessType
    * name  直播平台名称
    * authorizationInfo  authorizationInfo
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'platformId' => 'platform_id',
            'accessType' => 'access_type',
            'name' => 'name',
            'authorizationInfo' => 'authorization_info',
            'authConfig' => 'auth_config',
            'callbackConfig' => 'callback_config',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * platformId  平台ID
    * accessType  accessType
    * name  直播平台名称
    * authorizationInfo  authorizationInfo
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'platformId' => 'setPlatformId',
            'accessType' => 'setAccessType',
            'name' => 'setName',
            'authorizationInfo' => 'setAuthorizationInfo',
            'authConfig' => 'setAuthConfig',
            'callbackConfig' => 'setCallbackConfig',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * platformId  平台ID
    * accessType  accessType
    * name  直播平台名称
    * authorizationInfo  authorizationInfo
    * authConfig  authConfig
    * callbackConfig  自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'platformId' => 'getPlatformId',
            'accessType' => 'getAccessType',
            'name' => 'getName',
            'authorizationInfo' => 'getAuthorizationInfo',
            'authConfig' => 'getAuthConfig',
            'callbackConfig' => 'getCallbackConfig',
            'xRequestId' => 'getXRequestId'
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
        $this->container['platformId'] = isset($data['platformId']) ? $data['platformId'] : null;
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authorizationInfo'] = isset($data['authorizationInfo']) ? $data['authorizationInfo'] : null;
        $this->container['authConfig'] = isset($data['authConfig']) ? $data['authConfig'] : null;
        $this->container['callbackConfig'] = isset($data['callbackConfig']) ? $data['callbackConfig'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['platformId']) && (mb_strlen($this->container['platformId']) > 64)) {
                $invalidProperties[] = "invalid value for 'platformId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['platformId']) && (mb_strlen($this->container['platformId']) < 1)) {
                $invalidProperties[] = "invalid value for 'platformId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets platformId
    *  平台ID
    *
    * @return string|null
    */
    public function getPlatformId()
    {
        return $this->container['platformId'];
    }

    /**
    * Sets platformId
    *
    * @param string|null $platformId 平台ID
    *
    * @return $this
    */
    public function setPlatformId($platformId)
    {
        $this->container['platformId'] = $platformId;
        return $this;
    }

    /**
    * Gets accessType
    *  accessType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AccessTypeEnum|null
    */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
    * Sets accessType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AccessTypeEnum|null $accessType accessType
    *
    * @return $this
    */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
    * Gets name
    *  直播平台名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 直播平台名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authorizationInfo
    *  authorizationInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformAuthorizationInfo|null
    */
    public function getAuthorizationInfo()
    {
        return $this->container['authorizationInfo'];
    }

    /**
    * Sets authorizationInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformAuthorizationInfo|null $authorizationInfo authorizationInfo
    *
    * @return $this
    */
    public function setAuthorizationInfo($authorizationInfo)
    {
        $this->container['authorizationInfo'] = $authorizationInfo;
        return $this;
    }

    /**
    * Gets authConfig
    *  authConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CustomPlatformAuthConfig|null
    */
    public function getAuthConfig()
    {
        return $this->container['authConfig'];
    }

    /**
    * Sets authConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CustomPlatformAuthConfig|null $authConfig authConfig
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
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[]|null
    */
    public function getCallbackConfig()
    {
        return $this->container['callbackConfig'];
    }

    /**
    * Sets callbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\StandardPlatformApiConfig[]|null $callbackConfig 自定义直播平台回调配置。同一种类型仅保留一个配置，如果配置多个会随机保存一个。
    *
    * @return $this
    */
    public function setCallbackConfig($callbackConfig)
    {
        $this->container['callbackConfig'] = $callbackConfig;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

