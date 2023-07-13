<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateRecordSetWithLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'batchCreateRecordSetWithLine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * line  解析线路ID。
    * ttl  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    * weight  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'line' => 'string',
            'ttl' => 'int',
            'weight' => 'int',
            'records' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * line  解析线路ID。
    * ttl  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    * weight  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'line' => null,
        'ttl' => 'int32',
        'weight' => 'int32',
        'records' => null
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
    * line  解析线路ID。
    * ttl  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    * weight  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'line' => 'line',
            'ttl' => 'ttl',
            'weight' => 'weight',
            'records' => 'records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * line  解析线路ID。
    * ttl  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    * weight  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @var string[]
    */
    protected static $setters = [
            'line' => 'setLine',
            'ttl' => 'setTtl',
            'weight' => 'setWeight',
            'records' => 'setRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * line  解析线路ID。
    * ttl  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    * weight  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @var string[]
    */
    protected static $getters = [
            'line' => 'getLine',
            'ttl' => 'getTtl',
            'weight' => 'getWeight',
            'records' => 'getRecords'
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
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
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
    * Gets line
    *  解析线路ID。
    *
    * @return string
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string $line 解析线路ID。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets ttl
    *  Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl Record Set的有效缓存时间，以秒为单位。 取值范围：300-2147483647。 默认值为300s。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets weight
    *  解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 解析记录的权重，默认为1。 当weight=null时，表示该解析记录不设置权重。 当weight=0，表示备用域名解析记录。 当weight>0，表示主用域名解析记录。 取值范围：0~100 在相同域名、类型、线路下的解析记录，规则如下： 全部设置权重，或全部不设置权重。 当不设置权重时，只能创建一个解析记录。 当设置权重时，最多能创建20个解析记录。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets records
    *  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @return string[]
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[] $records 解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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

