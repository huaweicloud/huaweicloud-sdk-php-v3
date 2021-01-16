<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegionLocales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegionLocales';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zhCn' => 'string',
            'enUs' => 'string',
            'ptBr' => 'string',
            'esUs' => 'string',
            'esEs' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zhCn' => null,
        'enUs' => null,
        'ptBr' => null,
        'esUs' => null,
        'esEs' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zhCn' => 'zh-cn',
            'enUs' => 'en-us',
            'ptBr' => 'pt-br',
            'esUs' => 'es-us',
            'esEs' => 'es-es'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'zhCn' => 'setZhCn',
            'enUs' => 'setEnUs',
            'ptBr' => 'setPtBr',
            'esUs' => 'setEsUs',
            'esEs' => 'setEsEs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'zhCn' => 'getZhCn',
            'enUs' => 'getEnUs',
            'ptBr' => 'getPtBr',
            'esUs' => 'getEsUs',
            'esEs' => 'getEsEs'
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
        $this->container['zhCn'] = isset($data['zhCn']) ? $data['zhCn'] : null;
        $this->container['enUs'] = isset($data['enUs']) ? $data['enUs'] : null;
        $this->container['ptBr'] = isset($data['ptBr']) ? $data['ptBr'] : null;
        $this->container['esUs'] = isset($data['esUs']) ? $data['esUs'] : null;
        $this->container['esEs'] = isset($data['esEs']) ? $data['esEs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zhCn'] === null) {
            $invalidProperties[] = "'zhCn' can't be null";
        }
        if ($this->container['enUs'] === null) {
            $invalidProperties[] = "'enUs' can't be null";
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
    * Gets zhCn
    *
    * @return string
    */
    public function getZhCn()
    {
        return $this->container['zhCn'];
    }

    /**
    * Sets zhCn
    *
    * @param string $zhCn 区域的中文名称。
    *
    * @return $this
    */
    public function setZhCn($zhCn)
    {
        $this->container['zhCn'] = $zhCn;
        return $this;
    }

    /**
    * Gets enUs
    *
    * @return string
    */
    public function getEnUs()
    {
        return $this->container['enUs'];
    }

    /**
    * Sets enUs
    *
    * @param string $enUs 区域的英文名称。
    *
    * @return $this
    */
    public function setEnUs($enUs)
    {
        $this->container['enUs'] = $enUs;
        return $this;
    }

    /**
    * Gets ptBr
    *
    * @return string|null
    */
    public function getPtBr()
    {
        return $this->container['ptBr'];
    }

    /**
    * Sets ptBr
    *
    * @param string|null $ptBr 区域的葡萄牙语名称。
    *
    * @return $this
    */
    public function setPtBr($ptBr)
    {
        $this->container['ptBr'] = $ptBr;
        return $this;
    }

    /**
    * Gets esUs
    *
    * @return string|null
    */
    public function getEsUs()
    {
        return $this->container['esUs'];
    }

    /**
    * Sets esUs
    *
    * @param string|null $esUs 区域的美国西班牙语名称。
    *
    * @return $this
    */
    public function setEsUs($esUs)
    {
        $this->container['esUs'] = $esUs;
        return $this;
    }

    /**
    * Gets esEs
    *
    * @return string|null
    */
    public function getEsEs()
    {
        return $this->container['esEs'];
    }

    /**
    * Sets esEs
    *
    * @param string|null $esEs 区域的西班牙语名称。
    *
    * @return $this
    */
    public function setEsEs($esEs)
    {
        $this->container['esEs'] = $esEs;
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

