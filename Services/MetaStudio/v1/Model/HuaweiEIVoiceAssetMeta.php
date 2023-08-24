<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HuaweiEIVoiceAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HuaweiEIVoiceAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * property  音色属性。
    * isClonedVoice  是否是克隆音色，默认是false。
    * trainingJobId  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'property' => 'string',
            'isClonedVoice' => 'bool',
            'trainingJobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * property  音色属性。
    * isClonedVoice  是否是克隆音色，默认是false。
    * trainingJobId  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'property' => null,
        'isClonedVoice' => null,
        'trainingJobId' => null
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
    * property  音色属性。
    * isClonedVoice  是否是克隆音色，默认是false。
    * trainingJobId  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'property' => 'property',
            'isClonedVoice' => 'is_cloned_voice',
            'trainingJobId' => 'training_job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * property  音色属性。
    * isClonedVoice  是否是克隆音色，默认是false。
    * trainingJobId  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'property' => 'setProperty',
            'isClonedVoice' => 'setIsClonedVoice',
            'trainingJobId' => 'setTrainingJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * property  音色属性。
    * isClonedVoice  是否是克隆音色，默认是false。
    * trainingJobId  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'property' => 'getProperty',
            'isClonedVoice' => 'getIsClonedVoice',
            'trainingJobId' => 'getTrainingJobId'
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
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['isClonedVoice'] = isset($data['isClonedVoice']) ? $data['isClonedVoice'] : null;
        $this->container['trainingJobId'] = isset($data['trainingJobId']) ? $data['trainingJobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
        }
            if ((mb_strlen($this->container['property']) > 64)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['property']) < 1)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['trainingJobId']) && (mb_strlen($this->container['trainingJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'trainingJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['trainingJobId']) && (mb_strlen($this->container['trainingJobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'trainingJobId', the character length must be bigger than or equal to 0.";
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
    * Gets property
    *  音色属性。
    *
    * @return string
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string $property 音色属性。
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets isClonedVoice
    *  是否是克隆音色，默认是false。
    *
    * @return bool|null
    */
    public function getIsClonedVoice()
    {
        return $this->container['isClonedVoice'];
    }

    /**
    * Sets isClonedVoice
    *
    * @param bool|null $isClonedVoice 是否是克隆音色，默认是false。
    *
    * @return $this
    */
    public function setIsClonedVoice($isClonedVoice)
    {
        $this->container['isClonedVoice'] = $isClonedVoice;
        return $this;
    }

    /**
    * Gets trainingJobId
    *  音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @return string|null
    */
    public function getTrainingJobId()
    {
        return $this->container['trainingJobId'];
    }

    /**
    * Sets trainingJobId
    *
    * @param string|null $trainingJobId 音色克隆时的训练任务ID。当is_cloned_voice=true时需要填写。
    *
    * @return $this
    */
    public function setTrainingJobId($trainingJobId)
    {
        $this->container['trainingJobId'] = $trainingJobId;
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

