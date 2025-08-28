<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    * flavorId  规格ID。
    * nodeNum  节点个数。
    * engineId  引擎ID。
    * enterpriseProjectId  企业项目ID。
    * availableZones  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    * vpcId  虚拟私有云的ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * paramGroupId  参数组ID.
    * timeZone  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    * adminUserPassword  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'flavorId' => 'string',
            'nodeNum' => 'int',
            'engineId' => 'string',
            'enterpriseProjectId' => 'string',
            'availableZones' => 'string[]',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'paramGroupId' => 'string',
            'timeZone' => 'string',
            'adminUserName' => 'string',
            'adminUserPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    * flavorId  规格ID。
    * nodeNum  节点个数。
    * engineId  引擎ID。
    * enterpriseProjectId  企业项目ID。
    * availableZones  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    * vpcId  虚拟私有云的ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * paramGroupId  参数组ID.
    * timeZone  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    * adminUserPassword  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'flavorId' => null,
        'nodeNum' => null,
        'engineId' => null,
        'enterpriseProjectId' => null,
        'availableZones' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'paramGroupId' => null,
        'timeZone' => null,
        'adminUserName' => null,
        'adminUserPassword' => null
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
    * name  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    * flavorId  规格ID。
    * nodeNum  节点个数。
    * engineId  引擎ID。
    * enterpriseProjectId  企业项目ID。
    * availableZones  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    * vpcId  虚拟私有云的ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * paramGroupId  参数组ID.
    * timeZone  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    * adminUserPassword  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'flavorId' => 'flavor_id',
            'nodeNum' => 'node_num',
            'engineId' => 'engine_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'availableZones' => 'available_zones',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'paramGroupId' => 'param_group_id',
            'timeZone' => 'time_zone',
            'adminUserName' => 'admin_user_name',
            'adminUserPassword' => 'admin_user_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    * flavorId  规格ID。
    * nodeNum  节点个数。
    * engineId  引擎ID。
    * enterpriseProjectId  企业项目ID。
    * availableZones  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    * vpcId  虚拟私有云的ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * paramGroupId  参数组ID.
    * timeZone  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    * adminUserPassword  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'flavorId' => 'setFlavorId',
            'nodeNum' => 'setNodeNum',
            'engineId' => 'setEngineId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'availableZones' => 'setAvailableZones',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'paramGroupId' => 'setParamGroupId',
            'timeZone' => 'setTimeZone',
            'adminUserName' => 'setAdminUserName',
            'adminUserPassword' => 'setAdminUserPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    * flavorId  规格ID。
    * nodeNum  节点个数。
    * engineId  引擎ID。
    * enterpriseProjectId  企业项目ID。
    * availableZones  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    * vpcId  虚拟私有云的ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * paramGroupId  参数组ID.
    * timeZone  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    * adminUserPassword  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'flavorId' => 'getFlavorId',
            'nodeNum' => 'getNodeNum',
            'engineId' => 'getEngineId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'availableZones' => 'getAvailableZones',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'paramGroupId' => 'getParamGroupId',
            'timeZone' => 'getTimeZone',
            'adminUserName' => 'getAdminUserName',
            'adminUserPassword' => 'getAdminUserPassword'
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['paramGroupId'] = isset($data['paramGroupId']) ? $data['paramGroupId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['adminUserName'] = isset($data['adminUserName']) ? $data['adminUserName'] : null;
        $this->container['adminUserPassword'] = isset($data['adminUserPassword']) ? $data['adminUserPassword'] : null;
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
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/[A-Za-z0-9-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[A-Za-z0-9-]*$/.";
            }
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
        if ($this->container['engineId'] === null) {
            $invalidProperties[] = "'engineId' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    *  DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
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
    * @param string $name DDM实例名称，命名要求如下。 - 长度为4-64个字符。 - 必须以字母开头。 - 可以包含字母、数字、中划线，不能包含其它特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets flavorId
    *  规格ID。
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 规格ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点个数。
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum 节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets engineId
    *  引擎ID。
    *
    * @return string
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string $engineId 引擎ID。
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @return string[]
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[] $availableZones 可用区code。取值非空，请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云的ID。
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
    * @param string $vpcId 虚拟私有云的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
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
    * @param string $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
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
    * @param string $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets paramGroupId
    *  参数组ID.
    *
    * @return string|null
    */
    public function getParamGroupId()
    {
        return $this->container['paramGroupId'];
    }

    /**
    * Sets paramGroupId
    *
    * @param string|null $paramGroupId 参数组ID.
    *
    * @return $this
    */
    public function setParamGroupId($paramGroupId)
    {
        $this->container['paramGroupId'] = $paramGroupId;
        return $this;
    }

    /**
    * Gets timeZone
    *  UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone UTC时区。默认为UTC。取值范围：\"UTC\",\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\", \"UTC-08:00\", \"UTC-07:00\", \"UTC-06:00\", \"UTC-05:00\", \"UTC-04:00\", \"UTC-03:00\", \"UTC-02:00\", \"UTC-01:00\", \"UTC+01:00\", \"UTC+02:00\", \"UTC+03:00\", \"UTC+04:00\", \"UTC+05:00\", \"UTC+06:00\", \"UTC+07:00\", \"UTC+08:00\", \"UTC+09:00\", \"UTC+10:00\", \"UTC+11:00\", \"UTC+12:00\"
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets adminUserName
    *  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    *
    * @return string|null
    */
    public function getAdminUserName()
    {
        return $this->container['adminUserName'];
    }

    /**
    * Sets adminUserName
    *
    * @param string|null $adminUserName 管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
    *
    * @return $this
    */
    public function setAdminUserName($adminUserName)
    {
        $this->container['adminUserName'] = $adminUserName;
        return $this;
    }

    /**
    * Gets adminUserPassword
    *  管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return string|null
    */
    public function getAdminUserPassword()
    {
        return $this->container['adminUserPassword'];
    }

    /**
    * Sets adminUserPassword
    *
    * @param string|null $adminUserPassword 管理员账号密码。 - 长度为8~32位。 - 必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return $this
    */
    public function setAdminUserPassword($adminUserPassword)
    {
        $this->container['adminUserPassword'] = $adminUserPassword;
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

