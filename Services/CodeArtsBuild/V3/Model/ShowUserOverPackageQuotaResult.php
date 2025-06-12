<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserOverPackageQuotaResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserOverPackageQuota_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isOverQuota  套餐超期
    * buildQuota  构建套餐
    * usedQuota  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isOverQuota' => 'bool',
            'buildQuota' => 'string',
            'usedQuota' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isOverQuota  套餐超期
    * buildQuota  构建套餐
    * usedQuota  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isOverQuota' => null,
        'buildQuota' => null,
        'usedQuota' => null
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
    * isOverQuota  套餐超期
    * buildQuota  构建套餐
    * usedQuota  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isOverQuota' => 'is_over_quota',
            'buildQuota' => 'build_quota',
            'usedQuota' => 'used_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isOverQuota  套餐超期
    * buildQuota  构建套餐
    * usedQuota  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @var string[]
    */
    protected static $setters = [
            'isOverQuota' => 'setIsOverQuota',
            'buildQuota' => 'setBuildQuota',
            'usedQuota' => 'setUsedQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isOverQuota  套餐超期
    * buildQuota  构建套餐
    * usedQuota  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @var string[]
    */
    protected static $getters = [
            'isOverQuota' => 'getIsOverQuota',
            'buildQuota' => 'getBuildQuota',
            'usedQuota' => 'getUsedQuota'
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
        $this->container['isOverQuota'] = isset($data['isOverQuota']) ? $data['isOverQuota'] : null;
        $this->container['buildQuota'] = isset($data['buildQuota']) ? $data['buildQuota'] : null;
        $this->container['usedQuota'] = isset($data['usedQuota']) ? $data['usedQuota'] : null;
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
    * Gets isOverQuota
    *  套餐超期
    *
    * @return bool|null
    */
    public function getIsOverQuota()
    {
        return $this->container['isOverQuota'];
    }

    /**
    * Sets isOverQuota
    *
    * @param bool|null $isOverQuota 套餐超期
    *
    * @return $this
    */
    public function setIsOverQuota($isOverQuota)
    {
        $this->container['isOverQuota'] = $isOverQuota;
        return $this;
    }

    /**
    * Gets buildQuota
    *  构建套餐
    *
    * @return string|null
    */
    public function getBuildQuota()
    {
        return $this->container['buildQuota'];
    }

    /**
    * Sets buildQuota
    *
    * @param string|null $buildQuota 构建套餐
    *
    * @return $this
    */
    public function setBuildQuota($buildQuota)
    {
        $this->container['buildQuota'] = $buildQuota;
        return $this;
    }

    /**
    * Gets usedQuota
    *  已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @return string|null
    */
    public function getUsedQuota()
    {
        return $this->container['usedQuota'];
    }

    /**
    * Sets usedQuota
    *
    * @param string|null $usedQuota 已使用的套餐用量，套餐为unlimit时无此信息
    *
    * @return $this
    */
    public function setUsedQuota($usedQuota)
    {
        $this->container['usedQuota'] = $usedQuota;
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

