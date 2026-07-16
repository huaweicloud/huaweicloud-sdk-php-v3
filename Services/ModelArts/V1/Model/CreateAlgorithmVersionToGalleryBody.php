<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlgorithmVersionToGalleryBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlgorithmVersionToGalleryBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentId  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * contentInfo  contentInfo
    * algorithm  algorithm
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentId' => 'string',
            'contentInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ContentInfo',
            'algorithm' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentId  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * contentInfo  contentInfo
    * algorithm  algorithm
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentId' => null,
        'contentInfo' => null,
        'algorithm' => null
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
    * contentId  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * contentInfo  contentInfo
    * algorithm  algorithm
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentId' => 'content_id',
            'contentInfo' => 'content_info',
            'algorithm' => 'algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentId  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * contentInfo  contentInfo
    * algorithm  algorithm
    *
    * @var string[]
    */
    protected static $setters = [
            'contentId' => 'setContentId',
            'contentInfo' => 'setContentInfo',
            'algorithm' => 'setAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentId  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * contentInfo  contentInfo
    * algorithm  algorithm
    *
    * @var string[]
    */
    protected static $getters = [
            'contentId' => 'getContentId',
            'contentInfo' => 'getContentInfo',
            'algorithm' => 'getAlgorithm'
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
        $this->container['contentId'] = isset($data['contentId']) ? $data['contentId'] : null;
        $this->container['contentInfo'] = isset($data['contentInfo']) ? $data['contentInfo'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
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
    * Gets contentId
    *  **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
    * Sets contentId
    *
    * @param string|null $contentId **参数解释**：资产id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;
        return $this;
    }

    /**
    * Gets contentInfo
    *  contentInfo
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ContentInfo|null
    */
    public function getContentInfo()
    {
        return $this->container['contentInfo'];
    }

    /**
    * Sets contentInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ContentInfo|null $contentInfo contentInfo
    *
    * @return $this
    */
    public function setContentInfo($contentInfo)
    {
        $this->container['contentInfo'] = $contentInfo;
        return $this;
    }

    /**
    * Gets algorithm
    *  algorithm
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInfo|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AlgorithmInfo|null $algorithm algorithm
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
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

