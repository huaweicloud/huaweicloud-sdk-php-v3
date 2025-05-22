<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * vcpus  **参数解释**： CPU数。 **取值范围**： 不涉及。
    * ram  **参数解释**： 内存数。 **取值范围**： 不涉及。
    * isCurrentFlavor  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'isCurrentFlavor' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * vcpus  **参数解释**： CPU数。 **取值范围**： 不涉及。
    * ram  **参数解释**： 内存数。 **取值范围**： 不涉及。
    * isCurrentFlavor  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vcpus' => null,
        'ram' => null,
        'isCurrentFlavor' => null
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
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * vcpus  **参数解释**： CPU数。 **取值范围**： 不涉及。
    * ram  **参数解释**： 内存数。 **取值范围**： 不涉及。
    * isCurrentFlavor  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'isCurrentFlavor' => 'is_current_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * vcpus  **参数解释**： CPU数。 **取值范围**： 不涉及。
    * ram  **参数解释**： 内存数。 **取值范围**： 不涉及。
    * isCurrentFlavor  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'isCurrentFlavor' => 'setIsCurrentFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * vcpus  **参数解释**： CPU数。 **取值范围**： 不涉及。
    * ram  **参数解释**： 内存数。 **取值范围**： 不涉及。
    * isCurrentFlavor  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'isCurrentFlavor' => 'getIsCurrentFlavor'
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
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['isCurrentFlavor'] = isset($data['isCurrentFlavor']) ? $data['isCurrentFlavor'] : null;
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
    *  **参数解释**： 规格ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 规格ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vcpus
    *  **参数解释**： CPU数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus **参数解释**： CPU数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  **参数解释**： 内存数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram **参数解释**： 内存数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets isCurrentFlavor
    *  **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsCurrentFlavor()
    {
        return $this->container['isCurrentFlavor'];
    }

    /**
    * Sets isCurrentFlavor
    *
    * @param bool|null $isCurrentFlavor **参数解释**： 是否是当前规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsCurrentFlavor($isCurrentFlavor)
    {
        $this->container['isCurrentFlavor'] = $isCurrentFlavor;
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

