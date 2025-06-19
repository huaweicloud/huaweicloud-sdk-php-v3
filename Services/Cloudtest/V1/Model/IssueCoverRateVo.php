<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueCoverRateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueCoverRateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epic  epic
    * feature  feature
    * story  story
    * summary  summary
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epic' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo',
            'feature' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo',
            'story' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo',
            'summary' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epic  epic
    * feature  feature
    * story  story
    * summary  summary
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epic' => null,
        'feature' => null,
        'story' => null,
        'summary' => null
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
    * epic  epic
    * feature  feature
    * story  story
    * summary  summary
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epic' => 'epic',
            'feature' => 'feature',
            'story' => 'story',
            'summary' => 'summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epic  epic
    * feature  feature
    * story  story
    * summary  summary
    *
    * @var string[]
    */
    protected static $setters = [
            'epic' => 'setEpic',
            'feature' => 'setFeature',
            'story' => 'setStory',
            'summary' => 'setSummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epic  epic
    * feature  feature
    * story  story
    * summary  summary
    *
    * @var string[]
    */
    protected static $getters = [
            'epic' => 'getEpic',
            'feature' => 'getFeature',
            'story' => 'getStory',
            'summary' => 'getSummary'
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
        $this->container['epic'] = isset($data['epic']) ? $data['epic'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['story'] = isset($data['story']) ? $data['story'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
    * Gets epic
    *  epic
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null
    */
    public function getEpic()
    {
        return $this->container['epic'];
    }

    /**
    * Sets epic
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null $epic epic
    *
    * @return $this
    */
    public function setEpic($epic)
    {
        $this->container['epic'] = $epic;
        return $this;
    }

    /**
    * Gets feature
    *  feature
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null $feature feature
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets story
    *  story
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null
    */
    public function getStory()
    {
        return $this->container['story'];
    }

    /**
    * Sets story
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null $story story
    *
    * @return $this
    */
    public function setStory($story)
    {
        $this->container['story'] = $story;
        return $this;
    }

    /**
    * Gets summary
    *  summary
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CoverRateVo|null $summary summary
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
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

