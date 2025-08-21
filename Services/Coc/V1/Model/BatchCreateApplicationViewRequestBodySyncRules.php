<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewRequestBodySyncRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewRequestBody_sync_rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * ruleTags  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epId' => 'string',
            'ruleTags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * ruleTags  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epId' => null,
        'ruleTags' => null
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
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * ruleTags  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epId' => 'ep_id',
            'ruleTags' => 'rule_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * ruleTags  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'epId' => 'setEpId',
            'ruleTags' => 'setRuleTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * ruleTags  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'epId' => 'getEpId',
            'ruleTags' => 'getRuleTags'
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
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['ruleTags'] = isset($data['ruleTags']) ? $data['ruleTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) > 36)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) < 0)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleTags']) && (mb_strlen($this->container['ruleTags']) > 4200)) {
                $invalidProperties[] = "invalid value for 'ruleTags', the character length must be smaller than or equal to 4200.";
            }
            if (!is_null($this->container['ruleTags']) && (mb_strlen($this->container['ruleTags']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleTags', the character length must be bigger than or equal to 0.";
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
    * Gets epId
    *  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets ruleTags
    *  **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRuleTags()
    {
        return $this->container['ruleTags'];
    }

    /**
    * Sets ruleTags
    *
    * @param string|null $ruleTags **参数解释：** 关联标签。 **约束限制：** 不涉及。 **取值范围：** 可自定义。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRuleTags($ruleTags)
    {
        $this->container['ruleTags'] = $ruleTags;
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

