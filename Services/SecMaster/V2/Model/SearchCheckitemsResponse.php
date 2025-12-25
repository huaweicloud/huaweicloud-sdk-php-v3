<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchCheckitemsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchCheckitemsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * builtinCheckitemNum  内置检查项个数
    * checkitemNum  检查项总数
    * customizedCheckitemNum  自定义检查项个数
    * count  检查项总数
    * checkitems  检查项详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'builtinCheckitemNum' => 'float',
            'checkitemNum' => 'float',
            'customizedCheckitemNum' => 'float',
            'count' => 'float',
            'checkitems' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * builtinCheckitemNum  内置检查项个数
    * checkitemNum  检查项总数
    * customizedCheckitemNum  自定义检查项个数
    * count  检查项总数
    * checkitems  检查项详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'builtinCheckitemNum' => null,
        'checkitemNum' => null,
        'customizedCheckitemNum' => null,
        'count' => null,
        'checkitems' => null
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
    * builtinCheckitemNum  内置检查项个数
    * checkitemNum  检查项总数
    * customizedCheckitemNum  自定义检查项个数
    * count  检查项总数
    * checkitems  检查项详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'builtinCheckitemNum' => 'builtin_checkitem_num',
            'checkitemNum' => 'checkitem_num',
            'customizedCheckitemNum' => 'customized_checkitem_num',
            'count' => 'count',
            'checkitems' => 'checkitems'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * builtinCheckitemNum  内置检查项个数
    * checkitemNum  检查项总数
    * customizedCheckitemNum  自定义检查项个数
    * count  检查项总数
    * checkitems  检查项详情
    *
    * @var string[]
    */
    protected static $setters = [
            'builtinCheckitemNum' => 'setBuiltinCheckitemNum',
            'checkitemNum' => 'setCheckitemNum',
            'customizedCheckitemNum' => 'setCustomizedCheckitemNum',
            'count' => 'setCount',
            'checkitems' => 'setCheckitems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * builtinCheckitemNum  内置检查项个数
    * checkitemNum  检查项总数
    * customizedCheckitemNum  自定义检查项个数
    * count  检查项总数
    * checkitems  检查项详情
    *
    * @var string[]
    */
    protected static $getters = [
            'builtinCheckitemNum' => 'getBuiltinCheckitemNum',
            'checkitemNum' => 'getCheckitemNum',
            'customizedCheckitemNum' => 'getCustomizedCheckitemNum',
            'count' => 'getCount',
            'checkitems' => 'getCheckitems'
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
        $this->container['builtinCheckitemNum'] = isset($data['builtinCheckitemNum']) ? $data['builtinCheckitemNum'] : null;
        $this->container['checkitemNum'] = isset($data['checkitemNum']) ? $data['checkitemNum'] : null;
        $this->container['customizedCheckitemNum'] = isset($data['customizedCheckitemNum']) ? $data['customizedCheckitemNum'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['checkitems'] = isset($data['checkitems']) ? $data['checkitems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['builtinCheckitemNum']) && ($this->container['builtinCheckitemNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'builtinCheckitemNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['builtinCheckitemNum']) && ($this->container['builtinCheckitemNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'builtinCheckitemNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkitemNum']) && ($this->container['checkitemNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'checkitemNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['checkitemNum']) && ($this->container['checkitemNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkitemNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['customizedCheckitemNum']) && ($this->container['customizedCheckitemNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'customizedCheckitemNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['customizedCheckitemNum']) && ($this->container['customizedCheckitemNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'customizedCheckitemNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets builtinCheckitemNum
    *  内置检查项个数
    *
    * @return float|null
    */
    public function getBuiltinCheckitemNum()
    {
        return $this->container['builtinCheckitemNum'];
    }

    /**
    * Sets builtinCheckitemNum
    *
    * @param float|null $builtinCheckitemNum 内置检查项个数
    *
    * @return $this
    */
    public function setBuiltinCheckitemNum($builtinCheckitemNum)
    {
        $this->container['builtinCheckitemNum'] = $builtinCheckitemNum;
        return $this;
    }

    /**
    * Gets checkitemNum
    *  检查项总数
    *
    * @return float|null
    */
    public function getCheckitemNum()
    {
        return $this->container['checkitemNum'];
    }

    /**
    * Sets checkitemNum
    *
    * @param float|null $checkitemNum 检查项总数
    *
    * @return $this
    */
    public function setCheckitemNum($checkitemNum)
    {
        $this->container['checkitemNum'] = $checkitemNum;
        return $this;
    }

    /**
    * Gets customizedCheckitemNum
    *  自定义检查项个数
    *
    * @return float|null
    */
    public function getCustomizedCheckitemNum()
    {
        return $this->container['customizedCheckitemNum'];
    }

    /**
    * Sets customizedCheckitemNum
    *
    * @param float|null $customizedCheckitemNum 自定义检查项个数
    *
    * @return $this
    */
    public function setCustomizedCheckitemNum($customizedCheckitemNum)
    {
        $this->container['customizedCheckitemNum'] = $customizedCheckitemNum;
        return $this;
    }

    /**
    * Gets count
    *  检查项总数
    *
    * @return float|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param float|null $count 检查项总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets checkitems
    *  检查项详情
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemModel[]|null
    */
    public function getCheckitems()
    {
        return $this->container['checkitems'];
    }

    /**
    * Sets checkitems
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemModel[]|null $checkitems 检查项详情
    *
    * @return $this
    */
    public function setCheckitems($checkitems)
    {
        $this->container['checkitems'] = $checkitems;
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

