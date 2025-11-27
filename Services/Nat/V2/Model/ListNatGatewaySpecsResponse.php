<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNatGatewaySpecsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNatGatewaySpecsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specs  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specs  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * specs  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specs' => 'specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specs  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @var string[]
    */
    protected static $setters = [
            'specs' => 'setSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specs  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @var string[]
    */
    protected static $getters = [
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
    const SPECS__1 = '1';
    const SPECS__2 = '2';
    const SPECS__3 = '3';
    const SPECS__4 = '4';
    const SPECS__5 = '5';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecsAllowableValues()
    {
        return [
            self::SPECS__1,
            self::SPECS__2,
            self::SPECS__3,
            self::SPECS__4,
            self::SPECS__5,
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
    * Gets specs
    *  可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
    *
    * @return string[]|null
    */
    public function getSpecs()
    {
        return $this->container['specs'];
    }

    /**
    * Sets specs
    *
    * @param string[]|null $specs 可创建的NAT网关实例列表  取值范围：  “1”：小型，SNAT最大连接数10000  “2”：中型，SNAT最大连接数50000  “3”：大型，SNAT最大连接数200000  “4”：超大型，SNAT最大连接数1000000  “5”：企业型，SNAT最大连接数10000000
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

