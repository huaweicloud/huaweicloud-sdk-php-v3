<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomAuthorizerV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomAuthorizerV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    * type  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    * authorizerType  只能为：FUNC
    * authorizerUri  函数地址。
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * authorizerVersion  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * authorizerAliasUri  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * identities  认证来源
    * ttl  缓存时间
    * userData  用户数据
    * ldApiId  自定义后端服务ID。  暂不支持
    * needBody  是否发送body
    * id  自定义认证编号
    * createTime  创建时间
    * romaAppId  自定义认证所属应用编号  暂不支持
    * romaAppName  自定义认证所属应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'authorizerType' => 'string',
            'authorizerUri' => 'string',
            'networkType' => 'string',
            'authorizerVersion' => 'string',
            'authorizerAliasUri' => 'string',
            'identities' => '\HuaweiCloud\SDK\Apig\V2\Model\Identity[]',
            'ttl' => 'int',
            'userData' => 'string',
            'ldApiId' => 'string',
            'needBody' => 'bool',
            'id' => 'string',
            'createTime' => '\DateTime',
            'romaAppId' => 'string',
            'romaAppName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    * type  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    * authorizerType  只能为：FUNC
    * authorizerUri  函数地址。
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * authorizerVersion  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * authorizerAliasUri  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * identities  认证来源
    * ttl  缓存时间
    * userData  用户数据
    * ldApiId  自定义后端服务ID。  暂不支持
    * needBody  是否发送body
    * id  自定义认证编号
    * createTime  创建时间
    * romaAppId  自定义认证所属应用编号  暂不支持
    * romaAppName  自定义认证所属应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'authorizerType' => null,
        'authorizerUri' => null,
        'networkType' => null,
        'authorizerVersion' => null,
        'authorizerAliasUri' => null,
        'identities' => null,
        'ttl' => 'int32',
        'userData' => null,
        'ldApiId' => null,
        'needBody' => null,
        'id' => null,
        'createTime' => 'date-time',
        'romaAppId' => null,
        'romaAppName' => null
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
    * name  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    * type  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    * authorizerType  只能为：FUNC
    * authorizerUri  函数地址。
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * authorizerVersion  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * authorizerAliasUri  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * identities  认证来源
    * ttl  缓存时间
    * userData  用户数据
    * ldApiId  自定义后端服务ID。  暂不支持
    * needBody  是否发送body
    * id  自定义认证编号
    * createTime  创建时间
    * romaAppId  自定义认证所属应用编号  暂不支持
    * romaAppName  自定义认证所属应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'authorizerType' => 'authorizer_type',
            'authorizerUri' => 'authorizer_uri',
            'networkType' => 'network_type',
            'authorizerVersion' => 'authorizer_version',
            'authorizerAliasUri' => 'authorizer_alias_uri',
            'identities' => 'identities',
            'ttl' => 'ttl',
            'userData' => 'user_data',
            'ldApiId' => 'ld_api_id',
            'needBody' => 'need_body',
            'id' => 'id',
            'createTime' => 'create_time',
            'romaAppId' => 'roma_app_id',
            'romaAppName' => 'roma_app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    * type  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    * authorizerType  只能为：FUNC
    * authorizerUri  函数地址。
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * authorizerVersion  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * authorizerAliasUri  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * identities  认证来源
    * ttl  缓存时间
    * userData  用户数据
    * ldApiId  自定义后端服务ID。  暂不支持
    * needBody  是否发送body
    * id  自定义认证编号
    * createTime  创建时间
    * romaAppId  自定义认证所属应用编号  暂不支持
    * romaAppName  自定义认证所属应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'authorizerType' => 'setAuthorizerType',
            'authorizerUri' => 'setAuthorizerUri',
            'networkType' => 'setNetworkType',
            'authorizerVersion' => 'setAuthorizerVersion',
            'authorizerAliasUri' => 'setAuthorizerAliasUri',
            'identities' => 'setIdentities',
            'ttl' => 'setTtl',
            'userData' => 'setUserData',
            'ldApiId' => 'setLdApiId',
            'needBody' => 'setNeedBody',
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'romaAppId' => 'setRomaAppId',
            'romaAppName' => 'setRomaAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    * type  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    * authorizerType  只能为：FUNC
    * authorizerUri  函数地址。
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * authorizerVersion  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * authorizerAliasUri  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * identities  认证来源
    * ttl  缓存时间
    * userData  用户数据
    * ldApiId  自定义后端服务ID。  暂不支持
    * needBody  是否发送body
    * id  自定义认证编号
    * createTime  创建时间
    * romaAppId  自定义认证所属应用编号  暂不支持
    * romaAppName  自定义认证所属应用名称  暂不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'authorizerType' => 'getAuthorizerType',
            'authorizerUri' => 'getAuthorizerUri',
            'networkType' => 'getNetworkType',
            'authorizerVersion' => 'getAuthorizerVersion',
            'authorizerAliasUri' => 'getAuthorizerAliasUri',
            'identities' => 'getIdentities',
            'ttl' => 'getTtl',
            'userData' => 'getUserData',
            'ldApiId' => 'getLdApiId',
            'needBody' => 'getNeedBody',
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'romaAppId' => 'getRomaAppId',
            'romaAppName' => 'getRomaAppName'
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
    const TYPE_FRONTEND = 'FRONTEND';
    const TYPE_BACKEND = 'BACKEND';
    const AUTHORIZER_TYPE_FUNC = 'FUNC';
    const NETWORK_TYPE_V1 = 'V1';
    const NETWORK_TYPE_V2 = 'V2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FRONTEND,
            self::TYPE_BACKEND,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthorizerTypeAllowableValues()
    {
        return [
            self::AUTHORIZER_TYPE_FUNC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE_V1,
            self::NETWORK_TYPE_V2,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['authorizerType'] = isset($data['authorizerType']) ? $data['authorizerType'] : null;
        $this->container['authorizerUri'] = isset($data['authorizerUri']) ? $data['authorizerUri'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['authorizerVersion'] = isset($data['authorizerVersion']) ? $data['authorizerVersion'] : null;
        $this->container['authorizerAliasUri'] = isset($data['authorizerAliasUri']) ? $data['authorizerAliasUri'] : null;
        $this->container['identities'] = isset($data['identities']) ? $data['identities'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['ldApiId'] = isset($data['ldApiId']) ? $data['ldApiId'] : null;
        $this->container['needBody'] = isset($data['needBody']) ? $data['needBody'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
        $this->container['romaAppName'] = isset($data['romaAppName']) ? $data['romaAppName'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['authorizerType'] === null) {
            $invalidProperties[] = "'authorizerType' can't be null";
        }
            $allowedValues = $this->getAuthorizerTypeAllowableValues();
                if (!is_null($this->container['authorizerType']) && !in_array($this->container['authorizerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authorizerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['authorizerUri'] === null) {
            $invalidProperties[] = "'authorizerUri' can't be null";
        }
            $allowedValues = $this->getNetworkTypeAllowableValues();
                if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['authorizerVersion']) && (mb_strlen($this->container['authorizerVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'authorizerVersion', the character length must be smaller than or equal to 64.";
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
    *  自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
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
    * @param string $name 自定义认证的名称。 长度为3 ~ 64位的字符串，字符串由中文、英文字母、数字、“_”组成，且只能以英文或中文开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 自定义认证类型  - FRONTEND：前端 - BACKEND：后端  不支持修改
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets authorizerType
    *  只能为：FUNC
    *
    * @return string
    */
    public function getAuthorizerType()
    {
        return $this->container['authorizerType'];
    }

    /**
    * Sets authorizerType
    *
    * @param string $authorizerType 只能为：FUNC
    *
    * @return $this
    */
    public function setAuthorizerType($authorizerType)
    {
        $this->container['authorizerType'] = $authorizerType;
        return $this;
    }

    /**
    * Gets authorizerUri
    *  函数地址。
    *
    * @return string
    */
    public function getAuthorizerUri()
    {
        return $this->container['authorizerUri'];
    }

    /**
    * Sets authorizerUri
    *
    * @param string $authorizerUri 函数地址。
    *
    * @return $this
    */
    public function setAuthorizerUri($authorizerUri)
    {
        $this->container['authorizerUri'] = $authorizerUri;
        return $this;
    }

    /**
    * Gets networkType
    *  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets authorizerVersion
    *  函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return string|null
    */
    public function getAuthorizerVersion()
    {
        return $this->container['authorizerVersion'];
    }

    /**
    * Sets authorizerVersion
    *
    * @param string|null $authorizerVersion 函数版本。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return $this
    */
    public function setAuthorizerVersion($authorizerVersion)
    {
        $this->container['authorizerVersion'] = $authorizerVersion;
        return $this;
    }

    /**
    * Gets authorizerAliasUri
    *  函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return string|null
    */
    public function getAuthorizerAliasUri()
    {
        return $this->container['authorizerAliasUri'];
    }

    /**
    * Sets authorizerAliasUri
    *
    * @param string|null $authorizerAliasUri 函数别名地址。  当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return $this
    */
    public function setAuthorizerAliasUri($authorizerAliasUri)
    {
        $this->container['authorizerAliasUri'] = $authorizerAliasUri;
        return $this;
    }

    /**
    * Gets identities
    *  认证来源
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\Identity[]|null
    */
    public function getIdentities()
    {
        return $this->container['identities'];
    }

    /**
    * Sets identities
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\Identity[]|null $identities 认证来源
    *
    * @return $this
    */
    public function setIdentities($identities)
    {
        $this->container['identities'] = $identities;
        return $this;
    }

    /**
    * Gets ttl
    *  缓存时间
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 缓存时间
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets userData
    *  用户数据
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户数据
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets ldApiId
    *  自定义后端服务ID。  暂不支持
    *
    * @return string|null
    */
    public function getLdApiId()
    {
        return $this->container['ldApiId'];
    }

    /**
    * Sets ldApiId
    *
    * @param string|null $ldApiId 自定义后端服务ID。  暂不支持
    *
    * @return $this
    */
    public function setLdApiId($ldApiId)
    {
        $this->container['ldApiId'] = $ldApiId;
        return $this;
    }

    /**
    * Gets needBody
    *  是否发送body
    *
    * @return bool|null
    */
    public function getNeedBody()
    {
        return $this->container['needBody'];
    }

    /**
    * Sets needBody
    *
    * @param bool|null $needBody 是否发送body
    *
    * @return $this
    */
    public function setNeedBody($needBody)
    {
        $this->container['needBody'] = $needBody;
        return $this;
    }

    /**
    * Gets id
    *  自定义认证编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 自定义认证编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets romaAppId
    *  自定义认证所属应用编号  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppId()
    {
        return $this->container['romaAppId'];
    }

    /**
    * Sets romaAppId
    *
    * @param string|null $romaAppId 自定义认证所属应用编号  暂不支持
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
        return $this;
    }

    /**
    * Gets romaAppName
    *  自定义认证所属应用名称  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppName()
    {
        return $this->container['romaAppName'];
    }

    /**
    * Sets romaAppName
    *
    * @param string|null $romaAppName 自定义认证所属应用名称  暂不支持
    *
    * @return $this
    */
    public function setRomaAppName($romaAppName)
    {
        $this->container['romaAppName'] = $romaAppName;
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

