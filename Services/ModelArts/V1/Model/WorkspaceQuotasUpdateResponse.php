<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkspaceQuotasUpdateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkspaceQuotasUpdateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxQuota  配额允许设置的最大值。
    * updateTime  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    * resource  资源的唯一标识。
    * quota  当前配额值。配额值为-1代表不限制配额。
    * minQuota  配额允许设置的最小值。
    * nameCn  配额名称[（中文）](tag:hc,hk)。
    * unitCn  数量单位[（中文）](tag:hc,hk)。
    * nameEn  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    * unitEn  数量单位(英文)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxQuota' => 'int',
            'updateTime' => 'int',
            'resource' => 'string',
            'quota' => 'int',
            'minQuota' => 'int',
            'nameCn' => 'string',
            'unitCn' => 'string',
            'nameEn' => 'string',
            'unitEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxQuota  配额允许设置的最大值。
    * updateTime  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    * resource  资源的唯一标识。
    * quota  当前配额值。配额值为-1代表不限制配额。
    * minQuota  配额允许设置的最小值。
    * nameCn  配额名称[（中文）](tag:hc,hk)。
    * unitCn  数量单位[（中文）](tag:hc,hk)。
    * nameEn  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    * unitEn  数量单位(英文)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxQuota' => null,
        'updateTime' => 'int64',
        'resource' => null,
        'quota' => null,
        'minQuota' => null,
        'nameCn' => null,
        'unitCn' => null,
        'nameEn' => null,
        'unitEn' => null
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
    * maxQuota  配额允许设置的最大值。
    * updateTime  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    * resource  资源的唯一标识。
    * quota  当前配额值。配额值为-1代表不限制配额。
    * minQuota  配额允许设置的最小值。
    * nameCn  配额名称[（中文）](tag:hc,hk)。
    * unitCn  数量单位[（中文）](tag:hc,hk)。
    * nameEn  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    * unitEn  数量单位(英文)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxQuota' => 'max_quota',
            'updateTime' => 'update_time',
            'resource' => 'resource',
            'quota' => 'quota',
            'minQuota' => 'min_quota',
            'nameCn' => 'name_cn',
            'unitCn' => 'unit_cn',
            'nameEn' => 'name_en',
            'unitEn' => 'unit_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxQuota  配额允许设置的最大值。
    * updateTime  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    * resource  资源的唯一标识。
    * quota  当前配额值。配额值为-1代表不限制配额。
    * minQuota  配额允许设置的最小值。
    * nameCn  配额名称[（中文）](tag:hc,hk)。
    * unitCn  数量单位[（中文）](tag:hc,hk)。
    * nameEn  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    * unitEn  数量单位(英文)。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxQuota' => 'setMaxQuota',
            'updateTime' => 'setUpdateTime',
            'resource' => 'setResource',
            'quota' => 'setQuota',
            'minQuota' => 'setMinQuota',
            'nameCn' => 'setNameCn',
            'unitCn' => 'setUnitCn',
            'nameEn' => 'setNameEn',
            'unitEn' => 'setUnitEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxQuota  配额允许设置的最大值。
    * updateTime  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    * resource  资源的唯一标识。
    * quota  当前配额值。配额值为-1代表不限制配额。
    * minQuota  配额允许设置的最小值。
    * nameCn  配额名称[（中文）](tag:hc,hk)。
    * unitCn  数量单位[（中文）](tag:hc,hk)。
    * nameEn  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    * unitEn  数量单位(英文)。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxQuota' => 'getMaxQuota',
            'updateTime' => 'getUpdateTime',
            'resource' => 'getResource',
            'quota' => 'getQuota',
            'minQuota' => 'getMinQuota',
            'nameCn' => 'getNameCn',
            'unitCn' => 'getUnitCn',
            'nameEn' => 'getNameEn',
            'unitEn' => 'getUnitEn'
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
        $this->container['maxQuota'] = isset($data['maxQuota']) ? $data['maxQuota'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['minQuota'] = isset($data['minQuota']) ? $data['minQuota'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['unitCn'] = isset($data['unitCn']) ? $data['unitCn'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['unitEn'] = isset($data['unitEn']) ? $data['unitEn'] : null;
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
    * Gets maxQuota
    *  配额允许设置的最大值。
    *
    * @return int|null
    */
    public function getMaxQuota()
    {
        return $this->container['maxQuota'];
    }

    /**
    * Sets maxQuota
    *
    * @param int|null $maxQuota 配额允许设置的最大值。
    *
    * @return $this
    */
    public function setMaxQuota($maxQuota)
    {
        $this->container['maxQuota'] = $maxQuota;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 最后修改时间，UTC。如用户未修改过该资源配额,则该值默认为该工作空间的创建时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets resource
    *  资源的唯一标识。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 资源的唯一标识。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets quota
    *  当前配额值。配额值为-1代表不限制配额。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 当前配额值。配额值为-1代表不限制配额。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets minQuota
    *  配额允许设置的最小值。
    *
    * @return int|null
    */
    public function getMinQuota()
    {
        return $this->container['minQuota'];
    }

    /**
    * Sets minQuota
    *
    * @param int|null $minQuota 配额允许设置的最小值。
    *
    * @return $this
    */
    public function setMinQuota($minQuota)
    {
        $this->container['minQuota'] = $minQuota;
        return $this;
    }

    /**
    * Gets nameCn
    *  配额名称[（中文）](tag:hc,hk)。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 配额名称[（中文）](tag:hc,hk)。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets unitCn
    *  数量单位[（中文）](tag:hc,hk)。
    *
    * @return string|null
    */
    public function getUnitCn()
    {
        return $this->container['unitCn'];
    }

    /**
    * Sets unitCn
    *
    * @param string|null $unitCn 数量单位[（中文）](tag:hc,hk)。
    *
    * @return $this
    */
    public function setUnitCn($unitCn)
    {
        $this->container['unitCn'] = $unitCn;
        return $this;
    }

    /**
    * Gets nameEn
    *  工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 工作空间ID，系统生成的32位UUID，不带橫线。默认的工作空间id为'0'。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets unitEn
    *  数量单位(英文)。
    *
    * @return string|null
    */
    public function getUnitEn()
    {
        return $this->container['unitEn'];
    }

    /**
    * Sets unitEn
    *
    * @param string|null $unitEn 数量单位(英文)。
    *
    * @return $this
    */
    public function setUnitEn($unitEn)
    {
        $this->container['unitEn'] = $unitEn;
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

