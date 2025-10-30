<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSmallVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSmallVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    * version  数据库版本号。（可输入小版本号）
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
    * limit  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'version' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    * version  数据库版本号。（可输入小版本号）
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
    * limit  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'version' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * databaseName  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    * version  数据库版本号。（可输入小版本号）
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
    * limit  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'version' => 'version',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    * version  数据库版本号。（可输入小版本号）
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
    * limit  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'version' => 'setVersion',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    * version  数据库版本号。（可输入小版本号）
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
    * limit  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'version' => 'getVersion',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets databaseName
    *  数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库引擎名。 取值范围： 支持的引擎如下，不区分大小写： PostgreSQL
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets version
    *  数据库版本号。（可输入小版本号）
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库版本号。（可输入小版本号）
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets offset
    *  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
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
    * @param int|null $offset 参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 约束限制：必须为数字，不能为负数。 取值范围：大于等于0的整数。 默认取值：0
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
    *  参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
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
    * @param int|null $limit 参数解释： 查询记录数。 约束限制：不涉及。 取值范围：默认为100，不能为负数，最小值为1，最大值为100。 默认取值：100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

