<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAsrVocabularyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAsrVocabularyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vocabularyType  vocabularyType
    * name  奇妙问热词表名
    * language  language
    * mobvoiVocabulary  mobvoiVocabulary
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vocabularyType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AsrVocabularyTypeEnum',
            'name' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'mobvoiVocabulary' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiVocabulary'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vocabularyType  vocabularyType
    * name  奇妙问热词表名
    * language  language
    * mobvoiVocabulary  mobvoiVocabulary
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vocabularyType' => null,
        'name' => null,
        'language' => null,
        'mobvoiVocabulary' => null
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
    * vocabularyType  vocabularyType
    * name  奇妙问热词表名
    * language  language
    * mobvoiVocabulary  mobvoiVocabulary
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vocabularyType' => 'vocabulary_type',
            'name' => 'name',
            'language' => 'language',
            'mobvoiVocabulary' => 'mobvoi_vocabulary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vocabularyType  vocabularyType
    * name  奇妙问热词表名
    * language  language
    * mobvoiVocabulary  mobvoiVocabulary
    *
    * @var string[]
    */
    protected static $setters = [
            'vocabularyType' => 'setVocabularyType',
            'name' => 'setName',
            'language' => 'setLanguage',
            'mobvoiVocabulary' => 'setMobvoiVocabulary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vocabularyType  vocabularyType
    * name  奇妙问热词表名
    * language  language
    * mobvoiVocabulary  mobvoiVocabulary
    *
    * @var string[]
    */
    protected static $getters = [
            'vocabularyType' => 'getVocabularyType',
            'name' => 'getName',
            'language' => 'getLanguage',
            'mobvoiVocabulary' => 'getMobvoiVocabulary'
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
        $this->container['vocabularyType'] = isset($data['vocabularyType']) ? $data['vocabularyType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['mobvoiVocabulary'] = isset($data['mobvoiVocabulary']) ? $data['mobvoiVocabulary'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vocabularyType'] === null) {
            $invalidProperties[] = "'vocabularyType' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets vocabularyType
    *  vocabularyType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AsrVocabularyTypeEnum
    */
    public function getVocabularyType()
    {
        return $this->container['vocabularyType'];
    }

    /**
    * Sets vocabularyType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AsrVocabularyTypeEnum $vocabularyType vocabularyType
    *
    * @return $this
    */
    public function setVocabularyType($vocabularyType)
    {
        $this->container['vocabularyType'] = $vocabularyType;
        return $this;
    }

    /**
    * Gets name
    *  奇妙问热词表名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 奇妙问热词表名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets mobvoiVocabulary
    *  mobvoiVocabulary
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiVocabulary|null
    */
    public function getMobvoiVocabulary()
    {
        return $this->container['mobvoiVocabulary'];
    }

    /**
    * Sets mobvoiVocabulary
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\MobvoiVocabulary|null $mobvoiVocabulary mobvoiVocabulary
    *
    * @return $this
    */
    public function setMobvoiVocabulary($mobvoiVocabulary)
    {
        $this->container['mobvoiVocabulary'] = $mobvoiVocabulary;
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

