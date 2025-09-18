<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NewExtensionDataSourceBindings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NewExtension_data_source_bindings';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * target  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * dataSourceName  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'target' => 'string',
            'endpointId' => 'string',
            'dataSourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * target  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * dataSourceName  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'target' => null,
        'endpointId' => null,
        'dataSourceName' => null
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
    * target  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * dataSourceName  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'target' => 'target',
            'endpointId' => 'endpointId',
            'dataSourceName' => 'data_source_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * target  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * dataSourceName  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'target' => 'setTarget',
            'endpointId' => 'setEndpointId',
            'dataSourceName' => 'setDataSourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * target  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    * endpointId  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    * dataSourceName  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'target' => 'getTarget',
            'endpointId' => 'getEndpointId',
            'dataSourceName' => 'getDataSourceName'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['dataSourceName'] = isset($data['dataSourceName']) ? $data['dataSourceName'] : null;
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
    * Gets target
    *  **参数解释**： 目标地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target **参数解释**： 目标地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets endpointId
    *  **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
    * Sets endpointId
    *
    * @param string|null $endpointId **参数解释**： 扩展点id。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets dataSourceName
    *  **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDataSourceName()
    {
        return $this->container['dataSourceName'];
    }

    /**
    * Sets dataSourceName
    *
    * @param string|null $dataSourceName **参数解释**： 数据源绑定名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDataSourceName($dataSourceName)
    {
        $this->container['dataSourceName'] = $dataSourceName;
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

