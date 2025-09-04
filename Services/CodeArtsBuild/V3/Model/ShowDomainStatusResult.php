<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainStatusResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainStatus_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    * freeQuota  是否包含免费额度
    * allowCustomEnv  是否启用自定义环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'float',
            'freeQuota' => 'bool',
            'allowCustomEnv' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    * freeQuota  是否包含免费额度
    * allowCustomEnv  是否启用自定义环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'freeQuota' => null,
        'allowCustomEnv' => null
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
    * status  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    * freeQuota  是否包含免费额度
    * allowCustomEnv  是否启用自定义环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'freeQuota' => 'free_quota',
            'allowCustomEnv' => 'allow_custom_env'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    * freeQuota  是否包含免费额度
    * allowCustomEnv  是否启用自定义环境
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'freeQuota' => 'setFreeQuota',
            'allowCustomEnv' => 'setAllowCustomEnv'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    * freeQuota  是否包含免费额度
    * allowCustomEnv  是否启用自定义环境
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'freeQuota' => 'getFreeQuota',
            'allowCustomEnv' => 'getAllowCustomEnv'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['freeQuota'] = isset($data['freeQuota']) ? $data['freeQuota'] : null;
        $this->container['allowCustomEnv'] = isset($data['allowCustomEnv']) ? $data['allowCustomEnv'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets status
    *  租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    *
    * @return float|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param float|null $status 租户状态0:未开通; 1:正常; 2:冻结; 3:关闭; 4、5:注销
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets freeQuota
    *  是否包含免费额度
    *
    * @return bool|null
    */
    public function getFreeQuota()
    {
        return $this->container['freeQuota'];
    }

    /**
    * Sets freeQuota
    *
    * @param bool|null $freeQuota 是否包含免费额度
    *
    * @return $this
    */
    public function setFreeQuota($freeQuota)
    {
        $this->container['freeQuota'] = $freeQuota;
        return $this;
    }

    /**
    * Gets allowCustomEnv
    *  是否启用自定义环境
    *
    * @return float|null
    */
    public function getAllowCustomEnv()
    {
        return $this->container['allowCustomEnv'];
    }

    /**
    * Sets allowCustomEnv
    *
    * @param float|null $allowCustomEnv 是否启用自定义环境
    *
    * @return $this
    */
    public function setAllowCustomEnv($allowCustomEnv)
    {
        $this->container['allowCustomEnv'] = $allowCustomEnv;
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

