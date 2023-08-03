<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQueueDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQueueDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueId  队列ID。
    * queueName  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    * cuCount  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * enterpriseProjectId  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * resourceType  资源类型。 vm：ecf集群 container：容器化集群（k8s）
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'queueId' => 'int',
            'queueName' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'createTime' => 'int',
            'queueType' => 'string',
            'cuCount' => 'int',
            'chargingMode' => 'int',
            'resourceId' => 'string',
            'resourceMode' => 'int',
            'enterpriseProjectId' => 'string',
            'resourceType' => 'string',
            'cuSpec' => 'int',
            'cuScaleOutLimit' => 'int',
            'cuScaleInLimit' => 'int',
            'elasticResourcePoolName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueId  队列ID。
    * queueName  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    * cuCount  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * enterpriseProjectId  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * resourceType  资源类型。 vm：ecf集群 container：容器化集群（k8s）
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'queueId' => 'int64',
        'queueName' => null,
        'description' => null,
        'owner' => null,
        'createTime' => 'int64',
        'queueType' => null,
        'cuCount' => 'int32',
        'chargingMode' => 'int32',
        'resourceId' => null,
        'resourceMode' => 'int32',
        'enterpriseProjectId' => null,
        'resourceType' => null,
        'cuSpec' => 'int32',
        'cuScaleOutLimit' => 'int32',
        'cuScaleInLimit' => 'int32',
        'elasticResourcePoolName' => null
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
    * isSuccess  请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueId  队列ID。
    * queueName  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    * cuCount  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * enterpriseProjectId  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * resourceType  资源类型。 vm：ecf集群 container：容器化集群（k8s）
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'queueId' => 'queue_id',
            'queueName' => 'queueName',
            'description' => 'description',
            'owner' => 'owner',
            'createTime' => 'create_time',
            'queueType' => 'queueType',
            'cuCount' => 'cuCount',
            'chargingMode' => 'chargingMode',
            'resourceId' => 'resource_id',
            'resourceMode' => 'resource_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'resourceType' => 'resource_type',
            'cuSpec' => 'cu_spec',
            'cuScaleOutLimit' => 'cu_scale_out_limit',
            'cuScaleInLimit' => 'cu_scale_in_limit',
            'elasticResourcePoolName' => 'elastic_resource_pool_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueId  队列ID。
    * queueName  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    * cuCount  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * enterpriseProjectId  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * resourceType  资源类型。 vm：ecf集群 container：容器化集群（k8s）
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'queueId' => 'setQueueId',
            'queueName' => 'setQueueName',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'createTime' => 'setCreateTime',
            'queueType' => 'setQueueType',
            'cuCount' => 'setCuCount',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'resourceMode' => 'setResourceMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'resourceType' => 'setResourceType',
            'cuSpec' => 'setCuSpec',
            'cuScaleOutLimit' => 'setCuScaleOutLimit',
            'cuScaleInLimit' => 'setCuScaleInLimit',
            'elasticResourcePoolName' => 'setElasticResourcePoolName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * queueId  队列ID。
    * queueName  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    * description  队列描述信息。
    * owner  创建队列的用户。
    * createTime  创建队列的时间。是单位为“毫秒”的时间戳。
    * queueType  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    * cuCount  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    * chargingMode  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    * resourceId  队列的资源ID。
    * resourceMode  队列类型。 0：共享队列 1：专属队列
    * enterpriseProjectId  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * resourceType  资源类型。 vm：ecf集群 container：容器化集群（k8s）
    * cuSpec  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    * cuScaleOutLimit  当前队列弹性扩缩容的CU值上限。
    * cuScaleInLimit  当前队列弹性扩缩容的CU值下限。
    * elasticResourcePoolName  弹性资源池名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'queueId' => 'getQueueId',
            'queueName' => 'getQueueName',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'createTime' => 'getCreateTime',
            'queueType' => 'getQueueType',
            'cuCount' => 'getCuCount',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'resourceMode' => 'getResourceMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'resourceType' => 'getResourceType',
            'cuSpec' => 'getCuSpec',
            'cuScaleOutLimit' => 'getCuScaleOutLimit',
            'cuScaleInLimit' => 'getCuScaleInLimit',
            'elasticResourcePoolName' => 'getElasticResourcePoolName'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['cuCount'] = isset($data['cuCount']) ? $data['cuCount'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceMode'] = isset($data['resourceMode']) ? $data['resourceMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['cuSpec'] = isset($data['cuSpec']) ? $data['cuSpec'] : null;
        $this->container['cuScaleOutLimit'] = isset($data['cuScaleOutLimit']) ? $data['cuScaleOutLimit'] : null;
        $this->container['cuScaleInLimit'] = isset($data['cuScaleInLimit']) ? $data['cuScaleInLimit'] : null;
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
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
    * Gets isSuccess
    *  请求执行是否成功。“true”表示请求执行成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 请求执行是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息可能为空。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets queueId
    *  队列ID。
    *
    * @return int|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param int|null $queueId 队列ID。
    *
    * @return $this
    */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。说明：队列名称不区分大小写，系统会自动转换为小写。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets description
    *  队列描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 队列描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  创建队列的用户。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 创建队列的用户。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createTime
    *  创建队列的时间。是单位为“毫秒”的时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建队列的时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets queueType
    *  队列类型。sql/general/all, 如果不指定，默认为“sql”。
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列类型。sql/general/all, 如果不指定，默认为“sql”。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets cuCount
    *  与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    *
    * @return int|null
    */
    public function getCuCount()
    {
        return $this->container['cuCount'];
    }

    /**
    * Sets cuCount
    *
    * @param int|null $cuCount 与队列绑定的最小计算单元个数。设置值当前只支持16，64，256。
    *
    * @return $this
    */
    public function setCuCount($cuCount)
    {
        $this->container['cuCount'] = $cuCount;
        return $this;
    }

    /**
    * Gets chargingMode
    *  队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  队列的资源ID。
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
    * @param string|null $resourceId 队列的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceMode
    *  队列类型。 0：共享队列 1：专属队列
    *
    * @return int|null
    */
    public function getResourceMode()
    {
        return $this->container['resourceMode'];
    }

    /**
    * Sets resourceMode
    *
    * @param int|null $resourceMode 队列类型。 0：共享队列 1：专属队列
    *
    * @return $this
    */
    public function setResourceMode($resourceMode)
    {
        $this->container['resourceMode'] = $resourceMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。\"0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。 vm：ecf集群 container：容器化集群（k8s）
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
    * @param string|null $resourceType 资源类型。 vm：ecf集群 container：容器化集群（k8s）
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets cuSpec
    *  队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    *
    * @return int|null
    */
    public function getCuSpec()
    {
        return $this->container['cuSpec'];
    }

    /**
    * Sets cuSpec
    *
    * @param int|null $cuSpec 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值。
    *
    * @return $this
    */
    public function setCuSpec($cuSpec)
    {
        $this->container['cuSpec'] = $cuSpec;
        return $this;
    }

    /**
    * Gets cuScaleOutLimit
    *  当前队列弹性扩缩容的CU值上限。
    *
    * @return int|null
    */
    public function getCuScaleOutLimit()
    {
        return $this->container['cuScaleOutLimit'];
    }

    /**
    * Sets cuScaleOutLimit
    *
    * @param int|null $cuScaleOutLimit 当前队列弹性扩缩容的CU值上限。
    *
    * @return $this
    */
    public function setCuScaleOutLimit($cuScaleOutLimit)
    {
        $this->container['cuScaleOutLimit'] = $cuScaleOutLimit;
        return $this;
    }

    /**
    * Gets cuScaleInLimit
    *  当前队列弹性扩缩容的CU值下限。
    *
    * @return int|null
    */
    public function getCuScaleInLimit()
    {
        return $this->container['cuScaleInLimit'];
    }

    /**
    * Sets cuScaleInLimit
    *
    * @param int|null $cuScaleInLimit 当前队列弹性扩缩容的CU值下限。
    *
    * @return $this
    */
    public function setCuScaleInLimit($cuScaleInLimit)
    {
        $this->container['cuScaleInLimit'] = $cuScaleInLimit;
        return $this;
    }

    /**
    * Gets elasticResourcePoolName
    *  弹性资源池名称。
    *
    * @return string|null
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string|null $elasticResourcePoolName 弹性资源池名称。
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
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

