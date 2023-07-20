<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElasticResourcePoolsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElasticResourcePoolsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updateTime  更新时间
    * queues  
    * owner  用户名
    * elasticResourcePoolName  资源池名称
    * description  资源池描述
    * maxCu  最大cu数量
    * minCu  最小cu数量
    * actualCu  实际cu数量
    * cidrInVpc  子网
    * createTime  创建时间
    * currentCu  当前cu数量
    * status  状态
    * resourceId  资源ID
    * failReason  创建失败原因
    * enterpriseProjectId  企业项目ID
    * prepayCu  预付费cu数量
    * chargingMode  计费类型
    * manager  弹性资源池类型
    * label  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updateTime' => 'int',
            'queues' => 'string[]',
            'owner' => 'string',
            'elasticResourcePoolName' => 'string',
            'description' => 'string',
            'maxCu' => 'int',
            'minCu' => 'int',
            'actualCu' => 'int',
            'cidrInVpc' => 'string',
            'createTime' => 'int',
            'currentCu' => 'int',
            'status' => 'string',
            'resourceId' => 'string',
            'failReason' => 'string',
            'enterpriseProjectId' => 'string',
            'prepayCu' => 'int',
            'chargingMode' => 'int',
            'manager' => 'string',
            'label' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updateTime  更新时间
    * queues  
    * owner  用户名
    * elasticResourcePoolName  资源池名称
    * description  资源池描述
    * maxCu  最大cu数量
    * minCu  最小cu数量
    * actualCu  实际cu数量
    * cidrInVpc  子网
    * createTime  创建时间
    * currentCu  当前cu数量
    * status  状态
    * resourceId  资源ID
    * failReason  创建失败原因
    * enterpriseProjectId  企业项目ID
    * prepayCu  预付费cu数量
    * chargingMode  计费类型
    * manager  弹性资源池类型
    * label  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updateTime' => 'int64',
        'queues' => null,
        'owner' => null,
        'elasticResourcePoolName' => null,
        'description' => null,
        'maxCu' => 'int32',
        'minCu' => 'int32',
        'actualCu' => 'int32',
        'cidrInVpc' => null,
        'createTime' => 'int64',
        'currentCu' => 'int32',
        'status' => null,
        'resourceId' => null,
        'failReason' => null,
        'enterpriseProjectId' => null,
        'prepayCu' => 'int32',
        'chargingMode' => 'int32',
        'manager' => null,
        'label' => null
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
    * updateTime  更新时间
    * queues  
    * owner  用户名
    * elasticResourcePoolName  资源池名称
    * description  资源池描述
    * maxCu  最大cu数量
    * minCu  最小cu数量
    * actualCu  实际cu数量
    * cidrInVpc  子网
    * createTime  创建时间
    * currentCu  当前cu数量
    * status  状态
    * resourceId  资源ID
    * failReason  创建失败原因
    * enterpriseProjectId  企业项目ID
    * prepayCu  预付费cu数量
    * chargingMode  计费类型
    * manager  弹性资源池类型
    * label  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updateTime' => 'update_time',
            'queues' => 'queues',
            'owner' => 'owner',
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'description' => 'description',
            'maxCu' => 'max_cu',
            'minCu' => 'min_cu',
            'actualCu' => 'actual_cu',
            'cidrInVpc' => 'cidr_in_vpc',
            'createTime' => 'create_time',
            'currentCu' => 'current_cu',
            'status' => 'status',
            'resourceId' => 'resource_id',
            'failReason' => 'fail_reason',
            'enterpriseProjectId' => 'enterprise_project_id',
            'prepayCu' => 'prepay_cu',
            'chargingMode' => 'charging_mode',
            'manager' => 'manager',
            'label' => 'label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updateTime  更新时间
    * queues  
    * owner  用户名
    * elasticResourcePoolName  资源池名称
    * description  资源池描述
    * maxCu  最大cu数量
    * minCu  最小cu数量
    * actualCu  实际cu数量
    * cidrInVpc  子网
    * createTime  创建时间
    * currentCu  当前cu数量
    * status  状态
    * resourceId  资源ID
    * failReason  创建失败原因
    * enterpriseProjectId  企业项目ID
    * prepayCu  预付费cu数量
    * chargingMode  计费类型
    * manager  弹性资源池类型
    * label  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @var string[]
    */
    protected static $setters = [
            'updateTime' => 'setUpdateTime',
            'queues' => 'setQueues',
            'owner' => 'setOwner',
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'description' => 'setDescription',
            'maxCu' => 'setMaxCu',
            'minCu' => 'setMinCu',
            'actualCu' => 'setActualCu',
            'cidrInVpc' => 'setCidrInVpc',
            'createTime' => 'setCreateTime',
            'currentCu' => 'setCurrentCu',
            'status' => 'setStatus',
            'resourceId' => 'setResourceId',
            'failReason' => 'setFailReason',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'prepayCu' => 'setPrepayCu',
            'chargingMode' => 'setChargingMode',
            'manager' => 'setManager',
            'label' => 'setLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updateTime  更新时间
    * queues  
    * owner  用户名
    * elasticResourcePoolName  资源池名称
    * description  资源池描述
    * maxCu  最大cu数量
    * minCu  最小cu数量
    * actualCu  实际cu数量
    * cidrInVpc  子网
    * createTime  创建时间
    * currentCu  当前cu数量
    * status  状态
    * resourceId  资源ID
    * failReason  创建失败原因
    * enterpriseProjectId  企业项目ID
    * prepayCu  预付费cu数量
    * chargingMode  计费类型
    * manager  弹性资源池类型
    * label  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @var string[]
    */
    protected static $getters = [
            'updateTime' => 'getUpdateTime',
            'queues' => 'getQueues',
            'owner' => 'getOwner',
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'description' => 'getDescription',
            'maxCu' => 'getMaxCu',
            'minCu' => 'getMinCu',
            'actualCu' => 'getActualCu',
            'cidrInVpc' => 'getCidrInVpc',
            'createTime' => 'getCreateTime',
            'currentCu' => 'getCurrentCu',
            'status' => 'getStatus',
            'resourceId' => 'getResourceId',
            'failReason' => 'getFailReason',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'prepayCu' => 'getPrepayCu',
            'chargingMode' => 'getChargingMode',
            'manager' => 'getManager',
            'label' => 'getLabel'
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
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maxCu'] = isset($data['maxCu']) ? $data['maxCu'] : null;
        $this->container['minCu'] = isset($data['minCu']) ? $data['minCu'] : null;
        $this->container['actualCu'] = isset($data['actualCu']) ? $data['actualCu'] : null;
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['currentCu'] = isset($data['currentCu']) ? $data['currentCu'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['prepayCu'] = isset($data['prepayCu']) ? $data['prepayCu'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets queues
    *  
    *
    * @return string[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param string[]|null $queues 
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets owner
    *  用户名
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
    * @param string|null $owner 用户名
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets elasticResourcePoolName
    *  资源池名称
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
    * @param string|null $elasticResourcePoolName 资源池名称
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets description
    *  资源池描述
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
    * @param string|null $description 资源池描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maxCu
    *  最大cu数量
    *
    * @return int|null
    */
    public function getMaxCu()
    {
        return $this->container['maxCu'];
    }

    /**
    * Sets maxCu
    *
    * @param int|null $maxCu 最大cu数量
    *
    * @return $this
    */
    public function setMaxCu($maxCu)
    {
        $this->container['maxCu'] = $maxCu;
        return $this;
    }

    /**
    * Gets minCu
    *  最小cu数量
    *
    * @return int|null
    */
    public function getMinCu()
    {
        return $this->container['minCu'];
    }

    /**
    * Sets minCu
    *
    * @param int|null $minCu 最小cu数量
    *
    * @return $this
    */
    public function setMinCu($minCu)
    {
        $this->container['minCu'] = $minCu;
        return $this;
    }

    /**
    * Gets actualCu
    *  实际cu数量
    *
    * @return int|null
    */
    public function getActualCu()
    {
        return $this->container['actualCu'];
    }

    /**
    * Sets actualCu
    *
    * @param int|null $actualCu 实际cu数量
    *
    * @return $this
    */
    public function setActualCu($actualCu)
    {
        $this->container['actualCu'] = $actualCu;
        return $this;
    }

    /**
    * Gets cidrInVpc
    *  子网
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 子网
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets currentCu
    *  当前cu数量
    *
    * @return int|null
    */
    public function getCurrentCu()
    {
        return $this->container['currentCu'];
    }

    /**
    * Sets currentCu
    *
    * @param int|null $currentCu 当前cu数量
    *
    * @return $this
    */
    public function setCurrentCu($currentCu)
    {
        $this->container['currentCu'] = $currentCu;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets failReason
    *  创建失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 创建失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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
    * Gets prepayCu
    *  预付费cu数量
    *
    * @return int|null
    */
    public function getPrepayCu()
    {
        return $this->container['prepayCu'];
    }

    /**
    * Sets prepayCu
    *
    * @param int|null $prepayCu 预付费cu数量
    *
    * @return $this
    */
    public function setPrepayCu($prepayCu)
    {
        $this->container['prepayCu'] = $prepayCu;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费类型
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
    * @param int|null $chargingMode 计费类型
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets manager
    *  弹性资源池类型
    *
    * @return string|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param string|null $manager 弹性资源池类型
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets label
    *  标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @return map[string,string]|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param map[string,string]|null $label 标识弹性资源池，目前只支持 开发者标签，\"label\": {\"billing_spec_code\":\"developer\"}
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
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

