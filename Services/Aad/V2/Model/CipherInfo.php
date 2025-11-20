<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CipherInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CipherInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  套件名称
    * algo  对应的加密算法
    * descCn  中文描述
    * descEn  英文描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'algo' => 'string',
            'descCn' => 'string',
            'descEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  套件名称
    * algo  对应的加密算法
    * descCn  中文描述
    * descEn  英文描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'algo' => null,
        'descCn' => null,
        'descEn' => null
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
    * name  套件名称
    * algo  对应的加密算法
    * descCn  中文描述
    * descEn  英文描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'algo' => 'algo',
            'descCn' => 'desc_cn',
            'descEn' => 'desc_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  套件名称
    * algo  对应的加密算法
    * descCn  中文描述
    * descEn  英文描述
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'algo' => 'setAlgo',
            'descCn' => 'setDescCn',
            'descEn' => 'setDescEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  套件名称
    * algo  对应的加密算法
    * descCn  中文描述
    * descEn  英文描述
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'algo' => 'getAlgo',
            'descCn' => 'getDescCn',
            'descEn' => 'getDescEn'
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
        $this->container['algo'] = isset($data['algo']) ? $data['algo'] : null;
        $this->container['descCn'] = isset($data['descCn']) ? $data['descCn'] : null;
        $this->container['descEn'] = isset($data['descEn']) ? $data['descEn'] : null;
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
            if ((mb_strlen($this->container['name']) > 32768)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['algo'] === null) {
            $invalidProperties[] = "'algo' can't be null";
        }
            if ((mb_strlen($this->container['algo']) > 32768)) {
                $invalidProperties[] = "invalid value for 'algo', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['algo']) < 0)) {
                $invalidProperties[] = "invalid value for 'algo', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['descCn'] === null) {
            $invalidProperties[] = "'descCn' can't be null";
        }
            if ((mb_strlen($this->container['descCn']) > 32768)) {
                $invalidProperties[] = "invalid value for 'descCn', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['descCn']) < 0)) {
                $invalidProperties[] = "invalid value for 'descCn', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['descEn'] === null) {
            $invalidProperties[] = "'descEn' can't be null";
        }
            if ((mb_strlen($this->container['descEn']) > 32768)) {
                $invalidProperties[] = "invalid value for 'descEn', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['descEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'descEn', the character length must be bigger than or equal to 0.";
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
    *  套件名称
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
    * @param string $name 套件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets algo
    *  对应的加密算法
    *
    * @return string
    */
    public function getAlgo()
    {
        return $this->container['algo'];
    }

    /**
    * Sets algo
    *
    * @param string $algo 对应的加密算法
    *
    * @return $this
    */
    public function setAlgo($algo)
    {
        $this->container['algo'] = $algo;
        return $this;
    }

    /**
    * Gets descCn
    *  中文描述
    *
    * @return string
    */
    public function getDescCn()
    {
        return $this->container['descCn'];
    }

    /**
    * Sets descCn
    *
    * @param string $descCn 中文描述
    *
    * @return $this
    */
    public function setDescCn($descCn)
    {
        $this->container['descCn'] = $descCn;
        return $this;
    }

    /**
    * Gets descEn
    *  英文描述
    *
    * @return string
    */
    public function getDescEn()
    {
        return $this->container['descEn'];
    }

    /**
    * Sets descEn
    *
    * @param string $descEn 英文描述
    *
    * @return $this
    */
    public function setDescEn($descEn)
    {
        $this->container['descEn'] = $descEn;
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

