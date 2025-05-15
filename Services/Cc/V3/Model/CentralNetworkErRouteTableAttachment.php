<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkErRouteTableAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkErRouteTableAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * domainId  实例所属账号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  中心网络ID。
    * centralNetworkPlaneId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * isFrozen  是否冻结。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    * attachedErTableRegionId  ER路由器的regionID。
    * attachedErId  被挂载的企业路由器ID。
    * attachedErTableId  被挂载的企业路由器的路由表ID。
    * attachedErAttachmentId  被挂载的企业路由器的连接ID。
    * attachedErTableSiteCode  被挂载的企业路由器的站点编码。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建企业路由表附件的原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'centralNetworkId' => 'string',
            'centralNetworkPlaneId' => 'string',
            'globalConnectionBandwidthId' => 'string',
            'isFrozen' => 'bool',
            'bandwidthType' => '\HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum',
            'bandwidthSize' => 'int',
            'enterpriseRouterId' => 'string',
            'enterpriseRouterProjectId' => 'string',
            'enterpriseRouterRegionId' => 'string',
            'enterpriseRouterAttachmentId' => 'string',
            'enterpriseRouterTableId' => 'string',
            'enterpriseRouterSiteCode' => 'string',
            'attachedErTableProjectId' => 'string',
            'attachedErTableRegionId' => 'string',
            'attachedErId' => 'string',
            'attachedErTableId' => 'string',
            'attachedErAttachmentId' => 'string',
            'attachedErTableSiteCode' => 'string',
            'hostedCloud' => '\HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum',
            'approvedState' => '\HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * domainId  实例所属账号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  中心网络ID。
    * centralNetworkPlaneId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * isFrozen  是否冻结。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    * attachedErTableRegionId  ER路由器的regionID。
    * attachedErId  被挂载的企业路由器ID。
    * attachedErTableId  被挂载的企业路由器的路由表ID。
    * attachedErAttachmentId  被挂载的企业路由器的连接ID。
    * attachedErTableSiteCode  被挂载的企业路由器的站点编码。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建企业路由表附件的原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'state' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'centralNetworkId' => null,
        'centralNetworkPlaneId' => null,
        'globalConnectionBandwidthId' => null,
        'isFrozen' => null,
        'bandwidthType' => null,
        'bandwidthSize' => 'int64',
        'enterpriseRouterId' => null,
        'enterpriseRouterProjectId' => null,
        'enterpriseRouterRegionId' => null,
        'enterpriseRouterAttachmentId' => null,
        'enterpriseRouterTableId' => null,
        'enterpriseRouterSiteCode' => null,
        'attachedErTableProjectId' => null,
        'attachedErTableRegionId' => null,
        'attachedErId' => null,
        'attachedErTableId' => null,
        'attachedErAttachmentId' => null,
        'attachedErTableSiteCode' => null,
        'hostedCloud' => null,
        'approvedState' => null,
        'reason' => null
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
    * description  实例描述。不支持 <>。
    * domainId  实例所属账号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  中心网络ID。
    * centralNetworkPlaneId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * isFrozen  是否冻结。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    * attachedErTableRegionId  ER路由器的regionID。
    * attachedErId  被挂载的企业路由器ID。
    * attachedErTableId  被挂载的企业路由器的路由表ID。
    * attachedErAttachmentId  被挂载的企业路由器的连接ID。
    * attachedErTableSiteCode  被挂载的企业路由器的站点编码。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建企业路由表附件的原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'centralNetworkId' => 'central_network_id',
            'centralNetworkPlaneId' => 'central_network_plane_id',
            'globalConnectionBandwidthId' => 'global_connection_bandwidth_id',
            'isFrozen' => 'is_frozen',
            'bandwidthType' => 'bandwidth_type',
            'bandwidthSize' => 'bandwidth_size',
            'enterpriseRouterId' => 'enterprise_router_id',
            'enterpriseRouterProjectId' => 'enterprise_router_project_id',
            'enterpriseRouterRegionId' => 'enterprise_router_region_id',
            'enterpriseRouterAttachmentId' => 'enterprise_router_attachment_id',
            'enterpriseRouterTableId' => 'enterprise_router_table_id',
            'enterpriseRouterSiteCode' => 'enterprise_router_site_code',
            'attachedErTableProjectId' => 'attached_er_table_project_id',
            'attachedErTableRegionId' => 'attached_er_table_region_id',
            'attachedErId' => 'attached_er_id',
            'attachedErTableId' => 'attached_er_table_id',
            'attachedErAttachmentId' => 'attached_er_attachment_id',
            'attachedErTableSiteCode' => 'attached_er_table_site_code',
            'hostedCloud' => 'hosted_cloud',
            'approvedState' => 'approved_state',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * domainId  实例所属账号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  中心网络ID。
    * centralNetworkPlaneId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * isFrozen  是否冻结。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    * attachedErTableRegionId  ER路由器的regionID。
    * attachedErId  被挂载的企业路由器ID。
    * attachedErTableId  被挂载的企业路由器的路由表ID。
    * attachedErAttachmentId  被挂载的企业路由器的连接ID。
    * attachedErTableSiteCode  被挂载的企业路由器的站点编码。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建企业路由表附件的原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'centralNetworkId' => 'setCentralNetworkId',
            'centralNetworkPlaneId' => 'setCentralNetworkPlaneId',
            'globalConnectionBandwidthId' => 'setGlobalConnectionBandwidthId',
            'isFrozen' => 'setIsFrozen',
            'bandwidthType' => 'setBandwidthType',
            'bandwidthSize' => 'setBandwidthSize',
            'enterpriseRouterId' => 'setEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'setEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'setEnterpriseRouterRegionId',
            'enterpriseRouterAttachmentId' => 'setEnterpriseRouterAttachmentId',
            'enterpriseRouterTableId' => 'setEnterpriseRouterTableId',
            'enterpriseRouterSiteCode' => 'setEnterpriseRouterSiteCode',
            'attachedErTableProjectId' => 'setAttachedErTableProjectId',
            'attachedErTableRegionId' => 'setAttachedErTableRegionId',
            'attachedErId' => 'setAttachedErId',
            'attachedErTableId' => 'setAttachedErTableId',
            'attachedErAttachmentId' => 'setAttachedErAttachmentId',
            'attachedErTableSiteCode' => 'setAttachedErTableSiteCode',
            'hostedCloud' => 'setHostedCloud',
            'approvedState' => 'setApprovedState',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * domainId  实例所属账号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  中心网络ID。
    * centralNetworkPlaneId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * isFrozen  是否冻结。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    * attachedErTableRegionId  ER路由器的regionID。
    * attachedErId  被挂载的企业路由器ID。
    * attachedErTableId  被挂载的企业路由器的路由表ID。
    * attachedErAttachmentId  被挂载的企业路由器的连接ID。
    * attachedErTableSiteCode  被挂载的企业路由器的站点编码。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建企业路由表附件的原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'centralNetworkId' => 'getCentralNetworkId',
            'centralNetworkPlaneId' => 'getCentralNetworkPlaneId',
            'globalConnectionBandwidthId' => 'getGlobalConnectionBandwidthId',
            'isFrozen' => 'getIsFrozen',
            'bandwidthType' => 'getBandwidthType',
            'bandwidthSize' => 'getBandwidthSize',
            'enterpriseRouterId' => 'getEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'getEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'getEnterpriseRouterRegionId',
            'enterpriseRouterAttachmentId' => 'getEnterpriseRouterAttachmentId',
            'enterpriseRouterTableId' => 'getEnterpriseRouterTableId',
            'enterpriseRouterSiteCode' => 'getEnterpriseRouterSiteCode',
            'attachedErTableProjectId' => 'getAttachedErTableProjectId',
            'attachedErTableRegionId' => 'getAttachedErTableRegionId',
            'attachedErId' => 'getAttachedErId',
            'attachedErTableId' => 'getAttachedErTableId',
            'attachedErAttachmentId' => 'getAttachedErAttachmentId',
            'attachedErTableSiteCode' => 'getAttachedErTableSiteCode',
            'hostedCloud' => 'getHostedCloud',
            'approvedState' => 'getApprovedState',
            'reason' => 'getReason'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['centralNetworkId'] = isset($data['centralNetworkId']) ? $data['centralNetworkId'] : null;
        $this->container['centralNetworkPlaneId'] = isset($data['centralNetworkPlaneId']) ? $data['centralNetworkPlaneId'] : null;
        $this->container['globalConnectionBandwidthId'] = isset($data['globalConnectionBandwidthId']) ? $data['globalConnectionBandwidthId'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['enterpriseRouterId'] = isset($data['enterpriseRouterId']) ? $data['enterpriseRouterId'] : null;
        $this->container['enterpriseRouterProjectId'] = isset($data['enterpriseRouterProjectId']) ? $data['enterpriseRouterProjectId'] : null;
        $this->container['enterpriseRouterRegionId'] = isset($data['enterpriseRouterRegionId']) ? $data['enterpriseRouterRegionId'] : null;
        $this->container['enterpriseRouterAttachmentId'] = isset($data['enterpriseRouterAttachmentId']) ? $data['enterpriseRouterAttachmentId'] : null;
        $this->container['enterpriseRouterTableId'] = isset($data['enterpriseRouterTableId']) ? $data['enterpriseRouterTableId'] : null;
        $this->container['enterpriseRouterSiteCode'] = isset($data['enterpriseRouterSiteCode']) ? $data['enterpriseRouterSiteCode'] : null;
        $this->container['attachedErTableProjectId'] = isset($data['attachedErTableProjectId']) ? $data['attachedErTableProjectId'] : null;
        $this->container['attachedErTableRegionId'] = isset($data['attachedErTableRegionId']) ? $data['attachedErTableRegionId'] : null;
        $this->container['attachedErId'] = isset($data['attachedErId']) ? $data['attachedErId'] : null;
        $this->container['attachedErTableId'] = isset($data['attachedErTableId']) ? $data['attachedErTableId'] : null;
        $this->container['attachedErAttachmentId'] = isset($data['attachedErAttachmentId']) ? $data['attachedErAttachmentId'] : null;
        $this->container['attachedErTableSiteCode'] = isset($data['attachedErTableSiteCode']) ? $data['attachedErTableSiteCode'] : null;
        $this->container['hostedCloud'] = isset($data['hostedCloud']) ? $data['hostedCloud'] : null;
        $this->container['approvedState'] = isset($data['approvedState']) ? $data['approvedState'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['centralNetworkId'] === null) {
            $invalidProperties[] = "'centralNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['centralNetworkPlaneId'] === null) {
            $invalidProperties[] = "'centralNetworkPlaneId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkPlaneId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalConnectionBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['isFrozen'] === null) {
            $invalidProperties[] = "'isFrozen' can't be null";
        }
        if ($this->container['bandwidthType'] === null) {
            $invalidProperties[] = "'bandwidthType' can't be null";
        }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] > 999999)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseRouterId'] === null) {
            $invalidProperties[] = "'enterpriseRouterId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseRouterId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['enterpriseRouterProjectId'] === null) {
            $invalidProperties[] = "'enterpriseRouterProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['enterpriseRouterProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['enterpriseRouterRegionId'] === null) {
            $invalidProperties[] = "'enterpriseRouterRegionId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['enterpriseRouterRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterRegionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseRouterAttachmentId']) && (mb_strlen($this->container['enterpriseRouterAttachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterAttachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseRouterAttachmentId']) && (mb_strlen($this->container['enterpriseRouterAttachmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterAttachmentId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseRouterAttachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseRouterAttachmentId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterAttachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['enterpriseRouterTableId'] === null) {
            $invalidProperties[] = "'enterpriseRouterTableId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseRouterTableId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['enterpriseRouterSiteCode'] === null) {
            $invalidProperties[] = "'enterpriseRouterSiteCode' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterSiteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['enterpriseRouterSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['enterpriseRouterSiteCode'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterSiteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
            }
        if ($this->container['attachedErTableProjectId'] === null) {
            $invalidProperties[] = "'attachedErTableProjectId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['attachedErTableProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['attachedErTableProjectId'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['attachedErTableRegionId'] === null) {
            $invalidProperties[] = "'attachedErTableRegionId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['attachedErTableRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachedErTableRegionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['attachedErId'] === null) {
            $invalidProperties[] = "'attachedErId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachedErId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachedErId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachedErId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachedErId'])) {
                $invalidProperties[] = "invalid value for 'attachedErId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['attachedErTableId'] === null) {
            $invalidProperties[] = "'attachedErTableId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachedErTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachedErTableId'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['attachedErAttachmentId']) && (mb_strlen($this->container['attachedErAttachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachedErAttachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachedErAttachmentId']) && (mb_strlen($this->container['attachedErAttachmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachedErAttachmentId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['attachedErAttachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachedErAttachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachedErAttachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['attachedErTableSiteCode'] === null) {
            $invalidProperties[] = "'attachedErTableSiteCode' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableSiteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'attachedErTableSiteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['attachedErTableSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachedErTableSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['attachedErTableSiteCode'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableSiteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
            }
        if ($this->container['approvedState'] === null) {
            $invalidProperties[] = "'approvedState' can't be null";
        }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && !preg_match("/^[^<>]*$/", $this->container['reason'])) {
                $invalidProperties[] = "invalid value for 'reason', must be conform to the pattern /^[^<>]*$/.";
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
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets centralNetworkId
    *  中心网络ID。
    *
    * @return string
    */
    public function getCentralNetworkId()
    {
        return $this->container['centralNetworkId'];
    }

    /**
    * Sets centralNetworkId
    *
    * @param string $centralNetworkId 中心网络ID。
    *
    * @return $this
    */
    public function setCentralNetworkId($centralNetworkId)
    {
        $this->container['centralNetworkId'] = $centralNetworkId;
        return $this;
    }

    /**
    * Gets centralNetworkPlaneId
    *  中心网络平面ID。
    *
    * @return string
    */
    public function getCentralNetworkPlaneId()
    {
        return $this->container['centralNetworkPlaneId'];
    }

    /**
    * Sets centralNetworkPlaneId
    *
    * @param string $centralNetworkPlaneId 中心网络平面ID。
    *
    * @return $this
    */
    public function setCentralNetworkPlaneId($centralNetworkPlaneId)
    {
        $this->container['centralNetworkPlaneId'] = $centralNetworkPlaneId;
        return $this;
    }

    /**
    * Gets globalConnectionBandwidthId
    *  全域互联带宽ID。
    *
    * @return string|null
    */
    public function getGlobalConnectionBandwidthId()
    {
        return $this->container['globalConnectionBandwidthId'];
    }

    /**
    * Sets globalConnectionBandwidthId
    *
    * @param string|null $globalConnectionBandwidthId 全域互联带宽ID。
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthId($globalConnectionBandwidthId)
    {
        $this->container['globalConnectionBandwidthId'] = $globalConnectionBandwidthId;
        return $this;
    }

    /**
    * Gets isFrozen
    *  是否冻结。
    *
    * @return bool
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param bool $isFrozen 是否冻结。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  bandwidthType
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum $bandwidthType bandwidthType
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽值，单位Mbps。
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽值，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets enterpriseRouterId
    *  企业路由器的ID。
    *
    * @return string
    */
    public function getEnterpriseRouterId()
    {
        return $this->container['enterpriseRouterId'];
    }

    /**
    * Sets enterpriseRouterId
    *
    * @param string $enterpriseRouterId 企业路由器的ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterId($enterpriseRouterId)
    {
        $this->container['enterpriseRouterId'] = $enterpriseRouterId;
        return $this;
    }

    /**
    * Gets enterpriseRouterProjectId
    *  企业路由器的项目ID。
    *
    * @return string
    */
    public function getEnterpriseRouterProjectId()
    {
        return $this->container['enterpriseRouterProjectId'];
    }

    /**
    * Sets enterpriseRouterProjectId
    *
    * @param string $enterpriseRouterProjectId 企业路由器的项目ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterProjectId($enterpriseRouterProjectId)
    {
        $this->container['enterpriseRouterProjectId'] = $enterpriseRouterProjectId;
        return $this;
    }

    /**
    * Gets enterpriseRouterRegionId
    *  ER路由器的regionID。
    *
    * @return string
    */
    public function getEnterpriseRouterRegionId()
    {
        return $this->container['enterpriseRouterRegionId'];
    }

    /**
    * Sets enterpriseRouterRegionId
    *
    * @param string $enterpriseRouterRegionId ER路由器的regionID。
    *
    * @return $this
    */
    public function setEnterpriseRouterRegionId($enterpriseRouterRegionId)
    {
        $this->container['enterpriseRouterRegionId'] = $enterpriseRouterRegionId;
        return $this;
    }

    /**
    * Gets enterpriseRouterAttachmentId
    *  企业路由器的连接ID。
    *
    * @return string|null
    */
    public function getEnterpriseRouterAttachmentId()
    {
        return $this->container['enterpriseRouterAttachmentId'];
    }

    /**
    * Sets enterpriseRouterAttachmentId
    *
    * @param string|null $enterpriseRouterAttachmentId 企业路由器的连接ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterAttachmentId($enterpriseRouterAttachmentId)
    {
        $this->container['enterpriseRouterAttachmentId'] = $enterpriseRouterAttachmentId;
        return $this;
    }

    /**
    * Gets enterpriseRouterTableId
    *  企业路由器的路由表ID。
    *
    * @return string
    */
    public function getEnterpriseRouterTableId()
    {
        return $this->container['enterpriseRouterTableId'];
    }

    /**
    * Sets enterpriseRouterTableId
    *
    * @param string $enterpriseRouterTableId 企业路由器的路由表ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterTableId($enterpriseRouterTableId)
    {
        $this->container['enterpriseRouterTableId'] = $enterpriseRouterTableId;
        return $this;
    }

    /**
    * Gets enterpriseRouterSiteCode
    *  中心网络企业路由器的站点编码。
    *
    * @return string
    */
    public function getEnterpriseRouterSiteCode()
    {
        return $this->container['enterpriseRouterSiteCode'];
    }

    /**
    * Sets enterpriseRouterSiteCode
    *
    * @param string $enterpriseRouterSiteCode 中心网络企业路由器的站点编码。
    *
    * @return $this
    */
    public function setEnterpriseRouterSiteCode($enterpriseRouterSiteCode)
    {
        $this->container['enterpriseRouterSiteCode'] = $enterpriseRouterSiteCode;
        return $this;
    }

    /**
    * Gets attachedErTableProjectId
    *  被挂载的企业路由器的项目ID。
    *
    * @return string
    */
    public function getAttachedErTableProjectId()
    {
        return $this->container['attachedErTableProjectId'];
    }

    /**
    * Sets attachedErTableProjectId
    *
    * @param string $attachedErTableProjectId 被挂载的企业路由器的项目ID。
    *
    * @return $this
    */
    public function setAttachedErTableProjectId($attachedErTableProjectId)
    {
        $this->container['attachedErTableProjectId'] = $attachedErTableProjectId;
        return $this;
    }

    /**
    * Gets attachedErTableRegionId
    *  ER路由器的regionID。
    *
    * @return string
    */
    public function getAttachedErTableRegionId()
    {
        return $this->container['attachedErTableRegionId'];
    }

    /**
    * Sets attachedErTableRegionId
    *
    * @param string $attachedErTableRegionId ER路由器的regionID。
    *
    * @return $this
    */
    public function setAttachedErTableRegionId($attachedErTableRegionId)
    {
        $this->container['attachedErTableRegionId'] = $attachedErTableRegionId;
        return $this;
    }

    /**
    * Gets attachedErId
    *  被挂载的企业路由器ID。
    *
    * @return string
    */
    public function getAttachedErId()
    {
        return $this->container['attachedErId'];
    }

    /**
    * Sets attachedErId
    *
    * @param string $attachedErId 被挂载的企业路由器ID。
    *
    * @return $this
    */
    public function setAttachedErId($attachedErId)
    {
        $this->container['attachedErId'] = $attachedErId;
        return $this;
    }

    /**
    * Gets attachedErTableId
    *  被挂载的企业路由器的路由表ID。
    *
    * @return string
    */
    public function getAttachedErTableId()
    {
        return $this->container['attachedErTableId'];
    }

    /**
    * Sets attachedErTableId
    *
    * @param string $attachedErTableId 被挂载的企业路由器的路由表ID。
    *
    * @return $this
    */
    public function setAttachedErTableId($attachedErTableId)
    {
        $this->container['attachedErTableId'] = $attachedErTableId;
        return $this;
    }

    /**
    * Gets attachedErAttachmentId
    *  被挂载的企业路由器的连接ID。
    *
    * @return string|null
    */
    public function getAttachedErAttachmentId()
    {
        return $this->container['attachedErAttachmentId'];
    }

    /**
    * Sets attachedErAttachmentId
    *
    * @param string|null $attachedErAttachmentId 被挂载的企业路由器的连接ID。
    *
    * @return $this
    */
    public function setAttachedErAttachmentId($attachedErAttachmentId)
    {
        $this->container['attachedErAttachmentId'] = $attachedErAttachmentId;
        return $this;
    }

    /**
    * Gets attachedErTableSiteCode
    *  被挂载的企业路由器的站点编码。
    *
    * @return string
    */
    public function getAttachedErTableSiteCode()
    {
        return $this->container['attachedErTableSiteCode'];
    }

    /**
    * Sets attachedErTableSiteCode
    *
    * @param string $attachedErTableSiteCode 被挂载的企业路由器的站点编码。
    *
    * @return $this
    */
    public function setAttachedErTableSiteCode($attachedErTableSiteCode)
    {
        $this->container['attachedErTableSiteCode'] = $attachedErTableSiteCode;
        return $this;
    }

    /**
    * Gets hostedCloud
    *  hostedCloud
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum|null
    */
    public function getHostedCloud()
    {
        return $this->container['hostedCloud'];
    }

    /**
    * Sets hostedCloud
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum|null $hostedCloud hostedCloud
    *
    * @return $this
    */
    public function setHostedCloud($hostedCloud)
    {
        $this->container['hostedCloud'] = $hostedCloud;
        return $this;
    }

    /**
    * Gets approvedState
    *  approvedState
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum
    */
    public function getApprovedState()
    {
        return $this->container['approvedState'];
    }

    /**
    * Sets approvedState
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum $approvedState approvedState
    *
    * @return $this
    */
    public function setApprovedState($approvedState)
    {
        $this->container['approvedState'] = $approvedState;
        return $this;
    }

    /**
    * Gets reason
    *  审批拒绝创建企业路由表附件的原因。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 审批拒绝创建企业路由表附件的原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

