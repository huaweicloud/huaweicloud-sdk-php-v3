<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotFlavorInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotFlavorInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * snapshotId  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    * azCode  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    * fineGrainedRestore  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'snapshotId' => 'string',
            'type' => 'string',
            'azCode' => 'string',
            'fineGrainedRestore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * snapshotId  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    * azCode  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    * fineGrainedRestore  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'snapshotId' => null,
        'type' => null,
        'azCode' => null,
        'fineGrainedRestore' => null
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
    * snapshotId  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    * azCode  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    * fineGrainedRestore  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'snapshotId' => 'snapshot_id',
            'type' => 'type',
            'azCode' => 'az_code',
            'fineGrainedRestore' => 'fine_grained_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * snapshotId  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    * azCode  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    * fineGrainedRestore  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'snapshotId' => 'setSnapshotId',
            'type' => 'setType',
            'azCode' => 'setAzCode',
            'fineGrainedRestore' => 'setFineGrainedRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * snapshotId  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    * azCode  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    * fineGrainedRestore  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'snapshotId' => 'getSnapshotId',
            'type' => 'getType',
            'azCode' => 'getAzCode',
            'fineGrainedRestore' => 'getFineGrainedRestore'
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
    const TYPE_SNAPSHOT = 'snapshot';
    const TYPE_RESTORE = 'restore';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SNAPSHOT,
            self::TYPE_RESTORE,
        ];
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
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['fineGrainedRestore'] = isset($data['fineGrainedRestore']) ? $data['fineGrainedRestore'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['snapshotId'] === null) {
            $invalidProperties[] = "'snapshotId' can't be null";
        }
            if ((mb_strlen($this->container['snapshotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'snapshotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['snapshotId']) < 32)) {
                $invalidProperties[] = "invalid value for 'snapshotId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['azCode']) && (mb_strlen($this->container['azCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'azCode', the character length must be bigger than or equal to 0.";
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
    * Gets snapshotId
    *  **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string $snapshotId **参数解释**： 快照ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
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
    * @param string|null $type **参数解释**： 过滤快照规格类型，用于区分仅查询快照原始规格，还是包含可恢复的规格。 **约束限制**： 不涉及。 **取值范围**： snapshot：仅查询快照的规格信息 restore：同时查询恢复快照可用的规格信息 **默认取值**： snapshot
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets azCode
    *  **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode **参数解释**： 恢复时的目标可用区，用以过滤目标可用区下可恢复的规格。 恢复3az集群时需传递3个可用区编码，英文逗号分割（无空格）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 快照原始集群所在可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets fineGrainedRestore
    *  **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @return bool|null
    */
    public function getFineGrainedRestore()
    {
        return $this->container['fineGrainedRestore'];
    }

    /**
    * Sets fineGrainedRestore
    *
    * @param bool|null $fineGrainedRestore **参数解释**： 是否是细粒度备份恢复，用以过滤恢复时的可用规格。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： false
    *
    * @return $this
    */
    public function setFineGrainedRestore($fineGrainedRestore)
    {
        $this->container['fineGrainedRestore'] = $fineGrainedRestore;
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

