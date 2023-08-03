<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  还原点ID
    * dec  专属云 （专属云场景使用，非专属云场景不生效）
    * endTime  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * imageType  备份类型
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id
    * name  名称
    * offset  偏移值，正整数
    * resourceAz  支持按az来过滤
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    * startTime  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * status  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    * vaultId  存储库ID
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * ownType  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    * memberStatus  共享状态
    * parentId  父备份ID
    * usedPercent  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    * showReplication  是否返回复制记录
    * incremental  是否是增备
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'dec' => 'bool',
            'endTime' => 'string',
            'imageType' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'name' => 'string',
            'offset' => 'int',
            'resourceAz' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'sort' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'vaultId' => 'string',
            'enterpriseProjectId' => 'string',
            'ownType' => 'string',
            'memberStatus' => 'string',
            'parentId' => 'string',
            'usedPercent' => 'string',
            'showReplication' => 'bool',
            'incremental' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  还原点ID
    * dec  专属云 （专属云场景使用，非专属云场景不生效）
    * endTime  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * imageType  备份类型
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id
    * name  名称
    * offset  偏移值，正整数
    * resourceAz  支持按az来过滤
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    * startTime  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * status  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    * vaultId  存储库ID
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * ownType  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    * memberStatus  共享状态
    * parentId  父备份ID
    * usedPercent  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    * showReplication  是否返回复制记录
    * incremental  是否是增备
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'dec' => null,
        'endTime' => null,
        'imageType' => null,
        'limit' => 'int32',
        'marker' => null,
        'name' => null,
        'offset' => 'int32',
        'resourceAz' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'sort' => null,
        'startTime' => null,
        'status' => null,
        'vaultId' => null,
        'enterpriseProjectId' => null,
        'ownType' => null,
        'memberStatus' => null,
        'parentId' => null,
        'usedPercent' => null,
        'showReplication' => null,
        'incremental' => null
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
    * checkpointId  还原点ID
    * dec  专属云 （专属云场景使用，非专属云场景不生效）
    * endTime  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * imageType  备份类型
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id
    * name  名称
    * offset  偏移值，正整数
    * resourceAz  支持按az来过滤
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    * startTime  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * status  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    * vaultId  存储库ID
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * ownType  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    * memberStatus  共享状态
    * parentId  父备份ID
    * usedPercent  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    * showReplication  是否返回复制记录
    * incremental  是否是增备
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'dec' => 'dec',
            'endTime' => 'end_time',
            'imageType' => 'image_type',
            'limit' => 'limit',
            'marker' => 'marker',
            'name' => 'name',
            'offset' => 'offset',
            'resourceAz' => 'resource_az',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'sort' => 'sort',
            'startTime' => 'start_time',
            'status' => 'status',
            'vaultId' => 'vault_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ownType' => 'own_type',
            'memberStatus' => 'member_status',
            'parentId' => 'parent_id',
            'usedPercent' => 'used_percent',
            'showReplication' => 'show_replication',
            'incremental' => 'incremental'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  还原点ID
    * dec  专属云 （专属云场景使用，非专属云场景不生效）
    * endTime  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * imageType  备份类型
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id
    * name  名称
    * offset  偏移值，正整数
    * resourceAz  支持按az来过滤
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    * startTime  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * status  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    * vaultId  存储库ID
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * ownType  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    * memberStatus  共享状态
    * parentId  父备份ID
    * usedPercent  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    * showReplication  是否返回复制记录
    * incremental  是否是增备
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'dec' => 'setDec',
            'endTime' => 'setEndTime',
            'imageType' => 'setImageType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'name' => 'setName',
            'offset' => 'setOffset',
            'resourceAz' => 'setResourceAz',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'sort' => 'setSort',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'vaultId' => 'setVaultId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ownType' => 'setOwnType',
            'memberStatus' => 'setMemberStatus',
            'parentId' => 'setParentId',
            'usedPercent' => 'setUsedPercent',
            'showReplication' => 'setShowReplication',
            'incremental' => 'setIncremental'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  还原点ID
    * dec  专属云 （专属云场景使用，非专属云场景不生效）
    * endTime  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * imageType  备份类型
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id
    * name  名称
    * offset  偏移值，正整数
    * resourceAz  支持按az来过滤
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    * startTime  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * status  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    * vaultId  存储库ID
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    * ownType  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    * memberStatus  共享状态
    * parentId  父备份ID
    * usedPercent  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    * showReplication  是否返回复制记录
    * incremental  是否是增备
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'dec' => 'getDec',
            'endTime' => 'getEndTime',
            'imageType' => 'getImageType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'name' => 'getName',
            'offset' => 'getOffset',
            'resourceAz' => 'getResourceAz',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'sort' => 'getSort',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'vaultId' => 'getVaultId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ownType' => 'getOwnType',
            'memberStatus' => 'getMemberStatus',
            'parentId' => 'getParentId',
            'usedPercent' => 'getUsedPercent',
            'showReplication' => 'getShowReplication',
            'incremental' => 'getIncremental'
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
    const IMAGE_TYPE_BACKUP = 'backup';
    const IMAGE_TYPE_REPLICATION = 'replication';
    const RESOURCE_TYPE_OSCINDERVOLUME = 'OS::Cinder::Volume';
    const RESOURCE_TYPE_OSNOVASERVER = 'OS::Nova::Server';
    const RESOURCE_TYPE_OSWORKSPACEDESKTOP_V2 = 'OS::Workspace::DesktopV2';
    const STATUS_AVAILABLE = 'available';
    const STATUS_PROTECTING = 'protecting';
    const STATUS_DELETING = 'deleting';
    const STATUS_RESTORING = 'restoring';
    const STATUS_ERROR = 'error';
    const STATUS_WAITING_PROTECT = 'waiting_protect';
    const STATUS_WAITING_DELETE = 'waiting_delete';
    const STATUS_WAITING_RESTORE = 'waiting_restore';
    const OWN_TYPE_ALL_GRANTED = 'all_granted';
    const OWN_TYPE__PRIVATE = 'private';
    const OWN_TYPE_SHARED = 'shared';
    const MEMBER_STATUS_PENDING = 'pending';
    const MEMBER_STATUS_ACCEPTED = 'accepted';
    const MEMBER_STATUS_REJECTED = 'rejected';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImageTypeAllowableValues()
    {
        return [
            self::IMAGE_TYPE_BACKUP,
            self::IMAGE_TYPE_REPLICATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_OSCINDERVOLUME,
            self::RESOURCE_TYPE_OSNOVASERVER,
            self::RESOURCE_TYPE_OSWORKSPACEDESKTOP_V2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_PROTECTING,
            self::STATUS_DELETING,
            self::STATUS_RESTORING,
            self::STATUS_ERROR,
            self::STATUS_WAITING_PROTECT,
            self::STATUS_WAITING_DELETE,
            self::STATUS_WAITING_RESTORE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOwnTypeAllowableValues()
    {
        return [
            self::OWN_TYPE_ALL_GRANTED,
            self::OWN_TYPE__PRIVATE,
            self::OWN_TYPE_SHARED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberStatusAllowableValues()
    {
        return [
            self::MEMBER_STATUS_PENDING,
            self::MEMBER_STATUS_ACCEPTED,
            self::MEMBER_STATUS_REJECTED,
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
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['dec'] = isset($data['dec']) ? $data['dec'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['resourceAz'] = isset($data['resourceAz']) ? $data['resourceAz'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ownType'] = isset($data['ownType']) ? $data['ownType'] : null;
        $this->container['memberStatus'] = isset($data['memberStatus']) ? $data['memberStatus'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['usedPercent'] = isset($data['usedPercent']) ? $data['usedPercent'] : null;
        $this->container['showReplication'] = isset($data['showReplication']) ? $data['showReplication'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getImageTypeAllowableValues();
                if (!is_null($this->container['imageType']) && !in_array($this->container['imageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imageType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOwnTypeAllowableValues();
                if (!is_null($this->container['ownType']) && !in_array($this->container['ownType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ownType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMemberStatusAllowableValues();
                if (!is_null($this->container['memberStatus']) && !in_array($this->container['memberStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberStatus', must be one of '%s'",
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
    * Gets checkpointId
    *  还原点ID
    *
    * @return string|null
    */
    public function getCheckpointId()
    {
        return $this->container['checkpointId'];
    }

    /**
    * Sets checkpointId
    *
    * @param string|null $checkpointId 还原点ID
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets dec
    *  专属云 （专属云场景使用，非专属云场景不生效）
    *
    * @return bool|null
    */
    public function getDec()
    {
        return $this->container['dec'];
    }

    /**
    * Sets dec
    *
    * @param bool|null $dec 专属云 （专属云场景使用，非专属云场景不生效）
    *
    * @return $this
    */
    public function setDec($dec)
    {
        $this->container['dec'] = $dec;
        return $this;
    }

    /**
    * Gets endTime
    *  备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
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
    * @param string|null $endTime 备份产生时间范围的结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets imageType
    *  备份类型
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 备份类型
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，正整数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一次查询最后一条的id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一次查询最后一条的id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值，正整数
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移值，正整数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets resourceAz
    *  支持按az来过滤
    *
    * @return string|null
    */
    public function getResourceAz()
    {
        return $this->container['resourceAz'];
    }

    /**
    * Sets resourceAz
    *
    * @param string|null $resourceAz 支持按az来过滤
    *
    * @return $this
    */
    public function setResourceAz($resourceAz)
    {
        $this->container['resourceAz'] = $resourceAz;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型: 云服务器: OS::Nova::Server, 云硬盘: OS::Cinder::Volume, 云桌面：OS::Workspace::DesktopV2
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets sort
    *  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。key取值范围:[created_at，updated_at，name，status，protected_at，id]
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets startTime
    *  备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 备份产生时间范围的开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
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
    * @param string|null $status 状态。 调用API时，支持通过传多个status值进行过滤。例如：status=available&status=error
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 存储库ID
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ownType
    *  持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    *
    * @return string|null
    */
    public function getOwnType()
    {
        return $this->container['ownType'];
    }

    /**
    * Sets ownType
    *
    * @param string|null $ownType 持有类型，私有的private/共享的shared/全部all_granted，默认只查询private。
    *
    * @return $this
    */
    public function setOwnType($ownType)
    {
        $this->container['ownType'] = $ownType;
        return $this;
    }

    /**
    * Gets memberStatus
    *  共享状态
    *
    * @return string|null
    */
    public function getMemberStatus()
    {
        return $this->container['memberStatus'];
    }

    /**
    * Sets memberStatus
    *
    * @param string|null $memberStatus 共享状态
    *
    * @return $this
    */
    public function setMemberStatus($memberStatus)
    {
        $this->container['memberStatus'] = $memberStatus;
        return $this;
    }

    /**
    * Gets parentId
    *  父备份ID
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父备份ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets usedPercent
    *  根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    *
    * @return string|null
    */
    public function getUsedPercent()
    {
        return $this->container['usedPercent'];
    }

    /**
    * Sets usedPercent
    *
    * @param string|null $usedPercent 根据存储库使用率过滤备份，取值范围 [1, 100]，含1和100。例如，used_percent=80，表示筛选所属存储库使用率大于等于80%的所有备份。
    *
    * @return $this
    */
    public function setUsedPercent($usedPercent)
    {
        $this->container['usedPercent'] = $usedPercent;
        return $this;
    }

    /**
    * Gets showReplication
    *  是否返回复制记录
    *
    * @return bool|null
    */
    public function getShowReplication()
    {
        return $this->container['showReplication'];
    }

    /**
    * Sets showReplication
    *
    * @param bool|null $showReplication 是否返回复制记录
    *
    * @return $this
    */
    public function setShowReplication($showReplication)
    {
        $this->container['showReplication'] = $showReplication;
        return $this;
    }

    /**
    * Gets incremental
    *  是否是增备
    *
    * @return bool|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool|null $incremental 是否是增备
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
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

