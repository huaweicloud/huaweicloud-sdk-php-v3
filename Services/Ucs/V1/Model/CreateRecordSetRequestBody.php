<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRecordSetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRecordSetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    * records  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    * line  解析线路ID
    * weight  解析记录的权重
    * type  Record Set的类型， 取值范围：A、CNAME
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ttl' => 'int',
            'records' => 'string[]',
            'line' => 'string',
            'weight' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    * records  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    * line  解析线路ID
    * weight  解析记录的权重
    * type  Record Set的类型， 取值范围：A、CNAME
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ttl' => 'int32',
        'records' => null,
        'line' => null,
        'weight' => 'int32',
        'type' => null
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
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    * records  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    * line  解析线路ID
    * weight  解析记录的权重
    * type  Record Set的类型， 取值范围：A、CNAME
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ttl' => 'ttl',
            'records' => 'records',
            'line' => 'line',
            'weight' => 'weight',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    * records  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    * line  解析线路ID
    * weight  解析记录的权重
    * type  Record Set的类型， 取值范围：A、CNAME
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ttl' => 'setTtl',
            'records' => 'setRecords',
            'line' => 'setLine',
            'weight' => 'setWeight',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    * records  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    * line  解析线路ID
    * weight  解析记录的权重
    * type  Record Set的类型， 取值范围：A、CNAME
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ttl' => 'getTtl',
            'records' => 'getRecords',
            'line' => 'getLine',
            'weight' => 'getWeight',
            'type' => 'getType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
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
    * Gets name
    *  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ttl
    *  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    *
    * @return int
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int $ttl 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets records
    *  解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    *
    * @return string[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[]|null $records 解析记录的值，不同类型解析记录对应的值的规则不同，必须是合法IP信息
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets line
    *  解析线路ID
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
    * @param string $line 解析线路ID
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets weight
    *  解析记录的权重
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
    * @param int|null $weight 解析记录的权重
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets type
    *  Record Set的类型， 取值范围：A、CNAME
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Record Set的类型， 取值范围：A、CNAME
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

