<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressGroupDependency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressGroupDependency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * enterpriseProjectId  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * dependency  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'enterpriseProjectId' => 'string',
            'dependency' => '\HuaweiCloud\SDK\Vpc\V3\Model\Dependency[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * enterpriseProjectId  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * dependency  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'enterpriseProjectId' => null,
        'dependency' => null
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
    * id  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * enterpriseProjectId  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * dependency  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dependency' => 'dependency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * enterpriseProjectId  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * dependency  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dependency' => 'setDependency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * enterpriseProjectId  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * dependency  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dependency' => 'getDependency'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dependency'] = isset($data['dependency']) ? $data['dependency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['dependency'] === null) {
            $invalidProperties[] = "'dependency' can't be null";
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
    *  **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： IP地址组的资源ID。IP地址组创建成功后，会生成一个IP地址组 ID，是IP地址组对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释**： IP地址组所属的企业项目ID。 **取值范围**： 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets dependency
    *  **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\Dependency[]
    */
    public function getDependency()
    {
        return $this->container['dependency'];
    }

    /**
    * Sets dependency
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\Dependency[] $dependency **参数解释**： IP地址组关联的资源列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDependency($dependency)
    {
        $this->container['dependency'] = $dependency;
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

