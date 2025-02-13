<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdditionalManifests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdditionalManifests';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manifestNameModifier  定制的索引后缀名
    * selectedOutputs  选择的流名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manifestNameModifier' => 'string',
            'selectedOutputs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manifestNameModifier  定制的索引后缀名
    * selectedOutputs  选择的流名称
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
    * manifestNameModifier  定制的索引后缀名
    * selectedOutputs  选择的流名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manifestNameModifier' => 'manifest_name_modifier',
            'selectedOutputs' => 'selected_outputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manifestNameModifier  定制的索引后缀名
    * selectedOutputs  选择的流名称
    *
    * @var string[]
    */
    protected static $setters = [
            'manifestNameModifier' => 'setManifestNameModifier',
            'selectedOutputs' => 'setSelectedOutputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manifestNameModifier  定制的索引后缀名
    * selectedOutputs  选择的流名称
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
            if (!is_null($this->container['manifestNameModifier']) && (mb_strlen($this->container['manifestNameModifier']) > 64)) {
                $invalidProperties[] = "invalid value for 'manifestNameModifier', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['manifestNameModifier']) && (mb_strlen($this->container['manifestNameModifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'manifestNameModifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['manifestNameModifier']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['manifestNameModifier'])) {
                $invalidProperties[] = "invalid value for 'manifestNameModifier', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
    *  定制的索引后缀名
    *
    * @return string|null
    */
    public function getManifestNameModifier()
    {
        return $this->container['manifestNameModifier'];
    }

    /**
    * Sets manifestNameModifier
    *
    * @param string|null $manifestNameModifier 定制的索引后缀名
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
    *  选择的流名称
    *
    * @return string[]|null
    */
    public function getSelectedOutputs()
    {
        return $this->container['selectedOutputs'];
    }

    /**
    * Sets selectedOutputs
    *
    * @param string[]|null $selectedOutputs 选择的流名称
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

