<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSearchAppIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSearchAppIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRequestId' => 'string',
            'acceptLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRequestId' => null,
        'acceptLanguage' => null,
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
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRequestId' => 'X-Request-Id',
            'acceptLanguage' => 'Accept-Language',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    *
    * @var string[]
    */
    protected static $setters = [
            'xRequestId' => 'setXRequestId',
            'acceptLanguage' => 'setAcceptLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    *
    * @var string[]
    */
    protected static $getters = [
            'xRequestId' => 'getXRequestId',
            'acceptLanguage' => 'getAcceptLanguage',
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
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
        $this->container['acceptLanguage'] = isset($data['acceptLanguage']) ? $data['acceptLanguage'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets xRequestId
    *  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId 请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
        return $this;
    }

    /**
    * Gets acceptLanguage
    *  语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return string|null
    */
    public function getAcceptLanguage()
    {
        return $this->container['acceptLanguage'];
    }

    /**
    * Sets acceptLanguage
    *
    * @param string|null $acceptLanguage 语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return $this
    */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->container['acceptLanguage'] = $acceptLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
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
    * @param int|null $offset 查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
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
    *  查询数量。 默认值：10。
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
    * @param int|null $limit 查询数量。 默认值：10。
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

