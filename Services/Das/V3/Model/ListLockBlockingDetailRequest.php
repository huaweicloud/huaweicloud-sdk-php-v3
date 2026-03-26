<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLockBlockingDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLockBlockingDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startTime  开始时间戳（Unix timestamp），单位：毫秒。
    * endTime  结束时间戳（Unix timestamp），单位：毫秒。
    * perPage  每页返回的数量，默认值为20
    * curPage  当前页码，第一次查询的时候默认值为1
    * dbName  数据库名。
    * xLanguage  请求语言类型。en-us：英文。 zh-cn：中文。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'perPage' => 'int',
            'curPage' => 'int',
            'dbName' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startTime  开始时间戳（Unix timestamp），单位：毫秒。
    * endTime  结束时间戳（Unix timestamp），单位：毫秒。
    * perPage  每页返回的数量，默认值为20
    * curPage  当前页码，第一次查询的时候默认值为1
    * dbName  数据库名。
    * xLanguage  请求语言类型。en-us：英文。 zh-cn：中文。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'perPage' => 'int32',
        'curPage' => 'int32',
        'dbName' => null,
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
    * instanceId  实例ID。
    * startTime  开始时间戳（Unix timestamp），单位：毫秒。
    * endTime  结束时间戳（Unix timestamp），单位：毫秒。
    * perPage  每页返回的数量，默认值为20
    * curPage  当前页码，第一次查询的时候默认值为1
    * dbName  数据库名。
    * xLanguage  请求语言类型。en-us：英文。 zh-cn：中文。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'perPage' => 'per_page',
            'curPage' => 'cur_page',
            'dbName' => 'db_name',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * startTime  开始时间戳（Unix timestamp），单位：毫秒。
    * endTime  结束时间戳（Unix timestamp），单位：毫秒。
    * perPage  每页返回的数量，默认值为20
    * curPage  当前页码，第一次查询的时候默认值为1
    * dbName  数据库名。
    * xLanguage  请求语言类型。en-us：英文。 zh-cn：中文。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'perPage' => 'setPerPage',
            'curPage' => 'setCurPage',
            'dbName' => 'setDbName',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * startTime  开始时间戳（Unix timestamp），单位：毫秒。
    * endTime  结束时间戳（Unix timestamp），单位：毫秒。
    * perPage  每页返回的数量，默认值为20
    * curPage  当前页码，第一次查询的时候默认值为1
    * dbName  数据库名。
    * xLanguage  请求语言类型。en-us：英文。 zh-cn：中文。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'perPage' => 'getPerPage',
            'curPage' => 'getCurPage',
            'dbName' => 'getDbName',
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
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
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'perPage', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] < 0)) {
                $invalidProperties[] = "invalid value for 'perPage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['curPage']) && ($this->container['curPage'] > 50)) {
                $invalidProperties[] = "invalid value for 'curPage', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['curPage']) && ($this->container['curPage'] < 1)) {
                $invalidProperties[] = "invalid value for 'curPage', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbName']) && (mb_strlen($this->container['dbName']) > 63)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['dbName']) && (mb_strlen($this->container['dbName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
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
    *  实例ID。
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
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间戳（Unix timestamp），单位：毫秒。
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
    * @param int $startTime 开始时间戳（Unix timestamp），单位：毫秒。
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
    *  结束时间戳（Unix timestamp），单位：毫秒。
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
    * @param int $endTime 结束时间戳（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets perPage
    *  每页返回的数量，默认值为20
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 每页返回的数量，默认值为20
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets curPage
    *  当前页码，第一次查询的时候默认值为1
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 当前页码，第一次查询的时候默认值为1
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。en-us：英文。 zh-cn：中文。
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
    * @param string|null $xLanguage 请求语言类型。en-us：英文。 zh-cn：中文。
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

