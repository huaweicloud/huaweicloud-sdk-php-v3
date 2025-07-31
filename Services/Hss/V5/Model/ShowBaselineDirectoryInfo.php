<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBaselineDirectoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBaselineDirectoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * dataList  基线检查策略三级目录信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'standard' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfoDataList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * dataList  基线检查策略三级目录信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'standard' => null,
        'dataList' => null
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
    * type  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * dataList  基线检查策略三级目录信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'standard' => 'standard',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * dataList  基线检查策略三级目录信息
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'standard' => 'setStandard',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    * standard  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    * dataList  基线检查策略三级目录信息
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'standard' => 'getStandard',
            'dataList' => 'getDataList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^.*$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^.*$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^.*$/.";
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
    * Gets type
    *  根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 根据select_type不同的值，得到不同的含义 - 当select_type为check_type，该字段代表check_type（基线的名称） - 当select_type为tag，该字段代表tag（基线检查项的类型）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets standard
    *  标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard 标准类型，包含如下:   - cn_standard : 等保合规标准   - hw_standard : 云安全实践标准   - cis_standard : 通用安全标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets dataList
    *  基线检查策略三级目录信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfoDataList[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowBaselineDirectoryInfoDataList[]|null $dataList 基线检查策略三级目录信息
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

