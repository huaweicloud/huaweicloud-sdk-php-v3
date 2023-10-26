<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqUpdateHpcCacheData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqUpdateHpcCacheData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gcTime  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    * ckTime  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    * nas  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    * obs  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gcTime' => 'int',
            'ckTime' => 'int',
            'nas' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigNasTarget[]',
            'obs' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigObsTarget[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gcTime  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    * ckTime  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    * nas  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    * obs  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gcTime' => 'int64',
        'ckTime' => 'int64',
        'nas' => null,
        'obs' => null
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
    * gcTime  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    * ckTime  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    * nas  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    * obs  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gcTime' => 'gc_time',
            'ckTime' => 'ck_time',
            'nas' => 'nas',
            'obs' => 'obs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gcTime  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    * ckTime  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    * nas  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    * obs  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @var string[]
    */
    protected static $setters = [
            'gcTime' => 'setGcTime',
            'ckTime' => 'setCkTime',
            'nas' => 'setNas',
            'obs' => 'setObs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gcTime  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    * ckTime  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    * nas  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    * obs  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @var string[]
    */
    protected static $getters = [
            'gcTime' => 'getGcTime',
            'ckTime' => 'getCkTime',
            'nas' => 'getNas',
            'obs' => 'getObs'
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
        $this->container['gcTime'] = isset($data['gcTime']) ? $data['gcTime'] : null;
        $this->container['ckTime'] = isset($data['ckTime']) ? $data['ckTime'] : null;
        $this->container['nas'] = isset($data['nas']) ? $data['nas'] : null;
        $this->container['obs'] = isset($data['obs']) ? $data['obs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gcTime'] === null) {
            $invalidProperties[] = "'gcTime' can't be null";
        }
        if ($this->container['ckTime'] === null) {
            $invalidProperties[] = "'ckTime' can't be null";
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
    * Gets gcTime
    *  冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    *
    * @return int
    */
    public function getGcTime()
    {
        return $this->container['gcTime'];
    }

    /**
    * Sets gcTime
    *
    * @param int $gcTime 冷数据淘汰时间。单位：小时。指定时间内线上缓存的数据如果没有被访问则会自动从缓存中删除。0表示数据不会因为时间原因自动从缓存中删除。
    *
    * @return $this
    */
    public function setGcTime($gcTime)
    {
        $this->container['gcTime'] = $gcTime;
        return $this;
    }

    /**
    * Gets ckTime
    *  后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    *
    * @return int
    */
    public function getCkTime()
    {
        return $this->container['ckTime'];
    }

    /**
    * Sets ckTime
    *
    * @param int $ckTime 后端校验时间。单位：秒。指定时间间隔进行线上缓存文件与后端存储文件比较，存在变化则自动更新。0表示文件进行实时校验。
    *
    * @return $this
    */
    public function setCkTime($ckTime)
    {
        $this->container['ckTime'] = $ckTime;
        return $this;
    }

    /**
    * Gets nas
    *  配置 nas 后端的信息, 和 obs 字段为二选一的关系
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigNasTarget[]|null
    */
    public function getNas()
    {
        return $this->container['nas'];
    }

    /**
    * Sets nas
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigNasTarget[]|null $nas 配置 nas 后端的信息, 和 obs 字段为二选一的关系
    *
    * @return $this
    */
    public function setNas($nas)
    {
        $this->container['nas'] = $nas;
        return $this;
    }

    /**
    * Gets obs
    *  配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigObsTarget[]|null
    */
    public function getObs()
    {
        return $this->container['obs'];
    }

    /**
    * Sets obs
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ConfigObsTarget[]|null $obs 配置 obs 后端的信息, 和 nas 字段为二选一的关系
    *
    * @return $this
    */
    public function setObs($obs)
    {
        $this->container['obs'] = $obs;
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

