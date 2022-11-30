<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunModerationAudioResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunModerationAudioResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * detail  detail
    * suggestion  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'detail' => '\HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetail',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * detail  detail
    * suggestion  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'detail' => null,
        'suggestion' => null
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
    * detail  detail
    * suggestion  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'detail' => 'detail',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * detail  detail
    * suggestion  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @var string[]
    */
    protected static $setters = [
            'detail' => 'setDetail',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * detail  detail
    * suggestion  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @var string[]
    */
    protected static $getters = [
            'detail' => 'getDetail',
            'suggestion' => 'getSuggestion'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
    * Gets detail
    *  detail
    *
    * @return \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetail|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetail|null $detail detail
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets suggestion
    *  检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 检测结果是否通过。 block：包含敏感信息，不通过。 pass：不包含敏感信息，通过。 review：需要人工复查
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

