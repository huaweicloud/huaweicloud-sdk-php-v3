<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolSpecModelVolumeGroupConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolSpecModel_volumeGroupConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeGroup' => 'string',
            'dockerThinPool' => 'int',
            'lvmConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelVolumeGroupConfigsLvmConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeGroup' => null,
        'dockerThinPool' => 'int32',
        'lvmConfig' => null
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
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeGroup' => 'volumeGroup',
            'dockerThinPool' => 'dockerThinPool',
            'lvmConfig' => 'lvmConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeGroup' => 'setVolumeGroup',
            'dockerThinPool' => 'setDockerThinPool',
            'lvmConfig' => 'setLvmConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeGroup' => 'getVolumeGroup',
            'dockerThinPool' => 'getDockerThinPool',
            'lvmConfig' => 'getLvmConfig'
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
        $this->container['volumeGroup'] = isset($data['volumeGroup']) ? $data['volumeGroup'] : null;
        $this->container['dockerThinPool'] = isset($data['dockerThinPool']) ? $data['dockerThinPool'] : null;
        $this->container['lvmConfig'] = isset($data['lvmConfig']) ? $data['lvmConfig'] : null;
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
    * Gets volumeGroup
    *  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVolumeGroup()
    {
        return $this->container['volumeGroup'];
    }

    /**
    * Sets volumeGroup
    *
    * @param string|null $volumeGroup **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVolumeGroup($volumeGroup)
    {
        $this->container['volumeGroup'] = $volumeGroup;
        return $this;
    }

    /**
    * Gets dockerThinPool
    *  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getDockerThinPool()
    {
        return $this->container['dockerThinPool'];
    }

    /**
    * Sets dockerThinPool
    *
    * @param int|null $dockerThinPool **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDockerThinPool($dockerThinPool)
    {
        $this->container['dockerThinPool'] = $dockerThinPool;
        return $this;
    }

    /**
    * Gets lvmConfig
    *  lvmConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelVolumeGroupConfigsLvmConfig|null
    */
    public function getLvmConfig()
    {
        return $this->container['lvmConfig'];
    }

    /**
    * Sets lvmConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelVolumeGroupConfigsLvmConfig|null $lvmConfig lvmConfig
    *
    * @return $this
    */
    public function setLvmConfig($lvmConfig)
    {
        $this->container['lvmConfig'] = $lvmConfig;
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

