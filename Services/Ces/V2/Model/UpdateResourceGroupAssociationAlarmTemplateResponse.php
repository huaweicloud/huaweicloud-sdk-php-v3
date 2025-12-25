<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateResourceGroupAssociationAlarmTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateResourceGroupAssociationAlarmTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    * templateIds  关联的告警模板的ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'templateIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    * templateIds  关联的告警模板的ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'templateIds' => null
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
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    * templateIds  关联的告警模板的ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'templateIds' => 'template_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    * templateIds  关联的告警模板的ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'templateIds' => 'setTemplateIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    * templateIds  关联的告警模板的ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'templateIds' => 'getTemplateIds'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['templateIds'] = isset($data['templateIds']) ? $data['templateIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && !preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
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
    * Gets groupId
    *  **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释** 资源分组ID。 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets templateIds
    *  关联的告警模板的ID列表
    *
    * @return string[]|null
    */
    public function getTemplateIds()
    {
        return $this->container['templateIds'];
    }

    /**
    * Sets templateIds
    *
    * @param string[]|null $templateIds 关联的告警模板的ID列表
    *
    * @return $this
    */
    public function setTemplateIds($templateIds)
    {
        $this->container['templateIds'] = $templateIds;
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

