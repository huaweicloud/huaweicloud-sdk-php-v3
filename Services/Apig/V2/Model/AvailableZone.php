<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableZone';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  可用区名称。
    * id  实例创建失败错误信息
    * code  可用区编码。
    * port  可用区端口号。
    * localName  localName
    * specs  可用区支持的实例规格。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'code' => 'string',
            'port' => 'string',
            'localName' => '\HuaweiCloud\SDK\Apig\V2\Model\LocalName',
            'specs' => 'map[string,bool]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  可用区名称。
    * id  实例创建失败错误信息
    * code  可用区编码。
    * port  可用区端口号。
    * localName  localName
    * specs  可用区支持的实例规格。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'code' => null,
        'port' => null,
        'localName' => null,
        'specs' => null
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
    * name  可用区名称。
    * id  实例创建失败错误信息
    * code  可用区编码。
    * port  可用区端口号。
    * localName  localName
    * specs  可用区支持的实例规格。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'code' => 'code',
            'port' => 'port',
            'localName' => 'local_name',
            'specs' => 'specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  可用区名称。
    * id  实例创建失败错误信息
    * code  可用区编码。
    * port  可用区端口号。
    * localName  localName
    * specs  可用区支持的实例规格。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'code' => 'setCode',
            'port' => 'setPort',
            'localName' => 'setLocalName',
            'specs' => 'setSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  可用区名称。
    * id  实例创建失败错误信息
    * code  可用区编码。
    * port  可用区端口号。
    * localName  localName
    * specs  可用区支持的实例规格。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'code' => 'getCode',
            'port' => 'getPort',
            'localName' => 'getLocalName',
            'specs' => 'getSpecs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['localName'] = isset($data['localName']) ? $data['localName'] : null;
        $this->container['specs'] = isset($data['specs']) ? $data['specs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  可用区名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 可用区名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  实例创建失败错误信息
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例创建失败错误信息
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  可用区编码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 可用区编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets port
    *  可用区端口号。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 可用区端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets localName
    *  localName
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\LocalName|null
    */
    public function getLocalName()
    {
        return $this->container['localName'];
    }

    /**
    * Sets localName
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\LocalName|null $localName localName
    *
    * @return $this
    */
    public function setLocalName($localName)
    {
        $this->container['localName'] = $localName;
        return $this;
    }

    /**
    * Gets specs
    *  可用区支持的实例规格。
    *
    * @return map[string,bool]|null
    */
    public function getSpecs()
    {
        return $this->container['specs'];
    }

    /**
    * Sets specs
    *
    * @param map[string,bool]|null $specs 可用区支持的实例规格。
    *
    * @return $this
    */
    public function setSpecs($specs)
    {
        $this->container['specs'] = $specs;
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

