<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrowCheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrowCheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pass  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    * reason  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    * desc  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * type  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pass' => 'bool',
            'reason' => 'string',
            'required' => 'bool',
            'desc' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pass  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    * reason  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    * desc  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * type  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pass' => null,
        'reason' => null,
        'required' => null,
        'desc' => null,
        'type' => null
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
    * pass  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    * reason  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    * desc  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * type  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pass' => 'pass',
            'reason' => 'reason',
            'required' => 'required',
            'desc' => 'desc',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pass  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    * reason  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    * desc  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * type  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @var string[]
    */
    protected static $setters = [
            'pass' => 'setPass',
            'reason' => 'setReason',
            'required' => 'setRequired',
            'desc' => 'setDesc',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pass  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    * reason  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    * required  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    * desc  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    * type  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @var string[]
    */
    protected static $getters = [
            'pass' => 'getPass',
            'reason' => 'getReason',
            'required' => 'getRequired',
            'desc' => 'getDesc',
            'type' => 'getType'
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
        $this->container['pass'] = isset($data['pass']) ? $data['pass'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets pass
    *  **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    *
    * @return bool|null
    */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
    * Sets pass
    *
    * @param bool|null $pass **参数解释**： 检查是否通过，检查通过项默认不展示。 **取值范围**： true/false
    *
    * @return $this
    */
    public function setPass($pass)
    {
        $this->container['pass'] = $pass;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**： 检查不通过的原因描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets required
    *  **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required **参数解释**： 是否必须检查项。 **取值范围**： - true：必须，校验不通过时不允许扩容，继续扩容也会失败 - false：非必须，校验不通过时允许扩容，仅做提示告知风险
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 描述信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 描述信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
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
    * @param string|null $type **参数解释**： 分类。 **取值范围**： 配额、权限、版本、状态
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

