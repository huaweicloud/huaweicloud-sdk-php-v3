<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunImageBatchModerationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunImageBatchModerationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addMember  addMember
    *
    * @var string[]
    */
    protected static $openAPITypes = [
        'urls' => 'string[]',
        'categories' => 'string[]',
        'adCategories' => 'string[]',
        'threshold' => 'double',
        'moderationRule' => 'string',
        'showOcrText' => 'bool',
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addMember  addMember
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'urls' => null,
        'categories' => null,
        'adCategories' => null,
        'threshold' => null,
        'moderationRule' => null,
        'showOcrText' => null,
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
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'urls' => 'urls',
        'categories' => 'categories',
        'adCategories' => 'ad_categories',
        'threshold' => 'threshold',
        'moderationRule' => 'moderation_rule',
        'showOcrText' => 'show_ocr_text',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urls' => 'setUrls',
        'categories' => 'setCategories',
        'adCategories' => 'setAdCategories',
        'threshold' => 'setThreshold',
        'moderationRule' => 'setModerationRule',
        'showOcrText' => 'setShowOcrText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urls' => 'getUrls',
        'categories' => 'getCategories',
        'adCategories' => 'getAdCategories',
        'threshold' => 'getThreshold',
        'moderationRule' => 'getModerationRule',
        'showOcrText' => 'getShowOcrText',
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
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['adCategories'] = isset($data['adCategories']) ? $data['adCategories'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['moderationRule'] = isset($data['moderationRule']) ? $data['moderationRule'] : null;
        $this->container['showOcrText'] = isset($data['showOcrText']) ? $data['showOcrText'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
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
     * @return string
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * @param string $urls 图片 url。
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * @param string $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdCategories()
    {
        return $this->container['adCategories'];
    }

    /**
     * @param string $categories
     *
     * @return $this
     */
    public function setAdCategories($adCategories)
    {
        $this->container['adCategories'] = $adCategories;
        return $this;
    }

    /**
     * @return string
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * @param string $categories
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
     * @return string
     */
    public function getModerationRule()
    {
        return $this->container['moderationRule'];
    }

    /**
     * @param string $categories
     *
     * @return $this
     */
    public function setModerationRule($moderationRule)
    {
        $this->container['moderationRule'] = $moderationRule;
        return $this;
    }

    /**
     * @return string
     */
    public function getShowOcrText()
    {
        return $this->container['showOcrText'];
    }

    /**
     * @param string $categories
     *
     * @return $this
     */
    public function setShowOcrText($showOcrText)
    {
        $this->container['showOcrText'] = $showOcrText;
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

