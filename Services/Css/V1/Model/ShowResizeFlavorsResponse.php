<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResizeFlavorsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResizeFlavorsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    * dbname  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    * versions  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dbname' => 'string',
            'versions' => '\HuaweiCloud\SDK\Css\V1\Model\ResizeFlavorRspVersionBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    * dbname  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    * versions  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dbname' => null,
        'versions' => null
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
    * id  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    * dbname  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    * versions  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dbname' => 'dbname',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    * dbname  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    * versions  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dbname' => 'setDbname',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    * dbname  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    * versions  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dbname' => 'getDbname',
            'versions' => 'getVersions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dbname'] = isset($data['dbname']) ? $data['dbname'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
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
    * Gets id
    *  **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 引擎类型id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dbname
    *  **参数解释**： 引擎名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDbname()
    {
        return $this->container['dbname'];
    }

    /**
    * Sets dbname
    *
    * @param string|null $dbname **参数解释**： 引擎名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDbname($dbname)
    {
        $this->container['dbname'] = $dbname;
        return $this;
    }

    /**
    * Gets versions
    *  **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ResizeFlavorRspVersionBody[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ResizeFlavorRspVersionBody[]|null $versions **参数解释**： 版本列表。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

