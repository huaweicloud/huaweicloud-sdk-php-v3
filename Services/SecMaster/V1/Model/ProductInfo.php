<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  数据源产品所属账号的ID。
    * projectId  数据源产品所属项目的ID。
    * region  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'projectId' => 'string',
            'region' => 'string',
            'companyName' => 'string',
            'productName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  数据源产品所属账号的ID。
    * projectId  数据源产品所属项目的ID。
    * region  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'projectId' => null,
        'region' => null,
        'companyName' => null,
        'productName' => null
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
    * domainId  数据源产品所属账号的ID。
    * projectId  数据源产品所属项目的ID。
    * region  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'region' => 'region',
            'companyName' => 'company_name',
            'productName' => 'product_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  数据源产品所属账号的ID。
    * projectId  数据源产品所属项目的ID。
    * region  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'companyName' => 'setCompanyName',
            'productName' => 'setProductName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  数据源产品所属账号的ID。
    * projectId  数据源产品所属项目的ID。
    * region  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'companyName' => 'getCompanyName',
            'productName' => 'getProductName'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 512)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['companyName'] === null) {
            $invalidProperties[] = "'companyName' can't be null";
        }
            if ((mb_strlen($this->container['companyName']) > 512)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['companyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
            if ((mb_strlen($this->container['productName']) > 512)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
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
    * Gets domainId
    *  数据源产品所属账号的ID。
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
    * @param string $domainId 数据源产品所属账号的ID。
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
    *  数据源产品所属项目的ID。
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
    * @param string $projectId 数据源产品所属项目的ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets region
    *  数据源产品所在区域。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 数据源产品所在区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets companyName
    *  数据源产品所属公司的名称。
    *
    * @return string
    */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
    * Sets companyName
    *
    * @param string $companyName 数据源产品所属公司的名称。
    *
    * @return $this
    */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;
        return $this;
    }

    /**
    * Gets productName
    *  数据源产品的名称。
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
    * @param string $productName 数据源产品的名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
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

