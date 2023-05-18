<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailableDisasterClustersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailableDisasterClustersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primaryClusterId  主集群ID
    * primarySpecId  主集群规格ID
    * primaryClusterDnNum  主集群DN数量
    * standbyRegion  备集群所在region
    * standbyProjectId  备集群项目ID
    * standbyAzCode  备集群所在AZ
    * drType  容灾类型
    * datastoreType  数仓类型
    * datastoreVersion  数仓版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryClusterId' => 'string',
            'primarySpecId' => 'string',
            'primaryClusterDnNum' => 'string',
            'standbyRegion' => 'string',
            'standbyProjectId' => 'string',
            'standbyAzCode' => 'string',
            'drType' => 'string',
            'datastoreType' => 'string',
            'datastoreVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryClusterId  主集群ID
    * primarySpecId  主集群规格ID
    * primaryClusterDnNum  主集群DN数量
    * standbyRegion  备集群所在region
    * standbyProjectId  备集群项目ID
    * standbyAzCode  备集群所在AZ
    * drType  容灾类型
    * datastoreType  数仓类型
    * datastoreVersion  数仓版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryClusterId' => null,
        'primarySpecId' => null,
        'primaryClusterDnNum' => null,
        'standbyRegion' => null,
        'standbyProjectId' => null,
        'standbyAzCode' => null,
        'drType' => null,
        'datastoreType' => null,
        'datastoreVersion' => null
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
    * primaryClusterId  主集群ID
    * primarySpecId  主集群规格ID
    * primaryClusterDnNum  主集群DN数量
    * standbyRegion  备集群所在region
    * standbyProjectId  备集群项目ID
    * standbyAzCode  备集群所在AZ
    * drType  容灾类型
    * datastoreType  数仓类型
    * datastoreVersion  数仓版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryClusterId' => 'primary_cluster_id',
            'primarySpecId' => 'primary_spec_id',
            'primaryClusterDnNum' => 'primary_cluster_dn_num',
            'standbyRegion' => 'standby_region',
            'standbyProjectId' => 'standby_project_id',
            'standbyAzCode' => 'standby_az_code',
            'drType' => 'dr_type',
            'datastoreType' => 'datastore_type',
            'datastoreVersion' => 'datastore_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryClusterId  主集群ID
    * primarySpecId  主集群规格ID
    * primaryClusterDnNum  主集群DN数量
    * standbyRegion  备集群所在region
    * standbyProjectId  备集群项目ID
    * standbyAzCode  备集群所在AZ
    * drType  容灾类型
    * datastoreType  数仓类型
    * datastoreVersion  数仓版本
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryClusterId' => 'setPrimaryClusterId',
            'primarySpecId' => 'setPrimarySpecId',
            'primaryClusterDnNum' => 'setPrimaryClusterDnNum',
            'standbyRegion' => 'setStandbyRegion',
            'standbyProjectId' => 'setStandbyProjectId',
            'standbyAzCode' => 'setStandbyAzCode',
            'drType' => 'setDrType',
            'datastoreType' => 'setDatastoreType',
            'datastoreVersion' => 'setDatastoreVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryClusterId  主集群ID
    * primarySpecId  主集群规格ID
    * primaryClusterDnNum  主集群DN数量
    * standbyRegion  备集群所在region
    * standbyProjectId  备集群项目ID
    * standbyAzCode  备集群所在AZ
    * drType  容灾类型
    * datastoreType  数仓类型
    * datastoreVersion  数仓版本
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryClusterId' => 'getPrimaryClusterId',
            'primarySpecId' => 'getPrimarySpecId',
            'primaryClusterDnNum' => 'getPrimaryClusterDnNum',
            'standbyRegion' => 'getStandbyRegion',
            'standbyProjectId' => 'getStandbyProjectId',
            'standbyAzCode' => 'getStandbyAzCode',
            'drType' => 'getDrType',
            'datastoreType' => 'getDatastoreType',
            'datastoreVersion' => 'getDatastoreVersion'
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
        $this->container['primaryClusterId'] = isset($data['primaryClusterId']) ? $data['primaryClusterId'] : null;
        $this->container['primarySpecId'] = isset($data['primarySpecId']) ? $data['primarySpecId'] : null;
        $this->container['primaryClusterDnNum'] = isset($data['primaryClusterDnNum']) ? $data['primaryClusterDnNum'] : null;
        $this->container['standbyRegion'] = isset($data['standbyRegion']) ? $data['standbyRegion'] : null;
        $this->container['standbyProjectId'] = isset($data['standbyProjectId']) ? $data['standbyProjectId'] : null;
        $this->container['standbyAzCode'] = isset($data['standbyAzCode']) ? $data['standbyAzCode'] : null;
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
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
    * Gets primaryClusterId
    *  主集群ID
    *
    * @return string|null
    */
    public function getPrimaryClusterId()
    {
        return $this->container['primaryClusterId'];
    }

    /**
    * Sets primaryClusterId
    *
    * @param string|null $primaryClusterId 主集群ID
    *
    * @return $this
    */
    public function setPrimaryClusterId($primaryClusterId)
    {
        $this->container['primaryClusterId'] = $primaryClusterId;
        return $this;
    }

    /**
    * Gets primarySpecId
    *  主集群规格ID
    *
    * @return string|null
    */
    public function getPrimarySpecId()
    {
        return $this->container['primarySpecId'];
    }

    /**
    * Sets primarySpecId
    *
    * @param string|null $primarySpecId 主集群规格ID
    *
    * @return $this
    */
    public function setPrimarySpecId($primarySpecId)
    {
        $this->container['primarySpecId'] = $primarySpecId;
        return $this;
    }

    /**
    * Gets primaryClusterDnNum
    *  主集群DN数量
    *
    * @return string|null
    */
    public function getPrimaryClusterDnNum()
    {
        return $this->container['primaryClusterDnNum'];
    }

    /**
    * Sets primaryClusterDnNum
    *
    * @param string|null $primaryClusterDnNum 主集群DN数量
    *
    * @return $this
    */
    public function setPrimaryClusterDnNum($primaryClusterDnNum)
    {
        $this->container['primaryClusterDnNum'] = $primaryClusterDnNum;
        return $this;
    }

    /**
    * Gets standbyRegion
    *  备集群所在region
    *
    * @return string|null
    */
    public function getStandbyRegion()
    {
        return $this->container['standbyRegion'];
    }

    /**
    * Sets standbyRegion
    *
    * @param string|null $standbyRegion 备集群所在region
    *
    * @return $this
    */
    public function setStandbyRegion($standbyRegion)
    {
        $this->container['standbyRegion'] = $standbyRegion;
        return $this;
    }

    /**
    * Gets standbyProjectId
    *  备集群项目ID
    *
    * @return string|null
    */
    public function getStandbyProjectId()
    {
        return $this->container['standbyProjectId'];
    }

    /**
    * Sets standbyProjectId
    *
    * @param string|null $standbyProjectId 备集群项目ID
    *
    * @return $this
    */
    public function setStandbyProjectId($standbyProjectId)
    {
        $this->container['standbyProjectId'] = $standbyProjectId;
        return $this;
    }

    /**
    * Gets standbyAzCode
    *  备集群所在AZ
    *
    * @return string|null
    */
    public function getStandbyAzCode()
    {
        return $this->container['standbyAzCode'];
    }

    /**
    * Sets standbyAzCode
    *
    * @param string|null $standbyAzCode 备集群所在AZ
    *
    * @return $this
    */
    public function setStandbyAzCode($standbyAzCode)
    {
        $this->container['standbyAzCode'] = $standbyAzCode;
        return $this;
    }

    /**
    * Gets drType
    *  容灾类型
    *
    * @return string|null
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string|null $drType 容灾类型
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数仓类型
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数仓类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  数仓版本
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion 数仓版本
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
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

