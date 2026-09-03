<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDbsConnectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDbsConnectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    * instanceId  实例ID，实例的唯一标识
    * networkType  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    * username  用户名
    * isSavePassword  是否保存密码
    * password  密码
    * nodeIds  节点ID列表，实例节点的唯一标识
    * remarks  备注
    * port  端口，取值范围：[1,65536]
    * databaseName  数据库名字
    * sqlRecordFlag  SQL记录开关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'instanceId' => 'string',
            'networkType' => 'string',
            'username' => 'string',
            'isSavePassword' => 'bool',
            'password' => 'string',
            'nodeIds' => 'string[]',
            'remarks' => 'string',
            'port' => 'int',
            'databaseName' => 'string',
            'sqlRecordFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    * instanceId  实例ID，实例的唯一标识
    * networkType  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    * username  用户名
    * isSavePassword  是否保存密码
    * password  密码
    * nodeIds  节点ID列表，实例节点的唯一标识
    * remarks  备注
    * port  端口，取值范围：[1,65536]
    * databaseName  数据库名字
    * sqlRecordFlag  SQL记录开关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'instanceId' => null,
        'networkType' => null,
        'username' => null,
        'isSavePassword' => null,
        'password' => null,
        'nodeIds' => null,
        'remarks' => null,
        'port' => 'int32',
        'databaseName' => null,
        'sqlRecordFlag' => null
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
    * engineType  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    * instanceId  实例ID，实例的唯一标识
    * networkType  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    * username  用户名
    * isSavePassword  是否保存密码
    * password  密码
    * nodeIds  节点ID列表，实例节点的唯一标识
    * remarks  备注
    * port  端口，取值范围：[1,65536]
    * databaseName  数据库名字
    * sqlRecordFlag  SQL记录开关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'instanceId' => 'instance_id',
            'networkType' => 'network_type',
            'username' => 'username',
            'isSavePassword' => 'is_save_password',
            'password' => 'password',
            'nodeIds' => 'node_ids',
            'remarks' => 'remarks',
            'port' => 'port',
            'databaseName' => 'database_name',
            'sqlRecordFlag' => 'sql_record_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    * instanceId  实例ID，实例的唯一标识
    * networkType  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    * username  用户名
    * isSavePassword  是否保存密码
    * password  密码
    * nodeIds  节点ID列表，实例节点的唯一标识
    * remarks  备注
    * port  端口，取值范围：[1,65536]
    * databaseName  数据库名字
    * sqlRecordFlag  SQL记录开关
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'instanceId' => 'setInstanceId',
            'networkType' => 'setNetworkType',
            'username' => 'setUsername',
            'isSavePassword' => 'setIsSavePassword',
            'password' => 'setPassword',
            'nodeIds' => 'setNodeIds',
            'remarks' => 'setRemarks',
            'port' => 'setPort',
            'databaseName' => 'setDatabaseName',
            'sqlRecordFlag' => 'setSqlRecordFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    * instanceId  实例ID，实例的唯一标识
    * networkType  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    * username  用户名
    * isSavePassword  是否保存密码
    * password  密码
    * nodeIds  节点ID列表，实例节点的唯一标识
    * remarks  备注
    * port  端口，取值范围：[1,65536]
    * databaseName  数据库名字
    * sqlRecordFlag  SQL记录开关
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'instanceId' => 'getInstanceId',
            'networkType' => 'getNetworkType',
            'username' => 'getUsername',
            'isSavePassword' => 'getIsSavePassword',
            'password' => 'getPassword',
            'nodeIds' => 'getNodeIds',
            'remarks' => 'getRemarks',
            'port' => 'getPort',
            'databaseName' => 'getDatabaseName',
            'sqlRecordFlag' => 'getSqlRecordFlag'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['isSavePassword'] = isset($data['isSavePassword']) ? $data['isSavePassword'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['sqlRecordFlag'] = isset($data['sqlRecordFlag']) ? $data['sqlRecordFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['networkType'] === null) {
            $invalidProperties[] = "'networkType' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['isSavePassword'] === null) {
            $invalidProperties[] = "'isSavePassword' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
    * Gets engineType
    *  数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型，取值范围：mysql, sqlserver, postgresql, taurus, gaussdbv5, mongodb, ddm
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，实例的唯一标识
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，实例的唯一标识
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets networkType
    *  数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    *
    * @return string
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string $networkType 数据库来源类型，取值范围：rds, gaussdb, dds, ddm
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets username
    *  用户名
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username 用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets isSavePassword
    *  是否保存密码
    *
    * @return bool
    */
    public function getIsSavePassword()
    {
        return $this->container['isSavePassword'];
    }

    /**
    * Sets isSavePassword
    *
    * @param bool $isSavePassword 是否保存密码
    *
    * @return $this
    */
    public function setIsSavePassword($isSavePassword)
    {
        $this->container['isSavePassword'] = $isSavePassword;
        return $this;
    }

    /**
    * Gets password
    *  密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets nodeIds
    *  节点ID列表，实例节点的唯一标识
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds 节点ID列表，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets port
    *  端口，取值范围：[1,65536]
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口，取值范围：[1,65536]
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名字
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
    * @param string|null $databaseName 数据库名字
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets sqlRecordFlag
    *  SQL记录开关
    *
    * @return bool|null
    */
    public function getSqlRecordFlag()
    {
        return $this->container['sqlRecordFlag'];
    }

    /**
    * Sets sqlRecordFlag
    *
    * @param bool|null $sqlRecordFlag SQL记录开关
    *
    * @return $this
    */
    public function setSqlRecordFlag($sqlRecordFlag)
    {
        $this->container['sqlRecordFlag'] = $sqlRecordFlag;
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

