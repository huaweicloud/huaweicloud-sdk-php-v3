<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaStatisticsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaStatisticsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'totalNum' => 'int32'
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
    * version  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    * totalNum  总数
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'totalNum' => 'getTotalNum'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets version
    *  资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 资源规格编码，包含如下:   - hss.version.basic : 基础版   - hss.version.advanced : 专业版   - hss.version.enterprise : 企业版   - hss.version.premium : 旗舰版   - hss.version.wtp : 网页防篡改版   - hss.version.container : 容器版
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets totalNum
    *  总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

