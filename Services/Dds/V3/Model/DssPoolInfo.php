<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DssPoolInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DssPoolInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dssPoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    * dssPoolId  专属存储池ID
    * dssPoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'azName' => 'string',
            'freeCapacityGb' => 'string',
            'dssPoolVolumeType' => 'string',
            'dssPoolId' => 'string',
            'dssPoolStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dssPoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    * dssPoolId  专属存储池ID
    * dssPoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'azName' => null,
        'freeCapacityGb' => null,
        'dssPoolVolumeType' => null,
        'dssPoolId' => null,
        'dssPoolStatus' => null
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
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dssPoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    * dssPoolId  专属存储池ID
    * dssPoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'azName' => 'az_name',
            'freeCapacityGb' => 'free_capacity_gb',
            'dssPoolVolumeType' => 'dss_pool_volume_type',
            'dssPoolId' => 'dss_pool_id',
            'dssPoolStatus' => 'dss_pool_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dssPoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    * dssPoolId  专属存储池ID
    * dssPoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $setters = [
            'azName' => 'setAzName',
            'freeCapacityGb' => 'setFreeCapacityGb',
            'dssPoolVolumeType' => 'setDssPoolVolumeType',
            'dssPoolId' => 'setDssPoolId',
            'dssPoolStatus' => 'setDssPoolStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dssPoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    * dssPoolId  专属存储池ID
    * dssPoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $getters = [
            'azName' => 'getAzName',
            'freeCapacityGb' => 'getFreeCapacityGb',
            'dssPoolVolumeType' => 'getDssPoolVolumeType',
            'dssPoolId' => 'getDssPoolId',
            'dssPoolStatus' => 'getDssPoolStatus'
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
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['freeCapacityGb'] = isset($data['freeCapacityGb']) ? $data['freeCapacityGb'] : null;
        $this->container['dssPoolVolumeType'] = isset($data['dssPoolVolumeType']) ? $data['dssPoolVolumeType'] : null;
        $this->container['dssPoolId'] = isset($data['dssPoolId']) ? $data['dssPoolId'] : null;
        $this->container['dssPoolStatus'] = isset($data['dssPoolStatus']) ? $data['dssPoolStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['azName'] === null) {
            $invalidProperties[] = "'azName' can't be null";
        }
        if ($this->container['freeCapacityGb'] === null) {
            $invalidProperties[] = "'freeCapacityGb' can't be null";
        }
        if ($this->container['dssPoolVolumeType'] === null) {
            $invalidProperties[] = "'dssPoolVolumeType' can't be null";
        }
        if ($this->container['dssPoolId'] === null) {
            $invalidProperties[] = "'dssPoolId' can't be null";
        }
        if ($this->container['dssPoolStatus'] === null) {
            $invalidProperties[] = "'dssPoolStatus' can't be null";
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
    * Gets azName
    *  专属存储池所在az
    *
    * @return string
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string $azName 专属存储池所在az
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets freeCapacityGb
    *  专属存储池免费空间大小，单位GB
    *
    * @return string
    */
    public function getFreeCapacityGb()
    {
        return $this->container['freeCapacityGb'];
    }

    /**
    * Sets freeCapacityGb
    *
    * @param string $freeCapacityGb 专属存储池免费空间大小，单位GB
    *
    * @return $this
    */
    public function setFreeCapacityGb($freeCapacityGb)
    {
        $this->container['freeCapacityGb'] = $freeCapacityGb;
        return $this;
    }

    /**
    * Gets dssPoolVolumeType
    *  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    *
    * @return string
    */
    public function getDssPoolVolumeType()
    {
        return $this->container['dssPoolVolumeType'];
    }

    /**
    * Sets dssPoolVolumeType
    *
    * @param string $dssPoolVolumeType 专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。
    *
    * @return $this
    */
    public function setDssPoolVolumeType($dssPoolVolumeType)
    {
        $this->container['dssPoolVolumeType'] = $dssPoolVolumeType;
        return $this;
    }

    /**
    * Gets dssPoolId
    *  专属存储池ID
    *
    * @return string
    */
    public function getDssPoolId()
    {
        return $this->container['dssPoolId'];
    }

    /**
    * Sets dssPoolId
    *
    * @param string $dssPoolId 专属存储池ID
    *
    * @return $this
    */
    public function setDssPoolId($dssPoolId)
    {
        $this->container['dssPoolId'] = $dssPoolId;
        return $this;
    }

    /**
    * Gets dssPoolStatus
    *  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @return string
    */
    public function getDssPoolStatus()
    {
        return $this->container['dssPoolStatus'];
    }

    /**
    * Sets dssPoolStatus
    *
    * @param string $dssPoolStatus 专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @return $this
    */
    public function setDssPoolStatus($dssPoolStatus)
    {
        $this->container['dssPoolStatus'] = $dssPoolStatus;
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

