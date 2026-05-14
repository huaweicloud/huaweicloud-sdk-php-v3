<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssetEditTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssetEditTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputs  待编辑媒资列表，最多支持20个。
    * editingSettings  editingSettings
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputs' => '\HuaweiCloud\SDK\Vod\V1\Model\EditInput[]',
            'editingSettings' => '\HuaweiCloud\SDK\Vod\V1\Model\VodEditingSetting'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputs  待编辑媒资列表，最多支持20个。
    * editingSettings  editingSettings
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputs' => null,
        'editingSettings' => null
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
    * inputs  待编辑媒资列表，最多支持20个。
    * editingSettings  editingSettings
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputs' => 'inputs',
            'editingSettings' => 'editing_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputs  待编辑媒资列表，最多支持20个。
    * editingSettings  editingSettings
    *
    * @var string[]
    */
    protected static $setters = [
            'inputs' => 'setInputs',
            'editingSettings' => 'setEditingSettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputs  待编辑媒资列表，最多支持20个。
    * editingSettings  editingSettings
    *
    * @var string[]
    */
    protected static $getters = [
            'inputs' => 'getInputs',
            'editingSettings' => 'getEditingSettings'
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
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['editingSettings'] = isset($data['editingSettings']) ? $data['editingSettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
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
    * Gets inputs
    *  待编辑媒资列表，最多支持20个。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\EditInput[]
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\EditInput[] $inputs 待编辑媒资列表，最多支持20个。
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets editingSettings
    *  editingSettings
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\VodEditingSetting|null
    */
    public function getEditingSettings()
    {
        return $this->container['editingSettings'];
    }

    /**
    * Sets editingSettings
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\VodEditingSetting|null $editingSettings editingSettings
    *
    * @return $this
    */
    public function setEditingSettings($editingSettings)
    {
        $this->container['editingSettings'] = $editingSettings;
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

