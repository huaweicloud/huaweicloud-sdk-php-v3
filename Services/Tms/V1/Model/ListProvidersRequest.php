<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProvidersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProvidersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * locale  指定显示语言
    * limit  查询记录数默认为10，limit最多为200，最小值为1。
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * provider  云服务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'locale' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'provider' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * locale  指定显示语言
    * limit  查询记录数默认为10，limit最多为200，最小值为1。
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * provider  云服务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'locale' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'provider' => null
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
    * locale  指定显示语言
    * limit  查询记录数默认为10，limit最多为200，最小值为1。
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * provider  云服务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'locale' => 'locale',
            'limit' => 'limit',
            'offset' => 'offset',
            'provider' => 'provider'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * locale  指定显示语言
    * limit  查询记录数默认为10，limit最多为200，最小值为1。
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * provider  云服务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'locale' => 'setLocale',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'provider' => 'setProvider'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * locale  指定显示语言
    * limit  查询记录数默认为10，limit最多为200，最小值为1。
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * provider  云服务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'locale' => 'getLocale',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'provider' => 'getProvider'
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
    const LOCALE_ZH_CN = 'zh-cn';
    const LOCALE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_ZH_CN,
            self::LOCALE_EN_US,
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
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLocaleAllowableValues();
                if (!is_null($this->container['locale']) && !in_array($this->container['locale'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'locale', must be one of '%s'",
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
    * Gets locale
    *  指定显示语言
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale 指定显示语言
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数默认为10，limit最多为200，最小值为1。
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
    * @param int|null $limit 查询记录数默认为10，limit最多为200，最小值为1。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
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
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets provider
    *  云服务名称
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 云服务名称
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
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

