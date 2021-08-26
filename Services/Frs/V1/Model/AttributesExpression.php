<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttributesExpression implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Attributes_expression';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    * probability  表情置信度，取值范围[0-1]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'probability' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    * probability  表情置信度，取值范围[0-1]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'probability' => 'double'
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
    * type  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    * probability  表情置信度，取值范围[0-1]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'probability' => 'probability'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    * probability  表情置信度，取值范围[0-1]。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'probability' => 'setProbability'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    * probability  表情置信度，取值范围[0-1]。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'probability' => 'getProbability'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
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
    * Gets type
    *  人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 人脸表情类型： • neutral：中性 • happy：高兴 • fear：害怕 • surprise：惊讶 • sad：伤心 • angry：生气 • disgust：厌恶 • unknown：图片质量问题导致未识别
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets probability
    *  表情置信度，取值范围[0-1]。
    *
    * @return double|null
    */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
    * Sets probability
    *
    * @param double|null $probability 表情置信度，取值范围[0-1]。
    *
    * @return $this
    */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;
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

