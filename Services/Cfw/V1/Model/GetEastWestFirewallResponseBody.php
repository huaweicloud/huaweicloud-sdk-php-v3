<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetEastWestFirewallResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetEastWestFirewallResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * projectId  租户project_id
    * status  防护状态：0 已开启防护， 1 未开启防护
    * erAssociatedSubnet  erAssociatedSubnet
    * firewallAssociatedSubnets  云防火墙关联子网信息
    * er  er
    * inspectionVpc  inspectionVpc
    * protectInfos  东西向防护资源信息
    * total  防护VPC总数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * mode  防护模式
    * ewVpcRouteLimit  东西向路由限制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'projectId' => 'string',
            'status' => 'int',
            'erAssociatedSubnet' => '\HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo',
            'firewallAssociatedSubnets' => '\HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo[]',
            'er' => '\HuaweiCloud\SDK\Cfw\V1\Model\ErInstance',
            'inspectionVpc' => '\HuaweiCloud\SDK\Cfw\V1\Model\VpcDetail',
            'protectInfos' => '\HuaweiCloud\SDK\Cfw\V1\Model\EwProtectResourceInfo[]',
            'total' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'mode' => 'string',
            'ewVpcRouteLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * projectId  租户project_id
    * status  防护状态：0 已开启防护， 1 未开启防护
    * erAssociatedSubnet  erAssociatedSubnet
    * firewallAssociatedSubnets  云防火墙关联子网信息
    * er  er
    * inspectionVpc  inspectionVpc
    * protectInfos  东西向防护资源信息
    * total  防护VPC总数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * mode  防护模式
    * ewVpcRouteLimit  东西向路由限制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'projectId' => null,
        'status' => 'int32',
        'erAssociatedSubnet' => null,
        'firewallAssociatedSubnets' => null,
        'er' => null,
        'inspectionVpc' => null,
        'protectInfos' => null,
        'total' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'mode' => null,
        'ewVpcRouteLimit' => 'int32'
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
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * projectId  租户project_id
    * status  防护状态：0 已开启防护， 1 未开启防护
    * erAssociatedSubnet  erAssociatedSubnet
    * firewallAssociatedSubnets  云防火墙关联子网信息
    * er  er
    * inspectionVpc  inspectionVpc
    * protectInfos  东西向防护资源信息
    * total  防护VPC总数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * mode  防护模式
    * ewVpcRouteLimit  东西向路由限制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'projectId' => 'project_id',
            'status' => 'status',
            'erAssociatedSubnet' => 'er_associated_subnet',
            'firewallAssociatedSubnets' => 'firewall_associated_subnets',
            'er' => 'er',
            'inspectionVpc' => 'inspection_vpc',
            'protectInfos' => 'protect_infos',
            'total' => 'total',
            'offset' => 'offset',
            'limit' => 'limit',
            'mode' => 'mode',
            'ewVpcRouteLimit' => 'ew_vpc_route_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * projectId  租户project_id
    * status  防护状态：0 已开启防护， 1 未开启防护
    * erAssociatedSubnet  erAssociatedSubnet
    * firewallAssociatedSubnets  云防火墙关联子网信息
    * er  er
    * inspectionVpc  inspectionVpc
    * protectInfos  东西向防护资源信息
    * total  防护VPC总数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * mode  防护模式
    * ewVpcRouteLimit  东西向路由限制
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'erAssociatedSubnet' => 'setErAssociatedSubnet',
            'firewallAssociatedSubnets' => 'setFirewallAssociatedSubnets',
            'er' => 'setEr',
            'inspectionVpc' => 'setInspectionVpc',
            'protectInfos' => 'setProtectInfos',
            'total' => 'setTotal',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'mode' => 'setMode',
            'ewVpcRouteLimit' => 'setEwVpcRouteLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * projectId  租户project_id
    * status  防护状态：0 已开启防护， 1 未开启防护
    * erAssociatedSubnet  erAssociatedSubnet
    * firewallAssociatedSubnets  云防火墙关联子网信息
    * er  er
    * inspectionVpc  inspectionVpc
    * protectInfos  东西向防护资源信息
    * total  防护VPC总数
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * mode  防护模式
    * ewVpcRouteLimit  东西向路由限制
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'erAssociatedSubnet' => 'getErAssociatedSubnet',
            'firewallAssociatedSubnets' => 'getFirewallAssociatedSubnets',
            'er' => 'getEr',
            'inspectionVpc' => 'getInspectionVpc',
            'protectInfos' => 'getProtectInfos',
            'total' => 'getTotal',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'mode' => 'getMode',
            'ewVpcRouteLimit' => 'getEwVpcRouteLimit'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['erAssociatedSubnet'] = isset($data['erAssociatedSubnet']) ? $data['erAssociatedSubnet'] : null;
        $this->container['firewallAssociatedSubnets'] = isset($data['firewallAssociatedSubnets']) ? $data['firewallAssociatedSubnets'] : null;
        $this->container['er'] = isset($data['er']) ? $data['er'] : null;
        $this->container['inspectionVpc'] = isset($data['inspectionVpc']) ? $data['inspectionVpc'] : null;
        $this->container['protectInfos'] = isset($data['protectInfos']) ? $data['protectInfos'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['ewVpcRouteLimit'] = isset($data['ewVpcRouteLimit']) ? $data['ewVpcRouteLimit'] : null;
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
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户project_id
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
    * @param string|null $projectId 租户project_id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  防护状态：0 已开启防护， 1 未开启防护
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 防护状态：0 已开启防护， 1 未开启防护
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets erAssociatedSubnet
    *  erAssociatedSubnet
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo|null
    */
    public function getErAssociatedSubnet()
    {
        return $this->container['erAssociatedSubnet'];
    }

    /**
    * Sets erAssociatedSubnet
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo|null $erAssociatedSubnet erAssociatedSubnet
    *
    * @return $this
    */
    public function setErAssociatedSubnet($erAssociatedSubnet)
    {
        $this->container['erAssociatedSubnet'] = $erAssociatedSubnet;
        return $this;
    }

    /**
    * Gets firewallAssociatedSubnets
    *  云防火墙关联子网信息
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo[]|null
    */
    public function getFirewallAssociatedSubnets()
    {
        return $this->container['firewallAssociatedSubnets'];
    }

    /**
    * Sets firewallAssociatedSubnets
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\SubnetInfo[]|null $firewallAssociatedSubnets 云防火墙关联子网信息
    *
    * @return $this
    */
    public function setFirewallAssociatedSubnets($firewallAssociatedSubnets)
    {
        $this->container['firewallAssociatedSubnets'] = $firewallAssociatedSubnets;
        return $this;
    }

    /**
    * Gets er
    *  er
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ErInstance|null
    */
    public function getEr()
    {
        return $this->container['er'];
    }

    /**
    * Sets er
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ErInstance|null $er er
    *
    * @return $this
    */
    public function setEr($er)
    {
        $this->container['er'] = $er;
        return $this;
    }

    /**
    * Gets inspectionVpc
    *  inspectionVpc
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\VpcDetail|null
    */
    public function getInspectionVpc()
    {
        return $this->container['inspectionVpc'];
    }

    /**
    * Sets inspectionVpc
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\VpcDetail|null $inspectionVpc inspectionVpc
    *
    * @return $this
    */
    public function setInspectionVpc($inspectionVpc)
    {
        $this->container['inspectionVpc'] = $inspectionVpc;
        return $this;
    }

    /**
    * Gets protectInfos
    *  东西向防护资源信息
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\EwProtectResourceInfo[]|null
    */
    public function getProtectInfos()
    {
        return $this->container['protectInfos'];
    }

    /**
    * Sets protectInfos
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\EwProtectResourceInfo[]|null $protectInfos 东西向防护资源信息
    *
    * @return $this
    */
    public function setProtectInfos($protectInfos)
    {
        $this->container['protectInfos'] = $protectInfos;
        return $this;
    }

    /**
    * Gets total
    *  防护VPC总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 防护VPC总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数，范围为1-1024
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
    * @param int|null $limit 每页显示个数，范围为1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets mode
    *  防护模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 防护模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets ewVpcRouteLimit
    *  东西向路由限制
    *
    * @return int|null
    */
    public function getEwVpcRouteLimit()
    {
        return $this->container['ewVpcRouteLimit'];
    }

    /**
    * Sets ewVpcRouteLimit
    *
    * @param int|null $ewVpcRouteLimit 东西向路由限制
    *
    * @return $this
    */
    public function setEwVpcRouteLimit($ewVpcRouteLimit)
    {
        $this->container['ewVpcRouteLimit'] = $ewVpcRouteLimit;
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

