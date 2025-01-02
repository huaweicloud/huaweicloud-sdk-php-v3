<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterpreterAiDigitalInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterpreterAiDigitalInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    * digitalAccount  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    * digitalName  数字资产名称。
    * presenterAccount  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    * presenterRealNameAccount  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    * presenterName  专用数字资产绑定的发言人名称。
    * presenterUserId  发言人用户的userUUID。
    * localConfId  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    * localConfAddr  本地会议对接地址或域名。
    * localAuthInfo  本地会议对接鉴权信息。
    * localNeedProxy  true：需要代理 false：不需要代理。
    * localAuthUrl  本地会议获取动态鉴权信息Url。
    * localAuthAppId  本地会议鉴权AppId。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'digitalAccount' => 'string',
            'digitalName' => 'string',
            'presenterAccount' => 'string',
            'presenterRealNameAccount' => 'string',
            'presenterName' => 'string',
            'presenterUserId' => 'string',
            'localConfId' => 'string',
            'localConfAddr' => 'string',
            'localAuthInfo' => 'string',
            'localNeedProxy' => 'bool',
            'localAuthUrl' => 'string',
            'localAuthAppId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    * digitalAccount  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    * digitalName  数字资产名称。
    * presenterAccount  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    * presenterRealNameAccount  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    * presenterName  专用数字资产绑定的发言人名称。
    * presenterUserId  发言人用户的userUUID。
    * localConfId  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    * localConfAddr  本地会议对接地址或域名。
    * localAuthInfo  本地会议对接鉴权信息。
    * localNeedProxy  true：需要代理 false：不需要代理。
    * localAuthUrl  本地会议获取动态鉴权信息Url。
    * localAuthAppId  本地会议鉴权AppId。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'digitalAccount' => null,
        'digitalName' => null,
        'presenterAccount' => null,
        'presenterRealNameAccount' => null,
        'presenterName' => null,
        'presenterUserId' => null,
        'localConfId' => null,
        'localConfAddr' => null,
        'localAuthInfo' => null,
        'localNeedProxy' => null,
        'localAuthUrl' => null,
        'localAuthAppId' => null
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
    * type  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    * digitalAccount  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    * digitalName  数字资产名称。
    * presenterAccount  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    * presenterRealNameAccount  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    * presenterName  专用数字资产绑定的发言人名称。
    * presenterUserId  发言人用户的userUUID。
    * localConfId  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    * localConfAddr  本地会议对接地址或域名。
    * localAuthInfo  本地会议对接鉴权信息。
    * localNeedProxy  true：需要代理 false：不需要代理。
    * localAuthUrl  本地会议获取动态鉴权信息Url。
    * localAuthAppId  本地会议鉴权AppId。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'digitalAccount' => 'digitalAccount',
            'digitalName' => 'digitalName',
            'presenterAccount' => 'presenterAccount',
            'presenterRealNameAccount' => 'presenterRealNameAccount',
            'presenterName' => 'presenterName',
            'presenterUserId' => 'presenterUserID',
            'localConfId' => 'localConfId',
            'localConfAddr' => 'localConfAddr',
            'localAuthInfo' => 'localAuthInfo',
            'localNeedProxy' => 'localNeedProxy',
            'localAuthUrl' => 'localAuthUrl',
            'localAuthAppId' => 'localAuthAppId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    * digitalAccount  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    * digitalName  数字资产名称。
    * presenterAccount  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    * presenterRealNameAccount  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    * presenterName  专用数字资产绑定的发言人名称。
    * presenterUserId  发言人用户的userUUID。
    * localConfId  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    * localConfAddr  本地会议对接地址或域名。
    * localAuthInfo  本地会议对接鉴权信息。
    * localNeedProxy  true：需要代理 false：不需要代理。
    * localAuthUrl  本地会议获取动态鉴权信息Url。
    * localAuthAppId  本地会议鉴权AppId。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'digitalAccount' => 'setDigitalAccount',
            'digitalName' => 'setDigitalName',
            'presenterAccount' => 'setPresenterAccount',
            'presenterRealNameAccount' => 'setPresenterRealNameAccount',
            'presenterName' => 'setPresenterName',
            'presenterUserId' => 'setPresenterUserId',
            'localConfId' => 'setLocalConfId',
            'localConfAddr' => 'setLocalConfAddr',
            'localAuthInfo' => 'setLocalAuthInfo',
            'localNeedProxy' => 'setLocalNeedProxy',
            'localAuthUrl' => 'setLocalAuthUrl',
            'localAuthAppId' => 'setLocalAuthAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    * digitalAccount  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    * digitalName  数字资产名称。
    * presenterAccount  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    * presenterRealNameAccount  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    * presenterName  专用数字资产绑定的发言人名称。
    * presenterUserId  发言人用户的userUUID。
    * localConfId  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    * localConfAddr  本地会议对接地址或域名。
    * localAuthInfo  本地会议对接鉴权信息。
    * localNeedProxy  true：需要代理 false：不需要代理。
    * localAuthUrl  本地会议获取动态鉴权信息Url。
    * localAuthAppId  本地会议鉴权AppId。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'digitalAccount' => 'getDigitalAccount',
            'digitalName' => 'getDigitalName',
            'presenterAccount' => 'getPresenterAccount',
            'presenterRealNameAccount' => 'getPresenterRealNameAccount',
            'presenterName' => 'getPresenterName',
            'presenterUserId' => 'getPresenterUserId',
            'localConfId' => 'getLocalConfId',
            'localConfAddr' => 'getLocalConfAddr',
            'localAuthInfo' => 'getLocalAuthInfo',
            'localNeedProxy' => 'getLocalNeedProxy',
            'localAuthUrl' => 'getLocalAuthUrl',
            'localAuthAppId' => 'getLocalAuthAppId'
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
        $this->container['digitalAccount'] = isset($data['digitalAccount']) ? $data['digitalAccount'] : null;
        $this->container['digitalName'] = isset($data['digitalName']) ? $data['digitalName'] : null;
        $this->container['presenterAccount'] = isset($data['presenterAccount']) ? $data['presenterAccount'] : null;
        $this->container['presenterRealNameAccount'] = isset($data['presenterRealNameAccount']) ? $data['presenterRealNameAccount'] : null;
        $this->container['presenterName'] = isset($data['presenterName']) ? $data['presenterName'] : null;
        $this->container['presenterUserId'] = isset($data['presenterUserId']) ? $data['presenterUserId'] : null;
        $this->container['localConfId'] = isset($data['localConfId']) ? $data['localConfId'] : null;
        $this->container['localConfAddr'] = isset($data['localConfAddr']) ? $data['localConfAddr'] : null;
        $this->container['localAuthInfo'] = isset($data['localAuthInfo']) ? $data['localAuthInfo'] : null;
        $this->container['localNeedProxy'] = isset($data['localNeedProxy']) ? $data['localNeedProxy'] : null;
        $this->container['localAuthUrl'] = isset($data['localAuthUrl']) ? $data['localAuthUrl'] : null;
        $this->container['localAuthAppId'] = isset($data['localAuthAppId']) ? $data['localAuthAppId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
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
    * @param string|null $type 数字资产类型：PUBLIC（系统公共）、PRIVATE（企业专用账号绑定）、LOCAL（企业本地通用）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets digitalAccount
    *  AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    *
    * @return string|null
    */
    public function getDigitalAccount()
    {
        return $this->container['digitalAccount'];
    }

    /**
    * Sets digitalAccount
    *
    * @param string|null $digitalAccount AI传译员场景下绑定使用的数字资产ID（数字人或TTS音色）。
    *
    * @return $this
    */
    public function setDigitalAccount($digitalAccount)
    {
        $this->container['digitalAccount'] = $digitalAccount;
        return $this;
    }

    /**
    * Gets digitalName
    *  数字资产名称。
    *
    * @return string|null
    */
    public function getDigitalName()
    {
        return $this->container['digitalName'];
    }

    /**
    * Sets digitalName
    *
    * @param string|null $digitalName 数字资产名称。
    *
    * @return $this
    */
    public function setDigitalName($digitalName)
    {
        $this->container['digitalName'] = $digitalName;
        return $this;
    }

    /**
    * Gets presenterAccount
    *  专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    *
    * @return string|null
    */
    public function getPresenterAccount()
    {
        return $this->container['presenterAccount'];
    }

    /**
    * Sets presenterAccount
    *
    * @param string|null $presenterAccount 专用数字资产绑定的发言人登录账号，翻译对象非匿名必填。
    *
    * @return $this
    */
    public function setPresenterAccount($presenterAccount)
    {
        $this->container['presenterAccount'] = $presenterAccount;
        return $this;
    }

    /**
    * Gets presenterRealNameAccount
    *  专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    *
    * @return string|null
    */
    public function getPresenterRealNameAccount()
    {
        return $this->container['presenterRealNameAccount'];
    }

    /**
    * Sets presenterRealNameAccount
    *
    * @param string|null $presenterRealNameAccount 专用数字资产绑定的发言人登录账号（匿名时），翻译对象匿名必填。
    *
    * @return $this
    */
    public function setPresenterRealNameAccount($presenterRealNameAccount)
    {
        $this->container['presenterRealNameAccount'] = $presenterRealNameAccount;
        return $this;
    }

    /**
    * Gets presenterName
    *  专用数字资产绑定的发言人名称。
    *
    * @return string|null
    */
    public function getPresenterName()
    {
        return $this->container['presenterName'];
    }

    /**
    * Sets presenterName
    *
    * @param string|null $presenterName 专用数字资产绑定的发言人名称。
    *
    * @return $this
    */
    public function setPresenterName($presenterName)
    {
        $this->container['presenterName'] = $presenterName;
        return $this;
    }

    /**
    * Gets presenterUserId
    *  发言人用户的userUUID。
    *
    * @return string|null
    */
    public function getPresenterUserId()
    {
        return $this->container['presenterUserId'];
    }

    /**
    * Sets presenterUserId
    *
    * @param string|null $presenterUserId 发言人用户的userUUID。
    *
    * @return $this
    */
    public function setPresenterUserId($presenterUserId)
    {
        $this->container['presenterUserId'] = $presenterUserId;
        return $this;
    }

    /**
    * Gets localConfId
    *  本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    *
    * @return string|null
    */
    public function getLocalConfId()
    {
        return $this->container['localConfId'];
    }

    /**
    * Sets localConfId
    *
    * @param string|null $localConfId 本地会议的会议id（第三方对接参数），数字资产为LOCAL时必填。
    *
    * @return $this
    */
    public function setLocalConfId($localConfId)
    {
        $this->container['localConfId'] = $localConfId;
        return $this;
    }

    /**
    * Gets localConfAddr
    *  本地会议对接地址或域名。
    *
    * @return string|null
    */
    public function getLocalConfAddr()
    {
        return $this->container['localConfAddr'];
    }

    /**
    * Sets localConfAddr
    *
    * @param string|null $localConfAddr 本地会议对接地址或域名。
    *
    * @return $this
    */
    public function setLocalConfAddr($localConfAddr)
    {
        $this->container['localConfAddr'] = $localConfAddr;
        return $this;
    }

    /**
    * Gets localAuthInfo
    *  本地会议对接鉴权信息。
    *
    * @return string|null
    */
    public function getLocalAuthInfo()
    {
        return $this->container['localAuthInfo'];
    }

    /**
    * Sets localAuthInfo
    *
    * @param string|null $localAuthInfo 本地会议对接鉴权信息。
    *
    * @return $this
    */
    public function setLocalAuthInfo($localAuthInfo)
    {
        $this->container['localAuthInfo'] = $localAuthInfo;
        return $this;
    }

    /**
    * Gets localNeedProxy
    *  true：需要代理 false：不需要代理。
    *
    * @return bool|null
    */
    public function getLocalNeedProxy()
    {
        return $this->container['localNeedProxy'];
    }

    /**
    * Sets localNeedProxy
    *
    * @param bool|null $localNeedProxy true：需要代理 false：不需要代理。
    *
    * @return $this
    */
    public function setLocalNeedProxy($localNeedProxy)
    {
        $this->container['localNeedProxy'] = $localNeedProxy;
        return $this;
    }

    /**
    * Gets localAuthUrl
    *  本地会议获取动态鉴权信息Url。
    *
    * @return string|null
    */
    public function getLocalAuthUrl()
    {
        return $this->container['localAuthUrl'];
    }

    /**
    * Sets localAuthUrl
    *
    * @param string|null $localAuthUrl 本地会议获取动态鉴权信息Url。
    *
    * @return $this
    */
    public function setLocalAuthUrl($localAuthUrl)
    {
        $this->container['localAuthUrl'] = $localAuthUrl;
        return $this;
    }

    /**
    * Gets localAuthAppId
    *  本地会议鉴权AppId。
    *
    * @return string|null
    */
    public function getLocalAuthAppId()
    {
        return $this->container['localAuthAppId'];
    }

    /**
    * Sets localAuthAppId
    *
    * @param string|null $localAuthAppId 本地会议鉴权AppId。
    *
    * @return $this
    */
    public function setLocalAuthAppId($localAuthAppId)
    {
        $this->container['localAuthAppId'] = $localAuthAppId;
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

