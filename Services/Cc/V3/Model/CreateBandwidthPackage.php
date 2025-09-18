<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBandwidthPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBandwidthPackage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'localAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef',
            'remoteAreaId' => '\HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef',
            'chargeMode' => 'string',
            'billingMode' => 'int',
            'bandwidth' => 'int',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'specCode' => 'string',
            'interflowMode' => 'string',
            'prepaidOptions' => '\HuaweiCloud\SDK\Cc\V3\Model\CreatePrepaidOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'localAreaId' => null,
        'remoteAreaId' => null,
        'chargeMode' => null,
        'billingMode' => 'int32',
        'bandwidth' => 'int32',
        'resourceId' => null,
        'resourceType' => null,
        'specCode' => null,
        'interflowMode' => null,
        'prepaidOptions' => null
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
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'localAreaId' => 'local_area_id',
            'remoteAreaId' => 'remote_area_id',
            'chargeMode' => 'charge_mode',
            'billingMode' => 'billing_mode',
            'bandwidth' => 'bandwidth',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'specCode' => 'spec_code',
            'interflowMode' => 'interflow_mode',
            'prepaidOptions' => 'prepaid_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'localAreaId' => 'setLocalAreaId',
            'remoteAreaId' => 'setRemoteAreaId',
            'chargeMode' => 'setChargeMode',
            'billingMode' => 'setBillingMode',
            'bandwidth' => 'setBandwidth',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'specCode' => 'setSpecCode',
            'interflowMode' => 'setInterflowMode',
            'prepaidOptions' => 'setPrepaidOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * description  实例描述。不支持 <>。
    * enterpriseProjectId  实例所属企业项目ID。
    * projectId  实例所属项目ID。
    * localAreaId  localAreaId
    * remoteAreaId  remoteAreaId
    * chargeMode  带宽包实例的计费方式。 bandwidth是按带宽计费。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    * bandwidth  带宽包实例中的带宽值。
    * resourceId  带宽包实例绑定的资源ID。
    * resourceType  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    * specCode  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    * interflowMode  互通类型: - Area: 大区互通 - Region: 城域互通
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'localAreaId' => 'getLocalAreaId',
            'remoteAreaId' => 'getRemoteAreaId',
            'chargeMode' => 'getChargeMode',
            'billingMode' => 'getBillingMode',
            'bandwidth' => 'getBandwidth',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'specCode' => 'getSpecCode',
            'interflowMode' => 'getInterflowMode',
            'prepaidOptions' => 'getPrepaidOptions'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const BILLING_MODE_1 = 1;
    const BILLING_MODE_2 = 2;
    const BILLING_MODE_3 = 3;
    const BILLING_MODE_4 = 4;
    const BILLING_MODE_5 = 5;
    const BILLING_MODE_6 = 6;
    const RESOURCE_TYPE_CLOUD_CONNECTION = 'cloud_connection';
    const INTERFLOW_MODE_AREA = 'Area';
    const INTERFLOW_MODE_REGION = 'Region';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE_1,
            self::BILLING_MODE_2,
            self::BILLING_MODE_3,
            self::BILLING_MODE_4,
            self::BILLING_MODE_5,
            self::BILLING_MODE_6,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CLOUD_CONNECTION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterflowModeAllowableValues()
    {
        return [
            self::INTERFLOW_MODE_AREA,
            self::INTERFLOW_MODE_REGION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['localAreaId'] = isset($data['localAreaId']) ? $data['localAreaId'] : null;
        $this->container['remoteAreaId'] = isset($data['remoteAreaId']) ? $data['remoteAreaId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['interflowMode'] = isset($data['interflowMode']) ? $data['interflowMode'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-([a-fA-F0-9]{4}-){3}[a-fA-F0-9]{12}|[a-fA-F0-9]{32,32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{8}-([a-fA-F0-9]{4}-){3}[a-fA-F0-9]{12}|[a-fA-F0-9]{32,32}/.";
            }
        if ($this->container['localAreaId'] === null) {
            $invalidProperties[] = "'localAreaId' can't be null";
        }
        if ($this->container['remoteAreaId'] === null) {
            $invalidProperties[] = "'remoteAreaId' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['chargeMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['billingMode'] === null) {
            $invalidProperties[] = "'billingMode' can't be null";
        }
            $allowedValues = $this->getBillingModeAllowableValues();
                if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
        }
            if (($this->container['bandwidth'] > 999999)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 999999.";
            }
            if (($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInterflowModeAllowableValues();
                if (!is_null($this->container['interflowMode']) && !in_array($this->container['interflowMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interflowMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['interflowMode']) && (mb_strlen($this->container['interflowMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'interflowMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['interflowMode']) && (mb_strlen($this->container['interflowMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'interflowMode', the character length must be bigger than or equal to 0.";
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
    * Gets projectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets localAreaId
    *  localAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef
    */
    public function getLocalAreaId()
    {
        return $this->container['localAreaId'];
    }

    /**
    * Sets localAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\LocalAreaIdDef $localAreaId localAreaId
    *
    * @return $this
    */
    public function setLocalAreaId($localAreaId)
    {
        $this->container['localAreaId'] = $localAreaId;
        return $this;
    }

    /**
    * Gets remoteAreaId
    *  remoteAreaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef
    */
    public function getRemoteAreaId()
    {
        return $this->container['remoteAreaId'];
    }

    /**
    * Sets remoteAreaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\RemoteAreaIdDef $remoteAreaId remoteAreaId
    *
    * @return $this
    */
    public function setRemoteAreaId($remoteAreaId)
    {
        $this->container['remoteAreaId'] = $remoteAreaId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  带宽包实例的计费方式。 bandwidth是按带宽计费。
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 带宽包实例的计费方式。 bandwidth是按带宽计费。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets billingMode
    *  带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @return int
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param int $billingMode 带宽包实例在大陆站或国际站的计费方式： - 1：大陆站包周期 - 2：国际站包周期 - 3：大陆站按需计费 - 4：国际站按需计费 - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets bandwidth
    *  带宽包实例中的带宽值。
    *
    * @return int
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int $bandwidth 带宽包实例中的带宽值。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets resourceId
    *  带宽包实例绑定的资源ID。
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
    * @param string|null $resourceId 带宽包实例绑定的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
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
    * @param string|null $resourceType 带宽包实例绑定的资源类型。  cloud_connection: 云连接实例。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets specCode
    *  带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 带宽包实例的规格编码。 bandwidth.aftoela：大陆站+国际站南非-拉美东 bandwidth.aftonla：大陆站+国际站南非-拉美北 bandwidth.aftowla：大陆站+国际站南非-拉美西 bandwidth.aptoaf：国际站亚太-南非 bandwidth.aptoap：国际站亚太-亚太 bandwidth.aptoela：大陆站+国际站亚太-拉美东 bandwidth.aptonla：大陆站+国际站亚太-拉美北 bandwidth.aptowla：大陆站+国际站亚太-拉美西 bandwidth.cmtoaf：国际站中国大陆-南非 bandwidth.cmtoap：国际站中国大陆-亚太 bandwidth.cmtocm：国际站中国大陆-中国大陆 bandwidth.cmtoela：大陆站+国际站中国大陆-拉美东 bandwidth.cmtonla：大陆站+国际站中国大陆-拉美北 bandwidth.cmtowla：大陆站+国际站中国大陆-拉美西 bandwidth.elatoela：大陆站+国际站拉美东-拉美东 bandwidth.elatonla：大陆站+国际站拉美东-拉美北 bandwidth.wlatoela：大陆站+国际站拉美西-拉美东 bandwidth.wlatonla：大陆站+国际站拉美西-拉美北 bandwidth.wlatowla：大陆站+国际站拉美西-拉美西
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets interflowMode
    *  互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @return string|null
    */
    public function getInterflowMode()
    {
        return $this->container['interflowMode'];
    }

    /**
    * Sets interflowMode
    *
    * @param string|null $interflowMode 互通类型: - Area: 大区互通 - Region: 城域互通
    *
    * @return $this
    */
    public function setInterflowMode($interflowMode)
    {
        $this->container['interflowMode'] = $interflowMode;
        return $this;
    }

    /**
    * Gets prepaidOptions
    *  prepaidOptions
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CreatePrepaidOptions|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CreatePrepaidOptions|null $prepaidOptions prepaidOptions
    *
    * @return $this
    */
    public function setPrepaidOptions($prepaidOptions)
    {
        $this->container['prepaidOptions'] = $prepaidOptions;
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

