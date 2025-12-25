<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIndicatorDetailDataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIndicatorDetail_data_source';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    * domainId  账号ID
    * projectId  项目ID
    * regionId  局点ID
    * productName  数据源产品名称
    * productFeature  数据源产品特性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'int',
            'domainId' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'productName' => 'string',
            'productFeature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    * domainId  账号ID
    * projectId  项目ID
    * regionId  局点ID
    * productName  数据源产品名称
    * productFeature  数据源产品特性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'domainId' => null,
        'projectId' => null,
        'regionId' => null,
        'productName' => null,
        'productFeature' => null
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
    * sourceType  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    * domainId  账号ID
    * projectId  项目ID
    * regionId  局点ID
    * productName  数据源产品名称
    * productFeature  数据源产品特性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'productName' => 'product_name',
            'productFeature' => 'product_feature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    * domainId  账号ID
    * projectId  项目ID
    * regionId  局点ID
    * productName  数据源产品名称
    * productFeature  数据源产品特性
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'productName' => 'setProductName',
            'productFeature' => 'setProductFeature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    * domainId  账号ID
    * projectId  项目ID
    * regionId  局点ID
    * productName  数据源产品名称
    * productFeature  数据源产品特性
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'productName' => 'getProductName',
            'productFeature' => 'getProductFeature'
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productFeature'] = isset($data['productFeature']) ? $data['productFeature'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            if (($this->container['sourceType'] > 9999)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be smaller than or equal to 9999.";
            }
            if (($this->container['sourceType'] < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be bigger than or equal to 0.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
            if ((mb_strlen($this->container['productName']) > 64)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productFeature'] === null) {
            $invalidProperties[] = "'productFeature' can't be null";
        }
            if ((mb_strlen($this->container['productFeature']) > 64)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['productFeature']) < 1)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be bigger than or equal to 1.";
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
    * Gets sourceType
    *  数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    *
    * @return int
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int $sourceType 数据资产类型，取值范围[1-SecMaster, 2-HSS, 3-Compass, 4-第三方产品 5-租户私有产品]
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
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
    * @param string $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  局点ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 局点ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets productName
    *  数据源产品名称
    *
    * @return string
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string $productName 数据源产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets productFeature
    *  数据源产品特性
    *
    * @return string
    */
    public function getProductFeature()
    {
        return $this->container['productFeature'];
    }

    /**
    * Sets productFeature
    *
    * @param string $productFeature 数据源产品特性
    *
    * @return $this
    */
    public function setProductFeature($productFeature)
    {
        $this->container['productFeature'] = $productFeature;
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

