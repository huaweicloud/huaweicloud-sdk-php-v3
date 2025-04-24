<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestLimitRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestLimitRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    * priority  优先级，值越大，优先级越高,取值范围：1-100。
    * matchType  匹配类型，all：所有文件，catalog：目录。
    * matchValue  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    * type  限速方式，当前仅支持按流量大小限速，取值为size。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600。
    * limitTime  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'priority' => 'int',
            'matchType' => 'string',
            'matchValue' => 'string',
            'type' => 'string',
            'limitRateAfter' => 'int',
            'limitRateValue' => 'int',
            'limitTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    * priority  优先级，值越大，优先级越高,取值范围：1-100。
    * matchType  匹配类型，all：所有文件，catalog：目录。
    * matchValue  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    * type  限速方式，当前仅支持按流量大小限速，取值为size。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600。
    * limitTime  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'priority' => 'int32',
        'matchType' => null,
        'matchValue' => null,
        'type' => null,
        'limitRateAfter' => 'int64',
        'limitRateValue' => 'int32',
        'limitTime' => null
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
    * status  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    * priority  优先级，值越大，优先级越高,取值范围：1-100。
    * matchType  匹配类型，all：所有文件，catalog：目录。
    * matchValue  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    * type  限速方式，当前仅支持按流量大小限速，取值为size。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600。
    * limitTime  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'priority' => 'priority',
            'matchType' => 'match_type',
            'matchValue' => 'match_value',
            'type' => 'type',
            'limitRateAfter' => 'limit_rate_after',
            'limitRateValue' => 'limit_rate_value',
            'limitTime' => 'limit_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    * priority  优先级，值越大，优先级越高,取值范围：1-100。
    * matchType  匹配类型，all：所有文件，catalog：目录。
    * matchValue  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    * type  限速方式，当前仅支持按流量大小限速，取值为size。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600。
    * limitTime  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'priority' => 'setPriority',
            'matchType' => 'setMatchType',
            'matchValue' => 'setMatchValue',
            'type' => 'setType',
            'limitRateAfter' => 'setLimitRateAfter',
            'limitRateValue' => 'setLimitRateValue',
            'limitTime' => 'setLimitTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    * priority  优先级，值越大，优先级越高,取值范围：1-100。
    * matchType  匹配类型，all：所有文件，catalog：目录。
    * matchValue  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    * type  限速方式，当前仅支持按流量大小限速，取值为size。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600。
    * limitTime  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'priority' => 'getPriority',
            'matchType' => 'getMatchType',
            'matchValue' => 'getMatchValue',
            'type' => 'getType',
            'limitRateAfter' => 'getLimitRateAfter',
            'limitRateValue' => 'getLimitRateValue',
            'limitTime' => 'getLimitTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['matchValue'] = isset($data['matchValue']) ? $data['matchValue'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limitRateAfter'] = isset($data['limitRateAfter']) ? $data['limitRateAfter'] : null;
        $this->container['limitRateValue'] = isset($data['limitRateValue']) ? $data['limitRateValue'] : null;
        $this->container['limitTime'] = isset($data['limitTime']) ? $data['limitTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['limitRateAfter'] === null) {
            $invalidProperties[] = "'limitRateAfter' can't be null";
        }
        if ($this->container['limitRateValue'] === null) {
            $invalidProperties[] = "'limitRateValue' can't be null";
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
    * Gets status
    *  status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
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
    * @param string|null $status status只支持on，off无效。  > request_limit_rules字段置空时代表关闭请求限速功能。  > 旧接口中的参数，后续将下线。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets priority
    *  优先级，值越大，优先级越高,取值范围：1-100。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 优先级，值越大，优先级越高,取值范围：1-100。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配类型，all：所有文件，catalog：目录。
    *
    * @return string
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string $matchType 匹配类型，all：所有文件，catalog：目录。
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets matchValue
    *  匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    *
    * @return string|null
    */
    public function getMatchValue()
    {
        return $this->container['matchValue'];
    }

    /**
    * Sets matchValue
    *
    * @param string|null $matchValue 匹配类型值。 当match_type为all时传空值，例如：\"\"； 当match_type为catalog时传目录地址，以“/”作为首字符,例如：\"/test\"。  > 值为catalog的时候必填
    *
    * @return $this
    */
    public function setMatchValue($matchValue)
    {
        $this->container['matchValue'] = $matchValue;
        return $this;
    }

    /**
    * Gets type
    *  限速方式，当前仅支持按流量大小限速，取值为size。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 限速方式，当前仅支持按流量大小限速，取值为size。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limitRateAfter
    *  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    *
    * @return int
    */
    public function getLimitRateAfter()
    {
        return $this->container['limitRateAfter'];
    }

    /**
    * Sets limitRateAfter
    *
    * @param int $limitRateAfter 限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    *
    * @return $this
    */
    public function setLimitRateAfter($limitRateAfter)
    {
        $this->container['limitRateAfter'] = $limitRateAfter;
        return $this;
    }

    /**
    * Gets limitRateValue
    *  限速值,单位Bps，取值范围 0-104857600。
    *
    * @return int
    */
    public function getLimitRateValue()
    {
        return $this->container['limitRateValue'];
    }

    /**
    * Sets limitRateValue
    *
    * @param int $limitRateValue 限速值,单位Bps，取值范围 0-104857600。
    *
    * @return $this
    */
    public function setLimitRateValue($limitRateValue)
    {
        $this->container['limitRateValue'] = $limitRateValue;
        return $this;
    }

    /**
    * Gets limitTime
    *  指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @return string|null
    */
    public function getLimitTime()
    {
        return $this->container['limitTime'];
    }

    /**
    * Sets limitTime
    *
    * @param string|null $limitTime 指明限速的时段，按照每天24小时设置限速时段，格式为：HHMM-HHMM（HH为时，MM为分，时区为UTC+8），多个时段限速时用“,”分隔，最多可配置10个时段，例如：0100-0200,2200-2300。不传或传空时默认值为0000-2400，代表限速对所有时段生效。
    *
    * @return $this
    */
    public function setLimitTime($limitTime)
    {
        $this->container['limitTime'] = $limitTime;
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

