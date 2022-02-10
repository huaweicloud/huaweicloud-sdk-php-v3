<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFreeResourceInfosReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFreeResourceInfosReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionCode  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    * orderId  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    * productId  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    * productName  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * status  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionCode' => 'string',
            'orderId' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionCode  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    * orderId  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    * productId  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    * productName  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * status  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionCode' => null,
        'orderId' => null,
        'productId' => null,
        'productName' => null,
        'enterpriseProjectId' => null,
        'status' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * regionCode  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    * orderId  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    * productId  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    * productName  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * status  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionCode' => 'region_code',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionCode  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    * orderId  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    * productId  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    * productName  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * status  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @var string[]
    */
    protected static $setters = [
            'regionCode' => 'setRegionCode',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionCode  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    * orderId  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    * productId  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    * productName  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * status  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @var string[]
    */
    protected static $getters = [
            'regionCode' => 'getRegionCode',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'status' => 'getStatus',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 256)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 4)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets regionCode
    *  |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode |参数名称：云服务区编码，例如：“cn-north-1”。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。|
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets orderId
    *  |参数名称：订单ID。| |参数约束及描述：订单ID。|
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId |参数名称：订单ID。| |参数约束及描述：订单ID。|
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets productId
    *  |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
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
    * @param string|null $productId |参数名称：产品ID，即资源包ID。| |参数约束及描述：产品ID，即资源包ID。|
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName |参数名称：产品名称，即资源包名称。| |参数约束及描述：产品名称，即资源包名称。|
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status |参数名称：状态：0：未生效1：生效中2：已用完3：已失效4：已退订| |参数的约束及描述：状态：0：未生效1：生效中2：已用完3：已失效4：已退订|
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit |参数名称：每次查询的数量限制。默认值为10。| |参数的约束及描述：每次查询的数量限制。默认值为10。|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

