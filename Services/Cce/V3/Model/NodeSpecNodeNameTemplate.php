<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSpecNodeNameTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSpec_nodeNameTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeNamePrefix  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodeNameSuffix  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeNamePrefix' => 'string',
            'nodeNameSuffix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeNamePrefix  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodeNameSuffix  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeNamePrefix' => null,
        'nodeNameSuffix' => null
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
    * nodeNamePrefix  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodeNameSuffix  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeNamePrefix' => 'nodeNamePrefix',
            'nodeNameSuffix' => 'nodeNameSuffix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeNamePrefix  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodeNameSuffix  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeNamePrefix' => 'setNodeNamePrefix',
            'nodeNameSuffix' => 'setNodeNameSuffix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeNamePrefix  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * nodeNameSuffix  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeNamePrefix' => 'getNodeNamePrefix',
            'nodeNameSuffix' => 'getNodeNameSuffix'
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
        $this->container['nodeNamePrefix'] = isset($data['nodeNamePrefix']) ? $data['nodeNamePrefix'] : null;
        $this->container['nodeNameSuffix'] = isset($data['nodeNameSuffix']) ? $data['nodeNameSuffix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeNamePrefix']) && !preg_match("/^[a-z]([-.a-z0-9]*[-.a-z0-9])?$/", $this->container['nodeNamePrefix'])) {
                $invalidProperties[] = "invalid value for 'nodeNamePrefix', must be conform to the pattern /^[a-z]([-.a-z0-9]*[-.a-z0-9])?$/.";
            }
            if (!is_null($this->container['nodeNameSuffix']) && !preg_match("/^[-.a-z0-9]*[a-z0-9]$/", $this->container['nodeNameSuffix'])) {
                $invalidProperties[] = "invalid value for 'nodeNameSuffix', must be conform to the pattern /^[-.a-z0-9]*[a-z0-9]$/.";
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
    * Gets nodeNamePrefix
    *  **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNodeNamePrefix()
    {
        return $this->container['nodeNamePrefix'];
    }

    /**
    * Sets nodeNamePrefix
    *
    * @param string|null $nodeNamePrefix **参数解释**： 节点名称前缀。如果用户填写为空串或缺省，则节点名称不会增加前缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），必须以小写字母开头，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNodeNamePrefix($nodeNamePrefix)
    {
        $this->container['nodeNamePrefix'] = $nodeNamePrefix;
        return $this;
    }

    /**
    * Gets nodeNameSuffix
    *  **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getNodeNameSuffix()
    {
        return $this->container['nodeNameSuffix'];
    }

    /**
    * Sets nodeNameSuffix
    *
    * @param string|null $nodeNameSuffix **参数解释**： 节点名称后缀。如果用户填写为空串或缺省，则节点名称不会增加后缀。 **约束限制**： 仅支持小写字母、数字、连字符（-）和点（.），后缀结尾必须为小写字母或者数字，并且符合[FRC 1123](https://tools.ietf.org/html/rfc1123)中定义的DNS子域名命名规范。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNodeNameSuffix($nodeNameSuffix)
    {
        $this->container['nodeNameSuffix'] = $nodeNameSuffix;
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

