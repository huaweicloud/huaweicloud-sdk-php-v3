<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskTableReferenceDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskTableReferenceDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableName  表名。
    * dbType  数据库类型，仅支持DLI，HIVE，SPARK。
    * dataBaseName  数据库名称。
    * clusterName  集群名称。
    * ioType  输入输出类型： - 0: 读表 - 1: 写表
    * offset  分页的起始页，取值范围大于等于0。默认值: 0。
    * limit  分页返回结果，指定每页最大记录数。默认值: 20。
    * workspaceName  工作空间名称。
    * owner  作业责任人。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'xProjectId' => 'string',
            'contentType' => 'string',
            'tableName' => 'string',
            'dbType' => 'string',
            'dataBaseName' => 'string',
            'clusterName' => 'string',
            'ioType' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'workspaceName' => 'string',
            'owner' => 'string',
            'executeUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableName  表名。
    * dbType  数据库类型，仅支持DLI，HIVE，SPARK。
    * dataBaseName  数据库名称。
    * clusterName  集群名称。
    * ioType  输入输出类型： - 0: 读表 - 1: 写表
    * offset  分页的起始页，取值范围大于等于0。默认值: 0。
    * limit  分页返回结果，指定每页最大记录数。默认值: 20。
    * workspaceName  工作空间名称。
    * owner  作业责任人。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'xProjectId' => null,
        'contentType' => null,
        'tableName' => null,
        'dbType' => null,
        'dataBaseName' => null,
        'clusterName' => null,
        'ioType' => null,
        'offset' => null,
        'limit' => 'int32',
        'workspaceName' => null,
        'owner' => null,
        'executeUser' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableName  表名。
    * dbType  数据库类型，仅支持DLI，HIVE，SPARK。
    * dataBaseName  数据库名称。
    * clusterName  集群名称。
    * ioType  输入输出类型： - 0: 读表 - 1: 写表
    * offset  分页的起始页，取值范围大于等于0。默认值: 0。
    * limit  分页返回结果，指定每页最大记录数。默认值: 20。
    * workspaceName  工作空间名称。
    * owner  作业责任人。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'xProjectId' => 'X-Project-Id',
            'contentType' => 'Content-Type',
            'tableName' => 'table_name',
            'dbType' => 'db_type',
            'dataBaseName' => 'data_base_name',
            'clusterName' => 'cluster_name',
            'ioType' => 'io_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'workspaceName' => 'workspace_name',
            'owner' => 'owner',
            'executeUser' => 'execute_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableName  表名。
    * dbType  数据库类型，仅支持DLI，HIVE，SPARK。
    * dataBaseName  数据库名称。
    * clusterName  集群名称。
    * ioType  输入输出类型： - 0: 读表 - 1: 写表
    * offset  分页的起始页，取值范围大于等于0。默认值: 0。
    * limit  分页返回结果，指定每页最大记录数。默认值: 20。
    * workspaceName  工作空间名称。
    * owner  作业责任人。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'xProjectId' => 'setXProjectId',
            'contentType' => 'setContentType',
            'tableName' => 'setTableName',
            'dbType' => 'setDbType',
            'dataBaseName' => 'setDataBaseName',
            'clusterName' => 'setClusterName',
            'ioType' => 'setIoType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'workspaceName' => 'setWorkspaceName',
            'owner' => 'setOwner',
            'executeUser' => 'setExecuteUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableName  表名。
    * dbType  数据库类型，仅支持DLI，HIVE，SPARK。
    * dataBaseName  数据库名称。
    * clusterName  集群名称。
    * ioType  输入输出类型： - 0: 读表 - 1: 写表
    * offset  分页的起始页，取值范围大于等于0。默认值: 0。
    * limit  分页返回结果，指定每页最大记录数。默认值: 20。
    * workspaceName  工作空间名称。
    * owner  作业责任人。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'xProjectId' => 'getXProjectId',
            'contentType' => 'getContentType',
            'tableName' => 'getTableName',
            'dbType' => 'getDbType',
            'dataBaseName' => 'getDataBaseName',
            'clusterName' => 'getClusterName',
            'ioType' => 'getIoType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'workspaceName' => 'getWorkspaceName',
            'owner' => 'getOwner',
            'executeUser' => 'getExecuteUser'
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
    const IO_TYPE_0 = 0;
    const IO_TYPE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIoTypeAllowableValues()
    {
        return [
            self::IO_TYPE_0,
            self::IO_TYPE_1,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['dataBaseName'] = isset($data['dataBaseName']) ? $data['dataBaseName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['ioType'] = isset($data['ioType']) ? $data['ioType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['executeUser'] = isset($data['executeUser']) ? $data['executeUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) < 3)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
            $allowedValues = $this->getIoTypeAllowableValues();
                if (!is_null($this->container['ioType']) && !in_array($this->container['ioType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ioType', must be one of '%s'",
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets contentType
    *  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets tableName
    *  表名。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型，仅支持DLI，HIVE，SPARK。
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType 数据库类型，仅支持DLI，HIVE，SPARK。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets dataBaseName
    *  数据库名称。
    *
    * @return string|null
    */
    public function getDataBaseName()
    {
        return $this->container['dataBaseName'];
    }

    /**
    * Sets dataBaseName
    *
    * @param string|null $dataBaseName 数据库名称。
    *
    * @return $this
    */
    public function setDataBaseName($dataBaseName)
    {
        $this->container['dataBaseName'] = $dataBaseName;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets ioType
    *  输入输出类型： - 0: 读表 - 1: 写表
    *
    * @return int|null
    */
    public function getIoType()
    {
        return $this->container['ioType'];
    }

    /**
    * Sets ioType
    *
    * @param int|null $ioType 输入输出类型： - 0: 读表 - 1: 写表
    *
    * @return $this
    */
    public function setIoType($ioType)
    {
        $this->container['ioType'] = $ioType;
        return $this;
    }

    /**
    * Gets offset
    *  分页的起始页，取值范围大于等于0。默认值: 0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页的起始页，取值范围大于等于0。默认值: 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数。默认值: 20。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页返回结果，指定每页最大记录数。默认值: 20。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称。
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称。
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets owner
    *  作业责任人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 作业责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets executeUser
    *  作业执行用户。
    *
    * @return string|null
    */
    public function getExecuteUser()
    {
        return $this->container['executeUser'];
    }

    /**
    * Sets executeUser
    *
    * @param string|null $executeUser 作业执行用户。
    *
    * @return $this
    */
    public function setExecuteUser($executeUser)
    {
        $this->container['executeUser'] = $executeUser;
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

