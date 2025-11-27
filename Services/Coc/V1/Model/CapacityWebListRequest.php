<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CapacityWebListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CapacityWebListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * domainId  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * providerObj  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'componentId' => 'string',
            'applicationId' => 'string',
            'domainId' => 'string',
            'providerObj' => '\HuaweiCloud\SDK\Coc\V1\Model\CapacityWebListRequestProviderObj[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * domainId  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * providerObj  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'componentId' => null,
        'applicationId' => null,
        'domainId' => null,
        'providerObj' => null
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
    * groupId  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * domainId  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * providerObj  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'componentId' => 'component_id',
            'applicationId' => 'application_id',
            'domainId' => 'domain_id',
            'providerObj' => 'provider_obj'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * domainId  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * providerObj  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'componentId' => 'setComponentId',
            'applicationId' => 'setApplicationId',
            'domainId' => 'setDomainId',
            'providerObj' => 'setProviderObj'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    * domainId  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * providerObj  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'componentId' => 'getComponentId',
            'applicationId' => 'getApplicationId',
            'domainId' => 'getDomainId',
            'providerObj' => 'getProviderObj'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['providerObj'] = isset($data['providerObj']) ? $data['providerObj'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 24)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 24)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) < 24)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['providerObj'] === null) {
            $invalidProperties[] = "'providerObj' can't be null";
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
    *  **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
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
    * @param string|null $groupId **参数解释：** 用户选择当前分组对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释：** 用户选择当前组件对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId **参数解释：** 用户选择当前应用对应的id值。 **约束限制：** 应用、组件和分组ID，有且仅有1个有值。 **取值范围：** 字符串，长度24个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 用户登录租户对应的账号ID即租户id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets providerObj
    *  **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CapacityWebListRequestProviderObj[]
    */
    public function getProviderObj()
    {
        return $this->container['providerObj'];
    }

    /**
    * Sets providerObj
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CapacityWebListRequestProviderObj[] $providerObj **参数解释：** 资源对象。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProviderObj($providerObj)
    {
        $this->container['providerObj'] = $providerObj;
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

