<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComputeFlavors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComputeFlavors';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规格id。
    * typeCode  资源类型编码。
    * code  DDM内部记录的虚机规格类型。
    * iaasCode  iaas记录的虚机规格类型。
    * cpu  cpu核数。
    * mem  内存大小,单位:G。
    * maxConnections  最大连接数。
    * serverType  计算资源服务类型。
    * architecture  计算资源架构类型，目前分X86和ARM两种。
    * azStatus  可用区状态。
    * regionStatus  局点状态。
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * dbType  服务引擎类型。
    * extendFields  扩展字段，目前存储可用区相关信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'typeCode' => 'string',
            'code' => 'string',
            'iaasCode' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'maxConnections' => 'string',
            'serverType' => 'string',
            'architecture' => 'string',
            'azStatus' => 'object',
            'regionStatus' => 'string',
            'groupType' => 'string',
            'dbType' => 'string',
            'extendFields' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规格id。
    * typeCode  资源类型编码。
    * code  DDM内部记录的虚机规格类型。
    * iaasCode  iaas记录的虚机规格类型。
    * cpu  cpu核数。
    * mem  内存大小,单位:G。
    * maxConnections  最大连接数。
    * serverType  计算资源服务类型。
    * architecture  计算资源架构类型，目前分X86和ARM两种。
    * azStatus  可用区状态。
    * regionStatus  局点状态。
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * dbType  服务引擎类型。
    * extendFields  扩展字段，目前存储可用区相关信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'typeCode' => null,
        'code' => null,
        'iaasCode' => null,
        'cpu' => null,
        'mem' => null,
        'maxConnections' => null,
        'serverType' => null,
        'architecture' => null,
        'azStatus' => null,
        'regionStatus' => null,
        'groupType' => null,
        'dbType' => null,
        'extendFields' => null
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
    * id  规格id。
    * typeCode  资源类型编码。
    * code  DDM内部记录的虚机规格类型。
    * iaasCode  iaas记录的虚机规格类型。
    * cpu  cpu核数。
    * mem  内存大小,单位:G。
    * maxConnections  最大连接数。
    * serverType  计算资源服务类型。
    * architecture  计算资源架构类型，目前分X86和ARM两种。
    * azStatus  可用区状态。
    * regionStatus  局点状态。
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * dbType  服务引擎类型。
    * extendFields  扩展字段，目前存储可用区相关信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'typeCode' => 'typeCode',
            'code' => 'code',
            'iaasCode' => 'iaasCode',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'maxConnections' => 'maxConnections',
            'serverType' => 'serverType',
            'architecture' => 'architecture',
            'azStatus' => 'azStatus',
            'regionStatus' => 'regionStatus',
            'groupType' => 'groupType',
            'dbType' => 'dbType',
            'extendFields' => 'extendFields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规格id。
    * typeCode  资源类型编码。
    * code  DDM内部记录的虚机规格类型。
    * iaasCode  iaas记录的虚机规格类型。
    * cpu  cpu核数。
    * mem  内存大小,单位:G。
    * maxConnections  最大连接数。
    * serverType  计算资源服务类型。
    * architecture  计算资源架构类型，目前分X86和ARM两种。
    * azStatus  可用区状态。
    * regionStatus  局点状态。
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * dbType  服务引擎类型。
    * extendFields  扩展字段，目前存储可用区相关信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'typeCode' => 'setTypeCode',
            'code' => 'setCode',
            'iaasCode' => 'setIaasCode',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'maxConnections' => 'setMaxConnections',
            'serverType' => 'setServerType',
            'architecture' => 'setArchitecture',
            'azStatus' => 'setAzStatus',
            'regionStatus' => 'setRegionStatus',
            'groupType' => 'setGroupType',
            'dbType' => 'setDbType',
            'extendFields' => 'setExtendFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规格id。
    * typeCode  资源类型编码。
    * code  DDM内部记录的虚机规格类型。
    * iaasCode  iaas记录的虚机规格类型。
    * cpu  cpu核数。
    * mem  内存大小,单位:G。
    * maxConnections  最大连接数。
    * serverType  计算资源服务类型。
    * architecture  计算资源架构类型，目前分X86和ARM两种。
    * azStatus  可用区状态。
    * regionStatus  局点状态。
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * dbType  服务引擎类型。
    * extendFields  扩展字段，目前存储可用区相关信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'typeCode' => 'getTypeCode',
            'code' => 'getCode',
            'iaasCode' => 'getIaasCode',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'maxConnections' => 'getMaxConnections',
            'serverType' => 'getServerType',
            'architecture' => 'getArchitecture',
            'azStatus' => 'getAzStatus',
            'regionStatus' => 'getRegionStatus',
            'groupType' => 'getGroupType',
            'dbType' => 'getDbType',
            'extendFields' => 'getExtendFields'
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
        $this->container['typeCode'] = isset($data['typeCode']) ? $data['typeCode'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['iaasCode'] = isset($data['iaasCode']) ? $data['iaasCode'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['maxConnections'] = isset($data['maxConnections']) ? $data['maxConnections'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['regionStatus'] = isset($data['regionStatus']) ? $data['regionStatus'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['extendFields'] = isset($data['extendFields']) ? $data['extendFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  规格id。
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
    * @param string|null $id 规格id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets typeCode
    *  资源类型编码。
    *
    * @return string|null
    */
    public function getTypeCode()
    {
        return $this->container['typeCode'];
    }

    /**
    * Sets typeCode
    *
    * @param string|null $typeCode 资源类型编码。
    *
    * @return $this
    */
    public function setTypeCode($typeCode)
    {
        $this->container['typeCode'] = $typeCode;
        return $this;
    }

    /**
    * Gets code
    *  DDM内部记录的虚机规格类型。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code DDM内部记录的虚机规格类型。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets iaasCode
    *  iaas记录的虚机规格类型。
    *
    * @return string|null
    */
    public function getIaasCode()
    {
        return $this->container['iaasCode'];
    }

    /**
    * Sets iaasCode
    *
    * @param string|null $iaasCode iaas记录的虚机规格类型。
    *
    * @return $this
    */
    public function setIaasCode($iaasCode)
    {
        $this->container['iaasCode'] = $iaasCode;
        return $this;
    }

    /**
    * Gets cpu
    *  cpu核数。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu cpu核数。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  内存大小,单位:G。
    *
    * @return string|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string|null $mem 内存大小,单位:G。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets maxConnections
    *  最大连接数。
    *
    * @return string|null
    */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
    * Sets maxConnections
    *
    * @param string|null $maxConnections 最大连接数。
    *
    * @return $this
    */
    public function setMaxConnections($maxConnections)
    {
        $this->container['maxConnections'] = $maxConnections;
        return $this;
    }

    /**
    * Gets serverType
    *  计算资源服务类型。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 计算资源服务类型。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets architecture
    *  计算资源架构类型，目前分X86和ARM两种。
    *
    * @return string|null
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string|null $architecture 计算资源架构类型，目前分X86和ARM两种。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets azStatus
    *  可用区状态。
    *
    * @return object|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param object|null $azStatus 可用区状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets regionStatus
    *  局点状态。
    *
    * @return string|null
    */
    public function getRegionStatus()
    {
        return $this->container['regionStatus'];
    }

    /**
    * Sets regionStatus
    *
    * @param string|null $regionStatus 局点状态。
    *
    * @return $this
    */
    public function setRegionStatus($regionStatus)
    {
        $this->container['regionStatus'] = $regionStatus;
        return $this;
    }

    /**
    * Gets groupType
    *  计算资源架构类型，目前分X86和ARM两种。
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 计算资源架构类型，目前分X86和ARM两种。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets dbType
    *  服务引擎类型。
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 服务引擎类型。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets extendFields
    *  扩展字段，目前存储可用区相关信息。
    *
    * @return object|null
    */
    public function getExtendFields()
    {
        return $this->container['extendFields'];
    }

    /**
    * Sets extendFields
    *
    * @param object|null $extendFields 扩展字段，目前存储可用区相关信息。
    *
    * @return $this
    */
    public function setExtendFields($extendFields)
    {
        $this->container['extendFields'] = $extendFields;
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

