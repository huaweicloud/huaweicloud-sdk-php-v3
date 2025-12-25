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
    * primaryClusterId  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyAzCode  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primarySpecId  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primaryClusterDnNum  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * datastoreType  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
    * datastoreVersion  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryClusterId' => 'string',
            'standbyAzCode' => 'string',
            'primarySpecId' => 'string',
            'primaryClusterDnNum' => 'string',
            'standbyRegion' => 'string',
            'standbyProjectId' => 'string',
            'drType' => 'string',
            'datastoreType' => 'string',
            'datastoreVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryClusterId  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyAzCode  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primarySpecId  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primaryClusterDnNum  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * datastoreType  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
    * datastoreVersion  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryClusterId' => null,
        'standbyAzCode' => null,
        'primarySpecId' => null,
        'primaryClusterDnNum' => null,
        'standbyRegion' => null,
        'standbyProjectId' => null,
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
    * primaryClusterId  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyAzCode  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primarySpecId  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primaryClusterDnNum  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * datastoreType  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
    * datastoreVersion  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryClusterId' => 'primary_cluster_id',
            'standbyAzCode' => 'standby_az_code',
            'primarySpecId' => 'primary_spec_id',
            'primaryClusterDnNum' => 'primary_cluster_dn_num',
            'standbyRegion' => 'standby_region',
            'standbyProjectId' => 'standby_project_id',
            'drType' => 'dr_type',
            'datastoreType' => 'datastore_type',
            'datastoreVersion' => 'datastore_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryClusterId  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyAzCode  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primarySpecId  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primaryClusterDnNum  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * datastoreType  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
    * datastoreVersion  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryClusterId' => 'setPrimaryClusterId',
            'standbyAzCode' => 'setStandbyAzCode',
            'primarySpecId' => 'setPrimarySpecId',
            'primaryClusterDnNum' => 'setPrimaryClusterDnNum',
            'standbyRegion' => 'setStandbyRegion',
            'standbyProjectId' => 'setStandbyProjectId',
            'drType' => 'setDrType',
            'datastoreType' => 'setDatastoreType',
            'datastoreVersion' => 'setDatastoreVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryClusterId  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyAzCode  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primarySpecId  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * primaryClusterDnNum  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyRegion  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * standbyProjectId  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * drType  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
    * datastoreType  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
    * datastoreVersion  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryClusterId' => 'getPrimaryClusterId',
            'standbyAzCode' => 'getStandbyAzCode',
            'primarySpecId' => 'getPrimarySpecId',
            'primaryClusterDnNum' => 'getPrimaryClusterDnNum',
            'standbyRegion' => 'getStandbyRegion',
            'standbyProjectId' => 'getStandbyProjectId',
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
        $this->container['standbyAzCode'] = isset($data['standbyAzCode']) ? $data['standbyAzCode'] : null;
        $this->container['primarySpecId'] = isset($data['primarySpecId']) ? $data['primarySpecId'] : null;
        $this->container['primaryClusterDnNum'] = isset($data['primaryClusterDnNum']) ? $data['primaryClusterDnNum'] : null;
        $this->container['standbyRegion'] = isset($data['standbyRegion']) ? $data['standbyRegion'] : null;
        $this->container['standbyProjectId'] = isset($data['standbyProjectId']) ? $data['standbyProjectId'] : null;
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
        if ($this->container['primaryClusterId'] === null) {
            $invalidProperties[] = "'primaryClusterId' can't be null";
        }
        if ($this->container['standbyAzCode'] === null) {
            $invalidProperties[] = "'standbyAzCode' can't be null";
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
    * Gets primaryClusterId
    *  **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getPrimaryClusterId()
    {
        return $this->container['primaryClusterId'];
    }

    /**
    * Sets primaryClusterId
    *
    * @param string $primaryClusterId **参数解释**： 主集群ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPrimaryClusterId($primaryClusterId)
    {
        $this->container['primaryClusterId'] = $primaryClusterId;
        return $this;
    }

    /**
    * Gets standbyAzCode
    *  **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getStandbyAzCode()
    {
        return $this->container['standbyAzCode'];
    }

    /**
    * Sets standbyAzCode
    *
    * @param string $standbyAzCode **参数解释**： 备集群所在AZ。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyAzCode($standbyAzCode)
    {
        $this->container['standbyAzCode'] = $standbyAzCode;
        return $this;
    }

    /**
    * Gets primarySpecId
    *  **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $primarySpecId **参数解释**： 主集群规格ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $primaryClusterDnNum **参数解释**： 主集群DN数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $standbyRegion **参数解释**： 备集群所在局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $standbyProjectId **参数解释**： 备集群项目ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStandbyProjectId($standbyProjectId)
    {
        $this->container['standbyProjectId'] = $standbyProjectId;
        return $this;
    }

    /**
    * Gets drType
    *  **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
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
    * @param string|null $drType **参数解释**： 容灾类型。 **约束限制**： 不涉及。 **取值范围**： - az，跨az容灾。 - region，跨region容灾。 **默认取值**： 不涉及。
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
    *  **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
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
    * @param string|null $datastoreType **参数解释**： 数仓类型。 **约束限制**： 不涉及。 **取值范围**： - dws，dws存算一体。 - dws3.0，dws存算分离。 - hybrid，dws实时数仓。 **默认取值**： 不涉及。
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
    *  **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $datastoreVersion **参数解释**： 数仓版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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

