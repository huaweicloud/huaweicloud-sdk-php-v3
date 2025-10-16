<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAgencyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAgencyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * purged  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * roleIdList  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'purged' => 'bool',
            'roleIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * purged  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * roleIdList  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'purged' => null,
        'roleIdList' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * purged  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * roleIdList  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'purged' => 'purged',
            'roleIdList' => 'role_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * purged  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * roleIdList  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'purged' => 'setPurged',
            'roleIdList' => 'setRoleIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * purged  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * roleIdList  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'purged' => 'getPurged',
            'roleIdList' => 'getRoleIdList'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['purged'] = isset($data['purged']) ? $data['purged'] : null;
        $this->container['roleIdList'] = isset($data['roleIdList']) ? $data['roleIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets purged
    *  **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getPurged()
    {
        return $this->container['purged'];
    }

    /**
    * Sets purged
    *
    * @param bool|null $purged **参数解释：** 独享引擎操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPurged($purged)
    {
        $this->container['purged'] = $purged;
        return $this;
    }

    /**
    * Gets roleIdList
    *  **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getRoleIdList()
    {
        return $this->container['roleIdList'];
    }

    /**
    * Sets roleIdList
    *
    * @param string[]|null $roleIdList **参数解释：** 待删除的代理id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRoleIdList($roleIdList)
    {
        $this->container['roleIdList'] = $roleIdList;
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

