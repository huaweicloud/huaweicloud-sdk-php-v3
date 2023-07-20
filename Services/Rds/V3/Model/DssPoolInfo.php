<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

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
    * dsspoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * dsspoolId  专属存储池ID
    * dsspoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'azName' => 'string',
            'freeCapacityGb' => 'string',
            'dsspoolVolumeType' => 'string',
            'dsspoolId' => 'string',
            'dsspoolStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dsspoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * dsspoolId  专属存储池ID
    * dsspoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'azName' => null,
        'freeCapacityGb' => null,
        'dsspoolVolumeType' => null,
        'dsspoolId' => null,
        'dsspoolStatus' => null
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
    * dsspoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * dsspoolId  专属存储池ID
    * dsspoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'azName' => 'az_name',
            'freeCapacityGb' => 'free_capacity_gb',
            'dsspoolVolumeType' => 'dsspool_volume_type',
            'dsspoolId' => 'dsspool_id',
            'dsspoolStatus' => 'dsspool_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dsspoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * dsspoolId  专属存储池ID
    * dsspoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $setters = [
            'azName' => 'setAzName',
            'freeCapacityGb' => 'setFreeCapacityGb',
            'dsspoolVolumeType' => 'setDsspoolVolumeType',
            'dsspoolId' => 'setDsspoolId',
            'dsspoolStatus' => 'setDsspoolStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * azName  专属存储池所在az
    * freeCapacityGb  专属存储池免费空间大小，单位GB
    * dsspoolVolumeType  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * dsspoolId  专属存储池ID
    * dsspoolStatus  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @var string[]
    */
    protected static $getters = [
            'azName' => 'getAzName',
            'freeCapacityGb' => 'getFreeCapacityGb',
            'dsspoolVolumeType' => 'getDsspoolVolumeType',
            'dsspoolId' => 'getDsspoolId',
            'dsspoolStatus' => 'getDsspoolStatus'
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
        $this->container['dsspoolVolumeType'] = isset($data['dsspoolVolumeType']) ? $data['dsspoolVolumeType'] : null;
        $this->container['dsspoolId'] = isset($data['dsspoolId']) ? $data['dsspoolId'] : null;
        $this->container['dsspoolStatus'] = isset($data['dsspoolStatus']) ? $data['dsspoolStatus'] : null;
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
        if ($this->container['dsspoolVolumeType'] === null) {
            $invalidProperties[] = "'dsspoolVolumeType' can't be null";
        }
        if ($this->container['dsspoolId'] === null) {
            $invalidProperties[] = "'dsspoolId' can't be null";
        }
        if ($this->container['dsspoolStatus'] === null) {
            $invalidProperties[] = "'dsspoolStatus' can't be null";
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
    * Gets dsspoolVolumeType
    *  专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    *
    * @return string
    */
    public function getDsspoolVolumeType()
    {
        return $this->container['dsspoolVolumeType'];
    }

    /**
    * Sets dsspoolVolumeType
    *
    * @param string $dsspoolVolumeType 专属存储池磁盘类型名称，可能取值如下：  - ULTRAHIGH，表示SSD。  - LOCALSSD：表示本地SSD。  - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。  - ESSD：表示极速型SSD，仅支持独享型规格实例。
    *
    * @return $this
    */
    public function setDsspoolVolumeType($dsspoolVolumeType)
    {
        $this->container['dsspoolVolumeType'] = $dsspoolVolumeType;
        return $this;
    }

    /**
    * Gets dsspoolId
    *  专属存储池ID
    *
    * @return string
    */
    public function getDsspoolId()
    {
        return $this->container['dsspoolId'];
    }

    /**
    * Sets dsspoolId
    *
    * @param string $dsspoolId 专属存储池ID
    *
    * @return $this
    */
    public function setDsspoolId($dsspoolId)
    {
        $this->container['dsspoolId'] = $dsspoolId;
        return $this;
    }

    /**
    * Gets dsspoolStatus
    *  专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @return string
    */
    public function getDsspoolStatus()
    {
        return $this->container['dsspoolStatus'];
    }

    /**
    * Sets dsspoolStatus
    *
    * @param string $dsspoolStatus 专属存储池当前状态，可能取值如下： - available，表示可用。 - deploying，表示正在部署。 - enlarging，表示正在扩容。 - frozen，表示冻结。 - sellout，表示售罄。
    *
    * @return $this
    */
    public function setDsspoolStatus($dsspoolStatus)
    {
        $this->container['dsspoolStatus'] = $dsspoolStatus;
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

