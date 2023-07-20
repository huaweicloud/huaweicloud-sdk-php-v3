<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListElasticResourcePoolScaleRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListElasticResourcePoolScaleRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称
    * startTime  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    * endTime  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    * status  弹性资源池扩缩容的状态
    * offset  偏移量
    * limit  当前分页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elasticResourcePoolName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'status' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称
    * startTime  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    * endTime  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    * status  弹性资源池扩缩容的状态
    * offset  偏移量
    * limit  当前分页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elasticResourcePoolName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'status' => null,
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
    * elasticResourcePoolName  弹性资源池名称
    * startTime  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    * endTime  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    * status  弹性资源池扩缩容的状态
    * offset  偏移量
    * limit  当前分页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elasticResourcePoolName  弹性资源池名称
    * startTime  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    * endTime  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    * status  弹性资源池扩缩容的状态
    * offset  偏移量
    * limit  当前分页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elasticResourcePoolName  弹性资源池名称
    * startTime  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    * endTime  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    * status  弹性资源池扩缩容的状态
    * offset  偏移量
    * limit  当前分页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
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
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
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
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['elasticResourcePoolName'] === null) {
            $invalidProperties[] = "'elasticResourcePoolName' can't be null";
        }
            if ((mb_strlen($this->container['elasticResourcePoolName']) > 128)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['elasticResourcePoolName']) < 1)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!_)(?![0-9]+$)[a-z0-9_]*$/", $this->container['elasticResourcePoolName'])) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', must be conform to the pattern /^(?!_)(?![0-9]+$)[a-z0-9_]*$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 20)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets elasticResourcePoolName
    *  弹性资源池名称
    *
    * @return string
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string $elasticResourcePoolName 弹性资源池名称
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets startTime
    *  start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime start_time用于查询扩缩容历史的开始时间，该时间点需大于当前时间点减30天，必须小于end_time 。时间格式为unix时间戳，单位：毫秒。 ①若start_time为空，则查询end_time前七天到end_time的数据（end_time最大不能大于当前时间30天）。 ②查询当前时间点前15天到当前时间点的数据（start_time和end_time同时为空）。
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
    *  end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime end_time用于查询扩缩容历史的结束时间，该时间点不能小于开始时间，不能大于当前时间。时间格式为unix时间戳，单位：毫秒。 ①若end_time为空，则查询start_time到当前时间点的数据。 ②查询当前时间点前15天到当前时间的数据（start_time和end_time同时为空）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  弹性资源池扩缩容的状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 弹性资源池扩缩容的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
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
    * @param int|null $offset 偏移量
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
    *  当前分页条数
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
    * @param int|null $limit 当前分页条数
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

