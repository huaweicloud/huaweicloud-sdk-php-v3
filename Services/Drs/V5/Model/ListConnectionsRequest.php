<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * connectionId  连接ID。
    * dbType  连接类型。 - mysql - oracle - postgresql - mongodb
    * name  连接名称，忽略大小写。
    * instId  云上数据库实例ID。
    * ip  连接IP。
    * description  连接描述。
    * createTime  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    * enterpriseProjectId  企业项目ID。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制，默认值为10。
    * fetchAll  值为“true”时会使得offset和limit参数失效并返回所有记录。
    * sortKey  返回结果按该关键字排序，默认为“created_at”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'connectionId' => 'string',
            'dbType' => 'string',
            'name' => 'string',
            'instId' => 'string',
            'ip' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'fetchAll' => 'bool',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * connectionId  连接ID。
    * dbType  连接类型。 - mysql - oracle - postgresql - mongodb
    * name  连接名称，忽略大小写。
    * instId  云上数据库实例ID。
    * ip  连接IP。
    * description  连接描述。
    * createTime  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    * enterpriseProjectId  企业项目ID。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制，默认值为10。
    * fetchAll  值为“true”时会使得offset和limit参数失效并返回所有记录。
    * sortKey  返回结果按该关键字排序，默认为“created_at”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'connectionId' => null,
        'dbType' => null,
        'name' => null,
        'instId' => null,
        'ip' => null,
        'description' => null,
        'createTime' => null,
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'fetchAll' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * xLanguage  请求语言类型。
    * connectionId  连接ID。
    * dbType  连接类型。 - mysql - oracle - postgresql - mongodb
    * name  连接名称，忽略大小写。
    * instId  云上数据库实例ID。
    * ip  连接IP。
    * description  连接描述。
    * createTime  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    * enterpriseProjectId  企业项目ID。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制，默认值为10。
    * fetchAll  值为“true”时会使得offset和limit参数失效并返回所有记录。
    * sortKey  返回结果按该关键字排序，默认为“created_at”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'connectionId' => 'connection_id',
            'dbType' => 'db_type',
            'name' => 'name',
            'instId' => 'inst_id',
            'ip' => 'ip',
            'description' => 'description',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'fetchAll' => 'fetch_all',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * connectionId  连接ID。
    * dbType  连接类型。 - mysql - oracle - postgresql - mongodb
    * name  连接名称，忽略大小写。
    * instId  云上数据库实例ID。
    * ip  连接IP。
    * description  连接描述。
    * createTime  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    * enterpriseProjectId  企业项目ID。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制，默认值为10。
    * fetchAll  值为“true”时会使得offset和limit参数失效并返回所有记录。
    * sortKey  返回结果按该关键字排序，默认为“created_at”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'connectionId' => 'setConnectionId',
            'dbType' => 'setDbType',
            'name' => 'setName',
            'instId' => 'setInstId',
            'ip' => 'setIp',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'fetchAll' => 'setFetchAll',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * connectionId  连接ID。
    * dbType  连接类型。 - mysql - oracle - postgresql - mongodb
    * name  连接名称，忽略大小写。
    * instId  云上数据库实例ID。
    * ip  连接IP。
    * description  连接描述。
    * createTime  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    * enterpriseProjectId  企业项目ID。
    * offset  偏移量，默认值为0，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制，默认值为10。
    * fetchAll  值为“true”时会使得offset和limit参数失效并返回所有记录。
    * sortKey  返回结果按该关键字排序，默认为“created_at”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'connectionId' => 'getConnectionId',
            'dbType' => 'getDbType',
            'name' => 'getName',
            'instId' => 'getInstId',
            'ip' => 'getIp',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'fetchAll' => 'getFetchAll',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const DB_TYPE_MYSQL = 'mysql';
    const DB_TYPE_ORACLE = 'oracle';
    const DB_TYPE_POSTGRESQL = 'postgresql';
    const DB_TYPE_MONGODB = 'mongodb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_MYSQL,
            self::DB_TYPE_ORACLE,
            self::DB_TYPE_POSTGRESQL,
            self::DB_TYPE_MONGODB,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instId'] = isset($data['instId']) ? $data['instId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['fetchAll'] = isset($data['fetchAll']) ? $data['fetchAll'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 64)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instId']) && (mb_strlen($this->container['instId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instId']) && (mb_strlen($this->container['instId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 512)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] <= 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than 65535.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] <= 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than 1.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
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
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets connectionId
    *  连接ID。
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 连接ID。
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets dbType
    *  连接类型。 - mysql - oracle - postgresql - mongodb
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 连接类型。 - mysql - oracle - postgresql - mongodb
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets name
    *  连接名称，忽略大小写。
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
    * @param string|null $name 连接名称，忽略大小写。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instId
    *  云上数据库实例ID。
    *
    * @return string|null
    */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
    * Sets instId
    *
    * @param string|null $instId 云上数据库实例ID。
    *
    * @return $this
    */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;
        return $this;
    }

    /**
    * Gets ip
    *  连接IP。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 连接IP。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets description
    *  连接描述。
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
    * @param string|null $description 连接描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
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
    * @param string|null $createTime 时间区间用“，”分割。示例：2024-05-17T07:46:00.414Z,2024-05-20T07:46:00.999Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，默认值为0，表示查询该偏移量后面的记录。
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
    * @param int|null $offset 偏移量，默认值为0，表示查询该偏移量后面的记录。
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
    *  查询返回记录的数量限制，默认值为10。
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
    * @param int|null $limit 查询返回记录的数量限制，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets fetchAll
    *  值为“true”时会使得offset和limit参数失效并返回所有记录。
    *
    * @return bool|null
    */
    public function getFetchAll()
    {
        return $this->container['fetchAll'];
    }

    /**
    * Sets fetchAll
    *
    * @param bool|null $fetchAll 值为“true”时会使得offset和limit参数失效并返回所有记录。
    *
    * @return $this
    */
    public function setFetchAll($fetchAll)
    {
        $this->container['fetchAll'] = $fetchAll;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，默认为“created_at”。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，默认为“created_at”。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

