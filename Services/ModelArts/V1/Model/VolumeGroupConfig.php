<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeGroupConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeGroupConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    * types  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeGroup' => 'string',
            'dockerThinPool' => 'int',
            'lvmConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LvmConfig',
            'types' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    * types  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeGroup' => null,
        'dockerThinPool' => 'int32',
        'lvmConfig' => null,
        'types' => null
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
    * types  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeGroup' => 'volumeGroup',
            'dockerThinPool' => 'dockerThinPool',
            'lvmConfig' => 'lvmConfig',
            'types' => 'types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    * types  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeGroup' => 'setVolumeGroup',
            'dockerThinPool' => 'setDockerThinPool',
            'lvmConfig' => 'setLvmConfig',
            'types' => 'setTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeGroup  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    * dockerThinPool  **参数解释**：资源池节点容器盘占数据盘的百分比。仅磁盘分组名称为vgpaas时，即容器盘，才可指定此参数。 **取值范围**：不涉及。
    * lvmConfig  lvmConfig
    * types  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeGroup' => 'getVolumeGroup',
            'dockerThinPool' => 'getDockerThinPool',
            'lvmConfig' => 'getLvmConfig',
            'types' => 'getTypes'
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
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeGroup'] === null) {
            $invalidProperties[] = "'volumeGroup' can't be null";
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
    * Gets volumeGroup
    *  **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getVolumeGroup()
    {
        return $this->container['volumeGroup'];
    }

    /**
    * Sets volumeGroup
    *
    * @param string $volumeGroup **参数解释**：磁盘分组名称。作为dataVolumes中volumeGroup的索引。 **取值范围**：不涉及。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LvmConfig|null
    */
    public function getLvmConfig()
    {
        return $this->container['lvmConfig'];
    }

    /**
    * Sets lvmConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LvmConfig|null $lvmConfig lvmConfig
    *
    * @return $this
    */
    public function setLvmConfig($lvmConfig)
    {
        $this->container['lvmConfig'] = $lvmConfig;
        return $this;
    }

    /**
    * Gets types
    *  **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @return string[]|null
    */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
    * Sets types
    *
    * @param string[]|null $types **参数解释**：存储类型。可选项如下： - volume：云硬盘。当指定dataVolumes时，该值为缺省值。 - local：本地盘。使用本地盘必须指定该字段。
    *
    * @return $this
    */
    public function setTypes($types)
    {
        $this->container['types'] = $types;
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

