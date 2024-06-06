<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateServerlessPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateServerlessPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minVcpus  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    * maxVcpus  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minVcpus' => 'int',
            'maxVcpus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minVcpus  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    * maxVcpus  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minVcpus' => 'int32',
        'maxVcpus' => 'int32'
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
    * minVcpus  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    * maxVcpus  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minVcpus' => 'min_vcpus',
            'maxVcpus' => 'max_vcpus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minVcpus  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    * maxVcpus  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'minVcpus' => 'setMinVcpus',
            'maxVcpus' => 'setMaxVcpus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minVcpus  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    * maxVcpus  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'minVcpus' => 'getMinVcpus',
            'maxVcpus' => 'getMaxVcpus'
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
        $this->container['minVcpus'] = isset($data['minVcpus']) ? $data['minVcpus'] : null;
        $this->container['maxVcpus'] = isset($data['maxVcpus']) ? $data['maxVcpus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['minVcpus'] === null) {
            $invalidProperties[] = "'minVcpus' can't be null";
        }
        if ($this->container['maxVcpus'] === null) {
            $invalidProperties[] = "'maxVcpus' can't be null";
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
    * Gets minVcpus
    *  单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @return int
    */
    public function getMinVcpus()
    {
        return $this->container['minVcpus'];
    }

    /**
    * Sets minVcpus
    *
    * @param int $minVcpus 单节点VCPUs伸缩下限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @return $this
    */
    public function setMinVcpus($minVcpus)
    {
        $this->container['minVcpus'] = $minVcpus;
        return $this;
    }

    /**
    * Gets maxVcpus
    *  单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @return int
    */
    public function getMaxVcpus()
    {
        return $this->container['maxVcpus'];
    }

    /**
    * Sets maxVcpus
    *
    * @param int $maxVcpus 单节点VCPUs伸缩上限，取值范围可根据[查询数据库规格](https://support.huaweicloud.com/api-gaussdb/ShowGaussMySqlFlavors.html)接口获取。
    *
    * @return $this
    */
    public function setMaxVcpus($maxVcpus)
    {
        $this->container['maxVcpus'] = $maxVcpus;
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

