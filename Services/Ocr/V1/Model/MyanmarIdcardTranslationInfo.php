<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MyanmarIdcardTranslationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MyanmarIdcardTranslationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameTranslation  名字转译。仅当输入参数return_translation为true时，返回该字段。
    * fatherNameTranslation  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    * nrcIdTranslation  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    * birthTranslation  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameTranslation' => 'string',
            'fatherNameTranslation' => 'string',
            'nrcIdTranslation' => 'string',
            'birthTranslation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameTranslation  名字转译。仅当输入参数return_translation为true时，返回该字段。
    * fatherNameTranslation  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    * nrcIdTranslation  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    * birthTranslation  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameTranslation' => null,
        'fatherNameTranslation' => null,
        'nrcIdTranslation' => null,
        'birthTranslation' => null
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
    * nameTranslation  名字转译。仅当输入参数return_translation为true时，返回该字段。
    * fatherNameTranslation  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    * nrcIdTranslation  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    * birthTranslation  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameTranslation' => 'name_translation',
            'fatherNameTranslation' => 'father_name_translation',
            'nrcIdTranslation' => 'nrc_id_translation',
            'birthTranslation' => 'birth_translation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameTranslation  名字转译。仅当输入参数return_translation为true时，返回该字段。
    * fatherNameTranslation  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    * nrcIdTranslation  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    * birthTranslation  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'nameTranslation' => 'setNameTranslation',
            'fatherNameTranslation' => 'setFatherNameTranslation',
            'nrcIdTranslation' => 'setNrcIdTranslation',
            'birthTranslation' => 'setBirthTranslation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameTranslation  名字转译。仅当输入参数return_translation为true时，返回该字段。
    * fatherNameTranslation  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    * nrcIdTranslation  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    * birthTranslation  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'nameTranslation' => 'getNameTranslation',
            'fatherNameTranslation' => 'getFatherNameTranslation',
            'nrcIdTranslation' => 'getNrcIdTranslation',
            'birthTranslation' => 'getBirthTranslation'
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
        $this->container['nameTranslation'] = isset($data['nameTranslation']) ? $data['nameTranslation'] : null;
        $this->container['fatherNameTranslation'] = isset($data['fatherNameTranslation']) ? $data['fatherNameTranslation'] : null;
        $this->container['nrcIdTranslation'] = isset($data['nrcIdTranslation']) ? $data['nrcIdTranslation'] : null;
        $this->container['birthTranslation'] = isset($data['birthTranslation']) ? $data['birthTranslation'] : null;
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
    * Gets nameTranslation
    *  名字转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return string|null
    */
    public function getNameTranslation()
    {
        return $this->container['nameTranslation'];
    }

    /**
    * Sets nameTranslation
    *
    * @param string|null $nameTranslation 名字转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return $this
    */
    public function setNameTranslation($nameTranslation)
    {
        $this->container['nameTranslation'] = $nameTranslation;
        return $this;
    }

    /**
    * Gets fatherNameTranslation
    *  父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return string|null
    */
    public function getFatherNameTranslation()
    {
        return $this->container['fatherNameTranslation'];
    }

    /**
    * Sets fatherNameTranslation
    *
    * @param string|null $fatherNameTranslation 父亲名字的转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return $this
    */
    public function setFatherNameTranslation($fatherNameTranslation)
    {
        $this->container['fatherNameTranslation'] = $fatherNameTranslation;
        return $this;
    }

    /**
    * Gets nrcIdTranslation
    *  身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return string|null
    */
    public function getNrcIdTranslation()
    {
        return $this->container['nrcIdTranslation'];
    }

    /**
    * Sets nrcIdTranslation
    *
    * @param string|null $nrcIdTranslation 身份证号码转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return $this
    */
    public function setNrcIdTranslation($nrcIdTranslation)
    {
        $this->container['nrcIdTranslation'] = $nrcIdTranslation;
        return $this;
    }

    /**
    * Gets birthTranslation
    *  出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return string|null
    */
    public function getBirthTranslation()
    {
        return $this->container['birthTranslation'];
    }

    /**
    * Sets birthTranslation
    *
    * @param string|null $birthTranslation 出生日期转译。仅当输入参数return_translation为true时，返回该字段。
    *
    * @return $this
    */
    public function setBirthTranslation($birthTranslation)
    {
        $this->container['birthTranslation'] = $birthTranslation;
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

