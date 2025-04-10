<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityMemberPermissionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityMemberPermissionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  用户名
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * accountType  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * workspace  DataArts Studio工作空间ID
    * orderBy  排序参数,EXPIRE_TIME
    * orderByAsc  升序/降序。true升序，fasle降序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'datasourceType' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'accountType' => 'string',
            'expireStatus' => 'string',
            'workspace' => 'string',
            'orderBy' => 'string',
            'orderByAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  用户名
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * accountType  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * workspace  DataArts Studio工作空间ID
    * orderBy  排序参数,EXPIRE_TIME
    * orderByAsc  升序/降序。true升序，fasle降序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'limit' => null,
        'offset' => null,
        'datasourceType' => null,
        'databaseName' => null,
        'tableName' => null,
        'accountType' => null,
        'expireStatus' => null,
        'workspace' => null,
        'orderBy' => null,
        'orderByAsc' => null
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
    * userName  用户名
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * accountType  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * workspace  DataArts Studio工作空间ID
    * orderBy  排序参数,EXPIRE_TIME
    * orderByAsc  升序/降序。true升序，fasle降序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'datasourceType' => 'datasource_type',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'accountType' => 'account_type',
            'expireStatus' => 'expire_status',
            'workspace' => 'workspace',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  用户名
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * accountType  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * workspace  DataArts Studio工作空间ID
    * orderBy  排序参数,EXPIRE_TIME
    * orderByAsc  升序/降序。true升序，fasle降序
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'datasourceType' => 'setDatasourceType',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'accountType' => 'setAccountType',
            'expireStatus' => 'setExpireStatus',
            'workspace' => 'setWorkspace',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  用户名
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * accountType  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * workspace  DataArts Studio工作空间ID
    * orderBy  排序参数,EXPIRE_TIME
    * orderByAsc  升序/降序。true升序，fasle降序
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'datasourceType' => 'getDatasourceType',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'accountType' => 'getAccountType',
            'expireStatus' => 'getExpireStatus',
            'workspace' => 'getWorkspace',
            'orderBy' => 'getOrderBy',
            'orderByAsc' => 'getOrderByAsc'
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
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const ACCOUNT_TYPE_SELF_ACCOUNT = 'SELF_ACCOUNT';
    const ACCOUNT_TYPE_WORKSPACE_ACCOUNT = 'WORKSPACE_ACCOUNT';
    const EXPIRE_STATUS_REVOKE_FAILED = 'REVOKE_FAILED';
    const EXPIRE_STATUS_TO_BE_REVOKE = 'TO_BE_REVOKE';
    const EXPIRE_STATUS_INACTIVE = 'INACTIVE';
    const EXPIRE_STATUS_PERMANENTLY_ACTIVE = 'PERMANENTLY_ACTIVE';
    const EXPIRE_STATUS_ACTIVE = 'ACTIVE';
    const EXPIRE_STATUS_EXPIRE_SOON = 'EXPIRE_SOON';
    const ORDER_BY_EXPIRE_TIME = 'EXPIRE_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_SELF_ACCOUNT,
            self::ACCOUNT_TYPE_WORKSPACE_ACCOUNT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExpireStatusAllowableValues()
    {
        return [
            self::EXPIRE_STATUS_REVOKE_FAILED,
            self::EXPIRE_STATUS_TO_BE_REVOKE,
            self::EXPIRE_STATUS_INACTIVE,
            self::EXPIRE_STATUS_PERMANENTLY_ACTIVE,
            self::EXPIRE_STATUS_ACTIVE,
            self::EXPIRE_STATUS_EXPIRE_SOON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_EXPIRE_TIME,
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['expireStatus'] = isset($data['expireStatus']) ? $data['expireStatus'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 32)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 256)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAccountTypeAllowableValues();
                if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) > 256)) {
                $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getExpireStatusAllowableValues();
                if (!is_null($this->container['expireStatus']) && !in_array($this->container['expireStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'expireStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
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
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,HIVE
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型,HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets accountType
    *  权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    *
    * @return string|null
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string|null $accountType 权限账号类型 * SELF_ACCOUNT 个人账号权限 * WORKSPACE_ACCOUNT 空间调度账号权限
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
        return $this;
    }

    /**
    * Gets expireStatus
    *  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    *
    * @return string|null
    */
    public function getExpireStatus()
    {
        return $this->container['expireStatus'];
    }

    /**
    * Sets expireStatus
    *
    * @param string|null $expireStatus 权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    *
    * @return $this
    */
    public function setExpireStatus($expireStatus)
    {
        $this->container['expireStatus'] = $expireStatus;
        return $this;
    }

    /**
    * Gets workspace
    *  DataArts Studio工作空间ID
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
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序参数,EXPIRE_TIME
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序参数,EXPIRE_TIME
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  升序/降序。true升序，fasle降序
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 升序/降序。true升序，fasle降序
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
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

