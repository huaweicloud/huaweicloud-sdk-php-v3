<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddHbaConfRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddHbaConfRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hbaConfs  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hbaConfs' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hbaConfs  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hbaConfs' => null
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
    * hbaConfs  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hbaConfs' => 'hba_confs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hbaConfs  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'hbaConfs' => 'setHbaConfs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hbaConfs  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'hbaConfs' => 'getHbaConfs'
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
        $this->container['hbaConfs'] = isset($data['hbaConfs']) ? $data['hbaConfs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hbaConfs'] === null) {
            $invalidProperties[] = "'hbaConfs' can't be null";
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
    * Gets hbaConfs
    *  **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfOption[]
    */
    public function getHbaConfs()
    {
        return $this->container['hbaConfs'];
    }

    /**
    * Sets hbaConfs
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\HbaConfOption[] $hbaConfs **参数解释**: 需要新增的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setHbaConfs($hbaConfs)
    {
        $this->container['hbaConfs'] = $hbaConfs;
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

