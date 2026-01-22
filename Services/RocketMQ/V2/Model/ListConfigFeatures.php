<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigFeatures implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigFeatures';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * featureId  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    * status  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    * description  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'featureId' => 'string',
            'status' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * featureId  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    * status  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    * description  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'featureId' => null,
        'status' => null,
        'description' => null
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
    * featureId  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    * status  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    * description  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'featureId' => 'featureId',
            'status' => 'status',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * featureId  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    * status  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    * description  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'featureId' => 'setFeatureId',
            'status' => 'setStatus',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * featureId  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    * status  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    * description  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'featureId' => 'getFeatureId',
            'status' => 'getStatus',
            'description' => 'getDescription'
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
        $this->container['featureId'] = isset($data['featureId']) ? $data['featureId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets featureId
    *  **参数解释**： 特性ID。     **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFeatureId()
    {
        return $this->container['featureId'];
    }

    /**
    * Sets featureId
    *
    * @param string|null $featureId **参数解释**： 特性ID。     **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFeatureId($featureId)
    {
        $this->container['featureId'] = $featureId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 状态。  **取值范围**： - 1：特性开启。 - 0：特性关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 特性描述。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

