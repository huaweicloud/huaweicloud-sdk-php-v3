<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchemaVolumeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchemaVolumeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaSize  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    * tableCount  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    * userName  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    * nspName  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaSize' => 'string',
            'tableCount' => 'string',
            'userName' => 'string',
            'nspName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaSize  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    * tableCount  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    * userName  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    * nspName  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaSize' => null,
        'tableCount' => null,
        'userName' => null,
        'nspName' => null
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
    * schemaSize  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    * tableCount  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    * userName  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    * nspName  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaSize' => 'schema_size',
            'tableCount' => 'table_count',
            'userName' => 'user_name',
            'nspName' => 'nsp_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaSize  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    * tableCount  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    * userName  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    * nspName  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaSize' => 'setSchemaSize',
            'tableCount' => 'setTableCount',
            'userName' => 'setUserName',
            'nspName' => 'setNspName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaSize  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    * tableCount  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    * userName  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    * nspName  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaSize' => 'getSchemaSize',
            'tableCount' => 'getTableCount',
            'userName' => 'getUserName',
            'nspName' => 'getNspName'
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
        $this->container['schemaSize'] = isset($data['schemaSize']) ? $data['schemaSize'] : null;
        $this->container['tableCount'] = isset($data['tableCount']) ? $data['tableCount'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['nspName'] = isset($data['nspName']) ? $data['nspName'] : null;
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
    * Gets schemaSize
    *  **参数解释**: schema的大小。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSchemaSize()
    {
        return $this->container['schemaSize'];
    }

    /**
    * Sets schemaSize
    *
    * @param string|null $schemaSize **参数解释**: schema的大小。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaSize($schemaSize)
    {
        $this->container['schemaSize'] = $schemaSize;
        return $this;
    }

    /**
    * Gets tableCount
    *  **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTableCount()
    {
        return $this->container['tableCount'];
    }

    /**
    * Sets tableCount
    *
    * @param string|null $tableCount **参数解释**: schema拥有的表数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTableCount($tableCount)
    {
        $this->container['tableCount'] = $tableCount;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: schema所属用户名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets nspName
    *  **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNspName()
    {
        return $this->container['nspName'];
    }

    /**
    * Sets nspName
    *
    * @param string|null $nspName **参数解释**: schema名称空间的名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNspName($nspName)
    {
        $this->container['nspName'] = $nspName;
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

