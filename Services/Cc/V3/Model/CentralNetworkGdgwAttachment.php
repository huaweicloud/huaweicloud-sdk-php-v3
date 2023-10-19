<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkGdgwAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkGdgwAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * globalConnectionBandwidthId  资源ID标识符。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值定义，单位Mbps。
    * isFrozen  是否冻结
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * enterpriseRouterAttachmentId  资源ID标识符。
    * globalDcGatewayPeerLinkId  资源ID标识符。
    * globalDcGatewayId  资源ID标识符。
    * globalDcGatewayProjectId  实例所属项目ID。
    * globalDcGatewayRegionId  RegionID。
    * enterpriseRouterSiteCode  站点编码定义
    * globalDcGatewaySiteCode  站点编码定义
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
            'bandwidthType' => '\HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum',
            'bandwidthSize' => 'int',
            'isFrozen' => 'bool',
            'enterpriseRouterId' => 'string',
            'enterpriseRouterProjectId' => 'string',
            'enterpriseRouterRegionId' => 'string',
            'enterpriseRouterAttachmentId' => 'string',
            'globalDcGatewayPeerLinkId' => 'string',
            'globalDcGatewayId' => 'string',
            'globalDcGatewayProjectId' => 'string',
            'globalDcGatewayRegionId' => 'string',
            'enterpriseRouterSiteCode' => 'string',
            'globalDcGatewaySiteCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * globalConnectionBandwidthId  资源ID标识符。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值定义，单位Mbps。
    * isFrozen  是否冻结
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * enterpriseRouterAttachmentId  资源ID标识符。
    * globalDcGatewayPeerLinkId  资源ID标识符。
    * globalDcGatewayId  资源ID标识符。
    * globalDcGatewayProjectId  实例所属项目ID。
    * globalDcGatewayRegionId  RegionID。
    * enterpriseRouterSiteCode  站点编码定义
    * globalDcGatewaySiteCode  站点编码定义
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
        'bandwidthType' => null,
        'bandwidthSize' => 'int64',
        'isFrozen' => null,
        'enterpriseRouterId' => null,
        'enterpriseRouterProjectId' => null,
        'enterpriseRouterRegionId' => null,
        'enterpriseRouterAttachmentId' => null,
        'globalDcGatewayPeerLinkId' => null,
        'globalDcGatewayId' => null,
        'globalDcGatewayProjectId' => null,
        'globalDcGatewayRegionId' => null,
        'enterpriseRouterSiteCode' => null,
        'globalDcGatewaySiteCode' => null
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
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * globalConnectionBandwidthId  资源ID标识符。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值定义，单位Mbps。
    * isFrozen  是否冻结
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * enterpriseRouterAttachmentId  资源ID标识符。
    * globalDcGatewayPeerLinkId  资源ID标识符。
    * globalDcGatewayId  资源ID标识符。
    * globalDcGatewayProjectId  实例所属项目ID。
    * globalDcGatewayRegionId  RegionID。
    * enterpriseRouterSiteCode  站点编码定义
    * globalDcGatewaySiteCode  站点编码定义
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
            'bandwidthType' => 'bandwidth_type',
            'bandwidthSize' => 'bandwidth_size',
            'isFrozen' => 'is_frozen',
            'enterpriseRouterId' => 'enterprise_router_id',
            'enterpriseRouterProjectId' => 'enterprise_router_project_id',
            'enterpriseRouterRegionId' => 'enterprise_router_region_id',
            'enterpriseRouterAttachmentId' => 'enterprise_router_attachment_id',
            'globalDcGatewayPeerLinkId' => 'global_dc_gateway_peer_link_id',
            'globalDcGatewayId' => 'global_dc_gateway_id',
            'globalDcGatewayProjectId' => 'global_dc_gateway_project_id',
            'globalDcGatewayRegionId' => 'global_dc_gateway_region_id',
            'enterpriseRouterSiteCode' => 'enterprise_router_site_code',
            'globalDcGatewaySiteCode' => 'global_dc_gateway_site_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * globalConnectionBandwidthId  资源ID标识符。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值定义，单位Mbps。
    * isFrozen  是否冻结
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * enterpriseRouterAttachmentId  资源ID标识符。
    * globalDcGatewayPeerLinkId  资源ID标识符。
    * globalDcGatewayId  资源ID标识符。
    * globalDcGatewayProjectId  实例所属项目ID。
    * globalDcGatewayRegionId  RegionID。
    * enterpriseRouterSiteCode  站点编码定义
    * globalDcGatewaySiteCode  站点编码定义
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
            'bandwidthType' => 'setBandwidthType',
            'bandwidthSize' => 'setBandwidthSize',
            'isFrozen' => 'setIsFrozen',
            'enterpriseRouterId' => 'setEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'setEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'setEnterpriseRouterRegionId',
            'enterpriseRouterAttachmentId' => 'setEnterpriseRouterAttachmentId',
            'globalDcGatewayPeerLinkId' => 'setGlobalDcGatewayPeerLinkId',
            'globalDcGatewayId' => 'setGlobalDcGatewayId',
            'globalDcGatewayProjectId' => 'setGlobalDcGatewayProjectId',
            'globalDcGatewayRegionId' => 'setGlobalDcGatewayRegionId',
            'enterpriseRouterSiteCode' => 'setEnterpriseRouterSiteCode',
            'globalDcGatewaySiteCode' => 'setGlobalDcGatewaySiteCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * state  state
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * centralNetworkId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * globalConnectionBandwidthId  资源ID标识符。
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值定义，单位Mbps。
    * isFrozen  是否冻结
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * enterpriseRouterAttachmentId  资源ID标识符。
    * globalDcGatewayPeerLinkId  资源ID标识符。
    * globalDcGatewayId  资源ID标识符。
    * globalDcGatewayProjectId  实例所属项目ID。
    * globalDcGatewayRegionId  RegionID。
    * enterpriseRouterSiteCode  站点编码定义
    * globalDcGatewaySiteCode  站点编码定义
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
            'bandwidthType' => 'getBandwidthType',
            'bandwidthSize' => 'getBandwidthSize',
            'isFrozen' => 'getIsFrozen',
            'enterpriseRouterId' => 'getEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'getEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'getEnterpriseRouterRegionId',
            'enterpriseRouterAttachmentId' => 'getEnterpriseRouterAttachmentId',
            'globalDcGatewayPeerLinkId' => 'getGlobalDcGatewayPeerLinkId',
            'globalDcGatewayId' => 'getGlobalDcGatewayId',
            'globalDcGatewayProjectId' => 'getGlobalDcGatewayProjectId',
            'globalDcGatewayRegionId' => 'getGlobalDcGatewayRegionId',
            'enterpriseRouterSiteCode' => 'getEnterpriseRouterSiteCode',
            'globalDcGatewaySiteCode' => 'getGlobalDcGatewaySiteCode'
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
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['enterpriseRouterId'] = isset($data['enterpriseRouterId']) ? $data['enterpriseRouterId'] : null;
        $this->container['enterpriseRouterProjectId'] = isset($data['enterpriseRouterProjectId']) ? $data['enterpriseRouterProjectId'] : null;
        $this->container['enterpriseRouterRegionId'] = isset($data['enterpriseRouterRegionId']) ? $data['enterpriseRouterRegionId'] : null;
        $this->container['enterpriseRouterAttachmentId'] = isset($data['enterpriseRouterAttachmentId']) ? $data['enterpriseRouterAttachmentId'] : null;
        $this->container['globalDcGatewayPeerLinkId'] = isset($data['globalDcGatewayPeerLinkId']) ? $data['globalDcGatewayPeerLinkId'] : null;
        $this->container['globalDcGatewayId'] = isset($data['globalDcGatewayId']) ? $data['globalDcGatewayId'] : null;
        $this->container['globalDcGatewayProjectId'] = isset($data['globalDcGatewayProjectId']) ? $data['globalDcGatewayProjectId'] : null;
        $this->container['globalDcGatewayRegionId'] = isset($data['globalDcGatewayRegionId']) ? $data['globalDcGatewayRegionId'] : null;
        $this->container['enterpriseRouterSiteCode'] = isset($data['enterpriseRouterSiteCode']) ? $data['enterpriseRouterSiteCode'] : null;
        $this->container['globalDcGatewaySiteCode'] = isset($data['globalDcGatewaySiteCode']) ? $data['globalDcGatewaySiteCode'] : null;
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
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
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
            if ((mb_strlen($this->container['centralNetworkId']) < 32)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['centralNetworkId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['centralNetworkPlaneId'] === null) {
            $invalidProperties[] = "'centralNetworkPlaneId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['centralNetworkPlaneId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['globalConnectionBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
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
        if ($this->container['isFrozen'] === null) {
            $invalidProperties[] = "'isFrozen' can't be null";
        }
        if ($this->container['enterpriseRouterId'] === null) {
            $invalidProperties[] = "'enterpriseRouterId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['enterpriseRouterId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
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
            if (!is_null($this->container['enterpriseRouterAttachmentId']) && (mb_strlen($this->container['enterpriseRouterAttachmentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterAttachmentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['enterpriseRouterAttachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['enterpriseRouterAttachmentId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterAttachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && (mb_strlen($this->container['globalDcGatewayPeerLinkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && (mb_strlen($this->container['globalDcGatewayPeerLinkId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['globalDcGatewayPeerLinkId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['globalDcGatewayPeerLinkId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayPeerLinkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['globalDcGatewayId'] === null) {
            $invalidProperties[] = "'globalDcGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['globalDcGatewayId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['globalDcGatewayId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['globalDcGatewayProjectId'] === null) {
            $invalidProperties[] = "'globalDcGatewayProjectId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['globalDcGatewayProjectId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['globalDcGatewayRegionId'] === null) {
            $invalidProperties[] = "'globalDcGatewayRegionId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be bigger than or equal to 1.";
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
        if ($this->container['globalDcGatewaySiteCode'] === null) {
            $invalidProperties[] = "'globalDcGatewaySiteCode' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewaySiteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewaySiteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['globalDcGatewaySiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewaySiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['globalDcGatewaySiteCode'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewaySiteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
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
    *  资源ID标识符。
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
    * @param string $id 资源ID标识符。
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
    *  实例名字。
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
    * @param string $name 实例名字。
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
    *  实例所属帐号ID。
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
    * @param string $domainId 实例所属帐号ID。
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
    *  资源ID标识符。
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
    * @param string $centralNetworkId 资源ID标识符。
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
    *  资源ID标识符。
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
    * @param string $centralNetworkPlaneId 资源ID标识符。
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
    *  资源ID标识符。
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
    * @param string|null $globalConnectionBandwidthId 资源ID标识符。
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthId($globalConnectionBandwidthId)
    {
        $this->container['globalConnectionBandwidthId'] = $globalConnectionBandwidthId;
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
    *  带宽值定义，单位Mbps。
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
    * @param int|null $bandwidthSize 带宽值定义，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets isFrozen
    *  是否冻结
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
    * @param bool $isFrozen 是否冻结
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets enterpriseRouterId
    *  资源ID标识符。
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
    * @param string $enterpriseRouterId 资源ID标识符。
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
    *  实例所属项目ID。
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
    * @param string $enterpriseRouterProjectId 实例所属项目ID。
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
    *  RegionID。
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
    * @param string $enterpriseRouterRegionId RegionID。
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
    *  资源ID标识符。
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
    * @param string|null $enterpriseRouterAttachmentId 资源ID标识符。
    *
    * @return $this
    */
    public function setEnterpriseRouterAttachmentId($enterpriseRouterAttachmentId)
    {
        $this->container['enterpriseRouterAttachmentId'] = $enterpriseRouterAttachmentId;
        return $this;
    }

    /**
    * Gets globalDcGatewayPeerLinkId
    *  资源ID标识符。
    *
    * @return string|null
    */
    public function getGlobalDcGatewayPeerLinkId()
    {
        return $this->container['globalDcGatewayPeerLinkId'];
    }

    /**
    * Sets globalDcGatewayPeerLinkId
    *
    * @param string|null $globalDcGatewayPeerLinkId 资源ID标识符。
    *
    * @return $this
    */
    public function setGlobalDcGatewayPeerLinkId($globalDcGatewayPeerLinkId)
    {
        $this->container['globalDcGatewayPeerLinkId'] = $globalDcGatewayPeerLinkId;
        return $this;
    }

    /**
    * Gets globalDcGatewayId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getGlobalDcGatewayId()
    {
        return $this->container['globalDcGatewayId'];
    }

    /**
    * Sets globalDcGatewayId
    *
    * @param string $globalDcGatewayId 资源ID标识符。
    *
    * @return $this
    */
    public function setGlobalDcGatewayId($globalDcGatewayId)
    {
        $this->container['globalDcGatewayId'] = $globalDcGatewayId;
        return $this;
    }

    /**
    * Gets globalDcGatewayProjectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getGlobalDcGatewayProjectId()
    {
        return $this->container['globalDcGatewayProjectId'];
    }

    /**
    * Sets globalDcGatewayProjectId
    *
    * @param string $globalDcGatewayProjectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayProjectId($globalDcGatewayProjectId)
    {
        $this->container['globalDcGatewayProjectId'] = $globalDcGatewayProjectId;
        return $this;
    }

    /**
    * Gets globalDcGatewayRegionId
    *  RegionID。
    *
    * @return string
    */
    public function getGlobalDcGatewayRegionId()
    {
        return $this->container['globalDcGatewayRegionId'];
    }

    /**
    * Sets globalDcGatewayRegionId
    *
    * @param string $globalDcGatewayRegionId RegionID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayRegionId($globalDcGatewayRegionId)
    {
        $this->container['globalDcGatewayRegionId'] = $globalDcGatewayRegionId;
        return $this;
    }

    /**
    * Gets enterpriseRouterSiteCode
    *  站点编码定义
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
    * @param string $enterpriseRouterSiteCode 站点编码定义
    *
    * @return $this
    */
    public function setEnterpriseRouterSiteCode($enterpriseRouterSiteCode)
    {
        $this->container['enterpriseRouterSiteCode'] = $enterpriseRouterSiteCode;
        return $this;
    }

    /**
    * Gets globalDcGatewaySiteCode
    *  站点编码定义
    *
    * @return string
    */
    public function getGlobalDcGatewaySiteCode()
    {
        return $this->container['globalDcGatewaySiteCode'];
    }

    /**
    * Sets globalDcGatewaySiteCode
    *
    * @param string $globalDcGatewaySiteCode 站点编码定义
    *
    * @return $this
    */
    public function setGlobalDcGatewaySiteCode($globalDcGatewaySiteCode)
    {
        $this->container['globalDcGatewaySiteCode'] = $globalDcGatewaySiteCode;
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

