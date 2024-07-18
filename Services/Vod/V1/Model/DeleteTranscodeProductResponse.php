<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteTranscodeProductResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteTranscodeProductResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID
    * status  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    * deletedProducts  删除成功的产物
    * failedProducts  删除失败的产物
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'status' => 'string',
            'deletedProducts' => '\HuaweiCloud\SDK\Vod\V1\Model\ProductGroupInfo[]',
            'failedProducts' => '\HuaweiCloud\SDK\Vod\V1\Model\ProductGroupDelFailInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID
    * status  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    * deletedProducts  删除成功的产物
    * failedProducts  删除失败的产物
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'status' => null,
        'deletedProducts' => null,
        'failedProducts' => null
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
    * assetId  媒资ID
    * status  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    * deletedProducts  删除成功的产物
    * failedProducts  删除失败的产物
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'status' => 'status',
            'deletedProducts' => 'deleted_products',
            'failedProducts' => 'failed_products'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID
    * status  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    * deletedProducts  删除成功的产物
    * failedProducts  删除失败的产物
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'status' => 'setStatus',
            'deletedProducts' => 'setDeletedProducts',
            'failedProducts' => 'setFailedProducts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID
    * status  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    * deletedProducts  删除成功的产物
    * failedProducts  删除失败的产物
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'status' => 'getStatus',
            'deletedProducts' => 'getDeletedProducts',
            'failedProducts' => 'getFailedProducts'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    const STATUS_PARTIAL_SUCCESS = 'PARTIAL_SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_PARTIAL_SUCCESS,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deletedProducts'] = isset($data['deletedProducts']) ? $data['deletedProducts'] : null;
        $this->container['failedProducts'] = isset($data['failedProducts']) ? $data['failedProducts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets assetId
    *  媒资ID
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 媒资ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets status
    *  SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status SUCCESS：成功 FAIL：失败 PARTIAL_SUCCESS：部分成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets deletedProducts
    *  删除成功的产物
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ProductGroupInfo[]|null
    */
    public function getDeletedProducts()
    {
        return $this->container['deletedProducts'];
    }

    /**
    * Sets deletedProducts
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ProductGroupInfo[]|null $deletedProducts 删除成功的产物
    *
    * @return $this
    */
    public function setDeletedProducts($deletedProducts)
    {
        $this->container['deletedProducts'] = $deletedProducts;
        return $this;
    }

    /**
    * Gets failedProducts
    *  删除失败的产物
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ProductGroupDelFailInfo[]|null
    */
    public function getFailedProducts()
    {
        return $this->container['failedProducts'];
    }

    /**
    * Sets failedProducts
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ProductGroupDelFailInfo[]|null $failedProducts 删除失败的产物
    *
    * @return $this
    */
    public function setFailedProducts($failedProducts)
    {
        $this->container['failedProducts'] = $failedProducts;
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

