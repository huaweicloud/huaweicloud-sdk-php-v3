<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetActionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetActionResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retStatus  处理状态。 * SUCCESS：成功 * FAILED：失败
    * assetIds  资产ID列表
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retStatus' => 'string',
            'assetIds' => 'string[]',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retStatus  处理状态。 * SUCCESS：成功 * FAILED：失败
    * assetIds  资产ID列表
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retStatus' => null,
        'assetIds' => null,
        'errorInfo' => null
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
    * retStatus  处理状态。 * SUCCESS：成功 * FAILED：失败
    * assetIds  资产ID列表
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retStatus' => 'ret_status',
            'assetIds' => 'asset_ids',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retStatus  处理状态。 * SUCCESS：成功 * FAILED：失败
    * assetIds  资产ID列表
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'retStatus' => 'setRetStatus',
            'assetIds' => 'setAssetIds',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retStatus  处理状态。 * SUCCESS：成功 * FAILED：失败
    * assetIds  资产ID列表
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'retStatus' => 'getRetStatus',
            'assetIds' => 'getAssetIds',
            'errorInfo' => 'getErrorInfo'
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
    const RET_STATUS_SUCCESS = 'SUCCESS';
    const RET_STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetStatusAllowableValues()
    {
        return [
            self::RET_STATUS_SUCCESS,
            self::RET_STATUS_FAILED,
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
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRetStatusAllowableValues();
                if (!is_null($this->container['retStatus']) && !in_array($this->container['retStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['retStatus']) && (mb_strlen($this->container['retStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'retStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['retStatus']) && (mb_strlen($this->container['retStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'retStatus', the character length must be bigger than or equal to 1.";
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
    * Gets retStatus
    *  处理状态。 * SUCCESS：成功 * FAILED：失败
    *
    * @return string|null
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string|null $retStatus 处理状态。 * SUCCESS：成功 * FAILED：失败
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
        return $this;
    }

    /**
    * Gets assetIds
    *  资产ID列表
    *
    * @return string[]|null
    */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
    * Sets assetIds
    *
    * @param string[]|null $assetIds 资产ID列表
    *
    * @return $this
    */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

