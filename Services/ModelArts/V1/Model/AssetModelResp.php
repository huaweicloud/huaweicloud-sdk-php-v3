<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetModelResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetModelResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：模型id。 **取值范围**：不涉及。
    * name  **参数解释**：模型名称。 **取值范围**：不涉及。
    * code  **参数解释**：模型名称。 **取值范围**：不涉及。
    * version  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    * location  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    * desc  **参数解释**：模型描述。 **取值范围**：不涉及。
    * series  **参数解释**：模型品牌。 **取值范围**：不涉及。
    * type  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'code' => 'string',
            'version' => 'string',
            'location' => 'string',
            'desc' => 'string',
            'series' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：模型id。 **取值范围**：不涉及。
    * name  **参数解释**：模型名称。 **取值范围**：不涉及。
    * code  **参数解释**：模型名称。 **取值范围**：不涉及。
    * version  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    * location  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    * desc  **参数解释**：模型描述。 **取值范围**：不涉及。
    * series  **参数解释**：模型品牌。 **取值范围**：不涉及。
    * type  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'version' => null,
        'location' => null,
        'desc' => null,
        'series' => null,
        'type' => null
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
    * id  **参数解释**：模型id。 **取值范围**：不涉及。
    * name  **参数解释**：模型名称。 **取值范围**：不涉及。
    * code  **参数解释**：模型名称。 **取值范围**：不涉及。
    * version  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    * location  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    * desc  **参数解释**：模型描述。 **取值范围**：不涉及。
    * series  **参数解释**：模型品牌。 **取值范围**：不涉及。
    * type  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'code' => 'code',
            'version' => 'version',
            'location' => 'location',
            'desc' => 'desc',
            'series' => 'series',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：模型id。 **取值范围**：不涉及。
    * name  **参数解释**：模型名称。 **取值范围**：不涉及。
    * code  **参数解释**：模型名称。 **取值范围**：不涉及。
    * version  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    * location  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    * desc  **参数解释**：模型描述。 **取值范围**：不涉及。
    * series  **参数解释**：模型品牌。 **取值范围**：不涉及。
    * type  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'code' => 'setCode',
            'version' => 'setVersion',
            'location' => 'setLocation',
            'desc' => 'setDesc',
            'series' => 'setSeries',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：模型id。 **取值范围**：不涉及。
    * name  **参数解释**：模型名称。 **取值范围**：不涉及。
    * code  **参数解释**：模型名称。 **取值范围**：不涉及。
    * version  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    * location  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    * desc  **参数解释**：模型描述。 **取值范围**：不涉及。
    * series  **参数解释**：模型品牌。 **取值范围**：不涉及。
    * type  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'code' => 'getCode',
            'version' => 'getVersion',
            'location' => 'getLocation',
            'desc' => 'getDesc',
            'series' => 'getSeries',
            'type' => 'getType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets id
    *  **参数解释**：模型id。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：模型id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：模型名称。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：模型名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**：模型名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**：模型名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**：模型发布版本。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**：模型发布版本。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets location
    *  **参数解释**：模型发布地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location **参数解释**：模型发布地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**：模型描述。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**：模型描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets series
    *  **参数解释**：模型品牌。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
    * Sets series
    *
    * @param string|null $series **参数解释**：模型品牌。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSeries($series)
    {
        $this->container['series'] = $series;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：模型类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

