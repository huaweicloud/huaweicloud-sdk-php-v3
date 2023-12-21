<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  集群名字
    * datastore  datastore
    * availabilityZone  可用区
    * nics  集群所在的网络信息以及安全组信息。
    * clusterInfo  clusterInfo
    * enterpriseProjectId  企业项目ID
    * vpcId  虚拟私有云ID
    * dbuser  type为doris时，必填项，管理账号：admin
    * dbuserpwd  type为doris时，必填项，管理账号密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'datastore' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Datastore',
            'availabilityZone' => 'string',
            'nics' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Nic[]',
            'clusterInfo' => '\HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterReqBodyClusterInfo',
            'enterpriseProjectId' => 'string',
            'vpcId' => 'string',
            'dbuser' => 'string',
            'dbuserpwd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  集群名字
    * datastore  datastore
    * availabilityZone  可用区
    * nics  集群所在的网络信息以及安全组信息。
    * clusterInfo  clusterInfo
    * enterpriseProjectId  企业项目ID
    * vpcId  虚拟私有云ID
    * dbuser  type为doris时，必填项，管理账号：admin
    * dbuserpwd  type为doris时，必填项，管理账号密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'datastore' => null,
        'availabilityZone' => null,
        'nics' => null,
        'clusterInfo' => null,
        'enterpriseProjectId' => null,
        'vpcId' => null,
        'dbuser' => null,
        'dbuserpwd' => null
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
    * clusterName  集群名字
    * datastore  datastore
    * availabilityZone  可用区
    * nics  集群所在的网络信息以及安全组信息。
    * clusterInfo  clusterInfo
    * enterpriseProjectId  企业项目ID
    * vpcId  虚拟私有云ID
    * dbuser  type为doris时，必填项，管理账号：admin
    * dbuserpwd  type为doris时，必填项，管理账号密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'datastore' => 'datastore',
            'availabilityZone' => 'availability_zone',
            'nics' => 'nics',
            'clusterInfo' => 'cluster_info',
            'enterpriseProjectId' => 'enterprise_project_id',
            'vpcId' => 'vpc_id',
            'dbuser' => 'dbuser',
            'dbuserpwd' => 'dbuserpwd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  集群名字
    * datastore  datastore
    * availabilityZone  可用区
    * nics  集群所在的网络信息以及安全组信息。
    * clusterInfo  clusterInfo
    * enterpriseProjectId  企业项目ID
    * vpcId  虚拟私有云ID
    * dbuser  type为doris时，必填项，管理账号：admin
    * dbuserpwd  type为doris时，必填项，管理账号密码
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'datastore' => 'setDatastore',
            'availabilityZone' => 'setAvailabilityZone',
            'nics' => 'setNics',
            'clusterInfo' => 'setClusterInfo',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'vpcId' => 'setVpcId',
            'dbuser' => 'setDbuser',
            'dbuserpwd' => 'setDbuserpwd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  集群名字
    * datastore  datastore
    * availabilityZone  可用区
    * nics  集群所在的网络信息以及安全组信息。
    * clusterInfo  clusterInfo
    * enterpriseProjectId  企业项目ID
    * vpcId  虚拟私有云ID
    * dbuser  type为doris时，必填项，管理账号：admin
    * dbuserpwd  type为doris时，必填项，管理账号密码
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'datastore' => 'getDatastore',
            'availabilityZone' => 'getAvailabilityZone',
            'nics' => 'getNics',
            'clusterInfo' => 'getClusterInfo',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'vpcId' => 'getVpcId',
            'dbuser' => 'getDbuser',
            'dbuserpwd' => 'getDbuserpwd'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['dbuser'] = isset($data['dbuser']) ? $data['dbuser'] : null;
        $this->container['dbuserpwd'] = isset($data['dbuserpwd']) ? $data['dbuserpwd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['clusterInfo'] === null) {
            $invalidProperties[] = "'clusterInfo' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets clusterName
    *  集群名字
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名字
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区
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
    * @param string $availabilityZone 可用区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets nics
    *  集群所在的网络信息以及安全组信息。
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Nic[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Nic[] $nics 集群所在的网络信息以及安全组信息。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets clusterInfo
    *  clusterInfo
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterReqBodyClusterInfo
    */
    public function getClusterInfo()
    {
        return $this->container['clusterInfo'];
    }

    /**
    * Sets clusterInfo
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\CreateClusterReqBodyClusterInfo $clusterInfo clusterInfo
    *
    * @return $this
    */
    public function setClusterInfo($clusterInfo)
    {
        $this->container['clusterInfo'] = $clusterInfo;
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
    * Gets vpcId
    *  虚拟私有云ID
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
    * @param string $vpcId 虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets dbuser
    *  type为doris时，必填项，管理账号：admin
    *
    * @return string|null
    */
    public function getDbuser()
    {
        return $this->container['dbuser'];
    }

    /**
    * Sets dbuser
    *
    * @param string|null $dbuser type为doris时，必填项，管理账号：admin
    *
    * @return $this
    */
    public function setDbuser($dbuser)
    {
        $this->container['dbuser'] = $dbuser;
        return $this;
    }

    /**
    * Gets dbuserpwd
    *  type为doris时，必填项，管理账号密码
    *
    * @return string|null
    */
    public function getDbuserpwd()
    {
        return $this->container['dbuserpwd'];
    }

    /**
    * Sets dbuserpwd
    *
    * @param string|null $dbuserpwd type为doris时，必填项，管理账号密码
    *
    * @return $this
    */
    public function setDbuserpwd($dbuserpwd)
    {
        $this->container['dbuserpwd'] = $dbuserpwd;
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

