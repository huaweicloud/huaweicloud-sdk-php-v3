<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeType  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    * vpcId  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    * port  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    * name  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    * userName  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    * userPwd  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    * publicIp  publicIp
    * numberOfCn  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeType' => 'string',
            'numberOfNode' => 'int',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'vpcId' => 'string',
            'availabilityZone' => 'string',
            'port' => 'int',
            'name' => 'string',
            'userName' => 'string',
            'userPwd' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicIp',
            'numberOfCn' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dws\V2\Model\Tags'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeType  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    * vpcId  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    * port  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    * name  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    * userName  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    * userPwd  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    * publicIp  publicIp
    * numberOfCn  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * tags  tags
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeType' => null,
        'numberOfNode' => 'int32',
        'subnetId' => null,
        'securityGroupId' => null,
        'vpcId' => null,
        'availabilityZone' => null,
        'port' => 'int32',
        'name' => null,
        'userName' => null,
        'userPwd' => null,
        'publicIp' => null,
        'numberOfCn' => 'int32',
        'enterpriseProjectId' => null,
        'tags' => null
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
    * nodeType  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    * vpcId  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    * port  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    * name  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    * userName  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    * userPwd  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    * publicIp  publicIp
    * numberOfCn  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * tags  tags
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeType' => 'node_type',
            'numberOfNode' => 'number_of_node',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'vpcId' => 'vpc_id',
            'availabilityZone' => 'availability_zone',
            'port' => 'port',
            'name' => 'name',
            'userName' => 'user_name',
            'userPwd' => 'user_pwd',
            'publicIp' => 'public_ip',
            'numberOfCn' => 'number_of_cn',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeType  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    * vpcId  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    * port  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    * name  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    * userName  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    * userPwd  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    * publicIp  publicIp
    * numberOfCn  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * tags  tags
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeType' => 'setNodeType',
            'numberOfNode' => 'setNumberOfNode',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'vpcId' => 'setVpcId',
            'availabilityZone' => 'setAvailabilityZone',
            'port' => 'setPort',
            'name' => 'setName',
            'userName' => 'setUserName',
            'userPwd' => 'setUserPwd',
            'publicIp' => 'setPublicIp',
            'numberOfCn' => 'setNumberOfCn',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeType  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    * vpcId  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    * port  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    * name  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    * userName  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    * userPwd  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    * publicIp  publicIp
    * numberOfCn  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * tags  tags
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeType' => 'getNodeType',
            'numberOfNode' => 'getNumberOfNode',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'vpcId' => 'getVpcId',
            'availabilityZone' => 'getAvailabilityZone',
            'port' => 'getPort',
            'name' => 'getName',
            'userName' => 'getUserName',
            'userPwd' => 'getUserPwd',
            'publicIp' => 'getPublicIp',
            'numberOfCn' => 'getNumberOfCn',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['numberOfNode'] = isset($data['numberOfNode']) ? $data['numberOfNode'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userPwd'] = isset($data['userPwd']) ? $data['userPwd'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['numberOfCn'] = isset($data['numberOfCn']) ? $data['numberOfCn'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
        if ($this->container['numberOfNode'] === null) {
            $invalidProperties[] = "'numberOfNode' can't be null";
        }
            if (($this->container['numberOfNode'] > 256)) {
                $invalidProperties[] = "invalid value for 'numberOfNode', must be smaller than or equal to 256.";
            }
            if (($this->container['numberOfNode'] < 1)) {
                $invalidProperties[] = "invalid value for 'numberOfNode', must be bigger than or equal to 1.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!is_null($this->container['port']) && ($this->container['port'] > 30000)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 8000)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 8000.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 63)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['userPwd'] === null) {
            $invalidProperties[] = "'userPwd' can't be null";
        }
            if (!is_null($this->container['numberOfCn']) && ($this->container['numberOfCn'] > 20)) {
                $invalidProperties[] = "invalid value for 'numberOfCn', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['numberOfCn']) && ($this->container['numberOfCn'] < 2)) {
                $invalidProperties[] = "invalid value for 'numberOfCn', must be bigger than or equal to 2.";
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
    * Gets nodeType
    *  **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string $nodeType **参数解释**： 节点规格ID，需要通过查询规格接口获取，对应的是接口响应的id字段。 **约束限制**： 不涉及。 **取值范围**： 必须是查询规格信息接口返回的规格ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets numberOfNode
    *  **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getNumberOfNode()
    {
        return $this->container['numberOfNode'];
    }

    /**
    * Sets numberOfNode
    *
    * @param int $numberOfNode **参数解释**： 节点数量。 **约束限制**： 不涉及。 **取值范围**： 集群模式取值范围为3~256，实时数仓（单机模式）取值为1。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNumberOfNode($numberOfNode)
    {
        $this->container['numberOfNode'] = $numberOfNode;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
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
    * @param string $subnetId **参数解释**： 指定子网ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是虚拟私有云ID下的某个子网。 **默认取值**： 不涉及。
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
    *  **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
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
    * @param string $securityGroupId **参数解释**： 指定安全组ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 参数非空时必须是有效的安全组ID。参数为空时将自动创建安全组。 **默认取值**： null
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
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
    * @param string $vpcId **参数解释**： 指定虚拟私有云ID，用于集群网络配置。 **约束限制**： 不涉及。 **取值范围**： 必须是有效的虚拟私有云ID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释**： 配置集群可用区。 **约束限制**： 不涉及。 **取值范围**： 必须是当前局点下状态有效且当前用户可见的可用区编码。 **默认取值**： 查询可用区时第一个可用的可用区编码。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**： 集群数据库端口。 **约束限制**： 不涉及。 **取值范围**： 8000~30000 **默认取值**： 8000
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
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
    * @param string $name **参数解释**： 集群名称。 **约束限制**： 要求唯一性，必须以字母开头并只包含字母、数字、中划线或下划线，长度为4~64个字符。 **取值范围**： 4~64个字符。 **默认取值**： 8000
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName **参数解释**： DWS集群管理员用户名。 **约束限制**： - 只能由小写字母、数字或下划线组成。 - 必须由小写字母或下划线开头。 - 长度为1~63个字符。 - 用户名不能为DWS数据库的关键字。    **取值范围**：   1~63个字符； **默认取值**： dbadmin
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userPwd
    *  **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getUserPwd()
    {
        return $this->container['userPwd'];
    }

    /**
    * Sets userPwd
    *
    * @param string $userPwd **参数解释**： DWS集群管理员密码。 **约束限制**： 不涉及。 **取值范围**： 12~32个字符； 至少包含以下字符的3种：大写字母、小写字母、数字和特殊字符(~!?,.:;_(){}[]/<>@#%^&*+|\\\\=-)； 不能与用户名或倒序的用户名相同； **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUserPwd($userPwd)
    {
        $this->container['userPwd'] = $userPwd;
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
    * Gets numberOfCn
    *  **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    *
    * @return int|null
    */
    public function getNumberOfCn()
    {
        return $this->container['numberOfCn'];
    }

    /**
    * Sets numberOfCn
    *
    * @param int|null $numberOfCn **参数解释**： CN部署量。 **约束限制**： 不涉及。 **取值范围**： 2~集群节点数，最大值为20。 **默认取值**： 默认值为3。
    *
    * @return $this
    */
    public function setNumberOfCn($numberOfCn)
    {
        $this->container['numberOfCn'] = $numberOfCn;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

