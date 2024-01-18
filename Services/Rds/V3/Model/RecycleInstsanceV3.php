<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleInstsanceV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleInstsanceV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例id
    * name  实例名
    * haMode  实例主备模式，取值：Ha（主备），不区分大小写。
    * engineName  引擎名
    * engineVersion  数据库引擎版本
    * payModel  计费方式
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * volumeType  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    * volumeSize  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    * dataVip  内网地址
    * dataVipV6  ipv6内网地址
    * enterpriseProjectId  企业项目ID
    * retainedUntil  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * recycleBackupId  备份id
    * recycleStatus  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    * isServerless  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
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
            'volumeSize' => 'int',
            'dataVip' => 'string',
            'dataVipV6' => 'string',
            'enterpriseProjectId' => 'string',
            'retainedUntil' => 'string',
            'recycleBackupId' => 'string',
            'recycleStatus' => 'string',
            'isServerless' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例id
    * name  实例名
    * haMode  实例主备模式，取值：Ha（主备），不区分大小写。
    * engineName  引擎名
    * engineVersion  数据库引擎版本
    * payModel  计费方式
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * volumeType  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    * volumeSize  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    * dataVip  内网地址
    * dataVipV6  ipv6内网地址
    * enterpriseProjectId  企业项目ID
    * retainedUntil  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * recycleBackupId  备份id
    * recycleStatus  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    * isServerless  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
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
        'volumeSize' => 'int32',
        'dataVip' => null,
        'dataVipV6' => null,
        'enterpriseProjectId' => null,
        'retainedUntil' => null,
        'recycleBackupId' => null,
        'recycleStatus' => null,
        'isServerless' => null
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
    * id  实例id
    * name  实例名
    * haMode  实例主备模式，取值：Ha（主备），不区分大小写。
    * engineName  引擎名
    * engineVersion  数据库引擎版本
    * payModel  计费方式
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * volumeType  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    * volumeSize  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    * dataVip  内网地址
    * dataVipV6  ipv6内网地址
    * enterpriseProjectId  企业项目ID
    * retainedUntil  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * recycleBackupId  备份id
    * recycleStatus  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    * isServerless  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
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
            'dataVipV6' => 'data_vip_v6',
            'enterpriseProjectId' => 'enterprise_project_id',
            'retainedUntil' => 'retained_until',
            'recycleBackupId' => 'recycle_backup_id',
            'recycleStatus' => 'recycle_status',
            'isServerless' => 'is_serverless'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例id
    * name  实例名
    * haMode  实例主备模式，取值：Ha（主备），不区分大小写。
    * engineName  引擎名
    * engineVersion  数据库引擎版本
    * payModel  计费方式
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * volumeType  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    * volumeSize  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    * dataVip  内网地址
    * dataVipV6  ipv6内网地址
    * enterpriseProjectId  企业项目ID
    * retainedUntil  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * recycleBackupId  备份id
    * recycleStatus  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    * isServerless  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
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
            'dataVipV6' => 'setDataVipV6',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'retainedUntil' => 'setRetainedUntil',
            'recycleBackupId' => 'setRecycleBackupId',
            'recycleStatus' => 'setRecycleStatus',
            'isServerless' => 'setIsServerless'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例id
    * name  实例名
    * haMode  实例主备模式，取值：Ha（主备），不区分大小写。
    * engineName  引擎名
    * engineVersion  数据库引擎版本
    * payModel  计费方式
    * createdAt  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * deletedAt  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * volumeType  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    * volumeSize  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    * dataVip  内网地址
    * dataVipV6  ipv6内网地址
    * enterpriseProjectId  企业项目ID
    * retainedUntil  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * recycleBackupId  备份id
    * recycleStatus  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    * isServerless  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
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
            'dataVipV6' => 'getDataVipV6',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'retainedUntil' => 'getRetainedUntil',
            'recycleBackupId' => 'getRecycleBackupId',
            'recycleStatus' => 'getRecycleStatus',
            'isServerless' => 'getIsServerless'
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
        $this->container['dataVipV6'] = isset($data['dataVipV6']) ? $data['dataVipV6'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['retainedUntil'] = isset($data['retainedUntil']) ? $data['retainedUntil'] : null;
        $this->container['recycleBackupId'] = isset($data['recycleBackupId']) ? $data['recycleBackupId'] : null;
        $this->container['recycleStatus'] = isset($data['recycleStatus']) ? $data['recycleStatus'] : null;
        $this->container['isServerless'] = isset($data['isServerless']) ? $data['isServerless'] : null;
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
    * Gets id
    *  实例id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例id
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
    *  实例名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名
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
    *  实例主备模式，取值：Ha（主备），不区分大小写。
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode 实例主备模式，取值：Ha（主备），不区分大小写。
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
    *  引擎名
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
    * @param string|null $engineName 引擎名
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
    *  数据库引擎版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 数据库引擎版本
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
    *  计费方式
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 计费方式
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
    *  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    *  删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
    * Sets deletedAt
    *
    * @param string|null $deletedAt 删除时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    *  磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 磁盘类型。 取值范围如下，区分大小写： - COMMON，表示SATA。 - HIGH，表示SAS。 - ULTRAHIGH，表示SSD。 - ULTRAHIGHPRO，表示SSD尊享版，仅支持超高性能型尊享版（需申请权限）。 - CLOUDSSD，表示SSD云盘，仅支持通用型和独享型规格实例。 - LOCALSSD，表示本地SSD。
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
    *  磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 磁盘大小，单位为GB。 取值范围：40GB~4000GB，必须为10的整数倍。  部分用户支持40GB~6000GB，如果您想创建存储空间最大为6000GB的数据库实例，或提高扩容上限到10000GB，请联系客服开通。  说明：对于只读实例，该参数无效，磁盘大小，默认和主实例相同。
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
    *  内网地址
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip 内网地址
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets dataVipV6
    *  ipv6内网地址
    *
    * @return string|null
    */
    public function getDataVipV6()
    {
        return $this->container['dataVipV6'];
    }

    /**
    * Sets dataVipV6
    *
    * @param string|null $dataVipV6 ipv6内网地址
    *
    * @return $this
    */
    public function setDataVipV6($dataVipV6)
    {
        $this->container['dataVipV6'] = $dataVipV6;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets retainedUntil
    *  保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getRetainedUntil()
    {
        return $this->container['retainedUntil'];
    }

    /**
    * Sets retainedUntil
    *
    * @param string|null $retainedUntil 保留时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setRetainedUntil($retainedUntil)
    {
        $this->container['retainedUntil'] = $retainedUntil;
        return $this;
    }

    /**
    * Gets recycleBackupId
    *  备份id
    *
    * @return string|null
    */
    public function getRecycleBackupId()
    {
        return $this->container['recycleBackupId'];
    }

    /**
    * Sets recycleBackupId
    *
    * @param string|null $recycleBackupId 备份id
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
    *  备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    *
    * @return string|null
    */
    public function getRecycleStatus()
    {
        return $this->container['recycleStatus'];
    }

    /**
    * Sets recycleStatus
    *
    * @param string|null $recycleStatus 备份状态 取值范围如下，区分大小写: - BUILDING 备份中，不能进行重建 - COMPLETED，标识备份完成，可以重建
    *
    * @return $this
    */
    public function setRecycleStatus($recycleStatus)
    {
        $this->container['recycleStatus'] = $recycleStatus;
        return $this;
    }

    /**
    * Gets isServerless
    *  是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
    *
    * @return bool|null
    */
    public function getIsServerless()
    {
        return $this->container['isServerless'];
    }

    /**
    * Sets isServerless
    *
    * @param bool|null $isServerless 是否为serverless实例 - false 不是serverless实例 - true 是serverless实例
    *
    * @return $this
    */
    public function setIsServerless($isServerless)
    {
        $this->container['isServerless'] = $isServerless;
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

