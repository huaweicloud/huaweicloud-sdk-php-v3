<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleActionQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleActionQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentPermissionSetId  父权限集id
    * clusterId  集群id
    * datasourceType  数据源类型, HIVE
    * databaseNames  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    * schemas  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    * tableNames  数据表列表
    * columnNames  数据字段列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentPermissionSetId' => 'string',
            'clusterId' => 'string',
            'datasourceType' => 'string',
            'databaseNames' => 'string[]',
            'schemas' => 'string[]',
            'tableNames' => 'string[]',
            'columnNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentPermissionSetId  父权限集id
    * clusterId  集群id
    * datasourceType  数据源类型, HIVE
    * databaseNames  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    * schemas  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    * tableNames  数据表列表
    * columnNames  数据字段列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentPermissionSetId' => null,
        'clusterId' => null,
        'datasourceType' => null,
        'databaseNames' => null,
        'schemas' => null,
        'tableNames' => null,
        'columnNames' => null
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
    * parentPermissionSetId  父权限集id
    * clusterId  集群id
    * datasourceType  数据源类型, HIVE
    * databaseNames  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    * schemas  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    * tableNames  数据表列表
    * columnNames  数据字段列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentPermissionSetId' => 'parent_permission_set_id',
            'clusterId' => 'cluster_id',
            'datasourceType' => 'datasource_type',
            'databaseNames' => 'database_names',
            'schemas' => 'schemas',
            'tableNames' => 'table_names',
            'columnNames' => 'column_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentPermissionSetId  父权限集id
    * clusterId  集群id
    * datasourceType  数据源类型, HIVE
    * databaseNames  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    * schemas  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    * tableNames  数据表列表
    * columnNames  数据字段列表
    *
    * @var string[]
    */
    protected static $setters = [
            'parentPermissionSetId' => 'setParentPermissionSetId',
            'clusterId' => 'setClusterId',
            'datasourceType' => 'setDatasourceType',
            'databaseNames' => 'setDatabaseNames',
            'schemas' => 'setSchemas',
            'tableNames' => 'setTableNames',
            'columnNames' => 'setColumnNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentPermissionSetId  父权限集id
    * clusterId  集群id
    * datasourceType  数据源类型, HIVE
    * databaseNames  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    * schemas  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    * tableNames  数据表列表
    * columnNames  数据字段列表
    *
    * @var string[]
    */
    protected static $getters = [
            'parentPermissionSetId' => 'getParentPermissionSetId',
            'clusterId' => 'getClusterId',
            'datasourceType' => 'getDatasourceType',
            'databaseNames' => 'getDatabaseNames',
            'schemas' => 'getSchemas',
            'tableNames' => 'getTableNames',
            'columnNames' => 'getColumnNames'
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
        $this->container['parentPermissionSetId'] = isset($data['parentPermissionSetId']) ? $data['parentPermissionSetId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['databaseNames'] = isset($data['databaseNames']) ? $data['databaseNames'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['tableNames'] = isset($data['tableNames']) ? $data['tableNames'] : null;
        $this->container['columnNames'] = isset($data['columnNames']) ? $data['columnNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parentPermissionSetId'] === null) {
            $invalidProperties[] = "'parentPermissionSetId' can't be null";
        }
            if ((mb_strlen($this->container['parentPermissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['parentPermissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['datasourceType'] === null) {
            $invalidProperties[] = "'datasourceType' can't be null";
        }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['databaseNames'] === null) {
            $invalidProperties[] = "'databaseNames' can't be null";
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
    * Gets parentPermissionSetId
    *  父权限集id
    *
    * @return string
    */
    public function getParentPermissionSetId()
    {
        return $this->container['parentPermissionSetId'];
    }

    /**
    * Sets parentPermissionSetId
    *
    * @param string $parentPermissionSetId 父权限集id
    *
    * @return $this
    */
    public function setParentPermissionSetId($parentPermissionSetId)
    {
        $this->container['parentPermissionSetId'] = $parentPermissionSetId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型, HIVE
    *
    * @return string
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string $datasourceType 数据源类型, HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets databaseNames
    *  目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    *
    * @return string[]
    */
    public function getDatabaseNames()
    {
        return $this->container['databaseNames'];
    }

    /**
    * Sets databaseNames
    *
    * @param string[] $databaseNames 目前批量授权只支持单库下的多表授权，或同一集群下个多库授权，区分这两类可通过 传参中tables是否为空来判断
    *
    * @return $this
    */
    public function setDatabaseNames($databaseNames)
    {
        $this->container['databaseNames'] = $databaseNames;
        return $this;
    }

    /**
    * Gets schemas
    *  dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    *
    * @return string[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[]|null $schemas dws权限涉及 schema，预留字段，在做DWS批量授权时应保持单schema下的批量授权，或者对单库下schema批量授权
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets tableNames
    *  数据表列表
    *
    * @return string[]|null
    */
    public function getTableNames()
    {
        return $this->container['tableNames'];
    }

    /**
    * Sets tableNames
    *
    * @param string[]|null $tableNames 数据表列表
    *
    * @return $this
    */
    public function setTableNames($tableNames)
    {
        $this->container['tableNames'] = $tableNames;
        return $this;
    }

    /**
    * Gets columnNames
    *  数据字段列表
    *
    * @return string[]|null
    */
    public function getColumnNames()
    {
        return $this->container['columnNames'];
    }

    /**
    * Sets columnNames
    *
    * @param string[]|null $columnNames 数据字段列表
    *
    * @return $this
    */
    public function setColumnNames($columnNames)
    {
        $this->container['columnNames'] = $columnNames;
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

