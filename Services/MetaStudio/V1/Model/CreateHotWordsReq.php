<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHotWordsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHotWordsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hotWordsType  hotWordsType
    * robotId  应用ID。
    * sisHotWords  sisHotWords
    * mobvoiHotWords  mobvoiHotWords
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hotWordsType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum',
            'robotId' => 'string',
            'sisHotWords' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSisHotWords',
            'mobvoiHotWords' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMobvoiHotWords'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hotWordsType  hotWordsType
    * robotId  应用ID。
    * sisHotWords  sisHotWords
    * mobvoiHotWords  mobvoiHotWords
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hotWordsType' => null,
        'robotId' => null,
        'sisHotWords' => null,
        'mobvoiHotWords' => null
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
    * hotWordsType  hotWordsType
    * robotId  应用ID。
    * sisHotWords  sisHotWords
    * mobvoiHotWords  mobvoiHotWords
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hotWordsType' => 'hot_words_type',
            'robotId' => 'robot_id',
            'sisHotWords' => 'sis_hot_words',
            'mobvoiHotWords' => 'mobvoi_hot_words'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hotWordsType  hotWordsType
    * robotId  应用ID。
    * sisHotWords  sisHotWords
    * mobvoiHotWords  mobvoiHotWords
    *
    * @var string[]
    */
    protected static $setters = [
            'hotWordsType' => 'setHotWordsType',
            'robotId' => 'setRobotId',
            'sisHotWords' => 'setSisHotWords',
            'mobvoiHotWords' => 'setMobvoiHotWords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hotWordsType  hotWordsType
    * robotId  应用ID。
    * sisHotWords  sisHotWords
    * mobvoiHotWords  mobvoiHotWords
    *
    * @var string[]
    */
    protected static $getters = [
            'hotWordsType' => 'getHotWordsType',
            'robotId' => 'getRobotId',
            'sisHotWords' => 'getSisHotWords',
            'mobvoiHotWords' => 'getMobvoiHotWords'
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
        $this->container['hotWordsType'] = isset($data['hotWordsType']) ? $data['hotWordsType'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['sisHotWords'] = isset($data['sisHotWords']) ? $data['sisHotWords'] : null;
        $this->container['mobvoiHotWords'] = isset($data['mobvoiHotWords']) ? $data['mobvoiHotWords'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hotWordsType'] === null) {
            $invalidProperties[] = "'hotWordsType' can't be null";
        }
        if ($this->container['robotId'] === null) {
            $invalidProperties[] = "'robotId' can't be null";
        }
            if ((mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['robotId']) < 1)) {
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
    * Gets hotWordsType
    *  hotWordsType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum
    */
    public function getHotWordsType()
    {
        return $this->container['hotWordsType'];
    }

    /**
    * Sets hotWordsType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HotWordsTypeEnum $hotWordsType hotWordsType
    *
    * @return $this
    */
    public function setHotWordsType($hotWordsType)
    {
        $this->container['hotWordsType'] = $hotWordsType;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets sisHotWords
    *  sisHotWords
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSisHotWords|null
    */
    public function getSisHotWords()
    {
        return $this->container['sisHotWords'];
    }

    /**
    * Sets sisHotWords
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateSisHotWords|null $sisHotWords sisHotWords
    *
    * @return $this
    */
    public function setSisHotWords($sisHotWords)
    {
        $this->container['sisHotWords'] = $sisHotWords;
        return $this;
    }

    /**
    * Gets mobvoiHotWords
    *  mobvoiHotWords
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMobvoiHotWords|null
    */
    public function getMobvoiHotWords()
    {
        return $this->container['mobvoiHotWords'];
    }

    /**
    * Sets mobvoiHotWords
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CreateMobvoiHotWords|null $mobvoiHotWords mobvoiHotWords
    *
    * @return $this
    */
    public function setMobvoiHotWords($mobvoiHotWords)
    {
        $this->container['mobvoiHotWords'] = $mobvoiHotWords;
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

