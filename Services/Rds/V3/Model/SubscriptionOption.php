<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * snapshotAlwaysAvailable  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    * replicateDdl  复制架构更改。  true：可更改。 false：不可更改。
    * allowInitializeFromBackup  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'independentAgent' => 'bool',
            'snapshotAlwaysAvailable' => 'bool',
            'replicateDdl' => 'bool',
            'allowInitializeFromBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * snapshotAlwaysAvailable  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    * replicateDdl  复制架构更改。  true：可更改。 false：不可更改。
    * allowInitializeFromBackup  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'independentAgent' => null,
        'snapshotAlwaysAvailable' => null,
        'replicateDdl' => null,
        'allowInitializeFromBackup' => null
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
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * snapshotAlwaysAvailable  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    * replicateDdl  复制架构更改。  true：可更改。 false：不可更改。
    * allowInitializeFromBackup  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'independentAgent' => 'independent_agent',
            'snapshotAlwaysAvailable' => 'snapshot_always_available',
            'replicateDdl' => 'replicate_ddl',
            'allowInitializeFromBackup' => 'allow_initialize_from_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * snapshotAlwaysAvailable  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    * replicateDdl  复制架构更改。  true：可更改。 false：不可更改。
    * allowInitializeFromBackup  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @var string[]
    */
    protected static $setters = [
            'independentAgent' => 'setIndependentAgent',
            'snapshotAlwaysAvailable' => 'setSnapshotAlwaysAvailable',
            'replicateDdl' => 'setReplicateDdl',
            'allowInitializeFromBackup' => 'setAllowInitializeFromBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * independentAgent  独立的分发代理。  true：使用。 false：不使用。
    * snapshotAlwaysAvailable  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    * replicateDdl  复制架构更改。  true：可更改。 false：不可更改。
    * allowInitializeFromBackup  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @var string[]
    */
    protected static $getters = [
            'independentAgent' => 'getIndependentAgent',
            'snapshotAlwaysAvailable' => 'getSnapshotAlwaysAvailable',
            'replicateDdl' => 'getReplicateDdl',
            'allowInitializeFromBackup' => 'getAllowInitializeFromBackup'
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
        $this->container['independentAgent'] = isset($data['independentAgent']) ? $data['independentAgent'] : null;
        $this->container['snapshotAlwaysAvailable'] = isset($data['snapshotAlwaysAvailable']) ? $data['snapshotAlwaysAvailable'] : null;
        $this->container['replicateDdl'] = isset($data['replicateDdl']) ? $data['replicateDdl'] : null;
        $this->container['allowInitializeFromBackup'] = isset($data['allowInitializeFromBackup']) ? $data['allowInitializeFromBackup'] : null;
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
    * Gets independentAgent
    *  独立的分发代理。  true：使用。 false：不使用。
    *
    * @return bool|null
    */
    public function getIndependentAgent()
    {
        return $this->container['independentAgent'];
    }

    /**
    * Sets independentAgent
    *
    * @param bool|null $independentAgent 独立的分发代理。  true：使用。 false：不使用。
    *
    * @return $this
    */
    public function setIndependentAgent($independentAgent)
    {
        $this->container['independentAgent'] = $independentAgent;
        return $this;
    }

    /**
    * Gets snapshotAlwaysAvailable
    *  快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    *
    * @return bool|null
    */
    public function getSnapshotAlwaysAvailable()
    {
        return $this->container['snapshotAlwaysAvailable'];
    }

    /**
    * Sets snapshotAlwaysAvailable
    *
    * @param bool|null $snapshotAlwaysAvailable 快照始终可用。需要“独立的分发代理”。  true：可用。 false：不可用。
    *
    * @return $this
    */
    public function setSnapshotAlwaysAvailable($snapshotAlwaysAvailable)
    {
        $this->container['snapshotAlwaysAvailable'] = $snapshotAlwaysAvailable;
        return $this;
    }

    /**
    * Gets replicateDdl
    *  复制架构更改。  true：可更改。 false：不可更改。
    *
    * @return bool|null
    */
    public function getReplicateDdl()
    {
        return $this->container['replicateDdl'];
    }

    /**
    * Sets replicateDdl
    *
    * @param bool|null $replicateDdl 复制架构更改。  true：可更改。 false：不可更改。
    *
    * @return $this
    */
    public function setReplicateDdl($replicateDdl)
    {
        $this->container['replicateDdl'] = $replicateDdl;
        return $this;
    }

    /**
    * Gets allowInitializeFromBackup
    *  允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @return bool|null
    */
    public function getAllowInitializeFromBackup()
    {
        return $this->container['allowInitializeFromBackup'];
    }

    /**
    * Sets allowInitializeFromBackup
    *
    * @param bool|null $allowInitializeFromBackup 允许使用备份文件初始化。  true：允许。 false：不允许。
    *
    * @return $this
    */
    public function setAllowInitializeFromBackup($allowInitializeFromBackup)
    {
        $this->container['allowInitializeFromBackup'] = $allowInitializeFromBackup;
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

