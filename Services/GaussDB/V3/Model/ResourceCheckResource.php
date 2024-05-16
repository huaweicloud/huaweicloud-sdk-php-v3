<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceCheckResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceCheck_resource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * instanceNum  实例数量。
    * mode  实例部署模式。
    * availabilityZoneMode  可用区类型，目前仅支持single。
    * feNodeNum  FE节点数量。
    * beNodeNum  BE节点数量。
    * feFlavorRef  FE规格码。
    * beFlavorRef  BE规格码。
    * availabilityZone  可用区码。选填，校验可用区码是否正确。
    * subnetId  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'instanceNum' => 'int',
            'mode' => 'string',
            'availabilityZoneMode' => 'string',
            'feNodeNum' => 'int',
            'beNodeNum' => 'int',
            'feFlavorRef' => 'string',
            'beFlavorRef' => 'string',
            'availabilityZone' => 'string',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * instanceNum  实例数量。
    * mode  实例部署模式。
    * availabilityZoneMode  可用区类型，目前仅支持single。
    * feNodeNum  FE节点数量。
    * beNodeNum  BE节点数量。
    * feFlavorRef  FE规格码。
    * beFlavorRef  BE规格码。
    * availabilityZone  可用区码。选填，校验可用区码是否正确。
    * subnetId  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'instanceNum' => 'int32',
        'mode' => null,
        'availabilityZoneMode' => null,
        'feNodeNum' => 'int32',
        'beNodeNum' => 'int32',
        'feFlavorRef' => null,
        'beFlavorRef' => null,
        'availabilityZone' => null,
        'subnetId' => null
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
    * enterpriseProjectId  企业项目ID。
    * instanceNum  实例数量。
    * mode  实例部署模式。
    * availabilityZoneMode  可用区类型，目前仅支持single。
    * feNodeNum  FE节点数量。
    * beNodeNum  BE节点数量。
    * feFlavorRef  FE规格码。
    * beFlavorRef  BE规格码。
    * availabilityZone  可用区码。选填，校验可用区码是否正确。
    * subnetId  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'instanceNum' => 'instance_num',
            'mode' => 'mode',
            'availabilityZoneMode' => 'availability_zone_mode',
            'feNodeNum' => 'fe_node_num',
            'beNodeNum' => 'be_node_num',
            'feFlavorRef' => 'fe_flavor_ref',
            'beFlavorRef' => 'be_flavor_ref',
            'availabilityZone' => 'availability_zone',
            'subnetId' => 'subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID。
    * instanceNum  实例数量。
    * mode  实例部署模式。
    * availabilityZoneMode  可用区类型，目前仅支持single。
    * feNodeNum  FE节点数量。
    * beNodeNum  BE节点数量。
    * feFlavorRef  FE规格码。
    * beFlavorRef  BE规格码。
    * availabilityZone  可用区码。选填，校验可用区码是否正确。
    * subnetId  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceNum' => 'setInstanceNum',
            'mode' => 'setMode',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'feNodeNum' => 'setFeNodeNum',
            'beNodeNum' => 'setBeNodeNum',
            'feFlavorRef' => 'setFeFlavorRef',
            'beFlavorRef' => 'setBeFlavorRef',
            'availabilityZone' => 'setAvailabilityZone',
            'subnetId' => 'setSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID。
    * instanceNum  实例数量。
    * mode  实例部署模式。
    * availabilityZoneMode  可用区类型，目前仅支持single。
    * feNodeNum  FE节点数量。
    * beNodeNum  BE节点数量。
    * feFlavorRef  FE规格码。
    * beFlavorRef  BE规格码。
    * availabilityZone  可用区码。选填，校验可用区码是否正确。
    * subnetId  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceNum' => 'getInstanceNum',
            'mode' => 'getMode',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'feNodeNum' => 'getFeNodeNum',
            'beNodeNum' => 'getBeNodeNum',
            'feFlavorRef' => 'getFeFlavorRef',
            'beFlavorRef' => 'getBeFlavorRef',
            'availabilityZone' => 'getAvailabilityZone',
            'subnetId' => 'getSubnetId'
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
    const MODE_CLUSTER = 'Cluster';
    const MODE_SINGLE = 'Single';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_CLUSTER,
            self::MODE_SINGLE,
        ];
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['feNodeNum'] = isset($data['feNodeNum']) ? $data['feNodeNum'] : null;
        $this->container['beNodeNum'] = isset($data['beNodeNum']) ? $data['beNodeNum'] : null;
        $this->container['feFlavorRef'] = isset($data['feFlavorRef']) ? $data['feFlavorRef'] : null;
        $this->container['beFlavorRef'] = isset($data['beFlavorRef']) ? $data['beFlavorRef'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['instanceNum'] === null) {
            $invalidProperties[] = "'instanceNum' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['availabilityZoneMode'] === null) {
            $invalidProperties[] = "'availabilityZoneMode' can't be null";
        }
        if ($this->container['feNodeNum'] === null) {
            $invalidProperties[] = "'feNodeNum' can't be null";
        }
        if ($this->container['beNodeNum'] === null) {
            $invalidProperties[] = "'beNodeNum' can't be null";
        }
        if ($this->container['feFlavorRef'] === null) {
            $invalidProperties[] = "'feFlavorRef' can't be null";
        }
        if ($this->container['beFlavorRef'] === null) {
            $invalidProperties[] = "'beFlavorRef' can't be null";
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
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceNum
    *  实例数量。
    *
    * @return int
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int $instanceNum 实例数量。
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets mode
    *  实例部署模式。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 实例部署模式。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  可用区类型，目前仅支持single。
    *
    * @return string
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string $availabilityZoneMode 可用区类型，目前仅支持single。
    *
    * @return $this
    */
    public function setAvailabilityZoneMode($availabilityZoneMode)
    {
        $this->container['availabilityZoneMode'] = $availabilityZoneMode;
        return $this;
    }

    /**
    * Gets feNodeNum
    *  FE节点数量。
    *
    * @return int
    */
    public function getFeNodeNum()
    {
        return $this->container['feNodeNum'];
    }

    /**
    * Sets feNodeNum
    *
    * @param int $feNodeNum FE节点数量。
    *
    * @return $this
    */
    public function setFeNodeNum($feNodeNum)
    {
        $this->container['feNodeNum'] = $feNodeNum;
        return $this;
    }

    /**
    * Gets beNodeNum
    *  BE节点数量。
    *
    * @return int
    */
    public function getBeNodeNum()
    {
        return $this->container['beNodeNum'];
    }

    /**
    * Sets beNodeNum
    *
    * @param int $beNodeNum BE节点数量。
    *
    * @return $this
    */
    public function setBeNodeNum($beNodeNum)
    {
        $this->container['beNodeNum'] = $beNodeNum;
        return $this;
    }

    /**
    * Gets feFlavorRef
    *  FE规格码。
    *
    * @return string
    */
    public function getFeFlavorRef()
    {
        return $this->container['feFlavorRef'];
    }

    /**
    * Sets feFlavorRef
    *
    * @param string $feFlavorRef FE规格码。
    *
    * @return $this
    */
    public function setFeFlavorRef($feFlavorRef)
    {
        $this->container['feFlavorRef'] = $feFlavorRef;
        return $this;
    }

    /**
    * Gets beFlavorRef
    *  BE规格码。
    *
    * @return string
    */
    public function getBeFlavorRef()
    {
        return $this->container['beFlavorRef'];
    }

    /**
    * Sets beFlavorRef
    *
    * @param string $beFlavorRef BE规格码。
    *
    * @return $this
    */
    public function setBeFlavorRef($beFlavorRef)
    {
        $this->container['beFlavorRef'] = $beFlavorRef;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区码。选填，校验可用区码是否正确。
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
    * @param string|null $availabilityZone 可用区码。选填，校验可用区码是否正确。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets subnetId
    *  HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
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
    * @param string $subnetId HTAP实例子网即GaussDBForMySQL实例子网。 获取方法请参见[获取子网ID](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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

