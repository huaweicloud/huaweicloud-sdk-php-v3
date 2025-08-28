<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTopRiskInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTopRiskInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。
    * num  返回TOP风险实例数量。
    * xLanguage  请求语言类型。
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startAt' => 'int',
            'endAt' => 'int',
            'datastoreType' => 'string',
            'num' => 'int',
            'xLanguage' => 'string',
            'metricCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。
    * num  返回TOP风险实例数量。
    * xLanguage  请求语言类型。
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startAt' => 'int64',
        'endAt' => 'int64',
        'datastoreType' => null,
        'num' => null,
        'xLanguage' => null,
        'metricCode' => null
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
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。
    * num  返回TOP风险实例数量。
    * xLanguage  请求语言类型。
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'datastoreType' => 'datastore_type',
            'num' => 'num',
            'xLanguage' => 'X-Language',
            'metricCode' => 'metric_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。
    * num  返回TOP风险实例数量。
    * xLanguage  请求语言类型。
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $setters = [
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'datastoreType' => 'setDatastoreType',
            'num' => 'setNum',
            'xLanguage' => 'setXLanguage',
            'metricCode' => 'setMetricCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。
    * num  返回TOP风险实例数量。
    * xLanguage  请求语言类型。
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $getters = [
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'datastoreType' => 'getDatastoreType',
            'num' => 'getNum',
            'xLanguage' => 'getXLanguage',
            'metricCode' => 'getMetricCode'
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
    const NUM_10 = 10;
    const NUM_20 = 20;
    const NUM_30 = 30;
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNumAllowableValues()
    {
        return [
            self::NUM_10,
            self::NUM_20,
            self::NUM_30,
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
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
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
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['metricCode'] = isset($data['metricCode']) ? $data['metricCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            $allowedValues = $this->getNumAllowableValues();
                if (!is_null($this->container['num']) && !in_array($this->container['num'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'num', must be one of '%s'",
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
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型。
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
    * @param string $datastoreType 数据库类型。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets num
    *  返回TOP风险实例数量。
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num 返回TOP风险实例数量。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。
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
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets metricCode
    *  指标码
    *
    * @return string|null
    */
    public function getMetricCode()
    {
        return $this->container['metricCode'];
    }

    /**
    * Sets metricCode
    *
    * @param string|null $metricCode 指标码
    *
    * @return $this
    */
    public function setMetricCode($metricCode)
    {
        $this->container['metricCode'] = $metricCode;
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

