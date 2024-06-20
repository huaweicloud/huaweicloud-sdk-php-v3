<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDeviceAuthorizerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDeviceAuthorizerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizerId  **参数说明**：自定义鉴权ID。
    * authorizerName  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * funcName  **参数说明**：函数名称。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    * signingEnable  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    * signingToken  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * signingPublicKey  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    * defaultAuthorizer  **参数说明**：是否为默认的鉴权方式，默认为false。
    * status  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    * cacheEnable  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    * createTime  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizerId' => 'string',
            'authorizerName' => 'string',
            'funcName' => 'string',
            'funcUrn' => 'string',
            'signingEnable' => 'bool',
            'signingToken' => 'string',
            'signingPublicKey' => 'string',
            'defaultAuthorizer' => 'bool',
            'status' => 'string',
            'cacheEnable' => 'bool',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizerId  **参数说明**：自定义鉴权ID。
    * authorizerName  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * funcName  **参数说明**：函数名称。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    * signingEnable  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    * signingToken  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * signingPublicKey  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    * defaultAuthorizer  **参数说明**：是否为默认的鉴权方式，默认为false。
    * status  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    * cacheEnable  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    * createTime  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizerId' => null,
        'authorizerName' => null,
        'funcName' => null,
        'funcUrn' => null,
        'signingEnable' => null,
        'signingToken' => null,
        'signingPublicKey' => null,
        'defaultAuthorizer' => null,
        'status' => null,
        'cacheEnable' => null,
        'createTime' => null,
        'updateTime' => null
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
    * authorizerId  **参数说明**：自定义鉴权ID。
    * authorizerName  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * funcName  **参数说明**：函数名称。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    * signingEnable  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    * signingToken  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * signingPublicKey  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    * defaultAuthorizer  **参数说明**：是否为默认的鉴权方式，默认为false。
    * status  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    * cacheEnable  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    * createTime  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizerId' => 'authorizer_id',
            'authorizerName' => 'authorizer_name',
            'funcName' => 'func_name',
            'funcUrn' => 'func_urn',
            'signingEnable' => 'signing_enable',
            'signingToken' => 'signing_token',
            'signingPublicKey' => 'signing_public_key',
            'defaultAuthorizer' => 'default_authorizer',
            'status' => 'status',
            'cacheEnable' => 'cache_enable',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizerId  **参数说明**：自定义鉴权ID。
    * authorizerName  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * funcName  **参数说明**：函数名称。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    * signingEnable  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    * signingToken  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * signingPublicKey  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    * defaultAuthorizer  **参数说明**：是否为默认的鉴权方式，默认为false。
    * status  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    * cacheEnable  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    * createTime  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizerId' => 'setAuthorizerId',
            'authorizerName' => 'setAuthorizerName',
            'funcName' => 'setFuncName',
            'funcUrn' => 'setFuncUrn',
            'signingEnable' => 'setSigningEnable',
            'signingToken' => 'setSigningToken',
            'signingPublicKey' => 'setSigningPublicKey',
            'defaultAuthorizer' => 'setDefaultAuthorizer',
            'status' => 'setStatus',
            'cacheEnable' => 'setCacheEnable',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizerId  **参数说明**：自定义鉴权ID。
    * authorizerName  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * funcName  **参数说明**：函数名称。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    * signingEnable  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    * signingToken  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * signingPublicKey  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    * defaultAuthorizer  **参数说明**：是否为默认的鉴权方式，默认为false。
    * status  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    * cacheEnable  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    * createTime  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizerId' => 'getAuthorizerId',
            'authorizerName' => 'getAuthorizerName',
            'funcName' => 'getFuncName',
            'funcUrn' => 'getFuncUrn',
            'signingEnable' => 'getSigningEnable',
            'signingToken' => 'getSigningToken',
            'signingPublicKey' => 'getSigningPublicKey',
            'defaultAuthorizer' => 'getDefaultAuthorizer',
            'status' => 'getStatus',
            'cacheEnable' => 'getCacheEnable',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
        $this->container['authorizerName'] = isset($data['authorizerName']) ? $data['authorizerName'] : null;
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
        $this->container['signingEnable'] = isset($data['signingEnable']) ? $data['signingEnable'] : null;
        $this->container['signingToken'] = isset($data['signingToken']) ? $data['signingToken'] : null;
        $this->container['signingPublicKey'] = isset($data['signingPublicKey']) ? $data['signingPublicKey'] : null;
        $this->container['defaultAuthorizer'] = isset($data['defaultAuthorizer']) ? $data['defaultAuthorizer'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cacheEnable'] = isset($data['cacheEnable']) ? $data['cacheEnable'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorizerName']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['authorizerName'])) {
                $invalidProperties[] = "invalid value for 'authorizerName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['funcName']) && (mb_strlen($this->container['funcName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'funcName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['funcName']) && (mb_strlen($this->container['funcName']) < 0)) {
                $invalidProperties[] = "invalid value for 'funcName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['funcUrn']) && (mb_strlen($this->container['funcUrn']) > 65535)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['funcUrn']) && (mb_strlen($this->container['funcUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signingToken']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['signingToken'])) {
                $invalidProperties[] = "invalid value for 'signingToken', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['signingPublicKey']) && (mb_strlen($this->container['signingPublicKey']) > 65535)) {
                $invalidProperties[] = "invalid value for 'signingPublicKey', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['signingPublicKey']) && (mb_strlen($this->container['signingPublicKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'signingPublicKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/(ACTIVE|INACTIVE)/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /(ACTIVE|INACTIVE)/.";
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
    * Gets authorizerId
    *  **参数说明**：自定义鉴权ID。
    *
    * @return string|null
    */
    public function getAuthorizerId()
    {
        return $this->container['authorizerId'];
    }

    /**
    * Sets authorizerId
    *
    * @param string|null $authorizerId **参数说明**：自定义鉴权ID。
    *
    * @return $this
    */
    public function setAuthorizerId($authorizerId)
    {
        $this->container['authorizerId'] = $authorizerId;
        return $this;
    }

    /**
    * Gets authorizerName
    *  **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getAuthorizerName()
    {
        return $this->container['authorizerName'];
    }

    /**
    * Sets authorizerName
    *
    * @param string|null $authorizerName **参数说明**：自定义鉴权器名称，同一租户下的自定义鉴权器名称不能重复。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAuthorizerName($authorizerName)
    {
        $this->container['authorizerName'] = $authorizerName;
        return $this;
    }

    /**
    * Gets funcName
    *  **参数说明**：函数名称。
    *
    * @return string|null
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string|null $funcName **参数说明**：函数名称。
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
        return $this;
    }

    /**
    * Gets funcUrn
    *  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    *
    * @return string|null
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string|null $funcUrn **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，即自定义鉴权器对应的处理函数地址。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
        return $this;
    }

    /**
    * Gets signingEnable
    *  **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    *
    * @return bool|null
    */
    public function getSigningEnable()
    {
        return $this->container['signingEnable'];
    }

    /**
    * Sets signingEnable
    *
    * @param bool|null $signingEnable **参数说明**：是否启动签名校验，启动签名校验后不满足签名要求的鉴权信息将被拒绝，以减少无效的函数调用。推荐用户进行安全的签名校验，默认开启。
    *
    * @return $this
    */
    public function setSigningEnable($signingEnable)
    {
        $this->container['signingEnable'] = $signingEnable;
        return $this;
    }

    /**
    * Gets signingToken
    *  **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getSigningToken()
    {
        return $this->container['signingToken'];
    }

    /**
    * Sets signingToken
    *
    * @param string|null $signingToken **参数说明**：签名校验的Key值，开启签名校验时使用。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setSigningToken($signingToken)
    {
        $this->container['signingToken'] = $signingToken;
        return $this;
    }

    /**
    * Gets signingPublicKey
    *  **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    *
    * @return string|null
    */
    public function getSigningPublicKey()
    {
        return $this->container['signingPublicKey'];
    }

    /**
    * Sets signingPublicKey
    *
    * @param string|null $signingPublicKey **参数说明**：签名校验的公钥，开启签名校验时使用。用于认证设备携带的签名信息是否正确。
    *
    * @return $this
    */
    public function setSigningPublicKey($signingPublicKey)
    {
        $this->container['signingPublicKey'] = $signingPublicKey;
        return $this;
    }

    /**
    * Gets defaultAuthorizer
    *  **参数说明**：是否为默认的鉴权方式，默认为false。
    *
    * @return bool|null
    */
    public function getDefaultAuthorizer()
    {
        return $this->container['defaultAuthorizer'];
    }

    /**
    * Sets defaultAuthorizer
    *
    * @param bool|null $defaultAuthorizer **参数说明**：是否为默认的鉴权方式，默认为false。
    *
    * @return $this
    */
    public function setDefaultAuthorizer($defaultAuthorizer)
    {
        $this->container['defaultAuthorizer'] = $defaultAuthorizer;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数说明**：是否激活该鉴权方式 - ACTIVE：该鉴权为激活状态。 - INACTIVE：该鉴权为停用状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cacheEnable
    *  **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    *
    * @return bool|null
    */
    public function getCacheEnable()
    {
        return $this->container['cacheEnable'];
    }

    /**
    * Sets cacheEnable
    *
    * @param bool|null $cacheEnable **参数说明**：是否开启缓存，默认为false，设备为true时，当设备入参（username，clientId，password，以及证书信息，函数urn）不变时，当缓存结果存在时，将直接使用缓存结果，建议在调试时设置为false，生产时设置为true，避免频繁调用函数。
    *
    * @return $this
    */
    public function setCacheEnable($cacheEnable)
    {
        $this->container['cacheEnable'] = $cacheEnable;
        return $this;
    }

    /**
    * Gets createTime
    *  在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 在物联网平台进行自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 在物联网平台更新自定义鉴权相关操作的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

