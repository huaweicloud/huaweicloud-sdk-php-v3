<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimK  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    * dimV  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimK' => 'string',
            'dimV' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimK  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    * dimV  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimK' => null,
        'dimV' => null
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
    * dimK  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    * dimV  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimK' => 'dim_k',
            'dimV' => 'dim_v'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimK  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    * dimV  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimK' => 'setDimK',
            'dimV' => 'setDimV'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimK  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    * dimV  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimK' => 'getDimK',
            'dimV' => 'getDimV'
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
        $this->container['dimK'] = isset($data['dimK']) ? $data['dimK'] : null;
        $this->container['dimV'] = isset($data['dimV']) ? $data['dimV'] : null;
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
    * Gets dimK
    *  **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDimK()
    {
        return $this->container['dimK'];
    }

    /**
    * Sets dimK
    *
    * @param string|null $dimK **参数解释**： CES监控维度路由。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDimK($dimK)
    {
        $this->container['dimK'] = $dimK;
        return $this;
    }

    /**
    * Gets dimV
    *  **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDimV()
    {
        return $this->container['dimV'];
    }

    /**
    * Sets dimV
    *
    * @param string|null $dimV **参数解释**： CES监控维度ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDimV($dimV)
    {
        $this->container['dimV'] = $dimV;
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

