<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchStatisticUserInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchStatisticUserInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * timeUnit  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    * startTime  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * endTime  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * category  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'timeUnit' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * timeUnit  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    * startTime  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * endTime  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * category  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'timeUnit' => null,
        'startTime' => null,
        'endTime' => null,
        'category' => null
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
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * timeUnit  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    * startTime  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * endTime  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * category  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'timeUnit' => 'timeUnit',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * timeUnit  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    * startTime  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * endTime  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * category  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'timeUnit' => 'setTimeUnit',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
    * limit  查询的条目数量。 * 取值：1-500，默认值为20
    * timeUnit  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    * startTime  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * endTime  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    * category  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'timeUnit' => 'getTimeUnit',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'category' => 'getCategory'
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
    const TIME_UNIT_D = 'D';
    const TIME_UNIT_M = 'M';
    const CATEGORY_USER_LOGIN_INFO = 'user_login_info';
    const CATEGORY_USER_ACTIVATE_INFO = 'user_activate_info';
    const CATEGORY_USER_LOGIN_DEVICE_INFO = 'user_login_device_info';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTimeUnitAllowableValues()
    {
        return [
            self::TIME_UNIT_D,
            self::TIME_UNIT_M,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_USER_LOGIN_INFO,
            self::CATEGORY_USER_ACTIVATE_INFO,
            self::CATEGORY_USER_LOGIN_DEVICE_INFO,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 20;
        $this->container['timeUnit'] = isset($data['timeUnit']) ? $data['timeUnit'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeUnit'] === null) {
            $invalidProperties[] = "'timeUnit' can't be null";
        }
            $allowedValues = $this->getTimeUnitAllowableValues();
                if (!is_null($this->container['timeUnit']) && !in_array($this->container['timeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'timeUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}(-\\d{2}){0,1}/", $this->container['startTime'])) {
                $invalidProperties[] = "invalid value for 'startTime', must be conform to the pattern /\\d{4}-\\d{2}(-\\d{2}){0,1}/.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}(-\\d{2}){0,1}/", $this->container['endTime'])) {
                $invalidProperties[] = "invalid value for 'endTime', must be conform to the pattern /\\d{4}-\\d{2}(-\\d{2}){0,1}/.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    * Gets offset
    *  查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
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
    * @param int|null $offset 查询偏移量。 * 取值：大于等于0，默认值为0 * 大于等于最大条目数量，则返回最后一页数据，页数根据总条目数和limit计算得出
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
    *  查询的条目数量。 * 取值：1-500，默认值为20
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
    * @param int|null $limit 查询的条目数量。 * 取值：1-500，默认值为20
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets timeUnit
    *  查询时间维度，取值： * D: 按日查询 * M: 按月查询
    *
    * @return string
    */
    public function getTimeUnit()
    {
        return $this->container['timeUnit'];
    }

    /**
    * Sets timeUnit
    *
    * @param string $timeUnit 查询时间维度，取值： * D: 按日查询 * M: 按月查询
    *
    * @return $this
    */
    public function setTimeUnit($timeUnit)
    {
        $this->container['timeUnit'] = $timeUnit;
        return $this;
    }

    /**
    * Gets startTime
    *  查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 查询时间范围的开始时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
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
    *  查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 查询时间范围的结束时间，格式根据timeUnit的取值而定。 * timeUnit = D，格式：yyyy-MM-dd，此情况下startTime与endTime间隔最多31日 * timeUnit = M，格式：yyyy-MM，此情况下startTime与endTime间隔最多12个月
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets category
    *  查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 查询分类，取值： * user_login_info: 用户登录数据 * user_activate_info: 用户激活数据 * user_login_device_info: 用户登录设备数据
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

