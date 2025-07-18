<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDocumentAtomicInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDocumentAtomicInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * atomicUniqueKey  原子能力唯一标识：只允许字母+下划线，字母开头
    * atomicNameZh  中文名
    * atomicNameEn  英文名
    * tags  标签信息
    * inputs  原子能力入参
    * outputs  outputs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'atomicUniqueKey' => 'string',
            'atomicNameZh' => 'string',
            'atomicNameEn' => 'string',
            'tags' => 'string[]',
            'inputs' => '\HuaweiCloud\SDK\Coc\V1\Model\AtomicInputModel[]',
            'outputs' => '\HuaweiCloud\SDK\Coc\V1\Model\AtomicOutputModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * atomicUniqueKey  原子能力唯一标识：只允许字母+下划线，字母开头
    * atomicNameZh  中文名
    * atomicNameEn  英文名
    * tags  标签信息
    * inputs  原子能力入参
    * outputs  outputs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'atomicUniqueKey' => null,
        'atomicNameZh' => null,
        'atomicNameEn' => null,
        'tags' => null,
        'inputs' => null,
        'outputs' => null
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
    * atomicUniqueKey  原子能力唯一标识：只允许字母+下划线，字母开头
    * atomicNameZh  中文名
    * atomicNameEn  英文名
    * tags  标签信息
    * inputs  原子能力入参
    * outputs  outputs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'atomicUniqueKey' => 'atomic_unique_key',
            'atomicNameZh' => 'atomic_name_zh',
            'atomicNameEn' => 'atomic_name_en',
            'tags' => 'tags',
            'inputs' => 'inputs',
            'outputs' => 'outputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * atomicUniqueKey  原子能力唯一标识：只允许字母+下划线，字母开头
    * atomicNameZh  中文名
    * atomicNameEn  英文名
    * tags  标签信息
    * inputs  原子能力入参
    * outputs  outputs
    *
    * @var string[]
    */
    protected static $setters = [
            'atomicUniqueKey' => 'setAtomicUniqueKey',
            'atomicNameZh' => 'setAtomicNameZh',
            'atomicNameEn' => 'setAtomicNameEn',
            'tags' => 'setTags',
            'inputs' => 'setInputs',
            'outputs' => 'setOutputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * atomicUniqueKey  原子能力唯一标识：只允许字母+下划线，字母开头
    * atomicNameZh  中文名
    * atomicNameEn  英文名
    * tags  标签信息
    * inputs  原子能力入参
    * outputs  outputs
    *
    * @var string[]
    */
    protected static $getters = [
            'atomicUniqueKey' => 'getAtomicUniqueKey',
            'atomicNameZh' => 'getAtomicNameZh',
            'atomicNameEn' => 'getAtomicNameEn',
            'tags' => 'getTags',
            'inputs' => 'getInputs',
            'outputs' => 'getOutputs'
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
        $this->container['atomicUniqueKey'] = isset($data['atomicUniqueKey']) ? $data['atomicUniqueKey'] : null;
        $this->container['atomicNameZh'] = isset($data['atomicNameZh']) ? $data['atomicNameZh'] : null;
        $this->container['atomicNameEn'] = isset($data['atomicNameEn']) ? $data['atomicNameEn'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
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
    * Gets atomicUniqueKey
    *  原子能力唯一标识：只允许字母+下划线，字母开头
    *
    * @return string|null
    */
    public function getAtomicUniqueKey()
    {
        return $this->container['atomicUniqueKey'];
    }

    /**
    * Sets atomicUniqueKey
    *
    * @param string|null $atomicUniqueKey 原子能力唯一标识：只允许字母+下划线，字母开头
    *
    * @return $this
    */
    public function setAtomicUniqueKey($atomicUniqueKey)
    {
        $this->container['atomicUniqueKey'] = $atomicUniqueKey;
        return $this;
    }

    /**
    * Gets atomicNameZh
    *  中文名
    *
    * @return string|null
    */
    public function getAtomicNameZh()
    {
        return $this->container['atomicNameZh'];
    }

    /**
    * Sets atomicNameZh
    *
    * @param string|null $atomicNameZh 中文名
    *
    * @return $this
    */
    public function setAtomicNameZh($atomicNameZh)
    {
        $this->container['atomicNameZh'] = $atomicNameZh;
        return $this;
    }

    /**
    * Gets atomicNameEn
    *  英文名
    *
    * @return string|null
    */
    public function getAtomicNameEn()
    {
        return $this->container['atomicNameEn'];
    }

    /**
    * Sets atomicNameEn
    *
    * @param string|null $atomicNameEn 英文名
    *
    * @return $this
    */
    public function setAtomicNameEn($atomicNameEn)
    {
        $this->container['atomicNameEn'] = $atomicNameEn;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets inputs
    *  原子能力入参
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\AtomicInputModel[]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\AtomicInputModel[]|null $inputs 原子能力入参
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
        return $this;
    }

    /**
    * Gets outputs
    *  outputs
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\AtomicOutputModel|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\AtomicOutputModel|null $outputs outputs
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
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

