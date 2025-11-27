<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupRmsResourceRelationUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupRmsResourceRelationUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idList  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * groupId  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idList' => 'string[]',
            'groupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idList  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * groupId  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idList' => null,
        'groupId' => null
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
    * idList  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * groupId  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idList' => 'id_list',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idList  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * groupId  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'idList' => 'setIdList',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idList  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    * groupId  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'idList' => 'getIdList',
            'groupId' => 'getGroupId'
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
        $this->container['idList'] = isset($data['idList']) ? $data['idList'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['idList'] === null) {
            $invalidProperties[] = "'idList' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['groupId']) < 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 24.";
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
    * Gets idList
    *  **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getIdList()
    {
        return $this->container['idList'];
    }

    /**
    * Sets idList
    *
    * @param string[] $idList **参数解释：** 资源关联uuid列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIdList($idList)
    {
        $this->container['idList'] = $idList;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释：** 分组id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

