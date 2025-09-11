<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyHbaConfRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyHbaConfRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beforeConfs  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    * afterConfs  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beforeConfs' => 'object',
            'afterConfs' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beforeConfs  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    * afterConfs  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beforeConfs' => null,
        'afterConfs' => null
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
    * beforeConfs  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    * afterConfs  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beforeConfs' => 'before_confs',
            'afterConfs' => 'after_confs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beforeConfs  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    * afterConfs  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'beforeConfs' => 'setBeforeConfs',
            'afterConfs' => 'setAfterConfs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beforeConfs  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    * afterConfs  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'beforeConfs' => 'getBeforeConfs',
            'afterConfs' => 'getAfterConfs'
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
        $this->container['beforeConfs'] = isset($data['beforeConfs']) ? $data['beforeConfs'] : null;
        $this->container['afterConfs'] = isset($data['afterConfs']) ? $data['afterConfs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['beforeConfs'] === null) {
            $invalidProperties[] = "'beforeConfs' can't be null";
        }
        if ($this->container['afterConfs'] === null) {
            $invalidProperties[] = "'afterConfs' can't be null";
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
    * Gets beforeConfs
    *  **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return object
    */
    public function getBeforeConfs()
    {
        return $this->container['beforeConfs'];
    }

    /**
    * Sets beforeConfs
    *
    * @param object $beforeConfs **参数解释**: 需要修改的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setBeforeConfs($beforeConfs)
    {
        $this->container['beforeConfs'] = $beforeConfs;
        return $this;
    }

    /**
    * Gets afterConfs
    *  **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return object
    */
    public function getAfterConfs()
    {
        return $this->container['afterConfs'];
    }

    /**
    * Sets afterConfs
    *
    * @param object $afterConfs **参数解释**: 修改后的hba配置信息。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setAfterConfs($afterConfs)
    {
        $this->container['afterConfs'] = $afterConfs;
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

