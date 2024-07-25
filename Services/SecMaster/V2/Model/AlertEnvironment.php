<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertEnvironment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_environment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vendorType  环境供应商：HWCP/HWC/AWS/Azure/GCP
    * domainId  租户id
    * regionId  区域id，全局服务global
    * crossWorkspaceId  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    * projectId  项目id， 全局服务默认null
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vendorType' => 'string',
            'domainId' => 'string',
            'regionId' => 'string',
            'crossWorkspaceId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vendorType  环境供应商：HWCP/HWC/AWS/Azure/GCP
    * domainId  租户id
    * regionId  区域id，全局服务global
    * crossWorkspaceId  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    * projectId  项目id， 全局服务默认null
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vendorType' => null,
        'domainId' => null,
        'regionId' => null,
        'crossWorkspaceId' => null,
        'projectId' => null
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
    * vendorType  环境供应商：HWCP/HWC/AWS/Azure/GCP
    * domainId  租户id
    * regionId  区域id，全局服务global
    * crossWorkspaceId  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    * projectId  项目id， 全局服务默认null
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vendorType' => 'vendor_type',
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'crossWorkspaceId' => 'cross_workspace_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vendorType  环境供应商：HWCP/HWC/AWS/Azure/GCP
    * domainId  租户id
    * regionId  区域id，全局服务global
    * crossWorkspaceId  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    * projectId  项目id， 全局服务默认null
    *
    * @var string[]
    */
    protected static $setters = [
            'vendorType' => 'setVendorType',
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'crossWorkspaceId' => 'setCrossWorkspaceId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vendorType  环境供应商：HWCP/HWC/AWS/Azure/GCP
    * domainId  租户id
    * regionId  区域id，全局服务global
    * crossWorkspaceId  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    * projectId  项目id， 全局服务默认null
    *
    * @var string[]
    */
    protected static $getters = [
            'vendorType' => 'getVendorType',
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'crossWorkspaceId' => 'getCrossWorkspaceId',
            'projectId' => 'getProjectId'
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
        $this->container['crossWorkspaceId'] = isset($data['crossWorkspaceId']) ? $data['crossWorkspaceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vendorType']) && (mb_strlen($this->container['vendorType']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendorType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vendorType']) && (mb_strlen($this->container['vendorType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vendorType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['crossWorkspaceId']) && (mb_strlen($this->container['crossWorkspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'crossWorkspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['crossWorkspaceId']) && (mb_strlen($this->container['crossWorkspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'crossWorkspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
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
    *  环境供应商：HWCP/HWC/AWS/Azure/GCP
    *
    * @return string|null
    */
    public function getVendorType()
    {
        return $this->container['vendorType'];
    }

    /**
    * Sets vendorType
    *
    * @param string|null $vendorType 环境供应商：HWCP/HWC/AWS/Azure/GCP
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
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
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
    *  区域id，全局服务global
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
    * @param string|null $regionId 区域id，全局服务global
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets crossWorkspaceId
    *  数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    *
    * @return string|null
    */
    public function getCrossWorkspaceId()
    {
        return $this->container['crossWorkspaceId'];
    }

    /**
    * Sets crossWorkspaceId
    *
    * @param string|null $crossWorkspaceId 数据投递前的源工作空间id，在源空间下值为null，投递后为被委托用户的id
    *
    * @return $this
    */
    public function setCrossWorkspaceId($crossWorkspaceId)
    {
        $this->container['crossWorkspaceId'] = $crossWorkspaceId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id， 全局服务默认null
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
    * @param string|null $projectId 项目id， 全局服务默认null
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

