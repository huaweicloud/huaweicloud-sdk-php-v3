<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleInstancesDetailResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleInstancesDetailResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * haMode  部署形态。
    * engineName  引擎名称
    * engineVersion  引擎版本号。
    * payModel  计费模式（0：按需计费；1：包年/包月）。
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * volumeType  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    * volumeSize  磁盘大小
    * dataVip  数据vip。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称
    * backupLevel  备份级别
    * recycleBackupId  备份ID。（指删除实例时产生备份信息中的备份ID）。
    * recycleStatus  回收站备份状态。（Running：运行中；Active：有效的）。
    * mode  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'haMode' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'payModel' => 'string',
            'createdAt' => 'string',
            'deletedAt' => 'string',
            'volumeType' => 'string',
            'volumeSize' => 'string',
            'dataVip' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'backupLevel' => 'string',
            'recycleBackupId' => 'string',
            'recycleStatus' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * haMode  部署形态。
    * engineName  引擎名称
    * engineVersion  引擎版本号。
    * payModel  计费模式（0：按需计费；1：包年/包月）。
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * volumeType  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    * volumeSize  磁盘大小
    * dataVip  数据vip。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称
    * backupLevel  备份级别
    * recycleBackupId  备份ID。（指删除实例时产生备份信息中的备份ID）。
    * recycleStatus  回收站备份状态。（Running：运行中；Active：有效的）。
    * mode  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'haMode' => null,
        'engineName' => null,
        'engineVersion' => null,
        'payModel' => null,
        'createdAt' => null,
        'deletedAt' => null,
        'volumeType' => null,
        'volumeSize' => null,
        'dataVip' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'backupLevel' => null,
        'recycleBackupId' => null,
        'recycleStatus' => null,
        'mode' => null
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
    * id  实例ID。
    * name  实例名称。
    * haMode  部署形态。
    * engineName  引擎名称
    * engineVersion  引擎版本号。
    * payModel  计费模式（0：按需计费；1：包年/包月）。
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * volumeType  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    * volumeSize  磁盘大小
    * dataVip  数据vip。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称
    * backupLevel  备份级别
    * recycleBackupId  备份ID。（指删除实例时产生备份信息中的备份ID）。
    * recycleStatus  回收站备份状态。（Running：运行中；Active：有效的）。
    * mode  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'haMode' => 'ha_mode',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'payModel' => 'pay_model',
            'createdAt' => 'created_at',
            'deletedAt' => 'deleted_at',
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size',
            'dataVip' => 'data_vip',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'backupLevel' => 'backup_level',
            'recycleBackupId' => 'recycle_backup_id',
            'recycleStatus' => 'recycle_status',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * haMode  部署形态。
    * engineName  引擎名称
    * engineVersion  引擎版本号。
    * payModel  计费模式（0：按需计费；1：包年/包月）。
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * volumeType  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    * volumeSize  磁盘大小
    * dataVip  数据vip。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称
    * backupLevel  备份级别
    * recycleBackupId  备份ID。（指删除实例时产生备份信息中的备份ID）。
    * recycleStatus  回收站备份状态。（Running：运行中；Active：有效的）。
    * mode  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'haMode' => 'setHaMode',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'payModel' => 'setPayModel',
            'createdAt' => 'setCreatedAt',
            'deletedAt' => 'setDeletedAt',
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize',
            'dataVip' => 'setDataVip',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'backupLevel' => 'setBackupLevel',
            'recycleBackupId' => 'setRecycleBackupId',
            'recycleStatus' => 'setRecycleStatus',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * haMode  部署形态。
    * engineName  引擎名称
    * engineVersion  引擎版本号。
    * payModel  计费模式（0：按需计费；1：包年/包月）。
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * volumeType  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    * volumeSize  磁盘大小
    * dataVip  数据vip。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称
    * backupLevel  备份级别
    * recycleBackupId  备份ID。（指删除实例时产生备份信息中的备份ID）。
    * recycleStatus  回收站备份状态。（Running：运行中；Active：有效的）。
    * mode  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'haMode' => 'getHaMode',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'payModel' => 'getPayModel',
            'createdAt' => 'getCreatedAt',
            'deletedAt' => 'getDeletedAt',
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize',
            'dataVip' => 'getDataVip',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'backupLevel' => 'getBackupLevel',
            'recycleBackupId' => 'getRecycleBackupId',
            'recycleStatus' => 'getRecycleStatus',
            'mode' => 'getMode'
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
    const HA_MODE_HA = 'Ha';
    const HA_MODE_INDEPENDENT = 'Independent';
    const PAY_MODEL__0 = '0';
    const PAY_MODEL__1 = '1';
    const VOLUME_TYPE_HIGH = 'high';
    const VOLUME_TYPE_ULTRAHIGH = 'ultrahigh';
    const VOLUME_TYPE_ESSD = 'essd';
    const RECYCLE_STATUS_RUNNING = 'Running';
    const RECYCLE_STATUS_ACTIVE = 'Active';
    const MODE_BASIC = 'basic';
    const MODE_STANDARD = 'standard';
    const MODE_ENTERPRISE = 'enterprise';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaModeAllowableValues()
    {
        return [
            self::HA_MODE_HA,
            self::HA_MODE_INDEPENDENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPayModelAllowableValues()
    {
        return [
            self::PAY_MODEL__0,
            self::PAY_MODEL__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeTypeAllowableValues()
    {
        return [
            self::VOLUME_TYPE_HIGH,
            self::VOLUME_TYPE_ULTRAHIGH,
            self::VOLUME_TYPE_ESSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecycleStatusAllowableValues()
    {
        return [
            self::RECYCLE_STATUS_RUNNING,
            self::RECYCLE_STATUS_ACTIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_BASIC,
            self::MODE_STANDARD,
            self::MODE_ENTERPRISE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['deletedAt'] = isset($data['deletedAt']) ? $data['deletedAt'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['recycleBackupId'] = isset($data['recycleBackupId']) ? $data['recycleBackupId'] : null;
        $this->container['recycleStatus'] = isset($data['recycleStatus']) ? $data['recycleStatus'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['haMode'] === null) {
            $invalidProperties[] = "'haMode' can't be null";
        }
            $allowedValues = $this->getHaModeAllowableValues();
                if (!is_null($this->container['haMode']) && !in_array($this->container['haMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['payModel'] === null) {
            $invalidProperties[] = "'payModel' can't be null";
        }
            $allowedValues = $this->getPayModelAllowableValues();
                if (!is_null($this->container['payModel']) && !in_array($this->container['payModel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'payModel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['deletedAt'] === null) {
            $invalidProperties[] = "'deletedAt' can't be null";
        }
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
            $allowedValues = $this->getVolumeTypeAllowableValues();
                if (!is_null($this->container['volumeType']) && !in_array($this->container['volumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dataVip'] === null) {
            $invalidProperties[] = "'dataVip' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['recycleBackupId'] === null) {
            $invalidProperties[] = "'recycleBackupId' can't be null";
        }
        if ($this->container['recycleStatus'] === null) {
            $invalidProperties[] = "'recycleStatus' can't be null";
        }
            $allowedValues = $this->getRecycleStatusAllowableValues();
                if (!is_null($this->container['recycleStatus']) && !in_array($this->container['recycleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recycleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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
    * Gets id
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets haMode
    *  部署形态。
    *
    * @return string
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string $haMode 部署形态。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本号。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本号。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets payModel
    *  计费模式（0：按需计费；1：包年/包月）。
    *
    * @return string
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string $payModel 计费模式（0：按需计费；1：包年/包月）。
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets deletedAt
    *  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
    * Sets deletedAt
    *
    * @param string $deletedAt 删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setDeletedAt($deletedAt)
    {
        $this->container['deletedAt'] = $deletedAt;
        return $this;
    }

    /**
    * Gets volumeType
    *  磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType 磁盘类型。（SAS：high；SSD：ultrahigh；ESSD：essd）。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeSize
    *  磁盘大小
    *
    * @return string|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param string|null $volumeSize 磁盘大小
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets dataVip
    *  数据vip。
    *
    * @return string
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string $dataVip 数据vip。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets backupLevel
    *  备份级别
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
    * @param string|null $backupLevel 备份级别
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets recycleBackupId
    *  备份ID。（指删除实例时产生备份信息中的备份ID）。
    *
    * @return string
    */
    public function getRecycleBackupId()
    {
        return $this->container['recycleBackupId'];
    }

    /**
    * Sets recycleBackupId
    *
    * @param string $recycleBackupId 备份ID。（指删除实例时产生备份信息中的备份ID）。
    *
    * @return $this
    */
    public function setRecycleBackupId($recycleBackupId)
    {
        $this->container['recycleBackupId'] = $recycleBackupId;
        return $this;
    }

    /**
    * Gets recycleStatus
    *  回收站备份状态。（Running：运行中；Active：有效的）。
    *
    * @return string
    */
    public function getRecycleStatus()
    {
        return $this->container['recycleStatus'];
    }

    /**
    * Sets recycleStatus
    *
    * @param string $recycleStatus 回收站备份状态。（Running：运行中；Active：有效的）。
    *
    * @return $this
    */
    public function setRecycleStatus($recycleStatus)
    {
        $this->container['recycleStatus'] = $recycleStatus;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 实例类型（basic：基础版；standard：标准版；enterprise：企业版）。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

