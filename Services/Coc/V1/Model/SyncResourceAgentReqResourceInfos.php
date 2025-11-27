<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncResourceAgentReqResourceInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncResourceAgentReq_resource_infos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    * resourceId  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    * id  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'resourceId' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    * resourceId  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    * id  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'resourceId' => null,
        'id' => null
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
    * regionId  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    * resourceId  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    * id  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'resourceId' => 'resource_id',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    * resourceId  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    * id  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'resourceId' => 'setResourceId',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    * resourceId  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    * id  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'resourceId' => 'getResourceId',
            'id' => 'getId'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets regionId
    *  **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId **参数解释：** 资源所属的region id。 **约束限制：** 不涉及。 **取值范围：** 资源对应区域id。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释：** 资源id。 **约束限制：** 不涉及。 **取值范围：** 用户选择的资源对应的资源id。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 资源在coc-cmdb存储的id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

