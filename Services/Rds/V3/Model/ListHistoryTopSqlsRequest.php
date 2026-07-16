<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHistoryTopSqlsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHistoryTopSqlsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * userName  用户名
    * databaseName  数据库名
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
    * limit  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    * xLanguage  语言。默认en-us。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'userName' => 'string',
            'databaseName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * userName  用户名
    * databaseName  数据库名
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
    * limit  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    * xLanguage  语言。默认en-us。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'userName' => null,
        'databaseName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'offset' => 'int32',
        'limit' => 'int32',
        'xLanguage' => null
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
    * userName  用户名
    * databaseName  数据库名
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
    * limit  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    * xLanguage  语言。默认en-us。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'userName' => 'user_name',
            'databaseName' => 'database_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * userName  用户名
    * databaseName  数据库名
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
    * limit  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    * xLanguage  语言。默认en-us。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'userName' => 'setUserName',
            'databaseName' => 'setDatabaseName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * userName  用户名
    * databaseName  数据库名
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    * offset  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
    * limit  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    * xLanguage  语言。默认en-us。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'userName' => 'getUserName',
            'databaseName' => 'getDatabaseName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'xLanguage' => 'getXLanguage'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
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
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets databaseName
    *  数据库名
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
    * @param string|null $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets startTime
    *  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。 默认取值： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
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
    * @param int|null $offset 参数解释： 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，值为0表示从第一条数据开始查询）。 约束限制： 必须为数字，不能为负数。 取值范围： 大于等于0的整数。 默认取值： 0
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
    *  参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
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
    * @param int|null $limit 参数解释： 查询记录数。 约束限制： 不涉及。 取值范围： [1, 1000] 默认取值： 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets xLanguage
    *  语言。默认en-us。
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
    * @param string|null $xLanguage 语言。默认en-us。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

