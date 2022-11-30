<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    * assets  媒资列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'assets' => '\HuaweiCloud\SDK\Vod\V1\Model\AssetSummary[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    * assets  媒资列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'assets' => null
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
    * total  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    * assets  媒资列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'assets' => 'assets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    * assets  媒资列表
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'assets' => 'setAssets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    * assets  媒资列表
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'assets' => 'getAssets'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['assets'] = isset($data['assets']) ? $data['assets'] : null;
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
    * Gets total
    *  媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 媒资总数  > 暂只能统计2万个媒资，若您需要查询具体的媒资总数，请提交工单申请。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets assets
    *  媒资列表
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AssetSummary[]|null
    */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
    * Sets assets
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AssetSummary[]|null $assets 媒资列表
    *
    * @return $this
    */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;
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

