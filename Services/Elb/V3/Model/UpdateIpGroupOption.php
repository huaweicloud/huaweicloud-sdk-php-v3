<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIpGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIpGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * name  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * ipList  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'name' => 'string',
            'ipList' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupIpOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * name  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * ipList  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'ipList' => null
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
    * description  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * name  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * ipList  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'name' => 'name',
            'ipList' => 'ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * name  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * ipList  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'name' => 'setName',
            'ipList' => 'setIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * name  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    * ipList  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'name' => 'getName',
            'ipList' => 'getIpList'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets description
    *  **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：IP地址组的描述信息。  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
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
    * @param string|null $name **参数解释**：IP地址组的名称  **约束限制**：不涉及  **取值范围**：长度为0-255个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipList
    *  **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupIpOption[]|null
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateIpGroupIpOption[]|null $ipList **参数解释**：IP地址组的IP列表。 注意：只支持全量更新，即IP地址组中的ip_list将被全量覆盖，不在请求参数中的IP地址将被移除。  **约束限制**：不涉及
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
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

