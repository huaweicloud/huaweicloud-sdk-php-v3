<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeconfigSpecConfigsImageWarmUp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeconfigSpec_configs_image_warm_up';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creationTimestamp  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    * type  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    * image  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'creationTimestamp' => 'string',
            'type' => 'string',
            'image' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creationTimestamp  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    * type  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    * image  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'creationTimestamp' => null,
        'type' => null,
        'image' => null
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
    * id  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creationTimestamp  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    * type  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    * image  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'creationTimestamp' => 'creationTimestamp',
            'type' => 'type',
            'image' => 'image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creationTimestamp  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    * type  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    * image  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'creationTimestamp' => 'setCreationTimestamp',
            'type' => 'setType',
            'image' => 'setImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creationTimestamp  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    * type  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    * image  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'creationTimestamp' => 'getCreationTimestamp',
            'type' => 'getType',
            'image' => 'getImage'
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
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
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
    *  **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $id **参数解释**：镜像预热任务ID。 **约束限制**：系统自动生成。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：镜像预热任务名称。 **约束限制**：由4~32位小写字母、数字或\"-\"组成。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp **参数解释**：镜像预热任务的创建时间。 **约束限制**：系统自动填充。 **取值范围**：RFC3339格式时间。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：镜像类型。 **约束限制**：不涉及。 **取值范围**：SWR。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets image
    *  **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image **参数解释**：需要预热的镜像地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
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

