<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Cluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activateInfo  activateInfo
    * chargeModel  计费模式  - Period: 包周期  - Demand: 按需
    * comment  备注信息
    * created  创建时间
    * deployMode  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    * detail  detail
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * floatIp  浮动IP
    * instanceId  实例ID
    * isActiveStandby  是否激活备用
    * keepDays  使用天数
    * name  实例名称
    * newVersion  最新版本
    * publicIp  公网IP
    * remainDays  剩余天数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activateInfo' => '\HuaweiCloud\SDK\Dbss\V1\Model\InstanceActivateInfo',
            'chargeModel' => 'string',
            'comment' => 'string',
            'created' => 'int',
            'deployMode' => 'string',
            'detail' => '\HuaweiCloud\SDK\Dbss\V1\Model\ServerList',
            'enterpriseProjectId' => 'string',
            'expired' => 'int',
            'floatIp' => 'string',
            'instanceId' => 'string',
            'isActiveStandby' => 'bool',
            'keepDays' => 'string',
            'name' => 'string',
            'newVersion' => 'string',
            'publicIp' => 'string',
            'remainDays' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activateInfo  activateInfo
    * chargeModel  计费模式  - Period: 包周期  - Demand: 按需
    * comment  备注信息
    * created  创建时间
    * deployMode  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    * detail  detail
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * floatIp  浮动IP
    * instanceId  实例ID
    * isActiveStandby  是否激活备用
    * keepDays  使用天数
    * name  实例名称
    * newVersion  最新版本
    * publicIp  公网IP
    * remainDays  剩余天数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activateInfo' => null,
        'chargeModel' => null,
        'comment' => null,
        'created' => 'int64',
        'deployMode' => null,
        'detail' => null,
        'enterpriseProjectId' => null,
        'expired' => 'int64',
        'floatIp' => null,
        'instanceId' => null,
        'isActiveStandby' => null,
        'keepDays' => null,
        'name' => null,
        'newVersion' => null,
        'publicIp' => null,
        'remainDays' => null
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
    * activateInfo  activateInfo
    * chargeModel  计费模式  - Period: 包周期  - Demand: 按需
    * comment  备注信息
    * created  创建时间
    * deployMode  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    * detail  detail
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * floatIp  浮动IP
    * instanceId  实例ID
    * isActiveStandby  是否激活备用
    * keepDays  使用天数
    * name  实例名称
    * newVersion  最新版本
    * publicIp  公网IP
    * remainDays  剩余天数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activateInfo' => 'activate_info',
            'chargeModel' => 'charge_model',
            'comment' => 'comment',
            'created' => 'created',
            'deployMode' => 'deploy_mode',
            'detail' => 'detail',
            'enterpriseProjectId' => 'enterprise_project_id',
            'expired' => 'expired',
            'floatIp' => 'float_ip',
            'instanceId' => 'instance_id',
            'isActiveStandby' => 'is_active_standby',
            'keepDays' => 'keep_days',
            'name' => 'name',
            'newVersion' => 'new_version',
            'publicIp' => 'public_ip',
            'remainDays' => 'remain_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activateInfo  activateInfo
    * chargeModel  计费模式  - Period: 包周期  - Demand: 按需
    * comment  备注信息
    * created  创建时间
    * deployMode  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    * detail  detail
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * floatIp  浮动IP
    * instanceId  实例ID
    * isActiveStandby  是否激活备用
    * keepDays  使用天数
    * name  实例名称
    * newVersion  最新版本
    * publicIp  公网IP
    * remainDays  剩余天数
    *
    * @var string[]
    */
    protected static $setters = [
            'activateInfo' => 'setActivateInfo',
            'chargeModel' => 'setChargeModel',
            'comment' => 'setComment',
            'created' => 'setCreated',
            'deployMode' => 'setDeployMode',
            'detail' => 'setDetail',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'expired' => 'setExpired',
            'floatIp' => 'setFloatIp',
            'instanceId' => 'setInstanceId',
            'isActiveStandby' => 'setIsActiveStandby',
            'keepDays' => 'setKeepDays',
            'name' => 'setName',
            'newVersion' => 'setNewVersion',
            'publicIp' => 'setPublicIp',
            'remainDays' => 'setRemainDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activateInfo  activateInfo
    * chargeModel  计费模式  - Period: 包周期  - Demand: 按需
    * comment  备注信息
    * created  创建时间
    * deployMode  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    * detail  detail
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * floatIp  浮动IP
    * instanceId  实例ID
    * isActiveStandby  是否激活备用
    * keepDays  使用天数
    * name  实例名称
    * newVersion  最新版本
    * publicIp  公网IP
    * remainDays  剩余天数
    *
    * @var string[]
    */
    protected static $getters = [
            'activateInfo' => 'getActivateInfo',
            'chargeModel' => 'getChargeModel',
            'comment' => 'getComment',
            'created' => 'getCreated',
            'deployMode' => 'getDeployMode',
            'detail' => 'getDetail',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'expired' => 'getExpired',
            'floatIp' => 'getFloatIp',
            'instanceId' => 'getInstanceId',
            'isActiveStandby' => 'getIsActiveStandby',
            'keepDays' => 'getKeepDays',
            'name' => 'getName',
            'newVersion' => 'getNewVersion',
            'publicIp' => 'getPublicIp',
            'remainDays' => 'getRemainDays'
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
    const CHARGE_MODEL_PERIOD = 'Period';
    const CHARGE_MODEL_DEMAND = 'Demand';
    const CHARGE_MODEL_TEST = 'Test';
    const DEPLOY_MODE_CLOUD = 'CLOUD';
    const DEPLOY_MODE_OUTSIDE = 'OUTSIDE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModelAllowableValues()
    {
        return [
            self::CHARGE_MODEL_PERIOD,
            self::CHARGE_MODEL_DEMAND,
            self::CHARGE_MODEL_TEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeployModeAllowableValues()
    {
        return [
            self::DEPLOY_MODE_CLOUD,
            self::DEPLOY_MODE_OUTSIDE,
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
        $this->container['activateInfo'] = isset($data['activateInfo']) ? $data['activateInfo'] : null;
        $this->container['chargeModel'] = isset($data['chargeModel']) ? $data['chargeModel'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['floatIp'] = isset($data['floatIp']) ? $data['floatIp'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['isActiveStandby'] = isset($data['isActiveStandby']) ? $data['isActiveStandby'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['newVersion'] = isset($data['newVersion']) ? $data['newVersion'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['remainDays'] = isset($data['remainDays']) ? $data['remainDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargeModelAllowableValues();
                if (!is_null($this->container['chargeModel']) && !in_array($this->container['chargeModel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeModel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeployModeAllowableValues();
                if (!is_null($this->container['deployMode']) && !in_array($this->container['deployMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deployMode', must be one of '%s'",
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
    * Gets activateInfo
    *  activateInfo
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\InstanceActivateInfo|null
    */
    public function getActivateInfo()
    {
        return $this->container['activateInfo'];
    }

    /**
    * Sets activateInfo
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\InstanceActivateInfo|null $activateInfo activateInfo
    *
    * @return $this
    */
    public function setActivateInfo($activateInfo)
    {
        $this->container['activateInfo'] = $activateInfo;
        return $this;
    }

    /**
    * Gets chargeModel
    *  计费模式  - Period: 包周期  - Demand: 按需
    *
    * @return string|null
    */
    public function getChargeModel()
    {
        return $this->container['chargeModel'];
    }

    /**
    * Sets chargeModel
    *
    * @param string|null $chargeModel 计费模式  - Period: 包周期  - Demand: 按需
    *
    * @return $this
    */
    public function setChargeModel($chargeModel)
    {
        $this->container['chargeModel'] = $chargeModel;
        return $this;
    }

    /**
    * Gets comment
    *  备注信息
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 备注信息
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets created
    *  创建时间
    *
    * @return int|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int|null $created 创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets deployMode
    *  部署方式  - CLOUD: 云上  - OUTSIDE：云外
    *
    * @return string|null
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string|null $deployMode 部署方式  - CLOUD: 云上  - OUTSIDE：云外
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets detail
    *  detail
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\ServerList|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\ServerList|null $detail detail
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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
    * Gets expired
    *  过期时间
    *
    * @return int|null
    */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
    * Sets expired
    *
    * @param int|null $expired 过期时间
    *
    * @return $this
    */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;
        return $this;
    }

    /**
    * Gets floatIp
    *  浮动IP
    *
    * @return string|null
    */
    public function getFloatIp()
    {
        return $this->container['floatIp'];
    }

    /**
    * Sets floatIp
    *
    * @param string|null $floatIp 浮动IP
    *
    * @return $this
    */
    public function setFloatIp($floatIp)
    {
        $this->container['floatIp'] = $floatIp;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets isActiveStandby
    *  是否激活备用
    *
    * @return bool|null
    */
    public function getIsActiveStandby()
    {
        return $this->container['isActiveStandby'];
    }

    /**
    * Sets isActiveStandby
    *
    * @param bool|null $isActiveStandby 是否激活备用
    *
    * @return $this
    */
    public function setIsActiveStandby($isActiveStandby)
    {
        $this->container['isActiveStandby'] = $isActiveStandby;
        return $this;
    }

    /**
    * Gets keepDays
    *  使用天数
    *
    * @return string|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param string|null $keepDays 使用天数
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
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
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets newVersion
    *  最新版本
    *
    * @return string|null
    */
    public function getNewVersion()
    {
        return $this->container['newVersion'];
    }

    /**
    * Sets newVersion
    *
    * @param string|null $newVersion 最新版本
    *
    * @return $this
    */
    public function setNewVersion($newVersion)
    {
        $this->container['newVersion'] = $newVersion;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets remainDays
    *  剩余天数
    *
    * @return string|null
    */
    public function getRemainDays()
    {
        return $this->container['remainDays'];
    }

    /**
    * Sets remainDays
    *
    * @param string|null $remainDays 剩余天数
    *
    * @return $this
    */
    public function setRemainDays($remainDays)
    {
        $this->container['remainDays'] = $remainDays;
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

