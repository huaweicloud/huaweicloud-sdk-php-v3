<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWafQpsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWafQpsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domains  不传时代表全部域名
    * valueType  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * recent  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    * overseasType  实例类型，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domains' => 'string',
            'valueType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'recent' => 'string',
            'overseasType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domains  不传时代表全部域名
    * valueType  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * recent  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    * overseasType  实例类型，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domains' => null,
        'valueType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'recent' => null,
        'overseasType' => 'int32'
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
    * domains  不传时代表全部域名
    * valueType  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * recent  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    * overseasType  实例类型，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domains' => 'domains',
            'valueType' => 'value_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'recent' => 'recent',
            'overseasType' => 'overseas_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domains  不传时代表全部域名
    * valueType  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * recent  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    * overseasType  实例类型，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $setters = [
            'domains' => 'setDomains',
            'valueType' => 'setValueType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'recent' => 'setRecent',
            'overseasType' => 'setOverseasType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domains  不传时代表全部域名
    * valueType  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * recent  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    * overseasType  实例类型，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $getters = [
            'domains' => 'getDomains',
            'valueType' => 'getValueType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'recent' => 'getRecent',
            'overseasType' => 'getOverseasType'
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
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['recent'] = isset($data['recent']) ? $data['recent'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['valueType'] === null) {
            $invalidProperties[] = "'valueType' can't be null";
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
    * Gets domains
    *  不传时代表全部域名
    *
    * @return string|null
    */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
    * Sets domains
    *
    * @param string|null $domains 不传时代表全部域名
    *
    * @return $this
    */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;
        return $this;
    }

    /**
    * Gets valueType
    *  用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    *
    * @return string
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string $valueType 用于 QPS、带宽: 平均值 mean、峰值 peak;用于 响应状态码: 源站返回值 source 、高防返回值 proxy
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（毫秒时间戳）
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
    * @param string|null $startTime 开始时间（毫秒时间戳）
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
    *  结束时间（毫秒时间戳）
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
    * @param string|null $endTime 结束时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets recent
    *  枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    *
    * @return string|null
    */
    public function getRecent()
    {
        return $this->container['recent'];
    }

    /**
    * Sets recent
    *
    * @param string|null $recent 枚举值：yesterday,today,3days,1week,1month 与开始结束时间不同时为空
    *
    * @return $this
    */
    public function setRecent($recent)
    {
        $this->container['recent'] = $recent;
        return $this;
    }

    /**
    * Gets overseasType
    *  实例类型，0-大陆，1-海外
    *
    * @return int|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int|null $overseasType 实例类型，0-大陆，1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
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

