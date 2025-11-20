<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Metadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Metadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * labels  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'labels' => 'map[string,string]',
            'annotations' => 'map[string,string]',
            'updateTimestamp' => '\DateTime',
            'creationTimestamp' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * labels  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'labels' => null,
        'annotations' => null,
        'updateTimestamp' => 'date',
        'creationTimestamp' => 'date'
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
    * uid  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * labels  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'labels' => 'labels',
            'annotations' => 'annotations',
            'updateTimestamp' => 'updateTimestamp',
            'creationTimestamp' => 'creationTimestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * labels  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'labels' => 'setLabels',
            'annotations' => 'setAnnotations',
            'updateTimestamp' => 'setUpdateTimestamp',
            'creationTimestamp' => 'setCreationTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * labels  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * annotations  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * updateTimestamp  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * creationTimestamp  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'labels' => 'getLabels',
            'annotations' => 'getAnnotations',
            'updateTimestamp' => 'getUpdateTimestamp',
            'creationTimestamp' => 'getCreationTimestamp'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
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
    * Gets uid
    *  **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid **参数解释**： 唯一id标识 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 资源名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels **参数解释**： 资源标签，key/value对格式，接口保留字段，填写不会生效 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets annotations
    *  **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations **参数解释**： 资源注解，由key/value组成 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \DateTime|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param \DateTime|null $updateTimestamp **参数解释**： 更新时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \DateTime|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param \DateTime|null $creationTimestamp **参数解释**： 创建时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
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

