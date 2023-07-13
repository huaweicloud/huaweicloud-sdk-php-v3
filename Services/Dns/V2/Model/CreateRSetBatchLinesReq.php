<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRSetBatchLinesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRSetBatchLinesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。 长度不超过255个字符。
    * type  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    * lines  解析线路域名参数。最多支持50个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'lines' => '\HuaweiCloud\SDK\Dns\V2\Model\BatchCreateRecordSetWithLine[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。 长度不超过255个字符。
    * type  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    * lines  解析线路域名参数。最多支持50个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'lines' => null
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
    * name  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。 长度不超过255个字符。
    * type  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    * lines  解析线路域名参数。最多支持50个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'lines' => 'lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。 长度不超过255个字符。
    * type  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    * lines  解析线路域名参数。最多支持50个。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'lines' => 'setLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。 长度不超过255个字符。
    * type  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    * lines  解析线路域名参数。最多支持50个。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'lines' => 'getLines'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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
    *  后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
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
    * @param string $name 后缀需以Zone Name结束且为FQDN（即以“.”号结束的完整主机名）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  可选配置，对域名的描述。 长度不超过255个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 可选配置，对域名的描述。 长度不超过255个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
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
    * @param string $type Record Set的类型。 取值范围：A,AAAA,MX,CNAME,TXT,NS,SRV,CAA。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets lines
    *  解析线路域名参数。最多支持50个。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\BatchCreateRecordSetWithLine[]
    */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
    * Sets lines
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\BatchCreateRecordSetWithLine[] $lines 解析线路域名参数。最多支持50个。
    *
    * @return $this
    */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;
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

