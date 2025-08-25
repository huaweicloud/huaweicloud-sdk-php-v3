<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCcspClusterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCcspClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * projectId  项目ID
    * domainId  账号ID
    * taskDetails  任务详情
    * ccspId  ccsp集群id
    * distributedType  分布类型
    * clusterId  集群ID
    * clusterName  集群名称
    * serviceType  集群所属的服务
    * type  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    * instanceNum  集群中包含的服务实例数量
    * status  集群状态
    * progressInfo  进度信息
    * vsmNum  集群使用VSM集群的vsm实例数量
    * createTime  集群的创建时间，UNIX时间戳，单位毫秒
    * sharedCcsp  是否共享ccsp
    * enterpriseProjectId  企业项目ID
    * az  az
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'taskDetails' => 'object[]',
            'ccspId' => 'string',
            'distributedType' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'serviceType' => 'string',
            'type' => 'string',
            'instanceNum' => 'int',
            'status' => 'string',
            'progressInfo' => 'string',
            'vsmNum' => 'int',
            'createTime' => 'int',
            'sharedCcsp' => 'bool',
            'enterpriseProjectId' => 'string',
            'az' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * projectId  项目ID
    * domainId  账号ID
    * taskDetails  任务详情
    * ccspId  ccsp集群id
    * distributedType  分布类型
    * clusterId  集群ID
    * clusterName  集群名称
    * serviceType  集群所属的服务
    * type  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    * instanceNum  集群中包含的服务实例数量
    * status  集群状态
    * progressInfo  进度信息
    * vsmNum  集群使用VSM集群的vsm实例数量
    * createTime  集群的创建时间，UNIX时间戳，单位毫秒
    * sharedCcsp  是否共享ccsp
    * enterpriseProjectId  企业项目ID
    * az  az
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'projectId' => null,
        'domainId' => null,
        'taskDetails' => null,
        'ccspId' => null,
        'distributedType' => null,
        'clusterId' => null,
        'clusterName' => null,
        'serviceType' => null,
        'type' => null,
        'instanceNum' => null,
        'status' => null,
        'progressInfo' => null,
        'vsmNum' => 'int32',
        'createTime' => 'int64',
        'sharedCcsp' => null,
        'enterpriseProjectId' => null,
        'az' => null
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
    * taskId  任务ID
    * projectId  项目ID
    * domainId  账号ID
    * taskDetails  任务详情
    * ccspId  ccsp集群id
    * distributedType  分布类型
    * clusterId  集群ID
    * clusterName  集群名称
    * serviceType  集群所属的服务
    * type  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    * instanceNum  集群中包含的服务实例数量
    * status  集群状态
    * progressInfo  进度信息
    * vsmNum  集群使用VSM集群的vsm实例数量
    * createTime  集群的创建时间，UNIX时间戳，单位毫秒
    * sharedCcsp  是否共享ccsp
    * enterpriseProjectId  企业项目ID
    * az  az
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'taskDetails' => 'task_details',
            'ccspId' => 'ccsp_id',
            'distributedType' => 'distributed_type',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'serviceType' => 'service_type',
            'type' => 'type',
            'instanceNum' => 'instance_num',
            'status' => 'status',
            'progressInfo' => 'progress_info',
            'vsmNum' => 'vsm_num',
            'createTime' => 'create_time',
            'sharedCcsp' => 'shared_ccsp',
            'enterpriseProjectId' => 'enterprise_project_id',
            'az' => 'az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * projectId  项目ID
    * domainId  账号ID
    * taskDetails  任务详情
    * ccspId  ccsp集群id
    * distributedType  分布类型
    * clusterId  集群ID
    * clusterName  集群名称
    * serviceType  集群所属的服务
    * type  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    * instanceNum  集群中包含的服务实例数量
    * status  集群状态
    * progressInfo  进度信息
    * vsmNum  集群使用VSM集群的vsm实例数量
    * createTime  集群的创建时间，UNIX时间戳，单位毫秒
    * sharedCcsp  是否共享ccsp
    * enterpriseProjectId  企业项目ID
    * az  az
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'taskDetails' => 'setTaskDetails',
            'ccspId' => 'setCcspId',
            'distributedType' => 'setDistributedType',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'serviceType' => 'setServiceType',
            'type' => 'setType',
            'instanceNum' => 'setInstanceNum',
            'status' => 'setStatus',
            'progressInfo' => 'setProgressInfo',
            'vsmNum' => 'setVsmNum',
            'createTime' => 'setCreateTime',
            'sharedCcsp' => 'setSharedCcsp',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'az' => 'setAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * projectId  项目ID
    * domainId  账号ID
    * taskDetails  任务详情
    * ccspId  ccsp集群id
    * distributedType  分布类型
    * clusterId  集群ID
    * clusterName  集群名称
    * serviceType  集群所属的服务
    * type  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    * instanceNum  集群中包含的服务实例数量
    * status  集群状态
    * progressInfo  进度信息
    * vsmNum  集群使用VSM集群的vsm实例数量
    * createTime  集群的创建时间，UNIX时间戳，单位毫秒
    * sharedCcsp  是否共享ccsp
    * enterpriseProjectId  企业项目ID
    * az  az
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'taskDetails' => 'getTaskDetails',
            'ccspId' => 'getCcspId',
            'distributedType' => 'getDistributedType',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'serviceType' => 'getServiceType',
            'type' => 'getType',
            'instanceNum' => 'getInstanceNum',
            'status' => 'getStatus',
            'progressInfo' => 'getProgressInfo',
            'vsmNum' => 'getVsmNum',
            'createTime' => 'getCreateTime',
            'sharedCcsp' => 'getSharedCcsp',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'az' => 'getAz'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['taskDetails'] = isset($data['taskDetails']) ? $data['taskDetails'] : null;
        $this->container['ccspId'] = isset($data['ccspId']) ? $data['ccspId'] : null;
        $this->container['distributedType'] = isset($data['distributedType']) ? $data['distributedType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progressInfo'] = isset($data['progressInfo']) ? $data['progressInfo'] : null;
        $this->container['vsmNum'] = isset($data['vsmNum']) ? $data['vsmNum'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['sharedCcsp'] = isset($data['sharedCcsp']) ? $data['sharedCcsp'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets taskDetails
    *  任务详情
    *
    * @return object[]|null
    */
    public function getTaskDetails()
    {
        return $this->container['taskDetails'];
    }

    /**
    * Sets taskDetails
    *
    * @param object[]|null $taskDetails 任务详情
    *
    * @return $this
    */
    public function setTaskDetails($taskDetails)
    {
        $this->container['taskDetails'] = $taskDetails;
        return $this;
    }

    /**
    * Gets ccspId
    *  ccsp集群id
    *
    * @return string|null
    */
    public function getCcspId()
    {
        return $this->container['ccspId'];
    }

    /**
    * Sets ccspId
    *
    * @param string|null $ccspId ccsp集群id
    *
    * @return $this
    */
    public function setCcspId($ccspId)
    {
        $this->container['ccspId'] = $ccspId;
        return $this;
    }

    /**
    * Gets distributedType
    *  分布类型
    *
    * @return string|null
    */
    public function getDistributedType()
    {
        return $this->container['distributedType'];
    }

    /**
    * Sets distributedType
    *
    * @param string|null $distributedType 分布类型
    *
    * @return $this
    */
    public function setDistributedType($distributedType)
    {
        $this->container['distributedType'] = $distributedType;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets serviceType
    *  集群所属的服务
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
    * @param string|null $serviceType 集群所属的服务
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets type
    *  集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 集群的类型： - **SHARED** : 应用共享； - **EXCLUSIVE** : 应用独享
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceNum
    *  集群中包含的服务实例数量
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum 集群中包含的服务实例数量
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets status
    *  集群状态
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
    * @param string|null $status 集群状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progressInfo
    *  进度信息
    *
    * @return string|null
    */
    public function getProgressInfo()
    {
        return $this->container['progressInfo'];
    }

    /**
    * Sets progressInfo
    *
    * @param string|null $progressInfo 进度信息
    *
    * @return $this
    */
    public function setProgressInfo($progressInfo)
    {
        $this->container['progressInfo'] = $progressInfo;
        return $this;
    }

    /**
    * Gets vsmNum
    *  集群使用VSM集群的vsm实例数量
    *
    * @return int|null
    */
    public function getVsmNum()
    {
        return $this->container['vsmNum'];
    }

    /**
    * Sets vsmNum
    *
    * @param int|null $vsmNum 集群使用VSM集群的vsm实例数量
    *
    * @return $this
    */
    public function setVsmNum($vsmNum)
    {
        $this->container['vsmNum'] = $vsmNum;
        return $this;
    }

    /**
    * Gets createTime
    *  集群的创建时间，UNIX时间戳，单位毫秒
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
    * @param int|null $createTime 集群的创建时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets sharedCcsp
    *  是否共享ccsp
    *
    * @return bool|null
    */
    public function getSharedCcsp()
    {
        return $this->container['sharedCcsp'];
    }

    /**
    * Sets sharedCcsp
    *
    * @param bool|null $sharedCcsp 是否共享ccsp
    *
    * @return $this
    */
    public function setSharedCcsp($sharedCcsp)
    {
        $this->container['sharedCcsp'] = $sharedCcsp;
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
    * Gets az
    *  az
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az az
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
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

