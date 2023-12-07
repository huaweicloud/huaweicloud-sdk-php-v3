<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRandomResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRandomResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * randomData  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'randomData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * randomData  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'randomData' => null
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
    * randomData  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'randomData' => 'random_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * randomData  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @var string[]
    */
    protected static $setters = [
            'randomData' => 'setRandomData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * randomData  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @var string[]
    */
    protected static $getters = [
            'randomData' => 'getRandomData'
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
        $this->container['randomData'] = isset($data['randomData']) ? $data['randomData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['randomData']) && (mb_strlen($this->container['randomData']) > 8192)) {
                $invalidProperties[] = "invalid value for 'randomData', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['randomData']) && (mb_strlen($this->container['randomData']) < 0)) {
                $invalidProperties[] = "invalid value for 'randomData', the character length must be bigger than or equal to 0.";
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
    * Gets randomData
    *  随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @return string|null
    */
    public function getRandomData()
    {
        return $this->container['randomData'];
    }

    /**
    * Sets randomData
    *
    * @param string|null $randomData 随机数16进制表示，两位表示1byte。随机数的长度与用户传入的参数 “random_data_length”的长度保持一致。
    *
    * @return $this
    */
    public function setRandomData($randomData)
    {
        $this->container['randomData'] = $randomData;
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

