<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrainingJobEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrainingJobEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * offset  数据条目偏移量。
    * limit  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    * order  instance order
    * startTime  开始时间，需要与结束时间一起传入。
    * endTime  结束时间，需要与开始时间一起传入。
    * xLanguage  语言。
    * level  指定返回的事件级别，取值范围[Info Error Warning]。
    * pattern  指定事件信息包含的内容，最长256个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trainingJobId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'order' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'xLanguage' => 'string',
            'level' => 'string',
            'pattern' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * offset  数据条目偏移量。
    * limit  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    * order  instance order
    * startTime  开始时间，需要与结束时间一起传入。
    * endTime  结束时间，需要与开始时间一起传入。
    * xLanguage  语言。
    * level  指定返回的事件级别，取值范围[Info Error Warning]。
    * pattern  指定事件信息包含的内容，最长256个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trainingJobId' => null,
        'offset' => null,
        'limit' => null,
        'order' => null,
        'startTime' => null,
        'endTime' => null,
        'xLanguage' => null,
        'level' => null,
        'pattern' => null
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
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * offset  数据条目偏移量。
    * limit  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    * order  instance order
    * startTime  开始时间，需要与结束时间一起传入。
    * endTime  结束时间，需要与开始时间一起传入。
    * xLanguage  语言。
    * level  指定返回的事件级别，取值范围[Info Error Warning]。
    * pattern  指定事件信息包含的内容，最长256个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trainingJobId' => 'training_job_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'order' => 'order',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'xLanguage' => 'X-Language',
            'level' => 'level',
            'pattern' => 'pattern'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * offset  数据条目偏移量。
    * limit  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    * order  instance order
    * startTime  开始时间，需要与结束时间一起传入。
    * endTime  结束时间，需要与开始时间一起传入。
    * xLanguage  语言。
    * level  指定返回的事件级别，取值范围[Info Error Warning]。
    * pattern  指定事件信息包含的内容，最长256个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'trainingJobId' => 'setTrainingJobId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'order' => 'setOrder',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'xLanguage' => 'setXLanguage',
            'level' => 'setLevel',
            'pattern' => 'setPattern'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trainingJobId  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    * offset  数据条目偏移量。
    * limit  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    * order  instance order
    * startTime  开始时间，需要与结束时间一起传入。
    * endTime  结束时间，需要与开始时间一起传入。
    * xLanguage  语言。
    * level  指定返回的事件级别，取值范围[Info Error Warning]。
    * pattern  指定事件信息包含的内容，最长256个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'trainingJobId' => 'getTrainingJobId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'order' => 'getOrder',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'xLanguage' => 'getXLanguage',
            'level' => 'getLevel',
            'pattern' => 'getPattern'
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
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
        ];
    }

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
        $this->container['trainingJobId'] = isset($data['trainingJobId']) ? $data['trainingJobId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trainingJobId'] === null) {
            $invalidProperties[] = "'trainingJobId' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets trainingJobId
    *  训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    *
    * @return string
    */
    public function getTrainingJobId()
    {
        return $this->container['trainingJobId'];
    }

    /**
    * Sets trainingJobId
    *
    * @param string $trainingJobId 训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。
    *
    * @return $this
    */
    public function setTrainingJobId($trainingJobId)
    {
        $this->container['trainingJobId'] = $trainingJobId;
        return $this;
    }

    /**
    * Gets offset
    *  数据条目偏移量。
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
    * @param int|null $offset 数据条目偏移量。
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
    *  指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
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
    * @param int|null $limit 指定每一页返回的最大条目数，取值范围[1,100]，默认为50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets order
    *  instance order
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order instance order
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，需要与结束时间一起传入。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间，需要与结束时间一起传入。
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
    *  结束时间，需要与开始时间一起传入。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间，需要与开始时间一起传入。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets xLanguage
    *  语言。
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
    * @param string|null $xLanguage 语言。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets level
    *  指定返回的事件级别，取值范围[Info Error Warning]。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 指定返回的事件级别，取值范围[Info Error Warning]。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets pattern
    *  指定事件信息包含的内容，最长256个字符。
    *
    * @return string|null
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string|null $pattern 指定事件信息包含的内容，最长256个字符。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
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

