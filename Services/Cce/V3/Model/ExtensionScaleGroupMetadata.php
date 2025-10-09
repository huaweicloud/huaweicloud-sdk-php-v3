<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionScaleGroupMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionScaleGroupMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  扩展伸缩组的uuid，由系统自动生成
    * name  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  扩展伸缩组的uuid，由系统自动生成
    * name  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null
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
    * uid  扩展伸缩组的uuid，由系统自动生成
    * name  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  扩展伸缩组的uuid，由系统自动生成
    * name  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  扩展伸缩组的uuid，由系统自动生成
    * name  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName'
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
    *  扩展伸缩组的uuid，由系统自动生成
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
    * @param string|null $uid 扩展伸缩组的uuid，由系统自动生成
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
    *  **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 扩展伸缩组的名称。 **约束限制**： 不能为 **default**。 **取值范围**： 长度不能超过56个字符，只能包含数字和小写字母以及连字符（-），必须以小写字母开头以小写字母或者数字结尾。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

