<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizeConfigInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizeConfigInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableSso  是否开启SSO登录。
    * domain  企业域名 > 开启SSO登录时必填
    * authorizeUrl  鉴权中心URL。 > 开启SSO登录时必填
    * getTokenUrl  获取Token URL。 > 开启SSO登录时必填
    * clientId  APP ID。 > 开启SSO登录时必填
    * clientSecret  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    * scope  授权范围。 * openid：OAuth2.0的OIDC
    * accFieldName  第三方帐号的字段名称。 > 开启SSO登录时必填
    * getUserInfoUrl  用户信息查询URL。
    * oauth2ServerType  鉴权类型。 * 0：OAuth2.0鉴权
    * pcSchemaUrl  拉起PC端终端的schema。
    * androidSchemaUrl  拉起安卓端终端的schema。
    * iosSchemaUrl  拉起ios端终端的schema。
    * thirdName  第三方名称的字段名称。
    * thirdEmail  第三方邮箱的字段名称。
    * thirdMobile  第三方手机号的字段名称。
    * thirdAccessToken  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    * thirdHeadImgUrl  第三方头像链接的字段名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableSso' => 'bool',
            'domain' => 'string',
            'authorizeUrl' => 'string',
            'getTokenUrl' => 'string',
            'clientId' => 'string',
            'clientSecret' => 'string',
            'scope' => 'string',
            'accFieldName' => 'string',
            'getUserInfoUrl' => 'string',
            'oauth2ServerType' => 'int',
            'pcSchemaUrl' => 'string',
            'androidSchemaUrl' => 'string',
            'iosSchemaUrl' => 'string',
            'thirdName' => 'string',
            'thirdEmail' => 'string',
            'thirdMobile' => 'string',
            'thirdAccessToken' => 'string',
            'thirdHeadImgUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableSso  是否开启SSO登录。
    * domain  企业域名 > 开启SSO登录时必填
    * authorizeUrl  鉴权中心URL。 > 开启SSO登录时必填
    * getTokenUrl  获取Token URL。 > 开启SSO登录时必填
    * clientId  APP ID。 > 开启SSO登录时必填
    * clientSecret  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    * scope  授权范围。 * openid：OAuth2.0的OIDC
    * accFieldName  第三方帐号的字段名称。 > 开启SSO登录时必填
    * getUserInfoUrl  用户信息查询URL。
    * oauth2ServerType  鉴权类型。 * 0：OAuth2.0鉴权
    * pcSchemaUrl  拉起PC端终端的schema。
    * androidSchemaUrl  拉起安卓端终端的schema。
    * iosSchemaUrl  拉起ios端终端的schema。
    * thirdName  第三方名称的字段名称。
    * thirdEmail  第三方邮箱的字段名称。
    * thirdMobile  第三方手机号的字段名称。
    * thirdAccessToken  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    * thirdHeadImgUrl  第三方头像链接的字段名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableSso' => null,
        'domain' => null,
        'authorizeUrl' => null,
        'getTokenUrl' => null,
        'clientId' => null,
        'clientSecret' => null,
        'scope' => null,
        'accFieldName' => null,
        'getUserInfoUrl' => null,
        'oauth2ServerType' => null,
        'pcSchemaUrl' => null,
        'androidSchemaUrl' => null,
        'iosSchemaUrl' => null,
        'thirdName' => null,
        'thirdEmail' => null,
        'thirdMobile' => null,
        'thirdAccessToken' => null,
        'thirdHeadImgUrl' => null
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
    * enableSso  是否开启SSO登录。
    * domain  企业域名 > 开启SSO登录时必填
    * authorizeUrl  鉴权中心URL。 > 开启SSO登录时必填
    * getTokenUrl  获取Token URL。 > 开启SSO登录时必填
    * clientId  APP ID。 > 开启SSO登录时必填
    * clientSecret  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    * scope  授权范围。 * openid：OAuth2.0的OIDC
    * accFieldName  第三方帐号的字段名称。 > 开启SSO登录时必填
    * getUserInfoUrl  用户信息查询URL。
    * oauth2ServerType  鉴权类型。 * 0：OAuth2.0鉴权
    * pcSchemaUrl  拉起PC端终端的schema。
    * androidSchemaUrl  拉起安卓端终端的schema。
    * iosSchemaUrl  拉起ios端终端的schema。
    * thirdName  第三方名称的字段名称。
    * thirdEmail  第三方邮箱的字段名称。
    * thirdMobile  第三方手机号的字段名称。
    * thirdAccessToken  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    * thirdHeadImgUrl  第三方头像链接的字段名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableSso' => 'enableSSO',
            'domain' => 'domain',
            'authorizeUrl' => 'authorizeUrl',
            'getTokenUrl' => 'getTokenUrl',
            'clientId' => 'clientId',
            'clientSecret' => 'clientSecret',
            'scope' => 'scope',
            'accFieldName' => 'accFieldName',
            'getUserInfoUrl' => 'getUserInfoUrl',
            'oauth2ServerType' => 'oauth2ServerType',
            'pcSchemaUrl' => 'pcSchemaUrl',
            'androidSchemaUrl' => 'androidSchemaUrl',
            'iosSchemaUrl' => 'iosSchemaUrl',
            'thirdName' => 'thirdName',
            'thirdEmail' => 'thirdEmail',
            'thirdMobile' => 'thirdMobile',
            'thirdAccessToken' => 'thirdAccessToken',
            'thirdHeadImgUrl' => 'thirdHeadImgUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableSso  是否开启SSO登录。
    * domain  企业域名 > 开启SSO登录时必填
    * authorizeUrl  鉴权中心URL。 > 开启SSO登录时必填
    * getTokenUrl  获取Token URL。 > 开启SSO登录时必填
    * clientId  APP ID。 > 开启SSO登录时必填
    * clientSecret  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    * scope  授权范围。 * openid：OAuth2.0的OIDC
    * accFieldName  第三方帐号的字段名称。 > 开启SSO登录时必填
    * getUserInfoUrl  用户信息查询URL。
    * oauth2ServerType  鉴权类型。 * 0：OAuth2.0鉴权
    * pcSchemaUrl  拉起PC端终端的schema。
    * androidSchemaUrl  拉起安卓端终端的schema。
    * iosSchemaUrl  拉起ios端终端的schema。
    * thirdName  第三方名称的字段名称。
    * thirdEmail  第三方邮箱的字段名称。
    * thirdMobile  第三方手机号的字段名称。
    * thirdAccessToken  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    * thirdHeadImgUrl  第三方头像链接的字段名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableSso' => 'setEnableSso',
            'domain' => 'setDomain',
            'authorizeUrl' => 'setAuthorizeUrl',
            'getTokenUrl' => 'setGetTokenUrl',
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret',
            'scope' => 'setScope',
            'accFieldName' => 'setAccFieldName',
            'getUserInfoUrl' => 'setGetUserInfoUrl',
            'oauth2ServerType' => 'setOauth2ServerType',
            'pcSchemaUrl' => 'setPcSchemaUrl',
            'androidSchemaUrl' => 'setAndroidSchemaUrl',
            'iosSchemaUrl' => 'setIosSchemaUrl',
            'thirdName' => 'setThirdName',
            'thirdEmail' => 'setThirdEmail',
            'thirdMobile' => 'setThirdMobile',
            'thirdAccessToken' => 'setThirdAccessToken',
            'thirdHeadImgUrl' => 'setThirdHeadImgUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableSso  是否开启SSO登录。
    * domain  企业域名 > 开启SSO登录时必填
    * authorizeUrl  鉴权中心URL。 > 开启SSO登录时必填
    * getTokenUrl  获取Token URL。 > 开启SSO登录时必填
    * clientId  APP ID。 > 开启SSO登录时必填
    * clientSecret  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    * scope  授权范围。 * openid：OAuth2.0的OIDC
    * accFieldName  第三方帐号的字段名称。 > 开启SSO登录时必填
    * getUserInfoUrl  用户信息查询URL。
    * oauth2ServerType  鉴权类型。 * 0：OAuth2.0鉴权
    * pcSchemaUrl  拉起PC端终端的schema。
    * androidSchemaUrl  拉起安卓端终端的schema。
    * iosSchemaUrl  拉起ios端终端的schema。
    * thirdName  第三方名称的字段名称。
    * thirdEmail  第三方邮箱的字段名称。
    * thirdMobile  第三方手机号的字段名称。
    * thirdAccessToken  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    * thirdHeadImgUrl  第三方头像链接的字段名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableSso' => 'getEnableSso',
            'domain' => 'getDomain',
            'authorizeUrl' => 'getAuthorizeUrl',
            'getTokenUrl' => 'getGetTokenUrl',
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret',
            'scope' => 'getScope',
            'accFieldName' => 'getAccFieldName',
            'getUserInfoUrl' => 'getGetUserInfoUrl',
            'oauth2ServerType' => 'getOauth2ServerType',
            'pcSchemaUrl' => 'getPcSchemaUrl',
            'androidSchemaUrl' => 'getAndroidSchemaUrl',
            'iosSchemaUrl' => 'getIosSchemaUrl',
            'thirdName' => 'getThirdName',
            'thirdEmail' => 'getThirdEmail',
            'thirdMobile' => 'getThirdMobile',
            'thirdAccessToken' => 'getThirdAccessToken',
            'thirdHeadImgUrl' => 'getThirdHeadImgUrl'
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
        $this->container['enableSso'] = isset($data['enableSso']) ? $data['enableSso'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['authorizeUrl'] = isset($data['authorizeUrl']) ? $data['authorizeUrl'] : null;
        $this->container['getTokenUrl'] = isset($data['getTokenUrl']) ? $data['getTokenUrl'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['accFieldName'] = isset($data['accFieldName']) ? $data['accFieldName'] : null;
        $this->container['getUserInfoUrl'] = isset($data['getUserInfoUrl']) ? $data['getUserInfoUrl'] : null;
        $this->container['oauth2ServerType'] = isset($data['oauth2ServerType']) ? $data['oauth2ServerType'] : null;
        $this->container['pcSchemaUrl'] = isset($data['pcSchemaUrl']) ? $data['pcSchemaUrl'] : null;
        $this->container['androidSchemaUrl'] = isset($data['androidSchemaUrl']) ? $data['androidSchemaUrl'] : null;
        $this->container['iosSchemaUrl'] = isset($data['iosSchemaUrl']) ? $data['iosSchemaUrl'] : null;
        $this->container['thirdName'] = isset($data['thirdName']) ? $data['thirdName'] : null;
        $this->container['thirdEmail'] = isset($data['thirdEmail']) ? $data['thirdEmail'] : null;
        $this->container['thirdMobile'] = isset($data['thirdMobile']) ? $data['thirdMobile'] : null;
        $this->container['thirdAccessToken'] = isset($data['thirdAccessToken']) ? $data['thirdAccessToken'] : null;
        $this->container['thirdHeadImgUrl'] = isset($data['thirdHeadImgUrl']) ? $data['thirdHeadImgUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableSso'] === null) {
            $invalidProperties[] = "'enableSso' can't be null";
        }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['authorizeUrl']) && (mb_strlen($this->container['authorizeUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'authorizeUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['authorizeUrl']) && (mb_strlen($this->container['authorizeUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'authorizeUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['authorizeUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/", $this->container['authorizeUrl'])) {
                $invalidProperties[] = "invalid value for 'authorizeUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['getTokenUrl']) && (mb_strlen($this->container['getTokenUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'getTokenUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['getTokenUrl']) && (mb_strlen($this->container['getTokenUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'getTokenUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['getTokenUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/", $this->container['getTokenUrl'])) {
                $invalidProperties[] = "invalid value for 'getTokenUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 255)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clientSecret']) && (mb_strlen($this->container['clientSecret']) > 255)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clientSecret']) && (mb_strlen($this->container['clientSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 255)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 0)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accFieldName']) && (mb_strlen($this->container['accFieldName']) > 255)) {
                $invalidProperties[] = "invalid value for 'accFieldName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['accFieldName']) && (mb_strlen($this->container['accFieldName']) < 0)) {
                $invalidProperties[] = "invalid value for 'accFieldName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['getUserInfoUrl']) && (mb_strlen($this->container['getUserInfoUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'getUserInfoUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['getUserInfoUrl']) && (mb_strlen($this->container['getUserInfoUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'getUserInfoUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['getUserInfoUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/", $this->container['getUserInfoUrl'])) {
                $invalidProperties[] = "invalid value for 'getUserInfoUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['oauth2ServerType']) && ($this->container['oauth2ServerType'] > 255)) {
                $invalidProperties[] = "invalid value for 'oauth2ServerType', must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['oauth2ServerType']) && ($this->container['oauth2ServerType'] < 0)) {
                $invalidProperties[] = "invalid value for 'oauth2ServerType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pcSchemaUrl']) && (mb_strlen($this->container['pcSchemaUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'pcSchemaUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pcSchemaUrl']) && (mb_strlen($this->container['pcSchemaUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'pcSchemaUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pcSchemaUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/", $this->container['pcSchemaUrl'])) {
                $invalidProperties[] = "invalid value for 'pcSchemaUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['androidSchemaUrl']) && (mb_strlen($this->container['androidSchemaUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'androidSchemaUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['androidSchemaUrl']) && (mb_strlen($this->container['androidSchemaUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'androidSchemaUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['androidSchemaUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/", $this->container['androidSchemaUrl'])) {
                $invalidProperties[] = "invalid value for 'androidSchemaUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['iosSchemaUrl']) && (mb_strlen($this->container['iosSchemaUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'iosSchemaUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['iosSchemaUrl']) && (mb_strlen($this->container['iosSchemaUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'iosSchemaUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['iosSchemaUrl']) && !preg_match("/^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/", $this->container['iosSchemaUrl'])) {
                $invalidProperties[] = "invalid value for 'iosSchemaUrl', must be conform to the pattern /^$|^[0-9a-zA-Z-_.{}:@&=$\/?#%]+$/.";
            }
            if (!is_null($this->container['thirdName']) && (mb_strlen($this->container['thirdName']) > 255)) {
                $invalidProperties[] = "invalid value for 'thirdName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['thirdName']) && (mb_strlen($this->container['thirdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdEmail']) && (mb_strlen($this->container['thirdEmail']) > 255)) {
                $invalidProperties[] = "invalid value for 'thirdEmail', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['thirdEmail']) && (mb_strlen($this->container['thirdEmail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdEmail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdMobile']) && (mb_strlen($this->container['thirdMobile']) > 255)) {
                $invalidProperties[] = "invalid value for 'thirdMobile', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['thirdMobile']) && (mb_strlen($this->container['thirdMobile']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdMobile', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdAccessToken']) && (mb_strlen($this->container['thirdAccessToken']) > 255)) {
                $invalidProperties[] = "invalid value for 'thirdAccessToken', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['thirdAccessToken']) && (mb_strlen($this->container['thirdAccessToken']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdAccessToken', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdHeadImgUrl']) && (mb_strlen($this->container['thirdHeadImgUrl']) > 64)) {
                $invalidProperties[] = "invalid value for 'thirdHeadImgUrl', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['thirdHeadImgUrl']) && (mb_strlen($this->container['thirdHeadImgUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdHeadImgUrl', the character length must be bigger than or equal to 0.";
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
    * Gets enableSso
    *  是否开启SSO登录。
    *
    * @return bool
    */
    public function getEnableSso()
    {
        return $this->container['enableSso'];
    }

    /**
    * Sets enableSso
    *
    * @param bool $enableSso 是否开启SSO登录。
    *
    * @return $this
    */
    public function setEnableSso($enableSso)
    {
        $this->container['enableSso'] = $enableSso;
        return $this;
    }

    /**
    * Gets domain
    *  企业域名 > 开启SSO登录时必填
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 企业域名 > 开启SSO登录时必填
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets authorizeUrl
    *  鉴权中心URL。 > 开启SSO登录时必填
    *
    * @return string|null
    */
    public function getAuthorizeUrl()
    {
        return $this->container['authorizeUrl'];
    }

    /**
    * Sets authorizeUrl
    *
    * @param string|null $authorizeUrl 鉴权中心URL。 > 开启SSO登录时必填
    *
    * @return $this
    */
    public function setAuthorizeUrl($authorizeUrl)
    {
        $this->container['authorizeUrl'] = $authorizeUrl;
        return $this;
    }

    /**
    * Gets getTokenUrl
    *  获取Token URL。 > 开启SSO登录时必填
    *
    * @return string|null
    */
    public function getGetTokenUrl()
    {
        return $this->container['getTokenUrl'];
    }

    /**
    * Sets getTokenUrl
    *
    * @param string|null $getTokenUrl 获取Token URL。 > 开启SSO登录时必填
    *
    * @return $this
    */
    public function setGetTokenUrl($getTokenUrl)
    {
        $this->container['getTokenUrl'] = $getTokenUrl;
        return $this;
    }

    /**
    * Gets clientId
    *  APP ID。 > 开启SSO登录时必填
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId APP ID。 > 开启SSO登录时必填
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientSecret
    *  APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    *
    * @return string|null
    */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
    * Sets clientSecret
    *
    * @param string|null $clientSecret APP秘钥。 > 开启SSO登录时，若不修改APP秘钥，则置空即可
    *
    * @return $this
    */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
    * Gets scope
    *  授权范围。 * openid：OAuth2.0的OIDC
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 授权范围。 * openid：OAuth2.0的OIDC
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets accFieldName
    *  第三方帐号的字段名称。 > 开启SSO登录时必填
    *
    * @return string|null
    */
    public function getAccFieldName()
    {
        return $this->container['accFieldName'];
    }

    /**
    * Sets accFieldName
    *
    * @param string|null $accFieldName 第三方帐号的字段名称。 > 开启SSO登录时必填
    *
    * @return $this
    */
    public function setAccFieldName($accFieldName)
    {
        $this->container['accFieldName'] = $accFieldName;
        return $this;
    }

    /**
    * Gets getUserInfoUrl
    *  用户信息查询URL。
    *
    * @return string|null
    */
    public function getGetUserInfoUrl()
    {
        return $this->container['getUserInfoUrl'];
    }

    /**
    * Sets getUserInfoUrl
    *
    * @param string|null $getUserInfoUrl 用户信息查询URL。
    *
    * @return $this
    */
    public function setGetUserInfoUrl($getUserInfoUrl)
    {
        $this->container['getUserInfoUrl'] = $getUserInfoUrl;
        return $this;
    }

    /**
    * Gets oauth2ServerType
    *  鉴权类型。 * 0：OAuth2.0鉴权
    *
    * @return int|null
    */
    public function getOauth2ServerType()
    {
        return $this->container['oauth2ServerType'];
    }

    /**
    * Sets oauth2ServerType
    *
    * @param int|null $oauth2ServerType 鉴权类型。 * 0：OAuth2.0鉴权
    *
    * @return $this
    */
    public function setOauth2ServerType($oauth2ServerType)
    {
        $this->container['oauth2ServerType'] = $oauth2ServerType;
        return $this;
    }

    /**
    * Gets pcSchemaUrl
    *  拉起PC端终端的schema。
    *
    * @return string|null
    */
    public function getPcSchemaUrl()
    {
        return $this->container['pcSchemaUrl'];
    }

    /**
    * Sets pcSchemaUrl
    *
    * @param string|null $pcSchemaUrl 拉起PC端终端的schema。
    *
    * @return $this
    */
    public function setPcSchemaUrl($pcSchemaUrl)
    {
        $this->container['pcSchemaUrl'] = $pcSchemaUrl;
        return $this;
    }

    /**
    * Gets androidSchemaUrl
    *  拉起安卓端终端的schema。
    *
    * @return string|null
    */
    public function getAndroidSchemaUrl()
    {
        return $this->container['androidSchemaUrl'];
    }

    /**
    * Sets androidSchemaUrl
    *
    * @param string|null $androidSchemaUrl 拉起安卓端终端的schema。
    *
    * @return $this
    */
    public function setAndroidSchemaUrl($androidSchemaUrl)
    {
        $this->container['androidSchemaUrl'] = $androidSchemaUrl;
        return $this;
    }

    /**
    * Gets iosSchemaUrl
    *  拉起ios端终端的schema。
    *
    * @return string|null
    */
    public function getIosSchemaUrl()
    {
        return $this->container['iosSchemaUrl'];
    }

    /**
    * Sets iosSchemaUrl
    *
    * @param string|null $iosSchemaUrl 拉起ios端终端的schema。
    *
    * @return $this
    */
    public function setIosSchemaUrl($iosSchemaUrl)
    {
        $this->container['iosSchemaUrl'] = $iosSchemaUrl;
        return $this;
    }

    /**
    * Gets thirdName
    *  第三方名称的字段名称。
    *
    * @return string|null
    */
    public function getThirdName()
    {
        return $this->container['thirdName'];
    }

    /**
    * Sets thirdName
    *
    * @param string|null $thirdName 第三方名称的字段名称。
    *
    * @return $this
    */
    public function setThirdName($thirdName)
    {
        $this->container['thirdName'] = $thirdName;
        return $this;
    }

    /**
    * Gets thirdEmail
    *  第三方邮箱的字段名称。
    *
    * @return string|null
    */
    public function getThirdEmail()
    {
        return $this->container['thirdEmail'];
    }

    /**
    * Sets thirdEmail
    *
    * @param string|null $thirdEmail 第三方邮箱的字段名称。
    *
    * @return $this
    */
    public function setThirdEmail($thirdEmail)
    {
        $this->container['thirdEmail'] = $thirdEmail;
        return $this;
    }

    /**
    * Gets thirdMobile
    *  第三方手机号的字段名称。
    *
    * @return string|null
    */
    public function getThirdMobile()
    {
        return $this->container['thirdMobile'];
    }

    /**
    * Sets thirdMobile
    *
    * @param string|null $thirdMobile 第三方手机号的字段名称。
    *
    * @return $this
    */
    public function setThirdMobile($thirdMobile)
    {
        $this->container['thirdMobile'] = $thirdMobile;
        return $this;
    }

    /**
    * Gets thirdAccessToken
    *  第三方accessToken的字段名称。 > 开启SSO登录时必填。
    *
    * @return string|null
    */
    public function getThirdAccessToken()
    {
        return $this->container['thirdAccessToken'];
    }

    /**
    * Sets thirdAccessToken
    *
    * @param string|null $thirdAccessToken 第三方accessToken的字段名称。 > 开启SSO登录时必填。
    *
    * @return $this
    */
    public function setThirdAccessToken($thirdAccessToken)
    {
        $this->container['thirdAccessToken'] = $thirdAccessToken;
        return $this;
    }

    /**
    * Gets thirdHeadImgUrl
    *  第三方头像链接的字段名称。
    *
    * @return string|null
    */
    public function getThirdHeadImgUrl()
    {
        return $this->container['thirdHeadImgUrl'];
    }

    /**
    * Sets thirdHeadImgUrl
    *
    * @param string|null $thirdHeadImgUrl 第三方头像链接的字段名称。
    *
    * @return $this
    */
    public function setThirdHeadImgUrl($thirdHeadImgUrl)
    {
        $this->container['thirdHeadImgUrl'] = $thirdHeadImgUrl;
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

