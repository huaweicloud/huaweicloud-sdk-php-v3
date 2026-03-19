<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIpGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIpGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  地址组名称
    * ips  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRemarks  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    * description  地址组描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ips' => 'string',
            'ipRemarks' => 'map[string,string]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  地址组名称
    * ips  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRemarks  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    * description  地址组描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ips' => null,
        'ipRemarks' => null,
        'description' => null
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
    * name  地址组名称
    * ips  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRemarks  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    * description  地址组描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ips' => 'ips',
            'ipRemarks' => 'ip_remarks',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  地址组名称
    * ips  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRemarks  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    * description  地址组描述
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ips' => 'setIps',
            'ipRemarks' => 'setIpRemarks',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  地址组名称
    * ips  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRemarks  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    * description  地址组描述
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ips' => 'getIps',
            'ipRemarks' => 'getIpRemarks',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['ipRemarks'] = isset($data['ipRemarks']) ? $data['ipRemarks'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ips'] === null) {
            $invalidProperties[] = "'ips' can't be null";
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
    * Gets name
    *  地址组名称
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
    * @param string|null $name 地址组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ips
    *  **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string $ips **参数解释：** 以逗号分隔的ip或ip段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets ipRemarks
    *  **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    *
    * @return map[string,string]|null
    */
    public function getIpRemarks()
    {
        return $this->container['ipRemarks'];
    }

    /**
    * Sets ipRemarks
    *
    * @param map[string,string]|null $ipRemarks **参数解释：** ip或ip段的备注 **约束限制：** key必须是ips中包含的单个ip或ip段 **取值范围：** value必须匹配正则：[^<>]{0,64} **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpRemarks($ipRemarks)
    {
        $this->container['ipRemarks'] = $ipRemarks;
        return $this;
    }

    /**
    * Gets description
    *  地址组描述
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
    * @param string|null $description 地址组描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

