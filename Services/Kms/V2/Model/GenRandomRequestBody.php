<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GenRandomRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GenRandomRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * randomDataLength  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'randomDataLength' => 'string',
            'sequence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * randomDataLength  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'randomDataLength' => null,
        'sequence' => null
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
    * randomDataLength  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'randomDataLength' => 'random_data_length',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * randomDataLength  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $setters = [
            'randomDataLength' => 'setRandomDataLength',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * randomDataLength  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    * sequence  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @var string[]
    */
    protected static $getters = [
            'randomDataLength' => 'getRandomDataLength',
            'sequence' => 'getSequence'
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
        $this->container['randomDataLength'] = isset($data['randomDataLength']) ? $data['randomDataLength'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['randomDataLength'] === null) {
            $invalidProperties[] = "'randomDataLength' can't be null";
        }
            if ((mb_strlen($this->container['randomDataLength']) > 4)) {
                $invalidProperties[] = "invalid value for 'randomDataLength', the character length must be smaller than or equal to 4.";
            }
            if ((mb_strlen($this->container['randomDataLength']) < 1)) {
                $invalidProperties[] = "invalid value for 'randomDataLength', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) > 36)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sequence']) && (mb_strlen($this->container['sequence']) < 0)) {
                $invalidProperties[] = "invalid value for 'sequence', the character length must be bigger than or equal to 0.";
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
    * Gets randomDataLength
    *  随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    *
    * @return string
    */
    public function getRandomDataLength()
    {
        return $this->container['randomDataLength'];
    }

    /**
    * Sets randomDataLength
    *
    * @param string $randomDataLength 随机数的bit位长度。 取值为8的倍数，取值范围为8~8192。 随机数的bit位长度，取值为“512”。
    *
    * @return $this
    */
    public function setRandomDataLength($randomDataLength)
    {
        $this->container['randomDataLength'] = $randomDataLength;
        return $this;
    }

    /**
    * Gets sequence
    *  请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return string|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param string|null $sequence 请求消息序列号，36字节序列号。 例如：919c82d4-8046-4722-9094-35c3c6524cff
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

