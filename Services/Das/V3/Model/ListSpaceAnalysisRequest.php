<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSpaceAnalysisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSpaceAnalysisRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * xLanguage  语言
    * objectType  对象类型
    * databaseId  数据库ID
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * showInstanceInfo  是否返回实例级别数据，取值：true或者false
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'xLanguage' => 'string',
            'objectType' => 'string',
            'databaseId' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'showInstanceInfo' => 'string',
            'datastoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * xLanguage  语言
    * objectType  对象类型
    * databaseId  数据库ID
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * showInstanceInfo  是否返回实例级别数据，取值：true或者false
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'xLanguage' => null,
        'objectType' => null,
        'databaseId' => null,
        'offset' => null,
        'limit' => null,
        'showInstanceInfo' => null,
        'datastoreType' => null
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
    * instanceId  实例ID
    * xLanguage  语言
    * objectType  对象类型
    * databaseId  数据库ID
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * showInstanceInfo  是否返回实例级别数据，取值：true或者false
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'xLanguage' => 'X-Language',
            'objectType' => 'object_type',
            'databaseId' => 'database_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'showInstanceInfo' => 'show_instance_info',
            'datastoreType' => 'datastore_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * xLanguage  语言
    * objectType  对象类型
    * databaseId  数据库ID
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * showInstanceInfo  是否返回实例级别数据，取值：true或者false
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'xLanguage' => 'setXLanguage',
            'objectType' => 'setObjectType',
            'databaseId' => 'setDatabaseId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'showInstanceInfo' => 'setShowInstanceInfo',
            'datastoreType' => 'setDatastoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * xLanguage  语言
    * objectType  对象类型
    * databaseId  数据库ID
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * showInstanceInfo  是否返回实例级别数据，取值：true或者false
    * datastoreType  引擎类型
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'xLanguage' => 'getXLanguage',
            'objectType' => 'getObjectType',
            'databaseId' => 'getDatabaseId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'showInstanceInfo' => 'getShowInstanceInfo',
            'datastoreType' => 'getDatastoreType'
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
    const OBJECT_TYPE_DATABASE = 'database';
    const OBJECT_TYPE_TABLE = 'table';
    const DATASTORE_TYPE_MY_SQL = 'MySQL';
    const DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL = 'GaussDB(for MySQL)';
    const DATASTORE_TYPE_SQL_SERVER = 'SQLServer';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_DATABASE,
            self::OBJECT_TYPE_TABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatastoreTypeAllowableValues()
    {
        return [
            self::DATASTORE_TYPE_MY_SQL,
            self::DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL,
            self::DATASTORE_TYPE_SQL_SERVER,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['databaseId'] = isset($data['databaseId']) ? $data['databaseId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['showInstanceInfo'] = isset($data['showInstanceInfo']) ? $data['showInstanceInfo'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            $allowedValues = $this->getDatastoreTypeAllowableValues();
                if (!is_null($this->container['datastoreType']) && !in_array($this->container['datastoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datastoreType', must be one of '%s'",
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
    * Gets instanceId
    *  实例ID
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
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  语言
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
    * @param string|null $xLanguage 语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets objectType
    *  对象类型
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType 对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets databaseId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDatabaseId()
    {
        return $this->container['databaseId'];
    }

    /**
    * Sets databaseId
    *
    * @param string|null $databaseId 数据库ID
    *
    * @return $this
    */
    public function setDatabaseId($databaseId)
    {
        $this->container['databaseId'] = $databaseId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。offset必须是limit的整数倍。
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
    *  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets showInstanceInfo
    *  是否返回实例级别数据，取值：true或者false
    *
    * @return string|null
    */
    public function getShowInstanceInfo()
    {
        return $this->container['showInstanceInfo'];
    }

    /**
    * Sets showInstanceInfo
    *
    * @param string|null $showInstanceInfo 是否返回实例级别数据，取值：true或者false
    *
    * @return $this
    */
    public function setShowInstanceInfo($showInstanceInfo)
    {
        $this->container['showInstanceInfo'] = $showInstanceInfo;
        return $this;
    }

    /**
    * Gets datastoreType
    *  引擎类型
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 引擎类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
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

