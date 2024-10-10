<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVolumesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVolumesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  通过云硬盘ID进行分页查询。默认为查询第一页数据。
    * name  磁盘名称。
    * limit  返回结果个数限制。默认值为1000。
    * sortKey  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    * offset  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    * status  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    * metadata  云硬盘元数据。
    * availabilityZone  可用区信息。
    * multiattach  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    * serviceType  服务类型，仅支持EVS、DSS、DESS。
    * dedicatedStorageId  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    * dedicatedStorageName  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    * volumeTypeId  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    * id  云硬盘ID。
    * ids  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    * serverId  云服务器id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'sortKey' => 'string',
            'offset' => 'int',
            'sortDir' => 'string',
            'status' => 'string',
            'metadata' => 'string',
            'availabilityZone' => 'string',
            'multiattach' => 'bool',
            'serviceType' => 'string',
            'dedicatedStorageId' => 'string',
            'dedicatedStorageName' => 'string',
            'volumeTypeId' => 'string',
            'id' => 'string',
            'ids' => 'string',
            'enterpriseProjectId' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  通过云硬盘ID进行分页查询。默认为查询第一页数据。
    * name  磁盘名称。
    * limit  返回结果个数限制。默认值为1000。
    * sortKey  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    * offset  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    * status  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    * metadata  云硬盘元数据。
    * availabilityZone  可用区信息。
    * multiattach  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    * serviceType  服务类型，仅支持EVS、DSS、DESS。
    * dedicatedStorageId  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    * dedicatedStorageName  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    * volumeTypeId  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    * id  云硬盘ID。
    * ids  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    * serverId  云服务器id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'name' => null,
        'limit' => 'int32',
        'sortKey' => null,
        'offset' => 'int32',
        'sortDir' => null,
        'status' => null,
        'metadata' => null,
        'availabilityZone' => null,
        'multiattach' => null,
        'serviceType' => null,
        'dedicatedStorageId' => null,
        'dedicatedStorageName' => null,
        'volumeTypeId' => null,
        'id' => null,
        'ids' => null,
        'enterpriseProjectId' => null,
        'serverId' => null
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
    * marker  通过云硬盘ID进行分页查询。默认为查询第一页数据。
    * name  磁盘名称。
    * limit  返回结果个数限制。默认值为1000。
    * sortKey  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    * offset  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    * status  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    * metadata  云硬盘元数据。
    * availabilityZone  可用区信息。
    * multiattach  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    * serviceType  服务类型，仅支持EVS、DSS、DESS。
    * dedicatedStorageId  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    * dedicatedStorageName  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    * volumeTypeId  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    * id  云硬盘ID。
    * ids  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    * serverId  云服务器id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'name' => 'name',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'offset' => 'offset',
            'sortDir' => 'sort_dir',
            'status' => 'status',
            'metadata' => 'metadata',
            'availabilityZone' => 'availability_zone',
            'multiattach' => 'multiattach',
            'serviceType' => 'service_type',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dedicatedStorageName' => 'dedicated_storage_name',
            'volumeTypeId' => 'volume_type_id',
            'id' => 'id',
            'ids' => 'ids',
            'enterpriseProjectId' => 'enterprise_project_id',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  通过云硬盘ID进行分页查询。默认为查询第一页数据。
    * name  磁盘名称。
    * limit  返回结果个数限制。默认值为1000。
    * sortKey  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    * offset  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    * status  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    * metadata  云硬盘元数据。
    * availabilityZone  可用区信息。
    * multiattach  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    * serviceType  服务类型，仅支持EVS、DSS、DESS。
    * dedicatedStorageId  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    * dedicatedStorageName  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    * volumeTypeId  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    * id  云硬盘ID。
    * ids  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    * serverId  云服务器id。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'name' => 'setName',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'offset' => 'setOffset',
            'sortDir' => 'setSortDir',
            'status' => 'setStatus',
            'metadata' => 'setMetadata',
            'availabilityZone' => 'setAvailabilityZone',
            'multiattach' => 'setMultiattach',
            'serviceType' => 'setServiceType',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dedicatedStorageName' => 'setDedicatedStorageName',
            'volumeTypeId' => 'setVolumeTypeId',
            'id' => 'setId',
            'ids' => 'setIds',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  通过云硬盘ID进行分页查询。默认为查询第一页数据。
    * name  磁盘名称。
    * limit  返回结果个数限制。默认值为1000。
    * sortKey  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    * offset  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    * status  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    * metadata  云硬盘元数据。
    * availabilityZone  可用区信息。
    * multiattach  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    * serviceType  服务类型，仅支持EVS、DSS、DESS。
    * dedicatedStorageId  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    * dedicatedStorageName  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    * volumeTypeId  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    * id  云硬盘ID。
    * ids  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    * enterpriseProjectId  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    * serverId  云服务器id。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'name' => 'getName',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'offset' => 'getOffset',
            'sortDir' => 'getSortDir',
            'status' => 'getStatus',
            'metadata' => 'getMetadata',
            'availabilityZone' => 'getAvailabilityZone',
            'multiattach' => 'getMultiattach',
            'serviceType' => 'getServiceType',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dedicatedStorageName' => 'getDedicatedStorageName',
            'volumeTypeId' => 'getVolumeTypeId',
            'id' => 'getId',
            'ids' => 'getIds',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'serverId' => 'getServerId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dedicatedStorageName'] = isset($data['dedicatedStorageName']) ? $data['dedicatedStorageName'] : null;
        $this->container['volumeTypeId'] = isset($data['volumeTypeId']) ? $data['volumeTypeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets marker
    *  通过云硬盘ID进行分页查询。默认为查询第一页数据。
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
    * @param string|null $marker 通过云硬盘ID进行分页查询。默认为查询第一页数据。
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
    *  磁盘名称。
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
    * @param string|null $name 磁盘名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
    *  返回结果个数限制。默认值为1000。
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
    * @param int|null $limit 返回结果个数限制。默认值为1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，支持id，status，size，created_at等关键字，默认为“created_at”。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
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
    * @param int|null $offset 偏移量（偏移量为一个大于0小于磁盘总个数的整数，表示查询该偏移量后面的所有的磁盘）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortDir
    *  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets status
    *  云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
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
    * @param string|null $status 云硬盘状态，取值可参考：\"[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)\"。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets metadata
    *  云硬盘元数据。
    *
    * @return string|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param string|null $metadata 云硬盘元数据。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区信息。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区信息。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets multiattach
    *  是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    *
    * @return bool|null
    */
    public function getMultiattach()
    {
        return $this->container['multiattach'];
    }

    /**
    * Sets multiattach
    *
    * @param bool|null $multiattach 是否为共享云硬盘。 true：表示为共享云硬盘。 false：表示为非共享云硬盘。
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型，仅支持EVS、DSS、DESS。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型，仅支持EVS、DSS、DESS。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 专属存储池ID，可过滤出该专属存储池下的所有云硬盘，必须精确匹配。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets dedicatedStorageName
    *  专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    *
    * @return string|null
    */
    public function getDedicatedStorageName()
    {
        return $this->container['dedicatedStorageName'];
    }

    /**
    * Sets dedicatedStorageName
    *
    * @param string|null $dedicatedStorageName 专属存储池的名字，可过滤出该专属存储池下的所有云硬盘，支持模糊匹配。
    *
    * @return $this
    */
    public function setDedicatedStorageName($dedicatedStorageName)
    {
        $this->container['dedicatedStorageName'] = $dedicatedStorageName;
        return $this;
    }

    /**
    * Gets volumeTypeId
    *  云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    *
    * @return string|null
    */
    public function getVolumeTypeId()
    {
        return $this->container['volumeTypeId'];
    }

    /**
    * Sets volumeTypeId
    *
    * @param string|null $volumeTypeId 云硬盘类型id。 通过\"[查询云硬盘类型列表](https://support.huaweicloud.com/api-evs/evs_04_3035.html)\"可以查到，即volume_types参数说明表格中的“id”
    *
    * @return $this
    */
    public function setVolumeTypeId($volumeTypeId)
    {
        $this->container['volumeTypeId'] = $volumeTypeId;
        return $this;
    }

    /**
    * Gets id
    *  云硬盘ID。
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
    * @param string|null $id 云硬盘ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ids
    *  云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    *
    * @return string|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string|null $ids 云硬盘id列表，格式为ids=['id1','id2',...,'idx']，返回“ids”中有效id的云硬盘详情，无效的id会被忽略。 支持查询最多60个id对应的云硬盘详情。 如果“id”和“ids”查询参数同时存在，“id”会被忽略。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
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
    * @param string|null $enterpriseProjectId 指定企业项目id进行过滤。 传入“all_granted_eps”，代表查询权限范围内的所有企业项目下的云硬盘。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参考：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets serverId
    *  云服务器id。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云服务器id。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

