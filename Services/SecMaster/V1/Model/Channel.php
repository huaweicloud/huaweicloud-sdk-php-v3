<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Channel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Channel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action
    * channelId  UUID
    * configStatus  configStatus
    * createBy  Iam用户ID
    * createByUser  Iam用户名称
    * description  描述信息
    * errorType  errorType
    * healthStatus  healthStatus
    * inputId  UUID
    * inputName  所属租户名称
    * installStatus  installStatus
    * installTime  毫秒时间戳
    * nodeReferCount  关联的节点个数
    * operationStatus  operationStatus
    * outputId  UUID
    * outputName  所属租户名称
    * parserId  UUID
    * parserName  所属租户名称
    * readWrite  readWrite
    * title  相关标题
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction',
            'channelId' => 'string',
            'configStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus',
            'createBy' => 'string',
            'createByUser' => 'string',
            'description' => 'string',
            'errorType' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType',
            'healthStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HealthStatus',
            'inputId' => 'string',
            'inputName' => 'string',
            'installStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\InstallStatus',
            'installTime' => 'int',
            'nodeReferCount' => 'int',
            'operationStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus',
            'outputId' => 'string',
            'outputName' => 'string',
            'parserId' => 'string',
            'parserName' => 'string',
            'readWrite' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite',
            'title' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action
    * channelId  UUID
    * configStatus  configStatus
    * createBy  Iam用户ID
    * createByUser  Iam用户名称
    * description  描述信息
    * errorType  errorType
    * healthStatus  healthStatus
    * inputId  UUID
    * inputName  所属租户名称
    * installStatus  installStatus
    * installTime  毫秒时间戳
    * nodeReferCount  关联的节点个数
    * operationStatus  operationStatus
    * outputId  UUID
    * outputName  所属租户名称
    * parserId  UUID
    * parserName  所属租户名称
    * readWrite  readWrite
    * title  相关标题
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'channelId' => null,
        'configStatus' => null,
        'createBy' => null,
        'createByUser' => null,
        'description' => null,
        'errorType' => null,
        'healthStatus' => null,
        'inputId' => null,
        'inputName' => null,
        'installStatus' => null,
        'installTime' => 'int64',
        'nodeReferCount' => 'int64',
        'operationStatus' => null,
        'outputId' => null,
        'outputName' => null,
        'parserId' => null,
        'parserName' => null,
        'readWrite' => null,
        'title' => null,
        'updateTime' => 'int64'
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
    * action  action
    * channelId  UUID
    * configStatus  configStatus
    * createBy  Iam用户ID
    * createByUser  Iam用户名称
    * description  描述信息
    * errorType  errorType
    * healthStatus  healthStatus
    * inputId  UUID
    * inputName  所属租户名称
    * installStatus  installStatus
    * installTime  毫秒时间戳
    * nodeReferCount  关联的节点个数
    * operationStatus  operationStatus
    * outputId  UUID
    * outputName  所属租户名称
    * parserId  UUID
    * parserName  所属租户名称
    * readWrite  readWrite
    * title  相关标题
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'channelId' => 'channel_id',
            'configStatus' => 'config_status',
            'createBy' => 'create_by',
            'createByUser' => 'create_by_user',
            'description' => 'description',
            'errorType' => 'error_type',
            'healthStatus' => 'health_status',
            'inputId' => 'input_id',
            'inputName' => 'input_name',
            'installStatus' => 'install_status',
            'installTime' => 'install_time',
            'nodeReferCount' => 'node_refer_count',
            'operationStatus' => 'operation_status',
            'outputId' => 'output_id',
            'outputName' => 'output_name',
            'parserId' => 'parser_id',
            'parserName' => 'parser_name',
            'readWrite' => 'read_write',
            'title' => 'title',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action
    * channelId  UUID
    * configStatus  configStatus
    * createBy  Iam用户ID
    * createByUser  Iam用户名称
    * description  描述信息
    * errorType  errorType
    * healthStatus  healthStatus
    * inputId  UUID
    * inputName  所属租户名称
    * installStatus  installStatus
    * installTime  毫秒时间戳
    * nodeReferCount  关联的节点个数
    * operationStatus  operationStatus
    * outputId  UUID
    * outputName  所属租户名称
    * parserId  UUID
    * parserName  所属租户名称
    * readWrite  readWrite
    * title  相关标题
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'channelId' => 'setChannelId',
            'configStatus' => 'setConfigStatus',
            'createBy' => 'setCreateBy',
            'createByUser' => 'setCreateByUser',
            'description' => 'setDescription',
            'errorType' => 'setErrorType',
            'healthStatus' => 'setHealthStatus',
            'inputId' => 'setInputId',
            'inputName' => 'setInputName',
            'installStatus' => 'setInstallStatus',
            'installTime' => 'setInstallTime',
            'nodeReferCount' => 'setNodeReferCount',
            'operationStatus' => 'setOperationStatus',
            'outputId' => 'setOutputId',
            'outputName' => 'setOutputName',
            'parserId' => 'setParserId',
            'parserName' => 'setParserName',
            'readWrite' => 'setReadWrite',
            'title' => 'setTitle',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action
    * channelId  UUID
    * configStatus  configStatus
    * createBy  Iam用户ID
    * createByUser  Iam用户名称
    * description  描述信息
    * errorType  errorType
    * healthStatus  healthStatus
    * inputId  UUID
    * inputName  所属租户名称
    * installStatus  installStatus
    * installTime  毫秒时间戳
    * nodeReferCount  关联的节点个数
    * operationStatus  operationStatus
    * outputId  UUID
    * outputName  所属租户名称
    * parserId  UUID
    * parserName  所属租户名称
    * readWrite  readWrite
    * title  相关标题
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'channelId' => 'getChannelId',
            'configStatus' => 'getConfigStatus',
            'createBy' => 'getCreateBy',
            'createByUser' => 'getCreateByUser',
            'description' => 'getDescription',
            'errorType' => 'getErrorType',
            'healthStatus' => 'getHealthStatus',
            'inputId' => 'getInputId',
            'inputName' => 'getInputName',
            'installStatus' => 'getInstallStatus',
            'installTime' => 'getInstallTime',
            'nodeReferCount' => 'getNodeReferCount',
            'operationStatus' => 'getOperationStatus',
            'outputId' => 'getOutputId',
            'outputName' => 'getOutputName',
            'parserId' => 'getParserId',
            'parserName' => 'getParserName',
            'readWrite' => 'getReadWrite',
            'title' => 'getTitle',
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createByUser'] = isset($data['createByUser']) ? $data['createByUser'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['errorType'] = isset($data['errorType']) ? $data['errorType'] : null;
        $this->container['healthStatus'] = isset($data['healthStatus']) ? $data['healthStatus'] : null;
        $this->container['inputId'] = isset($data['inputId']) ? $data['inputId'] : null;
        $this->container['inputName'] = isset($data['inputName']) ? $data['inputName'] : null;
        $this->container['installStatus'] = isset($data['installStatus']) ? $data['installStatus'] : null;
        $this->container['installTime'] = isset($data['installTime']) ? $data['installTime'] : null;
        $this->container['nodeReferCount'] = isset($data['nodeReferCount']) ? $data['nodeReferCount'] : null;
        $this->container['operationStatus'] = isset($data['operationStatus']) ? $data['operationStatus'] : null;
        $this->container['outputId'] = isset($data['outputId']) ? $data['outputId'] : null;
        $this->container['outputName'] = isset($data['outputName']) ? $data['outputName'] : null;
        $this->container['parserId'] = isset($data['parserId']) ? $data['parserId'] : null;
        $this->container['parserName'] = isset($data['parserName']) ? $data['parserName'] : null;
        $this->container['readWrite'] = isset($data['readWrite']) ? $data['readWrite'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) > 36)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) < 36)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createByUser']) && (mb_strlen($this->container['createByUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'createByUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createByUser']) && (mb_strlen($this->container['createByUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'createByUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['inputId']) && (mb_strlen($this->container['inputId']) > 36)) {
                $invalidProperties[] = "invalid value for 'inputId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['inputId']) && (mb_strlen($this->container['inputId']) < 36)) {
                $invalidProperties[] = "invalid value for 'inputId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['inputName']) && (mb_strlen($this->container['inputName']) > 63)) {
                $invalidProperties[] = "invalid value for 'inputName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['inputName']) && (mb_strlen($this->container['inputName']) < 1)) {
                $invalidProperties[] = "invalid value for 'inputName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installTime']) && ($this->container['installTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'installTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['installTime']) && ($this->container['installTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'installTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeReferCount']) && ($this->container['nodeReferCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'nodeReferCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['nodeReferCount']) && ($this->container['nodeReferCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeReferCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputId']) && (mb_strlen($this->container['outputId']) > 36)) {
                $invalidProperties[] = "invalid value for 'outputId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['outputId']) && (mb_strlen($this->container['outputId']) < 36)) {
                $invalidProperties[] = "invalid value for 'outputId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['outputName']) && (mb_strlen($this->container['outputName']) > 63)) {
                $invalidProperties[] = "invalid value for 'outputName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['outputName']) && (mb_strlen($this->container['outputName']) < 1)) {
                $invalidProperties[] = "invalid value for 'outputName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) > 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['parserId']) && (mb_strlen($this->container['parserId']) < 36)) {
                $invalidProperties[] = "invalid value for 'parserId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['parserName']) && (mb_strlen($this->container['parserName']) > 63)) {
                $invalidProperties[] = "invalid value for 'parserName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['parserName']) && (mb_strlen($this->container['parserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets channelId
    *  UUID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId UUID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets configStatus
    *  configStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus|null $configStatus configStatus
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets createBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy Iam用户ID
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createByUser
    *  Iam用户名称
    *
    * @return string|null
    */
    public function getCreateByUser()
    {
        return $this->container['createByUser'];
    }

    /**
    * Sets createByUser
    *
    * @param string|null $createByUser Iam用户名称
    *
    * @return $this
    */
    public function setCreateByUser($createByUser)
    {
        $this->container['createByUser'] = $createByUser;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets errorType
    *  errorType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType|null
    */
    public function getErrorType()
    {
        return $this->container['errorType'];
    }

    /**
    * Sets errorType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelErrorType|null $errorType errorType
    *
    * @return $this
    */
    public function setErrorType($errorType)
    {
        $this->container['errorType'] = $errorType;
        return $this;
    }

    /**
    * Gets healthStatus
    *  healthStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HealthStatus|null
    */
    public function getHealthStatus()
    {
        return $this->container['healthStatus'];
    }

    /**
    * Sets healthStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HealthStatus|null $healthStatus healthStatus
    *
    * @return $this
    */
    public function setHealthStatus($healthStatus)
    {
        $this->container['healthStatus'] = $healthStatus;
        return $this;
    }

    /**
    * Gets inputId
    *  UUID
    *
    * @return string|null
    */
    public function getInputId()
    {
        return $this->container['inputId'];
    }

    /**
    * Sets inputId
    *
    * @param string|null $inputId UUID
    *
    * @return $this
    */
    public function setInputId($inputId)
    {
        $this->container['inputId'] = $inputId;
        return $this;
    }

    /**
    * Gets inputName
    *  所属租户名称
    *
    * @return string|null
    */
    public function getInputName()
    {
        return $this->container['inputName'];
    }

    /**
    * Sets inputName
    *
    * @param string|null $inputName 所属租户名称
    *
    * @return $this
    */
    public function setInputName($inputName)
    {
        $this->container['inputName'] = $inputName;
        return $this;
    }

    /**
    * Gets installStatus
    *  installStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\InstallStatus|null
    */
    public function getInstallStatus()
    {
        return $this->container['installStatus'];
    }

    /**
    * Sets installStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\InstallStatus|null $installStatus installStatus
    *
    * @return $this
    */
    public function setInstallStatus($installStatus)
    {
        $this->container['installStatus'] = $installStatus;
        return $this;
    }

    /**
    * Gets installTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getInstallTime()
    {
        return $this->container['installTime'];
    }

    /**
    * Sets installTime
    *
    * @param int|null $installTime 毫秒时间戳
    *
    * @return $this
    */
    public function setInstallTime($installTime)
    {
        $this->container['installTime'] = $installTime;
        return $this;
    }

    /**
    * Gets nodeReferCount
    *  关联的节点个数
    *
    * @return int|null
    */
    public function getNodeReferCount()
    {
        return $this->container['nodeReferCount'];
    }

    /**
    * Sets nodeReferCount
    *
    * @param int|null $nodeReferCount 关联的节点个数
    *
    * @return $this
    */
    public function setNodeReferCount($nodeReferCount)
    {
        $this->container['nodeReferCount'] = $nodeReferCount;
        return $this;
    }

    /**
    * Gets operationStatus
    *  operationStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus|null
    */
    public function getOperationStatus()
    {
        return $this->container['operationStatus'];
    }

    /**
    * Sets operationStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ChannelOperationStatus|null $operationStatus operationStatus
    *
    * @return $this
    */
    public function setOperationStatus($operationStatus)
    {
        $this->container['operationStatus'] = $operationStatus;
        return $this;
    }

    /**
    * Gets outputId
    *  UUID
    *
    * @return string|null
    */
    public function getOutputId()
    {
        return $this->container['outputId'];
    }

    /**
    * Sets outputId
    *
    * @param string|null $outputId UUID
    *
    * @return $this
    */
    public function setOutputId($outputId)
    {
        $this->container['outputId'] = $outputId;
        return $this;
    }

    /**
    * Gets outputName
    *  所属租户名称
    *
    * @return string|null
    */
    public function getOutputName()
    {
        return $this->container['outputName'];
    }

    /**
    * Sets outputName
    *
    * @param string|null $outputName 所属租户名称
    *
    * @return $this
    */
    public function setOutputName($outputName)
    {
        $this->container['outputName'] = $outputName;
        return $this;
    }

    /**
    * Gets parserId
    *  UUID
    *
    * @return string|null
    */
    public function getParserId()
    {
        return $this->container['parserId'];
    }

    /**
    * Sets parserId
    *
    * @param string|null $parserId UUID
    *
    * @return $this
    */
    public function setParserId($parserId)
    {
        $this->container['parserId'] = $parserId;
        return $this;
    }

    /**
    * Gets parserName
    *  所属租户名称
    *
    * @return string|null
    */
    public function getParserName()
    {
        return $this->container['parserName'];
    }

    /**
    * Sets parserName
    *
    * @param string|null $parserName 所属租户名称
    *
    * @return $this
    */
    public function setParserName($parserName)
    {
        $this->container['parserName'] = $parserName;
        return $this;
    }

    /**
    * Gets readWrite
    *  readWrite
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite|null
    */
    public function getReadWrite()
    {
        return $this->container['readWrite'];
    }

    /**
    * Sets readWrite
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite|null $readWrite readWrite
    *
    * @return $this
    */
    public function setReadWrite($readWrite)
    {
        $this->container['readWrite'] = $readWrite;
        return $this;
    }

    /**
    * Gets title
    *  相关标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 相关标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets updateTime
    *  毫秒时间戳
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
    * @param int|null $updateTime 毫秒时间戳
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

