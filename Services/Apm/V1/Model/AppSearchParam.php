<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppSearchParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppSearchParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessId  应用id。
    * region  区域名称。
    * page  页码。
    * pageSize  每页条数。
    * keyword  关键字。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessId' => 'int',
            'region' => 'string',
            'page' => 'int',
            'pageSize' => 'int',
            'keyword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessId  应用id。
    * region  区域名称。
    * page  页码。
    * pageSize  每页条数。
    * keyword  关键字。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessId' => 'int64',
        'region' => null,
        'page' => 'int32',
        'pageSize' => 'int32',
        'keyword' => null
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
    * businessId  应用id。
    * region  区域名称。
    * page  页码。
    * pageSize  每页条数。
    * keyword  关键字。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessId' => 'business_id',
            'region' => 'region',
            'page' => 'page',
            'pageSize' => 'page_size',
            'keyword' => 'keyword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessId  应用id。
    * region  区域名称。
    * page  页码。
    * pageSize  每页条数。
    * keyword  关键字。
    *
    * @var string[]
    */
    protected static $setters = [
            'businessId' => 'setBusinessId',
            'region' => 'setRegion',
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'keyword' => 'setKeyword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessId  应用id。
    * region  区域名称。
    * page  页码。
    * pageSize  每页条数。
    * keyword  关键字。
    *
    * @var string[]
    */
    protected static $getters = [
            'businessId' => 'getBusinessId',
            'region' => 'getRegion',
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'keyword' => 'getKeyword'
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
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['businessId'] === null) {
            $invalidProperties[] = "'businessId' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
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
    * Gets businessId
    *  应用id。
    *
    * @return int
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets region
    *  区域名称。
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
    * @param string $region 区域名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets page
    *  页码。
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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

