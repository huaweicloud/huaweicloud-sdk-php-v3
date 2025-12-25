<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDisasterNameRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDisasterNameRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * drName  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'drName' => 'string',
            'type' => 'string',
            'standbyRegion' => 'string',
            'standbyProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * drName  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'drName' => null,
        'type' => null,
        'standbyRegion' => null,
        'standbyProjectId' => null
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
    * drName  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'drName' => 'dr_name',
            'type' => 'type',
            'standbyRegion' => 'standby_region',
            'standbyProjectId' => 'standby_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * drName  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'drName' => 'setDrName',
            'type' => 'setType',
            'standbyRegion' => 'setStandbyRegion',
            'standbyProjectId' => 'setStandbyProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * drName  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'drName' => 'getDrName',
            'type' => 'getType',
            'standbyRegion' => 'getStandbyRegion',
            'standbyProjectId' => 'getStandbyProjectId'
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
        $this->container['drName'] = isset($data['drName']) ? $data['drName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['standbyRegion'] = isset($data['standbyRegion']) ? $data['standbyRegion'] : null;
        $this->container['standbyProjectId'] = isset($data['standbyProjectId']) ? $data['standbyProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['drName'] === null) {
            $invalidProperties[] = "'drName' can't be null";
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
    * Gets drName
    *  **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDrName()
    {
        return $this->container['drName'];
    }

    /**
    * Sets drName
    *
    * @param string $drName **参数解释**： 容灾名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDrName($drName)
    {
        $this->container['drName'] = $drName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets standbyRegion
    *  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStandbyRegion()
    {
        return $this->container['standbyRegion'];
    }

    /**
    * Sets standbyRegion
    *
    * @param string|null $standbyRegion **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyRegion($standbyRegion)
    {
        $this->container['standbyRegion'] = $standbyRegion;
        return $this;
    }

    /**
    * Gets standbyProjectId
    *  **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStandbyProjectId()
    {
        return $this->container['standbyProjectId'];
    }

    /**
    * Sets standbyProjectId
    *
    * @param string|null $standbyProjectId **参数解释**： 备集群所在项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyProjectId($standbyProjectId)
    {
        $this->container['standbyProjectId'] = $standbyProjectId;
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

