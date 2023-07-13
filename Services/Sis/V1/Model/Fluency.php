<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Fluency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Fluency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  流利度综合得分 0-100
    * rhythm  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    * cohesion  连贯性得分 0-100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'float',
            'rhythm' => 'float',
            'cohesion' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  流利度综合得分 0-100
    * rhythm  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    * cohesion  连贯性得分 0-100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'float',
        'rhythm' => 'float',
        'cohesion' => 'float'
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
    * score  流利度综合得分 0-100
    * rhythm  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    * cohesion  连贯性得分 0-100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'rhythm' => 'rhythm',
            'cohesion' => 'cohesion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  流利度综合得分 0-100
    * rhythm  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    * cohesion  连贯性得分 0-100
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'rhythm' => 'setRhythm',
            'cohesion' => 'setCohesion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  流利度综合得分 0-100
    * rhythm  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    * cohesion  连贯性得分 0-100
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'rhythm' => 'getRhythm',
            'cohesion' => 'getCohesion'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['rhythm'] = isset($data['rhythm']) ? $data['rhythm'] : null;
        $this->container['cohesion'] = isset($data['cohesion']) ? $data['cohesion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['rhythm'] === null) {
            $invalidProperties[] = "'rhythm' can't be null";
        }
        if ($this->container['cohesion'] === null) {
            $invalidProperties[] = "'cohesion' can't be null";
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
    * Gets score
    *  流利度综合得分 0-100
    *
    * @return float
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param float $score 流利度综合得分 0-100
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets rhythm
    *  韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    *
    * @return float
    */
    public function getRhythm()
    {
        return $this->container['rhythm'];
    }

    /**
    * Sets rhythm
    *
    * @param float $rhythm 韵律得分 0-100 韵律指音素在单词和句子中的发音长度是否得当
    *
    * @return $this
    */
    public function setRhythm($rhythm)
    {
        $this->container['rhythm'] = $rhythm;
        return $this;
    }

    /**
    * Gets cohesion
    *  连贯性得分 0-100
    *
    * @return float
    */
    public function getCohesion()
    {
        return $this->container['cohesion'];
    }

    /**
    * Sets cohesion
    *
    * @param float $cohesion 连贯性得分 0-100
    *
    * @return $this
    */
    public function setCohesion($cohesion)
    {
        $this->container['cohesion'] = $cohesion;
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

