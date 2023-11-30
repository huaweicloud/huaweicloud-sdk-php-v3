<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApiResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApiResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API的ID
    * name  API名称
    * groupId  API所属分组的ID（共享版）
    * description  API 描述
    * protocol  API 访问协议
    * publishType  发布类型，公开或者私有
    * logFlag  是否开启日志记录
    * path  API的访问路径
    * host  共享版域名
    * hosts  hosts
    * requestType  API访问方式
    * createUser  API创建者
    * createTime  创建时间
    * updateTime  更新时间
    * manager  API 审核人名称
    * status  API的状态（共享版）
    * type  API 类型
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * requestParas  API请求参数
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'groupId' => 'string',
            'description' => 'string',
            'protocol' => 'string',
            'publishType' => 'string',
            'logFlag' => 'bool',
            'path' => 'string',
            'host' => 'string',
            'hosts' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\InstanceHostDTO',
            'requestType' => 'string',
            'createUser' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'manager' => 'string',
            'status' => 'string',
            'type' => 'string',
            'debugStatus' => 'string',
            'publishMessages' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]',
            'requestParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RequestPara[]',
            'datasourceConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceConfig',
            'backendConfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API的ID
    * name  API名称
    * groupId  API所属分组的ID（共享版）
    * description  API 描述
    * protocol  API 访问协议
    * publishType  发布类型，公开或者私有
    * logFlag  是否开启日志记录
    * path  API的访问路径
    * host  共享版域名
    * hosts  hosts
    * requestType  API访问方式
    * createUser  API创建者
    * createTime  创建时间
    * updateTime  更新时间
    * manager  API 审核人名称
    * status  API的状态（共享版）
    * type  API 类型
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * requestParas  API请求参数
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'groupId' => null,
        'description' => null,
        'protocol' => null,
        'publishType' => null,
        'logFlag' => null,
        'path' => null,
        'host' => null,
        'hosts' => null,
        'requestType' => null,
        'createUser' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'manager' => null,
        'status' => null,
        'type' => null,
        'debugStatus' => null,
        'publishMessages' => null,
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
    * id  API的ID
    * name  API名称
    * groupId  API所属分组的ID（共享版）
    * description  API 描述
    * protocol  API 访问协议
    * publishType  发布类型，公开或者私有
    * logFlag  是否开启日志记录
    * path  API的访问路径
    * host  共享版域名
    * hosts  hosts
    * requestType  API访问方式
    * createUser  API创建者
    * createTime  创建时间
    * updateTime  更新时间
    * manager  API 审核人名称
    * status  API的状态（共享版）
    * type  API 类型
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * requestParas  API请求参数
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'groupId' => 'group_id',
            'description' => 'description',
            'protocol' => 'protocol',
            'publishType' => 'publish_type',
            'logFlag' => 'log_flag',
            'path' => 'path',
            'host' => 'host',
            'hosts' => 'hosts',
            'requestType' => 'request_type',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'manager' => 'manager',
            'status' => 'status',
            'type' => 'type',
            'debugStatus' => 'debug_status',
            'publishMessages' => 'publish_messages',
            'requestParas' => 'request_paras',
            'datasourceConfig' => 'datasource_config',
            'backendConfig' => 'backend_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API的ID
    * name  API名称
    * groupId  API所属分组的ID（共享版）
    * description  API 描述
    * protocol  API 访问协议
    * publishType  发布类型，公开或者私有
    * logFlag  是否开启日志记录
    * path  API的访问路径
    * host  共享版域名
    * hosts  hosts
    * requestType  API访问方式
    * createUser  API创建者
    * createTime  创建时间
    * updateTime  更新时间
    * manager  API 审核人名称
    * status  API的状态（共享版）
    * type  API 类型
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * requestParas  API请求参数
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'groupId' => 'setGroupId',
            'description' => 'setDescription',
            'protocol' => 'setProtocol',
            'publishType' => 'setPublishType',
            'logFlag' => 'setLogFlag',
            'path' => 'setPath',
            'host' => 'setHost',
            'hosts' => 'setHosts',
            'requestType' => 'setRequestType',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'manager' => 'setManager',
            'status' => 'setStatus',
            'type' => 'setType',
            'debugStatus' => 'setDebugStatus',
            'publishMessages' => 'setPublishMessages',
            'requestParas' => 'setRequestParas',
            'datasourceConfig' => 'setDatasourceConfig',
            'backendConfig' => 'setBackendConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API的ID
    * name  API名称
    * groupId  API所属分组的ID（共享版）
    * description  API 描述
    * protocol  API 访问协议
    * publishType  发布类型，公开或者私有
    * logFlag  是否开启日志记录
    * path  API的访问路径
    * host  共享版域名
    * hosts  hosts
    * requestType  API访问方式
    * createUser  API创建者
    * createTime  创建时间
    * updateTime  更新时间
    * manager  API 审核人名称
    * status  API的状态（共享版）
    * type  API 类型
    * debugStatus  API调试状态（共享版）
    * publishMessages  发布信息列表（专享版）
    * requestParas  API请求参数
    * datasourceConfig  datasourceConfig
    * backendConfig  backendConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'groupId' => 'getGroupId',
            'description' => 'getDescription',
            'protocol' => 'getProtocol',
            'publishType' => 'getPublishType',
            'logFlag' => 'getLogFlag',
            'path' => 'getPath',
            'host' => 'getHost',
            'hosts' => 'getHosts',
            'requestType' => 'getRequestType',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'manager' => 'getManager',
            'status' => 'getStatus',
            'type' => 'getType',
            'debugStatus' => 'getDebugStatus',
            'publishMessages' => 'getPublishMessages',
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
    const PROTOCOL_PROTOCOL_TYPE_HTTP = 'PROTOCOL_TYPE_HTTP';
    const PROTOCOL_PROTOCOL_TYPE_HTTPS = 'PROTOCOL_TYPE_HTTPS';
    const PUBLISH_TYPE_PUBLISH_TYPE_PUBLIC = 'PUBLISH_TYPE_PUBLIC';
    const PUBLISH_TYPE_PUBLISH_TYPE_PRIVATE = 'PUBLISH_TYPE_PRIVATE';
    const REQUEST_TYPE_REQUEST_TYPE_POST = 'REQUEST_TYPE_POST';
    const REQUEST_TYPE_REQUEST_TYPE_GET = 'REQUEST_TYPE_GET';
    const STATUS_API_STATUS_CREATED = 'API_STATUS_CREATED';
    const STATUS_API_STATUS_PUBLISH_WAIT_REVIEW = 'API_STATUS_PUBLISH_WAIT_REVIEW';
    const STATUS_API_STATUS_PUBLISH_REJECT = 'API_STATUS_PUBLISH_REJECT';
    const STATUS_API_STATUS_PUBLISHED = 'API_STATUS_PUBLISHED';
    const STATUS_API_STATUS_WAITING_STOP = 'API_STATUS_WAITING_STOP';
    const STATUS_API_STATUS_STOPPED = 'API_STATUS_STOPPED';
    const STATUS_API_STATUS_RECOVER_WAIT_REVIEW = 'API_STATUS_RECOVER_WAIT_REVIEW';
    const STATUS_API_STATUS_WAITING_OFFLINE = 'API_STATUS_WAITING_OFFLINE';
    const STATUS_API_STATUS_OFFLINE = 'API_STATUS_OFFLINE';
    const STATUS_API_STATUS_OFFLINE_WAIT_REVIEW = 'API_STATUS_OFFLINE_WAIT_REVIEW';
    const TYPE_API_SPECIFIC_TYPE_CONFIGURATION = 'API_SPECIFIC_TYPE_CONFIGURATION';
    const TYPE_API_SPECIFIC_TYPE_SCRIPT = 'API_SPECIFIC_TYPE_SCRIPT';
    const TYPE_API_SPECIFIC_TYPE_REGISTER = 'API_SPECIFIC_TYPE_REGISTER';
    const DEBUG_STATUS_API_DEBUG_WAITING = 'API_DEBUG_WAITING';
    const DEBUG_STATUS_API_DEBUG_FAILED = 'API_DEBUG_FAILED';
    const DEBUG_STATUS_API_DEBUG_SUCCESS = 'API_DEBUG_SUCCESS';
    

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
    public function getPublishTypeAllowableValues()
    {
        return [
            self::PUBLISH_TYPE_PUBLISH_TYPE_PUBLIC,
            self::PUBLISH_TYPE_PUBLISH_TYPE_PRIVATE,
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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_API_STATUS_CREATED,
            self::STATUS_API_STATUS_PUBLISH_WAIT_REVIEW,
            self::STATUS_API_STATUS_PUBLISH_REJECT,
            self::STATUS_API_STATUS_PUBLISHED,
            self::STATUS_API_STATUS_WAITING_STOP,
            self::STATUS_API_STATUS_STOPPED,
            self::STATUS_API_STATUS_RECOVER_WAIT_REVIEW,
            self::STATUS_API_STATUS_WAITING_OFFLINE,
            self::STATUS_API_STATUS_OFFLINE,
            self::STATUS_API_STATUS_OFFLINE_WAIT_REVIEW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_API_SPECIFIC_TYPE_CONFIGURATION,
            self::TYPE_API_SPECIFIC_TYPE_SCRIPT,
            self::TYPE_API_SPECIFIC_TYPE_REGISTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDebugStatusAllowableValues()
    {
        return [
            self::DEBUG_STATUS_API_DEBUG_WAITING,
            self::DEBUG_STATUS_API_DEBUG_FAILED,
            self::DEBUG_STATUS_API_DEBUG_SUCCESS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['publishType'] = isset($data['publishType']) ? $data['publishType'] : null;
        $this->container['logFlag'] = isset($data['logFlag']) ? $data['logFlag'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['requestType'] = isset($data['requestType']) ? $data['requestType'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['debugStatus'] = isset($data['debugStatus']) ? $data['debugStatus'] : null;
        $this->container['publishMessages'] = isset($data['publishMessages']) ? $data['publishMessages'] : null;
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
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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

            $allowedValues = $this->getRequestTypeAllowableValues();
                if (!is_null($this->container['requestType']) && !in_array($this->container['requestType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'requestType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDebugStatusAllowableValues();
                if (!is_null($this->container['debugStatus']) && !in_array($this->container['debugStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'debugStatus', must be one of '%s'",
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
    * Gets id
    *  API的ID
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
    * @param string|null $id API的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  API名称
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
    * @param string|null $name API名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets groupId
    *  API所属分组的ID（共享版）
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
    * @param string|null $groupId API所属分组的ID（共享版）
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets description
    *  API 描述
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
    * @param string|null $description API 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets protocol
    *  API 访问协议
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
    * @param string|null $protocol API 访问协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets publishType
    *  发布类型，公开或者私有
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
    * @param string|null $publishType 发布类型，公开或者私有
    *
    * @return $this
    */
    public function setPublishType($publishType)
    {
        $this->container['publishType'] = $publishType;
        return $this;
    }

    /**
    * Gets logFlag
    *  是否开启日志记录
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
    * @param bool|null $logFlag 是否开启日志记录
    *
    * @return $this
    */
    public function setLogFlag($logFlag)
    {
        $this->container['logFlag'] = $logFlag;
        return $this;
    }

    /**
    * Gets path
    *  API的访问路径
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
    * @param string|null $path API的访问路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets host
    *  共享版域名
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 共享版域名
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets hosts
    *  hosts
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\InstanceHostDTO|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\InstanceHostDTO|null $hosts hosts
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets requestType
    *  API访问方式
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
    * @param string|null $requestType API访问方式
    *
    * @return $this
    */
    public function setRequestType($requestType)
    {
        $this->container['requestType'] = $requestType;
        return $this;
    }

    /**
    * Gets createUser
    *  API创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser API创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
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
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets manager
    *  API 审核人名称
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
    * @param string|null $manager API 审核人名称
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets status
    *  API的状态（共享版）
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
    * @param string|null $status API的状态（共享版）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  API 类型
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
    * @param string|null $type API 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets debugStatus
    *  API调试状态（共享版）
    *
    * @return string|null
    */
    public function getDebugStatus()
    {
        return $this->container['debugStatus'];
    }

    /**
    * Sets debugStatus
    *
    * @param string|null $debugStatus API调试状态（共享版）
    *
    * @return $this
    */
    public function setDebugStatus($debugStatus)
    {
        $this->container['debugStatus'] = $debugStatus;
        return $this;
    }

    /**
    * Gets publishMessages
    *  发布信息列表（专享版）
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]|null
    */
    public function getPublishMessages()
    {
        return $this->container['publishMessages'];
    }

    /**
    * Sets publishMessages
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiPublishDTO[]|null $publishMessages 发布信息列表（专享版）
    *
    * @return $this
    */
    public function setPublishMessages($publishMessages)
    {
        $this->container['publishMessages'] = $publishMessages;
        return $this;
    }

    /**
    * Gets requestParas
    *  API请求参数
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
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RequestPara[]|null $requestParas API请求参数
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

