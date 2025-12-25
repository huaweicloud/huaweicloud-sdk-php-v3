<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceEnvironment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceEnvironment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendorType  环境供应商
    * domainId  HWC special，资产归属
    * regionId  HWC special，全局服务\"global\"，资产归属
    * projectId  HWC special， 全局服务默认null， 资产归属
    * epId  HWC special，资产归属的企业项目id。
    * epName  HWC special，资产归属的企业项目名称。
    * vendorName  OCA special，包含资产探针或资产提供商
    * idcName  OCA special，线下机房名称
    * idcId  OCA special，线下机房id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendorType' => 'string',
            'domainId' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'epId' => 'string',
            'epName' => 'string',
            'vendorName' => 'string',
            'idcName' => 'string',
            'idcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendorType  环境供应商
    * domainId  HWC special，资产归属
    * regionId  HWC special，全局服务\"global\"，资产归属
    * projectId  HWC special， 全局服务默认null， 资产归属
    * epId  HWC special，资产归属的企业项目id。
    * epName  HWC special，资产归属的企业项目名称。
    * vendorName  OCA special，包含资产探针或资产提供商
    * idcName  OCA special，线下机房名称
    * idcId  OCA special，线下机房id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendorType' => null,
        'domainId' => null,
        'regionId' => null,
        'projectId' => null,
        'epId' => null,
        'epName' => null,
        'vendorName' => null,
        'idcName' => null,
        'idcId' => null
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
    * vendorType  环境供应商
    * domainId  HWC special，资产归属
    * regionId  HWC special，全局服务\"global\"，资产归属
    * projectId  HWC special， 全局服务默认null， 资产归属
    * epId  HWC special，资产归属的企业项目id。
    * epName  HWC special，资产归属的企业项目名称。
    * vendorName  OCA special，包含资产探针或资产提供商
    * idcName  OCA special，线下机房名称
    * idcId  OCA special，线下机房id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendorType' => 'vendor_type',
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'epId' => 'ep_id',
            'epName' => 'ep_name',
            'vendorName' => 'vendor_name',
            'idcName' => 'idc_name',
            'idcId' => 'idc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendorType  环境供应商
    * domainId  HWC special，资产归属
    * regionId  HWC special，全局服务\"global\"，资产归属
    * projectId  HWC special， 全局服务默认null， 资产归属
    * epId  HWC special，资产归属的企业项目id。
    * epName  HWC special，资产归属的企业项目名称。
    * vendorName  OCA special，包含资产探针或资产提供商
    * idcName  OCA special，线下机房名称
    * idcId  OCA special，线下机房id
    *
    * @var string[]
    */
    protected static $setters = [
            'vendorType' => 'setVendorType',
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'epId' => 'setEpId',
            'epName' => 'setEpName',
            'vendorName' => 'setVendorName',
            'idcName' => 'setIdcName',
            'idcId' => 'setIdcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendorType  环境供应商
    * domainId  HWC special，资产归属
    * regionId  HWC special，全局服务\"global\"，资产归属
    * projectId  HWC special， 全局服务默认null， 资产归属
    * epId  HWC special，资产归属的企业项目id。
    * epName  HWC special，资产归属的企业项目名称。
    * vendorName  OCA special，包含资产探针或资产提供商
    * idcName  OCA special，线下机房名称
    * idcId  OCA special，线下机房id
    *
    * @var string[]
    */
    protected static $getters = [
            'vendorType' => 'getVendorType',
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'epId' => 'getEpId',
            'epName' => 'getEpName',
            'vendorName' => 'getVendorName',
            'idcName' => 'getIdcName',
            'idcId' => 'getIdcId'
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
        $this->container['vendorType'] = isset($data['vendorType']) ? $data['vendorType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['epName'] = isset($data['epName']) ? $data['epName'] : null;
        $this->container['vendorName'] = isset($data['vendorName']) ? $data['vendorName'] : null;
        $this->container['idcName'] = isset($data['idcName']) ? $data['idcName'] : null;
        $this->container['idcId'] = isset($data['idcId']) ? $data['idcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vendorType'] === null) {
            $invalidProperties[] = "'vendorType' can't be null";
        }
            if ((mb_strlen($this->container['vendorType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vendorType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['vendorType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vendorType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) > 32)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['epId']) && (mb_strlen($this->container['epId']) < 32)) {
                $invalidProperties[] = "invalid value for 'epId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['epName']) && (mb_strlen($this->container['epName']) > 64)) {
                $invalidProperties[] = "invalid value for 'epName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['epName']) && (mb_strlen($this->container['epName']) < 0)) {
                $invalidProperties[] = "invalid value for 'epName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vendorName'] === null) {
            $invalidProperties[] = "'vendorName' can't be null";
        }
            if ((mb_strlen($this->container['vendorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendorName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vendorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vendorName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['idcName'] === null) {
            $invalidProperties[] = "'idcName' can't be null";
        }
            if ((mb_strlen($this->container['idcName']) > 64)) {
                $invalidProperties[] = "invalid value for 'idcName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['idcName']) < 0)) {
                $invalidProperties[] = "invalid value for 'idcName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['idcId']) && (mb_strlen($this->container['idcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'idcId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['idcId']) && (mb_strlen($this->container['idcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'idcId', the character length must be bigger than or equal to 0.";
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
    * Gets vendorType
    *  环境供应商
    *
    * @return string
    */
    public function getVendorType()
    {
        return $this->container['vendorType'];
    }

    /**
    * Sets vendorType
    *
    * @param string $vendorType 环境供应商
    *
    * @return $this
    */
    public function setVendorType($vendorType)
    {
        $this->container['vendorType'] = $vendorType;
        return $this;
    }

    /**
    * Gets domainId
    *  HWC special，资产归属
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
    * @param string $domainId HWC special，资产归属
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets regionId
    *  HWC special，全局服务\"global\"，资产归属
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId HWC special，全局服务\"global\"，资产归属
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  HWC special， 全局服务默认null， 资产归属
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId HWC special， 全局服务默认null， 资产归属
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets epId
    *  HWC special，资产归属的企业项目id。
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId HWC special，资产归属的企业项目id。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets epName
    *  HWC special，资产归属的企业项目名称。
    *
    * @return string|null
    */
    public function getEpName()
    {
        return $this->container['epName'];
    }

    /**
    * Sets epName
    *
    * @param string|null $epName HWC special，资产归属的企业项目名称。
    *
    * @return $this
    */
    public function setEpName($epName)
    {
        $this->container['epName'] = $epName;
        return $this;
    }

    /**
    * Gets vendorName
    *  OCA special，包含资产探针或资产提供商
    *
    * @return string
    */
    public function getVendorName()
    {
        return $this->container['vendorName'];
    }

    /**
    * Sets vendorName
    *
    * @param string $vendorName OCA special，包含资产探针或资产提供商
    *
    * @return $this
    */
    public function setVendorName($vendorName)
    {
        $this->container['vendorName'] = $vendorName;
        return $this;
    }

    /**
    * Gets idcName
    *  OCA special，线下机房名称
    *
    * @return string
    */
    public function getIdcName()
    {
        return $this->container['idcName'];
    }

    /**
    * Sets idcName
    *
    * @param string $idcName OCA special，线下机房名称
    *
    * @return $this
    */
    public function setIdcName($idcName)
    {
        $this->container['idcName'] = $idcName;
        return $this;
    }

    /**
    * Gets idcId
    *  OCA special，线下机房id
    *
    * @return string|null
    */
    public function getIdcId()
    {
        return $this->container['idcId'];
    }

    /**
    * Sets idcId
    *
    * @param string|null $idcId OCA special，线下机房id
    *
    * @return $this
    */
    public function setIdcId($idcId)
    {
        $this->container['idcId'] = $idcId;
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

