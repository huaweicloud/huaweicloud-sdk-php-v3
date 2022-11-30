<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomLines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomLines';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    * ipSegments  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    * description  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ipSegments' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    * ipSegments  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    * description  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ipSegments' => null,
        'description' => null
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
    * name  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    * ipSegments  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    * description  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ipSegments' => 'ip_segments',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    * ipSegments  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    * description  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ipSegments' => 'setIpSegments',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    * ipSegments  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    * description  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ipSegments' => 'getIpSegments',
            'description' => 'getDescription'
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
        $this->container['ipSegments'] = isset($data['ipSegments']) ? $data['ipSegments'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['ipSegments'] === null) {
            $invalidProperties[] = "'ipSegments' can't be null";
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
    *  解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
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
    * @param string $name 解析线路名称。  长度限制为1-80个字符，只允许包含中文、字母、数字、'-'、'_'、'.'字符。  租户内，解析线路名称是唯一的。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipSegments
    *  IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    *
    * @return string[]
    */
    public function getIpSegments()
    {
        return $this->container['ipSegments'];
    }

    /**
    * Sets ipSegments
    *
    * @param string[] $ipSegments IP地址段。  以“-”分隔，小IP地址在前，大IP地址在后。IP段之间不能有交叉。当只有一个IP时，填写IP1-IP1。 目前只支持IPV4。  最多支持50个。
    *
    * @return $this
    */
    public function setIpSegments($ipSegments)
    {
        $this->container['ipSegments'] = $ipSegments;
        return $this;
    }

    /**
    * Gets description
    *  自定义线路的描述信息。长度不超过255个字符。  默认值为空。
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
    * @param string|null $description 自定义线路的描述信息。长度不超过255个字符。  默认值为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

