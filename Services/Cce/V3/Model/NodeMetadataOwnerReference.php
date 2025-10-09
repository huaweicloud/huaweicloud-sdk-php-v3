<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeMetadataOwnerReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeMetadata_ownerReference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodepoolName  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodepoolId  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodepoolName' => 'string',
            'nodepoolId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodepoolName  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodepoolId  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodepoolName' => null,
        'nodepoolId' => null
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
    * nodepoolName  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodepoolId  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodepoolName' => 'nodepoolName',
            'nodepoolId' => 'nodepoolID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodepoolName  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodepoolId  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'nodepoolName' => 'setNodepoolName',
            'nodepoolId' => 'setNodepoolId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodepoolName  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodepoolId  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'nodepoolName' => 'getNodepoolName',
            'nodepoolId' => 'getNodepoolId'
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
        $this->container['nodepoolName'] = isset($data['nodepoolName']) ? $data['nodepoolName'] : null;
        $this->container['nodepoolId'] = isset($data['nodepoolId']) ? $data['nodepoolId'] : null;
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
    * Gets nodepoolName
    *  **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNodepoolName()
    {
        return $this->container['nodepoolName'];
    }

    /**
    * Sets nodepoolName
    *
    * @param string|null $nodepoolName **参数解释**： 节点池名称 **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNodepoolName($nodepoolName)
    {
        $this->container['nodepoolName'] = $nodepoolName;
        return $this;
    }

    /**
    * Gets nodepoolId
    *  **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNodepoolId()
    {
        return $this->container['nodepoolId'];
    }

    /**
    * Sets nodepoolId
    *
    * @param string|null $nodepoolId **参数解释**： 节点池UID **约束限制**： 创建成功后自动生成，填写无效。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNodepoolId($nodepoolId)
    {
        $this->container['nodepoolId'] = $nodepoolId;
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

