<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteGaussMySqlInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteGaussMySqlInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupRetentionStrategy  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupRetentionStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupRetentionStrategy  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupRetentionStrategy' => null
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
    * backupRetentionStrategy  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupRetentionStrategy' => 'backup_retention_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupRetentionStrategy  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupRetentionStrategy' => 'setBackupRetentionStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupRetentionStrategy  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupRetentionStrategy' => 'getBackupRetentionStrategy'
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
    const BACKUP_RETENTION_STRATEGY_RETAIN_ALL = 'retain_all';
    const BACKUP_RETENTION_STRATEGY_RETAIN_LAST = 'retain_last';
    const BACKUP_RETENTION_STRATEGY_DELETE_ALL = 'delete_all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupRetentionStrategyAllowableValues()
    {
        return [
            self::BACKUP_RETENTION_STRATEGY_RETAIN_ALL,
            self::BACKUP_RETENTION_STRATEGY_RETAIN_LAST,
            self::BACKUP_RETENTION_STRATEGY_DELETE_ALL,
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
        $this->container['backupRetentionStrategy'] = isset($data['backupRetentionStrategy']) ? $data['backupRetentionStrategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getBackupRetentionStrategyAllowableValues();
                if (!is_null($this->container['backupRetentionStrategy']) && !in_array($this->container['backupRetentionStrategy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupRetentionStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets backupRetentionStrategy
    *  **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @return string|null
    */
    public function getBackupRetentionStrategy()
    {
        return $this->container['backupRetentionStrategy'];
    }

    /**
    * Sets backupRetentionStrategy
    *
    * @param string|null $backupRetentionStrategy **参数解释**：  释放实例时的备份保留策略。  **约束限制**：  不涉及。  **取值范围**：  - retain_all：永久保留全部备份，包含回收站备份、自动全量备份、自动差量备份、手动备份，不包含增量备份。实例删除后，永久保留的备份会产生费用。 - retain_last：保留回收站备份和手动备份。超过回收站策略的保留天数后，系统将删除回收站备份，仅保留手动备份。手动备份会产生费用，其余保留的备份不收费。 - delete_all：删除全部备份。  **默认取值**：  retain_last。
    *
    * @return $this
    */
    public function setBackupRetentionStrategy($backupRetentionStrategy)
    {
        $this->container['backupRetentionStrategy'] = $backupRetentionStrategy;
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

