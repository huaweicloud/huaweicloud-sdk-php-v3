<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class V2CreateCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'V2CreateCluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    * flavor  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    * numCn  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    * numNode  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    * dbName  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    * dbPassword  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    * dbPort  集群数据库端口，取值范围为8000~30000，默认值：8000。
    * dssPoolId  专属存储池ID
    * availabilityZones  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    * tags  tags
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * subnetId  指定子网ID，用于集群网络配置。
    * securityGroupId  指定安全组ID，用于集群网络配置。
    * publicIp  publicIp
    * datastoreVersion  集群版本
    * masterKeyId  密钥ID
    * masterKeyName  密钥名称
    * cryptAlgorithm  加密算法
    * volume  volume
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'flavor' => 'string',
            'numCn' => 'int',
            'numNode' => 'int',
            'dbName' => 'string',
            'dbPassword' => 'string',
            'dbPort' => 'int',
            'dssPoolId' => 'string',
            'availabilityZones' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Dws\V2\Model\Tags',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicIp',
            'datastoreVersion' => 'string',
            'masterKeyId' => 'string',
            'masterKeyName' => 'string',
            'cryptAlgorithm' => 'string',
            'volume' => '\HuaweiCloud\SDK\Dws\V2\Model\Volume',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    * flavor  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    * numCn  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    * numNode  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    * dbName  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    * dbPassword  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    * dbPort  集群数据库端口，取值范围为8000~30000，默认值：8000。
    * dssPoolId  专属存储池ID
    * availabilityZones  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    * tags  tags
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * subnetId  指定子网ID，用于集群网络配置。
    * securityGroupId  指定安全组ID，用于集群网络配置。
    * publicIp  publicIp
    * datastoreVersion  集群版本
    * masterKeyId  密钥ID
    * masterKeyName  密钥名称
    * cryptAlgorithm  加密算法
    * volume  volume
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'flavor' => null,
        'numCn' => 'int32',
        'numNode' => 'int32',
        'dbName' => null,
        'dbPassword' => null,
        'dbPort' => 'int32',
        'dssPoolId' => null,
        'availabilityZones' => null,
        'tags' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'publicIp' => null,
        'datastoreVersion' => null,
        'masterKeyId' => null,
        'masterKeyName' => null,
        'cryptAlgorithm' => null,
        'volume' => null,
        'enterpriseProjectId' => null
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
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    * flavor  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    * numCn  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    * numNode  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    * dbName  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    * dbPassword  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    * dbPort  集群数据库端口，取值范围为8000~30000，默认值：8000。
    * dssPoolId  专属存储池ID
    * availabilityZones  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    * tags  tags
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * subnetId  指定子网ID，用于集群网络配置。
    * securityGroupId  指定安全组ID，用于集群网络配置。
    * publicIp  publicIp
    * datastoreVersion  集群版本
    * masterKeyId  密钥ID
    * masterKeyName  密钥名称
    * cryptAlgorithm  加密算法
    * volume  volume
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'flavor' => 'flavor',
            'numCn' => 'num_cn',
            'numNode' => 'num_node',
            'dbName' => 'db_name',
            'dbPassword' => 'db_password',
            'dbPort' => 'db_port',
            'dssPoolId' => 'dss_pool_id',
            'availabilityZones' => 'availability_zones',
            'tags' => 'tags',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'publicIp' => 'public_ip',
            'datastoreVersion' => 'datastore_version',
            'masterKeyId' => 'master_key_id',
            'masterKeyName' => 'master_key_name',
            'cryptAlgorithm' => 'crypt_algorithm',
            'volume' => 'volume',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    * flavor  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    * numCn  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    * numNode  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    * dbName  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    * dbPassword  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    * dbPort  集群数据库端口，取值范围为8000~30000，默认值：8000。
    * dssPoolId  专属存储池ID
    * availabilityZones  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    * tags  tags
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * subnetId  指定子网ID，用于集群网络配置。
    * securityGroupId  指定安全组ID，用于集群网络配置。
    * publicIp  publicIp
    * datastoreVersion  集群版本
    * masterKeyId  密钥ID
    * masterKeyName  密钥名称
    * cryptAlgorithm  加密算法
    * volume  volume
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'flavor' => 'setFlavor',
            'numCn' => 'setNumCn',
            'numNode' => 'setNumNode',
            'dbName' => 'setDbName',
            'dbPassword' => 'setDbPassword',
            'dbPort' => 'setDbPort',
            'dssPoolId' => 'setDssPoolId',
            'availabilityZones' => 'setAvailabilityZones',
            'tags' => 'setTags',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'publicIp' => 'setPublicIp',
            'datastoreVersion' => 'setDatastoreVersion',
            'masterKeyId' => 'setMasterKeyId',
            'masterKeyName' => 'setMasterKeyName',
            'cryptAlgorithm' => 'setCryptAlgorithm',
            'volume' => 'setVolume',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    * flavor  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    * numCn  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    * numNode  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    * dbName  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    * dbPassword  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    * dbPort  集群数据库端口，取值范围为8000~30000，默认值：8000。
    * dssPoolId  专属存储池ID
    * availabilityZones  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    * tags  tags
    * vpcId  指定虚拟私有云ID，用于集群网络配置。
    * subnetId  指定子网ID，用于集群网络配置。
    * securityGroupId  指定安全组ID，用于集群网络配置。
    * publicIp  publicIp
    * datastoreVersion  集群版本
    * masterKeyId  密钥ID
    * masterKeyName  密钥名称
    * cryptAlgorithm  加密算法
    * volume  volume
    * enterpriseProjectId  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'flavor' => 'getFlavor',
            'numCn' => 'getNumCn',
            'numNode' => 'getNumNode',
            'dbName' => 'getDbName',
            'dbPassword' => 'getDbPassword',
            'dbPort' => 'getDbPort',
            'dssPoolId' => 'getDssPoolId',
            'availabilityZones' => 'getAvailabilityZones',
            'tags' => 'getTags',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'publicIp' => 'getPublicIp',
            'datastoreVersion' => 'getDatastoreVersion',
            'masterKeyId' => 'getMasterKeyId',
            'masterKeyName' => 'getMasterKeyName',
            'cryptAlgorithm' => 'getCryptAlgorithm',
            'volume' => 'getVolume',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['numCn'] = isset($data['numCn']) ? $data['numCn'] : null;
        $this->container['numNode'] = isset($data['numNode']) ? $data['numNode'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dssPoolId'] = isset($data['dssPoolId']) ? $data['dssPoolId'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['cryptAlgorithm'] = isset($data['cryptAlgorithm']) ? $data['cryptAlgorithm'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['numCn'] === null) {
            $invalidProperties[] = "'numCn' can't be null";
        }
        if ($this->container['numNode'] === null) {
            $invalidProperties[] = "'numNode' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['dbPassword'] === null) {
            $invalidProperties[] = "'dbPassword' can't be null";
        }
        if ($this->container['dbPort'] === null) {
            $invalidProperties[] = "'dbPort' can't be null";
        }
        if ($this->container['availabilityZones'] === null) {
            $invalidProperties[] = "'availabilityZones' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['datastoreVersion'] === null) {
            $invalidProperties[] = "'datastoreVersion' can't be null";
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
    *  集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
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
    * @param string $name 集群名称，要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets flavor
    *  集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor 集群规格名称。节点类型详情请参见数据仓库类型数据仓库类型。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets numCn
    *  集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    *
    * @return int
    */
    public function getNumCn()
    {
        return $this->container['numCn'];
    }

    /**
    * Sets numCn
    *
    * @param int $numCn 集群CN数量，取值范围为2~集群节点数，最大值为20，默认值为3。
    *
    * @return $this
    */
    public function setNumCn($numCn)
    {
        $this->container['numCn'] = $numCn;
        return $this;
    }

    /**
    * Gets numNode
    *  集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    *
    * @return int
    */
    public function getNumNode()
    {
        return $this->container['numNode'];
    }

    /**
    * Sets numNode
    *
    * @param int $numNode 集群节点数量，集群模式取值范围为3~256，实时数仓（单机模式）取值为1。
    *
    * @return $this
    */
    public function setNumNode($numNode)
    {
        $this->container['numNode'] = $numNode;
        return $this;
    }

    /**
    * Gets dbName
    *  管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 管理员用户名称。用户命名要求如下： 只能由小写字母、数字或下划线组成。 必须由小写字母或下划线开头。 长度为1~63个字符。用户名不能为DWS数据库的关键字。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbPassword
    *  管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    *
    * @return string
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string $dbPassword 管理员用户密码。 8~32个字符 至少包含以下字符中的3种：大写字母、小写字母、数字和特殊字符（~!?,.:;-_(){}[]/<>@#%^&*+|\\=）。不能与用户名或倒序的用户名相同。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets dbPort
    *  集群数据库端口，取值范围为8000~30000，默认值：8000。
    *
    * @return int
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int $dbPort 集群数据库端口，取值范围为8000~30000，默认值：8000。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets dssPoolId
    *  专属存储池ID
    *
    * @return string|null
    */
    public function getDssPoolId()
    {
        return $this->container['dssPoolId'];
    }

    /**
    * Sets dssPoolId
    *
    * @param string|null $dssPoolId 专属存储池ID
    *
    * @return $this
    */
    public function setDssPoolId($dssPoolId)
    {
        $this->container['dssPoolId'] = $dssPoolId;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    *
    * @return string[]
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param string[] $availabilityZones 可用区列表。集群可用区选择详情请参见地区和终端节点地区和终端节点。
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
        return $this;
    }

    /**
    * Gets tags
    *  tags
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Tags|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Tags|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets vpcId
    *  指定虚拟私有云ID，用于集群网络配置。
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
    * @param string $vpcId 指定虚拟私有云ID，用于集群网络配置。
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
    *  指定子网ID，用于集群网络配置。
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
    * @param string $subnetId 指定子网ID，用于集群网络配置。
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
    *  指定安全组ID，用于集群网络配置。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 指定安全组ID，用于集群网络配置。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  集群版本
    *
    * @return string
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string $datastoreVersion 集群版本
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets masterKeyId
    *  密钥ID
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId 密钥ID
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  密钥名称
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName 密钥名称
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets cryptAlgorithm
    *  加密算法
    *
    * @return string|null
    */
    public function getCryptAlgorithm()
    {
        return $this->container['cryptAlgorithm'];
    }

    /**
    * Sets cryptAlgorithm
    *
    * @param string|null $cryptAlgorithm 加密算法
    *
    * @return $this
    */
    public function setCryptAlgorithm($cryptAlgorithm)
    {
        $this->container['cryptAlgorithm'] = $cryptAlgorithm;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Volume|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Volume|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
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
    * @param string|null $enterpriseProjectId 企业项目ID，对集群指定企业项目，如果未指定，则使用默认企业项目“default”的ID，即0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

