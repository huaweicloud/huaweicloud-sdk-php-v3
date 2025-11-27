<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupRmsResourceRelationCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupRmsResourceRelationCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    * cmdbResourceIdList  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'cmdbResourceIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    * cmdbResourceIdList  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'cmdbResourceIdList' => null
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
    * groupId  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    * cmdbResourceIdList  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'cmdbResourceIdList' => 'cmdb_resource_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    * cmdbResourceIdList  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'cmdbResourceIdList' => 'setCmdbResourceIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    * cmdbResourceIdList  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'cmdbResourceIdList' => 'getCmdbResourceIdList'
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
        $this->container['cmdbResourceIdList'] = isset($data['cmdbResourceIdList']) ? $data['cmdbResourceIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['groupId']) < 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 24.";
            }
        if ($this->container['cmdbResourceIdList'] === null) {
            $invalidProperties[] = "'cmdbResourceIdList' can't be null";
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
    *  **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
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
    * @param string $groupId **参数解释：** CloudCMDB分配的分组uuid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets cmdbResourceIdList
    *  **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @return string[]
    */
    public function getCmdbResourceIdList()
    {
        return $this->container['cmdbResourceIdList'];
    }

    /**
    * Sets cmdbResourceIdList
    *
    * @param string[] $cmdbResourceIdList **参数解释：** CloudCMDB分配的RMS资源uuid列表。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCmdbResourceIdList($cmdbResourceIdList)
    {
        $this->container['cmdbResourceIdList'] = $cmdbResourceIdList;
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

