<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopUrl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  配置开关
    * limit  热点统计配置指标的上报数量。如top_url 100、top_url 1000
    * sortByCode  热点统计类指标是否支持按状态码上报
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'limit' => 'int',
            'sortByCode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  配置开关
    * limit  热点统计配置指标的上报数量。如top_url 100、top_url 1000
    * sortByCode  热点统计类指标是否支持按状态码上报
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'limit' => 'int32',
        'sortByCode' => null
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
    * enable  配置开关
    * limit  热点统计配置指标的上报数量。如top_url 100、top_url 1000
    * sortByCode  热点统计类指标是否支持按状态码上报
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'limit' => 'limit',
            'sortByCode' => 'sort_by_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  配置开关
    * limit  热点统计配置指标的上报数量。如top_url 100、top_url 1000
    * sortByCode  热点统计类指标是否支持按状态码上报
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'limit' => 'setLimit',
            'sortByCode' => 'setSortByCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  配置开关
    * limit  热点统计配置指标的上报数量。如top_url 100、top_url 1000
    * sortByCode  热点统计类指标是否支持按状态码上报
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'limit' => 'getLimit',
            'sortByCode' => 'getSortByCode'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortByCode'] = isset($data['sortByCode']) ? $data['sortByCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
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
    * Gets enable
    *  配置开关
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 配置开关
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets limit
    *  热点统计配置指标的上报数量。如top_url 100、top_url 1000
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
    * @param int|null $limit 热点统计配置指标的上报数量。如top_url 100、top_url 1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortByCode
    *  热点统计类指标是否支持按状态码上报
    *
    * @return bool|null
    */
    public function getSortByCode()
    {
        return $this->container['sortByCode'];
    }

    /**
    * Sets sortByCode
    *
    * @param bool|null $sortByCode 热点统计类指标是否支持按状态码上报
    *
    * @return $this
    */
    public function setSortByCode($sortByCode)
    {
        $this->container['sortByCode'] = $sortByCode;
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

