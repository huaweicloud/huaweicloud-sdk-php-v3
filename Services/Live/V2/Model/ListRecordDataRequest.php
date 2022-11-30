<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecordDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecordDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  推流域名。
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  推流域名。
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'startTime' => null,
        'endTime' => null
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
    * publishDomain  推流域名。
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  推流域名。
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  推流域名。
    * startTime  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
    * endTime  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
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
    * Gets publishDomain
    *  推流域名。
    *
    * @return string|null
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string|null $publishDomain 推流域名。
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
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
    * @param string|null $startTime 起始时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若start_time为2020-08-18T07:20:40Z，则实际查询起始时间为2020-08-18T07:00:00Z。  若start_time为空，则默认查询最近24小时数据。
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
    *  结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
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
    * @param string|null $endTime 结束时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。  非整点时间按小时取整，若end_time为2020-08-18T08:20:40Z，则实际查询起始时间为2020-08-18T08:00:00Z。  若参数为空，默认为当前时间。结束时间需大于起始时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

