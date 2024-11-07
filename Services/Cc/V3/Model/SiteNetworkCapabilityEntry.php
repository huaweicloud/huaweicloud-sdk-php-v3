<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SiteNetworkCapabilityEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SiteNetworkCapabilityEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * domainId  实例所属账号ID。
    * specification  specification
    * isSupport  是否支持分支网络。
    * isSupportEnterpriseProject  是否支持分支网络企业项目。
    * isSupportTag  是否支持分支网络标签。
    * isSupportIntraRegion  是否支持创建同region分支网络。
    * supportTopologies  分支网络的拓扑列表。
    * supportRegions  list类型
    * supportDscpRegions  list类型
    * supportFreezeRegions  list类型
    * supportLocations  list类型
    * sizeRange  sizeRange
    * chargeMode  list类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'specification' => '\HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkSpecificationEnum',
            'isSupport' => 'bool',
            'isSupportEnterpriseProject' => 'bool',
            'isSupportTag' => 'bool',
            'isSupportIntraRegion' => 'bool',
            'supportTopologies' => '\HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkTopologyEnum[]',
            'supportRegions' => 'string[]',
            'supportDscpRegions' => 'string[]',
            'supportFreezeRegions' => 'string[]',
            'supportLocations' => 'string[]',
            'sizeRange' => '\HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthSizeRange',
            'chargeMode' => '\HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthChargeModeEnum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * domainId  实例所属账号ID。
    * specification  specification
    * isSupport  是否支持分支网络。
    * isSupportEnterpriseProject  是否支持分支网络企业项目。
    * isSupportTag  是否支持分支网络标签。
    * isSupportIntraRegion  是否支持创建同region分支网络。
    * supportTopologies  分支网络的拓扑列表。
    * supportRegions  list类型
    * supportDscpRegions  list类型
    * supportFreezeRegions  list类型
    * supportLocations  list类型
    * sizeRange  sizeRange
    * chargeMode  list类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'specification' => null,
        'isSupport' => null,
        'isSupportEnterpriseProject' => null,
        'isSupportTag' => null,
        'isSupportIntraRegion' => null,
        'supportTopologies' => null,
        'supportRegions' => null,
        'supportDscpRegions' => null,
        'supportFreezeRegions' => null,
        'supportLocations' => null,
        'sizeRange' => null,
        'chargeMode' => null
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
    * domainId  实例所属账号ID。
    * specification  specification
    * isSupport  是否支持分支网络。
    * isSupportEnterpriseProject  是否支持分支网络企业项目。
    * isSupportTag  是否支持分支网络标签。
    * isSupportIntraRegion  是否支持创建同region分支网络。
    * supportTopologies  分支网络的拓扑列表。
    * supportRegions  list类型
    * supportDscpRegions  list类型
    * supportFreezeRegions  list类型
    * supportLocations  list类型
    * sizeRange  sizeRange
    * chargeMode  list类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'specification' => 'specification',
            'isSupport' => 'is_support',
            'isSupportEnterpriseProject' => 'is_support_enterprise_project',
            'isSupportTag' => 'is_support_tag',
            'isSupportIntraRegion' => 'is_support_intra_region',
            'supportTopologies' => 'support_topologies',
            'supportRegions' => 'support_regions',
            'supportDscpRegions' => 'support_dscp_regions',
            'supportFreezeRegions' => 'support_freeze_regions',
            'supportLocations' => 'support_locations',
            'sizeRange' => 'size_range',
            'chargeMode' => 'charge_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * domainId  实例所属账号ID。
    * specification  specification
    * isSupport  是否支持分支网络。
    * isSupportEnterpriseProject  是否支持分支网络企业项目。
    * isSupportTag  是否支持分支网络标签。
    * isSupportIntraRegion  是否支持创建同region分支网络。
    * supportTopologies  分支网络的拓扑列表。
    * supportRegions  list类型
    * supportDscpRegions  list类型
    * supportFreezeRegions  list类型
    * supportLocations  list类型
    * sizeRange  sizeRange
    * chargeMode  list类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'specification' => 'setSpecification',
            'isSupport' => 'setIsSupport',
            'isSupportEnterpriseProject' => 'setIsSupportEnterpriseProject',
            'isSupportTag' => 'setIsSupportTag',
            'isSupportIntraRegion' => 'setIsSupportIntraRegion',
            'supportTopologies' => 'setSupportTopologies',
            'supportRegions' => 'setSupportRegions',
            'supportDscpRegions' => 'setSupportDscpRegions',
            'supportFreezeRegions' => 'setSupportFreezeRegions',
            'supportLocations' => 'setSupportLocations',
            'sizeRange' => 'setSizeRange',
            'chargeMode' => 'setChargeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * domainId  实例所属账号ID。
    * specification  specification
    * isSupport  是否支持分支网络。
    * isSupportEnterpriseProject  是否支持分支网络企业项目。
    * isSupportTag  是否支持分支网络标签。
    * isSupportIntraRegion  是否支持创建同region分支网络。
    * supportTopologies  分支网络的拓扑列表。
    * supportRegions  list类型
    * supportDscpRegions  list类型
    * supportFreezeRegions  list类型
    * supportLocations  list类型
    * sizeRange  sizeRange
    * chargeMode  list类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'specification' => 'getSpecification',
            'isSupport' => 'getIsSupport',
            'isSupportEnterpriseProject' => 'getIsSupportEnterpriseProject',
            'isSupportTag' => 'getIsSupportTag',
            'isSupportIntraRegion' => 'getIsSupportIntraRegion',
            'supportTopologies' => 'getSupportTopologies',
            'supportRegions' => 'getSupportRegions',
            'supportDscpRegions' => 'getSupportDscpRegions',
            'supportFreezeRegions' => 'getSupportFreezeRegions',
            'supportLocations' => 'getSupportLocations',
            'sizeRange' => 'getSizeRange',
            'chargeMode' => 'getChargeMode'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['isSupport'] = isset($data['isSupport']) ? $data['isSupport'] : null;
        $this->container['isSupportEnterpriseProject'] = isset($data['isSupportEnterpriseProject']) ? $data['isSupportEnterpriseProject'] : null;
        $this->container['isSupportTag'] = isset($data['isSupportTag']) ? $data['isSupportTag'] : null;
        $this->container['isSupportIntraRegion'] = isset($data['isSupportIntraRegion']) ? $data['isSupportIntraRegion'] : null;
        $this->container['supportTopologies'] = isset($data['supportTopologies']) ? $data['supportTopologies'] : null;
        $this->container['supportRegions'] = isset($data['supportRegions']) ? $data['supportRegions'] : null;
        $this->container['supportDscpRegions'] = isset($data['supportDscpRegions']) ? $data['supportDscpRegions'] : null;
        $this->container['supportFreezeRegions'] = isset($data['supportFreezeRegions']) ? $data['supportFreezeRegions'] : null;
        $this->container['supportLocations'] = isset($data['supportLocations']) ? $data['supportLocations'] : null;
        $this->container['sizeRange'] = isset($data['sizeRange']) ? $data['sizeRange'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
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
    * Gets domainId
    *  实例所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets specification
    *  specification
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkSpecificationEnum
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkSpecificationEnum $specification specification
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets isSupport
    *  是否支持分支网络。
    *
    * @return bool|null
    */
    public function getIsSupport()
    {
        return $this->container['isSupport'];
    }

    /**
    * Sets isSupport
    *
    * @param bool|null $isSupport 是否支持分支网络。
    *
    * @return $this
    */
    public function setIsSupport($isSupport)
    {
        $this->container['isSupport'] = $isSupport;
        return $this;
    }

    /**
    * Gets isSupportEnterpriseProject
    *  是否支持分支网络企业项目。
    *
    * @return bool|null
    */
    public function getIsSupportEnterpriseProject()
    {
        return $this->container['isSupportEnterpriseProject'];
    }

    /**
    * Sets isSupportEnterpriseProject
    *
    * @param bool|null $isSupportEnterpriseProject 是否支持分支网络企业项目。
    *
    * @return $this
    */
    public function setIsSupportEnterpriseProject($isSupportEnterpriseProject)
    {
        $this->container['isSupportEnterpriseProject'] = $isSupportEnterpriseProject;
        return $this;
    }

    /**
    * Gets isSupportTag
    *  是否支持分支网络标签。
    *
    * @return bool|null
    */
    public function getIsSupportTag()
    {
        return $this->container['isSupportTag'];
    }

    /**
    * Sets isSupportTag
    *
    * @param bool|null $isSupportTag 是否支持分支网络标签。
    *
    * @return $this
    */
    public function setIsSupportTag($isSupportTag)
    {
        $this->container['isSupportTag'] = $isSupportTag;
        return $this;
    }

    /**
    * Gets isSupportIntraRegion
    *  是否支持创建同region分支网络。
    *
    * @return bool|null
    */
    public function getIsSupportIntraRegion()
    {
        return $this->container['isSupportIntraRegion'];
    }

    /**
    * Sets isSupportIntraRegion
    *
    * @param bool|null $isSupportIntraRegion 是否支持创建同region分支网络。
    *
    * @return $this
    */
    public function setIsSupportIntraRegion($isSupportIntraRegion)
    {
        $this->container['isSupportIntraRegion'] = $isSupportIntraRegion;
        return $this;
    }

    /**
    * Gets supportTopologies
    *  分支网络的拓扑列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkTopologyEnum[]|null
    */
    public function getSupportTopologies()
    {
        return $this->container['supportTopologies'];
    }

    /**
    * Sets supportTopologies
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SiteNetworkTopologyEnum[]|null $supportTopologies 分支网络的拓扑列表。
    *
    * @return $this
    */
    public function setSupportTopologies($supportTopologies)
    {
        $this->container['supportTopologies'] = $supportTopologies;
        return $this;
    }

    /**
    * Gets supportRegions
    *  list类型
    *
    * @return string[]|null
    */
    public function getSupportRegions()
    {
        return $this->container['supportRegions'];
    }

    /**
    * Sets supportRegions
    *
    * @param string[]|null $supportRegions list类型
    *
    * @return $this
    */
    public function setSupportRegions($supportRegions)
    {
        $this->container['supportRegions'] = $supportRegions;
        return $this;
    }

    /**
    * Gets supportDscpRegions
    *  list类型
    *
    * @return string[]|null
    */
    public function getSupportDscpRegions()
    {
        return $this->container['supportDscpRegions'];
    }

    /**
    * Sets supportDscpRegions
    *
    * @param string[]|null $supportDscpRegions list类型
    *
    * @return $this
    */
    public function setSupportDscpRegions($supportDscpRegions)
    {
        $this->container['supportDscpRegions'] = $supportDscpRegions;
        return $this;
    }

    /**
    * Gets supportFreezeRegions
    *  list类型
    *
    * @return string[]|null
    */
    public function getSupportFreezeRegions()
    {
        return $this->container['supportFreezeRegions'];
    }

    /**
    * Sets supportFreezeRegions
    *
    * @param string[]|null $supportFreezeRegions list类型
    *
    * @return $this
    */
    public function setSupportFreezeRegions($supportFreezeRegions)
    {
        $this->container['supportFreezeRegions'] = $supportFreezeRegions;
        return $this;
    }

    /**
    * Gets supportLocations
    *  list类型
    *
    * @return string[]|null
    */
    public function getSupportLocations()
    {
        return $this->container['supportLocations'];
    }

    /**
    * Sets supportLocations
    *
    * @param string[]|null $supportLocations list类型
    *
    * @return $this
    */
    public function setSupportLocations($supportLocations)
    {
        $this->container['supportLocations'] = $supportLocations;
        return $this;
    }

    /**
    * Gets sizeRange
    *  sizeRange
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthSizeRange|null
    */
    public function getSizeRange()
    {
        return $this->container['sizeRange'];
    }

    /**
    * Sets sizeRange
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthSizeRange|null $sizeRange sizeRange
    *
    * @return $this
    */
    public function setSizeRange($sizeRange)
    {
        $this->container['sizeRange'] = $sizeRange;
        return $this;
    }

    /**
    * Gets chargeMode
    *  list类型
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthChargeModeEnum[]|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ConnectionBandwidthChargeModeEnum[]|null $chargeMode list类型
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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

