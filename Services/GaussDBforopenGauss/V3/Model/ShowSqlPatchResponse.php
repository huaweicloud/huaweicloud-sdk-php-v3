<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlPatchResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlPatchResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * patchName  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    * hint  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    * patchStatus  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'patchName' => 'string',
            'hint' => 'string',
            'patchStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * patchName  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    * hint  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    * patchStatus  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'patchName' => null,
        'hint' => null,
        'patchStatus' => null
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
    * patchName  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    * hint  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    * patchStatus  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'patchName' => 'patch_name',
            'hint' => 'hint',
            'patchStatus' => 'patch_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * patchName  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    * hint  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    * patchStatus  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @var string[]
    */
    protected static $setters = [
            'patchName' => 'setPatchName',
            'hint' => 'setHint',
            'patchStatus' => 'setPatchStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * patchName  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    * hint  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    * patchStatus  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @var string[]
    */
    protected static $getters = [
            'patchName' => 'getPatchName',
            'hint' => 'getHint',
            'patchStatus' => 'getPatchStatus'
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
        $this->container['patchName'] = isset($data['patchName']) ? $data['patchName'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['patchStatus'] = isset($data['patchStatus']) ? $data['patchStatus'] : null;
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
    * Gets patchName
    *  **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPatchName()
    {
        return $this->container['patchName'];
    }

    /**
    * Sets patchName
    *
    * @param string|null $patchName **参数解释**: PATCH名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPatchName($patchName)
    {
        $this->container['patchName'] = $patchName;
        return $this;
    }

    /**
    * Gets hint
    *  **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
    * Sets hint
    *
    * @param string|null $hint **参数解释**: PATCH内容（Hint文本）。对于abort 类型的SQL PATCH此字段为空。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;
        return $this;
    }

    /**
    * Gets patchStatus
    *  **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @return string|null
    */
    public function getPatchStatus()
    {
        return $this->container['patchStatus'];
    }

    /**
    * Sets patchStatus
    *
    * @param string|null $patchStatus **参数解释**: PATCH状态。 **取值范围**: - enabled：表示SQL PATCH生效。 - disabled：表示SQL PATCH失效。
    *
    * @return $this
    */
    public function setPatchStatus($patchStatus)
    {
        $this->container['patchStatus'] = $patchStatus;
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

