<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdditionalManifest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdditionalManifest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manifestNameModifier  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    * selectedOutputs  选择流名列表，最多支持9路流。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manifestNameModifier' => 'string',
            'selectedOutputs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manifestNameModifier  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    * selectedOutputs  选择流名列表，最多支持9路流。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manifestNameModifier' => null,
        'selectedOutputs' => null
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
    * manifestNameModifier  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    * selectedOutputs  选择流名列表，最多支持9路流。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manifestNameModifier' => 'manifest_name_modifier',
            'selectedOutputs' => 'selected_outputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manifestNameModifier  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    * selectedOutputs  选择流名列表，最多支持9路流。
    *
    * @var string[]
    */
    protected static $setters = [
            'manifestNameModifier' => 'setManifestNameModifier',
            'selectedOutputs' => 'setSelectedOutputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manifestNameModifier  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    * selectedOutputs  选择流名列表，最多支持9路流。
    *
    * @var string[]
    */
    protected static $getters = [
            'manifestNameModifier' => 'getManifestNameModifier',
            'selectedOutputs' => 'getSelectedOutputs'
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
        $this->container['manifestNameModifier'] = isset($data['manifestNameModifier']) ? $data['manifestNameModifier'] : null;
        $this->container['selectedOutputs'] = isset($data['selectedOutputs']) ? $data['selectedOutputs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['manifestNameModifier'] === null) {
            $invalidProperties[] = "'manifestNameModifier' can't be null";
        }
            if ((mb_strlen($this->container['manifestNameModifier']) > 64)) {
                $invalidProperties[] = "invalid value for 'manifestNameModifier', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['manifestNameModifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'manifestNameModifier', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['selectedOutputs'] === null) {
            $invalidProperties[] = "'selectedOutputs' can't be null";
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
    * Gets manifestNameModifier
    *  索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    *
    * @return string
    */
    public function getManifestNameModifier()
    {
        return $this->container['manifestNameModifier'];
    }

    /**
    * Sets manifestNameModifier
    *
    * @param string $manifestNameModifier 索引后缀名，后缀名仅支持数字，字母、下划线、中划线。
    *
    * @return $this
    */
    public function setManifestNameModifier($manifestNameModifier)
    {
        $this->container['manifestNameModifier'] = $manifestNameModifier;
        return $this;
    }

    /**
    * Gets selectedOutputs
    *  选择流名列表，最多支持9路流。
    *
    * @return string[]
    */
    public function getSelectedOutputs()
    {
        return $this->container['selectedOutputs'];
    }

    /**
    * Sets selectedOutputs
    *
    * @param string[] $selectedOutputs 选择流名列表，最多支持9路流。
    *
    * @return $this
    */
    public function setSelectedOutputs($selectedOutputs)
    {
        $this->container['selectedOutputs'] = $selectedOutputs;
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

