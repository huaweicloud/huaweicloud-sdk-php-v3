<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkAttachment';

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
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * attachmentInstanceType  attachmentInstanceType
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    * attachmentInstanceProjectId  中心网络附件对端实例的项目ID。
    * attachmentInstanceRegionId  中心网络附件对端实例的regionID。
    * attachmentInstanceSiteCode  中心网络附件对端实例的站点编码。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * specificationValue  specificationValue
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
            'attachmentInstanceType' => '\HuaweiCloud\SDK\Cc\V3\Model\AttachmentInstanceTypeEnum',
            'attachmentInstanceId' => 'string',
            'attachmentId' => 'string',
            'attachmentInstanceProjectId' => 'string',
            'attachmentInstanceRegionId' => 'string',
            'attachmentInstanceSiteCode' => 'string',
            'enterpriseRouterSiteCode' => 'string',
            'specificationValue' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkAttachmentSpecificationValueInfo'
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
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * attachmentInstanceType  attachmentInstanceType
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    * attachmentInstanceProjectId  中心网络附件对端实例的项目ID。
    * attachmentInstanceRegionId  中心网络附件对端实例的regionID。
    * attachmentInstanceSiteCode  中心网络附件对端实例的站点编码。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * specificationValue  specificationValue
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
        'attachmentInstanceType' => null,
        'attachmentInstanceId' => null,
        'attachmentId' => null,
        'attachmentInstanceProjectId' => null,
        'attachmentInstanceRegionId' => null,
        'attachmentInstanceSiteCode' => null,
        'enterpriseRouterSiteCode' => null,
        'specificationValue' => null
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
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * attachmentInstanceType  attachmentInstanceType
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    * attachmentInstanceProjectId  中心网络附件对端实例的项目ID。
    * attachmentInstanceRegionId  中心网络附件对端实例的regionID。
    * attachmentInstanceSiteCode  中心网络附件对端实例的站点编码。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * specificationValue  specificationValue
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
            'attachmentInstanceType' => 'attachment_instance_type',
            'attachmentInstanceId' => 'attachment_instance_id',
            'attachmentId' => 'attachment_id',
            'attachmentInstanceProjectId' => 'attachment_instance_project_id',
            'attachmentInstanceRegionId' => 'attachment_instance_region_id',
            'attachmentInstanceSiteCode' => 'attachment_instance_site_code',
            'enterpriseRouterSiteCode' => 'enterprise_router_site_code',
            'specificationValue' => 'specification_value'
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
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * attachmentInstanceType  attachmentInstanceType
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    * attachmentInstanceProjectId  中心网络附件对端实例的项目ID。
    * attachmentInstanceRegionId  中心网络附件对端实例的regionID。
    * attachmentInstanceSiteCode  中心网络附件对端实例的站点编码。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * specificationValue  specificationValue
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
            'attachmentInstanceType' => 'setAttachmentInstanceType',
            'attachmentInstanceId' => 'setAttachmentInstanceId',
            'attachmentId' => 'setAttachmentId',
            'attachmentInstanceProjectId' => 'setAttachmentInstanceProjectId',
            'attachmentInstanceRegionId' => 'setAttachmentInstanceRegionId',
            'attachmentInstanceSiteCode' => 'setAttachmentInstanceSiteCode',
            'enterpriseRouterSiteCode' => 'setEnterpriseRouterSiteCode',
            'specificationValue' => 'setSpecificationValue'
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
    * bandwidthType  bandwidthType
    * bandwidthSize  带宽值，单位Mbps。
    * isFrozen  是否冻结。
    * enterpriseRouterId  企业路由器的ID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * enterpriseRouterAttachmentId  企业路由器的连接ID。
    * attachmentInstanceType  attachmentInstanceType
    * attachmentInstanceId  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    * attachmentId  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    * attachmentInstanceProjectId  中心网络附件对端实例的项目ID。
    * attachmentInstanceRegionId  中心网络附件对端实例的regionID。
    * attachmentInstanceSiteCode  中心网络附件对端实例的站点编码。
    * enterpriseRouterSiteCode  中心网络企业路由器的站点编码。
    * specificationValue  specificationValue
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
            'attachmentInstanceType' => 'getAttachmentInstanceType',
            'attachmentInstanceId' => 'getAttachmentInstanceId',
            'attachmentId' => 'getAttachmentId',
            'attachmentInstanceProjectId' => 'getAttachmentInstanceProjectId',
            'attachmentInstanceRegionId' => 'getAttachmentInstanceRegionId',
            'attachmentInstanceSiteCode' => 'getAttachmentInstanceSiteCode',
            'enterpriseRouterSiteCode' => 'getEnterpriseRouterSiteCode',
            'specificationValue' => 'getSpecificationValue'
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
        $this->container['attachmentInstanceType'] = isset($data['attachmentInstanceType']) ? $data['attachmentInstanceType'] : null;
        $this->container['attachmentInstanceId'] = isset($data['attachmentInstanceId']) ? $data['attachmentInstanceId'] : null;
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['attachmentInstanceProjectId'] = isset($data['attachmentInstanceProjectId']) ? $data['attachmentInstanceProjectId'] : null;
        $this->container['attachmentInstanceRegionId'] = isset($data['attachmentInstanceRegionId']) ? $data['attachmentInstanceRegionId'] : null;
        $this->container['attachmentInstanceSiteCode'] = isset($data['attachmentInstanceSiteCode']) ? $data['attachmentInstanceSiteCode'] : null;
        $this->container['enterpriseRouterSiteCode'] = isset($data['enterpriseRouterSiteCode']) ? $data['enterpriseRouterSiteCode'] : null;
        $this->container['specificationValue'] = isset($data['specificationValue']) ? $data['specificationValue'] : null;
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
        if ($this->container['bandwidthType'] === null) {
            $invalidProperties[] = "'bandwidthType' can't be null";
        }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 9999999999.";
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
        if ($this->container['attachmentInstanceType'] === null) {
            $invalidProperties[] = "'attachmentInstanceType' can't be null";
        }
        if ($this->container['attachmentInstanceId'] === null) {
            $invalidProperties[] = "'attachmentInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['attachmentInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachmentInstanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentInstanceId'])) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['attachmentInstanceProjectId'] === null) {
            $invalidProperties[] = "'attachmentInstanceProjectId' can't be null";
        }
            if ((mb_strlen($this->container['attachmentInstanceProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachmentInstanceProjectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceProjectId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentInstanceProjectId'])) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['attachmentInstanceRegionId'] === null) {
            $invalidProperties[] = "'attachmentInstanceRegionId' can't be null";
        }
            if ((mb_strlen($this->container['attachmentInstanceRegionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceRegionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachmentInstanceRegionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceRegionId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentInstanceRegionId'])) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceRegionId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['attachmentInstanceSiteCode'] === null) {
            $invalidProperties[] = "'attachmentInstanceSiteCode' can't be null";
        }
            if ((mb_strlen($this->container['attachmentInstanceSiteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceSiteCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['attachmentInstanceSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['attachmentInstanceSiteCode'])) {
                $invalidProperties[] = "invalid value for 'attachmentInstanceSiteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
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
    * Gets attachmentInstanceType
    *  attachmentInstanceType
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AttachmentInstanceTypeEnum
    */
    public function getAttachmentInstanceType()
    {
        return $this->container['attachmentInstanceType'];
    }

    /**
    * Sets attachmentInstanceType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AttachmentInstanceTypeEnum $attachmentInstanceType attachmentInstanceType
    *
    * @return $this
    */
    public function setAttachmentInstanceType($attachmentInstanceType)
    {
        $this->container['attachmentInstanceType'] = $attachmentInstanceType;
        return $this;
    }

    /**
    * Gets attachmentInstanceId
    *  中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @return string
    */
    public function getAttachmentInstanceId()
    {
        return $this->container['attachmentInstanceId'];
    }

    /**
    * Sets attachmentInstanceId
    *
    * @param string $attachmentInstanceId 中心网络附件对端实例ID，企业路由器的路由表ID或者GDGW的ID。
    *
    * @return $this
    */
    public function setAttachmentInstanceId($attachmentInstanceId)
    {
        $this->container['attachmentInstanceId'] = $attachmentInstanceId;
        return $this;
    }

    /**
    * Gets attachmentId
    *  中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 中心网络附件对端实例的连接ID，企业路由器的连接ID或者GDGW的连接ID。
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets attachmentInstanceProjectId
    *  中心网络附件对端实例的项目ID。
    *
    * @return string
    */
    public function getAttachmentInstanceProjectId()
    {
        return $this->container['attachmentInstanceProjectId'];
    }

    /**
    * Sets attachmentInstanceProjectId
    *
    * @param string $attachmentInstanceProjectId 中心网络附件对端实例的项目ID。
    *
    * @return $this
    */
    public function setAttachmentInstanceProjectId($attachmentInstanceProjectId)
    {
        $this->container['attachmentInstanceProjectId'] = $attachmentInstanceProjectId;
        return $this;
    }

    /**
    * Gets attachmentInstanceRegionId
    *  中心网络附件对端实例的regionID。
    *
    * @return string
    */
    public function getAttachmentInstanceRegionId()
    {
        return $this->container['attachmentInstanceRegionId'];
    }

    /**
    * Sets attachmentInstanceRegionId
    *
    * @param string $attachmentInstanceRegionId 中心网络附件对端实例的regionID。
    *
    * @return $this
    */
    public function setAttachmentInstanceRegionId($attachmentInstanceRegionId)
    {
        $this->container['attachmentInstanceRegionId'] = $attachmentInstanceRegionId;
        return $this;
    }

    /**
    * Gets attachmentInstanceSiteCode
    *  中心网络附件对端实例的站点编码。
    *
    * @return string
    */
    public function getAttachmentInstanceSiteCode()
    {
        return $this->container['attachmentInstanceSiteCode'];
    }

    /**
    * Sets attachmentInstanceSiteCode
    *
    * @param string $attachmentInstanceSiteCode 中心网络附件对端实例的站点编码。
    *
    * @return $this
    */
    public function setAttachmentInstanceSiteCode($attachmentInstanceSiteCode)
    {
        $this->container['attachmentInstanceSiteCode'] = $attachmentInstanceSiteCode;
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
    * Gets specificationValue
    *  specificationValue
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkAttachmentSpecificationValueInfo|null
    */
    public function getSpecificationValue()
    {
        return $this->container['specificationValue'];
    }

    /**
    * Sets specificationValue
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkAttachmentSpecificationValueInfo|null $specificationValue specificationValue
    *
    * @return $this
    */
    public function setSpecificationValue($specificationValue)
    {
        $this->container['specificationValue'] = $specificationValue;
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

