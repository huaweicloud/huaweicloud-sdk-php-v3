<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateChInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateChInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * azCode  可用区。
    * azMode  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    * name  实例名。
    * engine  engine
    * vpcId  虚拟私有云ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * dbUser  数据库用户。
    * port  数据库端口。取值范围：0~65535。
    * haMode  部署模式。 取值范围： - Single：单机 - Ha：主备
    * payInfo  payInfo
    * sslOption  SSL开关。
    * status  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    * region  实例所在区。
    * tagsInfo  tagsInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'azCode' => 'string',
            'azMode' => 'string',
            'name' => 'string',
            'engine' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'dbUser' => 'string',
            'port' => 'int',
            'haMode' => 'string',
            'payInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoPayInfo',
            'sslOption' => 'bool',
            'status' => 'string',
            'region' => 'string',
            'tagsInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoTagsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * azCode  可用区。
    * azMode  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    * name  实例名。
    * engine  engine
    * vpcId  虚拟私有云ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * dbUser  数据库用户。
    * port  数据库端口。取值范围：0~65535。
    * haMode  部署模式。 取值范围： - Single：单机 - Ha：主备
    * payInfo  payInfo
    * sslOption  SSL开关。
    * status  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    * region  实例所在区。
    * tagsInfo  tagsInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'azCode' => null,
        'azMode' => null,
        'name' => null,
        'engine' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'dbUser' => null,
        'port' => 'int32',
        'haMode' => null,
        'payInfo' => null,
        'sslOption' => null,
        'status' => null,
        'region' => null,
        'tagsInfo' => null
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
    * azCode  可用区。
    * azMode  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    * name  实例名。
    * engine  engine
    * vpcId  虚拟私有云ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * dbUser  数据库用户。
    * port  数据库端口。取值范围：0~65535。
    * haMode  部署模式。 取值范围： - Single：单机 - Ha：主备
    * payInfo  payInfo
    * sslOption  SSL开关。
    * status  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    * region  实例所在区。
    * tagsInfo  tagsInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'azCode' => 'az_code',
            'azMode' => 'az_mode',
            'name' => 'name',
            'engine' => 'engine',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'dbUser' => 'db_user',
            'port' => 'port',
            'haMode' => 'ha_mode',
            'payInfo' => 'pay_info',
            'sslOption' => 'ssl_option',
            'status' => 'status',
            'region' => 'region',
            'tagsInfo' => 'tags_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * azCode  可用区。
    * azMode  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    * name  实例名。
    * engine  engine
    * vpcId  虚拟私有云ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * dbUser  数据库用户。
    * port  数据库端口。取值范围：0~65535。
    * haMode  部署模式。 取值范围： - Single：单机 - Ha：主备
    * payInfo  payInfo
    * sslOption  SSL开关。
    * status  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    * region  实例所在区。
    * tagsInfo  tagsInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'azCode' => 'setAzCode',
            'azMode' => 'setAzMode',
            'name' => 'setName',
            'engine' => 'setEngine',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'dbUser' => 'setDbUser',
            'port' => 'setPort',
            'haMode' => 'setHaMode',
            'payInfo' => 'setPayInfo',
            'sslOption' => 'setSslOption',
            'status' => 'setStatus',
            'region' => 'setRegion',
            'tagsInfo' => 'setTagsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * azCode  可用区。
    * azMode  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    * name  实例名。
    * engine  engine
    * vpcId  虚拟私有云ID。
    * securityGroupId  安全组ID。
    * subnetId  子网ID。
    * dbUser  数据库用户。
    * port  数据库端口。取值范围：0~65535。
    * haMode  部署模式。 取值范围： - Single：单机 - Ha：主备
    * payInfo  payInfo
    * sslOption  SSL开关。
    * status  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    * region  实例所在区。
    * tagsInfo  tagsInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'azCode' => 'getAzCode',
            'azMode' => 'getAzMode',
            'name' => 'getName',
            'engine' => 'getEngine',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'dbUser' => 'getDbUser',
            'port' => 'getPort',
            'haMode' => 'getHaMode',
            'payInfo' => 'getPayInfo',
            'sslOption' => 'getSslOption',
            'status' => 'getStatus',
            'region' => 'getRegion',
            'tagsInfo' => 'getTagsInfo'
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
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['azMode'] = isset($data['azMode']) ? $data['azMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['payInfo'] = isset($data['payInfo']) ? $data['payInfo'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['tagsInfo'] = isset($data['tagsInfo']) ? $data['tagsInfo'] : null;
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
        if ($this->container['azCode'] === null) {
            $invalidProperties[] = "'azCode' can't be null";
        }
        if ($this->container['azMode'] === null) {
            $invalidProperties[] = "'azMode' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
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
        if ($this->container['dbUser'] === null) {
            $invalidProperties[] = "'dbUser' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['haMode'] === null) {
            $invalidProperties[] = "'haMode' can't be null";
        }
        if ($this->container['payInfo'] === null) {
            $invalidProperties[] = "'payInfo' can't be null";
        }
        if ($this->container['sslOption'] === null) {
            $invalidProperties[] = "'sslOption' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['tagsInfo'] === null) {
            $invalidProperties[] = "'tagsInfo' can't be null";
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
    * Gets azCode
    *  可用区。
    *
    * @return string
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string $azCode 可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets azMode
    *  可用区模式。 取值范围： - single：单可用区 - double：多可用区
    *
    * @return string
    */
    public function getAzMode()
    {
        return $this->container['azMode'];
    }

    /**
    * Sets azMode
    *
    * @param string $azMode 可用区模式。 取值范围： - single：单可用区 - double：多可用区
    *
    * @return $this
    */
    public function setAzMode($azMode)
    {
        $this->container['azMode'] = $azMode;
        return $this;
    }

    /**
    * Gets name
    *  实例名。
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
    * @param string $name 实例名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engine
    *  engine
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseEngineInfo $engine engine
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
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
    * Gets dbUser
    *  数据库用户。
    *
    * @return string
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string $dbUser 数据库用户。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口。取值范围：0~65535。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 数据库端口。取值范围：0~65535。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets haMode
    *  部署模式。 取值范围： - Single：单机 - Ha：主备
    *
    * @return string
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string $haMode 部署模式。 取值范围： - Single：单机 - Ha：主备
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets payInfo
    *  payInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoPayInfo
    */
    public function getPayInfo()
    {
        return $this->container['payInfo'];
    }

    /**
    * Sets payInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoPayInfo $payInfo payInfo
    *
    * @return $this
    */
    public function setPayInfo($payInfo)
    {
        $this->container['payInfo'] = $payInfo;
        return $this;
    }

    /**
    * Gets sslOption
    *  SSL开关。
    *
    * @return bool
    */
    public function getSslOption()
    {
        return $this->container['sslOption'];
    }

    /**
    * Sets sslOption
    *
    * @param bool $sslOption SSL开关。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
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
    * @param string $status 实例状态。 取值范围： - creating：创建 - normal：正常 - abnormal：异常 - createfailed：创建失败 - deleted：已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets region
    *  实例所在区。
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
    * @param string $region 实例所在区。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets tagsInfo
    *  tagsInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoTagsInfo
    */
    public function getTagsInfo()
    {
        return $this->container['tagsInfo'];
    }

    /**
    * Sets tagsInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\CreateChInstanceInfoTagsInfo $tagsInfo tagsInfo
    *
    * @return $this
    */
    public function setTagsInfo($tagsInfo)
    {
        $this->container['tagsInfo'] = $tagsInfo;
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

