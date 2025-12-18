<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rateLimit  **参数解释**: 备份限速。 **取值范围**: 0-1024
    * prefetchBlock  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    * fileSplitSize  **参数解释**: 分片大小。 **取值范围**: 0-1024
    * enableStandbyBackup  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    * closeCompression  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    * defaultBackupMediaType  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    * defaultBackupMethod  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    * backupParallelDegree  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    * backupNodeInfo  backupNodeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rateLimit' => 'int',
            'prefetchBlock' => 'int',
            'fileSplitSize' => 'int',
            'enableStandbyBackup' => 'bool',
            'closeCompression' => 'bool',
            'defaultBackupMediaType' => 'string',
            'defaultBackupMethod' => 'string',
            'backupParallelDegree' => 'int',
            'backupNodeInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BackupNodeInfoResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rateLimit  **参数解释**: 备份限速。 **取值范围**: 0-1024
    * prefetchBlock  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    * fileSplitSize  **参数解释**: 分片大小。 **取值范围**: 0-1024
    * enableStandbyBackup  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    * closeCompression  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    * defaultBackupMediaType  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    * defaultBackupMethod  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    * backupParallelDegree  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    * backupNodeInfo  backupNodeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rateLimit' => 'int32',
        'prefetchBlock' => 'int32',
        'fileSplitSize' => 'int32',
        'enableStandbyBackup' => null,
        'closeCompression' => null,
        'defaultBackupMediaType' => null,
        'defaultBackupMethod' => null,
        'backupParallelDegree' => 'int32',
        'backupNodeInfo' => null
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
    * rateLimit  **参数解释**: 备份限速。 **取值范围**: 0-1024
    * prefetchBlock  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    * fileSplitSize  **参数解释**: 分片大小。 **取值范围**: 0-1024
    * enableStandbyBackup  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    * closeCompression  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    * defaultBackupMediaType  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    * defaultBackupMethod  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    * backupParallelDegree  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    * backupNodeInfo  backupNodeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rateLimit' => 'rate_limit',
            'prefetchBlock' => 'prefetch_block',
            'fileSplitSize' => 'file_split_size',
            'enableStandbyBackup' => 'enable_standby_backup',
            'closeCompression' => 'close_compression',
            'defaultBackupMediaType' => 'default_backup_media_type',
            'defaultBackupMethod' => 'default_backup_method',
            'backupParallelDegree' => 'backup_parallel_degree',
            'backupNodeInfo' => 'backup_node_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rateLimit  **参数解释**: 备份限速。 **取值范围**: 0-1024
    * prefetchBlock  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    * fileSplitSize  **参数解释**: 分片大小。 **取值范围**: 0-1024
    * enableStandbyBackup  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    * closeCompression  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    * defaultBackupMediaType  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    * defaultBackupMethod  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    * backupParallelDegree  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    * backupNodeInfo  backupNodeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'rateLimit' => 'setRateLimit',
            'prefetchBlock' => 'setPrefetchBlock',
            'fileSplitSize' => 'setFileSplitSize',
            'enableStandbyBackup' => 'setEnableStandbyBackup',
            'closeCompression' => 'setCloseCompression',
            'defaultBackupMediaType' => 'setDefaultBackupMediaType',
            'defaultBackupMethod' => 'setDefaultBackupMethod',
            'backupParallelDegree' => 'setBackupParallelDegree',
            'backupNodeInfo' => 'setBackupNodeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rateLimit  **参数解释**: 备份限速。 **取值范围**: 0-1024
    * prefetchBlock  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    * fileSplitSize  **参数解释**: 分片大小。 **取值范围**: 0-1024
    * enableStandbyBackup  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    * closeCompression  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    * defaultBackupMediaType  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    * defaultBackupMethod  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    * backupParallelDegree  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    * backupNodeInfo  backupNodeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'rateLimit' => 'getRateLimit',
            'prefetchBlock' => 'getPrefetchBlock',
            'fileSplitSize' => 'getFileSplitSize',
            'enableStandbyBackup' => 'getEnableStandbyBackup',
            'closeCompression' => 'getCloseCompression',
            'defaultBackupMediaType' => 'getDefaultBackupMediaType',
            'defaultBackupMethod' => 'getDefaultBackupMethod',
            'backupParallelDegree' => 'getBackupParallelDegree',
            'backupNodeInfo' => 'getBackupNodeInfo'
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
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['prefetchBlock'] = isset($data['prefetchBlock']) ? $data['prefetchBlock'] : null;
        $this->container['fileSplitSize'] = isset($data['fileSplitSize']) ? $data['fileSplitSize'] : null;
        $this->container['enableStandbyBackup'] = isset($data['enableStandbyBackup']) ? $data['enableStandbyBackup'] : null;
        $this->container['closeCompression'] = isset($data['closeCompression']) ? $data['closeCompression'] : null;
        $this->container['defaultBackupMediaType'] = isset($data['defaultBackupMediaType']) ? $data['defaultBackupMediaType'] : null;
        $this->container['defaultBackupMethod'] = isset($data['defaultBackupMethod']) ? $data['defaultBackupMethod'] : null;
        $this->container['backupParallelDegree'] = isset($data['backupParallelDegree']) ? $data['backupParallelDegree'] : null;
        $this->container['backupNodeInfo'] = isset($data['backupNodeInfo']) ? $data['backupNodeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['prefetchBlock']) && ($this->container['prefetchBlock'] > 8192)) {
                $invalidProperties[] = "invalid value for 'prefetchBlock', must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['prefetchBlock']) && ($this->container['prefetchBlock'] < 1)) {
                $invalidProperties[] = "invalid value for 'prefetchBlock', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSplitSize']) && ($this->container['fileSplitSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'fileSplitSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fileSplitSize']) && ($this->container['fileSplitSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSplitSize', must be bigger than or equal to 0.";
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
    * Gets rateLimit
    *  **参数解释**: 备份限速。 **取值范围**: 0-1024
    *
    * @return int|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param int|null $rateLimit **参数解释**: 备份限速。 **取值范围**: 0-1024
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets prefetchBlock
    *  **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    *
    * @return int|null
    */
    public function getPrefetchBlock()
    {
        return $this->container['prefetchBlock'];
    }

    /**
    * Sets prefetchBlock
    *
    * @param int|null $prefetchBlock **参数解释**: 增备预取页面个数。 **取值范围**: 1-8192
    *
    * @return $this
    */
    public function setPrefetchBlock($prefetchBlock)
    {
        $this->container['prefetchBlock'] = $prefetchBlock;
        return $this;
    }

    /**
    * Gets fileSplitSize
    *  **参数解释**: 分片大小。 **取值范围**: 0-1024
    *
    * @return int|null
    */
    public function getFileSplitSize()
    {
        return $this->container['fileSplitSize'];
    }

    /**
    * Sets fileSplitSize
    *
    * @param int|null $fileSplitSize **参数解释**: 分片大小。 **取值范围**: 0-1024
    *
    * @return $this
    */
    public function setFileSplitSize($fileSplitSize)
    {
        $this->container['fileSplitSize'] = $fileSplitSize;
        return $this;
    }

    /**
    * Gets enableStandbyBackup
    *  **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getEnableStandbyBackup()
    {
        return $this->container['enableStandbyBackup'];
    }

    /**
    * Sets enableStandbyBackup
    *
    * @param bool|null $enableStandbyBackup **参数解释**: 启用备机备份标识。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEnableStandbyBackup($enableStandbyBackup)
    {
        $this->container['enableStandbyBackup'] = $enableStandbyBackup;
        return $this;
    }

    /**
    * Gets closeCompression
    *  **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    *
    * @return bool|null
    */
    public function getCloseCompression()
    {
        return $this->container['closeCompression'];
    }

    /**
    * Sets closeCompression
    *
    * @param bool|null $closeCompression **参数解释**: 是否关闭压缩。 **取值范围**: true,false
    *
    * @return $this
    */
    public function setCloseCompression($closeCompression)
    {
        $this->container['closeCompression'] = $closeCompression;
        return $this;
    }

    /**
    * Gets defaultBackupMediaType
    *  **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    *
    * @return string|null
    */
    public function getDefaultBackupMediaType()
    {
        return $this->container['defaultBackupMediaType'];
    }

    /**
    * Sets defaultBackupMediaType
    *
    * @param string|null $defaultBackupMediaType **参数解释**: 默认备份介质。 **取值范围**: - OBS 对象存储
    *
    * @return $this
    */
    public function setDefaultBackupMediaType($defaultBackupMediaType)
    {
        $this->container['defaultBackupMediaType'] = $defaultBackupMediaType;
        return $this;
    }

    /**
    * Gets defaultBackupMethod
    *  **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    *
    * @return string|null
    */
    public function getDefaultBackupMethod()
    {
        return $this->container['defaultBackupMethod'];
    }

    /**
    * Sets defaultBackupMethod
    *
    * @param string|null $defaultBackupMethod **参数解释**: 默认备份方式。 **取值范围**: - EBACKUP 快照备份 - PHYSICAL_BACKUP 物理备份
    *
    * @return $this
    */
    public function setDefaultBackupMethod($defaultBackupMethod)
    {
        $this->container['defaultBackupMethod'] = $defaultBackupMethod;
        return $this;
    }

    /**
    * Gets backupParallelDegree
    *  **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    *
    * @return int|null
    */
    public function getBackupParallelDegree()
    {
        return $this->container['backupParallelDegree'];
    }

    /**
    * Sets backupParallelDegree
    *
    * @param int|null $backupParallelDegree **参数解释**: 备份并行参数。 **取值范围**: 1, 2, 4, 8
    *
    * @return $this
    */
    public function setBackupParallelDegree($backupParallelDegree)
    {
        $this->container['backupParallelDegree'] = $backupParallelDegree;
        return $this;
    }

    /**
    * Gets backupNodeInfo
    *  backupNodeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BackupNodeInfoResult|null
    */
    public function getBackupNodeInfo()
    {
        return $this->container['backupNodeInfo'];
    }

    /**
    * Sets backupNodeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\BackupNodeInfoResult|null $backupNodeInfo backupNodeInfo
    *
    * @return $this
    */
    public function setBackupNodeInfo($backupNodeInfo)
    {
        $this->container['backupNodeInfo'] = $backupNodeInfo;
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

