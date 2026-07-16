<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDdmInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDdmInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * availableZones  可用区。
    * nodeNum  节点数量。
    * engineVersion  引擎版本。
    * flavorRef  规格。
    * vpcId  虚拟私有云id。
    * subnetId  子网id。
    * securityGroupId  安全组id。
    * paramGroupId  参数组id。
    * enterpriseProjectId  企业项目id。
    * timeZone  时区。
    * adminUserName  账号。
    * adminUserPassword  密码。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'availableZones' => 'string[]',
            'nodeNum' => 'int',
            'engineVersion' => 'string',
            'flavorRef' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'paramGroupId' => 'string',
            'enterpriseProjectId' => 'string',
            'timeZone' => 'string',
            'adminUserName' => 'string',
            'adminUserPassword' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Ddm\V1\Model\ChargeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * availableZones  可用区。
    * nodeNum  节点数量。
    * engineVersion  引擎版本。
    * flavorRef  规格。
    * vpcId  虚拟私有云id。
    * subnetId  子网id。
    * securityGroupId  安全组id。
    * paramGroupId  参数组id。
    * enterpriseProjectId  企业项目id。
    * timeZone  时区。
    * adminUserName  账号。
    * adminUserPassword  密码。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'availableZones' => null,
        'nodeNum' => null,
        'engineVersion' => null,
        'flavorRef' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'paramGroupId' => null,
        'enterpriseProjectId' => null,
        'timeZone' => null,
        'adminUserName' => null,
        'adminUserPassword' => null,
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
    * name  实例名称。
    * availableZones  可用区。
    * nodeNum  节点数量。
    * engineVersion  引擎版本。
    * flavorRef  规格。
    * vpcId  虚拟私有云id。
    * subnetId  子网id。
    * securityGroupId  安全组id。
    * paramGroupId  参数组id。
    * enterpriseProjectId  企业项目id。
    * timeZone  时区。
    * adminUserName  账号。
    * adminUserPassword  密码。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'availableZones' => 'available_zones',
            'nodeNum' => 'node_num',
            'engineVersion' => 'engine_version',
            'flavorRef' => 'flavor_ref',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'paramGroupId' => 'param_group_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'timeZone' => 'time_zone',
            'adminUserName' => 'admin_user_name',
            'adminUserPassword' => 'admin_user_password',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * availableZones  可用区。
    * nodeNum  节点数量。
    * engineVersion  引擎版本。
    * flavorRef  规格。
    * vpcId  虚拟私有云id。
    * subnetId  子网id。
    * securityGroupId  安全组id。
    * paramGroupId  参数组id。
    * enterpriseProjectId  企业项目id。
    * timeZone  时区。
    * adminUserName  账号。
    * adminUserPassword  密码。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'availableZones' => 'setAvailableZones',
            'nodeNum' => 'setNodeNum',
            'engineVersion' => 'setEngineVersion',
            'flavorRef' => 'setFlavorRef',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'paramGroupId' => 'setParamGroupId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'timeZone' => 'setTimeZone',
            'adminUserName' => 'setAdminUserName',
            'adminUserPassword' => 'setAdminUserPassword',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * availableZones  可用区。
    * nodeNum  节点数量。
    * engineVersion  引擎版本。
    * flavorRef  规格。
    * vpcId  虚拟私有云id。
    * subnetId  子网id。
    * securityGroupId  安全组id。
    * paramGroupId  参数组id。
    * enterpriseProjectId  企业项目id。
    * timeZone  时区。
    * adminUserName  账号。
    * adminUserPassword  密码。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'availableZones' => 'getAvailableZones',
            'nodeNum' => 'getNodeNum',
            'engineVersion' => 'getEngineVersion',
            'flavorRef' => 'getFlavorRef',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'paramGroupId' => 'getParamGroupId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'timeZone' => 'getTimeZone',
            'adminUserName' => 'getAdminUserName',
            'adminUserPassword' => 'getAdminUserPassword',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['paramGroupId'] = isset($data['paramGroupId']) ? $data['paramGroupId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['adminUserName'] = isset($data['adminUserName']) ? $data['adminUserName'] : null;
        $this->container['adminUserPassword'] = isset($data['adminUserPassword']) ? $data['adminUserPassword'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
            if (($this->container['nodeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['nodeNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 1.";
            }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
            if ((mb_strlen($this->container['engineVersion']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['engineVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
            if ((mb_strlen($this->container['flavorRef']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['flavorRef']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['subnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['paramGroupId']) && (mb_strlen($this->container['paramGroupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'paramGroupId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['paramGroupId']) && (mb_strlen($this->container['paramGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) < 1)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['adminUserPassword']) && (mb_strlen($this->container['adminUserPassword']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminUserPassword', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminUserPassword']) && (mb_strlen($this->container['adminUserPassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'adminUserPassword', the character length must be bigger than or equal to 1.";
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
    * Gets availableZones
    *  可用区。
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
    * @param string[] $availableZones 可用区。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数量。
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
    * @param int $nodeNum 节点数量。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格。
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
    * @param string $flavorRef 规格。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云id。
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
    * @param string $vpcId 虚拟私有云id。
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
    *  子网id。
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
    * @param string $subnetId 子网id。
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
    *  安全组id。
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
    * @param string $securityGroupId 安全组id。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets paramGroupId
    *  参数组id。
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
    * @param string|null $paramGroupId 参数组id。
    *
    * @return $this
    */
    public function setParamGroupId($paramGroupId)
    {
        $this->container['paramGroupId'] = $paramGroupId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。
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
    * @param string|null $enterpriseProjectId 企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。
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
    * @param string|null $timeZone 时区。
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
    *  账号。
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
    * @param string|null $adminUserName 账号。
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
    *  密码。
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
    * @param string|null $adminUserPassword 密码。
    *
    * @return $this
    */
    public function setAdminUserPassword($adminUserPassword)
    {
        $this->container['adminUserPassword'] = $adminUserPassword;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\ChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\ChargeInfo|null $chargeInfo chargeInfo
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

