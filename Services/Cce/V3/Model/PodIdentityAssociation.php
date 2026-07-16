<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PodIdentityAssociation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PodIdentityAssociation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    * serviceAccount  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    * agencyName  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    * tags  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'serviceAccount' => 'string',
            'agencyName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cce\V3\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    * serviceAccount  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    * agencyName  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    * tags  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'serviceAccount' => null,
        'agencyName' => null,
        'tags' => null
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
    * namespace  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    * serviceAccount  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    * agencyName  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    * tags  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'serviceAccount' => 'serviceAccount',
            'agencyName' => 'agencyName',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    * serviceAccount  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    * agencyName  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    * tags  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'serviceAccount' => 'setServiceAccount',
            'agencyName' => 'setAgencyName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    * serviceAccount  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    * agencyName  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    * tags  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'serviceAccount' => 'getServiceAccount',
            'agencyName' => 'getAgencyName',
            'tags' => 'getTags'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['serviceAccount'] === null) {
            $invalidProperties[] = "'serviceAccount' can't be null";
        }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
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
    * Gets namespace
    *  **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace **参数解释：** pod-identity关联所要绑定的serviceaccount所属的命名空间。 **约束限制：** 该值不可修改 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets serviceAccount
    *  **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return string
    */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
    * Sets serviceAccount
    *
    * @param string $serviceAccount **参数解释：** pod-identity关联所要绑定的serviceaccount名称。 **约束限制：** 同一个serviceaccount最多创建一条pod-identity关联记录，不支持创建多个 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return $this
    */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;
        return $this;
    }

    /**
    * Gets agencyName
    *  **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName **参数解释：** pod-identity关联所要绑定的委托名称，委托可以是一般委托或信任委托。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 无
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ResourceTag[]|null $tags **参数解释：** pod-identity关联的资源标签列表。 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

