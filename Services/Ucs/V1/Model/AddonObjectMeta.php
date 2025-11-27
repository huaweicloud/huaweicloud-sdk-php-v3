<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonObjectMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonObjectMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  唯一标识符
    * name  对象的名称
    * labels  对象的标签
    * annotations  对象的注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'labels' => 'map[string,string]',
            'annotations' => 'map[string,string]',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  唯一标识符
    * name  对象的名称
    * labels  对象的标签
    * annotations  对象的注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'labels' => null,
        'annotations' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null
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
    * uid  唯一标识符
    * name  对象的名称
    * labels  对象的标签
    * annotations  对象的注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'labels' => 'labels',
            'annotations' => 'annotations',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  唯一标识符
    * name  对象的名称
    * labels  对象的标签
    * annotations  对象的注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'labels' => 'setLabels',
            'annotations' => 'setAnnotations',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  唯一标识符
    * name  对象的名称
    * labels  对象的标签
    * annotations  对象的注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'labels' => 'getLabels',
            'annotations' => 'getAnnotations',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp'
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
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
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
    *  唯一标识符
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
    * @param string|null $uid 唯一标识符
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
    *  对象的名称
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
    * @param string|null $name 对象的名称
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
    *  对象的标签
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
    * @param map[string,string]|null $labels 对象的标签
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
    *  对象的注解
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
    * @param map[string,string]|null $annotations 对象的注解
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  创建时间
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
    * @param string|null $creationTimestamp 创建时间
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp 更新时间
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
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

