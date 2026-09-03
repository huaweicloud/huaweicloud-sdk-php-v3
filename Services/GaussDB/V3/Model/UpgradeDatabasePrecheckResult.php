<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeDatabasePrecheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeDatabasePrecheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkItem  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    * checkDescription  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    * checkObject  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    * checkStatus  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkItem' => 'string',
            'checkDescription' => 'string',
            'checkObject' => 'string',
            'checkStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkItem  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    * checkDescription  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    * checkObject  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    * checkStatus  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkItem' => null,
        'checkDescription' => null,
        'checkObject' => null,
        'checkStatus' => null
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
    * checkItem  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    * checkDescription  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    * checkObject  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    * checkStatus  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkItem' => 'check_item',
            'checkDescription' => 'check_description',
            'checkObject' => 'check_object',
            'checkStatus' => 'check_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkItem  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    * checkDescription  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    * checkObject  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    * checkStatus  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'checkItem' => 'setCheckItem',
            'checkDescription' => 'setCheckDescription',
            'checkObject' => 'setCheckObject',
            'checkStatus' => 'setCheckStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkItem  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    * checkDescription  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    * checkObject  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    * checkStatus  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'checkItem' => 'getCheckItem',
            'checkDescription' => 'getCheckDescription',
            'checkObject' => 'getCheckObject',
            'checkStatus' => 'getCheckStatus'
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
        $this->container['checkItem'] = isset($data['checkItem']) ? $data['checkItem'] : null;
        $this->container['checkDescription'] = isset($data['checkDescription']) ? $data['checkDescription'] : null;
        $this->container['checkObject'] = isset($data['checkObject']) ? $data['checkObject'] : null;
        $this->container['checkStatus'] = isset($data['checkStatus']) ? $data['checkStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checkItem'] === null) {
            $invalidProperties[] = "'checkItem' can't be null";
        }
        if ($this->container['checkDescription'] === null) {
            $invalidProperties[] = "'checkDescription' can't be null";
        }
        if ($this->container['checkObject'] === null) {
            $invalidProperties[] = "'checkObject' can't be null";
        }
        if ($this->container['checkStatus'] === null) {
            $invalidProperties[] = "'checkStatus' can't be null";
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
    * Gets checkItem
    *  **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    *
    * @return string
    */
    public function getCheckItem()
    {
        return $this->container['checkItem'];
    }

    /**
    * Sets checkItem
    *
    * @param string $checkItem **参数解释**：  升级预检查项目。  **取值范围**：  - Upgrade permission check：升级权限检查。 - Instance version check：实例源版本检查。 - Resource check：资源检查。 - Upgrade feature compatibility check：升级特性兼容性检查。
    *
    * @return $this
    */
    public function setCheckItem($checkItem)
    {
        $this->container['checkItem'] = $checkItem;
        return $this;
    }

    /**
    * Gets checkDescription
    *  **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getCheckDescription()
    {
        return $this->container['checkDescription'];
    }

    /**
    * Sets checkDescription
    *
    * @param string $checkDescription **参数解释**：  升级预检查项说明。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCheckDescription($checkDescription)
    {
        $this->container['checkDescription'] = $checkDescription;
        return $this;
    }

    /**
    * Gets checkObject
    *  **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getCheckObject()
    {
        return $this->container['checkObject'];
    }

    /**
    * Sets checkObject
    *
    * @param string $checkObject **参数解释**：  升级预检查对象。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCheckObject($checkObject)
    {
        $this->container['checkObject'] = $checkObject;
        return $this;
    }

    /**
    * Gets checkStatus
    *  **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @return string
    */
    public function getCheckStatus()
    {
        return $this->container['checkStatus'];
    }

    /**
    * Sets checkStatus
    *
    * @param string $checkStatus **参数解释**：  升级预检查项的检查状态。  **取值范围**：  - passed：检查通过。 - failed：检查失败。
    *
    * @return $this
    */
    public function setCheckStatus($checkStatus)
    {
        $this->container['checkStatus'] = $checkStatus;
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

