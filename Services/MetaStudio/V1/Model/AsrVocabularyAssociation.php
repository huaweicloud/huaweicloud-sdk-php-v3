<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AsrVocabularyAssociation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AsrVocabularyAssociation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hotWordsId  热词记录ID
    * vocabularyId  热词表ID
    * robotId  应用ID。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hotWordsId' => 'string',
            'vocabularyId' => 'string',
            'robotId' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hotWordsId  热词记录ID
    * vocabularyId  热词表ID
    * robotId  应用ID。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hotWordsId' => null,
        'vocabularyId' => null,
        'robotId' => null,
        'language' => null
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
    * hotWordsId  热词记录ID
    * vocabularyId  热词表ID
    * robotId  应用ID。
    * language  language
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hotWordsId' => 'hot_words_id',
            'vocabularyId' => 'vocabulary_id',
            'robotId' => 'robot_id',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hotWordsId  热词记录ID
    * vocabularyId  热词表ID
    * robotId  应用ID。
    * language  language
    *
    * @var string[]
    */
    protected static $setters = [
            'hotWordsId' => 'setHotWordsId',
            'vocabularyId' => 'setVocabularyId',
            'robotId' => 'setRobotId',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hotWordsId  热词记录ID
    * vocabularyId  热词表ID
    * robotId  应用ID。
    * language  language
    *
    * @var string[]
    */
    protected static $getters = [
            'hotWordsId' => 'getHotWordsId',
            'vocabularyId' => 'getVocabularyId',
            'robotId' => 'getRobotId',
            'language' => 'getLanguage'
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
        $this->container['hotWordsId'] = isset($data['hotWordsId']) ? $data['hotWordsId'] : null;
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hotWordsId']) && (mb_strlen($this->container['hotWordsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hotWordsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hotWordsId']) && (mb_strlen($this->container['hotWordsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hotWordsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
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
    * Gets hotWordsId
    *  热词记录ID
    *
    * @return string|null
    */
    public function getHotWordsId()
    {
        return $this->container['hotWordsId'];
    }

    /**
    * Sets hotWordsId
    *
    * @param string|null $hotWordsId 热词记录ID
    *
    * @return $this
    */
    public function setHotWordsId($hotWordsId)
    {
        $this->container['hotWordsId'] = $hotWordsId;
        return $this;
    }

    /**
    * Gets vocabularyId
    *  热词表ID
    *
    * @return string|null
    */
    public function getVocabularyId()
    {
        return $this->container['vocabularyId'];
    }

    /**
    * Sets vocabularyId
    *
    * @param string|null $vocabularyId 热词表ID
    *
    * @return $this
    */
    public function setVocabularyId($vocabularyId)
    {
        $this->container['vocabularyId'] = $vocabularyId;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

