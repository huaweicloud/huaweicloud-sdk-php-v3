<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * description  实例描述
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * spec  实例规格
    * version  实例版本
    * chargeMode  实例计费模式
    * accessAddress  访问地址
    * createdAt  实例创建时间
    * updatedAt  实例更新时间
    * expiresAt  实例过期时间
    * status  实例状态
    * obsBucketName  obs桶名称
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * userDefObs  是否为用户指定obs桶
    * productId  产品ID
    * orderId  订单ID，包周期预留字段
    * vpcName  VPC的名称
    * vpcCidr  VPC的可用子网的范围
    * subnetName  VPC的子网名称
    * subnetCidr  子网的网段
    * vpcepServiceId  实例对应的VPC终端节点服务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'spec' => 'string',
            'version' => 'string',
            'chargeMode' => 'string',
            'accessAddress' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'expiresAt' => 'string',
            'status' => 'string',
            'obsBucketName' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'userDefObs' => 'bool',
            'productId' => 'string',
            'orderId' => 'string',
            'vpcName' => 'string',
            'vpcCidr' => 'string',
            'subnetName' => 'string',
            'subnetCidr' => 'string',
            'vpcepServiceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * description  实例描述
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * spec  实例规格
    * version  实例版本
    * chargeMode  实例计费模式
    * accessAddress  访问地址
    * createdAt  实例创建时间
    * updatedAt  实例更新时间
    * expiresAt  实例过期时间
    * status  实例状态
    * obsBucketName  obs桶名称
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * userDefObs  是否为用户指定obs桶
    * productId  产品ID
    * orderId  订单ID，包周期预留字段
    * vpcName  VPC的名称
    * vpcCidr  VPC的可用子网的范围
    * subnetName  VPC的子网名称
    * subnetCidr  子网的网段
    * vpcepServiceId  实例对应的VPC终端节点服务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'vpcId' => null,
        'subnetId' => null,
        'spec' => null,
        'version' => null,
        'chargeMode' => null,
        'accessAddress' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'expiresAt' => null,
        'status' => null,
        'obsBucketName' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'userDefObs' => null,
        'productId' => null,
        'orderId' => null,
        'vpcName' => null,
        'vpcCidr' => null,
        'subnetName' => null,
        'subnetCidr' => null,
        'vpcepServiceId' => null
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
    * id  实例ID
    * name  实例名称
    * description  实例描述
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * spec  实例规格
    * version  实例版本
    * chargeMode  实例计费模式
    * accessAddress  访问地址
    * createdAt  实例创建时间
    * updatedAt  实例更新时间
    * expiresAt  实例过期时间
    * status  实例状态
    * obsBucketName  obs桶名称
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * userDefObs  是否为用户指定obs桶
    * productId  产品ID
    * orderId  订单ID，包周期预留字段
    * vpcName  VPC的名称
    * vpcCidr  VPC的可用子网的范围
    * subnetName  VPC的子网名称
    * subnetCidr  子网的网段
    * vpcepServiceId  实例对应的VPC终端节点服务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'spec' => 'spec',
            'version' => 'version',
            'chargeMode' => 'charge_mode',
            'accessAddress' => 'access_address',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'expiresAt' => 'expires_at',
            'status' => 'status',
            'obsBucketName' => 'obs_bucket_name',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'userDefObs' => 'user_def_obs',
            'productId' => 'product_id',
            'orderId' => 'order_id',
            'vpcName' => 'vpc_name',
            'vpcCidr' => 'vpc_cidr',
            'subnetName' => 'subnet_name',
            'subnetCidr' => 'subnet_cidr',
            'vpcepServiceId' => 'vpcep_service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * name  实例名称
    * description  实例描述
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * spec  实例规格
    * version  实例版本
    * chargeMode  实例计费模式
    * accessAddress  访问地址
    * createdAt  实例创建时间
    * updatedAt  实例更新时间
    * expiresAt  实例过期时间
    * status  实例状态
    * obsBucketName  obs桶名称
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * userDefObs  是否为用户指定obs桶
    * productId  产品ID
    * orderId  订单ID，包周期预留字段
    * vpcName  VPC的名称
    * vpcCidr  VPC的可用子网的范围
    * subnetName  VPC的子网名称
    * subnetCidr  子网的网段
    * vpcepServiceId  实例对应的VPC终端节点服务ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'spec' => 'setSpec',
            'version' => 'setVersion',
            'chargeMode' => 'setChargeMode',
            'accessAddress' => 'setAccessAddress',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'expiresAt' => 'setExpiresAt',
            'status' => 'setStatus',
            'obsBucketName' => 'setObsBucketName',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'userDefObs' => 'setUserDefObs',
            'productId' => 'setProductId',
            'orderId' => 'setOrderId',
            'vpcName' => 'setVpcName',
            'vpcCidr' => 'setVpcCidr',
            'subnetName' => 'setSubnetName',
            'subnetCidr' => 'setSubnetCidr',
            'vpcepServiceId' => 'setVpcepServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * name  实例名称
    * description  实例描述
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * spec  实例规格
    * version  实例版本
    * chargeMode  实例计费模式
    * accessAddress  访问地址
    * createdAt  实例创建时间
    * updatedAt  实例更新时间
    * expiresAt  实例过期时间
    * status  实例状态
    * obsBucketName  obs桶名称
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * userDefObs  是否为用户指定obs桶
    * productId  产品ID
    * orderId  订单ID，包周期预留字段
    * vpcName  VPC的名称
    * vpcCidr  VPC的可用子网的范围
    * subnetName  VPC的子网名称
    * subnetCidr  子网的网段
    * vpcepServiceId  实例对应的VPC终端节点服务ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'spec' => 'getSpec',
            'version' => 'getVersion',
            'chargeMode' => 'getChargeMode',
            'accessAddress' => 'getAccessAddress',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'expiresAt' => 'getExpiresAt',
            'status' => 'getStatus',
            'obsBucketName' => 'getObsBucketName',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'userDefObs' => 'getUserDefObs',
            'productId' => 'getProductId',
            'orderId' => 'getOrderId',
            'vpcName' => 'getVpcName',
            'vpcCidr' => 'getVpcCidr',
            'subnetName' => 'getSubnetName',
            'subnetCidr' => 'getSubnetCidr',
            'vpcepServiceId' => 'getVpcepServiceId'
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
    const CHARGE_MODE_POST_PAID = 'postPaid';
    const STATUS_INITIAL = 'Initial';
    const STATUS_CREATING = 'Creating';
    const STATUS_RUNNING = 'Running';
    const STATUS_UNAVAILABLE = 'Unavailable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_POST_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INITIAL,
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_UNAVAILABLE,
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['accessAddress'] = isset($data['accessAddress']) ? $data['accessAddress'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['userDefObs'] = isset($data['userDefObs']) ? $data['userDefObs'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['vpcCidr'] = isset($data['vpcCidr']) ? $data['vpcCidr'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['vpcepServiceId'] = isset($data['vpcepServiceId']) ? $data['vpcepServiceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  实例ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID
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
    * Gets description
    *  实例描述
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
    * @param string|null $description 实例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcId
    *  用户虚拟私有云ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 用户虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  用户子网的网络ID
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 用户子网的网络ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets spec
    *  实例规格
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 实例规格
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets version
    *  实例版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 实例版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets chargeMode
    *  实例计费模式
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
    * @param string|null $chargeMode 实例计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets accessAddress
    *  访问地址
    *
    * @return string|null
    */
    public function getAccessAddress()
    {
        return $this->container['accessAddress'];
    }

    /**
    * Sets accessAddress
    *
    * @param string|null $accessAddress 访问地址
    *
    * @return $this
    */
    public function setAccessAddress($accessAddress)
    {
        $this->container['accessAddress'] = $accessAddress;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 实例创建时间
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
    *  实例更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 实例更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets expiresAt
    *  实例过期时间
    *
    * @return string|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string|null $expiresAt 实例过期时间
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets status
    *  实例状态
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
    * @param string|null $status 实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  obs桶名称
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName obs桶名称
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
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
    * Gets userDefObs
    *  是否为用户指定obs桶
    *
    * @return bool|null
    */
    public function getUserDefObs()
    {
        return $this->container['userDefObs'];
    }

    /**
    * Sets userDefObs
    *
    * @param bool|null $userDefObs 是否为用户指定obs桶
    *
    * @return $this
    */
    public function setUserDefObs($userDefObs)
    {
        $this->container['userDefObs'] = $userDefObs;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，包周期预留字段
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID，包周期预留字段
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets vpcName
    *  VPC的名称
    *
    * @return string|null
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string|null $vpcName VPC的名称
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets vpcCidr
    *  VPC的可用子网的范围
    *
    * @return string|null
    */
    public function getVpcCidr()
    {
        return $this->container['vpcCidr'];
    }

    /**
    * Sets vpcCidr
    *
    * @param string|null $vpcCidr VPC的可用子网的范围
    *
    * @return $this
    */
    public function setVpcCidr($vpcCidr)
    {
        $this->container['vpcCidr'] = $vpcCidr;
        return $this;
    }

    /**
    * Gets subnetName
    *  VPC的子网名称
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName VPC的子网名称
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  子网的网段
    *
    * @return string|null
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string|null $subnetCidr 子网的网段
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets vpcepServiceId
    *  实例对应的VPC终端节点服务ID
    *
    * @return string|null
    */
    public function getVpcepServiceId()
    {
        return $this->container['vpcepServiceId'];
    }

    /**
    * Sets vpcepServiceId
    *
    * @param string|null $vpcepServiceId 实例对应的VPC终端节点服务ID
    *
    * @return $this
    */
    public function setVpcepServiceId($vpcepServiceId)
    {
        $this->container['vpcepServiceId'] = $vpcepServiceId;
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

