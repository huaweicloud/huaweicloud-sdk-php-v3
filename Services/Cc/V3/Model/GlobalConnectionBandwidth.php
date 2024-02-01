<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * bordercross  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    * type  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * enterpriseProjectId  实例所属企业项目ID。
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * localSiteCode  功能说明：本端接入点的编码。
    * remoteSiteCode  功能说明：远端接入点的编码。
    * frozen  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    * specCodeId  功能说明：线路规格编码UUID。
    * tags  实例标签。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * enableShare  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    * instances  功能说明: 全域互联带宽绑定实例列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'bordercross' => 'bool',
            'type' => 'string',
            'bindingService' => 'string',
            'enterpriseProjectId' => 'string',
            'chargeMode' => 'string',
            'size' => 'int',
            'slaLevel' => 'string',
            'localSiteCode' => 'string',
            'remoteSiteCode' => 'string',
            'frozen' => 'bool',
            'specCodeId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cc\V3\Model\Tag[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'enableShare' => 'bool',
            'instances' => '\HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthAssociatedInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * bordercross  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    * type  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * enterpriseProjectId  实例所属企业项目ID。
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * localSiteCode  功能说明：本端接入点的编码。
    * remoteSiteCode  功能说明：远端接入点的编码。
    * frozen  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    * specCodeId  功能说明：线路规格编码UUID。
    * tags  实例标签。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * enableShare  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    * instances  功能说明: 全域互联带宽绑定实例列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'bordercross' => null,
        'type' => null,
        'bindingService' => null,
        'enterpriseProjectId' => null,
        'chargeMode' => null,
        'size' => 'int32',
        'slaLevel' => null,
        'localSiteCode' => null,
        'remoteSiteCode' => null,
        'frozen' => null,
        'specCodeId' => null,
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'enableShare' => null,
        'instances' => null
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
    * bordercross  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    * type  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * enterpriseProjectId  实例所属企业项目ID。
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * localSiteCode  功能说明：本端接入点的编码。
    * remoteSiteCode  功能说明：远端接入点的编码。
    * frozen  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    * specCodeId  功能说明：线路规格编码UUID。
    * tags  实例标签。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * enableShare  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    * instances  功能说明: 全域互联带宽绑定实例列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'bordercross' => 'bordercross',
            'type' => 'type',
            'bindingService' => 'binding_service',
            'enterpriseProjectId' => 'enterprise_project_id',
            'chargeMode' => 'charge_mode',
            'size' => 'size',
            'slaLevel' => 'sla_level',
            'localSiteCode' => 'local_site_code',
            'remoteSiteCode' => 'remote_site_code',
            'frozen' => 'frozen',
            'specCodeId' => 'spec_code_id',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enableShare' => 'enable_share',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * bordercross  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    * type  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * enterpriseProjectId  实例所属企业项目ID。
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * localSiteCode  功能说明：本端接入点的编码。
    * remoteSiteCode  功能说明：远端接入点的编码。
    * frozen  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    * specCodeId  功能说明：线路规格编码UUID。
    * tags  实例标签。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * enableShare  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    * instances  功能说明: 全域互联带宽绑定实例列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'bordercross' => 'setBordercross',
            'type' => 'setType',
            'bindingService' => 'setBindingService',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'chargeMode' => 'setChargeMode',
            'size' => 'setSize',
            'slaLevel' => 'setSlaLevel',
            'localSiteCode' => 'setLocalSiteCode',
            'remoteSiteCode' => 'setRemoteSiteCode',
            'frozen' => 'setFrozen',
            'specCodeId' => 'setSpecCodeId',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enableShare' => 'setEnableShare',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * bordercross  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    * type  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * enterpriseProjectId  实例所属企业项目ID。
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * localSiteCode  功能说明：本端接入点的编码。
    * remoteSiteCode  功能说明：远端接入点的编码。
    * frozen  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    * specCodeId  功能说明：线路规格编码UUID。
    * tags  实例标签。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * enableShare  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    * instances  功能说明: 全域互联带宽绑定实例列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'bordercross' => 'getBordercross',
            'type' => 'getType',
            'bindingService' => 'getBindingService',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'chargeMode' => 'getChargeMode',
            'size' => 'getSize',
            'slaLevel' => 'getSlaLevel',
            'localSiteCode' => 'getLocalSiteCode',
            'remoteSiteCode' => 'getRemoteSiteCode',
            'frozen' => 'getFrozen',
            'specCodeId' => 'getSpecCodeId',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enableShare' => 'getEnableShare',
            'instances' => 'getInstances'
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
    const TYPE_REGION = 'Region';
    const TYPE_SUB_AREA = 'SubArea';
    const TYPE_AREA = 'Area';
    const TYPE_TRS_AREA = 'TrsArea';
    const BINDING_SERVICE_CC = 'CC';
    const BINDING_SERVICE_GEIP = 'GEIP';
    const BINDING_SERVICE_GCN = 'GCN';
    const BINDING_SERVICE_GSN = 'GSN';
    const BINDING_SERVICE_ALL = 'ALL';
    const CHARGE_MODE_BWD = 'bwd';
    const CHARGE_MODE__95 = '95';
    const SLA_LEVEL_PT = 'Pt';
    const SLA_LEVEL_AU = 'Au';
    const SLA_LEVEL_AG = 'Ag';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REGION,
            self::TYPE_SUB_AREA,
            self::TYPE_AREA,
            self::TYPE_TRS_AREA,
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
            self::BINDING_SERVICE_ALL,
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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaLevelAllowableValues()
    {
        return [
            self::SLA_LEVEL_PT,
            self::SLA_LEVEL_AU,
            self::SLA_LEVEL_AG,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['bordercross'] = isset($data['bordercross']) ? $data['bordercross'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bindingService'] = isset($data['bindingService']) ? $data['bindingService'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['slaLevel'] = isset($data['slaLevel']) ? $data['slaLevel'] : null;
        $this->container['localSiteCode'] = isset($data['localSiteCode']) ? $data['localSiteCode'] : null;
        $this->container['remoteSiteCode'] = isset($data['remoteSiteCode']) ? $data['remoteSiteCode'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['specCodeId'] = isset($data['specCodeId']) ? $data['specCodeId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enableShare'] = isset($data['enableShare']) ? $data['enableShare'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
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
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getBindingServiceAllowableValues();
                if (!is_null($this->container['bindingService']) && !in_array($this->container['bindingService'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bindingService', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['size']) && ($this->container['size'] > 300)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 2)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getSlaLevelAllowableValues();
                if (!is_null($this->container['slaLevel']) && !in_array($this->container['slaLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'slaLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) > 36)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['localSiteCode']) && (mb_strlen($this->container['localSiteCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'localSiteCode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['localSiteCode']) && (mb_strlen($this->container['localSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'localSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteSiteCode']) && (mb_strlen($this->container['remoteSiteCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteSiteCode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteSiteCode']) && (mb_strlen($this->container['remoteSiteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteSiteCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['specCodeId']) && (mb_strlen($this->container['specCodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'specCodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['specCodeId']) && (mb_strlen($this->container['specCodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'specCodeId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名字。
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
    * Gets bordercross
    *  功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    *
    * @return bool|null
    */
    public function getBordercross()
    {
        return $this->container['bordercross'];
    }

    /**
    * Sets bordercross
    *
    * @param bool|null $bordercross 功能说明：全域互联带宽是否跨境，判断依据：带宽是否涉及从中国大陆到其他国家。 取值范围：True：跨境；False：非跨境
    *
    * @return $this
    */
    public function setBordercross($bordercross)
    {
        $this->container['bordercross'] = $bordercross;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
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
    * @param string|null $type 功能说明：描述带宽类型，对应地理区间的城域、区域、大区、跨区四级： - TrsArea: 跨区带宽 - Area: 大区带宽 - SubArea: 区域带宽 - Region: 城域带宽
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bindingService
    *  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    *
    * @return string|null
    */
    public function getBindingService()
    {
        return $this->container['bindingService'];
    }

    /**
    * Sets bindingService
    *
    * @param string|null $bindingService 功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    *
    * @return $this
    */
    public function setBindingService($bindingService)
    {
        $this->container['bindingService'] = $bindingService;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例所属企业项目ID。
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
    * @param string|null $enterpriseProjectId 实例所属企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets size
    *  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets slaLevel
    *  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return string|null
    */
    public function getSlaLevel()
    {
        return $this->container['slaLevel'];
    }

    /**
    * Sets slaLevel
    *
    * @param string|null $slaLevel 功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return $this
    */
    public function setSlaLevel($slaLevel)
    {
        $this->container['slaLevel'] = $slaLevel;
        return $this;
    }

    /**
    * Gets localSiteCode
    *  功能说明：本端接入点的编码。
    *
    * @return string|null
    */
    public function getLocalSiteCode()
    {
        return $this->container['localSiteCode'];
    }

    /**
    * Sets localSiteCode
    *
    * @param string|null $localSiteCode 功能说明：本端接入点的编码。
    *
    * @return $this
    */
    public function setLocalSiteCode($localSiteCode)
    {
        $this->container['localSiteCode'] = $localSiteCode;
        return $this;
    }

    /**
    * Gets remoteSiteCode
    *  功能说明：远端接入点的编码。
    *
    * @return string|null
    */
    public function getRemoteSiteCode()
    {
        return $this->container['remoteSiteCode'];
    }

    /**
    * Sets remoteSiteCode
    *
    * @param string|null $remoteSiteCode 功能说明：远端接入点的编码。
    *
    * @return $this
    */
    public function setRemoteSiteCode($remoteSiteCode)
    {
        $this->container['remoteSiteCode'] = $remoteSiteCode;
        return $this;
    }

    /**
    * Gets frozen
    *  功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    *
    * @return bool|null
    */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
    * Sets frozen
    *
    * @param bool|null $frozen 功能说明: 全域互联带宽是否冻结。 取值范围：     true-冻结     false-非冻结
    *
    * @return $this
    */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;
        return $this;
    }

    /**
    * Gets specCodeId
    *  功能说明：线路规格编码UUID。
    *
    * @return string|null
    */
    public function getSpecCodeId()
    {
        return $this->container['specCodeId'];
    }

    /**
    * Sets specCodeId
    *
    * @param string|null $specCodeId 功能说明：线路规格编码UUID。
    *
    * @return $this
    */
    public function setSpecCodeId($specCodeId)
    {
        $this->container['specCodeId'] = $specCodeId;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\Tag[]|null $tags 实例标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
    * Gets enableShare
    *  功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    *
    * @return bool|null
    */
    public function getEnableShare()
    {
        return $this->container['enableShare'];
    }

    /**
    * Sets enableShare
    *
    * @param bool|null $enableShare 功能说明: 全域互联带宽是否支持绑定多实例。 取值范围：     true-支持     false-不支持
    *
    * @return $this
    */
    public function setEnableShare($enableShare)
    {
        $this->container['enableShare'] = $enableShare;
        return $this;
    }

    /**
    * Gets instances
    *  功能说明: 全域互联带宽绑定实例列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthAssociatedInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthAssociatedInstance[]|null $instances 功能说明: 全域互联带宽绑定实例列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

