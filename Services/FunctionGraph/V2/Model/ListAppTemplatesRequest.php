<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAppTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAppTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * maxitems  本次查询最大返回的数据条数，最大值500，默认值100
    * runtime  模板执行运行时
    * category  模板类别
    * xLanguage  模板语言
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'maxitems' => 'string',
            'runtime' => 'string',
            'category' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * maxitems  本次查询最大返回的数据条数，最大值500，默认值100
    * runtime  模板执行运行时
    * category  模板类别
    * xLanguage  模板语言
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'maxitems' => null,
        'runtime' => null,
        'category' => null,
        'xLanguage' => null
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
    * marker  本次查询起始位置，默认值0
    * maxitems  本次查询最大返回的数据条数，最大值500，默认值100
    * runtime  模板执行运行时
    * category  模板类别
    * xLanguage  模板语言
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'maxitems' => 'maxitems',
            'runtime' => 'runtime',
            'category' => 'category',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  本次查询起始位置，默认值0
    * maxitems  本次查询最大返回的数据条数，最大值500，默认值100
    * runtime  模板执行运行时
    * category  模板类别
    * xLanguage  模板语言
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'maxitems' => 'setMaxitems',
            'runtime' => 'setRuntime',
            'category' => 'setCategory',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  本次查询起始位置，默认值0
    * maxitems  本次查询最大返回的数据条数，最大值500，默认值100
    * runtime  模板执行运行时
    * category  模板类别
    * xLanguage  模板语言
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'maxitems' => 'getMaxitems',
            'runtime' => 'getRuntime',
            'category' => 'getCategory',
            'xLanguage' => 'getXLanguage'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['maxitems'] = isset($data['maxitems']) ? $data['maxitems'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxitems']) && (mb_strlen($this->container['maxitems']) > 64)) {
                $invalidProperties[] = "invalid value for 'maxitems', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['maxitems']) && (mb_strlen($this->container['maxitems']) < 0)) {
                $invalidProperties[] = "invalid value for 'maxitems', the character length must be bigger than or equal to 0.";
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
    * Gets marker
    *  本次查询起始位置，默认值0
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 本次查询起始位置，默认值0
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets maxitems
    *  本次查询最大返回的数据条数，最大值500，默认值100
    *
    * @return string|null
    */
    public function getMaxitems()
    {
        return $this->container['maxitems'];
    }

    /**
    * Sets maxitems
    *
    * @param string|null $maxitems 本次查询最大返回的数据条数，最大值500，默认值100
    *
    * @return $this
    */
    public function setMaxitems($maxitems)
    {
        $this->container['maxitems'] = $maxitems;
        return $this;
    }

    /**
    * Gets runtime
    *  模板执行运行时
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 模板执行运行时
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets category
    *  模板类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 模板类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets xLanguage
    *  模板语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 模板语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

