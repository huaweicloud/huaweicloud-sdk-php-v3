<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  产品ID。
    * productSpecDesc  产品规格描述。
    * categoryCode  产品目录编码。
    * productOwnerService  产品归属的云服务类型编码。
    * commercialResource  商务归属的资源类型编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'productSpecDesc' => 'string',
            'categoryCode' => 'string',
            'productOwnerService' => 'string',
            'commercialResource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  产品ID。
    * productSpecDesc  产品规格描述。
    * categoryCode  产品目录编码。
    * productOwnerService  产品归属的云服务类型编码。
    * commercialResource  商务归属的资源类型编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'productSpecDesc' => null,
        'categoryCode' => null,
        'productOwnerService' => null,
        'commercialResource' => null
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
    * productId  产品ID。
    * productSpecDesc  产品规格描述。
    * categoryCode  产品目录编码。
    * productOwnerService  产品归属的云服务类型编码。
    * commercialResource  商务归属的资源类型编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'productSpecDesc' => 'product_spec_desc',
            'categoryCode' => 'category_code',
            'productOwnerService' => 'product_owner_service',
            'commercialResource' => 'commercial_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  产品ID。
    * productSpecDesc  产品规格描述。
    * categoryCode  产品目录编码。
    * productOwnerService  产品归属的云服务类型编码。
    * commercialResource  商务归属的资源类型编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'productSpecDesc' => 'setProductSpecDesc',
            'categoryCode' => 'setCategoryCode',
            'productOwnerService' => 'setProductOwnerService',
            'commercialResource' => 'setCommercialResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  产品ID。
    * productSpecDesc  产品规格描述。
    * categoryCode  产品目录编码。
    * productOwnerService  产品归属的云服务类型编码。
    * commercialResource  商务归属的资源类型编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'productSpecDesc' => 'getProductSpecDesc',
            'categoryCode' => 'getCategoryCode',
            'productOwnerService' => 'getProductOwnerService',
            'commercialResource' => 'getCommercialResource'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['productOwnerService'] = isset($data['productOwnerService']) ? $data['productOwnerService'] : null;
        $this->container['commercialResource'] = isset($data['commercialResource']) ? $data['commercialResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productSpecDesc']) && (mb_strlen($this->container['productSpecDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'productSpecDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['productSpecDesc']) && (mb_strlen($this->container['productSpecDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'productSpecDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['categoryCode']) && (mb_strlen($this->container['categoryCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'categoryCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productOwnerService']) && (mb_strlen($this->container['productOwnerService']) > 64)) {
                $invalidProperties[] = "invalid value for 'productOwnerService', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productOwnerService']) && (mb_strlen($this->container['productOwnerService']) < 0)) {
                $invalidProperties[] = "invalid value for 'productOwnerService', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commercialResource']) && (mb_strlen($this->container['commercialResource']) > 64)) {
                $invalidProperties[] = "invalid value for 'commercialResource', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commercialResource']) && (mb_strlen($this->container['commercialResource']) < 0)) {
                $invalidProperties[] = "invalid value for 'commercialResource', the character length must be bigger than or equal to 0.";
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
    * Gets productId
    *  产品ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品规格描述。
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc 产品规格描述。
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
        return $this;
    }

    /**
    * Gets categoryCode
    *  产品目录编码。
    *
    * @return string|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string|null $categoryCode 产品目录编码。
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
        return $this;
    }

    /**
    * Gets productOwnerService
    *  产品归属的云服务类型编码。
    *
    * @return string|null
    */
    public function getProductOwnerService()
    {
        return $this->container['productOwnerService'];
    }

    /**
    * Sets productOwnerService
    *
    * @param string|null $productOwnerService 产品归属的云服务类型编码。
    *
    * @return $this
    */
    public function setProductOwnerService($productOwnerService)
    {
        $this->container['productOwnerService'] = $productOwnerService;
        return $this;
    }

    /**
    * Gets commercialResource
    *  商务归属的资源类型编码。
    *
    * @return string|null
    */
    public function getCommercialResource()
    {
        return $this->container['commercialResource'];
    }

    /**
    * Sets commercialResource
    *
    * @param string|null $commercialResource 商务归属的资源类型编码。
    *
    * @return $this
    */
    public function setCommercialResource($commercialResource)
    {
        $this->container['commercialResource'] = $commercialResource;
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

