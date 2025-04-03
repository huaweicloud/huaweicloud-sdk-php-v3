<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Api implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Api';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalogId  目录ID
    * name  api 名称
    * description  api 描述
    * logFlag  是否启用访问日志
    * apiType  apiType
    * authType  authType
    * retentionPeriod  最低保留期限，单位小时。
    * manager  API审核人。
    * path  API路径。
    * protocol  protocol
    * requestType  requestType
    * tags  标签。
    * visibility  visibility
    * publishType  publishType
    * dataMaskSwitch  数据脱敏开关。
    * dataMaskParas  数据脱敏配置。
    * body  请求体内容描述，仅注册类API使用。
    * datasourceConfigList  多数据源配置信息，仅Groovy类API使用。
    * groovyContent  Groovy文本，仅Groovy类API使用。
    * requestParas  API请求参数列表。
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalogId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'logFlag' => 'bool',
            'apiType' => 'string',
            'authType' => 'string',
            'retentionPeriod' => 'int',
            'manager' => 'string',
            'path' => 'string',
            'protocol' => 'string',
            'requestType' => 'string',
            'tags' => 'string[]',
            'visibility' => 'string',
            'publishType' => 'string',
            'dataMaskSwitch' => 'bool',
            'dataMaskParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMaskParas[]',
            'body' => 'string',
            'datasourceConfigList' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig[]',
            'groovyContent' => 'string',
            'requestParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RequestPara[]',
            'datasourceConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig',
            'backendConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalogId  目录ID
    * name  api 名称
    * description  api 描述
    * logFlag  是否启用访问日志
    * apiType  apiType
    * authType  authType
    * retentionPeriod  最低保留期限，单位小时。
    * manager  API审核人。
    * path  API路径。
    * protocol  protocol
    * requestType  requestType
    * tags  标签。
    * visibility  visibility
    * publishType  publishType
    * dataMaskSwitch  数据脱敏开关。
    * dataMaskParas  数据脱敏配置。
    * body  请求体内容描述，仅注册类API使用。
    * datasourceConfigList  多数据源配置信息，仅Groovy类API使用。
    * groovyContent  Groovy文本，仅Groovy类API使用。
    * requestParas  API请求参数列表。
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalogId' => null,
        'name' => null,
        'description' => null,
        'logFlag' => null,
        'apiType' => null,
        'authType' => null,
        'retentionPeriod' => null,
        'manager' => null,
        'path' => null,
        'protocol' => null,
        'requestType' => null,
        'tags' => null,
        'visibility' => null,
        'publishType' => null,
        'dataMaskSwitch' => null,
        'dataMaskParas' => null,
        'body' => null,
        'datasourceConfigList' => null,
        'groovyContent' => null,
        'requestParas' => null,
        'datasourceConfig' => null,
        'backendConfig' => null
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
    * catalogId  目录ID
    * name  api 名称
    * description  api 描述
    * logFlag  是否启用访问日志
    * apiType  apiType
    * authType  authType
    * retentionPeriod  最低保留期限，单位小时。
    * manager  API审核人。
    * path  API路径。
    * protocol  protocol
    * requestType  requestType
    * tags  标签。
    * visibility  visibility
    * publishType  publishType
    * dataMaskSwitch  数据脱敏开关。
    * dataMaskParas  数据脱敏配置。
    * body  请求体内容描述，仅注册类API使用。
    * datasourceConfigList  多数据源配置信息，仅Groovy类API使用。
    * groovyContent  Groovy文本，仅Groovy类API使用。
    * requestParas  API请求参数列表。
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalogId' => 'catalog_id',
            'name' => 'name',
            'description' => 'description',
            'logFlag' => 'log_flag',
            'apiType' => 'api_type',
            'authType' => 'auth_type',
            'retentionPeriod' => 'retention_period',
            'manager' => 'manager',
            'path' => 'path',
            'protocol' => 'protocol',
            'requestType' => 'request_type',
            'tags' => 'tags',
            'visibility' => 'visibility',
            'publishType' => 'publish_type',
            'dataMaskSwitch' => 'data_mask_switch',
            'dataMaskParas' => 'data_mask_paras',
            'body' => 'body',
            'datasourceConfigList' => 'datasource_config_list',
            'groovyContent' => 'groovy_content',
            'requestParas' => 'request_paras',
            'datasourceConfig' => 'datasource_config',
            'backendConfig' => 'backend_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalogId  目录ID
    * name  api 名称
    * description  api 描述
    * logFlag  是否启用访问日志
    * apiType  apiType
    * authType  authType
    * retentionPeriod  最低保留期限，单位小时。
    * manager  API审核人。
    * path  API路径。
    * protocol  protocol
    * requestType  requestType
    * tags  标签。
    * visibility  visibility
    * publishType  publishType
    * dataMaskSwitch  数据脱敏开关。
    * dataMaskParas  数据脱敏配置。
    * body  请求体内容描述，仅注册类API使用。
    * datasourceConfigList  多数据源配置信息，仅Groovy类API使用。
    * groovyContent  Groovy文本，仅Groovy类API使用。
    * requestParas  API请求参数列表。
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'catalogId' => 'setCatalogId',
            'name' => 'setName',
            'description' => 'setDescription',
            'logFlag' => 'setLogFlag',
            'apiType' => 'setApiType',
            'authType' => 'setAuthType',
            'retentionPeriod' => 'setRetentionPeriod',
            'manager' => 'setManager',
            'path' => 'setPath',
            'protocol' => 'setProtocol',
            'requestType' => 'setRequestType',
            'tags' => 'setTags',
            'visibility' => 'setVisibility',
            'publishType' => 'setPublishType',
            'dataMaskSwitch' => 'setDataMaskSwitch',
            'dataMaskParas' => 'setDataMaskParas',
            'body' => 'setBody',
            'datasourceConfigList' => 'setDatasourceConfigList',
            'groovyContent' => 'setGroovyContent',
            'requestParas' => 'setRequestParas',
            'datasourceConfig' => 'setDatasourceConfig',
            'backendConfig' => 'setBackendConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalogId  目录ID
    * name  api 名称
    * description  api 描述
    * logFlag  是否启用访问日志
    * apiType  apiType
    * authType  authType
    * retentionPeriod  最低保留期限，单位小时。
    * manager  API审核人。
    * path  API路径。
    * protocol  protocol
    * requestType  requestType
    * tags  标签。
    * visibility  visibility
    * publishType  publishType
    * dataMaskSwitch  数据脱敏开关。
    * dataMaskParas  数据脱敏配置。
    * body  请求体内容描述，仅注册类API使用。
    * datasourceConfigList  多数据源配置信息，仅Groovy类API使用。
    * groovyContent  Groovy文本，仅Groovy类API使用。
    * requestParas  API请求参数列表。
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'catalogId' => 'getCatalogId',
            'name' => 'getName',
            'description' => 'getDescription',
            'logFlag' => 'getLogFlag',
            'apiType' => 'getApiType',
            'authType' => 'getAuthType',
            'retentionPeriod' => 'getRetentionPeriod',
            'manager' => 'getManager',
            'path' => 'getPath',
            'protocol' => 'getProtocol',
            'requestType' => 'getRequestType',
            'tags' => 'getTags',
            'visibility' => 'getVisibility',
            'publishType' => 'getPublishType',
            'dataMaskSwitch' => 'getDataMaskSwitch',
            'dataMaskParas' => 'getDataMaskParas',
            'body' => 'getBody',
            'datasourceConfigList' => 'getDatasourceConfigList',
            'groovyContent' => 'getGroovyContent',
            'requestParas' => 'getRequestParas',
            'datasourceConfig' => 'getDatasourceConfig',
            'backendConfig' => 'getBackendConfig'
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
    const API_TYPE_API_SPECIFIC_TYPE_CONFIGURATION = 'API_SPECIFIC_TYPE_CONFIGURATION';
    const API_TYPE_API_SPECIFIC_TYPE_SCRIPT = 'API_SPECIFIC_TYPE_SCRIPT';
    const API_TYPE_API_SPECIFIC_TYPE_MYBATIS = 'API_SPECIFIC_TYPE_MYBATIS';
    const API_TYPE_API_SPECIFIC_TYPE_GROOVY = 'API_SPECIFIC_TYPE_GROOVY';
    const API_TYPE_API_SPECIFIC_TYPE_REGISTER = 'API_SPECIFIC_TYPE_REGISTER';
    const API_TYPE_API_SPECIFIC_TYPE_ORCHESTRATE = 'API_SPECIFIC_TYPE_ORCHESTRATE';
    const API_TYPE_API_TYPE_CREATE = 'API_TYPE_CREATE';
    const API_TYPE_API_TYPE_REGISTER = 'API_TYPE_REGISTER';
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    const AUTH_TYPE_NONE = 'NONE';
    const PROTOCOL_PROTOCOL_TYPE_HTTP = 'PROTOCOL_TYPE_HTTP';
    const PROTOCOL_PROTOCOL_TYPE_HTTPS = 'PROTOCOL_TYPE_HTTPS';
    const REQUEST_TYPE_REQUEST_TYPE_POST = 'REQUEST_TYPE_POST';
    const REQUEST_TYPE_REQUEST_TYPE_GET = 'REQUEST_TYPE_GET';
    const VISIBILITY_WORKSPACE = 'WORKSPACE';
    const VISIBILITY_PROJECT = 'PROJECT';
    const VISIBILITY_DOMAIN = 'DOMAIN';
    const PUBLISH_TYPE_PUBLISH_TYPE_PUBLIC = 'PUBLISH_TYPE_PUBLIC';
    const PUBLISH_TYPE_PUBLISH_TYPE_PRIVATE = 'PUBLISH_TYPE_PRIVATE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiTypeAllowableValues()
    {
        return [
            self::API_TYPE_API_SPECIFIC_TYPE_CONFIGURATION,
            self::API_TYPE_API_SPECIFIC_TYPE_SCRIPT,
            self::API_TYPE_API_SPECIFIC_TYPE_MYBATIS,
            self::API_TYPE_API_SPECIFIC_TYPE_GROOVY,
            self::API_TYPE_API_SPECIFIC_TYPE_REGISTER,
            self::API_TYPE_API_SPECIFIC_TYPE_ORCHESTRATE,
            self::API_TYPE_API_TYPE_CREATE,
            self::API_TYPE_API_TYPE_REGISTER,
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
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_PROTOCOL_TYPE_HTTP,
            self::PROTOCOL_PROTOCOL_TYPE_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRequestTypeAllowableValues()
    {
        return [
            self::REQUEST_TYPE_REQUEST_TYPE_POST,
            self::REQUEST_TYPE_REQUEST_TYPE_GET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_WORKSPACE,
            self::VISIBILITY_PROJECT,
            self::VISIBILITY_DOMAIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublishTypeAllowableValues()
    {
        return [
            self::PUBLISH_TYPE_PUBLISH_TYPE_PUBLIC,
            self::PUBLISH_TYPE_PUBLISH_TYPE_PRIVATE,
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
        $this->container['catalogId'] = isset($data['catalogId']) ? $data['catalogId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logFlag'] = isset($data['logFlag']) ? $data['logFlag'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['retentionPeriod'] = isset($data['retentionPeriod']) ? $data['retentionPeriod'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['publishType'] = isset($data['publishType']) ? $data['publishType'] : null;
        $this->container['dataMaskSwitch'] = isset($data['dataMaskSwitch']) ? $data['dataMaskSwitch'] : null;
        $this->container['dataMaskParas'] = isset($data['dataMaskParas']) ? $data['dataMaskParas'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['datasourceConfigList'] = isset($data['datasourceConfigList']) ? $data['datasourceConfigList'] : null;
        $this->container['groovyContent'] = isset($data['groovyContent']) ? $data['groovyContent'] : null;
        $this->container['requestParas'] = isset($data['requestParas']) ? $data['requestParas'] : null;
        $this->container['datasourceConfig'] = isset($data['datasourceConfig']) ? $data['datasourceConfig'] : null;
        $this->container['backendConfig'] = isset($data['backendConfig']) ? $data['backendConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApiTypeAllowableValues();
                if (!is_null($this->container['apiType']) && !in_array($this->container['apiType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiType', must be one of '%s'",
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

            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRequestTypeAllowableValues();
                if (!is_null($this->container['requestType']) && !in_array($this->container['requestType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'requestType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPublishTypeAllowableValues();
                if (!is_null($this->container['publishType']) && !in_array($this->container['publishType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'publishType', must be one of '%s'",
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
    * Gets catalogId
    *  目录ID
    *
    * @return string|null
    */
    public function getCatalogId()
    {
        return $this->container['catalogId'];
    }

    /**
    * Sets catalogId
    *
    * @param string|null $catalogId 目录ID
    *
    * @return $this
    */
    public function setCatalogId($catalogId)
    {
        $this->container['catalogId'] = $catalogId;
        return $this;
    }

    /**
    * Gets name
    *  api 名称
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
    * @param string|null $name api 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  api 描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description api 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets logFlag
    *  是否启用访问日志
    *
    * @return bool|null
    */
    public function getLogFlag()
    {
        return $this->container['logFlag'];
    }

    /**
    * Sets logFlag
    *
    * @param bool|null $logFlag 是否启用访问日志
    *
    * @return $this
    */
    public function setLogFlag($logFlag)
    {
        $this->container['logFlag'] = $logFlag;
        return $this;
    }

    /**
    * Gets apiType
    *  apiType
    *
    * @return string|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param string|null $apiType apiType
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets authType
    *  authType
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
    * @param string|null $authType authType
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets retentionPeriod
    *  最低保留期限，单位小时。
    *
    * @return int|null
    */
    public function getRetentionPeriod()
    {
        return $this->container['retentionPeriod'];
    }

    /**
    * Sets retentionPeriod
    *
    * @param int|null $retentionPeriod 最低保留期限，单位小时。
    *
    * @return $this
    */
    public function setRetentionPeriod($retentionPeriod)
    {
        $this->container['retentionPeriod'] = $retentionPeriod;
        return $this;
    }

    /**
    * Gets manager
    *  API审核人。
    *
    * @return string|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param string|null $manager API审核人。
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets path
    *  API路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path API路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets protocol
    *  protocol
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol protocol
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets requestType
    *  requestType
    *
    * @return string|null
    */
    public function getRequestType()
    {
        return $this->container['requestType'];
    }

    /**
    * Sets requestType
    *
    * @param string|null $requestType requestType
    *
    * @return $this
    */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;
        return $this;
    }

    /**
    * Gets tags
    *  标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets visibility
    *  visibility
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility visibility
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets publishType
    *  publishType
    *
    * @return string|null
    */
    public function getPublishType()
    {
        return $this->container['publishType'];
    }

    /**
    * Sets publishType
    *
    * @param string|null $publishType publishType
    *
    * @return $this
    */
    public function setPublishType($publishType)
    {
        $this->container['publishType'] = $publishType;
        return $this;
    }

    /**
    * Gets dataMaskSwitch
    *  数据脱敏开关。
    *
    * @return bool|null
    */
    public function getDataMaskSwitch()
    {
        return $this->container['dataMaskSwitch'];
    }

    /**
    * Sets dataMaskSwitch
    *
    * @param bool|null $dataMaskSwitch 数据脱敏开关。
    *
    * @return $this
    */
    public function setDataMaskSwitch($dataMaskSwitch)
    {
        $this->container['dataMaskSwitch'] = $dataMaskSwitch;
        return $this;
    }

    /**
    * Gets dataMaskParas
    *  数据脱敏配置。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMaskParas[]|null
    */
    public function getDataMaskParas()
    {
        return $this->container['dataMaskParas'];
    }

    /**
    * Sets dataMaskParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMaskParas[]|null $dataMaskParas 数据脱敏配置。
    *
    * @return $this
    */
    public function setDataMaskParas($dataMaskParas)
    {
        $this->container['dataMaskParas'] = $dataMaskParas;
        return $this;
    }

    /**
    * Gets body
    *  请求体内容描述，仅注册类API使用。
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 请求体内容描述，仅注册类API使用。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets datasourceConfigList
    *  多数据源配置信息，仅Groovy类API使用。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig[]|null
    */
    public function getDatasourceConfigList()
    {
        return $this->container['datasourceConfigList'];
    }

    /**
    * Sets datasourceConfigList
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig[]|null $datasourceConfigList 多数据源配置信息，仅Groovy类API使用。
    *
    * @return $this
    */
    public function setDatasourceConfigList($datasourceConfigList)
    {
        $this->container['datasourceConfigList'] = $datasourceConfigList;
        return $this;
    }

    /**
    * Gets groovyContent
    *  Groovy文本，仅Groovy类API使用。
    *
    * @return string|null
    */
    public function getGroovyContent()
    {
        return $this->container['groovyContent'];
    }

    /**
    * Sets groovyContent
    *
    * @param string|null $groovyContent Groovy文本，仅Groovy类API使用。
    *
    * @return $this
    */
    public function setGroovyContent($groovyContent)
    {
        $this->container['groovyContent'] = $groovyContent;
        return $this;
    }

    /**
    * Gets requestParas
    *  API请求参数列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RequestPara[]|null
    */
    public function getRequestParas()
    {
        return $this->container['requestParas'];
    }

    /**
    * Sets requestParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RequestPara[]|null $requestParas API请求参数列表。
    *
    * @return $this
    */
    public function setRequestParas($requestParas)
    {
        $this->container['requestParas'] = $requestParas;
        return $this;
    }

    /**
    * Gets datasourceConfig
    *  datasourceConfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig|null
    */
    public function getDatasourceConfig()
    {
        return $this->container['datasourceConfig'];
    }

    /**
    * Sets datasourceConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig|null $datasourceConfig datasourceConfig
    *
    * @return $this
    */
    public function setDatasourceConfig($datasourceConfig)
    {
        $this->container['datasourceConfig'] = $datasourceConfig;
        return $this;
    }

    /**
    * Gets backendConfig
    *  backendConfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConfig|null
    */
    public function getBackendConfig()
    {
        return $this->container['backendConfig'];
    }

    /**
    * Sets backendConfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConfig|null $backendConfig backendConfig
    *
    * @return $this
    */
    public function setBackendConfig($backendConfig)
    {
        $this->container['backendConfig'] = $backendConfig;
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

