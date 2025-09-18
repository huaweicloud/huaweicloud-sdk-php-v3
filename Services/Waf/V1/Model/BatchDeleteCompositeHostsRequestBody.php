<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteCompositeHostsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteCompositeHostsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIds  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    * keepPolicyEnable  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIds' => 'string[]',
            'keepPolicyEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIds  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    * keepPolicyEnable  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIds' => null,
        'keepPolicyEnable' => null
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
    * hostIds  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    * keepPolicyEnable  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIds' => 'host_ids',
            'keepPolicyEnable' => 'keep_policy_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIds  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    * keepPolicyEnable  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIds' => 'setHostIds',
            'keepPolicyEnable' => 'setKeepPolicyEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIds  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    * keepPolicyEnable  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIds' => 'getHostIds',
            'keepPolicyEnable' => 'getKeepPolicyEnable'
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
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['keepPolicyEnable'] = isset($data['keepPolicyEnable']) ? $data['keepPolicyEnable'] : null;
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
    * Gets hostIds
    *  **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释：** 域名id数组，包含待批量删除的租户域名唯一标识，从查询租户域名列表接口获取。 **约束限制：** 不涉及 **取值范围：** 数组内元素为字符串类型，每个元素对应一个域名ID **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets keepPolicyEnable
    *  **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @return bool|null
    */
    public function getKeepPolicyEnable()
    {
        return $this->container['keepPolicyEnable'];
    }

    /**
    * Sets keepPolicyEnable
    *
    * @param bool|null $keepPolicyEnable **参数解释：** 保留域名的防护策略，标识删除域名后是否保留其关联的防护策略（true表示保留，false表示不保留）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    *
    * @return $this
    */
    public function setKeepPolicyEnable($keepPolicyEnable)
    {
        $this->container['keepPolicyEnable'] = $keepPolicyEnable;
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

