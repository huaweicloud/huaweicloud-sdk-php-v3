<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSisHotWords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSisHotWords';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vocabularyId  热词ID。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vocabularyId' => 'string',
            'sisProjectId' => 'string',
            'region' => 'int',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vocabularyId  热词ID。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vocabularyId' => null,
        'sisProjectId' => null,
        'region' => null,
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
    * vocabularyId  热词ID。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vocabularyId' => 'vocabulary_id',
            'sisProjectId' => 'sis_project_id',
            'region' => 'region',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vocabularyId  热词ID。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    *
    * @var string[]
    */
    protected static $setters = [
            'vocabularyId' => 'setVocabularyId',
            'sisProjectId' => 'setSisProjectId',
            'region' => 'setRegion',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vocabularyId  热词ID。
    * sisProjectId  SIS服务所在区域projectId
    * region  对接SIS服务的区域。 > 0：北京四；3：上海一；
    * language  language
    *
    * @var string[]
    */
    protected static $getters = [
            'vocabularyId' => 'getVocabularyId',
            'sisProjectId' => 'getSisProjectId',
            'region' => 'getRegion',
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
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vocabularyId']) && (mb_strlen($this->container['vocabularyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vocabularyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] > 32)) {
                $invalidProperties[] = "invalid value for 'region', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] < 0)) {
                $invalidProperties[] = "invalid value for 'region', must be bigger than or equal to 0.";
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
    * Gets vocabularyId
    *  热词ID。
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
    * @param string|null $vocabularyId 热词ID。
    *
    * @return $this
    */
    public function setVocabularyId($vocabularyId)
    {
        $this->container['vocabularyId'] = $vocabularyId;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS服务所在区域projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS服务所在区域projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
        return $this;
    }

    /**
    * Gets region
    *  对接SIS服务的区域。 > 0：北京四；3：上海一；
    *
    * @return int|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param int|null $region 对接SIS服务的区域。 > 0：北京四；3：上海一；
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

