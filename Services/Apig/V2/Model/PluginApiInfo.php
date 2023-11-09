<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginApiInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginApiInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiId  API编号
    * apiName  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * remark  API描述。
    * groupId  API所属的分组编号
    * groupName  API所属分组的名称
    * romaAppId  归属集成应用编码,兼容roma实例的字段，一般为空
    * envId  绑定API的环境编码。
    * envName  绑定API的环境名称
    * publishId  发布编码。
    * pluginAttachId  插件绑定编码。
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiId' => 'string',
            'apiName' => 'string',
            'type' => 'int',
            'reqProtocol' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'authType' => 'string',
            'matchMode' => 'string',
            'remark' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'romaAppId' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'publishId' => 'string',
            'pluginAttachId' => 'string',
            'attachedTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiId  API编号
    * apiName  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * remark  API描述。
    * groupId  API所属的分组编号
    * groupName  API所属分组的名称
    * romaAppId  归属集成应用编码,兼容roma实例的字段，一般为空
    * envId  绑定API的环境编码。
    * envName  绑定API的环境名称
    * publishId  发布编码。
    * pluginAttachId  插件绑定编码。
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiId' => null,
        'apiName' => null,
        'type' => null,
        'reqProtocol' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'authType' => null,
        'matchMode' => null,
        'remark' => null,
        'groupId' => null,
        'groupName' => null,
        'romaAppId' => null,
        'envId' => null,
        'envName' => null,
        'publishId' => null,
        'pluginAttachId' => null,
        'attachedTime' => 'date-time'
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
    * apiId  API编号
    * apiName  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * remark  API描述。
    * groupId  API所属的分组编号
    * groupName  API所属分组的名称
    * romaAppId  归属集成应用编码,兼容roma实例的字段，一般为空
    * envId  绑定API的环境编码。
    * envName  绑定API的环境名称
    * publishId  发布编码。
    * pluginAttachId  插件绑定编码。
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'type' => 'type',
            'reqProtocol' => 'req_protocol',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'authType' => 'auth_type',
            'matchMode' => 'match_mode',
            'remark' => 'remark',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'romaAppId' => 'roma_app_id',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'publishId' => 'publish_id',
            'pluginAttachId' => 'plugin_attach_id',
            'attachedTime' => 'attached_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiId  API编号
    * apiName  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * remark  API描述。
    * groupId  API所属的分组编号
    * groupName  API所属分组的名称
    * romaAppId  归属集成应用编码,兼容roma实例的字段，一般为空
    * envId  绑定API的环境编码。
    * envName  绑定API的环境名称
    * publishId  发布编码。
    * pluginAttachId  插件绑定编码。
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'type' => 'setType',
            'reqProtocol' => 'setReqProtocol',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'authType' => 'setAuthType',
            'matchMode' => 'setMatchMode',
            'remark' => 'setRemark',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'romaAppId' => 'setRomaAppId',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'publishId' => 'setPublishId',
            'pluginAttachId' => 'setPluginAttachId',
            'attachedTime' => 'setAttachedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiId  API编号
    * apiName  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    * type  API类型 - 1：公有API - 2：私有API
    * reqProtocol  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    * authType  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    * remark  API描述。
    * groupId  API所属的分组编号
    * groupName  API所属分组的名称
    * romaAppId  归属集成应用编码,兼容roma实例的字段，一般为空
    * envId  绑定API的环境编码。
    * envName  绑定API的环境名称
    * publishId  发布编码。
    * pluginAttachId  插件绑定编码。
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'type' => 'getType',
            'reqProtocol' => 'getReqProtocol',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'authType' => 'getAuthType',
            'matchMode' => 'getMatchMode',
            'remark' => 'getRemark',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'romaAppId' => 'getRomaAppId',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'publishId' => 'getPublishId',
            'pluginAttachId' => 'getPluginAttachId',
            'attachedTime' => 'getAttachedTime'
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
    const REQ_PROTOCOL_HTTP = 'HTTP';
    const REQ_PROTOCOL_HTTPS = 'HTTPS';
    const REQ_PROTOCOL_BOTH = 'BOTH';
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    const AUTH_TYPE_NONE = 'NONE';
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    const AUTH_TYPE_AUTHORIZER = 'AUTHORIZER';
    const MATCH_MODE_SWA = 'SWA';
    const MATCH_MODE_NORMAL = 'NORMAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqProtocolAllowableValues()
    {
        return [
            self::REQ_PROTOCOL_HTTP,
            self::REQ_PROTOCOL_HTTPS,
            self::REQ_PROTOCOL_BOTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
            self::AUTH_TYPE_AUTHORIZER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchModeAllowableValues()
    {
        return [
            self::MATCH_MODE_SWA,
            self::MATCH_MODE_NORMAL,
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
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['matchMode'] = isset($data['matchMode']) ? $data['matchMode'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['pluginAttachId'] = isset($data['pluginAttachId']) ? $data['pluginAttachId'] : null;
        $this->container['attachedTime'] = isset($data['attachedTime']) ? $data['attachedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReqProtocolAllowableValues();
                if (!is_null($this->container['reqProtocol']) && !in_array($this->container['reqProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMatchModeAllowableValues();
                if (!is_null($this->container['matchMode']) && !in_array($this->container['matchMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'matchMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets apiId
    *  API编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API名称。   支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头，3-255个字符。  > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets type
    *  API类型 - 1：公有API - 2：私有API
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type API类型 - 1：公有API - 2：私有API
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    *
    * @return string|null
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string|null $reqProtocol API的请求协议 - HTTP - HTTPS - BOTH：同时支持HTTP和HTTPS
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API的请求方式
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod API的请求方式
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqUri
    *  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    *
    * @return string|null
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string|null $reqUri 请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets authType
    *  API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType API的认证方式 - NONE：无认证 - APP：APP认证 - IAM：IAM认证 - AUTHORIZER：自定义认证
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets matchMode
    *  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return string|null
    */
    public function getMatchMode()
    {
        return $this->container['matchMode'];
    }

    /**
    * Sets matchMode
    *
    * @param string|null $matchMode API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return $this
    */
    public function setMatchMode($matchMode)
    {
        $this->container['matchMode'] = $matchMode;
        return $this;
    }

    /**
    * Gets remark
    *  API描述。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark API描述。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets groupId
    *  API所属的分组编号
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API所属的分组编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  API所属分组的名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API所属分组的名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets romaAppId
    *  归属集成应用编码,兼容roma实例的字段，一般为空
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
    * @param string|null $romaAppId 归属集成应用编码,兼容roma实例的字段，一般为空
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
        return $this;
    }

    /**
    * Gets envId
    *  绑定API的环境编码。
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 绑定API的环境编码。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  绑定API的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 绑定API的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets publishId
    *  发布编码。
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId 发布编码。
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets pluginAttachId
    *  插件绑定编码。
    *
    * @return string|null
    */
    public function getPluginAttachId()
    {
        return $this->container['pluginAttachId'];
    }

    /**
    * Sets pluginAttachId
    *
    * @param string|null $pluginAttachId 插件绑定编码。
    *
    * @return $this
    */
    public function setPluginAttachId($pluginAttachId)
    {
        $this->container['pluginAttachId'] = $pluginAttachId;
        return $this;
    }

    /**
    * Gets attachedTime
    *  绑定时间。
    *
    * @return \DateTime|null
    */
    public function getAttachedTime()
    {
        return $this->container['attachedTime'];
    }

    /**
    * Sets attachedTime
    *
    * @param \DateTime|null $attachedTime 绑定时间。
    *
    * @return $this
    */
    public function setAttachedTime($attachedTime)
    {
        $this->container['attachedTime'] = $attachedTime;
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

