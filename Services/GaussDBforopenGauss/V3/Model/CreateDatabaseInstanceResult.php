<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatabaseInstanceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatabaseInstanceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * status  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    * datastore  datastore
    * ha  ha
    * replicaNum  实例副本数。
    * backupStrategy  backupStrategy
    * port  数据库端口信息，与请求参数相同。
    * enterpriseProjectId  项目标签。
    * flavorRef  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    * volume  volume
    * region  区域ID。
    * availabilityZone  可用区ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  实例所属的安全组。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreResult',
            'ha' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussHaResult',
            'replicaNum' => 'int',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForResponse',
            'port' => 'string',
            'enterpriseProjectId' => 'string',
            'flavorRef' => 'string',
            'volume' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussVolumeResult',
            'region' => 'string',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * status  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    * datastore  datastore
    * ha  ha
    * replicaNum  实例副本数。
    * backupStrategy  backupStrategy
    * port  数据库端口信息，与请求参数相同。
    * enterpriseProjectId  项目标签。
    * flavorRef  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    * volume  volume
    * region  区域ID。
    * availabilityZone  可用区ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  实例所属的安全组。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'datastore' => null,
        'ha' => null,
        'replicaNum' => 'int32',
        'backupStrategy' => null,
        'port' => null,
        'enterpriseProjectId' => null,
        'flavorRef' => null,
        'volume' => null,
        'region' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'chargeInfo' => null
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
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * status  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    * datastore  datastore
    * ha  ha
    * replicaNum  实例副本数。
    * backupStrategy  backupStrategy
    * port  数据库端口信息，与请求参数相同。
    * enterpriseProjectId  项目标签。
    * flavorRef  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    * volume  volume
    * region  区域ID。
    * availabilityZone  可用区ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  实例所属的安全组。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'datastore' => 'datastore',
            'ha' => 'ha',
            'replicaNum' => 'replica_num',
            'backupStrategy' => 'backup_strategy',
            'port' => 'port',
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavorRef' => 'flavor_ref',
            'volume' => 'volume',
            'region' => 'region',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * status  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    * datastore  datastore
    * ha  ha
    * replicaNum  实例副本数。
    * backupStrategy  backupStrategy
    * port  数据库端口信息，与请求参数相同。
    * enterpriseProjectId  项目标签。
    * flavorRef  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    * volume  volume
    * region  区域ID。
    * availabilityZone  可用区ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  实例所属的安全组。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'datastore' => 'setDatastore',
            'ha' => 'setHa',
            'replicaNum' => 'setReplicaNum',
            'backupStrategy' => 'setBackupStrategy',
            'port' => 'setPort',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavorRef' => 'setFlavorRef',
            'volume' => 'setVolume',
            'region' => 'setRegion',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * status  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    * datastore  datastore
    * ha  ha
    * replicaNum  实例副本数。
    * backupStrategy  backupStrategy
    * port  数据库端口信息，与请求参数相同。
    * enterpriseProjectId  项目标签。
    * flavorRef  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    * volume  volume
    * region  区域ID。
    * availabilityZone  可用区ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  实例所属的安全组。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'datastore' => 'getDatastore',
            'ha' => 'getHa',
            'replicaNum' => 'getReplicaNum',
            'backupStrategy' => 'getBackupStrategy',
            'port' => 'getPort',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavorRef' => 'getFlavorRef',
            'volume' => 'getVolume',
            'region' => 'getRegion',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'chargeInfo' => 'getChargeInfo'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['replicaNum'] = isset($data['replicaNum']) ? $data['replicaNum'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['backupStrategy'] === null) {
            $invalidProperties[] = "'backupStrategy' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['chargeInfo'] === null) {
            $invalidProperties[] = "'chargeInfo' can't be null";
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
    *  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
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
    * @param string $name 实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 实例状态。如BUILD，表示创建中。  仅创建按需实例时会返回该参数。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreResult
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatastoreResult $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussHaResult|null
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussHaResult|null $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets replicaNum
    *  实例副本数。
    *
    * @return int|null
    */
    public function getReplicaNum()
    {
        return $this->container['replicaNum'];
    }

    /**
    * Sets replicaNum
    *
    * @param int|null $replicaNum 实例副本数。
    *
    * @return $this
    */
    public function setReplicaNum($replicaNum)
    {
        $this->container['replicaNum'] = $replicaNum;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForResponse
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForResponse $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口信息，与请求参数相同。
    *
    * @return string
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string $port 数据库端口信息，与请求参数相同。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  项目标签。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 项目标签。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码，取值范围：非空。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB的“规格编码”列内容获取。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussVolumeResult
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussVolumeResult $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets region
    *  区域ID。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域ID。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区ID。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区ID。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
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
    *  子网的网络ID信息。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网的网络ID信息。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  实例所属的安全组。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 实例所属的安全组。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoResponse
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoResponse $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
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

