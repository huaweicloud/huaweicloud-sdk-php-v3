<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * instanceId  根据绑定实例id过滤全域互联带宽列表。
    * instanceType  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * type  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * adminState  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    * chargeMode  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'instanceId' => 'string[]',
            'instanceType' => 'string[]',
            'bindingService' => 'string[]',
            'type' => 'string[]',
            'adminState' => 'string[]',
            'chargeMode' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * instanceId  根据绑定实例id过滤全域互联带宽列表。
    * instanceType  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * type  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * adminState  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    * chargeMode  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'enterpriseProjectId' => null,
        'instanceId' => null,
        'instanceType' => null,
        'bindingService' => null,
        'type' => null,
        'adminState' => null,
        'chargeMode' => null
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
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * instanceId  根据绑定实例id过滤全域互联带宽列表。
    * instanceType  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * type  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * adminState  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    * chargeMode  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'bindingService' => 'binding_service',
            'type' => 'type',
            'adminState' => 'admin_state',
            'chargeMode' => 'charge_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * instanceId  根据绑定实例id过滤全域互联带宽列表。
    * instanceType  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * type  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * adminState  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    * chargeMode  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'bindingService' => 'setBindingService',
            'type' => 'setType',
            'adminState' => 'setAdminState',
            'chargeMode' => 'setChargeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * instanceId  根据绑定实例id过滤全域互联带宽列表。
    * instanceType  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * bindingService  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    * type  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * adminState  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    * chargeMode  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'bindingService' => 'getBindingService',
            'type' => 'getType',
            'adminState' => 'getAdminState',
            'chargeMode' => 'getChargeMode'
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
    const INSTANCE_TYPE_CC = 'CC';
    const INSTANCE_TYPE_GEIP = 'GEIP';
    const INSTANCE_TYPE_GCN = 'GCN';
    const INSTANCE_TYPE_GSN = 'GSN';
    const BINDING_SERVICE_CC = 'CC';
    const BINDING_SERVICE_GEIP = 'GEIP';
    const BINDING_SERVICE_GCN = 'GCN';
    const BINDING_SERVICE_GSN = 'GSN';
    const TYPE_TRS_AREA = 'TrsArea';
    const TYPE_AREA = 'Area';
    const TYPE_SUB_AREA = 'SubArea';
    const TYPE_REGION = 'Region';
    const ADMIN_STATE_NORMAL = 'NORMAL';
    const ADMIN_STATE_FREEZED = 'FREEZED';
    const CHARGE_MODE_BWD = 'bwd';
    const CHARGE_MODE__95 = '95';
    const CHARGE_MODE__95AVR = '95avr';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_CC,
            self::INSTANCE_TYPE_GEIP,
            self::INSTANCE_TYPE_GCN,
            self::INSTANCE_TYPE_GSN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBindingServiceAllowableValues()
    {
        return [
            self::BINDING_SERVICE_CC,
            self::BINDING_SERVICE_GEIP,
            self::BINDING_SERVICE_GCN,
            self::BINDING_SERVICE_GSN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRS_AREA,
            self::TYPE_AREA,
            self::TYPE_SUB_AREA,
            self::TYPE_REGION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdminStateAllowableValues()
    {
        return [
            self::ADMIN_STATE_NORMAL,
            self::ADMIN_STATE_FREEZED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BWD,
            self::CHARGE_MODE__95,
            self::CHARGE_MODE__95AVR,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['bindingService'] = isset($data['bindingService']) ? $data['bindingService'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['adminState'] = isset($data['adminState']) ? $data['adminState'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
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
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 4096)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
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
    * Gets limit
    *  每页返回的个数。 取值范围：1~1000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~1000。
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
    *  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
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
    * @param string|null $marker 翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  根据ID查询，可查询多个ID。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据ID查询，可查询多个ID。
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
    *  根据名字查询，可查询多个名字。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 根据名字查询，可查询多个名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤列表。
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤列表。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  根据绑定实例id过滤全域互联带宽列表。
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId 根据绑定实例id过滤全域互联带宽列表。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return string[]|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string[]|null $instanceType 根据绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets bindingService
    *  根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return string[]|null
    */
    public function getBindingService()
    {
        return $this->container['bindingService'];
    }

    /**
    * Sets bindingService
    *
    * @param string[]|null $bindingService 根据支持绑定实例类型过滤全域互联带宽列表。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络
    *
    * @return $this
    */
    public function setBindingService($bindingService)
    {
        $this->container['bindingService'] = $bindingService;
        return $this;
    }

    /**
    * Gets type
    *  根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 根据带宽类型过滤全域互联带宽列表。带宽类型： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets adminState
    *  根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    *
    * @return string[]|null
    */
    public function getAdminState()
    {
        return $this->container['adminState'];
    }

    /**
    * Sets adminState
    *
    * @param string[]|null $adminState 根据带宽状态过滤全域互联带宽列表： - NORMAL: 正常 - FREEZED: 冻结
    *
    * @return $this
    */
    public function setAdminState($adminState)
    {
        $this->container['adminState'] = $adminState;
        return $this;
    }

    /**
    * Gets chargeMode
    *  根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @return string[]|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string[]|null $chargeMode 根据计费方式过滤全域互联带宽列表： - bwd: 按带宽计费 - 95: 按传统型95计费 - 95avr (日95计费)
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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

