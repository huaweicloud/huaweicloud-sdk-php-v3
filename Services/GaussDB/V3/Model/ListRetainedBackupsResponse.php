<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRetainedBackupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRetainedBackupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recycleBackupInfos  **参数解释**：  保留备份信息列表。
    * policy  policy
    * total  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recycleBackupInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupInfo[]',
            'policy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupPolicy',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recycleBackupInfos  **参数解释**：  保留备份信息列表。
    * policy  policy
    * total  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recycleBackupInfos' => null,
        'policy' => null,
        'total' => 'int64'
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
    * recycleBackupInfos  **参数解释**：  保留备份信息列表。
    * policy  policy
    * total  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recycleBackupInfos' => 'recycle_backup_infos',
            'policy' => 'policy',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recycleBackupInfos  **参数解释**：  保留备份信息列表。
    * policy  policy
    * total  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'recycleBackupInfos' => 'setRecycleBackupInfos',
            'policy' => 'setPolicy',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recycleBackupInfos  **参数解释**：  保留备份信息列表。
    * policy  policy
    * total  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'recycleBackupInfos' => 'getRecycleBackupInfos',
            'policy' => 'getPolicy',
            'total' => 'getTotal'
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
        $this->container['recycleBackupInfos'] = isset($data['recycleBackupInfos']) ? $data['recycleBackupInfos'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets recycleBackupInfos
    *  **参数解释**：  保留备份信息列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupInfo[]|null
    */
    public function getRecycleBackupInfos()
    {
        return $this->container['recycleBackupInfos'];
    }

    /**
    * Sets recycleBackupInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupInfo[]|null $recycleBackupInfos **参数解释**：  保留备份信息列表。
    *
    * @return $this
    */
    public function setRecycleBackupInfos($recycleBackupInfos)
    {
        $this->container['recycleBackupInfos'] = $recycleBackupInfos;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\RetainedBackupPolicy|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**：  保留备份总数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

