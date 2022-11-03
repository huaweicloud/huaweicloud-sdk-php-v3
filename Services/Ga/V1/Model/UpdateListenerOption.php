<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateListenerOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateListenerOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * portRanges  监听端口范围列表。
    * clientAffinity  clientAffinity
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'portRanges' => '\HuaweiCloud\SDK\Ga\V1\Model\PortRange[]',
            'clientAffinity' => '\HuaweiCloud\SDK\Ga\V1\Model\ClientAffinity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * portRanges  监听端口范围列表。
    * clientAffinity  clientAffinity
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'portRanges' => null,
        'clientAffinity' => null
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
    * name  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * portRanges  监听端口范围列表。
    * clientAffinity  clientAffinity
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'portRanges' => 'port_ranges',
            'clientAffinity' => 'client_affinity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * portRanges  监听端口范围列表。
    * clientAffinity  clientAffinity
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'portRanges' => 'setPortRanges',
            'clientAffinity' => 'setClientAffinity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * portRanges  监听端口范围列表。
    * clientAffinity  clientAffinity
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'portRanges' => 'getPortRanges',
            'clientAffinity' => 'getClientAffinity'
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
        $this->container['portRanges'] = isset($data['portRanges']) ? $data['portRanges'] : null;
        $this->container['clientAffinity'] = isset($data['clientAffinity']) ? $data['clientAffinity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[一-龥A-Za-z0-9-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥A-Za-z0-9-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
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
    *  监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
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
    * @param string|null $name 监听器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
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
    *  监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
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
    * @param string|null $description 监听器的描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets portRanges
    *  监听端口范围列表。
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\PortRange[]|null
    */
    public function getPortRanges()
    {
        return $this->container['portRanges'];
    }

    /**
    * Sets portRanges
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\PortRange[]|null $portRanges 监听端口范围列表。
    *
    * @return $this
    */
    public function setPortRanges($portRanges)
    {
        $this->container['portRanges'] = $portRanges;
        return $this;
    }

    /**
    * Gets clientAffinity
    *  clientAffinity
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ClientAffinity|null
    */
    public function getClientAffinity()
    {
        return $this->container['clientAffinity'];
    }

    /**
    * Sets clientAffinity
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ClientAffinity|null $clientAffinity clientAffinity
    *
    * @return $this
    */
    public function setClientAffinity($clientAffinity)
    {
        $this->container['clientAffinity'] = $clientAffinity;
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

