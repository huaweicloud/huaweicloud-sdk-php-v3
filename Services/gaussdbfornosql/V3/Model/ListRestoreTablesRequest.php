<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRestoreTablesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRestoreTablesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    * databaseName  数据库名。
    * offset  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
    * limit  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'databaseName' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    * databaseName  数据库名。
    * offset  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
    * limit  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'databaseName' => null,
        'offset' => null,
        'limit' => null
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
    * instanceId  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    * databaseName  数据库名。
    * offset  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
    * limit  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'databaseName' => 'database_name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    * databaseName  数据库名。
    * offset  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
    * limit  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'databaseName' => 'setDatabaseName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    * databaseName  数据库名。
    * offset  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
    * limit  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'databaseName' => 'getDatabaseName',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
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
    *  实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
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
    * @param string $instanceId 实例ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名。
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
    * @param string $databaseName 数据库名。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
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
    * @param int|null $offset 索引位置偏移量。   - 索引位置偏移量，表示从指定project ID下最新的专属资源创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的专属资源信息。   - 取值大于或等于0。   - 不传该参数时，查询偏移量默认为0，表示从最新的创建时间对应的专属资源开始查询。
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
    *  查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
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
    * @param int|null $limit 查询专属资源个数上限值。   - 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
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

