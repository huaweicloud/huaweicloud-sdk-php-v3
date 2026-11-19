<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetainedBackupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetainedBackupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    * backupName  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * size  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * beginTime  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * backupType  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    * backupLevel  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'backupName' => 'string',
            'size' => 'int',
            'beginTime' => 'string',
            'endTime' => 'string',
            'backupType' => 'string',
            'backupLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    * backupName  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * size  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * beginTime  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * backupType  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    * backupLevel  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'instanceId' => null,
        'status' => null,
        'backupName' => null,
        'size' => null,
        'beginTime' => null,
        'endTime' => null,
        'backupType' => null,
        'backupLevel' => null
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
    * backupId  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    * backupName  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * size  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * beginTime  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * backupType  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    * backupLevel  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'backupName' => 'backup_name',
            'size' => 'size',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'backupType' => 'backup_type',
            'backupLevel' => 'backup_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    * backupName  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * size  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * beginTime  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * backupType  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    * backupLevel  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'backupName' => 'setBackupName',
            'size' => 'setSize',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'backupType' => 'setBackupType',
            'backupLevel' => 'setBackupLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    * backupName  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * size  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * beginTime  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * backupType  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    * backupLevel  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'backupName' => 'getBackupName',
            'size' => 'getSize',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'backupType' => 'getBackupType',
            'backupLevel' => 'getBackupLevel'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
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
    * Gets backupId
    *  **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId **参数解释**：  备份ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：  源实例ID（已释放实例）。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：  备份状态。  **约束限制**：  不涉及。  **取值范围**：  Active：可用。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets backupName
    *  **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName **参数解释**：  备份名称。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**：  备份大小，单位MB。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**：  备份开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**：  备份结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于备份开始时间。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets backupType
    *  **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType **参数解释**：  备份类型。  **约束限制**：  不涉及。  **取值范围**：  - auto：自动全量备份。 - manual：手动全量备份。 - differential：差量备份。 - sparse：稀疏备份。 - recycle: 回收站备份。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets backupLevel
    *  **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel **参数解释**：  备份级别，即备份位置。  **约束限制**：  不涉及。  **取值范围**：  - 1：一级备份。 - 2：二级备份。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
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

